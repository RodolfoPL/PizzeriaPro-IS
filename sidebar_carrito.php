<div class="sidebar col">
    <div class="row justify-content-center">
    	<div class="col">
    		<i class="material-icons">shopping_cart</i>
    	</div>
    	<div class="col-md-4">
    		<p>Carrito</p>
    	</div>
    </div>
    
    <!-- Elementos -->
<?php

    //session_start();
    if(!empty($_SESSION['shoppingCart'])){
        $total = 0;
        $cant_total=0;
        
        foreach ($_SESSION['shoppingCart'] as $key => $product) {
            $precio_ind = $product['quantity']*$product['price'];
            $cant_total = $product['quantity'] + $cant_total;
            echo"
                <div class='row justify-content-center' id='elemento'>
                    <div class='col'>
                        <a href='menupizzas.php?action=delete&id=".$product['id']."'>
                            <div type='button' class='btn btn-outline-danger'><i class='material-icons'>delete</i>
                            </div></a>
                    </div>
                    <div class='col'>

                        <p>".$product['name']." Subtotal: $".number_format($precio_ind,2)."</p>
                    </div>
                </div> <hr>";
            $total = $total+$precio_ind;
        }

        echo"
            <div class='row justify-content-center'>
                <div class='col'>
                    <h2>TOTAL: $".number_format($total,2)."</h2>
                </div>
            </div>
            <div class='row justify-content-center'>
                <div class='col'>
                  ";

        if($cant_total > 20){
            echo "<script type='text/javascript'>alert('El campo Cantidad no tiene que exceder de 20');</script>
            <input id='comprar' type='submit' class='btn btn-success' value='COMPRAR'disabled/>";
        }else{
            echo"
                        <a href='InfoPago.php'><input id='comprar' type='submit' class='btn btn-success' value='COMPRAR'/></a>";
        }
          echo"
                   
                </div>
                <div class='col'>
                    <form action='carrito.php'>
                        <input  type='submit' class='btn btn-info' value ='VER CARRITO'/>
                    </form>
                </div>
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
        ";
    }
    
        /*
        */
    ?>
</div>

