<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 13:04:10
         compiled from ".\templates\success_reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:231645224727c4e5fd8-87780658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff5667aa225aa3adf00795a0968bd657d6e140fb' => 
    array (
      0 => '.\\templates\\success_reg.tpl',
      1 => 1379066635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '231645224727c4e5fd8-87780658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5224727c571ff0_60720054',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5224727c571ff0_60720054')) {function content_5224727c571ff0_60720054($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ('aside_catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
				Регистрацию пройдено успешно!<br /><br />
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>