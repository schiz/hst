<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 13:42:00
         compiled from ".\templates\updates_last_all.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2762052382ad6be8000-07200147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41a6b757a2a2b38001dbf8a9672522f0ae3dd06b' => 
    array (
      0 => '.\\templates\\updates_last_all.tpl',
      1 => 1379413728,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2762052382ad6be8000-07200147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52382ad6e04d90_39436456',
  'variables' => 
  array (
    'last_updates' => 0,
    'comp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52382ad6e04d90_39436456')) {function content_52382ad6e04d90_39436456($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
			<?php echo $_smarty_tpl->getSubTemplate ('aside_catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- start content -->
            <section id="content">
            
               <!-- start last_updates -->
                <section class="gray last_updates">
                    <header>
                        <h1>Последние обновления</h1>
                    </header>
                    
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['comp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_updates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comp']->key => $_smarty_tpl->tpl_vars['comp']->value){
$_smarty_tpl->tpl_vars['comp']->_loop = true;
?>
                        <li>
                            <div class="votes">
                                <a href="#" class="rate"><span class="r<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['comp']->value['avg_mark']);?>
"></span></a>
                                
                                <p><?php echo $_smarty_tpl->tpl_vars['comp']->value['reviews_count'];?>
 голосов</p>
                                
                                <a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['comp']->value['subdomain'];?>
">Отзывов: <?php echo $_smarty_tpl->tpl_vars['comp']->value['reviews_count'];?>
</a>
                            </div>
                            
                            <?php if ($_smarty_tpl->tpl_vars['comp']->value['photo_url']!=''){?>
                            <div class="photo">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['comp']->value['photo_url'];?>
" width="70" height="75">
                            </div>
                            <?php }else{ ?>
                            <div class="photo">
                                <img src="/img/no_photo_icon.jpg" width="70" height="75">
                            </div>
                            <?php }?>
                            
                            <dl>
                                <dt>Название:</dt>
                                <dd><a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['comp']->value['subdomain'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comp']->value['name']);?>
</a></dd>
                                
                                <dt>Раздел:</dt>
                                <dd><a href="#"><?php echo $_smarty_tpl->tpl_vars['comp']->value['rubric_full_name'];?>
</a></dd>
                                
                                <?php if ($_smarty_tpl->tpl_vars['comp']->value['update_text']!=''){?>
                                <dt>Обновления:</dt>
                                <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comp']->value['update_text']);?>
</dd>
                                <?php }?>
                                
                                <dt>Описание:</dt>
                                <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comp']->value['descr_short']);?>
</dd>
                            </dl>
                        </li>
                        <?php } ?>
                     </ul>
                </section>
                <!-- end last_updates -->

            </section>          
            <!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>