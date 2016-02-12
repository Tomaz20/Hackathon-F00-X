<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$qstring = "SELECT * FROM curso";
	$resultado = $dbh->query($qstring);


	echo "<table class='table table-striped table-bordered table-hover' id='cursotable'>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>DESIGNAÇÃO</th>
				<th>INSTRUMENTO</th>
				<th>OPERAÇÕES</th>
			</tr>
		</thead>";

	echo "<tbody>";
	while ($curso = $resultado->fetch()){

		$qstring = "SELECT instrumento_designacao FROM instrumento WHERE instrumento_id='".$curso['curso_instrumento']."'";
		$instrumento = $dbh->query($qstring)->fetch();
		
		echo "<tr class='gradeA odd'>";
		echo "<td>".$curso['curso_id']."</td>
				<td>".$curso['curso_designacao']."</td>
				<td>".$instrumento['instrumento_designacao']."</td>
				<td>
					<a href='consultar_curso.html?id=".$curso['curso_id']."'><i class='fa fa-search fa-fw'></i></a>					
					<a href='scripts/remover_curso.php?id=".$curso['curso_id']."' onclick=\"return confirm('Tem a certeza que quer remover?');\"><i class='fa fa-times fa-fw'></i></a>
					<a href='alterar_curso.html?id=".$curso['curso_id']."'><i class='fa fa-pencil fa-fw'></i></a>
				</td></tr>";
	}
	echo "</tbody>";

	echo "</table>";

	echo " <script>
    $(document).ready(function() {
        $('#cursotable').DataTable({
                responsive: true
        });
    });
    </script>";
?>