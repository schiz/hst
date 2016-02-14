{include 'small-header.tpl'}
	<!-- start mainarea -->
	<div id="mainarea">
		<!-- start header -->
        {if ($domain.name != '' and $domain.disable != 1)}
        <header>
            <h1 id="logo-subdomain">
            	<a href="#">{if $domain.photo_url != '' }<img src="{$domain.photo_url}" width="100" />{/if}</a>
                <span>{$domain.name|htmlspecialchars}</span>
                <small>{$smarty.get.name}.hasstate.com.ua</small>
            </h1>
            
            <div class="individual-number ">
                {$domain.id|string_format:'%05d'}
            </div>
		</header>
		<!-- end header -->
        <!-- aside start -->
        <aside class="subdomain-aside">
            <div>
                <h2>{$domain.rubric_name}</h2>
            </div>
            <div>
                <h2>
                    Краткое описание
                </h2>
                <small>{$domain.short_descr}</small>
            </div>
            <div>
                <address>
                    <h2>Контакты</h2>
                    <dl>    
                        <dt>{$domain.address|htmlspecialchars}</dt>
                        <dt>{$domain.email|htmlspecialchars}</dt>
                        <dt class="telephone">{$domain.phone|htmlspecialchars}</dt>
                        <a href="{$domain.site|htmlspecialchars}">{$domain.site|htmlspecialchars}</a>
                    </dl>
                </address>
            </div>
            <div class="subdomain-mode">
                <h2>
                    Режим работы
                </h2>
                <ul>
                    <li>{$domain.start_day} - {$domain.end_day}</li>
                    <li>с {$domain.start_hour}:{$domain.start_min|string_format:"%02d"} до {$domain.end_hour}:{$domain.end_min|string_format:"%02d"}</li>
                </ul>
            </div>
            {if !empty($materials)}
            <div class="subdomain-materials">
                <h2>
                    Дополнительные материалы
                </h2>
                {foreach $materials as $m}
                <div class="subdomain-additional">
                    <img src="img/add-material.png">
                    <a href="{$m.file_url}">{$m.name}</a>
                    <small>{$m.date}</small>
                    <span>{$m.descr}
                    </span>
                </div>
                {/foreach}
            </div>
            {/if}
        </aside>  
        <!-- aside end -->
		<!-- start middle -->
		<div id="subdomain-content">
            <div class="big-img clearfix" {if $domain.banner != ''} style="background: url(..{$domain.banner})"{/if}>
            </div>
            <div class="content-title company-description">
                <header>
                    <h2>
                        Описание
                    </h2>
                </header>
                {$domain.descr_long}
            </div>
            {if !empty($products)}
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
                    {foreach $products as $prod}
                    <div class="product-unit with-product">
                        <label>{$prod.descr}</label>
                        <img src="{$prod.photo_url}">
                    </div>
                    {/foreach}
            </div>
            {/if}
            <div class="content-title">
                <header>
                    <h2>
                        Отзывы
                    </h2>
                
                <div class="testimonials">
                    {foreach $reviews as $r}
                    <div class="testimonial"> 
                        <div class="testimonial-img">
                            {if $r.photo != ''}
                            <img src="{$r.photo}" alt="" width="50" />
                            {else}
                            <img src="img/no_photo_icon.jpg" alt="" width="50"/>
                            {/if}
                        </div>
                        <div class="testimonial-text">
                            <a href="index.php?p=user&amp;id={$r.user}">{$r.user_name}</a>
                            <div class="review_date">
                                {$r.review_date}
                            </div>
                            <div class="votes">
                                 <a href="#" class="rate"><span class="r{$r.mark}"></span></a> &nbsp; {$r.mark_descr}
                            </div>
                            <p>
                               {$r.review_text}
                           </p>
                           {if $smarty.session.is_admin}
                           <a href="index.php?p=subdomain&amp;name={$smarty.get.name}&amp;r_del={$r.id}">Удалить</a>
                           {/if}
                        </div>
                    </div>
                    {/foreach}
                </div>
                </header>
                {if isset($smarty.session.user_id)}
                <form id="leave-comment" action="{$smarty.server.REQUEST_URI}" method="POST">
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
                {/if}
            </div>
		</div>
        {else}
            <br /><h1>Запрошенная страница не найдена</h1>
        {/if}
		<!-- end middle -->	
	</div>
	<!-- end mainarea -->
    
{include 'small-footer.tpl'}