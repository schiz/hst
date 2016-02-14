<?php /* Smarty version Smarty-3.1.14, created on 2013-09-19 11:58:31
         compiled from "..\templates\aside_catalog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12486523abcb7305319-87675831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5ba9e373af653b4001b1b5f3d1e04ea0547fcb9' => 
    array (
      0 => '..\\templates\\aside_catalog.tpl',
      1 => 1379414751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12486523abcb7305319-87675831',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path_string' => 0,
    'title' => 0,
    'show_edit_profile' => 0,
    'category_copy' => 0,
    'c' => 0,
    's' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523abcb75dbe44_27257615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523abcb75dbe44_27257615')) {function content_523abcb75dbe44_27257615($_smarty_tpl) {?>        	<!-- start cont_sub_pannel -->
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
			</aside>          
			<!-- end aside --><?php }} ?>