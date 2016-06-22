<?php
	include 'categories.php';
	include 'product.php';
	$categories= new categories();
	$product= new Products();
	//$array=$categories->categories();
	$array=$product->serchById($_GET['x']);
		foreach ($array as $key => $product) {
            
           
            echo "<td>".$product['name']."</td>";
            echo "<td>".$product['price']."</td>";
            echo "<td>".$product['qty']."</td>";
            echo "<td>".$product['sale']."</td>";
        	echo "<td><a href=''>"."Edit"."</a></td>";
        	echo "<td><a href=''>"."Save"."</a></td>";
        	echo "<td><a href=''>"."Delete"."</a></td>";
    }
	echo " </tbody></table></div></div>";
	header("Location: cat_home.php");
?>   