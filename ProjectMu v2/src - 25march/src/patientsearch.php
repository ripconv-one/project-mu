<?php
include 'db.php';
$patientid = $_GET['pid'];

$query = "SELECT * FROM PatientDetails WHERE pid = '$patientid'";
$rs = mysqli_query($conn, $query);
if (mysqli_num_rows($rs)>0){
	while($row = mysqli_fetch_assoc($rs)){
		
		$name = $row['pname'];
		$age = $row['page'];
		$gender = $row['pgender'];
		$address = $row['paddress'];
		$phone = $row['pphone'];
						}


	   $data[] = array('name' =>$name , 'age' =>$age, 'gender' =>$gender,'address' =>$address,'phone' =>$phone);
	    echo json_encode($data);
	
}

?>