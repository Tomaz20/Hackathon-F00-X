<?php
	if($_FILES["ficheiro"]["error"] == 4 || pathinfo($_FILES['ficheiro']['name'], PATHINFO_EXTENSION) !== 'xml') {
		die("Erro, por favor insira um ficheiro XML");
	}
		
	$obras = simplexml_load_file($_FILES['ficheiro']['tmp_name']);
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
		
	foreach ($obras->obra as $a){
		$qstring = "INSERT INTO obra 
					VALUES(	'".(string)$a['id']."', 
							'".(string)$a->nome."',
							'".(string)$a->desc."',
							".(string)$a->anoCriacao.",
							'".(string)$a->periodo."',
							'".(string)$a->compositor."',
							'".(string)$a->duracao."')";
							
		$dbh->query($qstring);
	}
		
	echo "Sucesso!";
?>