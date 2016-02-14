{include 'header.tpl'}       
		<!-- start middle -->
		<div id="middle">
        	{include file='aside_catalog.tpl'}
			<!-- start content -->
			<section id="content">
                <div class="personal_data">
                    <div class="personal_photo">
                        {if $user.photo_url != ''}
                        <img src="{$user.photo_url}" alt="" width="168" height="168"/>
                        {else}
                        <img src="img/no_photo_icon.jpg" alt="" width="168" height="168"/>
                        {/if}
                    </div>
                    
                    <div class="personal_text">
                        <h2>{$user.fio|htmlspecialchars}</h2>
                        <h3>{if $user.male==1}Мужчина{else}Женщина{/if}, {$user.age} лет</h3>
                   </div>
                </div>
            </section>          
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}