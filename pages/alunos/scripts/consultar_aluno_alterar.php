<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	//$qstring = "SELECT * FROM aluno";
	$qstring = "SELECT * FROM aluno WHERE aluno_id = ".$_REQUEST['id']."";
	$resultado = $dbh->query($qstring);
	
	$oldid = $_REQUEST['id'];
	
	$aluno = $resultado->fetch();
	
	echo "<div class='form-group'>
			<label>Código</label>
			<input class='form-control' name='id' value='".$aluno['aluno_id']."'>
		</div>
		<div class='form-group'>
			<label>Nome</label>
			<input class='form-control' name='nome' value='".$aluno['aluno_nome']."'>
		</div>
		<div class='form-group'>
			<label>Data Nascimento</label>
			<input class='form-control' placeholder='yyyy-mm-dd' name='data' value='".$aluno['aluno_data_nasc']."'>
		</div>
		<div class='form-group'>
			<label>Curso</label>
			<select class='form-control' id='lista_cursos' name='curso'>";
				
				$qstring = "SELECT curso_id, curso_designacao FROM curso";
				$resultado = $dbh->query($qstring);
				
				while($curso = $resultado->fetch()){
					if($curso['curso_id'] == $aluno['aluno_curso']){
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