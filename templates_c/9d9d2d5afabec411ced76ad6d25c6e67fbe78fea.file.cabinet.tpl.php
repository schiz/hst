<?php /* Smarty version Smarty-3.1.14, created on 2013-09-23 10:09:29
         compiled from "./templates/cabinet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:351536665523963287d0799-42051306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d9d2d5afabec411ced76ad6d25c6e67fbe78fea' => 
    array (
      0 => './templates/cabinet.tpl',
      1 => 1379945198,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '351536665523963287d0799-42051306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_523963289a7698_04810323',
  'variables' => 
  array (
    'user' => 0,
    'inbox' => 0,
    'outbox' => 0,
    'deleted' => 0,
    'companies' => 0,
    'company' => 0,
    'reviews' => 0,
    'r' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_523963289a7698_04810323')) {function content_523963289a7698_04810323($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/mnbtcom/public_html/hst/libs/plugins/modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
       
		<!-- start middle -->
		<div id="middle">
        	<?php echo $_smarty_tpl->getSubTemplate ('aside_catalog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<!-- start content -->
			<section id="content">
                <div class="personal_data">
                    <div class="personal_photo">
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['photo_url']!=''){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo_url'];?>
" alt="" width="168" height="168"/>
                        <?php }else{ ?>
                        <img src="img/no_photo_icon.jpg" alt="" width="168" height="168"/>
                        <?php }?>
                        <ul class="messages">
                            <li>
                                <a href="index.php?p=inbox">Входящие</a>
                                <span><?php echo $_smarty_tpl->tpl_vars['inbox']->value;?>
</span>
                            </li>
                            <li>
                                <a href="index.php?p=outbox">Отправленные</a>
                                <span><?php echo $_smarty_tpl->tpl_vars['outbox']->value;?>
</span>
                            </li>
                            <li>
                                <a href="index.php?p=trash">Удаленные</a>
                                <?php if ($_smarty_tpl->tpl_vars['deleted']->value){?><span class="red"><?php echo $_smarty_tpl->tpl_vars['deleted']->value;?>
</span><?php }?>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="personal_text">
                        <h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['fio']);?>
</h2>
                        <h3><?php if ($_smarty_tpl->tpl_vars['user']->value['male']==1){?>Мужчина<?php }else{ ?>Женщина<?php }?>, <?php echo $_smarty_tpl->tpl_vars['user']->value['age'];?>
 лет</h3>
                        
                        <dl class="info_list">
                            <dt>Эти данные не показываются в вашем профиле</dt>
                            <dd>
                                <span>Дата рождения:</span>
                                <i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['dob'],"%e %B %Y");?>
</i>
                            </dd>
                            <dd>
                                <span>Телефон:</span>
                                <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['phone']);?>
</i>
                            </dd>
                            <dd>
                                <span>Э-почта:</span>
                                <i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['mail']);?>
</i>
                            </dd>
                            <dd>
                                <span>Город:</span>
                                <i><?php echo $_smarty_tpl->tpl_vars['user']->value['city_name'];?>
</i>
                            </dd>
                            <dd>
                               <span>Адрес:</span>
                               <i><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</i>
                            </dd>
                        </dl>
                    </div>
                </div>
				<section class="gray my_companies last_updates">
                            <div class="top">
                                <h3>Мои компании</h3>
                                <a href="index.php?p=add_company" class="button button_orange">Добавить компанию <span></span></a>
                            </div>
                            <?php if (empty($_smarty_tpl->tpl_vars['companies']->value)){?>
                                Список компаний пуст
                            <?php }?>
                            <ul>
                                <?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
                                <li>
                                    <div class="votes">
                                        <div>
                                            <a href="index.php?p=edit_company&amp;id=<?php echo $_smarty_tpl->tpl_vars['company']->value['id'];?>
" class="edit">Редактировать</a>
                                            <a href="#" class="rate"><span class="r3"></span></a>
                                        </div>
                                        <p><?php echo $_smarty_tpl->tpl_vars['company']->value['reviews_count'];?>
 голосов</p>
                                        <strong><?php echo sprintf("%05d",$_smarty_tpl->tpl_vars['company']->value['id']);?>
</strong>
                                        
                                        <a href="#">Отзывов: <?php echo $_smarty_tpl->tpl_vars['company']->value['reviews_count'];?>
</a>
                                    </div>
                                    
                                    <div class="photo">
                                        <?php if ($_smarty_tpl->tpl_vars['company']->value['photo_url']!=''){?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['company']->value['photo_url'];?>
" alt="" width="70" height="75" />
                                        <?php }else{ ?>
                                        <img src="img/no_photo_icon.jpg" alt="" width="70" height="75" />
                                        <?php }?>
                                    </div>
                                  
                                    <dl>
                                        <dt>Название:</dt>
                                        <dd><a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['company']->value['subdomain'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['name']);?>
</a></dd>
                                        
                                        <dt>Раздел:</dt>
                                        <dd><a href="#"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['rubric_full_name']);?>
</a></dd>
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['company']->value['update_text']!=''){?>
                                        <dt>Обновления:</dt>
                                        <dd><?php echo $_smarty_tpl->tpl_vars['company']->value['update_text'];?>
</dd>
                                        <?php }?>

                                        <dt>Описание:</dt>
                                        <dd><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['company']->value['descr_short']);?>
</dd>
                                    </dl>
                                </li>
                                <?php } ?>
                            </ul>
                </section>
                <section class="my_comments">
                        <div class="top">
                            <h3>Мои отзывы</h3>
                        </div>
                        
                        <?php if (empty($_smarty_tpl->tpl_vars['reviews']->value)){?>Нет отзывов<?php }?>
                        <ul>
                            <?php  $_smarty_tpl->tpl_vars['r'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['r']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reviews']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['r']->key => $_smarty_tpl->tpl_vars['r']->value){
$_smarty_tpl->tpl_vars['r']->_loop = true;
?>
                            <li>
                                <div class="title">
                                    <a href="index.php?p=subdomain&amp;name=<?php echo $_smarty_tpl->tpl_vars['r']->value['company_subdomain'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['company_name']);?>
</a>
                                    <i><?php echo $_smarty_tpl->tpl_vars['r']->value['review_date'];?>
</i>
                                    <a href="#" class="rate"><span class="r<?php echo $_smarty_tpl->tpl_vars['r']->value['mark'];?>
"></span></a>
                                </div>
                                
                                <div class="text">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['r']->value['review_text']);?>

                                </div>
                                
                                <div class="links">
                                    <a href="index.php?p=review_edit&amp;id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="edit">Редактировать</a>
                                    <a href="index.php?p=review&amp;m=delete&amp;id=<?php echo $_smarty_tpl->tpl_vars['r']->value['id'];?>
" class="delete">Удалить</a>
                                </div>
                            </li>
                            <?php } ?>
                            
                           </ul>                 
                   </section>
            </section>          
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>