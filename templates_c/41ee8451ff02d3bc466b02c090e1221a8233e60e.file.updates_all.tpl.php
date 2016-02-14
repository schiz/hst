<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 11:31:33
         compiled from ".\templates\updates_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2244523812624db8f2-52084005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41ee8451ff02d3bc466b02c090e1221a8233e60e' => 
    array (
      0 => '.\\templates\\updates_all.tpl',
      1 => 1379406691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2244523812624db8f2-52084005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523812627161f3_34775460',
  'variables' => 
  array (
    'last_added' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523812627161f3_34775460')) {function content_523812627161f3_34775460($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
			<?php echo $_smarty_tpl->getSubTemplate ('aside_catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- start content -->
            <section id="content">
            
                <!-- start best -->
                <section class="gray best">
                    <header>
                        <h1>Последние добавленные</h1>
                    </header>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_added']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
                        <li>
                            <div>
                                <h2><a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['company']->value['subdomain'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['descr_short']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['name']);?>
</a></h2>
                                
                                <div class="photo">
                                    <?php if ($_smarty_tpl->tpl_vars['company']->value['photo_url']!=''){?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['photo_url'];?>
" alt="Company photo" width="70" height="75">
                                    <?php }else{ ?>
                                    <img src="/img/no_photo_icon.jpg" alt="no image" width="70" height="75">
                                    <?php }?>
                                </div>
                                
                                <div class="votes">
                                    <a href="#" class="rate"><span class="r<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['company']->value['avg_mark']);?>
"></span></a>
                                    
                                    <p><?php echo $_smarty_tpl->tpl_vars['company']->value['reviews_count'];?>
 голосов</p>
                                    
                                    <a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['company']->value['subdomain'];?>
">Отзывов: <?php echo $_smarty_tpl->tpl_vars['company']->value['reviews_count'];?>
</a>
                                </div>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </section>
                <!-- end best -->
                
            </section>          
            <!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>