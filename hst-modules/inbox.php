<?php
# Відобразити вхідні повідомлення

if (!isset($_SESSION['user_id'])) {
	header('Location: index.php?p=error');
	die;
}

# Видалення

if (isset($_GET['m']) && $_GET['m']=='delete' && isset($_GET['t'])) {
	$sth = $dbh->prepare("UPDATE hst_mail SET deleted = 1 WHERE send_time = ? AND to_user = ?");
	$sth->execute(array($_GET['t'], $_SESSION['user_id']));
}

$sth = $dbh->prepare("SELECT send_time, (SELECT login FROM hst_users WHERE id = from_user) as from_login, to_user, subject, message FROM hst_mail WHERE to_user = ? AND deleted = 0");
$sth->execute(array($_SESSION['user_id']));
$inbox = $sth->fetchAll(PDO::FETCH_ASSOC);

// var_dump($inbox);
$smarty->assign('inbox', $inbox);
?>