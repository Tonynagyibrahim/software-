<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab01";
session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql="delete from user where ID =".$_SESSION['ID'];
$result=mysqli_query($conn,$sql);
if($result) {
	session_destroy();
	header("Location:index.php");
}
else {
	echo $sql;
}
		
?>