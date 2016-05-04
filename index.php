<?php session_start(); ?>
<html>
<head>
	<title>Sistem Informasi Surat Online</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="960_12_col.css">
	<script type="text/javascript">
    var counter = 5;
    function countDown()
    {
        if(counter>=0)
        {
            document.getElementById("timer").innerHTML = counter;
        }
        counter -= 1; 

        var counter2 = setTimeout("countDown()",1000);
        return;
    }
   </script>
<style>
#form_login{
background-image:url('../images/debut_light/debut_light.png');
margin-top:50px;
margin-left:400px;
padding:20px;
width:300px;
border:2px solid;
border-radius:10px; 
border-color:#dedede;
}
#warning {
background-image:url('../images/debut_light/debut_light.png');
color:red;

margin-top:50px;
margin-left:20px;
padding:20px;
width:700px;
border:2px solid;
border-radius:10px; 
border-color:red;
}
</style>
</head>
<body onload="countDown()">
	<?php
if (!file_exists('dbConnect.php')){
echo "<div id='warning' align='center'></h5>WARNING ! <br/>File : dbConnect.php tidak ditemukan, silahkan lakukan instalasi terlebih dahulu</h5><br/><img src='images/progress.gif'><br/>

<span id='timer'> detik </span></div>";
echo "<meta http-equiv=\"refresh\"content=\"5;install/install.php\">";
} else {
	include 'dbConnect.php';
}
?>
		<div class = "container_12">
    	<div class = "grid_12"></div>
    		<div class = "grid_1 pull_4">
    			<div class = "header">
					<img src="Filkom.png">	
				</div>
		</div>
	</div>
		<div class = "box1">
		<div class = "container_12">
    		<div class = "grid_12"></div>
				<div class = "grid_6 pull_1">
					<ul id="menu">
						<li><a href="adminlog.php">Admin</a></li>
						
	    			</ul>
	    		</div>
	 
		</div>
		
				
	
	</div>

	
	<div class="message warning">
	<div class="inset">
	<div class="box2">
		<h1>Login</h1>
		 <div class="alert-close"> </div> 			
	</div>
		<form action = "ceklogin.php" method = "POST">
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

			<button type="button" class="btn btn-info btn-lg" onclick="window.location = 'daftar.html';">Sign Up ? here</button>   
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