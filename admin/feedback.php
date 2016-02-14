<?php
$sth = $dbh->prepare("SELECT id, fio, phone, doing, email, title, (SELECT name FROM hst_catalog WHERE hst_catalog.id = rubric) AS rubric_name, message FROM hst_feedback ORDER BY id DESC LIMIT 0,100");
$sth->execute();
$feed = $sth->fetchAll(PDO::FETCH_ASSOC);

function filter(&$value) {
  $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
array_walk_recursive($feed, "filter");
// print_r($feed);

$text .= '<table class="table table-bordered">';
$text .= 
'<tr>
	<th>№</th>
	<th>Имя</th>
	<th>Телефон</th>
	<th>Деятельность</th>
	<th>Почта</th>
	<th>Заголовок</th>
	<th>Раздел</th>
	<th>Сообщение</th>
</tr>';
foreach ($feed as $f) {

	$text .= 
"	
<tr>
	<td>{$f['id']}</td>
	<td>{$f['fio']}</td>
	<td>{$f['phone']}</td>
	<td>{$f['doing']}</td>
	<td>{$f['email']}</td>
	<td>{$f['title']}</td>
	<td>{$f['rubric_name']}</td>
	<td>{$f['message']}</td>
</tr>
";
}
$text .= '</table>';
?>