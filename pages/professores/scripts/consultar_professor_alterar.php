<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	//$qstring = "SELECT * FROM professor";
	$qstring = "SELECT * FROM professor WHERE professor_id = ".$_REQUEST['id']."";
	$resultado = $dbh->query($qstring);
	
	$oldid = $_REQUEST['id'];
	
	$professor = $resultado->fetch();
	
	echo "<div class='form-group'>
			<label>Código</label>
			<input class='form-control' name='id' value='".$professor['professor_id']."'>
		</div>
		<div class='form-group'>
			<label>Nome</label>
			<input class='form-control' name='nome' value='".$professor['professor_nome']."'>
		</div>
		<div class='form-group'>
			<label>Data de Nascimento</label>
			<input class='form-control' placeholder='yyyy-mm-dd' name='ano' value='".$professor['professor_data_nasc']."'>
		</div>
		<div class='form-group'>
			<label>Habilitações</label>
			<select class='form-control' id='lista_habilitacoes' name='hab'>";
				
				$qstring = "SELECT habilitacao_id, habilitacao_designacao FROM habilitacao";
				$resultado = $dbh->query($qstring);
				
				while($habilitacao = $resultado->fetch()){
					if($habilitacao['habilitacao_id'] == $professor['professor_habilitacao']){
						echo "<option value='".$habilitacao['habilitacao_id']."' selected>".$habilitacao['habilitacao_designacao']."</option>";
					}
					else{
						echo "<option value='".$habilitacao['habilitacao_id']."'>".$habilitacao['habilitacao_designacao']."</option>";
					}
				}
				
	echo "</select>
		</div>
		<div class='form-group'>
			<label>Curso</label>
			<select class='form-control' id='lista_cursos' name='curso'>";
				
				$qstring = "SELECT curso_id, curso_designacao FROM curso";
				$resultado = $dbh->query($qstring);
				
				while($curso = $resultado->fetch()){
					if($curso['curso_id'] == $professor['professor_curso']){
						echo "<option value='".$curso['curso_id']."' selected>".$curso['curso_designacao']."</option>";
					}
					else{
						echo "<option value='".$curso['curso_id']."'>".$curso['curso_designacao']."</option>";
					}
				}
				
	echo "</select>
		</div>";
		echo "<input type='hidden' name='oldid' value=".$oldid.">";
	
?>