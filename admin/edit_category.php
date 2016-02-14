<?php
/*
Поля: Назва, Іконка, батьківська, опис, шлях до картинки
*/

# Видалення рубрики

if (isset($_GET['del_id'])) {
  # Видалити категорію
  $sth = $dbh->prepare("DELETE FROM hst_catalog WHERE id = ?");
  $sth->execute(array($_GET['del_id']));
  
  # Видалити підкатегорії
  $sth = $dbh->prepare("DELETE FROM hst_catalog WHERE parent_id = ?");
  $sth->execute(array($_GET['del_id']));

  header('Location: index.php');
  exit();
}


if (isset($_GET['id'])) {
  # Отримати інфу по категорії
  $sth = $dbh->prepare("SELECT name, parent_id, icon, description, photo_url FROM hst_catalog WHERE id = ? LIMIT 0,1");
  $sth->execute(array($_GET['id']));
  $rubric = $sth->fetch(PDO::FETCH_ASSOC);
  // var_dump($rubric);


  $name = (isset($_POST['c_name'])) ? $_POST['c_name'] : $rubric['name'];
  $icon = (isset($_POST['c_icon'])) ? $_POST['c_icon'] : $rubric['icon'];
  $descr = (isset($_POST['c_descr'])) ? $_POST['c_descr'] : $rubric['description'];
  $image = (isset($_POST['c_image'])) ? $_POST['c_image'] : $rubric['photo_url'];
  $parent = (isset($_POST['c_parent'])) ? (int) $_POST['c_parent'] : $rubric['parent_id'];

  # Перевірка форми

  if ($_POST['c_name'] != '') {
    $sth = $dbh->prepare("UPDATE hst_catalog SET name=?, parent_id=?, icon=?, description=?, photo_url=? WHERE id = ?");
    $sth->execute(array($name, $parent, $icon, $descr, $image, $_GET['id']));
    header('Location: index.php');
    exit();
  }

  $options = '<option value="0">Отсутствует</option>';
  foreach ($category as $item) {
    $sel = ($item['id'] == $parent) ? "selected='selected'" : '';
    $options .= '<option value="' . $item['id'] . '" '.$sel.'>' . $item['name'] . '</option>';
  }

  $id = (int) $_GET['id'];
  $text .= <<<EOF
  <form class="form-horizontal" action="" method="POST">
    <div class="control-group">
      <label class="control-label" for="inputName">Название *</label>
      <div class="controls">
        <input type="text" id="inputName" name="c_name" placeholder="Раздел" value="$name">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="inputIcon">Путь на сервере к иконке</label>
      <div class="controls">
        <input type="text" name="c_icon" id="inputIcon" placeholder="" value="$icon">
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="inputParent">Родительский раздел</label>
      <div class="controls">
        <select id="inputParent" name="c_parent">
          $options
        </select>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="inputDescr">Описание раздела</label>
      <div class="controls">
        <textarea id="inputDescr" name="c_descr">$descr</textarea>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="inputImage">Путь на сервере к картинке</label>
      <div class="controls">
        <input type="text" name="c_image" id="inputImage" placeholder="" value="$image">
      </div>
    </div>

    <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn">Сохранить</button>
        
      </div>
    </div>
  </form>

  <form id="delete_rubric" action="index.php?p=edit_category&del_id=$id" method="POST">
    <button id="delete" class="btn btn-danger" type="submit">Удалить</button>
  </form>
EOF;
}
?>