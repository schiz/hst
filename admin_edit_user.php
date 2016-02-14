<?php
session_start();

if (!isset($_SESSION['from_admin'])) die('only for admins');

# Редагування користувача
if (isset($_GET['id'])) {
	# Зкопіювати сесію
	$_SESSION['user_id'] = $_GET['id'];
	include "smarty.php";
	include "mysql.php";
	include "companies_count.php";
	include "hst-modules/edit_profile.php";
	$smarty->assign('title', 'Редактирование пользователя');
	$smarty->display('edit_profile.tpl');
}


?>