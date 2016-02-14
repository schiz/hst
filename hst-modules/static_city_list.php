<?php
$sth = $dbh->query("SELECT id, name FROM hst_city");
$city_list = $sth->fetchAll(PDO::FETCH_KEY_PAIR);

$smarty->assign('city_options', $city_list);
?>