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

//funciones dentro del modal

document.addEventListener('DOMContentLoaded',function() {
    document.querySelector('select[name="tam"]').onchange=calculaSubTotal;
},false);

document.addEventListener('DOMContentLoaded',function() {
    document.querySelector('input[name="cant"]').onchange=calculaSubTotal;
},false);

function calculaSubTotal(){
	let tamanio = document.querySelector('select[name="tam"]');
	let cant = document.querySelector('input[name="cant"]');
	let costo = tamanio.value*cant.value;
	console.log(costo);
	document.getElementById("costo").innerHTML = "Costo: $" + costo.toString();
	//console.log(tamanio.value + "\n" + cant.value);
}