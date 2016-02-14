<?php
if (isset($_GET['type']) && $_GET['type'] == 'feedback') {
	$smarty->assign('text', "Отзыв успешно отправлено");
	$smarty->assign('title', 'Отзыв оставлено');
} else {
	$smarty->assign('text', "Компанию успешно добавлено");
	$smarty->assign('title', 'Компанию добавлено');
}
?>