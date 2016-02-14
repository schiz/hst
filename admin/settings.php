<?php
if (isset($_POST['admin_email'])) {
	$sth = $dbh->prepare("UPDATE hst_settings SET `value` = ? WHERE `name` = 'admin_email'");
	$sth->execute(array($_POST['admin_email']));
	header('Location: index.php?p=settings');
}


$sth = $dbh->prepare("SELECT `value` FROM hst_settings WHERE name='admin_email'");
$sth->execute();
$value = $sth->fetchColumn();

$text .= '<form class="form-horizontal" action="" method="POST">
			<div class="control-group">
					<label class="control-label">
							Почта администратора 
					</label>
					<div class="controls">
							<input type="text" name="admin_email" value="'.$value.'"/>
					</div>
			</div>

			<div class="control-group">
		    		<div class="controls">
							<input class="btn" type="submit" value="Сохранить"/>
					</div>
			</div>
		</form>
		';
?>