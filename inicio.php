<?php
	include("header.html");
?>
<section class="main container">
	<form action="menupizzas.php">
		<div class="form-row justify-content-center">
			<div class="form-group col-md-4">
		      <select class="form-control" required>
		        <option value="">Forma de entrega</option>
		        <option value="1">Sucursal</option>
		        <option value="2">A domicilio</option>
		      </select>
		      <div class="invalid-feedback">Seleccione un modo de entrega</div>
	   		 </div>
	   		 <div class="form-group col-md-4">
		      <a href="?menu=menu_pizzas"> <button type="submit" class="btn btn-success">Ordena Ahora</button></a>
	   		 </div>
		</div>

		<div class="form-row justify-content-center">
			<div class="form-group col-md-4">
			    <label>Seleccione su ubicación/tienda</label>
	   		 </div>
	   		 <div class="form-group col-md-4">
		      	<input type="text" class="form-control" id="inputAddress" placeholder="Escom">
	   		 </div>
		</div>
	</form>
	<!--Google map-->
	<div style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=+(Pizzeria%20Pro)&ie=UTF8&t=&z=12&iwloc=B&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/journey-planner.htm"></a></iframe></div><br />

	<!--Google Maps-->
</section>

<?php
	include("footer.html");
?>