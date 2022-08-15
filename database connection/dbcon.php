<?php
	$conn = new mysqli('localhost', 'root', '', 'test1');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	