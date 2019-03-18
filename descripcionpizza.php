<div class="modal fade" id="descripcion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" align="center">
		<div class="modal-content" id="infoPizza" align="center">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Descripción de la pizza</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body  container-fluid">
				<div class="col">
				    <div class="container" >
				    	<img class="rounded" src="img/pizza.jpg" alt="Pizza" style="width:50%">
				    </div>
		 	 	</div>
		 	 	<div class="col">
			    	<form class="was-validated">
			    		<div class="form-group col-md-6">
					      <label for="inputTam">Tamaño</label>
					      <select id="inputTam" class="custom-select form-control" required>
					        <option value="">Seleccione un tamaño...</option>
					        <option value="1">Chica</option>
					        <option value="2">Mediana</option>
					        <option value="3">Grande</option>
					      </select>
					       <div class="invalid-feedback">Seleccione un tamaño de pizza</div>
					    </div>
						<div class="col-md-6">
					      <label for="validationServer05">Cantidad de pizzas</label>
					      <input type="text" class="form-control" id="cant" placeholder="cantidad" placeholder="Cantidad" required>
					      <div class="invalid-feedback">Debe ingresar una cantidad</div>
					  	</div>
					  	<br>
					  	<p class="costo">Costo: $</p>
					  	<br>
					  	<button class="btn btn-success" type="submit">Comprar</button>
					  	<button class="btn btn-info" type="button">Ver Carrito</button>
			    	</form>
		 	 	</div>
			</div>
		</div>
	</div>
</div>