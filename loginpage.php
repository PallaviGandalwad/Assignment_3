<?php

	$user = $_POST['user'];
	$password = $_POST['password'];



	$con = mysqli_connect("localhost","root" ,"","assignment");
	$query = mysqli_query($con, "SELECT 'id' FROM 'users' WHERE 'uname'= '$user'" );
	 
		
	 

	//$num = mysqli_num_rows($query);

	if(!$user & !$password)
	{
		echo "All Fields required.";
	}
	else
	 	if(!$user)
	 	{
	 		echo "Enter a username";
	 	}
	 	 
	 		else
	 		if(!$password)
	 		{
	 			echo "Enter a password";
	 		}
	 		else
	 		{
	 			echo "Success!";
	 			exit('<font color="green">Login successful</font>');
	 		}

?>