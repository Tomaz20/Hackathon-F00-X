<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	//Todas as atuaçoes em que o aluno participa
	$qstring = "SELECT atuacao_id FROM atuacao_aluno 
				WHERE aluno_id ='".$_REQUEST['id']."'";
	$atuacoes = $dbh->query($qstring);

	$qstring = "DELETE FROM atuacao_aluno
				WHERE aluno_id ='".$_REQUEST['id']."'";
	$dbh->query($qstring);


	while($atuacao = $atuacoes->fetch()){
		//quantos alunos tem a atuaçao
		$qstring = "SELECT COUNT(*) AS n FROM atuacao_aluno 
					WHERE atuacao_id='".$atuacao['atuacao_id']."'";
		$nalunos = $dbh->query($qstring)->fetch();

		if ($nalunos['n']==0) {
			$qstring = "SELECT COUNT(*) AS n FROM atuacao 
						WHERE atuacao_audicao='".$atuacao['atuacao_audicao']."'";
			$natuacoes = $dbh->query($qstring)->fetch();

			//se for a unica atuaçao da audiçao entao remove a audiçao
			if ($natuacoes['n']==1){
				$qstring = "CALL sp_removeAudicao('".$atuacao['atuacao_audicao']."')";
				$dbh->query($qstring);

				echo "A atuação ".$atuacao['atuacao_id']." foi removida por ficar sem alunos!";
				echo "A audição ".$atuacao['atuacao_audicao']." foi removida por ficar sem atuações!"; 
			}
			else {
				$qstring = "CALL sp_removeAtuacao('".$atuacao['atuacao_id']."')";
				$dbh->query($qstring);

				echo "A atuação ".$atuacao['atuacao_id']." foi removida por ficar sem alunos!";	
			}
		}

	}


	$qstring = "DELETE FROM aluno WHERE aluno_id='".$_REQUEST['id']."'";
	$dbh->query($qstring);

	header("Location: ../listar_alunos.html");
?>