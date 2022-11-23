 <?php
 
	/* get the data from form and store in a local variable / using the name value pair concept */
	
	
	$username = $_POST["username"];
	$password = $_POST["password"];
 
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
	
	echo "<br>";
	echo "Username : ".$username;
	
	echo "<br>";
	echo "Password : ".$password;
	
?>	