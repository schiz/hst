<?php
$timeout = 600; # 10 хвилин

$sth = $dbh->prepare("SELECT id FROM hst_online WHERE ip=? AND session = 1");
$sth->execute(array($_SERVER['REMOTE_ADDR']));

if ($sth->rowCount() == 0) {
	# Записати факт відвідування сайту
	$sth = $dbh->prepare("INSERT INTO hst_online (id, ip, time, session) VALUES ('', ?, UNIX_TIMESTAMP(), ?)");
	$session = (isset($_SESSION['user_id'])) ? 1 : 0;
	$sth->execute(array($_SERVER['REMOTE_ADDR'], $session));
}

$expiry = time() - $timeout;
$sth = $dbh->prepare("DELETE FROM hst_online WHERE time < ?"); # видалити запис про відвідування
$sth->execute(array($expiry));

$sth = $dbh->prepare("SELECT COUNT(DISTINCT ip) FROM hst_online");
$sth->execute();
$total_online = $sth->fetchColumn();
?>