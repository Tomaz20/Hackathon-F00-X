<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$qstring = "SELECT * FROM professor";
	$resultado = $dbh->query($qstring);
	
	echo "<table class='table table-striped table-bordered table-hover' id='proftable'>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th>CURSO</th>
				<th>OPERAÇÕES</th>
			</tr>
		</thead>";

	echo "<tbody>";
	while ($professor = $resultado->fetch()){
		
		$qstring = "SELECT curso_designacao FROM curso WHERE curso_id = '".$professor['professor_curso']."'";
		$curso = $dbh->query($qstring)->fetch();
		
		echo "<tr class='gradeA odd'>";
		echo "<td>".$professor['professor_id']."</td>
				<td>".$professor['professor_nome']."</td>
				<td>".$curso['curso_designacao']."</td>
				<td>
					<a href='consultar_professor.html?id=".$professor['professor_id']."'><i class='fa fa-search fa-fw'></i></a>					
					<a href='scripts/remover_professor.php?id=".$professor['professor_id']."' onclick=\"return confirm('Tem a certeza que quer remover?');\"><i class='fa fa-times fa-fw'></i></a>
					<a href='alterar_professor.html?id=".$professor['professor_id']."'><i class='fa fa-pencil fa-fw'></i></a>
				</td></tr>";
	}
	echo "</tbody>";

	echo "</table>";

	echo " <script>
    $(document).ready(function() {
        $('#proftable').DataTable({
                responsive: true
        });
    });
    </script>";
?>