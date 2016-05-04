<?php 
include "dbConnect.php";
 $sql ="DELETE FROM surat_tugas
		WHERE id_surat_tugas=$_GET[id_surat_tugas]" ;
 $result = mysql_query( $sql );

header("location:baca_rekap.php");
?>