{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file='aside_catalog.tpl'}
			<!-- start content -->
			<section id="content">
                <div class="personal_data">
                    <div class="personal_photo">
                        {if $user.photo_url != ''}
                        <img src="{$user.photo_url}" alt="" width="168" height="168"/>
                        {else}
                        <img src="img/no_photo_icon.jpg" alt="" width="168" height="168"/>
                        {/if}
                        <ul class="messages">
                            <li>
                                <a href="index.php?p=inbox">Входящие</a>
                                <span>{$inbox}</span>
                            </li>
                            <li>
                                <a href="index.php?p=outbox">Отправленные</a>
                                <span>{$outbox}</span>
                            </li>
                            <li>
                                <a href="index.php?p=trash">Удаленные</a>
                                {if $deleted}<span class="red">{$deleted}</span>{/if}
                            </li>
                        </ul>
                    </div>
                    
                    <div class="personal_text">
                        <h2>{$user.fio|htmlspecialchars}</h2>
                        <h3>{if $user.male==1}Мужчина{else}Женщина{/if}, {$user.age} лет</h3>
                        
                        <dl class="info_list">
                            <dt>Эти данные не показываются в вашем профиле</dt>
                            <dd>
                                <span>Дата рождения:</span>
                                <i>{$user.dob|date_format:"%e %B %Y"}</i>
                            </dd>
                            <dd>
                                <span>Телефон:</span>
                                <i>{$user.phone|htmlspecialchars}</i>
                            </dd>
                            <dd>
                                <span>Э-почта:</span>
                                <i>{$user.mail|htmlspecialchars}</i>
                            </dd>
                            <dd>
                                <span>Город:</span>
                                <i>{$user.city_name}</i>
                            </dd>
                            <dd>
                               <span>Адрес:</span>
                               <i>{$user.address}</i>
                            </dd>
                        </dl>
                    </div>
                </div>
				<section class="gray my_companies last_updates">
                            <div class="top">
                                <h3>Мои компании</h3>
                                <a href="index.php?p=add_company" class="button button_orange">Добавить компанию <span></span></a>
                            </div>
                            {if empty($companies)}
                                Список компаний пуст
                            {/if}
                            <ul>
                                {foreach $companies as $company}
                                <li>
                                    <div class="votes">
                                        <div>
                                            <a href="index.php?p=edit_company&amp;id={$company.id}" class="edit">Редактировать</a>
                                            <a href="#" class="rate"><span class="r3"></span></a>
                                        </div>
                                        <p>{$company.reviews_count} голосов</p>
                                        <strong>{$company.id|string_format:"%05d"}</strong>
                                        
                                        <a href="#">Отзывов: {$company.reviews_count}</a>
                                    </div>
                                    
                                    <div class="photo">
                                        {if $company.photo_url != ''}
                                        <img src="{$company.photo_url}" alt="" width="70" height="75" />
                                        {else}
                                        <img src="img/no_photo_icon.jpg" alt="" width="70" height="75" />
                                        {/if}
                                    </div>
                                  
                                    <dl>
                                        <dt>Название:</dt>
                                        <dd><a href="index.php?p=subdomain&amp;name={$company.subdomain}">{$company.name|htmlspecialchars}</a></dd>
                                        
                                        <dt>Раздел:</dt>
                                        <dd><a href="#">{$company.rubric_full_name|htmlspecialchars}</a></dd>
                                        
                                        {if $company.update_text !=''}
                                        <dt>Обновления:</dt>
                                        <dd>{$company.update_text}</dd>
                                        {/if}

                                        <dt>Описание:</dt>
                                        <dd>{$company.descr_short|htmlspecialchars}</dd>
                                    </dl>
                                </li>
                                {/foreach}
                            </ul>
                </section>
                <section class="my_comments">
                        <div class="top">
                            <h3>Мои отзывы</h3>
                        </div>
                        
                        {if empty($reviews)}Нет отзывов{/if}
                        <ul>
                            {foreach $reviews as $r}
                            <li>
                                <div class="title">
                                    <a href="index.php?p=subdomain&amp;name={$r.company_subdomain}">{$r.company_name|htmlspecialchars}</a>
                                    <i>{$r.review_date}</i>
                                    <a href="#" class="rate"><span class="r{$r.mark}"></span></a>
                                </div>
                                
                                <div class="text">
                                    {$r.review_text|htmlspecialchars}
                                </div>
                                
                                <div class="links">
                                    <a href="index.php?p=review_edit&amp;id={$r.id}" class="edit">Редактировать</a>
                                    <a href="index.php?p=review&amp;m=delete&amp;id={$r.id}" class="delete">Удалить</a>
                                </div>
                            </li>
                            {/foreach}
                            
                           </ul>                 
                   </section>
            </section>          
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}