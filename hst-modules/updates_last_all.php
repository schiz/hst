<?php
# при виборі підкатегорії з правого меню відображтиметься "Оновлення" для цієї підкатегорії.

if (isset($_GET['subcat'])) {
    $sub = (int) $_GET['subcat'];
    $and = "AND rubric = $sub";
} else {
    $and = '';
}

# Отримати список 20 останніх оновлень

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
                      WHERE disable <> 1 AND update_text <> '' $and
                      ORDER BY update_date DESC
                      LIMIT 0,20 
");
$sth->execute();
$last_updates = $sth->fetchAll(PDO::FETCH_ASSOC);

$smarty->assign('last_updates', $last_updates);

?>