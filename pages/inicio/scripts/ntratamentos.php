<?php
	$dbh = new PDO('mysql:host=localhost;dbname=hackathon', 'root', 'root');

	$qstring = "SELECT COUNT(*) AS c FROM Tratamento";

	$res = $dbh->query($qstring)->fetch();

	echo $res['c'];
?>