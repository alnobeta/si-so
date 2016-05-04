<?php 

error_reporting(0);
session_start();
if(isset($_POST['nim'])){
		include "dbConnect.php";

		$nim = htmlentities($_POST['nim']);
		$password = md5($_POST['password']);
		$sql = mysql_query("SELECT * FROM member where nim ='$nim' AND password='$password'");
		$record = mysql_fetch_array($sql);
		$ada = mysql_num_rows($sql);
		if($ada>0)
		{	
			$_SESSION['nim']= $nim;
	
			include "index.php";
			?>
			
			<script language="JavaScript">
			document.location='pilihan.html?page=Login'</script><?php
		}
		else
		{
		
			include "index.html";
			unset($_POST['nim']);
			?><script language="JavaScript">alert('Username atau Password yang anda masukkan tidak sesuai, silahkan ulangi lagi!');
			document.location='index.php?page=Gagal'</script><?php
		}
}else{
	unset($_POST['nim']);
	include "index.php";
	?><?php
}
?>