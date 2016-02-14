<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 11:15:53
         compiled from "./templates/add_company.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2135619445239632abf0e29-23884477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9247ada6e233841abb7271533278f02e73dda013' => 
    array (
      0 => './templates/add_company.tpl',
      1 => 1379948458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2135619445239632abf0e29-23884477',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5239632acd35c8_61211580',
  'variables' => 
  array (
    'thumbnail' => 0,
    'rubric_options' => 0,
    'rubric_id' => 0,
    'city_options' => 0,
    'city_id' => 0,
    'start_day_options' => 0,
    'start_day_id' => 0,
    'end_day_options' => 0,
    'end_day_id' => 0,
    'start_hour_options' => 0,
    'start_hour_id' => 0,
    'start_min_options' => 0,
    'start_min_id' => 0,
    'end_hour_options' => 0,
    'end_hour_id' => 0,
    'end_min_options' => 0,
    'end_min_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5239632acd35c8_61211580')) {function content_5239632acd35c8_61211580($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/mnbtcom/public_html/hst/libs/plugins/function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
   
<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ('aside_catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            
			<!-- start content -->
			<section id="content" class="registration-organization">
            	<!-- start registrarion organization -->
				<form id="registration" class="dropzone" action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="POST" enctype="multipart/form-data">
				
                    <div class="upload_box">
                        <div class="upload_box_image"><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
</div>
                        <a href="#" class="md-trigger" data-modal="modal-1">Нажмите для загрузки фото</a>
                    </div>  
                     <div class="company-code">
                         <strong>Введите код компании, которая посоветовала вам наш сервис</strong>
                        <label>
                            <input type="text" name="rec_code" value="<?php echo $_POST['rec_code'];?>
" />
                        </label>
                            <small>если вам посоветовал наш сервис кто-то из наших уже существующих клиентов</small>
                            
                    </div>
                     <div class="registration-form">
                        <label>
                            <span>Название компании</span>
                            <input type="text" name="name" value="<?php echo $_POST['name'];?>
" />
                        </label>
                        <label>
                            <span>Рубрика [ <a href="" class='add-link'>Добавить свою</a> ]</span>
                            <?php echo smarty_function_html_options(array('class'=>'rubric','name'=>'rubric','id'=>'rubric','options'=>$_smarty_tpl->tpl_vars['rubric_options']->value,'selected'=>$_smarty_tpl->tpl_vars['rubric_id']->value),$_smarty_tpl);?>

                        </label>
                        <label>
                            <span>Краткое описание</span>
                            <input type="text" name="descr_short" value="<?php echo $_POST['descr_short'];?>
" />
                        </label>
                        <label>
                            <span>Полное описание:</span>
                            <textarea name="descr_long"><?php echo $_POST['descr_long'];?>
</textarea>
                        </label>
                        <label>
                            <span>Расположена в городе</span>
                            <?php echo smarty_function_html_options(array('name'=>'city','options'=>$_smarty_tpl->tpl_vars['city_options']->value,'selected'=>$_smarty_tpl->tpl_vars['city_id']->value),$_smarty_tpl);?>

                        </label>
                        <label>
                            <span>Желаемое имя страницы</span>
                            <input type="text" name="subdomain" value="<?php echo $_POST['subdomain'];?>
" id="hasstate"/><strong> .hasstate.com.ua</strong>
                        </label>
                        <div id="additional-information">
                            <label>
                                <span>Адрес</span>
                                <input type="text" name="address" value="<?php echo $_POST['address'];?>
" />
                            </label>
                            <label>
                                <span>Телефон</span>
                                <input type="text" name="phone" value="<?php echo $_POST['phone'];?>
" />
                            </label>
                            <label>
                                <span>Факс</span>
                                <input type="text" name="fax" value="<?php echo $_POST['fax'];?>
" />
                            </label>
                            <label>
                                <span>Электронная почта</span>
                                <input type="text" name="email" value="<?php echo $_POST['email'];?>
" />
                            </label>
                            <label>
                                <span>Веб сайт</span>
                                <input type="text" name="site" value="<?php echo $_POST['site'];?>
" />
                            </label>
                            <div id="mode">
                                <label>
                                    <span>Режим работы</span>
                                </label>
                                <span>Дни</span>
                                <?php echo smarty_function_html_options(array('name'=>'start_day','options'=>$_smarty_tpl->tpl_vars['start_day_options']->value,'selected'=>$_smarty_tpl->tpl_vars['start_day_id']->value),$_smarty_tpl);?>

                                -
                                <?php echo smarty_function_html_options(array('name'=>'end_day','options'=>$_smarty_tpl->tpl_vars['end_day_options']->value,'selected'=>$_smarty_tpl->tpl_vars['end_day_id']->value),$_smarty_tpl);?>

                                <br>
                                <span>Часы</span>
                                <?php echo smarty_function_html_options(array('id'=>"mode-hours-start-first",'name'=>'start_hour','options'=>$_smarty_tpl->tpl_vars['start_hour_options']->value,'selected'=>$_smarty_tpl->tpl_vars['start_hour_id']->value),$_smarty_tpl);?>

                                :
                                <?php echo smarty_function_html_options(array('id'=>"mode-hours-end-first",'name'=>'start_min','options'=>$_smarty_tpl->tpl_vars['start_min_options']->value,'selected'=>$_smarty_tpl->tpl_vars['start_min_id']->value),$_smarty_tpl);?>

                                -
                                <?php echo smarty_function_html_options(array('id'=>"mode-hours-start-second",'name'=>'end_hour','options'=>$_smarty_tpl->tpl_vars['end_hour_options']->value,'selected'=>$_smarty_tpl->tpl_vars['end_hour_id']->value),$_smarty_tpl);?>

                                :
                                <?php echo smarty_function_html_options(array('id'=>"mode-hours-end-second",'name'=>'end_min','options'=>$_smarty_tpl->tpl_vars['end_min_options']->value,'selected'=>$_smarty_tpl->tpl_vars['end_min_id']->value),$_smarty_tpl);?>

                            </div>
                            <label>
                                <span>Ключевые слова характеризующие компанию</span>
                                <input type="text" name="keywords" value="<?php echo $_POST['keywords'];?>
" />
                            </label>
                             <label>
                                <span>Ваша должность в компании</span>
                                <input type="text" name="position" value="<?php echo $_POST['position'];?>
" />
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
                                    <form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="POST" enctype="multipart/form-data" id="demo-upload">
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
                <div class="content-title for-registration">
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
                        [ <a href="" class='add-link'>Добавить новую</a> ]
                    </header>
					<div id='adding_products'></div>
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
                    <div class="additional-materials for-registration">
                        <table id='material_table'>
                            <tr>
<!--                                 <td  class="material-img"><img src="img/add-material.png" /></td>
                                <td class="material-special-offers"><a href="">Процесс производства</a><br>
                                    <small>29.01.2012</small>
                                </td>
                                <td class="material-description">Это видео ролик в котором можно посомтреть как производится наша продукция</td>
                            </tr>
                            <tr>
                                <td  class="material-img"><img src="img/add-material.png" /></td>
                                <td class="material-special-offers"><a href="">Прайс-лист</a><br>
                                    <small>29.01.2012</small>
                                </td>
                                <td class="material-description">Прайс-лист нашей компании в формате MS Excel</td> -->
                            </tr>
                        </table>
                       
                    </div>
                    <div class="add-file">
                        <a class="md-trigger" data-modal="modal-3">Добавить файл</a>
                    </div>

                    <div class="profile-info">
                        <a href="#" class="md-trigger " data-modal="modal-5">Здесь вы можете указать где желаете разместить баннер</a>
                        <strong>Ваш профиль будет обработан в течении 2-3 часов</strong>
                        <small>Чем детальнее и полнее информация, тем больше наших пользователей заинтересуются вашей компанией
                        </small>
                    </div>
                </div>
                <div class="registration-info">
                        Вы можете нажать Быстрый просмотр для того, чтобы увидеть как профиль вашей компании будет выглядеть для посетителей или нажать Добавить, чтобы сразу добавить фирму в ваш профиль без предварительного просмотра
                </div>
                <div class="registration-buttons">
                    <a href="#" id="quick-view" class="blue-button">Быстрый просмотр</a>
                    <a href="#" id="add-company" class="yellow-button">Добавить</a>
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
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>