{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
			<!-- start content -->
			<section id="content">
                {if $static_message}<strong>{$static_message}</strong>{/if}
                <form id="review" action="" method="POST">
                Текст: <input type="text" name="review_text" value="{if $smarty.post.review_text}{$smarty.post.review_text}{else}{$review_text}{/if}" /><br />
                Оценка: <input type="text" name="review_mark" value="{if $smarty.post.review_mark}{$smarty.post.review_mark}{else}{$review_mark}{/if}" /><br />
                <input type="submit" />
                </form>
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}