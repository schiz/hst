<?php
function randStr($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

if (isset($_POST['email'])) {
	# перевірити чи є така пошта в базі
	$email = $dbh->prepare("SELECT id FROM hst_users WHERE mail = ?");
	$email->execute(array($_POST['email']));
	if ($email->rowCount() > 0) {
		# обновити пароль
		$update = $dbh->prepare("UPDATE hst_users SET password = ? WHERE mail = ?");
		$new_password = randStr(5);
		$update->execute(array(md5($new_password), $_POST['email']));
		# надіслати пароль на пошту
		$headers .= "MIME-Version: 1.0\r\n";
    	$headers .= "Content-Type: text/html; charset=utf-8\r\n";
		mail($_POST['email'], "Восстановление пароля на сайте HST", "Произошло обновление Вашего пароля на сайте. <br />\nНовый пароль для входа: $new_password", $headers);
		$smarty->assign('static_message', 'Пароль отправлен на почту');
	} else {
		$smarty->assign('static_message', 'Пользователь с таким электронным адресом не найден.');
	}	
}
?>