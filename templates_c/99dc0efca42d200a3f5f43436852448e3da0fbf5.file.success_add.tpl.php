<?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 11:28:03
         compiled from ".\templates\success_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:847052285d0b5a0b65-25493855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99dc0efca42d200a3f5f43436852448e3da0fbf5' => 
    array (
      0 => '.\\templates\\success_add.tpl',
      1 => 1379067863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '847052285d0b5a0b65-25493855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52285d0b93e125_86455289',
  'variables' => 
  array (
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52285d0b93e125_86455289')) {function content_52285d0b93e125_86455289($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
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