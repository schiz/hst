<?php /* Smarty version Smarty-3.1.14, created on 2013-09-17 13:33:31
         compiled from ".\templates\rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19788523714cc5c91a4-51904804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57245c6412e82c7828e92eea494a2ba7dabdc61d' => 
    array (
      0 => '.\\templates\\rating.tpl',
      1 => 1379414010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19788523714cc5c91a4-51904804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523714cc5caa65_30340150',
  'variables' => 
  array (
    'popular_companies' => 0,
    'pop' => 0,
    'best_companies' => 0,
    'comp' => 0,
    'rate_companies' => 0,
    'rate' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523714cc5caa65_30340150')) {function content_523714cc5caa65_30340150($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
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
" alt="Sample_alt" width="70" height="75">
                                <?php }else{ ?>
                                <img src="/img/no_photo_icon.jpg" alt="Sample_alt" width="70" height="75">
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
                <!-- end best -->
                
                <!-- start best -->
                <section class="gray list_style">
                    <header>
                        <h1>Лучшее</h1>
                        <a href="index.php?p=rating_all">Смотреть все</a>
                    </header>
                    
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
                
                <!-- start last_updates -->
                <section class="gray last_updates">
                    <header>
                        <h1>Рейтинг</h1>
                        <form id="company_per_page" action="<?php echo $_SERVER['REQUEST_URI'];?>
" class="small_search" method="POST">
                            <div>
                            <select name="per_page" id="per_page">

                            <option value="2">Компаний на страницу</option>
                            <option value="2">2</option>
                            <option value="5">5</option>
                            </select>
                                <!-- <input type="text" name="per_page" value="Компаний на страницу"/> -->
                                <a href="#" class="up"></a>
                                <a href="#" class="down"></a>
                            </div>
                        </form>
                    </header>
                    
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rate']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rate_companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->key => $_smarty_tpl->tpl_vars['rate']->value){
$_smarty_tpl->tpl_vars['rate']->_loop = true;
?>
                        <li>
                            <div class="votes">
                                <a href="#" class="rate"><span class="r<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rate']->value['avg_mark']);?>
"></span></a>
                                
                                <p><?php echo $_smarty_tpl->tpl_vars['rate']->value['reviews_count'];?>
 голосов</p>
                                
                                <a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['rate']->value['subdomain'];?>
">Отзывов: <?php echo $_smarty_tpl->tpl_vars['rate']->value['reviews_count'];?>
</a>
                            </div>
                            
                            <?php if ($_smarty_tpl->tpl_vars['rate']->value['photo_url']!=''){?>
                            <div class="photo">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['rate']->value['photo_url'];?>
" width="70" height="75">
                            </div>
                            <?php }else{ ?>
                            <div class="photo">
                                <img src="/img/no_photo_icon.jpg" width="70" height="75">
                            </div>
                            <?php }?>
                            
                            <dl>
                                <dt>Название:</dt>
                                <dd><a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['rate']->value['subdomain'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['name']);?>
</a></dd>
                                
                                <dt>Раздел:</dt>
                                <dd><a href="#"><?php echo $_smarty_tpl->tpl_vars['rate']->value['rubric_full_name'];?>
</a></dd>
                                
                                <?php if ($_smarty_tpl->tpl_vars['rate']->value['update_text']!=''){?>
                                <dt>Обновления:</dt>
                                <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['update_text']);?>
</dd>
                                <?php }?>
                                
                                <dt>Описание:</dt>
                                <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rate']->value['descr_short']);?>
</dd>
                            </dl>
                        </li>
                        <?php } ?>
                        
                    </ul>
                </section>
                <!-- end last_updates -->
                
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