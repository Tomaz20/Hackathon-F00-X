<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "UPDATE audicao SET 
					audicao_titulo='".$_REQUEST['titulo']."',
					audicao_subtitulo='".$_REQUEST['subtitulo']."',
					audicao_tema='".$_REQUEST['tema']."',
					audicao_local='".$_REQUEST['local']."',
					audicao_duracao='".$_REQUEST['duracao']."'
					WHERE audicao_id='".$_REQUEST['oldid']."'";
				
	$dbh->query($qstring);
	echo "Sucesso";
?>