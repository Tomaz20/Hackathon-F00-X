<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$query = "INSERT INTO professor
				VALUES (
				'".$_REQUEST['id']."',
				'".$_REQUEST['nome']."',
				'".$_REQUEST['data']."',
				'".$_REQUEST['hab']."',
				'".$_REQUEST['curso']."'				
				);";
	
	$dbh->query($query);
	echo "Sucesso!";
?>