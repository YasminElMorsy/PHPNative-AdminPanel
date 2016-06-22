<?php
	include 'product.php';
	
	$product= new Products();
	//$product['id'] = $_POST['id'];
    $product['name'] =  $_POST['name'];
    $product['price'] =  $_POST['price'];
    $product['qty'] =  $_POST['qty'];
    $product['sale'] =  $_POST['sale'];

    echo "$product->insert()";
?>