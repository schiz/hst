<?php /* Smarty version Smarty-3.1.14, created on 2013-09-30 05:01:54
         compiled from "./templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129578323752493e028d43b3-00322167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cbf1e8fe3fd40b5d5d98f1481941b0b65780f26' => 
    array (
      0 => './templates/register.tpl',
      1 => 1379945212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129578323752493e028d43b3-00322167',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52493e029d88f1_87655715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52493e029d88f1_87655715')) {function content_52493e029d88f1_87655715($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_date')) include '/home/mnbtcom/public_html/hst/libs/plugins/function.html_select_date.php';
if (!is_callable('smarty_function_html_options')) include '/home/mnbtcom/public_html/hst/libs/plugins/function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ("aside_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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