<?php
include "mysql.php";
# Видалення товару (ajax)
if (isset($_POST['image']) && $_POST['type'] == 'product') {
	$sth = $dbh->prepare("DELETE FROM hst_tovar WHERE photo_url = ?");
	$sth->execute(array($_POST['image']));
	if (file_exists($_POST['image'])) {
		unlink($_POST['image']);
	}
}

# Видалення матеріалу (ajax)
if (isset($_POST['name'], $_POST['description']) && $_POST['name'] != ''  && $_POST['description'] != '' && $_POST['type'] == 'material') {
	$sth = $dbh->prepare("SELECT file_url FROM hst_material WHERE name = ? AND descr = ?");
	$sth->execute(array($_POST['name'], $_POST['description']));
	$file_url = $sth->fetchColumn();

	$sth = $dbh->prepare("DELETE FROM hst_material WHERE name = ? AND descr = ?");
	$sth->execute(array($_POST['name'], $_POST['description']));
	if (file_exists($file_url)) {
		unlink($file_url);
	}
}
?>