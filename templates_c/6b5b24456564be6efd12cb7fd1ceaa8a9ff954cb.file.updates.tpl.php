<?php /* Smarty version Smarty-3.1.14, created on 2013-10-28 17:00:34
         compiled from "./templates/updates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127006833752387bd796f778-07996563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b5b24456564be6efd12cb7fd1ceaa8a9ff954cb' => 
    array (
      0 => './templates/updates.tpl',
      1 => 1380547959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127006833752387bd796f778-07996563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52387bd7a344b9_25373050',
  'variables' => 
  array (
    'last_added' => 0,
    'company' => 0,
    'last_updates' => 0,
    'comp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52387bd7a344b9_25373050')) {function content_52387bd7a344b9_25373050($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
			<?php echo $_smarty_tpl->getSubTemplate ('aside_catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <!-- start content -->
            <section id="content">
            
                <!-- start best -->
                <section class="gray best">
                    <header>
                        <h1>Последние добавленные</h1>
                        <a href="index.php?p=updates_all">Смотреть все</a>
                    </header>

                    <?php if (empty($_smarty_tpl->tpl_vars['last_added']->value)){?>Нет компаний в текущем разделе<?php }?>
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
                
                
                <!-- start last_updates -->
                <section class="gray last_updates">
                    <header>
                        <h1>Последние обновления</h1>
                        <a href="index.php?p=updates_last_all">Смотреть все</a>
                    </header>
                    
                    <?php if (empty($_smarty_tpl->tpl_vars['last_updates']->value)){?>Нет компаний в текущем разделе<?php }?>
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
                                
                                <dt>Обновления:</dt>
                                <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comp']->value['update_text']);?>
</dd>
                                
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