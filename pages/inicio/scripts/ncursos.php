<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$qstring = "SELECT COUNT(*) AS c FROM curso";

	$res = $dbh->query($qstring)->fetch();

	echo $res['c'];
?>