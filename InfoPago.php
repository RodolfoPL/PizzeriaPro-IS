<?php
	include("header.html");
?>
<section class="main container">
	<form action="pago_targeta.php">
		<fieldset>
		    <legend class="scheduler-border">Selecciona metodo de pago</legend>
		    <div class="col-sm-10">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
		          <label class="form-check-label" for="gridRadios1">
		            Targeta de crédito en línea
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
		          <label class="form-check-label" for="gridRadios2">
		            Targeta de crédito al momento de entrega
		          </label>
		        </div>
		        <div class="form-check disabled">
		          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
		          <label class="form-check-label" for="gridRadios3">
		            Targeta de crédito en línea
		          </label>
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
		</fieldset>
		<button type="submit" class="btn btn-success">Comprar</button>
	</form>
	<form action="menupizzas.php">
		<button type="submit" class="btn btn-danger">Cancelar compra</button>
	</form>
</section>

<?php
	include("footer.html");
?>