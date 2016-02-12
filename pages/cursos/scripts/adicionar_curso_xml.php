<?php
	if($_FILES["ficheiro"]["error"] == 4 || pathinfo($_FILES['ficheiro']['name'], PATHINFO_EXTENSION) !== 'xml') {
		die("Erro, por favor insira um ficheiro XML");
	}
		
	$cursos = simplexml_load_file($_FILES['ficheiro']['tmp_name']);
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
		
	foreach ($cursos->curso as $a){
		$qstring = "INSERT INTO curso 
					VALUES(	'".(string)$a['id']."', 
							".(string)$a->duracao.",
							'".(string)$a->designacao."',
							'".(string)$a->instrumento."')";
							
		$dbh->query($qstring);
	}
		
	echo "Sucesso!";
?>