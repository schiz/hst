<?php

include "static_months_list.php";

include "static_city_list.php";
$smarty->assign('city_id', $_POST['city']);

# Код обробки форми і додавання в базу
if (isset($_POST['fio'], $_POST['login'], $_POST['password1'], $_POST['password2'], 
	$_POST['male'], $_POST['Day'], $_POST['Month'], $_POST['Year'],
	$_POST['phone'], $_POST['email'], $_POST['city'], $_POST['address'])) {


	$day_with_zero = sprintf("%02s", $_POST['Day']);
	$date = strtotime($day_with_zero.'/'.$_POST['Month'].'/'.$_POST['Year']);
	$selecting_time = date('Y-d-m', $date);
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
	} elseif ($_POST['password1'] == '') {
		$smarty->assign('message', 'Не заполнено поле с паролем');
	} elseif (!preg_match('/(\d)+/', $_POST['phone'])) {
		$smarty->assign('message', 'Не заполнено поле с номером телефона');
	} elseif (!preg_match('/.*?@.*?/', $_POST['email'])) {
		$smarty->assign('message', 'Не заполнено поле с электронной почтой');
	} else {
		# MD5
		$password = md5($_POST['password1']);
		$dob = date('Y-m-d', $date);
		$photo_url = (isset($_SESSION['target_file'])) ? $_SESSION['target_file'] : '';
		$data = array($_POST['fio'], $_POST['login'], $password, $_POST['male'], $dob, $_POST['phone'], $_POST['email'], $_POST['city'], $_POST['address'], $photo_url); 
		$sth = $dbh->prepare("INSERT INTO hst_users (fio, login, password, male, dob, phone, mail, city, address, photo_url, reg_date) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
		$sth->execute($data);
		// $sth->debugDumpParams();
		# перенаправити при успіху
		# перехід на "Добавить компанию"
		if (isset($_POST['add_company'])) {
			header('Location: index.php?p=add_company');	
		} else {
			header('Location: index.php?p=success_reg');
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


if ($_SESSION['target_file'] && $allow) {
	$smarty->assign('thumbnail', '<img src="'.$_SESSION['target_file'].'" />');
}

?>