{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
			<!-- start content -->
			<section id="content">
                {if $static_message}<strong>{$static_message}</strong>{/if}
				<form id="lost-password" action="" method="POST">
				Ваш е-mail, на который будет выслан новый пароль:
				
				<br />
				<input type="text" name="email" value="{$smarty.post.email}" />
				<br />
				<a href="#" class="submit">Восстановить<span></span></a>
				</form>
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}