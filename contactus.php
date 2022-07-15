<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="test1";

	

	$conn =mysqli_connect($server_name,$username,$password,$database_name)
	;

	if(!$conn)
	{
		die("Connection Failed : ". mysqli_connect_error());
	} 

	if(isset($_POST['submit']))
	{
		$sname = $_POST['sname'];
		$semail = $_POST['semail'];
		$message = $_POST['message'];
		

		$sql_query = "INSERT INTO message(sname,semail,message) VALUES('$sname','$semail','$message')";

		if (mysqli_query($conn,$sql_query))
		{
			echo "We will contact you soon.";
		}
		else
		{
			echo "Error: " . $sql . "" . mysqli_error($conn);
		}
		
		mysqli_close($conn);

	}

?>