<?php
$sth = $dbh->prepare("SELECT fio, male, TIMESTAMPDIFF(YEAR,dob,CURDATE()) AS age, dob, photo_url FROM hst_users WHERE id = ? LIMIT 0,1");
$sth->execute(array($_GET['id']));
$user = $sth->fetch(PDO::FETCH_ASSOC);

$smarty->assign('user', $user);
?>