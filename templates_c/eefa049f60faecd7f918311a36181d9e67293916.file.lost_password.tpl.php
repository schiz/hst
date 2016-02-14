<?php /* Smarty version Smarty-3.1.14, created on 2013-10-17 06:59:20
         compiled from "./templates/lost_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2061658489525fc30893c376-63779657%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eefa049f60faecd7f918311a36181d9e67293916' => 
    array (
      0 => './templates/lost_password.tpl',
      1 => 1379945207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2061658489525fc30893c376-63779657',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'static_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525fc308995e87_58355962',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525fc308995e87_58355962')) {function content_525fc308995e87_58355962($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ("aside_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
                <?php if ($_smarty_tpl->tpl_vars['static_message']->value){?><strong><?php echo $_smarty_tpl->tpl_vars['static_message']->value;?>
</strong><?php }?>
				<form id="lost-password" action="" method="POST">
				Ваш е-mail, на который будет выслан новый пароль:
				
				<br />
				<input type="text" name="email" value="<?php echo $_POST['email'];?>
" />
				<br />
				<a href="#" class="submit">Восстановить<span></span></a>
				</form>
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>