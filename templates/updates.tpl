{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
			{include file='aside_catalog.tpl'}
            <!-- start content -->
            <section id="content">
            
                <!-- start best -->
                <section class="gray best">
                    <header>
                        <h1>Последние добавленные</h1>
                        <a href="index.php?p=updates_all">Смотреть все</a>
                    </header>

                    {if empty($last_added)}Нет компаний в текущем разделе{/if}
                    <ul>
                        {foreach $last_added as $company}
                        <li>
                            <div>
                                <h2><a href="index.php?p=subdomain&amp;name={$company.subdomain}" title="{$company.descr_short|htmlspecialchars}">{$company.name|htmlspecialchars}</a></h2>
                                
                                <div class="photo">
                                    {if $company.photo_url != ''}
                                    <img src="{$company.photo_url}" alt="Company photo" width="70" height="75">
                                    {else}
                                    <img src="/img/no_photo_icon.jpg" alt="no image" width="70" height="75">
                                    {/if}
                                </div>
                                
                                <div class="votes">
                                    <a href="#" class="rate"><span class="r{$company.avg_mark|string_format:"%d"}"></span></a>
                                    
                                    <p>{$company.reviews_count} голосов</p>
                                    
                                    <a href="index.php?p=subdomain&amp;name={$company.subdomain}">Отзывов: {$company.reviews_count}</a>
                                </div>
                            </div>
                        </li>
                        {/foreach}
                    </ul>
                </section>
                <!-- end best -->
                
                
                <!-- start last_updates -->
                <section class="gray last_updates">
                    <header>
                        <h1>Последние обновления</h1>
                        <a href="index.php?p=updates_last_all">Смотреть все</a>
                    </header>
                    
                    {if empty($last_updates)}Нет компаний в текущем разделе{/if}
                    <ul>
                        {foreach $last_updates as $comp}
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
                                
                                <dt>Обновления:</dt>
                                <dd>{$comp.update_text|htmlspecialchars}</dd>
                                
                                <dt>Описание:</dt>
                                <dd>{$comp.descr_short|htmlspecialchars}</dd>
                            </dl>
                        </li>
                        {/foreach}
                     </ul>
                </section>
                <!-- end last_updates -->

            </section>          
            <!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}