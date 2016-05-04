<?php
include "dbConnect.php";

		$sql = "SELECT id_surat_tugas, nama_pemohon,nama_perusahaan,tujuan,tanggal  FROM surat_tugas";
		$result = mysql_query( $sql );
			if ($result) {
			echo '<table border="1" cellspacing ="4" cellpadding="2">';
			echo '<thead>';
			echo'<td>ID</td>';
			echo'<td>nama pemohon</td>';
			echo'<td>nama perusahaan</td>';
			echo'<td>Keperluan</td>';
			echo'<td>tanggal</td>';
			echo '</thead>';
			while ($baris = mysql_fetch_array($result)){
			echo '<tr>';
				echo '<td>'.$baris['id_surat_tugas'].'</td>';
				echo '<td>'.$baris['nama_pemohon'].'</td>';
				echo '<td>'.$baris['nama_perusahaan'].'</td>';
				echo '<td>'.$baris['tujuan'].'</td>'; 
				echo '<td>'.$baris['tanggal'].'</td>'; 
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
		$sql_2 = "SELECT id_surat_tugas, nama_pemohon,nama_perusahaan,tujuan,tanggal  FROM surat_tugas
		where id_surat_tugas=$_GET[id_surat_tugas]";
		$result_2 = mysql_query( $sql_2 );
		$baris2 = mysql_fetch_array($result_2);
		echo '<form action="proses_updt.php" method="post">
			Nama_pemohon : <input type = "text" name="nama_pemohon" value="'.$baris2['nama_pemohon'].'"><br>
			Nama_perusahaan : <input type = "text" name="nama_perusahaan" value="'.$baris2['nama_perusahaan'].'"><br>
			tujuan : <br>
			<textarea name = "keperluan">'.$baris2['tujuan'].'</textarea> 
			<input name= "id_surat_tugas" type= "hidden" value="'.$baris2['id_surat_tugas'].'">
			<br>
			<input type="submit" value="Update">
		</form>';
?>