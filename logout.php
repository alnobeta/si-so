<?php session_start();
	
	session_destroy();
	include "index.php";
?>
<script language="JavaScript">alert('ANDA BERHASIL LOG-OUT!');</script>