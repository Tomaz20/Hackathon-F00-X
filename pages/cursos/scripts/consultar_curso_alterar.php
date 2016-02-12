<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	$qstring = "SELECT * FROM curso WHERE curso_id = ".$_REQUEST['id']."";
	$resultado = $dbh->query($qstring);
	
	$oldid = $_REQUEST['id'];
	
	$curso = $resultado->fetch();
	
	echo "<div class='form-group'>
			<label>Código</label>
			<input class='form-control' name='id' value='".$curso['curso_id']."'>
		</div>
		<div class='form-group'>
			<label>Designação</label>
			<input class='form-control' name='designacao' value='".$curso['curso_designacao']."'>
		</div>
		<div class='form-group'>
			<label>Instrumento</label>
			<select class='form-control' id='lista_instrumentos' name='instrumento'>";
				
				$qstring = "SELECT * FROM instrumento";
				$resultado = $dbh->query($qstring);
				
				while($instrumento = $resultado->fetch()){
					if($instrumento['instrumento_id'] == $curso['curso_instrumento']){
						echo "<option value='".$instrumento['instrumento_id']."' selected>".$instrumento['instrumento_designacao']."</option>";
					}
					else{
						echo "<option value='".$instrumento['instrumento_id']."'>".$instrumento['instrumento_designacao']."</option>";
					}
				}
				
			echo "</select>
		</div>
		<div class='form-group'>
			<label>Duração</label>
			<input class='form-control' placeholder='Anos' name='duracao' value='".$curso['curso_duracao']."'>
		</div>";
		echo "<input type='hidden' name='oldid' value=".$oldid.">";
	
?>