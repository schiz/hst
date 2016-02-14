<?php
# Відобразити вихідні повідомлення

if (!isset($_SESSION['user_id'])) {
	header('Location: index.php?p=error');
	die;
}

$sth = $dbh->prepare("SELECT send_time, (SELECT login FROM hst_users WHERE id = to_user) as to_login, subject, message FROM hst_mail WHERE from_user = ?");
$sth->execute(array($_SESSION['user_id']));
$outbox = $sth->fetchAll(PDO::FETCH_ASSOC);

// var_dump($outbox);
$smarty->assign('outbox', $outbox);
?>