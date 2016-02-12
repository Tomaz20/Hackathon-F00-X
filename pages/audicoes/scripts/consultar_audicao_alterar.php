<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "SELECT * FROM audicao WHERE audicao_id = ".$_REQUEST['id']."";
	$resultado = $dbh->query($qstring);
	
	$oldid = $_REQUEST['id'];
	
	$audicao = $resultado->fetch();
	
	echo "<div class='form-group'>
			<label>Título</label>
			<input class='form-control' name='titulo' value='".$audicao['audicao_titulo']."'>
		</div>
		<div class='form-group'>
			<label>Subtítulo</label>
			<input class='form-control' name='subtitulo' value='".$audicao['audicao_subtitulo']."'>
		</div>
		<div class='form-group'>
			<label>Tema</label>
			<input class='form-control' name='tema' value='".$audicao['audicao_tema']."'>
		</div>
		<div class='form-group'>
			<label>Local</label>
			<input class='form-control' name='local' value='".$audicao['audicao_local']."'>
		</div>
		<div class='form-group'>
			<label>Duração</label>
			<input class='form-control' name='duracao' value='".$audicao['audicao_duracao']."'>
		</div>";
		echo "<input type='hidden' name='oldid' value=".$oldid.">";
	
?>