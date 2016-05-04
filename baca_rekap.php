<html>
<head>
	<title>Sistem Informasi Surat Online</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="960_12_col.css">
	<style type="text/css" rel="stylesheet">
            #kpl tr{
                height: 40px;
                background:#00bfff;
                color:#fff;
            }
            
 
        </style>
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
</body>
</html>
<?php
include "dbConnect.php";
		$sql = "SELECT id_surat_tugas, nama_pemohon,nama_perusahaan,tujuan,tanggal FROM surat_tugas";
		$result = mysql_query( $sql );
		if ($result) {
			echo "<br>";
			echo "Surat Tugas";
			echo '<table border="1" cellspacing ="4" cellpadding="2">';
			echo '<thead id = "kpl">';
			echo'<td>ID</td>';
			echo'<td>nama pemohon</td>';
			echo'<td>nama perusahaan</td>';
			echo'<td>Keperluan</td>';
			echo'<td>Tanggal pembuatan</td>';
			echo'<td>Edit</td>';
			echo'<td>Delete</td>';
			echo '</thead>';
			while ($baris = mysql_fetch_array($result)){
			echo '<tr>';
				echo '<td>'.$baris['id_surat_tugas'].'</td>';
				echo '<td>'.$baris['nama_pemohon'].'</td>';
				echo '<td>'.$baris['nama_perusahaan'].'</td>';
				echo '<td>'.$baris['tujuan'].'</td>'; 
				echo '<td>'.$baris['tanggal'].'</td>'; 
				echo "<td>"."<a href='update.php?id_surat_tugas=$baris[id_surat_tugas]'>"."<input type='submit' value='Edit'>"."</a>"."</td>";
				echo "<td>"."<a href='hapus.php?id_surat_tugas=$baris[id_surat_tugas]'onClick=\"return confirm('Apakah anda yakin menghapus data ini ?')\">"."<input type='submit' value='Delete'>"."</a>"."</td>";
			echo '</tr>';
			}
			echo '</table>';}
			else {
		echo "tidak dapat melakukan query."
		.mysql_error();
		}
		echo "<br>";
			$sql1 = "SELECT id_surat_peminjaman_kelas,nama_pemohon,tujuan,tanggal,nama_tempat FROM surat_peminjaman_kelas";
		$result1 = mysql_query( $sql1 );
		if ($result1) {
			echo "Surat Peminjaman";
			echo '<table border="1" cellspacing ="4" cellpadding="2">';
			echo '<thead id = "kpl">';
			echo'<td>ID</td>';
			echo'<td>nama pemohon</td>';
			echo'<td>Fasilitas Dipinjam</td>';
			echo'<td>Jumlah</td>';
			echo'<td>Tanggal Peminjaman</td>';
			echo'<td>Edit</td>';
			echo'<td>Delete</td>';
			echo '</thead>';
			while ($baris1 = mysql_fetch_array($result1)){
			echo '<tr>';
				echo '<td>'.$baris1['id_surat_peminjaman_kelas'].'</td>';
				echo '<td>'.$baris1['nama_pemohon'].'</td>';
				echo '<td>'.$baris1['nama_tempat'].'</td>';
				echo '<td>'.$baris1['tujuan'].'</td>'; 
				echo '<td>'.$baris1['tanggal'].'</td>'; 
				echo "<td>"."<a href='update_peminjaman.php?id_surat_peminjaman_kelas=$baris1[id_surat_peminjaman_kelas]'>"."<input type='submit' value='Edit'>"."</a>"."</td>";
				echo "<td>"."<a href='hapus_peminjaman.php?id_surat_peminjaman_kelas=$baris1[id_surat_peminjaman_kelas]'onClick=\"return confirm('Apakah anda yakin menghapus data ini ?')\">"."<input type='submit' value='Delete'>"."</a>"."</td>";
			echo '</tr>';
			}
			echo '</table>';
		} else {
		echo "tidak dapat melakukan query."
		.mysql_error();
		}
?>