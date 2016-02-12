<?php

	$dbh = new PDO('mysql:host=localhost;dbname=hackathon', 'root', 'root');

	$qstring = "SELECT * FROM doenca";
	$resultado = $dbh->query($qstring);
	

	
	echo "<table class='table table-striped table-bordered table-hover' id='doencastable'>";
	echo "<thead>
			<tr>
				<th>CATEGORIA</th>
				<th>DESIGNAÇÃO</th>
				<th>OPERAÇÕES</th>
			</tr>
		</thead>";

	echo "<tbody>";
	while ($doenca = $resultado->fetch()){
		
		echo "<tr class='gradeA odd'>";
		echo "<td>".$doenca['doenca_categoria']."</td>
				<td>".$doenca['doenca_nome']."</td>
				<td>
					<a href='consultar_doenca.html?id=".$doenca['doenca_id']."'>Detalhes<i class='fa fa-search fa-fw'></i></a>
				</td></tr>";
	}
	echo "</tbody>";
	echo "</table>";

	echo " <script>
    $(document).ready(function() {
        $('#doencastable').DataTable({
                responsive: true
        });
    });
    </script>";
?>