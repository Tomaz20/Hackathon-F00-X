$(function(){

	//console.log("asdasdasd");

	var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++){
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
	var v1 = vars["id"];
	
	var res = "scripts/consultar_obra_alterar.php?id='" + v1 + "'";
	
	$("#obra").load(res);
	
	$("#obra_form").submit(function(){
		
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