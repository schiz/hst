<?php
session_start();
include "mysql.php";
include "smarty.php";


//var_dump($_POST);die;

if (isset($_GET['logout'])) {
	$_SESSION['authorized'] = false;
	session_destroy();
	setcookie('login', '');
	setcookie('password', '');
	header('Location: index.php');
	die;
	# Здійснено вихід з системи.
}

$login = $_POST['login'];
$password = md5($_POST['password']);

$authorized = $dbh->prepare("SELECT id FROM hst_users WHERE login = ? AND password = ?");
$authorized->execute(array($login, $password));
#$authorized->debugDumpParams();
if ($authorized->rowCount() > 0) {
	$_SESSION['authorized'] = true;
	$_SESSION['user_id'] = $authorized->fetchColumn();
	if (isset($_POST['remember'])) {
		setcookie('login', $login, time() + 3600*24*30*12);
		setcookie('password', $password, time() + 3600*24*30*12);
	}
} else {
	$smarty->assign('message', 'Ошибка авторизации');
}
header('Location: index.php?p=cabinet');
?>