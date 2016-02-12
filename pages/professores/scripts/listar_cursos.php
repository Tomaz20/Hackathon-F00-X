<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "SELECT curso_id, curso_designacao FROM curso";
	$resultado = $dbh->query($qstring);
	
	$res = "";
	
	while($curso = $resultado->fetch()){
		$res .= "<option value='".$curso['curso_id']."'>".$curso['curso_designacao']."</option>";
	}	
	
	echo $res;
	
?>