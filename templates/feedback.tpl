{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
			<!-- start content -->
			<section id="content">
                {if $static_message}<strong>{$static_message}</strong>{/if}
                <!-- start feedback -->
                <form id="feedback" action="{$smarty.server.REQUEST_URI}" method="POST">
                    <div>
                        <label>
                            <span>Как вас зовут? (Ф.И.О)</span>
                            <input type="text" name="fio" value="{$smarty.post.fio}" />
                        </label>
                        <label>
                            <span>Номер телефона:</span>
                            <input type="text" name="phone" value="{$smarty.post.phone}" />
                        </label>
                        <label>
                            <span>Род деятельности:</span>
                            <input type="text" name="doing" value="{$smarty.post.doing}" />
                        </label>
                        <label>
                            <span>Электропочта:</span>
                            <input type="text" name="email" value="{$smarty.post.email}" />
                        </label>
                        <label>
                            <span>Тема сообщения:</span>
                            <input type="text" name="title" value="{$smarty.post.title}" />
                        </label>
                        <label>
                            <span>Рубрика к которой относится компания:</span>
                            {html_options class=rubric name=rubric options=$rubric_options selected=$rubric_id}
                        </label>
                        <label>
                            <span>Текст сообщения:</span>
                            <textarea name="message" cols="" rows="">{$smarty.post.message}</textarea>
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
{include 'footer.tpl'}