<?php

if (!isset($_SESSION['user_id'])) {
	header('Location: index.php?p=error');
	die;
}

$smarty->assign('show_edit_profile', 1);

include "static_city_list.php";

# Отримати список компаній
$sth = $dbh->prepare("SELECT id, 
							name, 
							(SELECT name FROM hst_catalog WHERE hst_catalog.id = rubric) AS rubric_full_name, 
							descr_short, 
							photo_url, 
							subdomain, 
							update_text, 
							reviews_count 
					FROM hst_company WHERE user_id = ? ");
$sth->execute(array($_SESSION['user_id']));

$companies = $sth->fetchAll();

$smarty->assign('companies', $companies);

$sth = $dbh->prepare("SELECT fio, male, TIMESTAMPDIFF(YEAR,dob,CURDATE()) AS age, dob, phone, mail, city, address, photo_url FROM hst_users WHERE id = ? LIMIT 0,1");
$sth->execute(array($_SESSION['user_id']));
$user = $sth->fetch(PDO::FETCH_ASSOC);
# Отримали ассоціативний массив з профілем користувача
# Присвоїти текстову назву міста
$user['city_name'] = $city_list[$user['city']];
$smarty->assign('user', $user);

# Отримати кількість повідомлень

$sth = $dbh->prepare("SELECT COUNT(*) FROM hst_mail WHERE to_user = ? AND deleted = 0");
$sth->execute(array($_SESSION['user_id']));
$inbox = $sth->fetchColumn();

$smarty->assign('inbox', $inbox);

$sth = $dbh->prepare("SELECT COUNT(*) FROM hst_mail WHERE from_user = ?");
$sth->execute(array($_SESSION['user_id']));
$outbox = $sth->fetchColumn();

$smarty->assign('outbox', $outbox);

$sth = $dbh->prepare("SELECT COUNT(*) FROM hst_mail WHERE to_user = ? AND deleted = 1");
$sth->execute(array($_SESSION['user_id']));
$deleted = $sth->fetchColumn();

$smarty->assign('deleted', $deleted);

# Отзиви
$sth = $dbh->prepare("SELECT id, (SELECT name FROM hst_company WHERE id=company) AS company_name, (SELECT subdomain FROM hst_company WHERE id=company) AS company_subdomain, mark, review_text, review_date FROM hst_reviews WHERE user = ? ");
$sth->execute(array($_SESSION['user_id']));

$reviews = $sth->fetchAll();
$smarty->assign('reviews', $reviews);
?>