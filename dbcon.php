<?php
	
	$conn = mysqli_connect('127.0.0.1','root','','project');

	if ($conn == false) 
	{
		echo "Database connection failed";
	}
?>