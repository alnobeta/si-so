<?php

include "dbConnect.php";
 $sql =
	'UPDATE surat_peminjaman_kelas
		set nama_pemohon = "'.$_POST['nama_pemohon'].'" ,
			nama_tempat = "'. $_POST['nama_perusahaan'].'",
			tujuan = "'.$_POST['keperluan'].'"
			tanggal = "'.$_POST['tanggal'].'"
	WHERE id_surat_peminjaman_kelas ='.$_POST['id_surat_peminjaman_kelas'] ;
 $result = mysql_query( $sql );

header("location:baca_rekap.php");
?>