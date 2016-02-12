<?php

	$dbh = new PDO('mysql:host=localhost;dbname=hackathon', 'root', 'root');


	$qstring = "SELECT * FROM Doenca WHERE id_doenca = ".$_REQUEST['id'];
	$atuacao = $dbh->query($qstring);


	$qstring = "SELECT * FROM Sintoma AS s
				INNER JOIN Doenca_Sintoma AS ds 
				ON s.id_sintoma=ds.sintoma 
				WHERE doenca = ".$_REQUEST['id'];
	$sintomas = $dbh->query($qstring);


	$qstring = "SELECT * FROM Causa AS c
				INNER JOIN Doenca_Causa AS dc
				ON c.causa_id=dc.causa 
				WHERE doenca = ".$_REQUEST['id'];
	$causas = $dbh->query($qstring);


	$qstring = "SELECT * FROM Tratamento AS t
				INNER JOIN Doenca_Tratamento AS dt
				ON t.id_tratamento=dt.tratamento
				WHERE doenca = ".$_REQUEST['id'];
	$tratamentos = $dbh->query($qstring);

	
	$qstring = "SELECT * FROM Prevencao AS p
				INNER JOIN Doenca_Prevencao AS dp
				ON p.id_prevencao=dt.prevencao
				WHERE doenca = ".$_REQUEST['id'];
	$prevencoes = $dbh->query($qstring);


	echo "<p><b>Designação:</b> ".$doenca['nome']."</p><hr/>";

	echo "<hr/>";
	
	echo "<p><b>Categoria:</b> ".$doenca['categoria']."</p><hr/>";

	echo "<hr/>";

	echo "<p><b>Sintomas:</b></p>";

	echo "<ul>";

	while ($sintoma = $sintomas->fetch()){
		echo "<li>".$sintoma['designacao']."</li>";
	}

	echo "<\ul>";
	
	echo "<hr/>";

	echo "<p><b>Causas:</b></p>";

	echo "<ul>";

	while ($causa = $causas->fetch()){
		echo "<li>".$causa['designacao']."</li>";
	}

	echo "<\ul>";

	echo "<hr/>";

	echo "<p><b>Tratamento:</b></p>";

	echo "<ul>";

	while ($tratamento = $tratamentos->fetch()){
		echo "<li>".$tratamento['descricao']."</li>";
	}

	echo "<\ul>";

	echo "<hr/>";

	echo "<p><b>Prevenção:</b></p>";

	echo "<ul>";

	while ($prevencao = $prevencoes->fetch()){
		echo "<li>".$prevencao['descricao']."</li>";
	}

	echo "<\ul>";
	
	
?>