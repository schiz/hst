<?php
if (isset($_GET['m']) && $_GET['m'] == 'delete' && isset($_GET['id'])) {
	# Отримати номер компанії до якої видаляємо відгук
	$sth = $dbh->prepare("SELECT company FROM hst_reviews WHERE id = ? AND user = ?");
	$sth->execute(array($_GET['id'], $_SESSION['user_id']));
	$company = $sth->fetchColumn();

	# Видалити відгук
	$sth = $dbh->prepare("DELETE FROM hst_reviews WHERE id = ? AND user = ?");
	$sth->execute(array($_GET['id'], $_SESSION['user_id']));

	# Обновити кількість відгуків
	$sth = $dbh->prepare("UPDATE hst_company SET reviews_count = reviews_count - 1 WHERE id = ?");
	$sth->execute(array($company));

	header('Location: index.php?p=cabinet');
}
?>