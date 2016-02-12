<?php
	if($_FILES["ficheiro"]["error"] == 4 || pathinfo($_FILES['ficheiro']['name'], PATHINFO_EXTENSION) !== 'xml') {
		die("Erro, por favor insira um ficheiro XML");
	}
		
	$alunos = simplexml_load_file($_FILES['ficheiro']['tmp_name']);
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
		
	foreach ($alunos->aluno as $a){
		$qstring = "INSERT INTO aluno 
					VALUES(	'".(string)$a['id']."', 
							'".(string)$a->nome."',
							'".(string)$a->dataNasc."',
							'".(string)$a->curso."',
							".(string)$a->anoCurso.",
							'".(string)$a->instrumento."')";
							
		$dbh->query($qstring);
	}
		
	echo "Sucesso!";
?>