<?php


function subcategories($parent_id) {
	global $dbh;
	$sth = $dbh->prepare("SELECT id, name FROM hst_catalog WHERE parent_id = ?");
	$sth->execute(array($parent_id));
	$subcategory = $sth->fetchAll();
	
	return $subcategory;
}

$text .= '<ul id="categories">';
foreach ($category as $item) {
	$text .= '<li><a href="index.php?p=edit_category&id=' . $item['id'] . '">' . $item['name'] . '</a> (<a title="Добавить подкатегорию" href="index.php?p=add_category&parent='.$item['id'].'">+</a>)</li>';
	$subcats = subcategories($item['id']);

	$text .= '<ul class="subcategories">';
	foreach ($subcats as $sub) {
		$text .= '<li><a href="index.php?p=edit_category&id=' . $sub['id'] . '">' . $sub['name'] . '</a></li>';
	} 
	$text .= '</ul>';
}
$text .= '</ul>';
?>