<?php

# Оновити кількість переглядів

if (isset($_GET['id']) && isset($_POST['views'])) {
	$sth = $dbh->prepare("UPDATE hst_company SET views = ? WHERE id = ?");
	$sth->execute(array($_POST['views'], $_GET['id']));

	header('Location: index.php?p=edit_views');
}

if (!isset($_GET['id'])) {
	## Пошук конкретної компанії

	if (isset($_POST['company'])) {
		$value = $_POST['company'];
	} else {
		$value = '';
	}

	$text .= '
			<form class="form-horizontal" action="" method="POST" >
			Поиск компании: 
			<input type="text" name="company" placeholder="Название" value="'.$value.'" />
			<input type="submit" class="btn" value="Искать" />
			</form>';

	if (isset($_POST['company'])) {
		$sth = $dbh->prepare("SELECT id, name, subdomain FROM hst_company WHERE name LIKE ?");
		$sth->execute(array('%'.$_POST['company'].'%'));
		$company = $sth->fetchAll(PDO::FETCH_ASSOC);

		# Вивід списку компаній

		$text .= '<ul id="company_list">';
		foreach ($company as $item) {
			$text .= '<li><a href="index.php?p=edit_views&id='.$item['id'].'">'.
							htmlspecialchars($item['name']).
						'</a>
						</li>'."\n";
		}
		$text .= '</ul>';
	}


	# Отримати список компаній відсортований по кількості переглядів

	$sth = $dbh->prepare("SELECT id, name, views FROM hst_company ORDER BY views DESC LIMIT 0,20");
	$sth->execute();
	$top = $sth->fetchAll(PDO::FETCH_ASSOC);
	// var_dump($top);

	$text .= '<table class="table table-bordered">';

	$text .= 
	'<tr>
		<th>Название</th>
		<th>Просмотров</th>
		<th>Управление</th>
	</tr>';
	foreach ($top as $t) {
		$text .= 
	"	
	<tr>
		<td>{$t['name']}</td>
		<td>{$t['views']}</td>
		<td><a href='index.php?p=edit_views&id={$t['id']}'>Редактировать</a></td>
	</tr>
	";
	}

	$text .= '</table>';
			
} else {
	$sth = $dbh->prepare("SELECT views, name FROM hst_company WHERE id = ?");
	$sth->execute(array($_GET['id']));
	$company = $sth->fetch(PDO::FETCH_ASSOC);
	// $views = $sth->fetchColumn();
	// $name = $sth->fetchColumn(1);

	$text .= 'Компания: <strong>'. $company['name'] . '</strong><br />';

	$text .= '
			<form class="form-horizontal" action="" method="POST" >
			Количество просмотров: 
			<input type="text" name="views"  value="'.$company['views'].'" />
			<br /><input type="submit" class="btn" value="Сохранить" />
			</form>';

}

?>