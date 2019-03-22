<?php
	include("header.html");
?>
<section class="main container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<h1>Complete los datos solicitados	</h1>
		</div>
	</div>
	<form action="comprobante.php">
		<div class="form-group">
			<label>Informacion</label>
  			<textarea class="form-control rounded-0" id="qs" rows="3"></textarea>
		</div>
		<button type="submit" class="btn btn-success">Comprar ahora</button>
	</form>
	<form action="InfoPago.php">
		<button type="submit" class="btn btn-danger">Cancelar</button>
	</form>
</section>

<?php
	include("footer.html");
?>