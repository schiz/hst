<?php /* Smarty version Smarty-3.1.14, created on 2013-09-16 16:25:36
         compiled from ".\templates\edit_profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198715229c5f05fef58-39253501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136d121b5023f0a100e81b684dc66c44398f3b39' => 
    array (
      0 => '.\\templates\\edit_profile.tpl',
      1 => 1379067486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198715229c5f05fef58-39253501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5229c5f06cad74_86998761',
  'variables' => 
  array (
    'thumbnail' => 0,
    'user' => 0,
    'selected_male' => 0,
    'selected_time' => 0,
    'months_options' => 0,
    'month_id' => 0,
    'city_options' => 0,
    'city_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5229c5f06cad74_86998761')) {function content_5229c5f06cad74_86998761($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_date')) include 'Z:\\home\\hst\\www\\libs\\plugins\\function.html_select_date.php';
if (!is_callable('smarty_function_html_options')) include 'Z:\\home\\hst\\www\\libs\\plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ("aside_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
                <div class="edit_data">
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
                            <input type="text" name="fio" value="<?php if (isset($_POST['fio'])){?><?php echo $_POST['fio'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['fio'];?>
<?php }?>" />
                        </label>
                        <label>
                            <span>Логин</span>
                            <input type="text" name="login" value="<?php if (isset($_POST['login'])){?><?php echo $_POST['login'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
<?php }?>" />
                        </label>
                        <label>
                            <span>Новый пароль</span>
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
                                <input type="text" name="phone" value="<?php if (isset($_POST['phone'])){?><?php echo $_POST['phone'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
<?php }?>" />
                            </label>
                            <label>
                                <span>Моя электронная почта</span>
                                <input type="text" name="mail" value="<?php if (isset($_POST['mail'])){?><?php echo $_POST['mail'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['mail'];?>
<?php }?>" />
                            </label>
                            <label>
                                <span>Я живу в городе</span>
                                     <?php echo smarty_function_html_options(array('name'=>'city','options'=>$_smarty_tpl->tpl_vars['city_options']->value,'selected'=>$_smarty_tpl->tpl_vars['city_id']->value),$_smarty_tpl);?>

                            </label>
                            <label>
                                <span>Мой адрес</span>
                                <input type="text" name="address" value="<?php if (isset($_POST['address'])){?><?php echo $_POST['address'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
<?php }?>" />
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
    <?php echo $_smarty_tpl->getSubTemplate ('register-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>