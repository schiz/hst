<?php /* Smarty version Smarty-3.1.14, created on 2013-09-11 14:44:18
         compiled from ".\templates\subdomain_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28210523043e04822e6-21512820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40cfc0e16dd25c3334ff67f307aec4abad64be2c' => 
    array (
      0 => '.\\templates\\subdomain_preview.tpl',
      1 => 1378899857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28210523043e04822e6-21512820',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523043e06ffa69_20499194',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523043e06ffa69_20499194')) {function content_523043e06ffa69_20499194($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('small-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<!-- start mainarea -->
	<div id="mainarea" class="child-window">
		<!-- start header -->
		<header>
            <h1 id="logo-subdomain">
            	<!-- <a href="#"></a> -->
                <?php if ($_SESSION['target_file']){?><img src="<?php echo $_SESSION['target_file'];?>
" width="100" height="100" style="margin-top: 35px;" /><?php }?>
                <span><?php echo $_GET['name'];?>
</span>
                <small><?php echo $_GET['subdomain'];?>
</small>
            </h1>
            
<!--             <div class="individual-number ">
                02367
            </div> -->
		</header>
		<!-- end header -->
        <!-- aside start -->
        <aside class="subdomain-aside">
            <div>
                <h2><?php echo $_GET['rubric'];?>
</h2>
            </div>
            <div>
                <h2>
                    Краткое описание
                </h2>
                <small><?php echo $_GET['descr_short'];?>
</small>
            </div>
            <div>
                <address>
                    <h2>Контакты</h2>
                    <dl>    
                        <dt><?php echo $_GET['address'];?>
</dt>
                        <dt><?php echo $_GET['email'];?>
</dt>
                        <dt class="telephone"><?php echo $_GET['phone'];?>
</dt>
                        <a href="<?php echo $_GET['site'];?>
"><?php echo $_GET['site'];?>
</a>
                    </dl>
                </address>
            </div>
            <div class="subdomain-mode">
                <h2>
                    Режим работы
                </h2>
                <ul>
                    <li><?php echo $_GET['start_day'];?>
 - <?php echo $_GET['end_day'];?>
</li>
                    <li>с <?php echo $_GET['start_hour'];?>
:<?php echo $_GET['start_min'];?>
 до <?php echo $_GET['end_hour'];?>
:<?php echo $_GET['end_min'];?>
</li>
                </ul>
            </div>
<!--             <div class="subdomain-materials">
                <h2>
                    Дополнительные материалы
                </h2>
                <div class="subdomain-additional">
                    <img src="img/add-material.png">
                    <a href="">Процесс производства</a>
                    <small>29.01.2012</small>
                    <span>Это видео ролик в котором можно...
                          Это видео ролик в котором можно...
                    </span>
                </div>
                <div class="subdomain-additional">
                    <img src="img/add-material.png">
                    <basefont>Прайс-лист </basefont>[ <a href="#" type="application/file">скачать</a> ]
                    <small>29.01.2012</small>
                    <span>Прайс-лист нашей компании в формате Microsoft Excel...
                    </span>
                </div>
            </div> -->
        </aside>  
        <!-- aside end -->
		<!-- start middle -->
		<div id="subdomain-content">
            <!-- <div class="big-img clearfix">
            </div> -->
            <div class="content-title company-description">
                <header>
                    <h2>
                        Описание
                    </h2>
                </header>
                <?php echo $_GET['descr_long'];?>

            </div>
  <!--           <div class="content-title">
                <header>
                    <h2>
                        Товары
                    </h2>
                    <strong>
                    Категория 
                    </strong>
                    <select>
                        <option>Общие</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </header>
                    <div class="product-unit with-product">
                      
                        <label>Абрикосовое масло</label>
                        <img src="img/product.png">
                    </div>
                    <div class="product-unit with-product">
                        <label>Абрикосовое масло</label>
                          <img src="img/product.png">
                    </div>
                    <div class="product-unit with-product">
                        <label>Абрикосовое масло</label>
                          <img src="img/product.png">
                    </div>
                    <div class="product-unit with-product">
                        <label>Абрикосовое масло</label>
                        <img src="img/product.png">
                    </div>
                    <div class="product-unit with-product">
                        <label>Абрикосовое масло</label>
                        <img src="img/product.png">
                    </div>
                    <div class="product-unit with-product">
                        <label>Абрикосовое масло</label>
                        <img src="img/product.png">
                    </div>
                    <div class="product-unit with-product">
                        <label>Абрикосовое масло</label>
                        <img src="img/product.png">
                    </div>
                    <div class="product-unit with-product">
                        <label>Абрикосовое масло</label>
                        <img src="img/product.png">
                    </div>
                    <div class="product-unit with-product">
                        <label>Абрикосовое масло</label>
                        <img src="img/product.png">
                    </div>
            </div>
            <div class="content-title">
                <header>
                    <h2>
                        Отзывы
                    </h2>
                
                <div class="testimonials">
                    <div class="testimonial"> 
                        <div class="testimonial-img">
                            <img src="img/testimonial-img.png"/>
                        </div>
                        <div class="testimonial-text">
                            <a href="">Сенатор Джон МакКейн</a>
                            <div class="votes">
                                <a href="#" class="rate"><span class="r3"></span></a>
                            </div>
                            <p>
                               За время полугодового испытания смазки PURITY FG2 Synthtic Grease...
                               За время полугодового испытания смазки PURITY FG2 Synthtic Grease...
                               За время полугодового испытания смазки PURITY FG2 Synthtic Grease...
                               За время полугодового испытания смазки PURITY FG2 Synthtic Grease...
                           </p>
                        </div>
                    </div>
                    <div class="testimonial">
                        <div class="testimonial-img">
                            <img src="img/testimonial-img.png"/>
                        </div>
                        <div class="testimonial-text">
                            <a href="">Сенатор Джон МакКейн</a>
                            <div class="votes">
                                        <a href="#" class="rate"><span class="r3"></span></a>
                            </div>
                            <p>За время полугодового...</p>
                        </div>
                    </div>
                </div>
                </header>
                <textarea></textarea>
                <div class="subdmain-votes">
                    <div class="votes">
                        <div>2 февраля 2012 года </div>
                        <a href="#" class="rate"><span class="r3"></span></a>
                    </div>
                </div>
                <a href="#" id="leave-testimonial" class="yellow-button">Оставить отзыв</a>
            </div> -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea -->
    
<?php echo $_smarty_tpl->getSubTemplate ('small-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>