
<?php
include("file.php");
?>

<!DOCTYPE>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="jscript.js"></script>

</head>
<body bgcolor="MediumPurple4">

		<div style="width: 20%; margin-top: 30px; margin-right: auto; margin-left: auto; background-color: white; padding: 20px; box-shadow: 10px 10px 8px #231010; font-family: Arial, Helvetica, sans-serif;">

			<center><h2><strong>Login Form</strong></h2></center><br>

				Username: <input type="text" name="uname" id="uname" class="uname"/> <br><br>
				Password: <input type="Password" name="pass" id="pass" class="pass"/><br><br>

				<center><input type="button" name="submit" id="submit" value="Login" style="background-color: #a8b7a9; color: white; font-size: 12pt; width: 80px; height: 40px;"></center>

				<center><span id="result"></span></center>

		</div>

</body>
</html>