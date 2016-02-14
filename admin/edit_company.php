<?php
$value = (isset($_POST['company'])) ? $_POST['company'] : '';

$text .= '<form class="form-horizontal" action="" method="POST">
			Название компании

			<input type="text" name="company" value="'.$value.'"/>
			<input class="btn" type="submit" value="Искать"/>
		</form>
		';

# Отримання інформації про компанію
if ($value != '') {
	$sth = $dbh->prepare("SELECT id, user_id, name, subdomain, (SELECT login FROM hst_users WHERE hst_users.id = hst_company.user_id) AS login, disable FROM hst_company WHERE name LIKE ?");
	$sth->execute(array('%'.$value.'%'));
	$company = $sth->fetchAll(PDO::FETCH_ASSOC);

	# Вивід списку компаній

	$text .= '<ul id="company_list">';
	foreach ($company as $item) {
		if ($item['disable'] == 0) {
			$dis_href = '<a href="index.php?p=edit_company&dis_id='.$item['id'].'">Блокировать компанию </a>';
		} elseif ($item['disable'] == 1) {
			$dis_href = '<a href="index.php?p=edit_company&dis_id='.$item['id'].'">Разблокировать компанию</a>';
		}

		$text .= '<li><a href="index.php?p=edit_company&id='.$item['id'].'&user_id='.$item['user_id'].'">'.
						htmlspecialchars($item['name']).
					'</a> (Пользователь: '.$item['login'].') 
					<a href="#">'.$dis_href.'</a>
					</li>'."\n";
	}
	$text .= '</ul>';
}

# Редагування компанії
if (isset($_GET['id'], $_GET['user_id'])) {
	$_SESSION['from_admin'] = true;
	header('Location: /admin_edit_company.php?id='.$_GET['id'].'&user_id='.$_GET['user_id']);
}

# Блокування компанії
if (isset($_GET['dis_id'])) {
	$sth = $dbh->prepare("SELECT disable FROM hst_company WHERE id = ?");
	$sth->execute(array($_GET['dis_id']));
	$disable = $sth->fetchColumn();
	if ($disable == 0) { $disable = 1; }
	else { $disable = 0; }

	$sth = $dbh->prepare("UPDATE hst_company SET disable = ? WHERE id = ?");
	$sth->execute(array($disable, $_GET['dis_id']));
	header('Location: index.php?p=edit_company');
}
?>