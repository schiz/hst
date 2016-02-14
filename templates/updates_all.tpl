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
                    </header>
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
                
            </section>          
            <!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}