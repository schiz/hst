<?php /* Smarty version Smarty-3.1.14, created on 2013-09-19 11:58:31
         compiled from "..\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9889523abcb7148169-16757258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55ed6b4f266b986c43149d162d3e779b8d73ecc' => 
    array (
      0 => '..\\templates\\header.tpl',
      1 => 1379417769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9889523abcb7148169-16757258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523abcb72ea971_15746441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523abcb72ea971_15746441')) {function content_523abcb72ea971_15746441($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <title>Hst | <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <meta charset="utf-8" > 
    <link rel="stylesheet" href="css/styles.css" >
	<script type="text/javascript" src="js/dropzone.js"></script>
	
	<script src="js/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.poshytip.js"></script>
    
    <!--[if lt IE 9]>
    	<link rel="stylesheet" href="css/ltie9.css" >
		<script type="text/javascript" src="js/ltie9.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<!-- start mainarea -->
	<div id="mainarea">
		<!-- start header -->
		<header>
            <h1 id="logo">
            	<a href="index.php"></a>
                <span>Самый большой каталог компаний</span>
            </h1>
            
            <dl id="cabinet">
                <dt><b>Личный</b> кабинет</dt>
                <dd class="authorized <?php if ($_SESSION['authorized']!=true){?> hide <?php }?>">
                    <ul>
                        <li><a class="stats" href="index.php?p=statistics">Статистика</a></li>
                        <li><a class="control" href="index.php?p=cabinet">Управление</a></li>
                        <li><a class="logout" href="auth.php?logout=1">Выход</a></li>
                        <li class="last"></li>
                    </ul>
                </dd>
                <dd class="unauthorized <?php if ($_SESSION['authorized']==true){?> hide <?php }?>" >
                    <ul>
                        <li><a class="unauthorized-enter" href="#">Войти</a></li>
                        <li><a class="unauthorized-reg" href="index.php?p=register">зарегистрироваться</a></li>
                        <li class="last"></li>
                    </ul>
                    <div id="autorization-form">
                        <form action="auth.php" method="POST">
                        <input type="text" placeholder="Логин" id="login" name="login"/>
                        <input type="password" placeholder="Пароль" id="password" name="password"/>
                        <input type="checkbox" name="remember" value="true"> <span>запомнить меня</span>
                        <a href="#" class="submit">Войти<span></span></a>
                        <a href="index.php?p=lost_password">напомнить пароль</a>
                        </form>
                    </div>
                </dd>
                <dd class="last"></dd>
            </dl>
            
            <ul class="lang">
            	<li><a class="rus" href="#"></a></li>
            	<li><a class="eng" href="#"></a></li>
            </ul>
            
            <nav id="main_nav">
            	<ul>
                	<li><a href="/">Каталог<span></span></a></li>
                	<li <?php if ($_GET['p']=='updates'){?>class="active"<?php }?>><a href="index.php?p=updates">Обновления<span></span></a></li>
                	<li <?php if ($_GET['p']=='statistics'){?>class="active"<?php }?>><a href="index.php?p=statistics">Статистика<span></span></a></li>
                	<li <?php if ($_GET['p']=='rating'){?>class="active"<?php }?>><a href="index.php?p=rating">Рейтинг<span></span></a></li>
                	<li <?php if ($_GET['p']=='feedback'){?>class="active"<?php }?>><a href="index.php?p=feedback">Обратная связь<span></span></a></li>
                </ul>
            </nav>
            
            <form class="search" id="search_form" action="index.php?p=search" method="POST">
            	<div>
                	<a class="add_company" href="index.php?p=add_company">Добавить компанию<span></span></a>
                    
                    <div class="center">
                    	<input type="text" name="q" value="<?php echo $_POST['q'];?>
">
                        <p>Например, <a href="#">Поликлиника номер 5</a></p>
                    </div>
                    
                    <a href="#" class="find">Найти<span></span></a>
                    
                    <div class="last"></div>
                </div>
            </form>
		</header>
		<!-- end header -->
<?php }} ?>