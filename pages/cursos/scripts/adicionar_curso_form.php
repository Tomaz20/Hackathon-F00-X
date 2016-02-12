<?php
	
	$id = $_REQUEST['id'];
	$designacao = $_REQUEST['designacao'];
	$instrumento = $_REQUEST['instrumento'];
	$duracao = $_REQUEST['duracao'];
	
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$query = "INSERT INTO curso 
				VALUES (
					'".$id."',
					".$duracao.",
					'".$designacao."',
					'".$instrumento."'
				)";
	
	$dbh->query($query);
	echo "Sucesso";
?>