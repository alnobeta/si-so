<?php 
include "dbConnect.php";
 $sql ="DELETE FROM member
		WHERE id=$_GET[id]" ;
 $result = mysql_query( $sql );

header("location:admin.php");
?>