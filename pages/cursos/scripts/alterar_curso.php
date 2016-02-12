<?php
	$id = $_REQUEST['id'];
	$designacao = $_REQUEST['designacao'];
	$instrumento = $_REQUEST['instrumento'];
	$duracao = $_REQUEST['duracao'];

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "UPDATE curso SET 
					curso_id='".$id."',
					curso_duracao=".$duracao.",
					curso_designacao='".$designacao."',
					curso_instrumento='".$instrumento."'
					WHERE curso_id='".$_REQUEST['oldid']."'";
					
	$dbh->query($qstring);
	echo "Sucesso";
?>