$(function(){
	var nsintomas=0;


	$("#sintomas0").load("scripts/lista_sintomas.php");

	$("#addsintoma").click(function(){
		
		nsintomas++;

        var novoSintoma = document.createElement('div');
           
        novoSintoma.setAttribute("id",'s' + nsintomas);
		
		var divSint = document.createElement('div');
		
		divSint.setAttribute("class", "form-group");
		
		//var labelSint = document.createElement('label');
		//$(labelSint).append("Sintoma");
		
		var selectSint = document.createElement('select');
		
		selectSint.setAttribute("class", "form-control");
		selectSint.setAttribute("id", "sintomas"+nsintomas);
		
		var options = $("#sintomas0 > option").clone();
		
		$(selectSint).append(options);
		
		//divSint.appendChild(labelSint);
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

	$("#pesquisar").click(function(){
		var sints="&sintoma0="+document.getElementById("sintomas0").value;

		for(var i=1;i<=nsintomas;i++){
			sints = sints+"&sintoma"+i+"="+document.getElementById("sintomas"+i).value;
		}

		$("#tab_doencass").load("scripts/pesquisa_sintomas.php?ns="+nsintomas+sints);
	});
}); 