<?php /* Smarty version Smarty-3.1.14, created on 2013-09-30 09:32:49
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16956066745238578c4df299-67000797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1380547963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16956066745238578c4df299-67000797',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5238578c604232_25093113',
  'variables' => 
  array (
    'popular_companies' => 0,
    'pop' => 0,
    'popular_links' => 0,
    'best_companies' => 0,
    'comp' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5238578c604232_25093113')) {function content_5238578c604232_25093113($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
			<?php echo $_smarty_tpl->getSubTemplate ('aside_catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <!-- start content -->
            <section id="content">
            
                <!-- start best -->
                <section class="top_three">
                    <header>
                        <h1>Самые популярные</h1>
                    </header>
                    
                    <?php if (empty($_smarty_tpl->tpl_vars['popular_companies']->value)){?>Нет компаний в текущем разделе<?php }?>
                    <ul class="slide">
                        <?php  $_smarty_tpl->tpl_vars['pop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popular_companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['pop']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['pop']->key => $_smarty_tpl->tpl_vars['pop']->value){
$_smarty_tpl->tpl_vars['pop']->_loop = true;
 $_smarty_tpl->tpl_vars['pop']->index++;
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['pop']->index==0){?> class="active"<?php }?>>
                            <?php if ($_smarty_tpl->tpl_vars['pop']->value['rubric_photo_url']!=''){?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['pop']->value['rubric_photo_url'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pop']->value['rubric_full_name']);?>
" width="70" height="75">
                                <?php }else{ ?>
                                <img src="/img/no_photo_icon.jpg" alt="no image" width="70" height="75">
                            <?php }?>
                            <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pop']->value['rubric_full_name']);?>
</h2>
                            
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pop']->value['rubric_description']);?>

                        </li>
                        <?php } ?>

                    </ul>
                    
                    <ul class="switcher">
                        <?php  $_smarty_tpl->tpl_vars['pop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['popular_companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['pop']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['pop']->key => $_smarty_tpl->tpl_vars['pop']->value){
$_smarty_tpl->tpl_vars['pop']->_loop = true;
 $_smarty_tpl->tpl_vars['pop']->index++;
?>
                        <li <?php if ($_smarty_tpl->tpl_vars['pop']->index==0){?> class="active"<?php }?>>
                            <h2><a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['pop']->value['subdomain'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pop']->value['descr_short']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pop']->value['name']);?>
</a></h2>
                                
                            <div class="photo">
                                <?php if ($_smarty_tpl->tpl_vars['pop']->value['photo_url']!=''){?>
                                <img src="<?php echo $_smarty_tpl->tpl_vars['pop']->value['photo_url'];?>
" alt="Company photo" width="70" height="75">
                                <?php }else{ ?>
                                <img src="/img/no_photo_icon.jpg" alt="no image" width="70" height="75">
                                <?php }?>
                            </div>
                            
                            <div class="votes">
                                <a href="#" class="rate"><span class="r<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['pop']->value['avg_mark']);?>
"></span></a>
                                
                                <p><?php echo $_smarty_tpl->tpl_vars['pop']->value['reviews_count'];?>
 голосов</p>
                                
                                <a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['pop']->value['subdomain'];?>
">Отзывов: <?php echo $_smarty_tpl->tpl_vars['pop']->value['reviews_count'];?>
</a>
                            </div>
                            
                            <div class="arrow"></div>
                        </li>
                        <?php } ?>
                    </ul>
                </section>
                <div class="paginator">
                    <?php echo $_smarty_tpl->tpl_vars['popular_links']->value;?>

                </div>
                <!-- end best -->
                
                <!-- start best -->
                <section class="gray list_style">
                    <header>
                        <h1>Лучшие</h1>
                    </header>
                    
                    <?php if (empty($_smarty_tpl->tpl_vars['best_companies']->value)){?>Нет компаний в текущем разделе<?php }?>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['comp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                <!-- end best -->
                <div class="paginator">
                    <?php echo $_smarty_tpl->tpl_vars['links']->value;?>

                </div>
            </section>          
            <!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>