<?php

# Дозвіл

if (isset($_GET['ok_id'])) {
	$sth = $dbh->prepare("UPDATE hst_reviews SET moderated = 1 WHERE id = ?");
	$sth->execute(array($_GET['ok_id']));

	$sth = $dbh->prepare("SELECT company FROM hst_reviews WHERE id = ?");
	$sth->execute(array($_GET['ok_id']));
	$company_id = $sth->fetchColumn();

	# Оновити лічільник відгуків (стало на один більше)
	$sth = $dbh->prepare("UPDATE hst_company SET reviews_count = reviews_count + 1 WHERE id = ?");
	$sth->execute(array($company_id));

	header('Location: index.php?p=review');
}

# Видалення

if (isset($_GET['del_id'])) {
	$sth = $dbh->prepare("DELETE FROM hst_reviews WHERE id = ?");
	$sth->execute(array($_GET['del_id']));
	header('Location: index.php?p=review');
}

$sth = $dbh->prepare("SELECT id, 
							(SELECT login FROM hst_users WHERE hst_users.id = hst_reviews.user) AS user_login, 
							(SELECT name FROM hst_company WHERE hst_company.id = hst_reviews.company) AS company_name, 
							review_text FROM hst_reviews WHERE moderated = 0 ORDER BY id DESC");
$sth->execute();
$reviews = $sth->fetchAll(PDO::FETCH_ASSOC);
// var_dump($reviews);

$text .= '<table class="table table-bordered table-striped">';
$text .= 
	'<tr>
		<th>Пользователь</th>
		<th>Компания</th>
		<th>Отзыв</ht>
		<th>Управление</th>
	</tr>';
foreach ($reviews as $r) {
	$text .= '<tr>
		<td>'.$r['user_login'].'</td>'.
		'<td>'.htmlspecialchars($r['company_name']).'</td>'.
		'<td>'.htmlspecialchars($r['review_text']).'</td>'.
		'<td><code><a href="index.php?p=review&ok_id='.$r['id'].'">Разрешить</a></code> &nbsp;&nbsp;&nbsp; 
			<code><a href="index.php?p=review&del_id='.$r['id'].'">Удалить</a></code> </td>
	</tr>';
}
$text .= '</table>';
?>