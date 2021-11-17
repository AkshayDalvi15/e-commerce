<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "ecomm");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}

  




?>