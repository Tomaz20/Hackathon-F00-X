<?php

	$dbh = new PDO('mysql:host=localhost;dbname=hackathon', 'root', 'root');

	$qstring = 
	"SELECT b.nome FROM (
	    SELECT COUNT(sintoma) AS nsintomas,nome FROM Doenca 
	    INNER JOIN Doenca_Sintoma
	    ON id_doenca=doenca
	    WHERE sintoma in (".$_REQUEST['sintoma[0]'];
	
	for($i=1;i<$_GET['ns'];$i++){
		$qstring .= ",".$_REQUEST['sintoma['.i.']'];
	}

	$qstring .= ")
		GROUP BY id_doenca) AS b
	WHERE b.nsintomas=".($_GET['ns']+1);
	

	alert $qstring;
	

	$resultado = $dbh->query($qstring);
	

?>