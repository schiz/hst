<?php
# Пошук

if (isset($_POST['q'])) {
	# Пошук по компаніях
	$sth = $dbh->prepare("SELECT id, name, subdomain, descr_short FROM hst_company WHERE descr_short LIKE ? OR descr_long LIKE ? OR name LIKE ?");
	$search_query = '%'.$_POST['q'].'%';
	$sth->execute(array($search_query, $search_query, $search_query));

	$results = $sth->fetchAll(PDO::FETCH_ASSOC);
	$smarty->assign('results', $results);
	// var_dump($results);
}
?>