<html>
<body>
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
</body>
</html>
<?php
include "dbConnect.php";
		
		$sql = "SELECT id,nim,password,email  FROM member";
		$result = mysql_query( $sql );
			if ($result) {
			echo '<table id="tbl_tampil" border="1" cellspacing ="4" cellpadding="2">';
			echo '<thead id = "kpl">';
			echo'<td>ID</td>';
			echo'<td>User</td>';
			echo'<td>password</td>';
			echo'<td>email</td>';
			echo '</thead>';
			while ($baris = mysql_fetch_array($result)){
			echo '<tr>';
				echo '<td>'.$baris['id'].'</td>';
				echo '<td>'.$baris['nim'].'</td>';
				echo '<td>'.$baris['password'].'</td>';
				echo '<td>'.$baris['email'].'</td>';  
			echo '</tr>';
			}
			echo '</table>';
		} else {
		echo "tidak dapat melakukan query."
		.mysql_error();
		}
		
		echo '<br>';
		echo 'Isi kolom form yang ingin anda update ';
		echo '<br>';
		$sql_2 = "SELECT id,nim,password,email  FROM member
		where id=$_GET[id]";
		$result_2 = mysql_query( $sql_2 );
		$baris2 = mysql_fetch_array($result_2);
		echo '<form  action="proses_updt_user.php" method="post">
			Nim : <input type = "text" name="nama_pemohon" value="'.$baris2['nim'].'"><br>
			password : <input type = "text" name="nama_perusahaan" value="'.$baris2['password'].'"><br>
			email : <br>
			<input type = "text" name="keperluan" value="'.$baris2['email'].'"><br>
			<input name= "id_surat_tugas" type= "hidden" value="'.$baris2['id'].'">
			<br>
			<input type="submit" value="Update">
		</form>';
?>