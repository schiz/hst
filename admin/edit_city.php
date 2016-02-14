<?php
/*
Поля: Назва
*/

# Видалення рубрики

if (isset($_GET['del_id'])) {
  # Видалити місто
  $sth = $dbh->prepare("DELETE FROM hst_city WHERE id = ?");
  $sth->execute(array($_GET['del_id']));
  
  header('Location: index.php?p=city');
  exit();
}


if (isset($_GET['id'])) {
  # Назва міста

  $sth = $dbh->prepare("SELECT name FROM hst_city WHERE id = ? LIMIT 0,1");
  $sth->execute(array($_GET['id']));
  $name = $sth->fetchColumn();

  # Перевірка форми

  if ($_POST['name'] != '') {
    $sth = $dbh->prepare("UPDATE hst_city SET name=? WHERE id = ?");
    $sth->execute(array($_POST['name'], $_GET['id']));
    header('Location: index.php?p=city');
    exit();
  }

  $id = (int) $_GET['id'];
  $text .= <<<EOF
  <form class="form-horizontal" action="" method="POST">
    <div class="control-group">
      <label class="control-label" for="inputName">Название: </label>
      <div class="controls">
        <input type="text" id="inputName" name="name" value="$name">
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn">Сохранить</button>
        
      </div>
    </div>
  </form>

  <form id="delete_rubric" action="index.php?p=edit_city&del_id=$id" method="POST">
    <button id="delete" class="btn btn-danger" type="submit">Удалить</button>
  </form>
EOF;
}
?>