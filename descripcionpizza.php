<div class="modal fade" id="descripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" align="center">	
		<div class="modal-content" id="infoPizza" align="center">
			<!-- AQUI VA EL EL QUERY -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"> </h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body  container-fluid">
				
				<div class="col">
				    <div class="container" >
				    	<img class="rounded" src="img/pizza.jpg" alt="Pizza" style="width:50%">
				    </div>
				    <div class="container">
			    		<p>aqui va la DESCRIPCION de la pizza.</p>
			    	</div>
		 	 	</div>
		 	 	<div class="col">
			    	<form class="was-validated">
			    		<div class="form-group col-md-6">
					      <label>Tamaño</label>
					      <select id="tam" name="tam" class="custom-select form-control" required>
					        <option value="">Seleccione un tamaño...</option>
					        <option value="1">Chica</option>
					        <option value="2">Mediana</option>
					        <option value="3">Grande</option>
					         <option value="4">Familiar</option>
					      </select>
					       <div class="invalid-feedback">Seleccione un tamaño de pizza</div>
					    </div>
						<div class="col-md-6">
					      <label for="validationServer05">Cantidad de pizzas</label>
					      <input type="number" name="cant" min="1" max="20" class="form-control" id="cant" placeholder="cantidad" placeholder="Cantidad" required>
					      <div class="invalid-feedback">Debe ingresar una cantidad</div>
					  	</div>
					  	<br>
					  	<p class="costo" id="costo">Costo: $</p>
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