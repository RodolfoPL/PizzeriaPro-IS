<?php
	include("header.html");
	include("modal.php");
	include("conexion.php");
	
	//Crea el id de acuerdo al no de sesion
	session_start();
	$s_id = (int)session_id();
	

	$con = conectar();
	if(!$con){
		echo "Error de base de datos";
	}

	//si no se tiene sesion se crea una nueva orden
	$test = "SELECT COUNT(*) AS 'count' FROM orden WHERE idOrden = $s_id";
	$n = mysqli_query($con, $test) or die ("ERROR: Could not able to execute sql. " .mysqli_error($con));
	$row = mysqli_fetch_assoc($n);
	$existe = $row['count'];
	if($existe == 0)
	{
		$orden = "INSERT INTO orden(idOrden, Precio_total) VALUES ($s_id, 0);";
		mysqli_query($con, $orden) or die ("ERROR: Could not able to execute sql. " .mysqli_error($con));
	}

	mysqli_close($con);
?>
			
<section class="main container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<?php
				
				$con = conectar();
				if(!$con){
					echo "Error de base de datos";
				}
				$consulta = "SELECT * FROM pizza";
				$resultado = mysqli_query($con, $consulta) or die ( "Error de consulta");
				//mostrar todas las pizzas de la bd
				if(mysqli_num_rows($resultado) > 0){
					$i = 0;
					while ($producto = mysqli_fetch_array( $resultado )){
						$i++;
						//Fila de pizza -->
						if($i == 1){
							echo "<div class='row justify-content-center'>";
						}
					
						//<!-- Pizza -->
						echo" <div class='col-md-5'>
							<div class='thumbnail'>
							    <a href='' data-toggle='modal' data-target='#descripcion' onclick='carga_ajax('12','modal','descripcionpizza.php');'>
							        <img class='rounded img-fluid' src='".$producto['url_imagen']."' alt='Pizza'>
							        <div class='caption'>
										<p class='menu'>".$producto['nombre']."</p>
										<p class='menu'>Desde: $ ".$producto['precio_chica']."</p>
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