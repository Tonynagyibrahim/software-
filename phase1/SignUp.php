<h1>SignUp</h1>
<form action="" method="post">
  First Name:<br>
  <input type="text" name="FName"><br>
  Last Name:<br>
  <input type="text" name="LName"><br>
  Email:<br>
  <input type="text" name="Email"><br>
  Password:<br>
  <input type="Password" name="Password"><br>
  Hobby:<br>
  <input type="text" name="Hobby"><br>
  <input type="submit" value="Submit" name="Submit">
  <input type="reset">

</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['Submit'])){ //check if form was submitted
	$Fname=$_POST["FName"];
	$Lname=$_POST["LName"];
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$Hobby=$_POST["Hobby"];
	$sql="insert into user(FirstName,LastName,Email,Password,Hobby) 
	values('$Fname','$Lname','$Email','$Password','$Hobby')";
	$result=mysqli_query($conn,$sql);
	if($result)	{
		header("Location:index.php");
	}
}
?>
