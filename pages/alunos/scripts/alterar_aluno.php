<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "SELECT curso_instrumento FROM curso WHERE curso_id='".$_REQUEST['curso']."'";
	$res = $dbh->query($qstring);
	
	$curso = $res->fetch();
	
	$qstring = "UPDATE aluno SET 
					aluno_id='".$_REQUEST['id']."',
					aluno_nome='".$_REQUEST['nome']."',
					aluno_data_nasc='".$_REQUEST['data']."',
					aluno_instrumento='".$curso['curso_instrumento']."',
					aluno_curso='".$_REQUEST['curso']."'
					WHERE aluno_id='".$_REQUEST['oldid']."'";
					
	$dbh->query($qstring);

	echo "Sucesso!";
?>