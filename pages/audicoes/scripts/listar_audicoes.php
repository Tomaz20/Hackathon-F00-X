<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$qstring = "SELECT * FROM audicao WHERE audicao_data>=CURDATE()";
	$porocorrer = $dbh->query($qstring);

	$qstring = "SELECT * FROM audicao WHERE audicao_data<CURDATE()";
	$ocorrido = $dbh->query($qstring);
	
	echo "<table class='table table-striped table-bordered table-hover' id='audtable'>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>TÍTULO</th>
				<th>SUBTÍTULO</th>
				<th>DATA</th>
				<th>HORA</th>
				<th>ESTADO</th>
				<th>OPERAÇÕES</th>
			</tr>
		</thead>";

	echo "<tbody>";
	while ($audicao = $porocorrer->fetch()){

		echo "<tr class='gradeA odd'>";
		echo "<td>".$audicao['audicao_id']."</td>
				<td>".$audicao['audicao_titulo']."</td>
				<td>".$audicao['audicao_subtitulo']."</td>
				<td>".$audicao['audicao_data']."</td>
				<td>".$audicao['audicao_hora']."</td>
				<td>Por Ocorrer</td>
				<td>
					<a href='consultar_audicao.html?id=".$audicao['audicao_id']."'><i class='fa fa-search fa-fw'></i></a>					
					<a href='scripts/remover_audicao.php?id=".$audicao['audicao_id']."' onclick=\"return confirm('Tem a certeza que quer remover?');\"><i class='fa fa-times fa-fw'></i></a>
					<a href='alterar_audicao.html?id=".$audicao['audicao_id']."'><i class='fa fa-pencil fa-fw'></i></a>
				</td>
			</tr>";
	}


	while ($audicao = $ocorrido->fetch()){

		echo "<tr class='gradeA odd'>";
		echo "<td>".$audicao['audicao_id']."</td>
				<td>".$audicao['audicao_titulo']."</td>
				<td>".$audicao['audicao_subtitulo']."</td>
				<td>".$audicao['audicao_data']."</td>
				<td>".$audicao['audicao_hora']."</td>
				<td>Ocorrido</td>
				<td>
					<a href='consultar_audicao.html?id=".$audicao['audicao_id']."'><i class='fa fa-search fa-fw'></i></a>					
					<a href='scripts/remover_audicao.php?id=".$audicao['audicao_id']."' onclick=\"return confirm('Tem a certeza que quer remover?');\"><i class='fa fa-times fa-fw'></i></a>
				</td>
			</tr>";
	}
	echo "</tbody>";

	echo "</table>";

	echo " <script>
    $(document).ready(function() {
        $('#audtable').DataTable({
                responsive: true
        });
    });
    </script>";
?>