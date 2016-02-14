<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <title>Hst | {$title}</title>
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
                <dd class="authorized {if $smarty.session.authorized != true} hide {/if}">
                    <ul>
                        <!-- <li><a class="stats" href="index.php?p=statistics">Статистика</a></li> -->
                        <li><a class="control" href="index.php?p=cabinet">Управление</a></li>
                        <li><a class="logout" href="auth.php?logout=1">Выход</a></li>
                        <li class="last"></li>
                    </ul>
                </dd>
                <dd class="unauthorized {if $smarty.session.authorized == true} hide {/if}" >
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
            
<!--             <ul class="lang">
            	<li><a class="rus" href="#"></a></li>
            	<li><a class="eng" href="#"></a></li>
            </ul>
             -->
            <nav id="main_nav">
            	<ul>
                	<li><a href="/">Каталог<span></span></a></li>
                	<li {if $smarty.get.p=='updates'}class="active"{/if}><a href="index.php?p=updates">Обновления<span></span></a></li>
                	<!-- <li {if $smarty.get.p=='statistics'}class="active"{/if}><a href="index.php?p=statistics">Статистика<span></span></a></li> -->
                	<li {if $smarty.get.p=='rating'}class="active"{/if}><a href="index.php?p=rating">Рейтинг<span></span></a></li>
                	<li {if $smarty.get.p=='feedback'}class="active"{/if}><a href="index.php?p=feedback">Обратная связь<span></span></a></li>
                </ul>
            </nav>
            
            <form class="search" id="search_form" action="index.php?p=search" method="POST">
            	<div>
                	<a class="add_company" href="index.php?p=add_company">Добавить компанию<span></span></a>
                    
                    <div class="center">
                    	<input type="text" name="q" value="{$smarty.post.q}">
                        <p>Например, <a href="#">Поликлиника номер 5</a></p>
                    </div>
                    
                    <a href="#" class="find">Найти<span></span></a>
                    
                    <div class="last"></div>
                </div>
            </form>
		</header>
		<!-- end header -->
        {if $horizontal}
        <div id="horizontal">
            <img src="/upload/adm-banner/horizontal.png" />
        </div>
        {/if}