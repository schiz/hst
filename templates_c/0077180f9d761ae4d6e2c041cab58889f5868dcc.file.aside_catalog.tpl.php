<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 10:06:38
         compiled from "./templates/aside_catalog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18458139675238578c64e960-94676636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0077180f9d761ae4d6e2c041cab58889f5868dcc' => 
    array (
      0 => './templates/aside_catalog.tpl',
      1 => 1379945197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18458139675238578c64e960-94676636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5238578c6b76e9_57615442',
  'variables' => 
  array (
    'path_string' => 0,
    'title' => 0,
    'show_edit_profile' => 0,
    'category_copy' => 0,
    'c' => 0,
    's' => 0,
    'vertical' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5238578c6b76e9_57615442')) {function content_5238578c6b76e9_57615442($_smarty_tpl) {?>        	<!-- start cont_sub_pannel -->
			<div class="cont_sub_pannel">
            	<h1>Каталог фирм</h1>
				<!-- start breadcrumb -->
				<nav id="breadcrumb">
					<ul>
						<?php if ($_smarty_tpl->tpl_vars['path_string']->value){?>
                            <?php echo $_smarty_tpl->tpl_vars['path_string']->value;?>

                        <?php }else{ ?>
                            <li><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
                        <?php }?>
					</ul>
				</nav>
				<!-- end breadcrumb -->
                <?php if ($_smarty_tpl->tpl_vars['show_edit_profile']->value){?>
                <a href="index.php?p=edit_profile" class="button button_orange">Редактировать <span></span></a>
                <?php }?>
			</div>
			<!-- end cont_sub_pannel -->
            
        	<!-- start aside -->
			<aside>
                <nav id="category">
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category_copy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                        <li>
                            <a href="#">
                                <span class="ico"><img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['icon'];?>
" alt="Авто, мото" width="16" height="32"></span>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value['name']);?>

                                <span><?php echo $_smarty_tpl->tpl_vars['c']->value['real_count'];?>
</span>
                            </a>
                            <?php if ($_smarty_tpl->tpl_vars['c']->value['subitems']){?>
                                <ul>
                                <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['c']->value['subitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                                <li>
                                    <?php if ($_GET['p']=='rating'){?>
                                    <a href="index.php?p=rating&amp;subcat=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</a>
                                    <?php }elseif($_GET['p']=='updates'){?>
                                    <a href="index.php?p=updates&amp;subcat=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</a>
                                    <?php }else{ ?>
                                    <a href="index.php?subcat=<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
</a>
                                    <?php }?>
                                    <span><?php echo $_smarty_tpl->tpl_vars['s']->value['count'];?>
</span>
                                </li>
                                <?php } ?>
                                </ul>
                            <?php }?>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
                <?php if ($_smarty_tpl->tpl_vars['vertical']->value){?>
                <div id="vertical">
                    <img src="/upload/adm-banner/vertical.png" />
                </div>
                <?php }?>
			</aside>          
			<!-- end aside -->
<?php }} ?>