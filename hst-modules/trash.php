<?php

# Видалення

if (isset($_GET['m']) && $_GET['m']=='delete' && isset($_GET['t'])) {
	$sth = $dbh->prepare("DELETE FROM hst_mail WHERE deleted = 1 AND send_time = ? AND to_user = ?");
	$sth->execute(array($_GET['t'], $_SESSION['user_id']));
}

$sth = $dbh->prepare("SELECT send_time, (SELECT login FROM hst_users WHERE id = from_user) as from_login, to_user, subject, message FROM hst_mail WHERE to_user = ? AND deleted = 1");
$sth->execute(array($_SESSION['user_id']));
$delbox = $sth->fetchAll(PDO::FETCH_ASSOC);

// var_dump($delbox);
$smarty->assign('delbox', $delbox);
?>