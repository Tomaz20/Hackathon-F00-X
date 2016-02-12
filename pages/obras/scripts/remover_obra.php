<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	//Todas as atuaçoes com a obra
	$qstring = "SELECT atuacao_id FROM atuacao_obra 
				WHERE obra_id ='".$_REQUEST['id']."'";
	$atuacoes = $dbh->query($qstring);

	$qstring = "DELETE FROM atuacao_obra
				WHERE obra_id ='".$_REQUEST['id']."'";
	$dbh->query($qstring);


	while($atuacao = $atuacoes->fetch()){
		//quantas obras tem a atuaçao
		$qstring = "SELECT COUNT(*) AS n FROM atuacao_obra 
					WHERE atuacao_id='".$atuacao['atuacao_id']."'";
		$nobras = $dbh->query($qstring)->fetch();

		if ($nobras['n']==0) {
			$qstring = "SELECT COUNT(*) AS n FROM atuacao 
						WHERE atuacao_audicao='".$atuacao['atuacao_audicao']."'";
			$natuacoes = $dbh->query($qstring)->fetch();

			//se for a unica atuaçao da audiçao entao remove a audiçao
			if ($natuacoes['n']==1){
				$qstring = "CALL sp_removeAudicao('".$atuacao['atuacao_audicao']."')";
				$dbh->query($qstring);

				echo "A audição ".$atuacao['atuacao_audicao']." foi removida por ficar sem atuações!"; 
			}
			else {
				$qstring = "CALL sp_removeAtuacao('".$atuacao['atuacao_id']."')";
				$dbh->query($qstring);

				echo "A atuação ".$atuacao['atuacao_id']." foi removida por ficar sem obras!";
			}
		}

	}


	$qstring = "DELETE FROM obra WHERE obra_id='".$_REQUEST['id']."'";
	$dbh->query($qstring);

	header("Location: ../listar_obras.html");
?>