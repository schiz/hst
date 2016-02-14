<?php
# при виборі підкатегорії з правого меню відображтиметься "каталог" для цієї підкатегорії.

if (isset($_GET['subcat'])) {
	$sub = (int) $_GET['subcat'];
	$and = "AND rubric = $sub";
} else {
	$and = '';
}

# Пагінатор

$perPage = 4;
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$startAt = $perPage * ($page - 1);

$sth = $dbh->prepare("SELECT COUNT(id) FROM hst_company WHERE disable <> 1 AND reviews_count > 0 $and");
$sth->execute();
$count = $sth->fetchColumn();

$totalPages = ceil($count / $perPage);

$links = "";
	if ($totalPages != 1) {
	for ($i = 1; $i <= $totalPages; $i++) {
	  $links .= ($i != $page ) 
	            ? "<a href='index.php?page=$i'>$i</a> &nbsp;&nbsp; "
	            : "$page ";
	}
}

# Отримати список компаній з найбільшою к-тю відгуків

$sth = $dbh->prepare("SELECT id, 
							name, 
							(SELECT name FROM hst_catalog WHERE hst_catalog.id = rubric) AS rubric_full_name, 
							descr_short, 
							photo_url, 
							subdomain, 
							update_text,
							reviews_count,
							(SELECT AVG(mark) FROM hst_reviews WHERE hst_reviews.company = hst_company.id AND hst_reviews.moderated = 1) AS avg_mark 
					  FROM hst_company 
					  WHERE disable <> 1 AND reviews_count > 0 $and
					  ORDER BY reviews_count DESC
					  LIMIT $startAt, $perPage
");
$sth->execute();
$best_companies = $sth->fetchAll(PDO::FETCH_ASSOC);
// $rows = $sth->чrowCount();

$smarty->assign('best_companies', $best_companies);
$smarty->assign('links', $links);

# Пагінатор

$perPage = 3;
$page = (isset($_GET['page_popular'])) ? (int)$_GET['page_popular'] : 1;
$startAt = $perPage * ($page - 1);

$sth = $dbh->prepare("SELECT COUNT(id) FROM hst_company WHERE disable <> 1 AND views > 0 $and");
$sth->execute();
$count = $sth->fetchColumn();

$totalPages = ceil($count / $perPage);

$links = "";
	if ($totalPages != 1) {
	for ($i = 1; $i <= $totalPages; $i++) {
	  $links .= ($i != $page ) 
	            ? "<a href='index.php?page_popular=$i'>$i</a> &nbsp;&nbsp; "
	            : "$page ";
	}
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
							reviews_count,
							(SELECT AVG(mark) FROM hst_reviews WHERE hst_reviews.company = hst_company.id AND hst_reviews.moderated = 1) AS avg_mark 
					  FROM hst_company 
					  WHERE disable <> 1 AND views > 0 $and
					  ORDER BY views DESC
					  LIMIT $startAt, $perPage
");
$sth->execute();
$popular_companies = $sth->fetchAll(PDO::FETCH_ASSOC);
// var_dump($popular_companies);

$smarty->assign('popular_companies', $popular_companies);
$smarty->assign('popular_links', $links);
?>