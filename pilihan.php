<html>
<head>
	<title>Sistem Informasi Surat Online</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="960_12_col.css">
</head>
<body>
		<div class = "container_12">
    	<div class = "grid_12"></div>
    		<div class = "grid_1 pull_1">
    			<div class = "header">
					<img src="Filkom.png">	
				</div>
		</div>
	</div>
	
	<div class="message warning">
	<div class="inset">
	<div class="box2">
		<h1>Jenis Surat</h1>
		 <div class="alert-close"> </div> 			
	</div>
		<form>
			<li>
				<select name="menu">
					<option> -- Pilih Jenis Surat -- </option>
					<option value="1">Surat Tugas</option>
					<option value="2">Surat Peminjaman Inventaris</option>
				</select>
				<input type="button" onClick="myFunction()" value="GO">
				<?php
				function myFunction($value) {
				if ($value)
    			document.location.href = "formsurattugas.html";
				}
				?>

			</li>	
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