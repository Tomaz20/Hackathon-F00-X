<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$qstring = "SELECT compositor_nome AS Compositor, COUNT(obra_id) AS Obras
				FROM obra INNER JOIN compositor
				ON obra_compositor=compositor_id
				GROUP BY obra_compositor
				ORDER BY Obras DESC
				LIMIT 5;";

	$topcompositores = $dbh->query($qstring);


	$qstring = "SELECT curso_designacao AS Curso, COUNT(aluno_id) AS Alunos
				FROM aluno INNER JOIN curso
				ON aluno_curso=curso_id
				GROUP BY curso_id
				ORDER BY Alunos DESC
				LIMIT 5;";

	$topcursos = $dbh->query($qstring);	



	echo "<div class='panel panel-default'>
	<div class='panel-heading'>Compositores com mais Obras no GAMu</div>
	<div class='panel-body'>

	<div class='table-responsive'>
        <table class='table'>
        	<thead>
        		<tr>
        			<th>Compositor</th>
        			<th>Obras</th>
        		</tr>
        	</thead>
            <tbody>";

    while($comp = $topcompositores->fetch()){
    	echo "<tr>
    			<td>".$comp['Compositor']."</td>
    			<td>".$comp['Obras']."</td>
    		</tr>";
    }
	echo "</tbody></table></div></div></div>";




	echo "<div class='panel panel-default'>
	<div class='panel-heading'>Cursos com mais Alunos</div>
	<div class='panel-body'>

	<div class='table-responsive'>
        <table class='table'>
        	<thead>
        		<tr>
        			<th>Curso</th>
        			<th>Alunos</th>
        		</tr>
        	</thead>
            <tbody>";

    while($curs = $topcursos->fetch()){
    	echo "<tr>
    			<td>".$curs['Curso']."</td>
    			<td>".$curs['Alunos']."</td>
    		</tr>";
    }
	echo "</tbody></table></div></div></div>";

?>