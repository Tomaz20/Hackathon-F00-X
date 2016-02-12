<?php
	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');
	
	//$qstring = "SELECT * FROM obra";
	$qstring = "SELECT * FROM obra WHERE obra_id = ".$_REQUEST['id']."";
	$resultado = $dbh->query($qstring);
	
	$oldid = $_REQUEST['id'];
	
	$obra = $resultado->fetch();
	
	echo "<div class='form-group'>
			<label>Código</label>
			<input class='form-control' name='id' value='".$obra['obra_id']."'>
		</div>
		<div class='form-group'>
			<label>Nome</label>
			<input class='form-control' name='nome' value='".$obra['obra_nome']."'>
		</div>
		<div class='form-group'>
			<label>Ano de Criação</label>
			<input class='form-control' placeholder='yyyy' name='ano' value='".$obra['obra_ano_criacao']."'>
		</div>
		<div class='form-group'>
			<label>Periodo</label>
			<input class='form-control' name='periodo' value='".$obra['obra_periodo']."'>
		</div>
		<div class='form-group'>
			<label>Compositor</label>
			<select class='form-control' id='lista_compositor' name='compositor'>";
				
				$qstring = "SELECT compositor_id, compositor_nome FROM compositor";
				$resultado = $dbh->query($qstring);
				
				while($compositor = $resultado->fetch()){
					if($compositor['compositor_id'] == $obra['obra_compositor']){
						echo "<option value='".$compositor['compositor_id']."' selected>".$composior['compositor_nome']."</option>";
					}
					else{
						echo "<option value='".$compositor['compositor_id']."'>".$compositor['compositor_nome']."</option>";
					}
				}
				
	echo "</select>
		</div>
		<div class='form-group'>
			<label>Duração</label>
			<input class='form-control' name='duracao' value='".$obra['obra_duracao']."'>
		</div>
		<div class='form-group'>
			<label>Descrição</label>
			<input class='form-control' name='descricao' value='".$obra['obra_descricao']."'>
		</div>
		";
		echo "<input type='hidden' name='oldid' value=".$oldid.">";
	
?>