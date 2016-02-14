<?php
if (!isset($_SESSION['user_id'])) {
	header('Location: index.php?p=error');
	die;
}

include "static_city_list.php";
$smarty->assign('city_id', $_POST['city']);

$days  = array(
	1 => 'Понедельник',
	2 => 'Вторник',
	3 => 'Среда',
	4 => 'Четверг',
	5 => 'Пятница',
	6 => 'Суббота',
	7 => 'Воскресенье');

$smarty->assign('start_day_options', $days);
$smarty->assign('start_day_id', $_POST['start_day']);

$smarty->assign('end_day_options', $days);
$smarty->assign('end_day_id', $_POST['end_day']);

$sth = $dbh->prepare("SELECT id, name FROM hst_catalog WHERE parent_id <> 0"); # виводити лише підкатегорії
$sth->execute();
$rubrics = $sth->fetchAll(PDO::FETCH_KEY_PAIR);
if (!empty($rubrics)) {
	$smarty->assign('rubric_options', $rubrics);
	$smarty->assign('rubric_id', $_POST['rubric']);
}

$hours  = array();
for ($i=7; $i<=20; $i++) {
	$hours[$i] = $i;
}
# Отримали массив з годинами роботи, формуємо селектбокси
$smarty->assign('start_hour_options', $hours);
$smarty->assign('start_hour_id', $_POST['start_hour']);

$smarty->assign('end_hour_options', $hours);
$smarty->assign('end_hour_id', $_POST['end_hour']);

$mins  = array();
for ($i=0; $i<=50; $i+=10) {
	$mins[$i] = sprintf("%02s", $i);
}
# Отримали массив з годинами роботи, формуємо селектбокси
$smarty->assign('start_min_options', $mins);
$smarty->assign('start_min_id', $_POST['start_min']);

$smarty->assign('end_min_options', $mins);
$smarty->assign('end_min_id', $_POST['end_min']);


# заливка фотки

if (!empty($_FILES)) {
	if (!empty($_FILES['file'])) {
		# Заливка фотки
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
		    $targetPath = dirname( __FILE__ ) . '/../upload/company/'; 
		    $extension = substr($_FILES['file']['name'], strpos($_FILES['file']['name'], '.')); # TODO: Переробити на pathinfo()
		    $new_file_name = uniqid() . $extension;
		    $targetFile =  $targetPath. $new_file_name; 
		    move_uploaded_file($tempFile,$targetFile); 
		    $_SESSION['target_file'] = '/upload/company/'.$new_file_name;
		 }
	}

	# Заливка баннера

		if ($_FILES['banner_file']['name'] != '') {
		# Заливка фотки
		$allow = true;
		$blacklist = array(".php", ".phtml", ".php3", ".php4", ".ht");
		 foreach ($blacklist as $item) {
		  if(preg_match("/$item\$/i", $_FILES['banner_file']['name'])) {
		   $allow = false;
		   }
		  }

		$imageinfo = getimagesize($_FILES['banner_file']['tmp_name']);
		 if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg' && $imageinfo['mime'] != 'image/png') {
		  $allow = false;
		 }  

		 if ($allow) {
		 	# Заливка відбувається тільки у випадку, якщо файл є картинкою!
		 	$tempFile = $_FILES['banner_file']['tmp_name'];          
		    $targetPath = dirname( __FILE__ ) . '/../upload/banner/'; 
		    $extension = substr($_FILES['banner_file']['name'], strpos($_FILES['banner_file']['name'], '.')); # TODO: Переробити на pathinfo()
		    $new_file_name = uniqid() . $extension;
		    $targetFile =  $targetPath. $new_file_name; 
		    move_uploaded_file($tempFile,$targetFile); 
		    $_SESSION['banner_file'] = '/upload/banner/'.$new_file_name;
		 }
	}
	
	#
	# Заливка товарів
	#

	if (!empty($_FILES['product_file'])) {
		$product_images = array();
		# Залити всі картинки товарів в папку з товарами
		$count = 0;
		$targetPath = dirname( __FILE__ ) . '/../upload/tovar/'; 
		foreach ($_FILES['product_file']['name'] as $filename) {
	        $tempFile = $_FILES['product_file']['tmp_name'][$count];

	        $filename_parts = pathinfo($filename); 
	        $extension = $filename_parts['extension']; 
	    	$new_file_name = uniqid() .'.'. $extension;
	    	$targetFile =  $targetPath. $new_file_name; 
	        move_uploaded_file($tempFile,$targetFile);
	        # Записати в масив для подальшого додавання в БД
	        if ($filename != '') {
	        	$product_images[$count] = '/upload/tovar/'.$new_file_name; 
	        }       	
	        $tempFile = '';
	        $targetFile = '';
	        $count++;
		}
	}	

	 # Заливка доп. матеріалів

	if (!empty($_FILES['material_file'])) {
		$material_images = array();
		# Залити всі картинки матеріалів в папку з матеріалами
		$count = 0;
		$targetPath = dirname( __FILE__ ) . '/../upload/material/'; 
		foreach ($_FILES['material_file']['name'] as $filename) {
	        $tempFile = $_FILES['material_file']['tmp_name'][$count];

	        $filename_parts = pathinfo($filename); 
	        $extension = $filename_parts['extension']; 
	    	$new_file_name = uniqid() .'.'. $extension;
	    	$targetFile =  $targetPath. $new_file_name; 
	        move_uploaded_file($tempFile,$targetFile);
	        # Записати в масив для подальшого додавання в БД
	        if ($filename != '') {
	        	$material_images[$count] = '/upload/material/'.$new_file_name; 
	        }       	
	        $tempFile = '';
	        $targetFile = '';
	        $count++;
		}
	}	

}

if ($_SESSION['target_file'] && $allow) {
	$smarty->assign('thumbnail', '<img src="'.$_SESSION['target_file'].'" />');
}

# Обробка даних
$data = array($_POST['name'], $_SESSION['user_id'], $_POST['rubric'], $_POST['descr_short'], $_POST['descr_long'], $_POST['city'], 
			  $_POST['subdomain'], $_POST['address'], $_POST['phone'], $_POST['fax'], $_POST['email'], 
			  $_POST['site'], $_POST['start_day'], $_POST['end_day'], $_POST['start_hour'], $_POST['start_min'], 
			  $_POST['end_hour'], $_POST['end_min'], $_POST['keywords'], $_POST['position'], $_POST['rec_code']
			  ); # масив для вставки в бд

foreach ($data as $v) {
	if (!isset($v)) {
		$check_form = false;
		break;
	} else {
		$check_form = true;
	}
}

if ($check_form) {
	# Додаємо дані до бази
	if ($_POST['name'] == '') {
		$smarty->assign('message', 'Не заполнено поле с названием');
	} elseif ($_POST['subdomain'] == '') {
		$smarty->assign('message', 'Не заполнено поле с желаемым именем страницы');
	} else {
		$photo_url = (isset($_SESSION['target_file'])) ? $_SESSION['target_file'] : '';
		$data[] = $photo_url;
		$sth = $dbh->prepare("INSERT INTO hst_company (name, user_id, rubric, descr_short, descr_long, city, 
													   subdomain, address, phone, fax, email, 
													   site, start_day, end_day, start_hour, start_min, 
													   end_hour, end_min, keywords, position, rec_code, photo_url, reg_date) VALUES (?, ?, ?, ?, ?, ?, 
													   																	   ?, ?, ?, ?, ?,
													   																	   ?, ?, ?, ?, ?,
													   																	   ?, ?, ?, ?, ?,
													   																	   ?, now())");
		$sth->execute($data);
		$id = $dbh->lastInsertId();
		unset($_SESSION['target_file']);

		# Додати інформацію про товари і доп. матеріали.

		# Додавання товарів в бд
		if (isset($_POST['product_description']) && isset($product_images)) {
			foreach($_POST['product_description'] as $k=>$v) {
				if ($v != '') {
					$sth = $dbh->prepare("INSERT INTO hst_tovar (photo_url, descr, company_id) VALUES (?, ?, ?)");
					$sth->execute(array($product_images[$k], $v, $id));
				}
				
			}
		}

		# Додавання матеріалів в бд
		if (isset($_POST['material_description']) && isset($_POST['material_title']) && isset($material_images)) {
			foreach($_POST['material_description'] as $k=>$v) {
				if ($v != '') {
					$sth = $dbh->prepare("INSERT INTO hst_material (name, `date`, descr, company_id, file_url) VALUES (?, now(), ?, ?, ?)");
					$sth->execute(array($_POST['material_title'][$k], $v, $id, $material_images[$k]));
				}
				
			}
		}

		# Додавання баннера

		if (isset($_SESSION['banner_file'])) {
			$sth = $dbh->prepare("UPDATE hst_company SET banner = ? WHERE id = ?");
			$sth->execute(array($_SESSION['banner_file'], $id));
		}

		// # Оновити кількість компаній
		// $sth = $dbh->prepare("SELECT parent_id FROM hst_catalog WHERE id= ?");
		// $sth->execute(array($_POST['rubric']));
		// $parent_id = $sth->fetchColumn(); # Номер батьківської категорії

		// $sth = $dbh->prepare("UPDATE hst_catalog SET count = count + 1 WHERE id = ?");
		// $sth->execute(array($parent_id));

		

		header('Location: index.php?p=success_add');
	}
}


?>