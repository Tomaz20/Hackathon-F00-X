<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$qstring = "SELECT * FROM obra";
	$resultado = $dbh->query($qstring);
	
	echo "<table class='table table-striped table-bordered table-hover' id='audtable'>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>NOME</th>
				<th>COMPOSITOR</th>
				<th>OPERAÇÕES</th>
			</tr>
		</thead>";

	echo "<tbody>";
	while ($obra = $resultado->fetch()){
		
		$qstring = "SELECT compositor_nome FROM compositor WHERE compositor_id = '".$obra['obra_compositor']."'";
		$compositor = $dbh->query($qstring)->fetch();
		
		echo "<tr class='gradeA odd'>";
		echo "<td>".$obra['obra_id']."</td>
				<td>".$obra['obra_nome']."</td>
				<td>".$compositor['compositor_nome']."</td>
				<td>
					<a href='consultar_obra.html?id=".$obra['obra_id']."'><i class='fa fa-search fa-fw'></i></a>					
					<a href='scripts/remover_obra.php?id=".$obra['obra_id']."' onclick=\"return confirm('Tem a certeza que quer remover?');\"><i class='fa fa-times fa-fw'></i></a>
					<a href='alterar_obra.html?id=".$obra['obra_id']."'><i class='fa fa-pencil fa-fw'></i></a>
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