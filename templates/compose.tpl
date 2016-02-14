{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
			<!-- start content -->
			<section id="content">
                {if $static_message}<strong>{$static_message}</strong>{/if}
                {if $static_message != 'Сообщение успешно отправлено'}
				<form id="compose" action="{$smarty.server.REQUEST_URI}" method="POST">
					Кому (логин): <br /><input type="text" name="to_user" value="{if $smarty.get.to}{$smarty.get.to}{else}{$smarty.post.to_user}{/if}" /><br />
					Тема: <br /><input type="text" name="subject" value="{if $smarty.get.subject}{$smarty.get.subject}{else}{$smarty.post.subject}{/if}" /><br />
					Сообщение: <br /><textarea name="text">{$smarty.post.text}</textarea><br />
					<a href="#" id="send-message" class="send yellow-button">Отправить</a>
				</form>
                {/if}
                <br /><br />
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}