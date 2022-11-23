<?php

	$servername ="localhost";
	$username ="root";
	$password ="password";
	
	
	
	$conn = mysqli_connect($servername,$username$password);
	
	if(!$conn) {
		die("Connection failed . Error :". mysqli_connect_error());
	} else {
		echo "Connection done successfully."
	}
	
	
	$sql = "CREATE DATABASE myDb";
	
	if(mysqli_query($conn,$sql)){
		echo "Database created successfully.";
	} else {
		echo "Database create error". mysqli_error($conn);
	}
	
	



?>