<?php
include "smarty.php";
include "mysql.php";
session_start();
include "cookies.php";
include "online.php";

# TODO: Відключити magic_quotes

include "companies_count.php";

# Баннери

if (file_exists('upload/adm-banner/vertical.png')) {
	$smarty->assign('vertical', true);
}

if (file_exists('upload/adm-banner/horizontal.png')) {
	$smarty->assign('horizontal', true);
}

# Шлях
if (isset($_GET['subcat'])) {
	$sth = $dbh->prepare("SELECT name, parent_id FROM hst_catalog WHERE id = ?");
	$sth->execute(array($_GET['subcat']));
	
	$result = $sth->fetch(PDO::FETCH_ASSOC);
	$subcategory = $result['name'];
	$parent_id = $result['parent_id'];

	$sth = $dbh->prepare("SELECT name FROM hst_catalog WHERE id = ?");
	$sth->execute(array($parent_id));
	$category = $sth->fetchColumn();

	# breadcrumb
	$path_string = "<li><a href='/'>Каталог</a></li>
                    <li><a href='#'>$category</a></li>
                    <li>$subcategory</li>";
    $smarty->assign('path_string', $path_string);
}

# Отримання списку категорій 
$sth = $dbh->query("SELECT id, name, icon, parent_id, (SELECT COUNT(id) FROM hst_company WHERE hst_company.rubric = hst_catalog.id) AS count FROM hst_catalog WHERE parent_id = 0");
$category = $sth->fetchAll(PDO::FETCH_ASSOC);

$category_copy = array();
foreach ($category as $k=>$v) {
	$category_copy[$v['id']] = $v;
}

# Далі робота йде з копією масиву

// print_r($category_copy);

# Отримання списку підкатегорій

$sth = $dbh->query("SELECT id, name, icon, parent_id, (SELECT COUNT(id) FROM hst_company WHERE hst_company.rubric = hst_catalog.id) AS count FROM hst_catalog WHERE parent_id <> 0");
$subcategory = $sth->fetchAll(PDO::FETCH_ASSOC);
$smarty->assign('subcategory', $subcategory);
// print_r($subcategory);

foreach ($subcategory as $subitem) {
	$category_copy[$subitem['parent_id']]['subitems'][] = $subitem;
	$category_copy[$subitem['parent_id']]['real_count'] += $subitem['count'];
}

$smarty->assign('category', $category);
$smarty->assign('category_copy', $category_copy);
// print_r($category_copy);

# Массив сторінок
$pages = array('register' => array('title'=>'Регистрация'),
			   'success_reg' => array('title'=>'Регистрация успешна'),
			   'success_add' => array('title'=>'Добавлено'),
			   'error' => array('title'=>'Только для авторизированых пользователей'),
			   'cabinet' => array('title'=>'Личный кабинет'),
			   'add_company' => array('title'=>'Регистрация компании'),
			   'lost_password' => array('title'=>'Восстановление пароля'),
			   'edit_company' => array('title'=>'Редактор компании'),
			   'edit_profile' => array('title'=>'Редактировать информацию о себе'),
			   'inbox' => array('title'=>'Входящие'),
			   'compose' => array('title'=>'Новое сообщение'),
			   'trash' => array('title'=>'Удаленные'),
			   'outbox' => array('title'=>'Исходящие'),
			   'review' => array('title'=>'Отзывы'),
			   'review_edit' => array('title'=>'Редактирование отзыва'),
			   'feedback' => array('title'=>'Обратная связь'),
			   #'index' => array('title'=>'Главная'),
			   'subdomain_preview' => array('title'=>'Страница преварительного просмотра компании'),
			   'subdomain' => array('title'=>'Страница компании'),
			   'statistics' => array('title'=>'Статистика'),
			   'rating' => array('title'=>'Рейтинг'),
			   'updates' => array('title'=>'Обновления'),
			   'rating_all' => array('title'=>'Рейтинг (все компании)'),
			   'updates_all' => array('title'=>'Последние добавленные компании'),
			   'updates_last_all' => array('title'=>'Последние обновления'),
			   'search' => array('title'=>'Поиск по сайту'),
			   'user' => array('title'=>'Профиль пользователя'),
			   );


# Підключити сторінку

$request_page = (string) $_GET['p'];
if (array_key_exists($request_page, $pages)) {
	# Підключити відповідний модуль і шаблон

	include "hst-modules/$request_page.php";
	$smarty->assign('title', $pages[$request_page]['title']);
	$smarty->display("$request_page.tpl");


} else {
	# Підключити каталог
	include "hst-modules/catalog.php";
	$smarty->assign('title', 'Каталог');
	$smarty->display('index.tpl');
}
?>