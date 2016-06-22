<?php 
	echo "hi php";
	var_dump($_POST);
	var_dump($_GET);
	include 'product.php';
	include 'categories.php';
	$categs=new categories;
	$categories = $categs->searchByName($_GET['catName']);
	if(empty($categories)){
		echo true;
	}else{
		echo "duplicated";
	}
	$product = new Products;
	$prodct = $product->searchByName($_GET['product']);
	if(empty($prodct)){
		echo true;
	}else{
		echo "duplicated";
	}
 ?>