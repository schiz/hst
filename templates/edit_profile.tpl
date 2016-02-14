{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
			<!-- start content -->
			<section id="content">
                <div class="edit_data">
					<form id="registration" action="{$smarty.server.REQUEST_URI}" method="POST">
                   <div class="upload_box">
                        <div class="upload_box_image">{$thumbnail}</div>
                        <a href="#" class="md-trigger" data-modal="modal-1">Нажмите для загрузки фото</a>
                    </div>  
                     <div class="registration-form">
                        <label>
                            <span>Имя Фамилия Отчество</span>
                            <input type="text" name="fio" value="{if isset($smarty.post.fio)}{$smarty.post.fio}{else}{$user.fio}{/if}" />
                        </label>
                        <label>
                            <span>Логин</span>
                            <input type="text" name="login" value="{if isset($smarty.post.login)}{$smarty.post.login}{else}{$user.login}{/if}" />
                        </label>
                        <label>
                            <span>Новый пароль</span>
                            <input type="password" name="password1" value="{$smarty.post.password1}" />
                        </label>
                        <label>
                            <span>Повторите пароль</span>
                            <input type="password" name="password2" value="{$smarty.post.password2}" />
                        </label>
                        <div class="sex-selection">
                            <input type="radio" name="male" value="0" {if $selected_male==0}Checked="True"{/if} ><span> Я женщина </span>
                            <input type="radio" name="male" value="1" {if $selected_male==1}Checked="True"{/if}><span> Я мужчина</span>
                        </div>
                        <div class="pink-bg">
                            <small><font>Внимание! </font>Следующие данные ни при каких обстоятельствах не будут показаны в вашем профиле.</small>
                            <label>
                                <span>Я родился:</span>
                            </label>
                            {html_select_date prefix="" time=$selected_time display_years=false display_months=false}
                
                            {html_options name=Month options=$months_options selected=$month_id}
                
                            {html_select_date prefix="" time=$selected_time start_year="-50"
   end_year="-18" display_days=false display_months=false reverse_years=true}
 
                            <label>
                                <span>Мой телефон</span>
                                <input type="text" name="phone" value="{if isset($smarty.post.phone)}{$smarty.post.phone}{else}{$user.phone}{/if}" />
                            </label>
                            <label>
                                <span>Моя электронная почта</span>
                                <input type="text" name="mail" value="{if isset($smarty.post.mail)}{$smarty.post.mail}{else}{$user.mail}{/if}" />
                            </label>
                            <label>
                                <span>Я живу в городе</span>
                                     {html_options name=city options=$city_options selected=$city_id}
                            </label>
                            <label>
                                <span>Мой адрес</span>
                                <input type="text" name="address" value="{if isset($smarty.post.address)}{$smarty.post.address}{else}{$user.address}{/if}" />
                            </label>
                        </div>           
                        <div class="registration-info">
                        Вы можете обновить инфомрацию о себе нажав Сохранить
                        </div>
                        <div class="edit-buttons">
                            <a href="#" class="save yellow-button">Сохранить</a>
                        </div>
                       
                    </div>
				</form>
				</div>
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
    {include 'register-modal.tpl'}
{include 'footer.tpl'}