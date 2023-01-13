
<?php
 $vas = $_POST["id1"];
 echo  $vas ;
if ($vas == null) {
    echo "Null Value";
}else{
  $mysqli = new mysqli("localhost","root","root123","blok");
  if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
  }
  echo "Connected";

 $pid = $_POST["pid"];
 $did = $_POST["did"];

echo  $pid ;echo  $did ;
 $sql = "INSERT INTO consu (Pid,docid) VALUES ('$pid','$did');";
  mysqli_query($mysqli,$sql);
  echo "string";
}




?>
