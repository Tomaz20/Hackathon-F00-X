$(function(){
	//console.log("udgsaydgais");
	var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++){
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
	var v1 = vars["id"];
	
	var res = "scripts/consultar_obra.php?id='" + v1 +"'";
	
	$("#tab_obras").load(res);
});