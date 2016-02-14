<?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 17:14:47
         compiled from ".\templates\small-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27156523024ca46cbc3-15632683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8d50bbb94e432bf17c671a62a17ff5813dcdc98' => 
    array (
      0 => '.\\templates\\small-header.tpl',
      1 => 1378995111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27156523024ca46cbc3-15632683',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523024ca4749c7_11724222',
  'variables' => 
  array (
    'title' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523024ca4749c7_11724222')) {function content_523024ca4749c7_11724222($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
    <?php if ($_smarty_tpl->tpl_vars['domain']->value){?>
    
    <script type="text/javascript" src="js/jquery.rateit.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/rateit.css" media="screen" />
    <?php }?>
</head>
<body><?php }} ?>