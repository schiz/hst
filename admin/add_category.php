<?php
/*
Поля: Назва, Іконка, батьківська, опис, шлях до картинки
*/

$get_parent = (isset($_GET['parent'])) ? $_GET['parent'] : 0;

$name = (isset($_POST['c_name'])) ? $_POST['c_name'] : '';
$icon = (isset($_POST['c_icon'])) ? $_POST['c_icon'] : '';
$descr = (isset($_POST['c_descr'])) ? $_POST['c_descr'] : '';
$image = (isset($_POST['c_image'])) ? $_POST['c_image'] : '';
$parent = (isset($_POST['c_parent'])) ? (int) $_POST['c_parent'] : $get_parent;

# Перевірка форми

if ($name != '') {
  $sth = $dbh->prepare("INSERT INTO hst_catalog (name, parent_id, icon, description, photo_url) VALUES (?,?,?,?,?)");
  $sth->execute(array($name, $parent, $icon, $descr, $image));
  header('Location: index.php');
  exit();
}

$options = '<option value="0">Отсутствует</option>';
foreach ($category as $item) {
  $sel = ($item['id'] == $parent) ? "selected='selected'" : '';
  $options .= '<option value="' . $item['id'] . '" '.$sel.'>' . $item['name'] . '</option>';
}

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
      <button type="submit" class="btn">Добавить</button>
    </div>
  </div>
</form>
EOF;
?>