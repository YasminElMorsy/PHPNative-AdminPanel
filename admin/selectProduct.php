<?php
	include 'product.php';
	
	$product= new Products();
	$array=$product->selectAllProducts();

	echo "<div class='col-md-6'>";
	echo " <div class='panel panel-default'>
                <div class='panel-heading'>
                    Product Details :
                </div>";
	echo "<table class='table table-hover table-bordered'>";
		echo "<thead><tr>";
			echo "<th>&nbsp ID &nbsp</th>";
			echo "<th>&nbsp Name &nbsp</th>";
			echo "<th>&nbsp Price &nbsp</th>";
			echo "<th>&nbsp Quntity &nbsp</th>";
			echo "<th>&nbsp Sale &nbsp</th>";
		echo "</thead></tr>";

		foreach ($array as $key => $product) {
     
            echo "<td>".$product['id']."</td>";
            echo "<td>".$product['name']."</td>";
            echo "<td>".$product['price']."</td>";
            echo "<td>".$product['qty']."</td>";
            echo "<td>".$product['sale']."</td>";
    }
	echo " </tbody></table></div></div>";
?>   