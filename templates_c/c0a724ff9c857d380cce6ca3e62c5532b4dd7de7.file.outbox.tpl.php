<?php /* Smarty version Smarty-3.1.14, created on 2013-09-09 18:02:11
         compiled from ".\templates\outbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15366522ddb84620652-22891912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0a724ff9c857d380cce6ca3e62c5532b4dd7de7' => 
    array (
      0 => '.\\templates\\outbox.tpl',
      1 => 1378738652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15366522ddb84620652-22891912',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522ddb84749634_49992926',
  'variables' => 
  array (
    'title' => 0,
    'outbox' => 0,
    'out' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ddb84749634_49992926')) {function content_522ddb84749634_49992926($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       

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

				<h2>Входящие (<a href="index.php?p=compose">Написать</a>)</h2>

				<table border=0 class="mail">
                <tr>
                    <th class="m-date">
                        Дата
                    </th>
                    <th class="m-from">
                        Кому
                    </th>
                    <th class="m-subj">
                        Тема
                    </th>
                    <th class="m-text">
                        Текст
                    </th>
                </tr>
                <?php  $_smarty_tpl->tpl_vars['out'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['out']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['outbox']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['out']->key => $_smarty_tpl->tpl_vars['out']->value){
$_smarty_tpl->tpl_vars['out']->_loop = true;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['out']->value['send_time'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['out']->value['to_login'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['out']->value['subject'];?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['out']->value['message'];?>
 
                    </td>
                </tr>
                <?php } ?>
                </table>

				
			</section>          

			<!-- end content -->

		</div>

		<!-- end middle -->	

	</div>

	<!-- end mainarea --> 

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>