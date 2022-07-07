<?php
	$conn = new mysqli('localhost', 'root', '', 'test');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	