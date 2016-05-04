<?php
include "dbConnect.php";

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
		$sql_2 = "SELECT id_surat_peminjaman_kelas,nama_pemohon,tujuan,tanggal,nama_tempat FROM surat_peminjaman_kelas
		where id_surat_peminjaman_kelas=$_GET[id_surat_peminjaman_kelas]";
		$result_2 = mysql_query( $sql_2 );
		$baris2 = mysql_fetch_array($result_2);
		echo '<form action="proses_updt_peminjaman.php" method="post">
			Nama : <input type = "text" name="nama_pemohon" value="'.$baris2['nama_pemohon'].'"><br>
			Fasilitas Dipinjam : <input type = "text" name="nama_perusahaan" value="'.$baris2['nama_tempat'].'"><br>
			Jumlah :<input type = "text" name="keperluan" value="'.$baris2['tujuan'].'"><br>
			TanggalPeminjaman :<input type = "text" name="tanggal" value="'.$baris2['tanggal'].'"><br>
			<input name= "id_surat_peminjaman_kelas" type= "hidden" value="'.$baris2['id_surat_peminjaman_kelas'].'">
			<br>
			<input type="submit" value="Update">
		</form>';
?>