<?php
# Підключитися до БД
$host = 'localhost';
$dbname = 'mnbtcom_hst';
$user = 'mnbtcom_rostik';
$pass = ')v.@^tUvRQZ#';
$dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);  
$dbh->query("SET NAMES utf8");
?>