<?php
if (!isset($_SESSION['statistics'])) {
	die('only for admins');
}

# Отримання данних для виводу статистики

define('USERS_MAX', 5000); 			# максимум користувачів
define('COMPANIES_MAX', 10000); 		# максимум компаній
define('REVIEWS_MAX', 500); 		# максимум відгуків

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users");
$users = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE reg_date >= DATE_SUB(CURDATE(), INTERVAL 1 DAY)");
$new_users_day = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE reg_date >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK)");
$new_users_week = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE reg_date >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)");
$new_users_month = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE male = 1");
$boys = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE male = 0");
$girls = $sth->fetchColumn();

# Далі йде код отримання значень для 9-ти вікових групп

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE TIMESTAMPDIFF(YEAR,dob,CURDATE()) BETWEEN 15 AND 20");
$age_1 = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE TIMESTAMPDIFF(YEAR,dob,CURDATE()) BETWEEN 21 AND 25");
$age_2 = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE TIMESTAMPDIFF(YEAR,dob,CURDATE()) BETWEEN 15 AND 20");
$age_3 = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE TIMESTAMPDIFF(YEAR,dob,CURDATE()) BETWEEN 26 AND 30");
$age_4 = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE TIMESTAMPDIFF(YEAR,dob,CURDATE()) BETWEEN 31 AND 35");
$age_5 = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE TIMESTAMPDIFF(YEAR,dob,CURDATE()) BETWEEN 36 AND 40");
$age_6 = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE TIMESTAMPDIFF(YEAR,dob,CURDATE()) BETWEEN 41 AND 45");
$age_7 = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE TIMESTAMPDIFF(YEAR,dob,CURDATE()) BETWEEN 46 AND 50");
$age_8 = $sth->fetchColumn();

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE TIMESTAMPDIFF(YEAR,dob,CURDATE()) BETWEEN 51 AND 55");
$age_9 = $sth->fetchColumn();

# Он-лайн

$sth = $dbh->prepare("SELECT COUNT(DISTINCT ip) FROM hst_online WHERE session = 1");
$sth->execute();
$session_online =  $sth->fetchColumn();

# Компанії

$sth = $dbh->prepare("SELECT COUNT(id) FROM hst_company");
$sth->execute();
$companies =  $sth->fetchColumn();

$sth = $dbh->prepare("SELECT COUNT(id) FROM hst_company WHERE reg_date >= DATE_SUB(CURDATE(), INTERVAL 1 DAY)");
$sth->execute();
$company_day = $sth->fetchColumn();

$sth = $dbh->prepare("SELECT COUNT(id) FROM hst_company WHERE reg_date >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK)");
$sth->execute();
$company_week = $sth->fetchColumn();

$sth = $dbh->prepare("SELECT COUNT(id) FROM hst_company WHERE reg_date >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)");
$sth->execute();
$company_month = $sth->fetchColumn();

# Відгуки

$sth = $dbh->prepare("SELECT COUNT(id) FROM hst_reviews WHERE review_date >= DATE_SUB(CURDATE(), INTERVAL 1 DAY)");
$sth->execute();
$review_day = $sth->fetchColumn();

$sth = $dbh->prepare("SELECT COUNT(id) FROM hst_reviews WHERE review_date >= DATE_SUB(CURDATE(), INTERVAL 1 WEEK)");
$sth->execute();
$review_week = $sth->fetchColumn();

$sth = $dbh->prepare("SELECT COUNT(id) FROM hst_reviews WHERE review_date >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)");
$sth->execute();
$review_month = $sth->fetchColumn();

# Дані за минулий місяць

$sth = $dbh->query("SELECT COUNT(id) FROM hst_users WHERE reg_date BETWEEN date_format(NOW() - INTERVAL 1 MONTH, '%Y-%m-01') AND last_day(NOW() - INTERVAL 1 MONTH)");
$users_last_month = $sth->fetchColumn();

$difference = $new_users_month - $users_last_month;

$stat = array(
	'users' => $users,
	'new_users_month' => $new_users_month,
	'new_users_week' => $new_users_week,
	'new_users_day' => $new_users_day,
	'boys' => $boys, 
	'girls' => $girls,
	'age_1' => $age_1,
	'age_2' => $age_2,
	'age_3' => $age_3,
	'age_4' => $age_4,
	'age_5' => $age_5,
	'age_6' => $age_6,
	'age_7' => $age_7,
	'age_8' => $age_8,
	'age_9' => $age_9,
	'total_online' => $total_online,
	'session_online' => $session_online,
	'companies' => $companies,
	'guests' => $total_online - $session_online,
	'company_week' => $company_week,
	'company_month' => $company_month,
	'company_day' => $company_day,
	'review_day' => $review_day,
	'review_week' => $review_week,
	'review_month' => $review_month,
	'difference_month' => $difference
);

# Отримати відсоткове значення

$stat['users_percent'] = 100 * $stat['users'] / USERS_MAX;
$stat['new_users_month_percent'] = 100 * $stat['new_users_month'] / $users;
$stat['new_users_week_percent'] = 100 * $stat['new_users_week'] / $users;
$stat['new_users_day_percent'] = 100 * $stat['new_users_day'] / $users;
$stat['boys_percent'] = 100 * $stat['boys'] / $users;
$stat['girls_percent'] = 100 * $stat['girls'] / $users;
$stat['age_1_percent'] = 100 * $stat['age_1'] / $users;
$stat['age_2_percent'] = 100 * $stat['age_2'] / $users;
$stat['age_3_percent'] = 100 * $stat['age_3'] / $users;
$stat['age_4_percent'] = 100 * $stat['age_4'] / $users;
$stat['age_5_percent'] = 100 * $stat['age_5'] / $users;
$stat['age_6_percent'] = 100 * $stat['age_6'] / $users;
$stat['age_7_percent'] = 100 * $stat['age_7'] / $users;
$stat['age_8_percent'] = 100 * $stat['age_8'] / $users;
$stat['age_9_percent'] = 100 * $stat['age_9'] / $users;
$stat['total_online_percent'] = 100 * $stat['total_online'] / $users;
$stat['session_online_percent'] = 100 * $stat['session_online'] / $users;
$stat['companies_percent'] = 100 * $stat['companies'] / COMPANIES_MAX;
$stat['guests_percent'] = 100 * $stat['guests'] / $users;
$stat['company_week_percent'] = 100 * $stat['company_week'] / COMPANIES_MAX;
$stat['company_month_percent'] = 100 * $stat['company_month'] / COMPANIES_MAX;
$stat['company_day_percent'] = 100 * $stat['company_day'] / COMPANIES_MAX;
$stat['review_day_percent'] = 100 * $stat['review_day'] / REVIEWS_MAX;
$stat['review_week_percent'] = 100 * $stat['review_week'] / REVIEWS_MAX;
$stat['review_month_percent'] = 100 * $stat['review_month'] / REVIEWS_MAX;
$stat['difference_month_percent'] = 100 * $stat['difference_month'] / $new_users_month;

$smarty->assign('stat', $stat);
?>