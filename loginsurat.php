<?php session_start(); ?>
<!DOCTYPE html>
	<head>
		<title>SI-SO | Login</title>

		</head>

<body>
	<form  action = "ceklogin.php"  method="POST">
			<p>NIM    			: </p>
			<input id="username" name="nim" type="text"/>
			<p>Password 			: </p>
			<input id="password" name="password" type="password"/>
					<input  type = "submit" value="Login">
			<p>Already account?</p>
			<a style = 'text-decoration:none' id ="accountB" href = "daftar.php">SignUp
					<!-- <button id = "accountB"></button> -->
					</a>
				</form>
</body>
