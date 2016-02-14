{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
			{include file='aside_catalog.tpl'}
                        <!-- start content -->
            <section id="content">
            
                <!-- start best -->
                <section class="top_three">
                    <header>
                        <h1>Самые популярные</h1>
                    </header>
                    
                    {if empty($popular_companies)}Нет компаний в текущем разделе{/if}
                    <ul class="slide">
                        {foreach $popular_companies as $pop}
                        <li {if $pop@index eq 0} class="active"{/if}>
                            {if $pop.rubric_photo_url != ''}
                                <img src="{$pop.rubric_photo_url}" alt="{$pop.rubric_full_name|htmlspecialchars}" width="70" height="75">
                                {else}
                                <img src="/img/no_photo_icon.jpg" alt="no image" width="70" height="75">
                            {/if}
                            <h2>{$pop.rubric_full_name|htmlspecialchars}</h2>
                            
                            {$pop.rubric_description|htmlspecialchars}
                        </li>
                        {/foreach}

                    </ul>
                    
                    <ul class="switcher">
                        {foreach $popular_companies as $pop}
                        <li {if $pop@index eq 0} class="active"{/if}>
                            <h2><a href="index.php?p=subdomain&amp;name={$pop.subdomain}" title="{$pop.descr_short|htmlspecialchars}">{$pop.name|htmlspecialchars}</a></h2>
                                
                            <div class="photo">
                                {if $pop.photo_url != ''}
                                <img src="{$pop.photo_url}" alt="Company photo" width="70" height="75">
                                {else}
                                <img src="/img/no_photo_icon.jpg" alt="no image" width="70" height="75">
                                {/if}
                            </div>
                            
                            <div class="votes">
                                <a href="#" class="rate"><span class="r{$pop.avg_mark|string_format:"%d"}"></span></a>
                                
                                <p>{$pop.reviews_count} голосов</p>
                                
                                <a href="index.php?p=subdomain&amp;name={$pop.subdomain}">Отзывов: {$pop.reviews_count}</a>
                            </div>
                            
                            <div class="arrow"></div>
                        </li>
                        {/foreach}
                    </ul>
                </section>
                <div class="paginator">
                    {$popular_links}
                </div>
                <!-- end best -->
                
                <!-- start best -->
                <section class="gray list_style">
                    <header>
                        <h1>Лучшие</h1>
                    </header>
                    
                    {if empty($best_companies)}Нет компаний в текущем разделе{/if}
                    <ul>
                        {foreach $best_companies as $comp}
                        <li>
                            <div class="votes">
                                <a href="#" class="rate"><span class="r{$comp.avg_mark|string_format:"%d"}"></span></a>
                                
                                <p>{$comp.reviews_count} голосов</p>
                                
                                <a href="index.php?p=subdomain&amp;name={$comp.subdomain}">Отзывов: {$comp.reviews_count}</a>
                            </div>
                            
                            {if $comp.photo_url != ''}
                            <div class="photo">
                                <img src="{$comp.photo_url}" width="70" height="75">
                            </div>
                            {else}
                            <div class="photo">
                                <img src="/img/no_photo_icon.jpg" width="70" height="75">
                            </div>
                            {/if}
                            
                            <dl>
                                <dt>Название:</dt>
                                <dd><a href="index.php?p=subdomain&amp;name={$comp.subdomain}">{$comp.name|htmlspecialchars}</a></dd>
                                
                                <dt>Раздел:</dt>
                                <dd><a href="#">{$comp.rubric_full_name}</a></dd>
                                
                                {if $comp.update_text != ''}
                                <dt>Обновления:</dt>
                                <dd>{$comp.update_text|htmlspecialchars}</dd>
                                {/if}
                                
                                <dt>Описание:</dt>
                                <dd>{$comp.descr_short|htmlspecialchars}</dd>
                            </dl>
                        </li>
                        {/foreach}
                        

                        
                    </ul>
                </section>
                <!-- end best -->
                <div class="paginator">
                    {$links}
                </div>
            </section>          
            <!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}