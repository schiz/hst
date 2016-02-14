<?php
$value = (isset($_POST['login'])) ? $_POST['login'] : '';

$text .= '<form class="form-horizontal" action="index.php?p=edit_user" method="POST">
			Логин

			<input type="text" name="login" value="'.$value.'"/>
			<input class="btn" type="submit" value="Искать"/>
		</form>
		';

# Отримання інформації про корстувача
if ($value != '') {
	$sth = $dbh->prepare("SELECT id FROM hst_users WHERE login = ?");
	$sth->execute(array($value));
	$user_id = $sth->fetchColumn();
	
	if ($user_id != 0) {
		$text .= '<a href="index.php?p=edit_user&id='.$user_id.'">'.htmlspecialchars($value).'</a>';
	} else {
		$text .= 'Пользователь не найден';
	}
	
}

// if (isset($_GET['done'])) {
// 	$text .= 'Редактирование успешно';
// }

# Редагування користувача
if (isset($_GET['id'])) {
	$_SESSION['from_admin'] = true;
	header('Location: /admin_edit_user.php?id='.$_GET['id']);
}
?>