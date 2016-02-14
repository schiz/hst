{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
			<!-- start content -->
			<section id="content">
				<h2>Удаленные</h2>
				{if !empty($delbox)}<table border=0 class="mail">
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
                {else}<a href="index.php?p=cabinet">Назад</a><br /><br />
                {/if}
                {foreach $delbox as $del}
                <tr>
                    <td>
                        {$del.send_time}
                    </td>
                    <td>
                        {$del.from_login}
                    </td>
                    <td>
                        {$del.subject}
                    </td>
                    <td>
                        {$del.message}  <a href="index.php?p=trash&amp;m=delete&amp;t={$del.send_time}">Удалить окончательно</a>
                    </td>
                </tr>
                {/foreach}
                {if !empty($delbox)}</table>{/if}
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}