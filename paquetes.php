<?php
	include("header.html");
	include("conexion.php");

	session_start();

	$s_id = (int)session_id();
	$paqueteIds=array();
	if(filter_input(INPUT_POST,'addToCart')){
		if(isset($_SESSION['shoppingCart2'])){
			$count=count($_SESSION['shoppingCart2']);
			$paqueteIds=array_column($_SESSION['shoppingCart2'], 'id');

			if(!in_array(filter_input(INPUT_GET,'id'),$paqueteIds)){
				$_SESSION['shoppingCart2'][$count]=array(
					'id'=>filter_input(INPUT_GET,'id'),
					'name'=>filter_input(INPUT_POST, 'name'),
					'image'=>filter_input(INPUT_POST, 'image'),
					'price'=>filter_input(INPUT_POST, 'precio'),
					'quantity'=>filter_input(INPUT_POST, 'cant'),
					'desc'=>filter_input(INPUT_POST, 'descripcion'),
					'numero'=>filter_input(INPUT_POST, 'nopizzas')
					);
			}else{
				for($i=0;$i<count($paqueteIds);$i++){
					if($paqueteIds[$i]==filter_input(INPUT_GET, 'id')){
						$_SESSION['shoppingCart2'][$i]['quantity']+=filter_input(INPUT_POST, 'quantity');
					}

				}
			}

		}

		else{
			$_SESSION['shoppingCart2'][0]=array(
				'id'=>filter_input(INPUT_GET,'id'),
					'name'=>filter_input(INPUT_POST, 'name'),
					'image'=>filter_input(INPUT_POST, 'image'),
					'price'=>filter_input(INPUT_POST, 'precio'),
					'quantity'=>filter_input(INPUT_POST, 'cant'),
					'desc'=>filter_input(INPUT_POST, 'descripcion'),
					'numero'=>filter_input(INPUT_POST, 'nopizzas')
			);
		}
	}

	preR($_SESSION);

	function preR($array){
		echo '<pre>';
		print_r($array);
		echo '</pre>';
	}
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
				//mostrar todas los paquetes
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
							    <a href='' class='paquete' data-toggle='modal' data-target='#exampleModal' data-nombre='".$producto['nombre']."' data-descripcion='".$producto['Descripcion']."' data-paquete='".$producto['idPaquete']."' data-precio='".$producto['precio']."' data-paqueteUrl='".$producto['url_imagen']."' data-noPizzas='".$producto['noPizzas']."'>
							        <img id='menu' class='rounded img-fluid' src='".$producto['url_imagen']."' alt='paquete'>
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
				<div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
					<div class='modal-dialog' role='document'>
						<div class='modal-content'>
							<div class='modal-header'>
								<h5 class='modal-title' id='exampleModalLabel'></h5>
								<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
									<span aria-hidden='true'>&times;</span>
								</button>
							</div>
							<div class='modal-body' method='post' id="submitPaquete" action=''>
								<form class="was-validated">
									<div class="row justify-content-center">
										<div id='imagepaquete'></div>
									</div>
									<div class="row justify-content-center">
										<p id='descripcion'></p>
									</div>

									<div class="row justify-content-center">
										<div id='cantidadPizza'>
											<div class="form-group">
												<label for="cantidad">Cantidad</label>
												<input type="number" name="cant" id="cantidad" class="form-control" min="1" max="20" required>
											</div>
											 <div class="invalid-feedback">Debe ingresar una cantidad</div>
										</div>
									</div>

									<div clas="row justify-content-center">
											<div id="costoPizza">
												<p id="costo"></p>
											</div>
									</div>


									<div class='modal-footer'>
									<input type='hidden' name='name' id='name' value="" />
									<input type='hidden' name='nopizzas' id='nopizzas' value=""/>
									<input type='hidden' name='image' id='image' value="" />
									<input type='hidden' name='descripcion' id='descripcion' value=""/> 
									<input type='hidden' name='precio' id='precio' value=""/> 
									<input type='submit' name='addToCart' id="addToCart" class='addToCart btn btn-info' value='Agregar al Carrito'/ >	
									</div>
								</form>
							</div>
						</div>
					</div>	
				</div>
			<!-- Carrito -->
			</div>
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