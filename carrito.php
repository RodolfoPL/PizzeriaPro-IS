<?php
	include("header.html");
	include("conexion.php");

	session_start();
	if(filter_input(INPUT_GET, 'action')=='delete'){
		foreach ($_SESSION['shoppingCart'] as $key => $pizza) {
			if($pizza['id']==filter_input(INPUT_GET, 'id')){
					unset($_SESSION['shoppingCart'][$key]);
			}
			# code...
		}

		$_SESSION['shoppingCart']=array_values($_SESSION['shoppingCart']);
	}
?>
<section class="main container">
	<?php
		if(!empty($_SESSION['shoppingCart'])){
			$precio_ind=0;
			$cant_total=0;
			$precio_total=0;
			foreach ($_SESSION['shoppingCart'] as $key => $product) {
	            $precio_ind = $product['quantity']*$product['price'];
	            $cant_total = $product['quantity'] + $cant_total;
	            $precio_total = $precio_total + $product['price'];
				echo "
					<div class='row justify-content-center'>
						<div class='col-md-4'>
							<img class='rounded' src='".$product['image']."' alt='Pizza' style='width:5cm'>
						</div>
						<div class='col-md-4'>
							<h4>".$product['name']."</h4>
							<h4>Tamaño: ".$product['size']."</h4>
							<h4>Numero de pizzas: ".$product['quantity']."</h4>
							<h4>Descripcion: ".$product['desc']."</h4>
							<h4>Subtotal: $".number_format($precio_ind,2)."</h4>
						</div>
						<div class='col-md-4'>
							<a href='carrito.php?action=delete&id=".$product['id']."'>
                            <div type='button' class='btn btn-outline-danger'>Eliminar pedido
                            </div></a>
						</div>
					</div>	
					<hr>
				";
			}
		echo "
			<div class='row justify-content-center'>
				<div class='col-md-4'>
					<h4>TOTAL: $".number_format($precio_total,2)."</h4>
				</div>
				<div class='col-md-4'>
					<h4>Cantidad total de pizzas: ".$cant_total."</h4>
				</div>
			</div>	
			<div class='row justify-content-center'>
			";
		if($cant_total > 20){
            echo "<script type='text/javascript'>alert('El campo Cantidad no tiene que exceder de 20');</script>
            <div class='col-md-4'>
					<input id='comprar' type='submit' class='btn btn-success' value='COMPRAR' disabled/>
			</div>";
        }else{
            echo"	

                        <a href='InfoPago.php'><input id='comprar' type='submit' class='btn btn-success' value='COMPRAR'/></a>";
        }
			
		echo "	
				<form action='menupizzas.php'>
					<div class='col-md-4'>
						<button class='btn btn-success' type='submit'> Cancelar pedido</button>
					</div>
				</form>
			</div>
		";
	}
	else{
		 echo
        "   <div class='row justify-content-center'>
                <div class='col'>
                    <h2>AGREGUE PIZZAS O PAQUETES A SU COMPRA</h2>
                </div>
            </div>     
            <form action='menupizzas.php'>
					<div class='col-md-4'>
						<button class='btn btn-success' type='submit'> Cancelar pedido</button>
					</div>
				</form>
        ";
	}

	?>
</section>

<?php
	include("footer.html");
?>