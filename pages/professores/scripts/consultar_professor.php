<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	

	$qstring = "SELECT * FROM professor WHERE professor_id = ".$_REQUEST['id']."";
	$resultado = $dbh->query($qstring);
	$professor = $resultado->fetch();
	
	$qstring = "SELECT curso_designacao FROM curso WHERE curso_id = '".$professor['professor_curso']."'";
	$curso = $dbh->query($qstring)->fetch();

	$qstring = "SELECT habilitacao_designacao FROM habilitacao WHERE habilitacao_id = '".$professor['professor_habilitacao']."'";
	$habilitacao = $dbh->query($qstring)->fetch();	
	
	echo "<p><b>Nome:</b> ".$professor['professor_nome']."</p><hr/>";
	echo "<p><b>Data de Nascimento:</b> ".$professor['professor_data_nasc']."</p><hr/>";
	echo "<p><b>Curso:</b> ".$curso['curso_designacao']."</p><hr/>";	
	echo "<p><b>Habilitações:</b> ".$habilitacao['habilitacao_designacao']."</p><br/>";
	
?>