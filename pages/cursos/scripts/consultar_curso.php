<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "SELECT * FROM curso WHERE curso_id = ".$_REQUEST['id']."";
	$resultado = $dbh->query($qstring);
	$curso = $resultado->fetch();

	$qstring = "SELECT * FROM instrumento WHERE instrumento_id = '".$curso['curso_instrumento']."'";
	$instrumento = $dbh->query($qstring)->fetch();

	echo "<p><b>Designação:</b> ".$curso['curso_designacao']."</p><hr/>";
	echo "<p><b>Instrumento:</b> ".$instrumento['instrumento_designacao']."</p><hr/>";
	echo "<p><b>Duração:</b> ".$curso['curso_duracao']." Anos</p><br/>";
	
?>