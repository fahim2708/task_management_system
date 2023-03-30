<?php
	$conn = mysqli_connect('localhost', 'root', '', 'uploaded_file');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>