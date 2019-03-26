<?php
	include("header.html");
	session_start();
?>
<section class="main container">
	<form class="was-validated">
	 	<div class='row justify-content-center'>
                <div class='col'>
                    <ul>
	 	 				<li>Efectivo</li>
						<li>Targeta de crédito en linea</li>
	 	 				<li>Targeta de crédito al momento de entrega</li>
	 	 			</ul>
                </div>
            </div>    

		    <div>
		        <p>El repartidor no lleva más de $200 de cambio. </p>
		        <p>TOTAL: $</p>
		        	<div class="custom-control custom-checkbox">
						  <input type="checkbox" class="custom-control-input" id="customCheck1" required>
						  <label class="custom-control-label" for="customCheck1">Estoy de acuerdo con los Términos y Condiciones de uso y entiendo que mi información será utilizada como se describe en esta página y la Política de la empresa.</label>
						  <div class="invalid-feedback">Debe aceptar los términos y condiciones</div>
					</div>
		    </div>
	</form>
	<div class='row justify-content-center'>
		
			<?php
				$total = 0;
		        $cant_total=0;
		        
		        foreach ($_SESSION['shoppingCart'] as $key => $product) {
		            $precio_ind = $product['quantity']*$product['price'];
		            $cant_total = $product['quantity'] + $cant_total;
		            $total = $total+$precio_ind;
		        }
		        if($cant_total > 10){
			        echo"

						<div class='col-md-4'>
						<a href='pago_targeta.php'>
			                <div type='button' class='btn btn-outline-info' disabled>Efectivo</div>
			            </a>
			            </div>
			         ";	
		        }else{
		        	echo"
						<div class='col-md-4'>
						<a href='pago_targeta.php'>
			                <div type='button' class='btn btn-outline-info'>Efectivo</div>
			            </a>
			            </div>
			         ";	
		        }
		        echo"
		        	<div class='col-md-4'>
						<a href='pago_targeta.php'>
			                <div type='button' class='btn btn-outline-info'>Targeta de crédito en linea</div>
			            </a>
			        </div>
			        <div class='col-md-4'>
						<a href='pago_targeta.php'>
			                <div type='button' class='btn btn-outline-info'>Targeta de crédito al momento de entrega</div>
			            </a>
			        </div>
			     ";
            ?>
		
	</div>
	
</section>

<?php
	include("footer.html");
?>