<?php
session_start();
// echo getcwd();
include "../mysql.php";

$_SESSION['statistics'] = true; # Для доступу до сторінок сайту
$_SESSION['is_admin'] = true; # Для субдомену

# Отримати список розділів

$sth = $dbh->prepare("SELECT id, name FROM hst_catalog WHERE parent_id = 0");
$sth->execute();
$category = $sth->fetchAll();
// var_dump($category);

$p = (isset($_GET['p'])) ? $_GET['p'] : '';
switch ($p) {
  case '':
    $text = "<p>Здесь можно редактировать, добавлять, удалять разделы каталога</p>
            <p><a href='index.php?p=add_category'>Добавить раздел</a></p>";
    include "catalog.php";
    break;
  case 'city':
    $text = "<p>Здесь можно редактировать, добавлять, удалять список городов</p>";
    include "city.php";
    break;
  case 'edit_city':
    $text = "<p>Редактировать город</p>";
    include "edit_city.php";
    break;
  case 'feedback':
    $text = "<p>Здесь можно просматривать заявки, оставленные через форму обратной связи</p><br />";
    include "feedback.php";
    break;
  case 'add_category':
    $text = "<p>Страница добавления категории</p>";
    include "add_category.php";
    break;
  case 'edit_category':
    $text = "<p>Страница редактирования категории</p>";
    include "edit_category.php";
    break;
  case 'edit_company':
    $text = "<p>Страница редактирования компании</p>";
    include "edit_company.php";
    break;
  case 'edit_user':
    $text = "<p>Страница редактирования пользователя</p>";
    include "edit_user.php";
    break;
  case 'edit_views':
    $text = "<p>Страница редактирования рейтинга (количества просмотров компаний)</p>";
    include "edit_views.php";
    break;  
  case 'edit_b':
    $text = "<p>Страница редактирования рекламных баннеров.</p>";
    include "edit_b.php";
    break;   
  case 'review':
    $text = "<p>Страница редактирования отзывов.</p>";
    include "review.php";
    break;  
  case 'settings':
    $text = "<p>Страница настроек</p>";
    include "settings.php";
    break;                
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Админ панель HST</title>
    <style type="text/css">body{padding-top:60px;padding-bottom:40px;}.sidebar-nav{padding:9px 0;}</style>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.php">HST</a>
          <div class="nav-collapse collapse">
          <p class="navbar-text pull-right">
          Пользователь: <a href="#" class="navbar-link">admin</a>
          </p>
          <ul class="nav">
            <!-- <li class="active"><a href="#">Home</a></li> -->
            <li><a href="/">На сайт</a></li>
          </ul>
          </div> 
        </div>
      </div>
    </div>
    <div class="container-fluid">
    <div class="row-fluid">
    <div class="span3">
    <div class="well sidebar-nav">
    <ul class="nav nav-list">
    <li class="nav-header">Управление сайтом</li>
    <li <?php if ($p == '') echo 'class="active"' ?>><a href="index.php">Разделы</a></li>
    <li <?php if ($p == 'city') echo 'class="active"' ?>><a href="index.php?p=city">Список городов</a></li>
    <li <?php if ($p == 'feedback') echo 'class="active"' ?>><a href="index.php?p=feedback">Обратная связь</a></li>
    <li <?php if ($p == 'settings') echo 'class="active"' ?>><a href="index.php?p=settings">Настройки</a></li>
    <li class="nav-header">Редактирование</li>
    <li <?php if ($p == 'edit_company') echo 'class="active"' ?>><a href="index.php?p=edit_company">Редактировать компанию</a></li>
    <li <?php if ($p == 'edit_user') echo 'class="active"' ?>><a href="index.php?p=edit_user">Редактировать пользователя</a></li>
    <li <?php if ($p == 'edit_views') echo 'class="active"' ?>><a href="index.php?p=edit_views">Редактировать рейтинг</a></li>
    <li <?php if ($p == 'edit_b') echo 'class="active"' ?>><a href="index.php?p=edit_b">Редактировать баннеры</a></li>
    <li <?php if ($p == 'review') echo 'class="active"' ?>><a href="index.php?p=review">Модерировать отзывы</a></li>
    <li class="nav-header">Статистика</li>
    <li><a href="/index.php?p=statistics">Просмотр статистики</a></li>
    </ul>
    </div> 
    </div> 
    <div class="span9">
      <div class="hero-unit">
        <?php echo $text; ?>
      </div>
    </div> 
    </div> 
    <hr>
    <footer>
    <p>&copy; HST 2013</p>
    </footer>
    </div> 
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>