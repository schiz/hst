<?php
session_start();

if (!isset($_SESSION['from_admin'])) die('only for admins');

# Редагування компанії
if (isset($_GET['id'], $_GET['user_id'])) {
	# Зкопіювати сесію
	$_SESSION['user_id'] = $_GET['user_id'];
	include "smarty.php";
	include "mysql.php";
	include "companies_count.php";
	include "hst-modules/edit_company.php";
	$smarty->assign('title', 'Редактирование компании');
	$smarty->display('edit_company.tpl');
}


?>