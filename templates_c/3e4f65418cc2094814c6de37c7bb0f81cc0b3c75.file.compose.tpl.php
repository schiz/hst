<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 13:10:21
         compiled from ".\templates\compose.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26556522d9a3e1859d0-21006008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e4f65418cc2094814c6de37c7bb0f81cc0b3c75' => 
    array (
      0 => '.\\templates\\compose.tpl',
      1 => 1379067013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26556522d9a3e1859d0-21006008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522d9a3e2846b2_56937035',
  'variables' => 
  array (
    'static_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522d9a3e2846b2_56937035')) {function content_522d9a3e2846b2_56937035($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ("aside_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
                <?php if ($_smarty_tpl->tpl_vars['static_message']->value){?><strong><?php echo $_smarty_tpl->tpl_vars['static_message']->value;?>
</strong><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['static_message']->value!='Сообщение успешно отправлено'){?>
				<form id="compose" action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="POST">
					Кому (логин): <br /><input type="text" name="to_user" value="<?php if ($_GET['to']){?><?php echo $_GET['to'];?>
<?php }else{ ?><?php echo $_POST['to_user'];?>
<?php }?>" /><br />
					Тема: <br /><input type="text" name="subject" value="<?php if ($_GET['subject']){?><?php echo $_GET['subject'];?>
<?php }else{ ?><?php echo $_POST['subject'];?>
<?php }?>" /><br />
					Сообщение: <br /><textarea name="text"><?php echo $_POST['text'];?>
</textarea><br />
					<a href="#" id="send-message" class="send yellow-button">Отправить</a>
				</form>
                <?php }?>
                <br /><br />
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>