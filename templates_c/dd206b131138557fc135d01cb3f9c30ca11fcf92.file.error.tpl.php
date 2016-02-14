<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 13:18:36
         compiled from ".\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246152286336ece5d9-05439602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd206b131138557fc135d01cb3f9c30ca11fcf92' => 
    array (
      0 => '.\\templates\\error.tpl',
      1 => 1379067506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246152286336ece5d9-05439602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52286337016067_63883587',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52286337016067_63883587')) {function content_52286337016067_63883587($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ("aside_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
				Только зарегистрированные пользователи могут совершать это действие.<br /><br />
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>