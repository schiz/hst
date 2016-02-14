<?php
# Получити інфу по отзиву

$review_id = $_GET['id'];
$sth = $dbh->prepare("SELECT review_text, mark FROM hst_reviews WHERE id = ?");
$sth->execute(array($_GET['id']));
$review = $sth->fetch(PDO::FETCH_ASSOC);
$text = $review['review_text'];
$mark = $review['mark'];

$smarty->assign('review_text', $text);
$smarty->assign('review_mark', $mark);

# Обновити інфу по отзиву

if (isset($_POST['review_text']) && isset($_POST['review_mark'])) {
	# первірка оцінки (1-7)
	if ($_POST['review_mark'] > 0 && $_POST['review_mark'] <=7) {
		$sth = $dbh->prepare("UPDATE hst_reviews SET review_text = ?, mark=? WHERE id=?");
		$sth->execute(array($_POST['review_text'], $_POST['review_mark'], $_GET['id']));
		header('Location: index.php?p=cabinet');
	}
}

?>