<?php
	include 'categories.php';
	$categs=new categories();
	$array = $categs->categories(NULL);
	echo "<table>";
	echo "<tr>";
	echo "<td>"."ID"."</td>";
    echo "<td>"."Name"."</td>";
    echo "</tr>";
	foreach ($array as $key => $categories) {
		echo "<tr>";
		echo "<td>".$categories['id']."</td>";
        echo "<td>".$categories['name']."</td>";
        echo "</tr>";
	}
	echo "</table>";
?>
