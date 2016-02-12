<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "SELECT compositor_id, compositor_nome FROM compositor";
	$compositores = $dbh->query($qstring);
	
	$res = "";
	
	while($compositor = $compositores->fetch()){
		$res .= "<option value='".$compositor['compositor_id']."'>".$compositor['compositor_nome']."</option>";
	}	
	
	echo $res;
	
?>