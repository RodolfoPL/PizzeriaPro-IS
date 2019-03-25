
$(document).ready(function(){
  /*
  $(document).on('show.bs.modal','#exampleModal', function () {
  var myVal = $(event.relatedTarget).data('descripcion');
  alert(myVal);
  //$("#descripcion").val(descripcion);
  alert('hi');

});*/

$(".pizza").click(function(){
  var nombre=$(this).attr('data-nombre');
  var descripcion=$(this).attr('data-descripcion');
  var precioChica=$(this).attr('data-precioChica');
  var precioMediana=$(this).attr('data-precioMediana');
  var precioGrande=$(this).attr('data-precioGrande');
  var precioFamiliar=$(this).attr('data-precioFamiliar');
  var pizzaId=$(this).attr('data-pizza');
  var pizzaUrl=$(this).attr('data-pizzaUrl');


  /*alert(precioChica);
  alert(precioMediana);
  alert(precioGrande);
  alert(precioFamiliar);*/





  $("#imagePizza").html("<img src=" +pizzaUrl+ ">");
  $("#exampleModalLabel").text(nombre);
  $("#exampleModal #descripcion").text(descripcion);


  /*Adding values to tam of the pizza in the modal*/
  $("#tamChica").val(precioChica);
  $("#tamMed").val(precioMediana);
  $("#tamGrande").val(precioGrande);
  $("#tamFam").val(precioFamiliar);


});


//document.getElementById("costo").innerHTML = "Costo: $" + costo.toString();
//console.log(tamanio.value + "\n" + cant.value);
  var price=0;
  var cantidad=0;
  
  $("#tamanio").change(function(){
    price=$(this).val();
    total();
    //alert(price);
  });
  $("#cantidad").change(function(){
      total();
      cantidad=$(this).val();
  });

  function total(){
    console.log("alfo");
    var total_price = price * cantidad;
    total_price = "Costo $: "+ total_price;
    console.log("$" + total_price);
    $("#exampleModal #costo").text(total_price);
    
  }
});



/*
$("#cantidad").on('change',function(){
  var cantidad=$(this).val();
  alert(cantidad);
    var costo=tamanio*cantidad;
    alert(costo);

    $("#costo").val(costo);
});*/
