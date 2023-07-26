<h1>Login</h1>
<form action="" method="post">
  Email:<br>
  <input type="text" name="Email">  <br>
  Password:<br>
  <input type="Password" name="Password"><br>
  <input type="submit" value="Submit" name="Submit">
    <input type="reset">


</form>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['Submit'])){ //check if form was submitted
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$sql="Select * from user where Email ='$Email' and Password='$Password'";
	$result = mysqli_query($conn,$sql);		
	if($row=mysqli_fetch_array($result))	{
		$_SESSION["ID"]=$row[0];
		$_SESSION["FName"]=$row["FirstName"];
		$_SESSION["LName"]=$row["LastName"];
		$_SESSION["Email"]=$row["Email"];
		$_SESSION["Password"]=$row["Password"];
		$_SESSION["Hobby"]=$row["Hobby"];
		header("Location:index.php");
	}
	else	{
		echo "Inalid Email or Password";
	}
}
?>
