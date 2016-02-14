{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
			<!-- start content -->
			<section id="content">
				<h2>Входящие (<a href="index.php?p=compose">Написать</a>)</h2>
				{if !empty($outbox)}<table border=0 class="mail">
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
                {else}<a href="index.php?p=cabinet">Назад</a><br /><br />
                {/if}
                {foreach $outbox as $out}
                <tr>
                    <td>
                        {$out.send_time}
                    </td>
                    <td>
                        {$out.to_login}
                    </td>
                    <td>
                        {$out.subject}
                    </td>
                    <td>
                        {$out.message} 
                    </td>
                </tr>
                {/foreach}
                {if !empty($outbox)}</table>{/if}
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}