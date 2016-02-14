<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 06:08:01
         compiled from "./templates/success_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97301355552401301a8a334-88122749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2111058f9624b4366bae664aa987e99a44458452' => 
    array (
      0 => './templates/success_add.tpl',
      1 => 1379930494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97301355552401301a8a334-88122749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52401301ad7e79_44373891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52401301ad7e79_44373891')) {function content_52401301ad7e79_44373891($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ("aside_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
				<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<br /><br />
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>