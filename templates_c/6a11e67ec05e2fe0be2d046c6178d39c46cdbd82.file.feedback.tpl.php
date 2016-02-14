<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 13:21:56
         compiled from ".\templates\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16249522ed5d9b3ec86-95094813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a11e67ec05e2fe0be2d046c6178d39c46cdbd82' => 
    array (
      0 => '.\\templates\\feedback.tpl',
      1 => 1379067713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16249522ed5d9b3ec86-95094813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522ed5d9c3a173_75501584',
  'variables' => 
  array (
    'static_message' => 0,
    'rubric_options' => 0,
    'rubric_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ed5d9c3a173_75501584')) {function content_522ed5d9c3a173_75501584($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'Z:\\home\\hst\\www\\libs\\plugins\\function.html_options.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ("aside_catalog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
                <?php if ($_smarty_tpl->tpl_vars['static_message']->value){?><strong><?php echo $_smarty_tpl->tpl_vars['static_message']->value;?>
</strong><?php }?>
                <!-- start feedback -->
                <form id="feedback" action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="POST">
                    <div>
                        <label>
                            <span>Как вас зовут? (Ф.И.О)</span>
                            <input type="text" name="fio" value="<?php echo $_POST['fio'];?>
" />
                        </label>
                        <label>
                            <span>Номер телефона:</span>
                            <input type="text" name="phone" value="<?php echo $_POST['phone'];?>
" />
                        </label>
                        <label>
                            <span>Род деятельности:</span>
                            <input type="text" name="doing" value="<?php echo $_POST['doing'];?>
" />
                        </label>
                        <label>
                            <span>Электропочта:</span>
                            <input type="text" name="email" value="<?php echo $_POST['email'];?>
" />
                        </label>
                        <label>
                            <span>Тема сообщения:</span>
                            <input type="text" name="title" value="<?php echo $_POST['title'];?>
" />
                        </label>
                        <label>
                            <span>Рубрика к которой относится компания:</span>
                            <?php echo smarty_function_html_options(array('class'=>'rubric','name'=>'rubric','options'=>$_smarty_tpl->tpl_vars['rubric_options']->value,'selected'=>$_smarty_tpl->tpl_vars['rubric_id']->value),$_smarty_tpl);?>

                        </label>
                        <label>
                            <span>Текст сообщения:</span>
                            <textarea name="message" cols="" rows=""><?php echo $_POST['message'];?>
</textarea>
                        </label>
                        
                        <a href="#" class="submit">Отправить<span></span></a>
                        <a href="#" class="reset">Очистить<span></span></a>
                    </div>
                </form>
                <!-- end feedback -->
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>