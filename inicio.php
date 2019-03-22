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
		      <a href="index.php?menu=menu_pizzas"> <button type="submit" class="btn btn-success">Ordena Ahora</button></a>
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
	<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 80">
	  <iframe src="https://maps.google.com/maps?&output=embed" frameborder="0"
	    style="border:0" allowfullscreen></iframe>
	</div>

	<!--Google Maps-->
</section>

<?php
	include("footer.html");
?>