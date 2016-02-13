<?php

	$dbh = new PDO('mysql:host=localhost;dbname=hackathon', 'root', 'root');
	
	$qstring = "SELECT id_sintoma, designacao FROM Sintoma";
	$resultado = $dbh->query($qstring);
	
	$res = "";
	
	while($sintoma = $resultado->fetch()){
		$res .= "<option value='".$sintoma['id_sintoma']."'>".$sintoma['designacao']."</option>";
	}	
	
	echo $res;
	
?>