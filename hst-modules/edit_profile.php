<?php

if (!isset($_SESSION['user_id'])) {
	header('Location: index.php?p=error');
	die;
}

# Вибірка даних про користувача

$sth = $dbh->prepare("SELECT fio, login, password, male, dob, phone, mail, city, address, photo_url FROM hst_users WHERE id = ? LIMIT 0,1");
$sth->execute(array($_SESSION['user_id']));
$user = $sth->fetch(PDO::FETCH_ASSOC);
# Отримали ассоціативний массив з інфою користувача

$smarty->assign('user', $user);

include "static_months_list.php";

include "static_city_list.php";
$smarty->assign('city_id', isset($_POST['city']) ? $_POST['city'] : $user['city']);

# Встановити значення полів
$smarty->assign('selected_male', isset($_POST['male']) ? $_POST['male'] : $user['male']);

# Виводити дату з бази
if (!isset($_POST['Day'])) {
	$date = strtotime($user['dob']);
	// echo date('m', $date); die;
	$month_number = date('n', $date);
	// echo $month_number; die; 
	$smarty->assign('month_id', $month_number);
	$smarty->assign('selected_time', $date);
}

## Код обробки форми і додавання в базу
if (isset($_POST['fio'], $_POST['login'], $_POST['password1'], $_POST['password2'], 
	$_POST['male'], $_POST['Day'], $_POST['Month'], $_POST['Year'],
	$_POST['phone'], $_POST['mail'], $_POST['city'], $_POST['address'])) {



	$day_with_zero = sprintf("%02s", $_POST['Day']);

	$time = mktime(0, 0, 0, $_POST['Month'], $day_with_zero, $_POST['Year']);
	$dob = date('Y-m-d', $time);

	// $date = strtotime($day_with_zero.'/'.$_POST['Month'].'/'.$_POST['Year']);
	$selecting_time = date('Y-d-m', $time);
	# Необхідно для збереження значення дати при перезагрузці форми.
	$smarty->assign('selected_time', $selecting_time);
	# Необхідно для збереження значення статі при перезагрузці форми.
	$smarty->assign('selected_male', $_POST['male']);




	if ($_POST['password1'] != $_POST['password2']) {
		$smarty->assign('message', 'Проверьте совпадение паролей');
	} elseif ($_POST['login'] == '') {
		$smarty->assign('message', 'Не заполнено поле с логином');
	} elseif ($_POST['fio'] == '') {
		$smarty->assign('message', 'Не заполнено поле с именем');
	} elseif (!preg_match('/(\d)+/', $_POST['phone'])) {
		$smarty->assign('message', 'Не заполнено поле с номером телефона');
	} elseif (!preg_match('/.*?@.*?/', $_POST['mail'])) {
		$smarty->assign('message', 'Не заполнено поле с электронной почтой');
	} else {
		#$password = md5($_POST['password1']);
		// $dob = date('Y-m-d', $date);
		$photo_url = (isset($_SESSION['target_file'])) ? $_SESSION['target_file'] : '';
		$data = array($_POST['fio'], $_POST['login'], $_POST['male'], $dob, $_POST['phone'], $_POST['mail'], $_POST['city'], $_POST['address'], $photo_url, $_SESSION['user_id']); 
		$sth = $dbh->prepare("UPDATE hst_users SET fio=?, login=?, male=?, dob=?, phone=?, mail=?, city=?, address=?, photo_url=? WHERE id=?");
		$sth->execute($data);

		# Якщо вказано пароль, то обновити.
		if (isset($_POST['password1']) && $_POST['password1'] != '') {
			$sth = $dbh->prepare("UPDATE hst_users SET password=? WHERE id=?");
			$sth->execute(array(md5($_POST['password']), $_SESSION['user_id']));
		}

		if (isset($_SESSION['from_admin'])) {
			# Редагування проводилося адміном
			unset($_SESSION['from_admin']);
			unset($_SESSION['user_id']);
			header('Location: /admin/index.php?p=edit_user');
		} else {
			header('Location: index.php?p=cabinet');
		}

	}
	
}


if (!empty($_FILES)) {
	$allow = true;
	$blacklist = array(".php", ".phtml", ".php3", ".php4", ".ht");
	 foreach ($blacklist as $item) {
	  if(preg_match("/$item\$/i", $_FILES['file']['name'])) {
	   $allow = false;
	   }
	  }

	$imageinfo = getimagesize($_FILES['file']['tmp_name']);
	 if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg' && $imageinfo['mime'] != 'image/png') {
	  $allow = false;
	 }  

	if ($allow) {
		# Заливка відбувається тільки у випадку, якщо файл є картинкою!
		$tempFile = $_FILES['file']['tmp_name'];          
	    $targetPath = dirname( __FILE__ ) . '/../upload/photos/'; 
	    $extension = substr($_FILES['file']['name'], strpos($_FILES['file']['name'], '.')); 
	    $new_file_name = uniqid() . $extension;
	    $targetFile =  $targetPath. $new_file_name; 
	    move_uploaded_file($tempFile,$targetFile); 
	    $_SESSION['target_file'] = '/upload/photos/'.$new_file_name;
	}

}


if (isset($_SESSION['target_file'])) {
	$smarty->assign('thumbnail', '<img src="'.$_SESSION['target_file'].'" />');
	$photo_url = $_SESSION['target_file'];	
} else {
	$smarty->assign('thumbnail', '<img src="'.$user['photo_url'].'" />');
}

?>