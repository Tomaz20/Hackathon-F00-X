<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$qstring = "DELETE FROM curso WHERE curso_id='".$_REQUEST['id']."'";
	$resultado = $dbh->query($qstring);

	header("Location: ../listar_cursos.html");
?>