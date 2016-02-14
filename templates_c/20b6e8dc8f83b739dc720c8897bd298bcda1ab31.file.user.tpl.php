<?php /* Smarty version Smarty-3.1.14, created on 2013-09-30 05:03:58
         compiled from "./templates/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190598665552402af8e93952-67020070%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20b6e8dc8f83b739dc720c8897bd298bcda1ab31' => 
    array (
      0 => './templates/user.tpl',
      1 => 1379945225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190598665552402af8e93952-67020070',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52402af8ef7032_76671758',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52402af8ef7032_76671758')) {function content_52402af8ef7032_76671758($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ('aside_catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
                <div class="personal_data">
                    <div class="personal_photo">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['photo_url']!=''){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo_url'];?>
" alt="" width="168" height="168"/>
                        <?php }else{ ?>
                        <img src="img/no_photo_icon.jpg" alt="" width="168" height="168"/>
                        <?php }?>
                    </div>
                    
                    <div class="personal_text">
                        <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['fio']);?>
</h2>
                        <h3><?php if ($_smarty_tpl->tpl_vars['user']->value['male']==1){?>Мужчина<?php }else{ ?>Женщина<?php }?>, <?php echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
 лет</h3>
                   </div>
                </div>
            </section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>