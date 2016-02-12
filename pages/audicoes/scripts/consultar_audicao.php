<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	

	$qstring = "SELECT * FROM audicao WHERE audicao_id = ".$_REQUEST['id'];
	$audicao = $dbh->query($qstring)->fetch();
	
	$qstring = "SELECT * FROM professor WHERE professor_id = '".$audicao['audicao_responsavel']."'";
	$professor = $dbh->query($qstring)->fetch();

	$qstring = "SELECT * FROM atuacao WHERE atuacao_audicao = ".$_REQUEST['id'];
	$atuacoes = $dbh->query($qstring);

	echo "<p><b>Título:</b> ".$audicao['audicao_titulo']."</p><hr/>";
	echo "<p><b>Subtítulo:</b> ".$audicao['audicao_subtitulo']."</p><hr/>";
	echo "<p><b>Tema:</b> ".$audicao['audicao_tema']."</p><hr/>";	
	echo "<p><b>Data:</b> ".$audicao['audicao_data']."</p><hr/>";
	echo "<p><b>Hora:</b> ".$audicao['audicao_hora']."</p><hr/>";	
	echo "<p><b>Local:</b> ".$audicao['audicao_local']."</p><hr/>";	
	echo "<p><b>Responsável:</b> ".$professor['professor_nome']."</p><hr/>";	
	echo "<p><b>Atuações:</b></p><br/>";	
	echo "<table class='table table-striped table-bordered table-hover' id='dataTables-example'>";
	echo "<thead>
			<tr>
				<th>ID</th>
				<th>DESIGNAÇÃO</th>
				<th>OPERAÇÕES</th>
			</tr>
		</thead>";

	echo "<tbody>";

	while ($atuacao = $atuacoes->fetch()){

		echo "<tr class='gradeA odd'>";
		echo "<td>".$atuacao['atuacao_id']."</td>
				<td>".$atuacao['atuacao_designacao']."</td>
				<td>
					<a href='consultar_atuacao.html?id=".$atuacao['atuacao_id']."'><i class='fa fa-search fa-fw'></i></a>
				</td>
			</tr>";
	}
	echo "</tbody>";

	echo "</table>";
	
?>