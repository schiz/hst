<?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 10:31:29
         compiled from ".\templates\review_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7720522deb67567e71-49608180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f788b33a0b53cfc7ec76ad5542b939acc4bd63cf' => 
    array (
      0 => '.\\templates\\review_edit.tpl',
      1 => 1379067840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7720522deb67567e71-49608180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522deb67667dd7_45742417',
  'variables' => 
  array (
    'static_message' => 0,
    'review_text' => 0,
    'review_mark' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522deb67667dd7_45742417')) {function content_522deb67667dd7_45742417($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
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