function carga_ajax(id,div,url){
 	//console.log("OK");
    $.post(
		url,
		{id:id},
		function(resp){
			$("#"+div+"").html(resp);
		}
	);
}

//funciones dentro del modal de pizzas
document.addEventListener('DOMContentLoaded',function() {
	try{
    	document.querySelector('select[name="tam"]').onchange=calculaSubTotal;
    }catch(e){
    	//console.log(e);
    }
},false);

document.addEventListener('DOMContentLoaded',function() {
	try{
    document.querySelector('input[name="cant"]').onchange=calculaSubTotal;
	}catch(e){
		//console.log(e);
	}
},false);


//funciones del modal de paquetes
document.addEventListener('DOMContentLoaded',function() {
	try{
    document.querySelector('input[name="cantpaq"]').onchange=calculaSubTotalP;
	}catch(e){
		//console.log(e);
	}
},false);

function calculaSubTotal(){
	let tamanio = document.querySelector('select[name="tam"]');
	let cant = document.querySelector('input[name="cant"]');
	let costo = tamanio.value*cant.value;
	console.log(costo);
	document.getElementById("costo").innerHTML = "Costo: $" + costo.toString();
	//console.log(tamanio.value + "\n" + cant.value);
}

function calculaSubTotalP(){
	let pizzasporpaquete = document.getElementById("PPP");
	let cant = document.querySelector('input[name="cantpaq"]');
	let precio = document.getElementById("costoP");
	let costo = parseInt(cant.value)*parseInt(precio.getAttribute("name"));
	console.log(cant);

	document.getElementById("cantidad").max = parseInt(20/parseInt(pizzasporpaquete.getAttribute("name")));
	document.getElementById("costoP").innerHTML = "Costo: $" + costo.toString();
}