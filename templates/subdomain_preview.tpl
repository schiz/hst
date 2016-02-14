{include 'small-header.tpl'}
	<!-- start mainarea -->
	<div id="mainarea" class="child-window">
		<!-- start header -->
		<header>
            <h1 id="logo-subdomain">
            	<!-- <a href="#"></a> -->
                {if $smarty.session.target_file }<img src="{$smarty.session.target_file}" width="100" height="100" />{/if}
                <span>{$smarty.get.name}</span>
                <small>{$smarty.get.subdomain}</small>
            </h1>
            
<!--             <div class="individual-number ">
                02367
            </div> -->
		</header>
		<!-- end header -->
        <!-- aside start -->
        <aside class="subdomain-aside">
            <div>
                <h2>{$smarty.get.rubric}</h2>
            </div>
            <div>
                <h2>
                    Краткое описание
                </h2>
                <small>{$smarty.get.descr_short}</small>
            </div>
            <div>
                <address>
                    <h2>Контакты</h2>
                    <dl>    
                        <dt>{$smarty.get.address}</dt>
                        <dt>{$smarty.get.email}</dt>
                        <dt class="telephone">{$smarty.get.phone}</dt>
                        <a href="{$smarty.get.site}">{$smarty.get.site}</a>
                    </dl>
                </address>
            </div>
            <div class="subdomain-mode">
                <h2>
                    Режим работы
                </h2>
                <ul>
                    <li>{$smarty.get.start_day} - {$smarty.get.end_day}</li>
                    <li>с {$smarty.get.start_hour}:{$smarty.get.start_min} до {$smarty.get.end_hour}:{$smarty.get.end_min}</li>
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
                {$smarty.get.descr_long}
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
    
{include 'small-footer.tpl'}