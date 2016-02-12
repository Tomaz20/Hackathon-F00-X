$(document).ready(function(){
	
	$("#exemploForm").submit(function(){
		
		$.ajax({
			url: $(this).attr('action'),
			type: $(this).attr('method'),
            enctype: 'multipart/form-data',
			//data: $(this).serialize(),
			data: new FormData($(this)[0]),
			success: function(res) {
				var json = JSON.parse(res);
				if(json.erro === "true"){
					var aux = "";
					for(var i in json.alunos){
						aux += "<p>O aluno '" + json.alunos[i] + "' não existe</p><hr/>";
					}
					for(var i in json.professores){
						aux += "<p>O professor '" + json.professores[i] + "' não existe</p><hr/>";
					}
					for(var i in json.obras){
						aux += "<p>A obra '" + json.obras[i] + "' não existe</p><hr/>";
					}
					$("#erro").html(aux);
				}
				else if(json.erro === "gram"){
					alert("Erro sintáxico!");
				}
				else if(json.erro === "sql"){
					alert("Erro ao inserir a audição!");
				}
				else{
					alert("Audição inserida com sucesso!");
				}
			},
			cache: false,
			contentType: false,
			processData: false
		});
		
		
		return false;
	});
})