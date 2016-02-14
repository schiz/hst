<?php
# Видалення

if (isset($_GET['horizontal_del'])) {
	unlink('../upload/adm-banner/horizontal.png');
	header('Location: index.php?p=edit_b');
}

if (isset($_GET['vertical_del'])) {
	unlink('../upload/adm-banner/vertical.png');
	header('Location: index.php?p=edit_b');
}

$text .= '
	<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
		<div class="control-group"><label class="control-label">Горизонтальный баннер (728x90) </label><div class="controls"><span class="btn btn-file"><input type="file" name="horizontal" /></span></div></div>
		<div class="control-group"><label class="control-label">Вертикальный баннер: (240x400) </label><div class="controls"><span class="btn btn-file"><input type="file" name="vertical" /></span></div></div>
		<div class="control-group">
		    <div class="controls">
		      <button type="submit" class="btn">Загрузить</button>
		    </div>
		</div>
	</form>
';

if (!empty($_FILES)) {
	$allow = true;
	$blacklist = array(".php", ".phtml", ".php3", ".php4", ".ht");
	 foreach ($blacklist as $item) {
	  if(preg_match("/$item\$/i", $_FILES['horizontal']['name'])) {
	   $allow = false;
	   }
	  if(preg_match("/$item\$/i", $_FILES['vertical']['name'])) {
	   $allow = false;
	   } 
	  }

	if ($_FILES['horizontal']['tmp_name'] != '') {
		$imageinfo = getimagesize($_FILES['horizontal']['tmp_name']);
		 if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg' && $imageinfo['mime'] != 'image/png') {
		  $allow = false;
		 }
	} 

	if ($_FILES['vertical']['tmp_name'] != '') {
		$imageinfo = getimagesize($_FILES['vertical']['tmp_name']);
		 if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg' && $imageinfo['mime'] != 'image/png') {
		  $allow = false;
		 }  
	}


	if ($allow) {
		# Заливка відбувається тільки у випадку, якщо файли є картинками!

		if ($_FILES['horizontal']['tmp_name'] != '') {
			$tempFile = $_FILES['horizontal']['tmp_name'];          
		    $targetPath = dirname( __FILE__ ) . '/../upload/adm-banner/'; 
		    $extension = substr($_FILES['horizontal']['name'], strpos($_FILES['horizontal']['name'], '.')); 
		    $new_file_name = 'horizontal.png';
		    $targetFile =  $targetPath. $new_file_name; 
		    #move_uploaded_file($tempFile,$targetFile);
		    imagepng(imagecreatefromstring(file_get_contents($tempFile)), $targetFile); 
		}

		if ($_FILES['vertical']['tmp_name'] != '') {
		    $tempFile = $_FILES['vertical']['tmp_name'];          
		    $targetPath = dirname( __FILE__ ) . '/../upload/adm-banner/'; 
		    $extension = substr($_FILES['vertical']['name'], strpos($_FILES['vertical']['name'], '.')); 
		    $new_file_name = 'vertical.png';
		    $targetFile =  $targetPath. $new_file_name; 
		    #move_uploaded_file($tempFile,$targetFile); 
		    imagepng(imagecreatefromstring(file_get_contents($tempFile)), $targetFile); 
		}
	}

}

$text .= 'Просмотр <br />';

if (file_exists('../upload/adm-banner/horizontal.png')) {
	$text .= '<a href="/upload/adm-banner/horizontal.png">Горизонтальный</a> <code><a href="index.php?p=edit_b&horizontal_del=1">Удалить</a></code><br />';
}

if (file_exists('../upload/adm-banner/vertical.png')) {
	$text .= '<a href="/upload/adm-banner/vertical.png">Вертикальный</a> <code><a href="index.php?p=edit_b&vertical_del=1">Удалить</a></code>';
}

?>