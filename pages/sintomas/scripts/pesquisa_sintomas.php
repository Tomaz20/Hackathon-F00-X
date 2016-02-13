<?php

	$dbh = new PDO('mysql:host=localhost;dbname=hackathon', 'root', 'root');

	$qstring = 
	"SELECT b.nome, b.id_doenca,b.categoria FROM (
	    SELECT COUNT(sintoma) AS nsintomas,nome,id_doenca,categoria FROM Doenca 
	    INNER JOIN Doenca_Sintoma
	    ON id_doenca=doenca
	    WHERE sintoma in (".$_GET['sintoma0'];
	
	for($i=1;$i<=$_GET['ns'];$i++){
		$qstring .= ",".$_GET['sintoma'.$i];
	}

	$qstring .= ")
		GROUP BY id_doenca) AS b
	WHERE b.nsintomas=".($_GET['ns']+1);

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
		echo "<td>".$doenca['categoria']."</td>
				<td>".$doenca['nome']."</td>
				<td>
					<a href='../doencas/consultar_doenca.html?id=".$doenca['id_doenca']."'>Detalhes<i class='fa fa-search fa-fw'></i></a>
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