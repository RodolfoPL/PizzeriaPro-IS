var precio;

$(document).ready(function(){

$(".paquete").click(function(){
  var nombre=$(this).attr('data-nombre');
  var descripcion=$(this).attr('data-descripcion');
  precio=$(this).attr('data-precio');
  var paqueteId=$(this).attr('data-paquete');
  var paqueteUrl=$(this).attr('data-paqueteUrl');
  var noPizzas=$(this).attr('data-noPizzas');

  /*alert(precioChica);
  alert(precioMediana);
  alert(precioGrande);
  alert(precioFamiliar);*/


  var m = 20/noPizzas;
  console.log(m);
  document.getElementById("cantidad").setAttribute("max", m);

  $("#imagepaquete").html("<img src=" +paqueteUrl+ ">");
  $("#exampleModalLabel").text(nombre);
  $("#exampleModal #descripcion").text(descripcion);



});


//document.getElementById("costo").innerHTML = "Costo: $" + costo.toString();
//console.log(tamanio.value + "\n" + cant.value);
  
  $("#cantidad").change(function(){
    var cantidad=$(this).val();
    console.log(cantidad);
    var total_price = precio * cantidad;

    total_price = "Costo $: "+ total_price;

    $("#exampleModal #costo").text(total_price);
    //alert(price);
  });
});



/*
$("#cantidad").on('change',function(){
  var cantidad=$(this).val();
  alert(cantidad);
    var costo=tamanio*cantidad;
    alert(costo);

    $("#costo").val(costo);
});*/
