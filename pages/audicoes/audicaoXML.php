<?php

	$dbh = new PDO('mysql:host=localhost;dbname=gamu', 'root', 'root');

	$xml = new SimpleXMLElement("<audicoes/>");
	
	$id = $_REQUEST['id'];
	
	$qstring = "SELECT * FROM audicao WHERE audicao_id = '".$id."'";
	$resultado = $dbh->query($qstring);
	
	while ($aud = $resultado->fetch()){
		
		$audicao = $xml->addChild("audicao");
		$metadata = $audicao->addChild("metadata");
		$metadata->addChild("titulo", $aud['audicao_titulo']);
		$metadata->addChild("subtitulo", $aud['audicao_subtitulo']);
		$metadata->addChild("tema", $aud['audicao_tema']);
		$metadata->addChild("data", $aud['audicao_data']);
		$metadata->addChild("hora", $aud['audicao_hora']);
		$metadata->addChild("local", $aud['audicao_local']);
		
		$qstring = "SELECT professor_nome FROM professor WHERE professor_id = '".$aud['audicao_responsavel']."'";
		$prof = $dbh->query($qstring)->fetch();
		
		$metadata->addChild("organizador", $prof['professor_nome']);
		$metadata->addChild("duracao", $aud['audicao_duracao']);
		
		$atuacoes = $audicao->addChild("atuacoes");
		
		$qstring = "SELECT * FROM atuacao WHERE atuacao_audicao = '".$id."'";
		$resultado2 = $dbh->query($qstring);
		
		while($at = $resultado2->fetch()){
			$atuacao = $atuacoes->addChild("atuacao");
			$atuacao->addChild("designacao", $at['atuacao_designacao']);
			
			$alunos = $atuacao->addChild("alunos");
			
			$qstring = "SELECT aluno_nome, aluno_id FROM aluno
							WHERE aluno_id IN(
								SELECT aluno_id FROM atuacao_aluno
									WHERE atuacao_id = '".$at['atuacao_id']."'
							)";
			
			$resAlunos = $dbh->query($qstring);
			
			while($a = $resAlunos->fetch()){
				$aluno = $alunos->addChild("aluno");
				$aluno->addChild("Nome", $a['aluno_nome']);
				
				$qstring = "SELECT instrumento_designacao FROM instrumento
							WHERE instrumento_id IN(
								SELECT aluno_instrumento FROM aluno
									WHERE aluno_id = '".$a['aluno_id']."'
							)";
							
				$instrumento = $dbh->query($qstring)->fetch();
				
				$aluno->addChild("Instrumento", $instrumento['instrumento_designacao']);
			}
			
			
			$qstring = "SELECT professor_nome FROM professor
							WHERE professor_id IN(
								SELECT professor_id FROM atuacao_professor
									WHERE atuacao_id = '".$at['atuacao_id']."'
							)";
			
			$resProfessores = $dbh->query($qstring);
			
			if($resProfessores){
				$professores = $atuacao->addChild("professores");
			}
			
			while($p = $resProfessores->fetch()){
				$professor = $professores->addChild("professor");
				$professor->addChild("Nome", $p['professor_nome']);
			}
			
			$pecas = $atuacao->addChild("pecas");
			
			$qstring = "SELECT obra_nome, obra_compositor, obra_duracao FROM obra
							WHERE obra_id IN(
								SELECT obra_id FROM atuacao_obra
									WHERE atuacao_id = '".$at['atuacao_id']."'
							)";
			
			$resPecas = $dbh->query($qstring);
			
			while($p = $resPecas->fetch()){
				$peca = $pecas->addChild("peca");
				$peca->addChild("Nome", $p['obra_nome']);
				
				$qstring = "SELECT compositor_nome, compositor_data_nasc, compositor_data_obit FROM compositor WHERE compositor_id='".$p['obra_compositor']."'";
				$compositor = $dbh->query($qstring)->fetch();
				$peca->addChild("compositor", $compositor['compositor_nome']);
				$peca->addChild("dataNasc", $compositor['compositor_data_nasc']);
				$peca->addChild("dataMorte", $compositor['compositor_data_obit']);
				$peca->addChild("duracao", $p['obra_duracao']);
			}
		}
	}
	
	$xslDoc = new DOMDocument();
	$xslDoc->load("AudicaoPDF.xsl");
	
	$proc = new XSLTProcessor();
	$proc->importStylesheet($xslDoc);
	
	$newdom = $proc->transformToDoc($xml);

	//$newdom->save("teste.pdf");
	
	/*Header('Content-type: text/xml');
	print($xml->asXML());
	
	$xml2 = new DOMDocument(); 
	$xml2->loadXML($xml->asXML());

	$xslt = new XSLTProcessor();
	$XSL = new DOMDocument();
	$XSL->load('AudicaoPDF.xsl', LIBXML_NOCDATA);
	$xslt->importStylesheet($XSL);

	print $xslt->transformToXML($xml);*/
	
	/*$audicaoFile = fopen('audicao.txt','w');
	fwrite($audicaoFile,$xslt->transformToXML($xml));*/

?>