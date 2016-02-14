<?php
# при виборі підкатегорії з правого меню відображтиметься "каталог" для цієї підкатегорії.

if (isset($_GET['subcat'])) {
	$sub = (int) $_GET['subcat'];
	$and = "AND rubric = $sub";
} else {
	$and = '';
}

# Отримати список 3-х популярних компаній

$sth = $dbh->prepare("SELECT id, 
							name, 
							(SELECT photo_url FROM hst_catalog WHERE hst_catalog.id = rubric) as rubric_photo_url,
							(SELECT description FROM hst_catalog WHERE hst_catalog.id = rubric) as rubric_description,
							(SELECT name FROM hst_catalog WHERE hst_catalog.id = rubric) AS rubric_full_name, 
							descr_short, 
							photo_url, 
							subdomain, 
							update_text,
							reviews_count,
							(SELECT AVG(mark) FROM hst_reviews WHERE hst_reviews.company = hst_company.id AND hst_reviews.moderated = 1) AS avg_mark 
					  FROM hst_company 
					  WHERE disable <> 1 AND reviews_count > 0 $and
					  ORDER BY views DESC
");
$sth->execute();
$popular_companies = $sth->fetchAll(PDO::FETCH_ASSOC);
// var_dump($popular_companies);

$smarty->assign('popular_companies', $popular_companies);


?>