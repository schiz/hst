<?php
$sth = $dbh->prepare("SELECT id, name FROM hst_catalog");
$sth->execute();
$rubrics = $sth->fetchAll(PDO::FETCH_KEY_PAIR);
if (!empty($rubrics)) {
	$smarty->assign('rubric_options', $rubrics);
	$smarty->assign('rubric_id', $_POST['rubric']);
}

$data = array($_POST['fio'], $_POST['phone'], $_POST['doing'], $_POST['email'], $_POST['title'], $_POST['rubric'], $_POST['message']);

foreach ($data as $v) {
	if (!isset($v)) {
		$check_form = false;
		break;
	} else {
		$check_form = true;
	}
}

if ($check_form) {
	if ($_POST['fio'] == '') {
		$smarty->assign('message', 'Не заполнено поле с именем');
	} elseif ($_POST['email'] == '') {
		$smarty->assign('message', 'Не заполнено поле с почтой');
	} elseif ($_POST['message'] == '') {
		$smarty->assign('message', 'Не заполнено поле с текстом сообщения');
	} else {
		$sth = $dbh->prepare("INSERT INTO hst_feedback (fio, phone, doing, email, title, rubric, message) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$sth->execute($data);
		header('Location: index.php?p=success_add&type=feedback');
	}
}
?>