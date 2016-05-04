<?php session_start(); ?>
<html>
<head>
	<title>Sistem Informasi Surat Online</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="960_12_col.css">
</head>
<body>
		<div class = "container_12">
    	<div class = "grid_12"></div>
    		<div class = "grid_1 pull_4">
    			<div class = "header">
					<img src="Filkom.png">	
				</div>
		</div>
	</div>
				
				
	<div class = "box1">
	</div>

	
	<div class="message warning">
	<div class="inset">
	<div class="box2">
		<h1>Login Admin</h1>
		 <div class="alert-close"> </div> 			
	</div>
		<form action = "admin.php" method = "POST">
			<li>
				<input type="text" name ="nim" placeholder = "NIM" required></a>
			</li>
			<li>
				<input type="Password" name ="password" placeholder = "password" required></a>
			</li>

			<div class="clear"> </div>
			<div class="submit">
				
				<input type="submit" onclick="myFunction()" value="Log in" ><br><br>
			</div>	

 
		</form>
		</div>					
	</div>
	</div>

	<div class = "footer">
		<br>
		Copyright &copy; 2015 - Project Pemprogaman Web
	</div>

<div style="clear:both"></div>
</body>
</html>