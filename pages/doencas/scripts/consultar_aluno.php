<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	//$qstring = "SELECT * FROM aluno";
	$qstring = "SELECT * FROM aluno WHERE aluno_id = ".$_REQUEST['id']."";
	$resultado = $dbh->query($qstring);
	$aluno = $resultado->fetch();
	
	$qstring = "SELECT instrumento_designacao FROM instrumento WHERE instrumento_id = '".$aluno['aluno_instrumento']."'";
	$instrumento = $dbh->query($qstring)->fetch();
	
	$qstring = "SELECT curso_designacao FROM curso WHERE curso_id = '".$aluno['aluno_curso']."'";
	$curso = $dbh->query($qstring)->fetch();
	
	echo "<p><b>Nome:</b> ".$aluno['aluno_nome']."</p><hr/>";
	echo "<p><b>Data de Nascimento:</b> ".$aluno['aluno_data_nasc']."</p><hr/>";
	echo "<p><b>Curso:</b> ".$curso['curso_designacao']." - ".$aluno['aluno_ano_curso']."º ano</p><hr/>";	
	echo "<p><b>Instrumento:</b> ".$instrumento['instrumento_designacao']."</p><hr/>";
	echo "<p><b>Audições:</b></p>";
	
	echo "<table class='table table-striped table-bordered table-hover' id='audtable'>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>TÍTULO</th>
				<th>DATA</th>
				<th>OPERAÇÕES</th>
			</tr>
		</thead>";

	echo "<tbody>";
	
	$qstring = "SELECT audicao_id, audicao_titulo, audicao_data FROM audicao
					WHERE audicao_id IN(
						SELECT atuacao_audicao FROM atuacao
							WHERE atuacao_id IN(
								SELECT atuacao_id FROM atuacao_aluno
									WHERE aluno_id = ".$_REQUEST['id']."
							)
					)";
					
	$resultado = $dbh->query($qstring);
	
	while ($audicao = $resultado->fetch()){

		echo "<tr class='gradeA odd'>";
		echo "<td>".$audicao['audicao_id']."</td>
				<td>".$audicao['audicao_titulo']."</td>
				<td>".$audicao['audicao_data']."</td>
				<td>
					<a href='consultar_audicao.html?id=".$audicao['audicao_id']."'><i class='fa fa-search fa-fw'></i></a>
				</td>
			</tr>";
	}
	
?>