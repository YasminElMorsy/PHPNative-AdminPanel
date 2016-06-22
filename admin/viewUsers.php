<?php
	include 'user.php';
	
	$user= new User();
	$array=$user->selectAllUsers();

	// echo "<div class='col-md-6'>";
	// echo " <div class='panel panel-default'>
 //                <div class='panel-heading'>
 //                    Users Data:
 //                </div>";
	// echo "<table class='table table-hover table-bordered'>";
	// 	echo "<tr>";
	// 		echo "<th>&nbsp ID &nbsp</th>";
	// 		echo "<th>&nbsp Name &nbsp</th>";
	// 		echo "<th>&nbsp Email &nbsp</th>";
	// 		echo "<th>&nbsp Credit &nbsp</th>";
	// 		echo "<th>&nbsp Address &nbsp</th>";
	// 		echo "<th>&nbsp Birthdate &nbsp</th>";
	// 		echo "<th>&nbsp Job &nbsp</th>";
	// 		echo "<th>&nbsp Interests &nbsp</th>";
	// 	echo "</tr>";

		
		foreach ($array as $key => $user) {
            if($user['id'] == 1) {
                echo '<tr>';
            } 
            else 
            {
                echo '<tr>';
            }
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['credit']."</td>";
            echo "<td>".$user['address']."</td>";
            echo "<td>".$user['birthdate']."</td>";
            echo "<td>".$user['job']."</td>";
            echo "<td>".$user['interests']."</td>";
    }
	echo " </tbody></table></div></div>";
?>   