<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "SELECT * FROM obra WHERE obra_id = ".$_REQUEST['id']."";
	$resultado = $dbh->query($qstring);
	$obra = $resultado->fetch();

	$qstring = "SELECT compositor_nome FROM compositor WHERE compositor_id = '".$obra['obra_compositor']."'";
	$compositor = $dbh->query($qstring)->fetch();
	
	echo "<p><b>Nome:</b> ".$obra['obra_nome']."</p><hr/>";
	echo "<p><b>Ano de Criação:</b> ".$obra['obra_ano_criacao']."</p><hr/>";
	echo "<p><b>Periodo:</b> ".$obra['obra_periodo']."</p><hr/>";	
	echo "<p><b>Compositor:</b> ".$compositor['compositor_nome']."</p><hr/>";
	echo "<p><b>Duração:</b> ".$obra['obra_duracao']."</p><hr/>";	
	echo "<p><b>Descricao:</b> ".$obra['obra_descricao']."</p><br/>";
	
?>