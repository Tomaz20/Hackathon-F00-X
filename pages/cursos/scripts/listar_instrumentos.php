<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "SELECT * FROM instrumento";
	$instrumentos = $dbh->query($qstring);
	
	$res = "";
	
	while($instrumento = $instrumentos->fetch()){
		$res .= "<option value='".$instrumento['instrumento_id']."'>".$instrumento['instrumento_designacao']."</option>";
	}	
	
	echo $res;
	
?>