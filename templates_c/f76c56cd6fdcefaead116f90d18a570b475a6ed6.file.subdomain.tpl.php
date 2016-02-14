<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 12:27:30
         compiled from ".\templates\subdomain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23655523024ca3c1125-76346348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f76c56cd6fdcefaead116f90d18a570b475a6ed6' => 
    array (
      0 => '.\\templates\\subdomain.tpl',
      1 => 1379928447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23655523024ca3c1125-76346348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523024ca45da48_99182198',
  'variables' => 
  array (
    'domain' => 0,
    'materials' => 0,
    'm' => 0,
    'products' => 0,
    'prod' => 0,
    'reviews' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523024ca45da48_99182198')) {function content_523024ca45da48_99182198($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('small-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- start mainarea -->
	<div id="mainarea">
		<!-- start header -->
        <?php if (($_smarty_tpl->tpl_vars['domain']->value['name']!=''&&$_smarty_tpl->tpl_vars['domain']->value['disable']!=1)){?>
        <header>
            <h1 id="logo-subdomain">
            	<a href="#"><?php if ($_smarty_tpl->tpl_vars['domain']->value['photo_url']!=''){?><img src="<?php echo $_smarty_tpl->tpl_vars['domain']->value['photo_url'];?>
" width="100" /><?php }?></a>
                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value['name']);?>
</span>
                <small><?php echo $_GET['name'];?>
.hasstate.com.ua</small>
            </h1>
            
            <div class="individual-number ">
                <?php echo sprintf('%05d',$_smarty_tpl->tpl_vars['domain']->value['id']);?>

            </div>
		</header>
		<!-- end header -->
        <!-- aside start -->
        <aside class="subdomain-aside">
            <div>
                <h2><?php echo $_smarty_tpl->tpl_vars['domain']->value['rubric_name'];?>
</h2>
            </div>
            <div>
                <h2>
                    Краткое описание
                </h2>
                <small><?php echo $_smarty_tpl->tpl_vars['domain']->value['short_descr'];?>
</small>
            </div>
            <div>
                <address>
                    <h2>Контакты</h2>
                    <dl>    
                        <dt><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value['address']);?>
</dt>
                        <dt><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value['email']);?>
</dt>
                        <dt class="telephone"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value['phone']);?>
</dt>
                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value['site']);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['domain']->value['site']);?>
</a>
                    </dl>
                </address>
            </div>
            <div class="subdomain-mode">
                <h2>
                    Режим работы
                </h2>
                <ul>
                    <li><?php echo $_smarty_tpl->tpl_vars['domain']->value['start_day'];?>
 - <?php echo $_smarty_tpl->tpl_vars['domain']->value['end_day'];?>
</li>
                    <li>с <?php echo $_smarty_tpl->tpl_vars['domain']->value['start_hour'];?>
:<?php echo sprintf("%02d",$_smarty_tpl->tpl_vars['domain']->value['start_min']);?>
 до <?php echo $_smarty_tpl->tpl_vars['domain']->value['end_hour'];?>
:<?php echo sprintf("%02d",$_smarty_tpl->tpl_vars['domain']->value['end_min']);?>
</li>
                </ul>
            </div>
            <div class="subdomain-materials">
                <h2>
                    Дополнительные материалы
                </h2>
                <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['materials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                <div class="subdomain-additional">
                    <img src="img/add-material.png">
                    <a href=""><?php echo $_smarty_tpl->tpl_vars['m']->value['name'];?>
</a>
                    <small><?php echo $_smarty_tpl->tpl_vars['m']->value['date'];?>
</small>
                    <span><?php echo $_smarty_tpl->tpl_vars['m']->value['descr'];?>

                    </span>
                </div>
                <?php } ?>
            </div>
        </aside>  
        <!-- aside end -->
		<!-- start middle -->
		<div id="subdomain-content">
            <div class="big-img clearfix" <?php if ($_smarty_tpl->tpl_vars['domain']->value['banner']!=''){?> style="background: url(..<?php echo $_smarty_tpl->tpl_vars['domain']->value['banner'];?>
)"<?php }?>>
            </div>
            <div class="content-title company-description">
                <header>
                    <h2>
                        Описание
                    </h2>
                </header>
                <?php echo $_smarty_tpl->tpl_vars['domain']->value['descr_long'];?>

            </div>
            <div class="content-title">
                <header>
                    <h2>
                        Товары
                    </h2>
                    <strong>
                    Категория 
                    </strong>
                    <select>
                        <option>Общие</option>
                    </select>
                </header>
                    <?php  $_smarty_tpl->tpl_vars['prod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prod']->key => $_smarty_tpl->tpl_vars['prod']->value){
$_smarty_tpl->tpl_vars['prod']->_loop = true;
?>
                    <div class="product-unit with-product">
                        <label><?php echo $_smarty_tpl->tpl_vars['prod']->value['descr'];?>
</label>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['prod']->value['photo_url'];?>
">
                    </div>
                    <?php } ?>
            </div>
            <div class="content-title">
                <header>
                    <h2>
                        Отзывы
                    </h2>
                
                <div class="testimonials">
                    <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                    <div class="testimonial"> 
                        <div class="testimonial-img">
                            <?php if ($_smarty_tpl->tpl_vars['r']->value['photo']!=''){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['r']->value['photo'];?>
" alt="" width="50" />
                            <?php }else{ ?>
                            <img src="img/no_photo_icon.jpg" alt="" width="50"/>
                            <?php }?>
                        </div>
                        <div class="testimonial-text">
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['r']->value['user_name'];?>
</a>
                            <div class="review_date">
                                <?php echo $_smarty_tpl->tpl_vars['r']->value['review_date'];?>

                            </div>
                            <div class="votes">
                                 <a href="#" class="rate"><span class="r<?php echo $_smarty_tpl->tpl_vars['r']->value['mark'];?>
"></span></a> &nbsp; <?php echo $_smarty_tpl->tpl_vars['r']->value['mark_descr'];?>

                            </div>
                            <p>
                               <?php echo $_smarty_tpl->tpl_vars['r']->value['review_text'];?>

                           </p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                </header>
                <?php if (isset($_SESSION['user_id'])){?>
                <form id="leave-comment" action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="POST">
                <textarea name="review_text"></textarea>
                <div class="subdmain-votes">
                    <div class="votes">
                        <!-- <div>2 февраля 2012 года </div> -->
                        <input type="hidden" name="rate_number" id="rate_number" />
                        <div class="rateit"></div>
<!--                         <a href="#" class="rate"><span class="r3"></span></a> -->
                    </div>
                </div>
                <a href="#" id="leave-testimonial" class="yellow-button">Оставить отзыв</a>
                </form>
                <?php }?>
            </div>
		</div>
        <?php }else{ ?>
            <br /><h1>Запрошенная страница не найдена</h1>
        <?php }?>
		<!-- end middle -->	
	</div>
	<!-- end mainarea -->
    
<?php echo $_smarty_tpl->getSubTemplate ('small-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>