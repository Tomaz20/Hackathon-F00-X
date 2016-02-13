$(function(){
	var nsintomas=0;


	$("#lista_sintomas").load("scripts/lista_sintomas.php");

	$("#addsintoma").click(function(){
		
		nsintomas++;

        var novoSintoma = document.createElement('div');
           
        novoSintoma.setAttribute("id",'s' + nsintomas);
		
		var divSint = document.createElement('div');
		
		divSint.setAttribute("class", "form-group");
		
		var labelSint = document.createElement('label');
		$(labelSint).append("Sintoma");
		
		var selectSint = document.createElement('select');
		
		selectSint.setAttribute("class", "form-control");
		selectSint.setAttribute("name", "sintoma[" + nsintomas + "]");
		
		var options = $("#lista_sintomas > option").clone();
		
		$(selectSint).append(options);
		
		divSint.appendChild(labelSint);
		divSint.appendChild(selectSint);
		
		novoSintoma.appendChild(divSint);
       
        $(novoSintoma).appendTo("#sintomas");
	});

	$("#remsintoma").click(function(){	
		if(nsintomas>0){
			$("#s"+nsintomas).remove();
			nsintomas--;
		}
	}); 

	$("#remsintoma").click(function(){
		$("#tab_doencas").load("scripts/pesquisa_sintomas.php?ns="+nsintomas);
	});
}); 