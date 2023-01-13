 <?php
 $servername = "localhost";
 $username = "root";
 $password = "root123";
 $dbname = "bchain";

 $conn = mysqli_connect($servername,$username,$password,$dbname);
$doc = 1110;
$sql = "SELECT * FROM doctorsloginpage WHERE DOCTORID = '$doc'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
		$docid = $row["DOCTORID"];
		$docname = $row["DOCTORNAME"];
		$hospname = $row["HOSPITALNAME"];
		$hospid = $row["HOSPITALID"];
	}
}
#https://www.youtube.com/watch?v=ejN-oAw9vC0
?>