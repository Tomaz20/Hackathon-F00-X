<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "UPDATE professor SET 
					professor_id='".$_REQUEST['id']."',
					professor_nome='".$_REQUEST['nome']."',
					professor_data_nasc='".$_REQUEST['ano']."',
					professor_habilitacao='".$_REQUEST['hab']."',
					professor_curso='".$_REQUEST['curso']."'
					WHERE professor_id='".$_REQUEST['oldid']."'";
									
	$dbh->query($qstring);

	echo "Sucesso!";
?>