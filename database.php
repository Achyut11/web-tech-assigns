
	<?php

	// important credentials 
	$server = "localhost";
	$user = "root";
	$password = "google";
	$dbname = "phpmysql";

	//using mysqli to connect to the local database
	$connection = mysqli_connect($server, $user, $password, $dbname);

	//check if the database connectivity is correct or not
	// if (!$connection) {
    //         echo "database connectivity error ";
	// } else
	// {
    //         echo "database succesfully connected";
	// }
	
	?>
	

