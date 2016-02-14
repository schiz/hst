<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <title>{$title}</title>
    <meta charset="utf-8" > 
    <link rel="stylesheet" href="css/styles.css" >
	<script src="js/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/jquery.poshytip.js"></script>
    <!--[if lt IE 9]>
    	<link rel="stylesheet" href="css/ltie9.css" >
		<script type="text/javascript" src="js/ltie9.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="js/selectivizr.js"></script>
	<![endif]-->
    {if $domain}
    {* підключити скрипти для рейтингу *}
    <script type="text/javascript" src="js/jquery.rateit.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/rateit.css" media="screen" />
    {/if}
</head>
<body>