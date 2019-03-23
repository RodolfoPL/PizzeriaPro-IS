<?php
	include("header.html");
	include("conexion.php");
?>
<section class="main container">
	<!-- Pizza1 -->
	<div class="row justify-content-center">
		<!-- <?php
			/*$con = conectar();
				if(!$con){
					echo "Error de base de datos";
				}
				$consulta = "SELECT * FROM pizza";
				$resultado = mysqli_query($con, $consulta) or die ( "Error de consulta");
				//mostrar todas las pizzas de la bd
				if(mysqli_num_rows($resultado) > 0){
					while ($producto = mysqli_fetch_array( $resultado )){
						echo "
							<div class='col-md-4'>
								<img class='rounded img-fluid'src='' alt='Pizza'>
							</div>
							<div class='col-md-4'>
								<p class='menu'>Nombre Pizza/Paquete</p>
								<p class='menu'>Costo Pizza/Paquete</p>
								<p class='menu'>Caracteristicas Pizza/Paquete</p>
							</div>
							<div class='col-md-4'>
								<button class='btn btn-danger'> Eliminar del pedido</button>
							</div>";
				}
				mysqli_close($con);*/
		?> -->
	</div>
	
</section>

<?php
	include("footer.html");
?>