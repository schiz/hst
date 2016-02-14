{include 'header.tpl'}       
<!-- start middle -->
		<div id="middle">
        	<!-- start cont_sub_pannel -->
			<div class="cont_sub_pannel">
            	<h1>Статистика</h1>
			</div>
			<!-- end cont_sub_pannel -->
			<!-- start content -->
				<section class="statistics-graph">
                	<header>
                    	<h1>Основное:</h1>
                   		<h1>Значение:</h1>
                    </header>
                    <table class="statistics-main">
                    	<tr>
                    		<td>Зарегистрировано на сайте: <span>{$stat.users}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.users_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Всего: <span>{$stat.users}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.users_percent}%"></div></td>
                    	</tr>
						<tr>
                    		<td>Новых за месяц: <span>{$stat.new_users_month}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.new_users_month_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Новых за неделю: <span>{$stat.new_users_week}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.new_users_week_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Новых за сутки: <span>{$stat.new_users_day}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.new_users_day_percent}%"></div></td>
                    	</tr>
                    </table>
                    <header>
                    	<h1>Пол:</h1>
                   		<h1>Значение:</h1>
                    </header>
                    <table class="statistics-sex">
                    	<tr>
                    		<td>М: <span>{$stat.boys}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.boys_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Ж: <span>{$stat.girls}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.girls_percent}%"></div></td>
                    	</tr>
      
                    </table>
                    <header>
                    	<h1>Возраст:</h1>
                   		<h1>Значение:</h1>
                    </header>
                    <table class="statistics-age">
                    	<tr>
                    		<td>От 15 до 20 лет: <span>{$stat.age_1}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.age_1_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>От 21 до 25 лет: <span>{$stat.age_2}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.age_2_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>От 26 до 30 лет: <span>{$stat.age_3}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.age_3_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>31 - 35: <span>{$stat.age_4}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.age_4_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>36 - 40: <span>{$stat.age_5}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.age_5_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>41 - 45: <span>{$stat.age_6}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.age_6_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>46 - 50: <span>{$stat.age_7}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.age_7_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>51 - 55: <span>{$stat.age_8}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.age_8_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>56 - 60: <span>{$stat.age_9}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.age_9_percent}%"></div></td>
                    	</tr>
      
                    </table>
                    <header>
                    	<h1>Он-лайн:</h1>
                   		<h1>Значение:</h1>
                    </header>
                     <table class="statistics-online">
                    	<tr>
                    		<td>Всего: <span>{$stat.total_online}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.total_online_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Гостей на сайте: <span>{$stat.guests}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.guests_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Пользователей на сайте: <span>{$stat.session_online}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.session_online_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Общее количество компаний: <span>{$stat.companies}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.companies_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>Опубликовано: <span>{$stat.companies}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.companies_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>- за месяц: <span>{$stat.company_month}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.company_month_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>-за неделю: <span>{$stat.company_week}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.company_week_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>- за день: <span>{$stat.company_day}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.company_day_percent}%"></div></td>
                    	</tr>
      
                    </table>
                    <header>
                    	<h1>Общее количество отзывов:</h1>
                   		<h1>Значение:</h1>
                    </header>
					<table class="statistics-comments">
                    	<tr>
                    		<td>- за месяц: <span>{$stat.review_month}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.review_month_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>- за неделю: <span>{$stat.review_week}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.review_week_percent}%"></div></td>
                    	</tr>
                    	<tr>
                    		<td>- за день: <span>{$stat.review_day}</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.review_day_percent}%"></div></td>
                    	</tr>
                    	
                    </table>
                    <header>
                    	<h1>Статистика увеличения:</h1>
                   		<h1>Значение:</h1>
                    </header>
                    <table class="statistics-increase">
                    	<tr>
                    		<td>В этом месяце увеличилось пользователей по сравнению с прошлым:</td>
                    		<td></td>
                    	</tr>
                    	<tr>
                    		<td><span>{$stat.difference_month} ({$stat.review_day_percent}%):</span></td>
                    		<td><div class="statistics-level" style="width: {$stat.review_day_percent}%"></div></td>
                    	</tr>
<!--                     	<tr>
                    		<td>В этом месяце увеличилось гостей по сравнению с прошлым:</td>
                    		<td></td>
                    	</tr>
                    	<tr>
                    		<td><span>+21722232 (-10%):</span></td>
                    		<td><div class="statistics-level"></div></td>
                    	</tr> -->
                    	
                    </table>
<!--                     <small>* Пунктирная линия - показатели за предыдущий месяц</small> -->
                  
                </section>    
			<!-- end content -->
		</div>
		<!-- end middle -->	
	</div>
	<!-- end mainarea --> 
{include 'footer.tpl'}