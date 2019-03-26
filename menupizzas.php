	<?php
		include("header.html");
		//include("descripcionpizza.php");
		include("conexion.php");

		//Crea el id de acuerdo al no de sesion
		session_start();

		

		



	$s_id = (int)session_id();
	$pizzeriaIds=array();
	if(filter_input(INPUT_POST,'addToCart')){
		if(isset($_SESSION['shoppingCart'])){
			$count=count($_SESSION['shoppingCart']);
			$pizzeriaIds=array_column($_SESSION['shoppingCart'], 'id');

			//if(!in_array(filter_input(INPUT_GET,'id'),$pizzeriaIds)){
				$_SESSION['shoppingCart'][$count]=array(
					'id'=>filter_input(INPUT_GET,'id'),
					'name'=>filter_input(INPUT_POST, 'name'),
					'image'=>filter_input(INPUT_POST, 'image'),
					'price'=>filter_input(INPUT_POST, 'tam'),
					'size'=>filter_input(INPUT_POST, 'size'),
					'quantity'=>filter_input(INPUT_POST, 'cant'),
					'desc'=>filter_input(INPUT_POST, 'desc')
					);
			/*}else{
				for($i=0;$i<count($pizzeriaIds);$i++){
					if($pizzeriaIds[$i]==filter_input(INPUT_GET, 'id')){
						$_SESSION['shoppingCart'][$i]['quantity']+=filter_input(INPUT_POST, 'quantity');
					}

				}
			//}*/

		}

		else{
			$_SESSION['shoppingCart'][0]=array(
				'id'=>filter_input(INPUT_GET,'id'),
					'name'=>filter_input(INPUT_POST, 'name'),
					'image'=>filter_input(INPUT_POST, 'image'),
					'price'=>filter_input(INPUT_POST, 'tam'),
					'size'=>filter_input(INPUT_POST, 'size'),
					'quantity'=>filter_input(INPUT_POST, 'cant'),
					'desc'=>filter_input(INPUT_POST, 'desc')
			);
		}
	}
//delete
	if(filter_input(INPUT_GET, 'action')=='delete'){
		foreach ($_SESSION['shoppingCart'] as $key => $pizza) {
			if($pizza['id']==filter_input(INPUT_GET, 'id')){
					unset($_SESSION['shoppingCart'][$key]);
			}
			# code...
		}

		$_SESSION['shoppingCart']=array_values($_SESSION['shoppingCart']);
	}


/*preR($_SESSION);

function preR($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}*/
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
							        <img id='menu' name='menu' class='rounded img-fluid' src='".$producto['url_imagen']."' alt='Pizza'>
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
							<form class="was-validated" method='post' id="submitPizza" action=''>
								<div class="row justify-content-center">
									<div id='imagePizza'></div>
								</div>
								<div class="row justify-content-center">
									<p id='descripcion'></p>
								</div>

								<div class="row justify-content-center">
								<div id="tamanioPizza" class="form-group">
									<label for="tamaño">Tamaño</label>
									<select name="tam" class="form-control" id="tamaniopizza" required>
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
											<input type="number" name="cant" id="cantidadpizza" class="form-control" min="1" max="20" required>
										</div>
										 <div class="invalid-feedback">Debe ingresar una cantidad</div>
									</div>
									</div>

									<div clas="row justify-content-center">
										<div id="costo">
											<p id="costo"></p>
										</div>
									</div>

								<div class='modal-footer'>
									<input type='hidden' name='name' id='name' value="" />
									<input type='hidden' name='size' id='size' value=""/>
									<input type='hidden' name='image' id='image' value="" />
									<input type='hidden' name='desc' id='desc' value=""/> 
									<input type='submit' name='addToCart' id="addToCart" class='addToCart btn btn-info' value='Agregar al carrito'/ >
									<!-- <button type='submit' id="addToCart" name="addToCart" class='addToCart btn btn-primary'>Agregar al carrito</button> -->
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
