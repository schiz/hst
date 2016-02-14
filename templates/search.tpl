{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file='aside_catalog.tpl'}
			<!-- start content -->
			<section id="content">
				<h2>Результаты поиска</h2>
				
				{foreach $results as $item}
					<a href="index.php?p=subdomain&amp;name={$item.subdomain}">{$item.name|htmlspecialchars}</a><br />
					{$item.descr_short|htmlspecialchars}<br /><br />
				{/foreach}
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}