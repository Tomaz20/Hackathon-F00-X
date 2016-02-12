$(function(){

	$("#lista_compositores").load("scripts/listar_compositores.php");
	
	var nObras = 1;

	$("#newComp").click(function(){
		
	});
	
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