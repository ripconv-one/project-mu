<?php
 //Testing Connection
	$mysqli = new mysqli("localhost","root","root123","blok");
	if ($mysqli -> connect_errno) {
  	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  	exit();
	}
	echo "Connected";


?>

<!-- partial:index.partial.html -->
