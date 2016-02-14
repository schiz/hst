<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 11:46:39
         compiled from "./templates/review_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:841893820524022db9964f3-69415470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58684fd420c0cb6bc2e2535417f36693e36f9d67' => 
    array (
      0 => './templates/review_edit.tpl',
      1 => 1379945213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '841893820524022db9964f3-69415470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_524022dba0d106_94572022',
  'variables' => 
  array (
    'static_message' => 0,
    'review_text' => 0,
    'review_mark' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524022dba0d106_94572022')) {function content_524022dba0d106_94572022($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ("aside_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
                <?php if ($_smarty_tpl->tpl_vars['static_message']->value){?><strong><?php echo $_smarty_tpl->tpl_vars['static_message']->value;?>
</strong><?php }?>
                <form id="review" action="" method="POST">
                Текст: <input type="text" name="review_text" value="<?php if ($_POST['review_text']){?><?php echo $_POST['review_text'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['review_text']->value;?>
<?php }?>" /><br />
                Оценка: <input type="text" name="review_mark" value="<?php if ($_POST['review_mark']){?><?php echo $_POST['review_mark'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['review_mark']->value;?>
<?php }?>" /><br />
                <input type="submit" />
                </form>
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>