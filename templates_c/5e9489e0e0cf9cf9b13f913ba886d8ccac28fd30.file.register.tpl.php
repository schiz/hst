<?php /* Smarty version Smarty-3.1.14, created on 2013-09-04 16:52:21
         compiled from ".\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109195220783524ff62-35757862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e9489e0e0cf9cf9b13f913ba886d8ccac28fd30' => 
    array (
      0 => '.\\templates\\register.tpl',
      1 => 1378296819,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109195220783524ff62-35757862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5220783530fab3_12627383',
  'variables' => 
  array (
    'thumbnail' => 0,
    'selected_male' => 0,
    'selected_time' => 0,
    'months_options' => 0,
    'month_id' => 0,
    'city_options' => 0,
    'city_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5220783530fab3_12627383')) {function content_5220783530fab3_12627383($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_date')) include 'Z:\\home\\hst\\www\\libs\\plugins\\function.html_select_date.php';
if (!is_callable('smarty_function_html_options')) include 'Z:\\home\\hst\\www\\libs\\plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       

		<!-- start middle -->

		<div id="middle">

        	<!-- start cont_sub_pannel -->

			<div class="cont_sub_pannel">

            	<h1>Каталог фирм</h1>

				<!-- start breadcrumb -->

				<nav id="breadcrumb">

					<ul>

						<li>Регистрация</li>

					</ul>

				</nav>

				<!-- end breadcrumb -->

			</div>

			<!-- end cont_sub_pannel -->

            
        	<!-- start aside -->

			<aside>

                <nav id="category">

                    <ul>

                    	<li>

                        	<a href="#">

                            	<span class="ico"><img src="ico/sub_nav_01.png" alt="Авто, мото" width="16" height="32"></span>

                                Авто, мото

                                <span>12</span>

                            </a>

                        </li>

                        

                        <li>

                        	<a href="#">

                            	<span class="ico"><img src="ico/sub_nav_02.png" alt="Авиакомпании" width="16" height="32"></span>

                                Авиакомпании

                                <span>14</span>

                            </a>

                        </li>

                        

                        <li>

                        	<a href="#">

                            	<span class="ico"><img src="ico/sub_nav_03.png" alt="Гостиницы" width="16" height="32"></span>

                                Гостиницы

                                <span>156</span>

                            </a>

                            <ul>

                            	<li>

                                    <a href="#">Окна, Двери, Рамы</a>

                                    <span>23</span>

                                </li>

                                <li>

                                    <a href="#">Абразивные материалы</a>

                                    <span>23</span>

                                </li>

                                <li>

                                    <a href="#">Отделочные материалы</a>

                                    <span>23</span>

                                </li>

                                <li>

                                    <a href="#">Строительные материалы</a>

                                    <span>23</span>

                                </li>

                                <li>

                                    <a href="#">Отделочные материалы</a>

                                    <span>23</span>

                                </li>

                                <li>

                                    <a href="#">Строительные материалы</a>

                                    <span>23</span>

                                </li>

                            </ul>

                        </li>

                        

                        <li>

                        	<a href="#">

                            	<span class="ico"><img src="ico/sub_nav_04.png" alt="Недвижимость" width="16" height="32"></span>

                                Недвижимость

                                <span>18</span>

                            </a>

                        </li>

                        

                        <li>

                        	<a href="#">

                            	<span class="ico"><img src="ico/sub_nav_05.png" alt="Образование" width="16" height="32"></span>

                                Образование

                                <span>23</span>

                            </a>

                        </li>

                        

                        <li>

                        	<a href="#">

                            	<span class="ico"><img src="ico/sub_nav_06.png" alt="Строительство" width="16" height="32"></span>

                                Строительство

                                <span>54</span>

                            </a>

                            <ul>

                            	<li>

                                    <a href="#">Окна, Двери, Рамы</a>

                                    <span>23</span>

                                </li>

                                <li>

                                    <a href="#">Абразивные материалы</a>

                                    <span>23</span>

                                </li>

                                <li>

                                    <a href="#">Отделочные материалы</a>

                                    <span>23</span>

                                </li>

                                <li>

                                    <a href="#">Строительные материалы</a>

                                    <span>23</span>

                                </li>

                            </ul>

                        </li>

                        

                        <li>

                        	<a href="#">

                            	<span class="ico"><img src="ico/sub_nav_07.png" alt="Товары для дома и офиса" width="16" height="32"></span>

                                Товары для дома и офиса

                                <span>57</span>

                            </a>

                        </li>

                        

                        <li>

                        	<a href="#">

                            	<span class="ico"><img src="ico/sub_nav_08.png" alt="Транспорт и перевозки" width="16" height="32"></span>

                                Транспорт и перевозки

                                <span>12</span>

                            </a>

                        </li>

                        

                        <li>

                        	<a href="#">

                            	<span class="ico"><img src="ico/sub_nav_09.png" alt="Туризм" width="16" height="32"></span>

                                Туризм

                                <span>12</span>

                            </a>

                        </li>

                    </ul>

                </nav>

			</aside>          

			<!-- end aside -->


			<!-- start content -->

			<section id="content">

            	<!-- start registration -->

				<form id="registration" action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="POST">

                    <div class="upload_box">

                        <div class="upload_box_image"><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value;?>
</div>

                        <a href="#" class="md-trigger" data-modal="modal-1">Нажмите для загрузки фото</a>

                    </div>  

                     <div class="registration-form">

                        <label>

                            <span>Имя Фамилия Отчество</span>

                            <input type="text" name="fio" value="<?php echo $_POST['fio'];?>
" />

                        </label>

                        <label>

                            <span>Логин</span>

                            <input type="text" name="login" value="<?php echo $_POST['login'];?>
" />

                        </label>


                        <label>

                            <span>Пароль</span>

                            <input type="password" name="password1" value="<?php echo $_POST['password1'];?>
" />

                        </label>

                        <label>

                            <span>Повторите пароль</span>

                            <input type="password" name="password2" value="<?php echo $_POST['password2'];?>
" />

                        </label>

                        <div class="sex-selection">

                            <input type="radio" name="male" value="0" <?php if ($_smarty_tpl->tpl_vars['selected_male']->value==0){?>Checked="True"<?php }?> ><span> Я женщина </span>

                            <input type="radio" name="male" value="1" <?php if ($_smarty_tpl->tpl_vars['selected_male']->value==1){?>Checked="True"<?php }?>><span> Я мужчина</span>

                        </div>

                        <div class="pink-bg">

                            <small><font>Внимание! </font>Следующие данные ни при каких обстоятельствах не будут показаны в вашем профиле.</small>

                            <label>

                                <span>Я родился:</span>

                            </label>

                            <?php echo smarty_function_html_select_date(array('prefix'=>'','time'=>$_smarty_tpl->tpl_vars['selected_time']->value,'display_years'=>false,'display_months'=>false),$_smarty_tpl);?>

                

                            <?php echo smarty_function_html_options(array('name'=>'Month','options'=>$_smarty_tpl->tpl_vars['months_options']->value,'selected'=>$_smarty_tpl->tpl_vars['month_id']->value),$_smarty_tpl);?>

                

                            <?php echo smarty_function_html_select_date(array('prefix'=>'','time'=>$_smarty_tpl->tpl_vars['selected_time']->value,'start_year'=>"-50",'end_year'=>"-18",'display_days'=>false,'display_months'=>false,'reverse_years'=>true),$_smarty_tpl);?>

 
                            <label>

                                <span>Мой телефон</span>

                                <input type="text" name="phone" value="<?php echo $_POST['phone'];?>
" />

                            </label>

                            <label>

                                <span>Моя электронная почта</span>

                                <input type="text" name="email" value="<?php echo $_POST['email'];?>
" />

                            </label>

                            <label>

                                <span>Я живу в городе</span>

                                     <?php echo smarty_function_html_options(array('name'=>'city','options'=>$_smarty_tpl->tpl_vars['city_options']->value,'selected'=>$_smarty_tpl->tpl_vars['city_id']->value),$_smarty_tpl);?>


                            </label>

                            <label>

                                <span>Мой адрес</span>

                                <input type="text" name="address" value="<?php echo $_POST['address'];?>
" />

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




    <?php echo $_smarty_tpl->getSubTemplate ('register-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>





<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>