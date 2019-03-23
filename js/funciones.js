function carga_ajax(id,div,url){
 	console.log("OK");
    $.post(
		url,
		{id:id},
		function(resp){
			$("#"+div+"").html(resp);
		}
	);
}