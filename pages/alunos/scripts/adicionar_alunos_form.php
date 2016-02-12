<?php
	
	$ids = $_REQUEST['id'];
	$nomes = $_REQUEST['nome'];
	$datas = $_REQUEST['data'];
	$cursos = $_REQUEST['curso'];

	$max = sizeof($nomes);
	
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	for ($i=0; $i <$max ; $i++) {
		
		$query = "SELECT curso_instrumento FROM curso WHERE curso_id = '".$cursos[$i]."'";
		$resultado = $dbh->query($query)->fetch();
		
		$query = "INSERT INTO aluno 
					VALUES (
					'".$ids[$i]."',
					'".$nomes[$i]."',
					'".$datas[$i]."',
					'".$cursos[$i]."',
					1, '".$resultado['curso_instrumento']."')";
		
		$dbh->query($query);
	}
	
	echo "Sucesso!";
?>