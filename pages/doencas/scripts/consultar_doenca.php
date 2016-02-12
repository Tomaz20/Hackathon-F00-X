<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');


	$qstring = "SELECT * FROM atuacao WHERE actuacao_id = ".$_REQUEST['id'];
	$atuacao = $dbh->query($qstring);


	$qstring = "SELECT * FROM aluno AS a
				INNER JOIN atuacao_aluno AS aa 
				ON a.aluno_id=aa.aluno_id 
				WHERE atuacao_id = ".$_REQUEST['id'];
	$alunos = $dbh->query($qstring);


	$qstring = "SELECT * FROM professor AS p
				INNER JOIN atuacao_professor AS ap
				ON p.professor_id=ap.professor_id 
				WHERE atuacao_id = ".$_REQUEST['id'];
	$professores = $dbh->query($qstring);


	$qstring = "SELECT * FROM obra AS o
				INNER JOIN atuacao_obra AS ao
				ON o.obra_id=ao.obra_id 
				WHERE atuacao_id = ".$_REQUEST['id'];
	$obras = $dbh->query($qstring);


	echo "<p><b>Designação:</b> ".$atuacao['atuacao_designacao']."</p><hr/>";
	echo "<p><b>Dados:</b></p>";

	//echo "<p><b>Professores:</b></p><br/>";
	echo "<div class='panel-body'>
		<div class='panel-group' id='accordion'>";
	echo "<div class='panel panel-default'>
		<div class='panel-heading'>
			<h4 class='panel-title'>
				<a class='collapsed' aria-expanded='false' href='#profs' data-toggle='collapse' data-parent='#accordion'><b>Professores:</b></a>
			</h4>
		</div>
		<div class='pannel-collapse collapse' id='profs' aria-expanded='false' style='height: 0px;'>
			<div class='pannel-body'>";
	echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th></th>
			</tr>
		</thead>";

	echo "<tbody>";

	while ($professor = $professores->fetch()){


		echo "<tr class='gradeA odd'>";
		echo "<td>".$professor['professor_id']."</td>
				<td>".$professor['professor_nome']."</td>
				<td>
					<a href='../professores/consultar_professor.html?id=".$professor['professor_id']."'><i class='fa fa-search fa-fw'></i></a>
				</td>
			</tr>";
	}
	echo "</tbody>";

	echo "</table>";
	echo "</div></div></div>";


	//echo "<p><b>Alunos:</b></p><br/>";
	echo "<div class='panel panel-default'>
		<div class='panel-heading'>
			<h4 class='panel-title'>
				<a class='collapsed' aria-expanded='false' href='#aluns' data-toggle='collapse' data-parent='#accordion'><b>Alunos:</b></a>
			</h4>
		</div>
		<div class='pannel-collapse collapse' id='aluns' aria-expanded='false' style='height: 0px;'>
			<div class='pannel-body'>";
	echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th></th>
			</tr>
		</thead>";

	echo "<tbody>";

	while ($aluno = $alunos->fetch()){


		echo "<tr class='gradeA odd'>";
		echo "<td>".$aluno['aluno_id']."</td>
				<td>".$aluno['aluno_nome']."</td>
				<td>
					<a href='../alunos/consultar_aluno.html?id=".$aluno['aluno_id']."'><i class='fa fa-search fa-fw'></i></a>
				</td>
			</tr>";
	}
	echo "</tbody>";

	echo "</table>";
	echo "</div></div></div>";

	//echo "<p><b>Obras:</b></p><br/>";
	echo "<div class='panel panel-default'>
		<div class='panel-heading'>
			<h4 class='panel-title'>
				<a class='collapsed' aria-expanded='false' href='#obrs' data-toggle='collapse' data-parent='#accordion'><b>Obras:</b></a>
			</h4>
		</div>
		<div class='pannel-collapse collapse' id='obrs' aria-expanded='false' style='height: 0px;'>
			<div class='pannel-body'>";
	echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>TÍTULO</th>
				<th></th>
			</tr>
		</thead>";

	echo "<tbody>";

	while ($obra = $obras->fetch()){


		echo "<tr class='gradeA odd'>";
		echo "<td>".$obra['obra_id']."</td>
				<td>".$obra['obra_nome']."</td>
				<td>
					<a href='../obras/consultar_obra.html?id=".$obra['obra_id']."'><i class='fa fa-search fa-fw'></i></a>
				</td>
			</tr>";
	}
	echo "</tbody>";

	echo "</table>";
	echo "</div></div></div></div></div>"
	
?>