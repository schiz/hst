<?php
# при виборі підкатегорії з правого меню відображтиметься "Оновлення" для цієї підкатегорії.

if (isset($_GET['subcat'])) {
	$sub = (int) $_GET['subcat'];
	$and = "WHERE disable <> 1 AND rubric = $sub ";
} else {
	$and = '';
}


# Отримати список останніх 21 доданих компаній

$sth = $dbh->prepare("SELECT id, 
							name, 
							descr_short, 
							photo_url, 
							subdomain, 
							reviews_count,
							(SELECT AVG(mark) FROM hst_reviews WHERE hst_reviews.company = hst_company.id AND hst_reviews.moderated = 1) AS avg_mark 
					  FROM hst_company $and
					  ORDER BY id DESC
					  LIMIT 0, 21
");
$sth->execute();
$last_added = $sth->fetchAll(PDO::FETCH_ASSOC);
// var_dump($last_added);

$smarty->assign('last_added', $last_added);
?>