{include 'header.tpl'}   
<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
            
			<!-- start content -->
			<section id="content" class="registration-organization">
            	<!-- start registrarion organization -->
                {*<form id="registration" class="dropzone" action="{$smarty.server.REQUEST_URI}" method="POST" enctype="multipart/form-data">*}
                <form id="registration" class="dropzone" action="index.php?p=edit_company&amp;id={$smarty.get.id}" method="POST" enctype="multipart/form-data">
                    <div class="upload_box">
                        <div class="upload_box_image">{$thumbnail}</div>
                        <a href="#" class="md-trigger" data-modal="modal-1">Нажмите для загрузки фото</a>
                    </div>  
                     <div class="company-code">
                         <strong>Введите код компании, которая посоветовала вам наш сервис</strong>
                        <label>
                            <input type="text" name="rec_code" value="{if isset($smarty.post.rec_code)}{$smarty.post.rec_code}{else}{$company.rec_code}{/if}" />
                        </label>
                            <small>если вам посоветовал наш сервис кто-то из наших уже существующих клиентов</small>
                            
                    </div>
                     <div class="registration-form">
                        <label>
                            <span>Название компании</span>
                            <input type="text" name="name" value="{if isset($smarty.post.name)}{$smarty.post.name}{else}{$company.name}{/if}" />
                        </label>
                        <label>
                            <!-- <span>Рубрика [ <a href="" class='add-link'>Добавить свою</a> ]</span> -->
                            {html_options class=rubric name=rubric options=$rubric_options selected=$rubric_id}
                        </label>
                        <label>
                            <span>Краткое описание</span>
                            <input type="text" name="descr_short" value="{if isset($smarty.post.descr_short)}{$smarty.post.descr_short}{else}{$company.descr_short}{/if}" />
                        </label>
                        <label>
                            <span>Полное описание:</span>
                            <textarea name="descr_long">{if isset($smarty.post.descr_long)}{$smarty.post.descr_long}{else}{$company.descr_long}{/if}</textarea>
                        </label>
                        <label>
                            <span>Расположена в городе</span>
                            {html_options name=city options=$city_options selected=$city_id}
                        </label>
                        <label>
                            <span>Желаемое имя страницы</span>
                            <input type="text" name="subdomain" value="{if isset($smarty.post.subdomain)}{$smarty.post.subdomain}{else}{$company.subdomain}{/if}" id="hasstate"/><strong> .hasstate.com.ua</strong>
                        </label>
                        <div id="additional-information">
                            <label>
                                <span>Адрес</span>
                                <input type="text" name="address" value="{if isset($smarty.post.address)}{$smarty.post.address}{else}{$company.address}{/if}" />
                            </label>
                            <label>
                                <span>Телефон</span>
                                <input type="text" name="phone" value="{if isset($smarty.post.phone)}{$smarty.post.phone}{else}{$company.phone}{/if}" />
                            </label>
                            <label>
                                <span>Факс</span>
                                <input type="text" name="fax" value="{if isset($smarty.post.fax)}{$smarty.post.fax}{else}{$company.fax}{/if}" />
                            </label>
                            <label>
                                <span>Электронная почта</span>
                                <input type="text" name="email" value="{if isset($smarty.post.email)}{$smarty.post.email}{else}{$company.email}{/if}" />
                            </label>
                            <label>
                                <span>Веб сайт</span>
                                <input type="text" name="site" value="{if isset($smarty.post.site)}{$smarty.post.site}{else}{$company.site}{/if}" />
                            </label>
                            <div id="mode">
                                <label>
                                    <span>Режим работы</span>
                                </label>
                                <span>Дни</span>
                                {html_options name=start_day options=$start_day_options selected=$start_day_id}
                                -
                                {html_options name=end_day options=$end_day_options selected=$end_day_id}
                                <br>
                                <span>Часы</span>
                                {html_options id="mode-hours-start-first" name=start_hour options=$start_hour_options selected=$start_hour_id}
                                :
                                {html_options id="mode-hours-end-first" name=start_min options=$start_min_options selected=$start_min_id}
                                -
                                {html_options id="mode-hours-start-second" name=end_hour options=$end_hour_options selected=$end_hour_id}
                                :
                                {html_options id="mode-hours-end-second" name=end_min options=$end_min_options selected=$end_min_id}
                            </div>
                            <label>
                                <span>Ключевые слова характеризующие компанию</span>
                                <input type="text" name="keywords" value="{if isset($smarty.post.keywords)}{$smarty.post.keywords}{else}{$company.keywords}{/if}" />
                            </label>
                             <label>
                                <span>Ваша должность в компании</span>
                                <input type="text" name="position" value="{if isset($smarty.post.position)}{$smarty.post.position}{else}{$company.position}{/if}" />
                             </label>
                        </div>
                    </div>
                    <input type='hidden' id='product_description_0' name='product_description[]' />
                    <input type='file' id='product_file_0' name='product_file[]' style='display:none' />
                    
                    <input type='hidden' id='material_description_0' name='material_description[]' />
                    <input type='hidden' id='material_title_0' name='material_title[]' />
                    <input type='file' id='material_file_0' name='material_file[]' style='display:none' />

                    <input type='file' id='banner_file' name='banner_file' style='display:none' />                    
				</form>
           <!-- start modal -->
                    <div class="md-modal md-effect-19" id="modal-1">
                        <div class="md-content">
                            <h2>Выберете изображение логотипа</h2>
                            <div>
                               <button>
                                <div id="dropzone">
                                    <form action="{$smarty.server.REQUEST_URI}" method="POST" enctype="multipart/form-data" id="demo-upload">
                                        <!-- <div class="dz-default dz-message">
                                        <span>Выбрать файл</span>
                                        </div> -->
                                        <input type="file" name="file" />
                                    </form>
                                </div>
                                </button> 
                            
                                <span href="#" class="yellow-button">Добавить</span>
                                <button class="md-close">Закрыть!</button>
                            </div>
                        </div>
                    </div>
                    <div class="md-modal md-effect-19" id="modal-2">
                        <div class="md-content">
                            <h2>Выберете изображение товара</h2>
                            <div>
                               <input type='button' value='Выберите файл' id='choose_product_file' />
                               <span id='choose_file_name'></span>
                               <h2> Введите описание товара </h2>
                                <textarea id='product_desc'></textarea>
                            
                                <span href="#" id='add_product_link' class="yellow-button">Добавить</span>
                                <button class="md-close">Закрыть!</button>
                            </div>
                        </div>
                    </div>
                    <div class="md-modal md-effect-19" id="modal-3">
                        <div class="md-content">
                            <h2>Выберете изображение материала</h2>
                            <div>
                               <input type='button' value='Выберите файл' id='choose_material_file' />
                               <span id='choose_material_file_name'></span>
                               <h2>Введите заголовок материала</h2>
                                <input type="text" id='material_title' value="" />
                                <h2>Добавить описание матеиала</h2>
                                <textarea id='material_desc'></textarea>
                            
                                <span href="#" id='add_material_link' class="yellow-button">Добавить</span>
                                <button class="md-close">Закрыть!</button>
                            </div>
                        </div>
                    </div>
                    <div class="md-modal md-effect-19" id="modal-5">
                        <div class="md-content">
                            <h2>Выберете изображение баннера</h2>
                            <div>
                               <input type='button' value='Выберите файл' id='choose_banner_file' />
                                <span href="#" id='add_material_link' class="yellow-button">Добавить</span>
                                <button class="md-close">Закрыть!</button>
                            </div>
                        </div>
                    </div>
                   <div class="md-overlay"></div><!-- the overlay element -->
            <!-- end modal -->
                <div class="content-title for-registration edit-company">
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
                        <!-- [ <a href="" class='add-link'>Добавить новую</a> ] -->
                    </header>
                    {foreach $products as $prod}
                    <div class="product-unit with-product">
                        <div class="product-image"><img src="{$prod.photo_url}" /></div><span class="product-delete"><font>Удалить</font></span><label>{$prod.descr}</label>
                    </div>
                    {/foreach}
                    <div class="product-unit without-product">
                         <span class="md-trigger product-add" data-modal="modal-2">Добавить товар</span>
                         <label></label>
                    </div>
                </div>
                <div class="content-title">
                    <header>
                        <h2>
                            Дополнительные материалы
                        </h2>
                    </header>
                    <div class="additional-materials for-registration edit-company">
                        <table>
                            {foreach $materials as $m}
                            <tr>
                                <td  class="material-img"><img src="img/add-material.png" /></td>
                                <td class="material-special-offers"><a href="{$m.file_url}">{$m.name}</a><br>
                                    <small>{$m.date}</small>
                                </td>
                                <td class="material-description">{$m.descr}</td>
                                <td class="material-option">
                                    <span class="material-edit md-trigger" data-modal="modal-4">Редактировать</span>
                                    <span class="material-delete">Удалить</span>
                                </td>
                            </tr>
                            {/foreach}
                        </table>
                       
                    </div>
                    <div class="add-file">
                        <a class="md-trigger" data-modal="modal-3">Добавить файл</a>
                    </div>

                    <div class="profile-info">
                    {if $company.banner}
                    Баннер: <img src="{$company.banner}" width="624"/>
                    {/if}
                    <a href="#" class="md-trigger " data-modal="modal-5">Здесь вы можете указать где желаете разместить баннер</a>
                    </div>
                </div>
                <div class="registration-buttons">
                    <a href="#" id="add-company" class="update-company yellow-button">Сохранить</a>
                </div>
                <script src="js/classie.js"></script>
                <script src="js/modalEffects.js"></script>
				<!-- end registrarion organization -->
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea -->
{include 'footer.tpl'}