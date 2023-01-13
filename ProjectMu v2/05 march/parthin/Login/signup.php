<?php
	  $mysqli = new mysqli("localhost","root","root123","bchain");
  if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
  }
  echo "Connected";


  $email = $_POST['fmail'];
  $pass = $_POST['fpass'];

  $sql = "INSERT INTO auth (Pass,Email) VALUES ('$pass','$email');";
  mysqli_query($mysqli,$sql);

  header("Location: index.php");
?>
