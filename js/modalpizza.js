
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
  var  precioGrande=$(this).attr('data-precioGrande');
   var precioFamiliar=$(this).attr('data-precioFamiliar');
   var pizzaId=$(this).attr('data-pizza');
   var pizzaUrl=$(this).attr('data-pizzaUrl');


  /*alert(precioChica);
  alert(precioMediana);
  alert(precioGrande);
  alert(precioFamiliar);*/



  var imagefluid = "class='rounded img-fluid'";

  $("#imagePizza").html("<img src=" +pizzaUrl+ ">");
  $("#exampleModalLabel").text(nombre);
  $("#exampleModal #descripcion").text(descripcion);


  /*Adding values to tam of the pizza in the modal*/
  $("#tamChica").val(precioChica);
  $("#tamMed").val(precioMediana);
  $("#tamGrande").val(precioGrande);
  $("#tamFam").val(precioFamiliar);

  /*Adding values to tam of the pizza in the modal*/
  //$("#idPizza").val(pizzaId);
  $("#name").val(nombre);
  $("#image").val(pizzaUrl);
  $("#desc").val(descripcion);

  $("#submitPizza").attr('action','menupizzas.php?action=add&id='+pizzaId);
});


//document.getElementById("costo").innerHTML = "Costo: $" + costo.toString();
//console.log(tamanio.value + "\n" + cant.value);
  
  $("#tamaniopizza").change(function(){
    //price=$(this).val();
    total();
  });
  $("#cantidadpizza").change(function(){
      total();
      //cantidad=$(this).val();
  });

  function total(){
    var price=$("#tamaniopizza").val();
    var cantidad=$("#cantidadpizza").val();
    
    var total_price = price * cantidad;

    total_price = "Costo $: "+ total_price;
    
    $("#exampleModal #costo").text(total_price);
    
  }

  $("#addToCart").click(function(e) {
    var size=$("#tamaniopizza option:selected").text(); 
    $("#size").val(size);
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
