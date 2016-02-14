<?php

if (isset($_GET['to'], $_GET['subject'])) {

}

if (isset($_POST['to_user'], $_POST['subject'], $_POST['text'])) {
	# Перевірити чи є такий користувач
	$sth = $dbh->prepare("SELECT id FROM hst_users WHERE login = ?");
	$sth->execute(array($_POST['to_user']));

	if ($sth->rowCount() > 0) {
		$user_id_to = $sth->fetchColumn();
		$sth = $dbh->prepare("INSERT INTO hst_mail (send_time, from_user, to_user, subject, message )  VALUES (now(),?,?,?,?)");
		$sth->execute(array($_SESSION['user_id'], $user_id_to, $_POST['subject'], $_POST['text']));
		$smarty->assign('static_message', 'Сообщение успешно отправлено');
	} else {
		$smarty->assign('static_message', 'Не найден такой пользователь');
	}
}
?>