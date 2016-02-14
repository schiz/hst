<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 11:49:54
         compiled from "./templates/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204603925152396322492ac6-15234133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c85a4816056c868d0c9a13b024bfd4b4a27cf0dd' => 
    array (
      0 => './templates/error.tpl',
      1 => 1379945201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204603925152396322492ac6-15234133',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52396322515752_43999180',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52396322515752_43999180')) {function content_52396322515752_43999180($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
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