$(function(){

	$("#lista_cursos").load("scripts/listar_cursos.php");
	$("#lista_habilitacoes").load("scripts/listar_habilitacoes.php");
	
	var nProfs = 1;
	
	$("#xml_form").submit(function(){
		
		$.ajax({
			url     : $(this).attr('action'),
            type    : 'POST',
            enctype: 'multipart/form-data',
            data    : new FormData($(this)[0]),
            success : function( data ) {
                         alert(data);       
                      },
        cache: false,
        contentType: false,
        processData: false
		});
		
		return false;
	});
	
	$("#norm_form").submit(function(){
		
		$.ajax({
			url     : $(this).attr('action'),
            type    : 'POST',
            enctype: 'multipart/form-data',
            data    : new FormData($(this)[0]),
            success : function( data ) {
                         alert(data);       
                      },
        cache: false,
        contentType: false,
        processData: false
		});
		
		return false;
	});
	
});