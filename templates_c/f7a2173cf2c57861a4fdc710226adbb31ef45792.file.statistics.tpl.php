<?php /* Smarty version Smarty-3.1.14, created on 2013-09-13 10:36:01
         compiled from ".\templates\statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:273475231773bc2bd35-47841794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7a2173cf2c57861a4fdc710226adbb31ef45792' => 
    array (
      0 => '.\\templates\\statistics.tpl',
      1 => 1379001602,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '273475231773bc2bd35-47841794',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5231773bcb5001_35222066',
  'variables' => 
  array (
    'stat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5231773bcb5001_35222066')) {function content_5231773bcb5001_35222066($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
<!-- start middle -->
		<div id="middle">
        	<!-- start cont_sub_pannel -->
			<div class="cont_sub_pannel">
            	<h1>Статистика</h1>
			</div>
			<!-- end cont_sub_pannel -->
			<!-- start content -->
				<section class="statistics-graph">
                	<header>
                    	<h1>Основное:</h1>
                   		<h1>Значение:</h1>
                    </header>
                    <table class="statistics-main">
                    	<tr>
                    		<td>Зарегистрировано на сайте: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['users'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['users_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Всего: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['users'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['users_percent'];?>
%"></div></td>
                    	</tr>
						<tr>
                    		<td>Новых за месяц: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['new_users_month'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['new_users_month_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Новых за неделю: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['new_users_week'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['new_users_week_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Новых за сутки: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['new_users_day'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['new_users_day_percent'];?>
%"></div></td>
                    	</tr>
                    </table>
                    <header>
                    	<h1>Пол:</h1>
                   		<h1>Значение:</h1>
                    </header>
                    <table class="statistics-sex">
                    	<tr>
                    		<td>М: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['boys'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['boys_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Ж: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['girls'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['girls_percent'];?>
%"></div></td>
                    	</tr>
      
                    </table>
                    <header>
                    	<h1>Возраст:</h1>
                   		<h1>Значение:</h1>
                    </header>
                    <table class="statistics-age">
                    	<tr>
                    		<td>От 15 до 20 лет: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['age_1'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['age_1_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>От 21 до 25 лет: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['age_2'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['age_2_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>От 26 до 30 лет: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['age_3'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['age_3_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>31 - 35: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['age_4'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['age_4_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>36 - 40: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['age_5'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['age_5_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>41 - 45: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['age_6'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['age_6_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>46 - 50: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['age_7'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['age_7_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>51 - 55: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['age_8'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['age_8_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>56 - 60: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['age_9'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['age_9_percent'];?>
%"></div></td>
                    	</tr>
      
                    </table>
                    <header>
                    	<h1>Он-лайн:</h1>
                   		<h1>Значение:</h1>
                    </header>
                     <table class="statistics-online">
                    	<tr>
                    		<td>Всего: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['total_online'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['total_online_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Гостей на сайте: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['guests'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['guests_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Пользователей на сайте: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['session_online'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['session_online_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Общее количество компаний: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['companies'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['companies_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Опубликовано: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['companies'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['companies_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>- за месяц: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['company_month'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['company_month_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>-за неделю: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['company_week'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['company_week_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>- за день: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['company_day'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['company_day_percent'];?>
%"></div></td>
                    	</tr>
      
                    </table>
                    <header>
                    	<h1>Общее количество отзывов:</h1>
                   		<h1>Значение:</h1>
                    </header>
					<table class="statistics-comments">
                    	<tr>
                    		<td>- за месяц: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['review_month'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['review_month_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>- за неделю: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['review_week'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['review_week_percent'];?>
%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>- за день: <span><?php echo $_smarty_tpl->tpl_vars['stat']->value['review_day'];?>
</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['review_day_percent'];?>
%"></div></td>
                    	</tr>
                    	
                    </table>
                    <header>
                    	<h1>Статистика увеличения:</h1>
                   		<h1>Значение:</h1>
                    </header>
                    <table class="statistics-increase">
                    	<tr>
                    		<td>В этом месяце увеличилось пользователей по сравнению с прошлым:</td>
                    		<td></td>
                    	</tr>
                    	<tr>
                    		<td><span><?php echo $_smarty_tpl->tpl_vars['stat']->value['difference_month'];?>
 (<?php echo $_smarty_tpl->tpl_vars['stat']->value['review_day_percent'];?>
%):</span></td>
                    		<td><div class="statistics-level" style="width: <?php echo $_smarty_tpl->tpl_vars['stat']->value['review_day_percent'];?>
%"></div></td>
                    	</tr>
<!--                     	<tr>
                    		<td>В этом месяце увеличилось гостей по сравнению с прошлым:</td>
                    		<td></td>
                    	</tr>
                    	<tr>
                    		<td><span>+21722232 (-10%):</span></td>
                    		<td><div class="statistics-level"></div></td>
                    	</tr> -->
                    	
                    </table>
<!--                     <small>* Пунктирная линия - показатели за предыдущий месяц</small> -->
                  
                </section>    
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>