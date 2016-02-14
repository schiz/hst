{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file="aside_catalog.tpl"}
			<!-- start content -->
			<section id="content">
				<h2>Входящие (<a href="index.php?p=compose">Написать</a>)</h2>
                {if !empty($inbox)}
				<table border=0 class="mail">
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
                {foreach $inbox as $in}
                <tr>
                    <td>
                        {$in.send_time}
                    </td>
                    <td>
                        {$in.from_login}
                    </td>
                    <td>
                        {$in.subject}
                    </td>
                    <td>
                        {$in.message} <a href="index.php?p=compose&amp;to={$in.from_login}&amp;subject=Re: {$in.subject}">Ответить</a> | <a href="index.php?p=inbox&amp;m=delete&amp;t={$in.send_time}">Удалить</a>
                    </td>
                </tr>
                {/foreach}
                {if !empty($inbox)}</table>{/if}
				
			</section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}