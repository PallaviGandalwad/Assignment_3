<?php

	if(isset($_POST['uname']) && isset($_POST['pass']))
	{
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];

		$conn=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($conn,"assignment");
		$query=mysqli_query($conn,"SELECT * FROM logindata WHERE username='$uname' AND password='$pass'");
		$rows=mysqli_num_rows($query);

		if($rows == 1)
		{
			echo "Success";
//			exit('<font color="green">Login successful</font>');
		}
		else
		{
			echo "Failed";
//			exit('<font color="red">Login failed</font>');
		}
}

//		mysqli_close($conn);

?>
