<?php

if (isset($_GET['r_del'], $_SESSION['is_admin'])) {
	$sth = $dbh->prepare("SELECT company FROM hst_reviews WHERE id = ?");
	$sth->execute(array($_GET['r_del']));
	$company = $sth->fetchColumn();

	$sth = $dbh->prepare("DELETE FROM hst_reviews WHERE id = ?");
	$sth->execute(array($_GET['r_del']));

	# Оновити лічільник відгуків (стало на один менше)
	$sth = $dbh->prepare("UPDATE hst_company SET reviews_count = reviews_count - 1 WHERE id = ?");
	$sth->execute(array($company));
	header('Location: index.php?p=subdomain&name='.$_GET['name']);
}

# Отримати інформацію по компанії

$days  = array(
	1 => 'Понедельник',
	2 => 'Вторник',
	3 => 'Среда',
	4 => 'Четверг',
	5 => 'Пятница',
	6 => 'Суббота',
	7 => 'Воскресенье');

if (isset($_GET['name'])) {
	$sth = $dbh->prepare("SELECT `id`, `user_id`, `name`, (SELECT name FROM hst_catalog WHERE id = `rubric`) as rubric_name, `descr_short`, `descr_long`, `city`, 
							`address`, `phone`, `fax`, `email`, `site`, `start_day`, `end_day`, 
							`start_hour`, `start_min`, `end_hour`, `end_min`, `keywords`, `position`, 
							`rec_code`, `photo_url`, `banner`, `disable`
				    FROM hst_company WHERE subdomain = ?");
	$sth->execute(array($_GET['name']));
	$domain = $sth->fetch(PDO::FETCH_ASSOC);
	# Замінити дні текстовими еквівалентами
	$domain['start_day'] = $days[$domain['start_day']];
	$domain['end_day'] = $days[$domain['end_day']];

	# Отримати список товарів
	$sth = $dbh->prepare("SELECT photo_url, descr FROM hst_tovar WHERE company_id = ?");
	$sth->execute(array($domain['id']));
	$products = $sth->fetchAll(PDO::FETCH_ASSOC);

	# Отримати список матеріалів
	$sth = $dbh->prepare("SELECT name, `date`, descr, file_url FROM hst_material WHERE company_id = ?");
	$sth->execute(array($domain['id']));
	$materials = $sth->fetchAll(PDO::FETCH_ASSOC);

	# Отримати список відгуків
	$sth = $dbh->prepare("SELECT id, 
								user,
								(SELECT fio FROM hst_users WHERE id = user) as user_name, 
								(SELECT photo_url FROM hst_users WHERE id = user) as photo, 
								review_text, 
								mark,
								review_date
						FROM hst_reviews WHERE company = ? AND moderated = 1");
	$sth->execute(array($domain['id']));
	$reviews = $sth->fetchAll(PDO::FETCH_ASSOC);

	# Додати текстову оцінку
	foreach ($reviews as $key=>$value) {
		switch($value['mark']) {
			case 1:
				$reviews[$key]['mark_descr'] = 'хуже некуда';
				break;
			case 2:
				$reviews[$key]['mark_descr'] = 'очень плохо';
				break;
			case 3:
				$reviews[$key]['mark_descr'] = 'неудовлетворительно';
				break;
			case 4:
				$reviews[$key]['mark_descr'] = 'нормально';
				break;	
			case 5:
				$reviews[$key]['mark_descr'] = 'хорошо';
				break;	
			case 6:
				$reviews[$key]['mark_descr'] = 'очень хорошо';
				break;	
			case 7:
				$reviews[$key]['mark_descr'] = 'превосходно';
				break;
			case 0:
				$reviews[$key]['mark_descr'] = 'без оценки';		
				break;							
		}
	}

	$smarty->assign('reviews', $reviews);
	$smarty->assign('materials', $materials);
	$smarty->assign('products', $products);
	$smarty->assign('domain', $domain);

	# Додавання відгуку

	if (isset($_POST['review_text'], $_SESSION['user_id'], $_POST['rate_number'])) {
		# Додавати лише оцінки не більше 7
		if ($_POST['review_text'] != '' && $_POST['rate_number'] <= 7) {
			$sth = $dbh->prepare("INSERT INTO hst_reviews (company, user, review_text, mark, review_date) VALUES (?, ?, ?, ?, now())");
			$sth->execute(array($domain['id'], $_SESSION['user_id'], $_POST['review_text'], $_POST['rate_number']));
			
			# Відправити листа адміністратору

			$sth = $dbh->prepare("SELECT `value` FROM hst_settings WHERE name='admin_email'");
			$sth->execute();
			$admin_email = $sth->fetchColumn();

			# Отримати логін користувача

			$sth = $dbh->prepare("SELECT login, mail FROM hst_users WHERE id = ?");
			$sth->execute(array($_SESSION['user_id']));
			$user = $sth->fetch(PDO::FETCH_ASSOC);

			$headers .= "MIME-Version: 1.0\r\n";
	    	$headers .= "Content-Type: text/html; charset=utf-8\r\n";

			if ($admin_email != '') {
				mail($admin_email, 
					"Новый отзыв на сайте HST", 
					"Пользователь ".$user['login']." оставил отзыв о компании «".$domain['name']. "». Промодерировать отзыв можно через админ-панель. ", $headers);
			}

			# Надіслати листа користувачу

			$rate = (int) $_POST['rate_number'];
			mail($user['mail'], 
				"Новый отзыв о Вашей компании на сайте HST", 
				"Пользователь ".$user['login']." оставил отзыв о компании «".$domain['name']. "» с оценкой ".$rate.". Отзыв появится на сайте после подтверждения администратором.", $headers);

			header('Location: '.$_SERVER['REQUEST_URI']);
		}
		
	}

	# Збільшити кількість переглядів компанії (буде враховуватися в каталозі)
	$sth = $dbh->prepare("UPDATE hst_company SET views = views + 1 WHERE id = ?");
	$sth->execute(array($domain['id']));
}
?>