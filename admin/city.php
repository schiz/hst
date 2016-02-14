<?php
$sth = $dbh->query("SELECT id, name FROM hst_city");
$city = $sth->fetchAll(PDO::FETCH_ASSOC);

# Додати місто

if (isset($_POST['city']) && $_POST['city'] != '') {
	$sth = $dbh->prepare("INSERT INTO hst_city VALUES (NULL, ?)");
	$sth->execute(array($_POST['city']));
	header('Location: index.php?p=city');
	exit();
}

$text .= '
<form class="form-horizontal" action="" method="POST">
  <div class="control-group">
    <label class="control-label" for="inputCity">Добавить город</label>
    <div class="controls">
      <input type="text" id="inputCity" name="city" placeholder="Название города">
    </div>
  </div>

  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Добавить</button>
    </div>
  </div>
 </form>';

$text .= '<ul id="city">';
foreach ($city as $item) {
	$text .= '<li>'.$item['name'].' <small><a href="index.php?p=edit_city&id='.$item['id'].'">редактировать</a></small></li>';
}
$text .= '</ul>';



?>