<?php 
include "dbConnect.php";
 $sql ="DELETE FROM surat_peminjaman_kelas
		WHERE id_surat_peminjaman_kelas=$_GET[id_surat_peminjaman_kelas]" ;
 $result = mysql_query( $sql );

header("location:baca_rekap.php");
?>