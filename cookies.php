<?php
if (!isset($_SESSION['authorized'])) {
	if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
			$authorized = $dbh->prepare("SELECT id FROM hst_users WHERE login = ? AND password = ?");
			$authorized->execute(array($_COOKIE['login'], $_COOKIE['password']));
			#$authorized->debugDumpParams();
			if ($authorized->rowCount() > 0) {
				$_SESSION['authorized'] = true;
				$_SESSION['user_id'] = $authorized->fetchColumn();
			} 
	}	
}
?>