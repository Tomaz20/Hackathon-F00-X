<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$qstring = "SELECT COUNT(*) AS c FROM audicao";

	$res = $dbh->query($qstring)->fetch();

	echo $res['c'];
?>