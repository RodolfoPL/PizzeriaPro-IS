<?php
	include("header.html");
?>
<section class="main container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<h1> PIZZERIA</h1>
		</div>
	</div>
	<form>
		<div class="form-group">
			<label for="email">Email address:</label>
    		<input type="email" class="form-control" id="email">
		</div>
		<div class="form-group">
			<label>Escribe aqui tu queja p sugerencia</label>
  			<textarea class="form-control rounded-0" id="qs" rows="3"></textarea>
		</div>
		<button type="submit" class="btn btn-light">Enviar</button>
	</form>
</section>
<?php
	include("footer.html");
?>