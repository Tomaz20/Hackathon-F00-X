<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$qstring = "CALL sp_removeAudicao('".$_REQUEST['id']."')";
	$resultado = $dbh->query($qstring);

	/*$qstring = "DELETE FROM audicao_atuacao WHERE audicao_id='".$_REQUEST['id']."'";
	$resultado = $dbh->query($qstring);*/

	header("Location: ../listar_audicoes.html");
?>