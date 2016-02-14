<?php /* Smarty version Smarty-3.1.14, created on 2013-09-09 18:07:13
         compiled from ".\templates\trash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:591522dd87346eb70-42069064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cff5c3a9e68a13f08e513e3d40a9aa9c2a2b00f' => 
    array (
      0 => '.\\templates\\trash.tpl',
      1 => 1378739232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '591522dd87346eb70-42069064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522dd8735ff8d1_64796490',
  'variables' => 
  array (
    'title' => 0,
    'delbox' => 0,
    'del' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522dd8735ff8d1_64796490')) {function content_522dd8735ff8d1_64796490($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       

		<!-- start middle -->

		<div id="middle">

        	<!-- start cont_sub_pannel -->

			<div class="cont_sub_pannel">

            	<h1>Каталог фирм</h1>

				<!-- start breadcrumb -->

				<nav id="breadcrumb">

					<ul>

						<li><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>

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

				<h2>Удаленные</h2>

				<?php if (!empty($_smarty_tpl->tpl_vars['delbox']->value)){?><table border=0 class="mail">
                <tr>
                    <th class="m-date">
                        Дата
                    </th>
                    <th class="m-from">
                        От
                    </th>
                    <th class="m-subj">
                        Тема
                    </th>
                    <th class="m-text">
                        Текст
                    </th>
                </tr>
                <?php }else{ ?><a href="index.php?p=cabinet">Назад</a><br /><br /><br />
                <?php }?>
                <?php  $_smarty_tpl->tpl_vars['del'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['del']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['delbox']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['del']->key => $_smarty_tpl->tpl_vars['del']->value){
$_smarty_tpl->tpl_vars['del']->_loop = true;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['del']->value['send_time'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['del']->value['from_login'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['del']->value['subject'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['del']->value['message'];?>
  <a href="index.php?p=trash&amp;m=delete&amp;t=<?php echo $_smarty_tpl->tpl_vars['del']->value['send_time'];?>
">Удалить окончательно</a>
                    </td>
                </tr>
                <?php } ?>

                <?php if (!empty($_smarty_tpl->tpl_vars['delbox']->value)){?></table><?php }?>

				
			</section>          

			<!-- end content -->

		</div>

		<!-- end middle -->	

	</div>

	<!-- end mainarea --> 

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>