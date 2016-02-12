<?php
	
	$id = $_REQUEST['id'];
	$nome = $_REQUEST['nome'];
	$ano = $_REQUEST['ano'];
	$periodo = $_REQUEST['periodo'];
	$compositor = $_REQUEST['compositor'];
	$duracao = $_REQUEST['duracao'];
	$descricao = $_REQUEST['descricao'];
	
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$query = "INSERT INTO obra 
				VALUES (
					'".$id."',
					'".$nome."',
					'".$descricao."',
					".$ano.",
					'".$periodo."',
					'".$compositor."',
					'".$duracao."'
				)";
	
	$dbh->query($query);
	echo "Sucesso";
?>