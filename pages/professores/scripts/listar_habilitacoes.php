<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "SELECT habilitacao_id, habilitacao_designacao FROM habilitacao";
	$resultado = $dbh->query($qstring);
	
	$res = "";
	
	while($hab = $resultado->fetch()){
		$res .= "<option value='".$hab['habilitacao_id']."'>".$hab['habilitacao_designacao']."</option>";
	}	
	
	echo $res;
	
?>