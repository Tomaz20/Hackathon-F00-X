<?php
	$id = $_REQUEST['id'];
	$nome = $_REQUEST['nome'];
	$ano = $_REQUEST['ano'];
	$periodo = $_REQUEST['periodo'];
	$compositor = $_REQUEST['compositor'];
	$duracao = $_REQUEST['duracao'];
	$descricao = $_REQUEST['descricao'];

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "UPDATE obra SET 
					obra_id='".$id."',
					obra_nome='".$nome."',
					obra_descricao='".$descricao."',
					obra_ano_criacao=".$ano.",
					obra_periodo='".$periodo."',
					obra_compositor='".$compositor."',
					obra_duracao='".$duracao."'
					WHERE obra_id='".$_REQUEST['oldid']."'";
					
	$dbh->query($qstring);
	echo "Sucesso!";
?>