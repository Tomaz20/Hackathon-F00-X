<?php
	if($_FILES["ficheiro"]["error"] == 4 || pathinfo($_FILES['ficheiro']['name'], PATHINFO_EXTENSION) !== 'xml') {
		die("Erro, por favor insira um ficheiro XML");
	}
		
	$professores = simplexml_load_file($_FILES['ficheiro']['tmp_name']);
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
		
	foreach ($professores->professor as $a){
		$qstring = "INSERT INTO professor 
					VALUES(	'".(string)$a['id']."', 
							'".(string)$a->nome."',
							'".(string)$a->dataNasc."',
							'".(string)$a->habilitacoes."',
							'".(string)$a->curso."')";
							
		$dbh->query($qstring);
	}
		
	echo "Sucesso!";
?>