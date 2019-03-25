<div class="modal fade" id="descripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" align="center">
		<div class="modal-content" id="infoPizza" align="center">
				<!-- AQUI VA EL QUERY -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Descripción de la paquete</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body  container-fluid">
				<div class="col">
				    <div class="container" >
				    	<img class="rounded" src="img/pizza.jpg" alt="Pizza" style="width:50%">
				    </div>
				    <div class="container"><p>Aqui va la descripcion</p></div>
		 	 	</div>
		 	 	<div class="col">
			    	<form class="was-validated">
			    		<div class="col-md-6">
					      <label id='PPP' name="2">Cantidad</label>
					      <!-- El valor maximo debe de cambiar aqui -->
					      <input id="cantidad" type="number" min="1" max="20" class="form-control" id="cantpaq" placeholder="cantidad" placeholder="Cantidad" name="cantpaq" required>
					      <div class="invalid-feedback">Debe ingresar una cantidad</div>
					  	</div>
					  	<br>
					  	<p name='200' id='costoP'>Costo: $</p>
					  	<br>
					  	<button class="btn btn-success" type="submit">Añadir al carrito</button>
					  	<button class="btn btn-info" type="button" onclick="window.location = 'carrito.php'">Ver Carrito</button>
			    	</form>
		 	 	</div>
			</div>
		 	 	<!-- AQUI TERMINA EL QUERY -->
		</div>
	</div>
</div>