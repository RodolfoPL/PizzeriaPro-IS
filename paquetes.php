<?php
	include("header.html");
	include("descripcionpaquete.php");
	include("conexion.php");
?>

<section class="main container">
	<div class="row justify-content-center">
		<div class="col-md-8">

			<?php
				
				$con = conectar();
				if(!$con){
					echo "Error de base de datos";
				}
				$consulta = "SELECT * FROM paquete";
				$resultado = mysqli_query($con, $consulta) or die ( "Error de consulta");
				//mostrar todas las pizzas de la bd
				if(mysqli_num_rows($resultado) > 0){
					$i = 0;
					while ($producto = mysqli_fetch_array( $resultado )){
						$i++;
						//Fila de paquete -->
						if($i == 1){
							echo "<div class='row justify-content-center'>";
						}
					
						//<!-- paquete -->
						echo" <div class='col-md-5'>
							<div class='thumbnail'>
							    <a href='' data-toggle='modal' data-target='#descripcion' onclick='carga_ajax('12','modal','descripcionpaquete.php');'>
							        <img class='rounded img-fluid' src='".$producto['url_imagen']."' alt='Pizza'>
							        <div class='caption'>
										<p class='menu'>".$producto['nombre']."</p>
										<p class='menu'>Precio: $ ".$producto['precio']."</p>
							        </div>
							     	</a>
							    </div>
							</div>";
						if($i == 2){
							echo "</div>";
							$i = 0;
						}
					}
				}


				mysqli_close($con);
					

			?>	

			<!-- Fila de pizza
			<div class="row justify-content-center">
			Paquete
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
			</div> -->
				
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