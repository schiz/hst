<?php /* Smarty version Smarty-3.1.14, created on 2013-10-17 06:57:59
         compiled from "./templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1947340591523874eb5248c5-51373537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '692c3bc93f5ce1085954c77c1d0c047332ab27c2' => 
    array (
      0 => './templates/search.tpl',
      1 => 1379945214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1947340591523874eb5248c5-51373537',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523874eb5a4417_19149253',
  'variables' => 
  array (
    'results' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523874eb5a4417_19149253')) {function content_523874eb5a4417_19149253($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ('aside_catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
				<h2>Результаты поиска</h2>
				
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
					<a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['item']->value['subdomain'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name']);?>
</a><br />
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['descr_short']);?>
<br /><br />
				<?php } ?>
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>