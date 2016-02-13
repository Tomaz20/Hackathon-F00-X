$(function(){
	$("#lista_sintomas").load("scripts/lista_sintomas.php");

	$("#addsintoma").onclick=function(){
		$("#sintomas").append("<div>blablabla</div>");
	}
}); 