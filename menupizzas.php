	<?php
	include("header.html");
	//include("descripcionpizza.php");
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
							    <a href='' class='pizza' data-toggle='modal'  data-target='#exampleModal' data-nombre='".$producto['nombre']."' data-descripcion='".$producto['descripcion']."'
									data-pizza='".$producto['idPizza']."' data-precioChica='".$producto['precio_chica']."' data-precioMediana='".$producto['precio_mediana']."' data-precioGrande='".$producto['Precio_grande']."' data-precioFamiliar='".$producto['precio_familiar']."' data-pizzaUrl='".$producto['url_imagen']."'>
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

			<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				<div class='modal-dialog' role='document'>
					<div class='modal-content'>
						<div class='modal-header'>
							<h5 class='modal-title' id='exampleModalLabel'></h5>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
								<span aria-hidden='true'>&times;</span>
							</button>
						</div>
						<div class='modal-body' >
							<form class="was-validated">
								<div class="row justify-content-center">
									<div id='imagePizza'></div>
								</div>
								<div class="row justify-content-center">
									<p id='descripcion'></p>
								</div>

								<div class="row justify-content-center">
								<div id="tamanioPizza" class="form-group">
									<label for="tamaño">Tamaño</label>
									<select name="tam" class="form-control" id="tamanio">
										<option selected disabled>Escoge un tamaño</option>
										<option id="tamChica">Chica </option>
										<option id="tamMed">Mediana</option>
										<option id="tamGrande">Grande</option>
										<option id="tamFam">Familiar</option>
									</select>
									 <div class="invalid-feedback">Seleccione un tamaño de pizza</div>
								</div>
								</div>

								<div class="row justify-content-center">
									<div id='cantidadPizza'>
										<div class="form-group">
											<label for="cantidad">Cantidad</label>
											<input name="cant" type="number" id="cantidad" class="form-control" min="1" max="20">
										</div>
										 <div class="invalid-feedback">Debe ingresar una cantidad</div>
									</div>
									</div>

									<div clas="row justify-content-center">
										<div id="costoPizza">
											<p id="costo"></p>
												<!-- <input type="text" id="costo" class="form-control"> -->
									</div>
								</div>


								<div class='modal-footer'>
									<button type='button' class='btn btn-primary'>Agregar al carrito</button>
								</div>
							</form>
					</div>
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
