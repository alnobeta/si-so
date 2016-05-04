<?php

include "dbConnect.php";
 $sql =
	'UPDATE surat_tugas
		set nama_pemohon = "'.$_POST['nama_pemohon'].'" ,
			nama_perusahaan = "'. $_POST['nama_perusahaan'].'",
			tujuan = "'.$_POST['keperluan'].'"
	WHERE id_surat_tugas ='.$_POST['id_surat_tugas'] ;
 $result = mysql_query( $sql );

header("location:baca_rekap.php");
?>