{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
			<!-- start content -->
			<section id="content">
            	<!-- start registration -->
				<form id="registration" action="{$smarty.server.REQUEST_URI}" method="POST">
                    <div class="upload_box">
                        <div class="upload_box_image">{$thumbnail}</div>
                        <a href="#" class="md-trigger" data-modal="modal-1">Нажмите для загрузки фото</a>
                    </div>  
                     <div class="registration-form">
                        <label>
                            <span>Имя Фамилия Отчество</span>
                            <input type="text" name="fio" value="{$smarty.post.fio}" />
                        </label>
                        <label>
                            <span>Логин</span>
                            <input type="text" name="login" value="{$smarty.post.login}" />
                        </label>
                        <label>
                            <span>Пароль</span>
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
                                <input type="text" name="phone" value="{$smarty.post.phone}" />
                            </label>
                            <label>
                                <span>Моя электронная почта</span>
                                <input type="text" name="email" value="{$smarty.post.email}" />
                            </label>
                            <label>
                                <span>Я живу в городе</span>
                                     {html_options name=city options=$city_options selected=$city_id}
                            </label>
                            <label>
                                <span>Мой адрес</span>
                                <input type="text" name="address" value="{$smarty.post.address}" />
                            </label>
                        </div>           
                        <div class="registration-info">
                        Вы можете зарегистрироваться, нажав кнопку Регистрации или зарегистрироваться и перейти в форму добавления вашей компании нажав Добавить компанию
                        </div>
                        <div class="registration-buttons">
                            <a href="#" name="add_company" class="submit blue-button">Добавить компанию</a>
                            <a href="#" class="reset yellow-button">Регистрация</a>
                        </div>
                       
                    </div>
				</form>
				<!-- end registration -->
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
    {include 'register-modal.tpl'}
{include 'footer.tpl'}