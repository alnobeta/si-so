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
				
				
	<div class = "box1">
		<div class = "container_12">
    		<div class = "grid_12"></div>
				<div class = "grid_6 pull_1">
					<ul id="menu">
						<li><a href="admin.php">Home</a></li>
						<li><a href="diagram.php">View Diagram</a></li>
						<li><a href="baca_rekap.php">Kelola Surat Keluar</a></li>
						
	    			</ul>
	    		</div>
	    		<div class = "grid_2 prefix_4">
					<ul id="menu">
						<li ><a href="logout.php">Sign Out</a></li>
					</ul>	   	   
				</div>
		</div>
	</div>

	<br>
	<center><h1>Sistem Infomasi Surat Online</h1></center>
	 <style type="text/css" rel="stylesheet">
            #tbl_tampil{
                border-bottom: 1px solid #232323;
                height:150px;
                width:500px;
                text-align: center;
                margin-left: 500px;
				margin-top: 80px;
            }
            #kpl tr{
                height: 40px;
                background:#00bfff;
                color:#fff;
            }
            
 
        </style>
<?php
		include "dbConnect.php";
		$sql = "SELECT id,nim,password,email FROM member";
		$result = mysql_query( $sql );
		
		if ($result) {
			echo '<table id="tbl_tampil" border="1" cellspacing ="4" cellpadding="2">';
			echo '<thead id = "kpl">';
			echo'<td>ID</td>';
			echo'<td>User</td>';
			echo'<td>password</td>';
			echo'<td>email</td>';
			echo'<td>Edit</td>';
			echo'<td>Delete</td>';
			echo '</thead>';
			while ($baris = mysql_fetch_array($result)){
			echo '<tr>';
				echo '<td>'.$baris['id'].'</td>';
				echo '<td>'.$baris['nim'].'</td>';
				echo '<td>'.$baris['password'].'</td>';
				echo '<td>'.$baris['email'].'</td>';  
				echo "<td>"."<a href='updt_user.php?id=$baris[id]'>"."<input type='submit' value='Edit'>"."</a>"."</td>";
				echo "<td>"."<a href='dlt_user.php?id=$baris[id]'onClick=\"return confirm('Apakah anda yakin menghapus data ini ?')\">"."<input type='submit' value='Delete'>"."</a>"."</td>";
			echo '</tr>';
			}
			echo '</table>';
		} else {
		echo "tidak dapat melakukan query."
		.mysql_error();
		}
?>

	

	<div class = "footer">
		<br>
		Copyright &copy; 2015 - Project Pemprogaman Web
	</div>

<div style="clear:both"></div>
</body>
</html>