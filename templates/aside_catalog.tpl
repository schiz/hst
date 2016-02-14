        	<!-- start cont_sub_pannel -->
			<div class="cont_sub_pannel">
            	<h1>Каталог фирм</h1>
				<!-- start breadcrumb -->
				<nav id="breadcrumb">
					<ul>
						{if $path_string}
                            {$path_string}
                        {else}
                            <li>{$title}</li>
                        {/if}
					</ul>
				</nav>
				<!-- end breadcrumb -->
                {if $show_edit_profile}
                <a href="index.php?p=edit_profile" class="button button_orange">Редактировать <span></span></a>
                {/if}
			</div>
			<!-- end cont_sub_pannel -->
            
        	<!-- start aside -->
			<aside>
                <nav id="category">
                    <ul>
                        {foreach from=$category_copy item=c}
                        <li>
                            <a href="#">
                                <span class="ico"><img src="{$c.icon}" alt="Авто, мото" width="16" height="32"></span>
                                {$c.name|htmlspecialchars}
                                <span>{$c.real_count}</span>
                            </a>
                            {if $c.subitems}
                                <ul>
                                {foreach from=$c.subitems item=s}
                                <li>
                                    {if $smarty.get.p == 'rating'}
                                    <a href="index.php?p=rating&amp;subcat={$s.id}">{$s.name}</a>
                                    {elseif $smarty.get.p == 'updates'}
                                    <a href="index.php?p=updates&amp;subcat={$s.id}">{$s.name}</a>
                                    {else}
                                    <a href="index.php?subcat={$s.id}">{$s.name}</a>
                                    {/if}
                                    <span>{$s.count}</span>
                                </li>
                                {/foreach}
                                </ul>
                            {/if}
                        </li>
                        {/foreach}
                    </ul>
                </nav>
                {if $vertical}
                <div id="vertical">
                    <img src="/upload/adm-banner/vertical.png" />
                </div>
                {/if}
			</aside>          
			<!-- end aside -->
