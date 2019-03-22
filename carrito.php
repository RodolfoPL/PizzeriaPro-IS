<?php
	include("header.html");
?>
<section class="main container">
	<!-- Pizza1 -->
	<div class="row justify-content-center">
		<div class="col-md-4">
			<img class="rounded img-fluid" src="img/pizza.jpg" alt="Pizza">
		</div>
		<div class="col-md-4">
			<p class="menu">Nombre Pizza/Paquete</p>
			<p class="menu">Costo Pizza/Paquete</p>
			<p class="menu">Caracteristicas Pizza/Paquete</p>
		</div>
		<div class="col-md-4">
			<button class="btn btn-danger"> Eliminar del pedido</button>
		</div>
	</div>
	<!-- Pizza2 -->
	<div class="row justify-content-center">
		<div class="col-md-4">
			<img class="rounded img-fluid" src="img/pizza.jpg" alt="Pizza">
		</div>
		<div class="col-md-4">
			<p class="menu">Nombre Pizza/Paquete</p>
			<p class="menu">Costo Pizza/Paquete</p>
			<p class="menu">Caracteristicas Pizza/Paquete</p>
		</div>
		<div class="col-md-4">
			<button class="btn btn-danger"> Eliminar del pedido</button>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-6">
			<form action="InfoPago.php">
				<button type="submit" class="btn btn-success"> Comprar</button>
			</form>
		</div>
		<div class="col-md-6">
			<form action="menupizzas.php">
				<button type="submit" class="btn btn-danger"> Cancelar pedido</button>
			</form>
		</div>
	</div>
</section>

<?php
	include("footer.html");
?>