<?php
# Кількість фірм

$sth = $dbh->query("SELECT COUNT(id) FROM hst_company");
$total_company = $sth->fetchColumn();
$smarty->assign('total_company', $total_company);
?>