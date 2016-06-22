<?php
	include 'product.php';
	include 'categories.php';
	$categories=new categories();
	$prodct=new Products();
	if (isset($_POST['choose'])) {
		if ($_POST['choose']=='add') {
			$prodct->name=$_POST['product'];
			$prodct->qty=$_POST['qty'];
			$prodct->sale=$_POST['sale'];
			$prodct->cat_id=$_POST['scat'];
			$prodct=$prodct->insert();
		}
		elseif ($_POST['choose']=='addCat') {
			$categories->name=$_POST['name'];
			var_dump($categories);
			$categories=$categories->insertCat();
			echo "done";
		}
		elseif ($_POST['choose']=='addSCat') {
			$categories->name=$_POST['sub'];
			$categories->parent=$_POST['cat'];
			var_dump($categories);
			$categories=$categories->insertSubCat();
			echo "done";
		}
	}


?>