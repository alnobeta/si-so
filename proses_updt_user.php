<?php

include "dbConnect.php";
 $sql =
	'UPDATE member
		set nim = "'.$_POST['nama_pemohon'].'" ,
			password = "'. $_POST['nama_perusahaan'].'",
			email = "'.$_POST['keperluan'].'"
	WHERE id ='.$_POST['id_surat_tugas'] ;
 $result = mysql_query( $sql );

header("location:admin.php");
?>