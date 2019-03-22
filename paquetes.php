<?php
	include("header.html");
	include("descripcionpaquete.php");
?>

<section class="main container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<!-- Fila de pizza -->
			<div class="row justify-content-center">
			<!-- Paquete -->
			  <div class="col-md-5">
			    <div class="thumbnail" >
			    	<a href="#" data-toggle="modal" data-target="#descripcion">
			        <img class="rounded img-fluid" src="img/pizza.jpg" alt="Paquete">
			        <div class="caption">
						<p class="menu">Nombre Paquete</p>
						<p class="menu">Costo Paquete</p>
			        </div>
			      </a>
			    </div>
			  </div>
			<!-- Paquete -->
			  <div class="col-md-5">
			    <div class="thumbnail" >
			    	<a href="#" data-toggle="modal" data-target="#descripcion">
			        <img class="rounded img-fluid" src="img/pizza.jpg" alt="Paquete">
			        <div class="caption">
						<p class="menu">Nombre Paquete</p>
						<p class="menu">Costo Paquete</p>
			        </div>
			      </a>
			    </div>
			  </div>	
			</div>
			<!-- Fila de pizza -->
			<div class="row justify-content-center">
			<!-- Paquete -->
			  <div class="col-md-5">
			    <div class="thumbnail" >
			    	<a href="#" data-toggle="modal" data-target="#descripcion">
			        <img class="rounded img-fluid" src="img/pizza.jpg" alt="Paquete">
			        <div class="caption">
						<p class="menu">Nombre Paquete</p>
						<p class="menu">Costo Paquete</p>
			        </div>
			      </a>
			    </div>
			  </div>
			<!-- Paquete -->
			  <div class="col-md-5">
			    <div class="thumbnail" >
			    	<a href="#" data-toggle="modal" data-target="#descripcion">
			        <img class="rounded img-fluid" src="img/pizza.jpg" alt="Paquete">
			        <div class="caption">
						<p class="menu">Nombre Paquete</p>
						<p class="menu">Costo Paquete</p>
			        </div>
			      </a>
			    </div>
			  </div>	
			</div>	
		</div>
		<!-- Carrito -->
		<div class="col-md-4">
			<?php
				include("sidebar_carrito.php")
			?>
		</div>
	</div>
	
</section>

<?php
	include("footer.html");
?>