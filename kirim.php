<?php
error_reporting(0);
include "daftar.html";
session_start();
$nim = htmlentities($_POST['nim']);
$nama = htmlentities($_POST['nama']);
$email = htmlentities($_POST['email']);
$password = md5($_POST['password']);
$polaEmail = "^.+@.+\..+$";
if(!eregi($polaEmail, $email)) {
	echo("Masukkan alamat email yang valid, misal: alnobeta.risqi@gmail.com");
} 
	else if( !empty($password) && !empty($email)  && !empty($nim)) {
		include "dbConnect.php";
		$cekUname = mysql_fetch_array(mysql_query("SELECT nim FROM member WHERE nim='$nim'"));
		$cekEmail = mysql_fetch_array(mysql_query("SELECT email FROM member WHERE email='$email'"));
		if($cekUname){
		?>
			<script language="JavaScript">alert('USERNAME SUDAH TERPAKAI');
			document.location='daftar.html?page=daftar'</script>
			<?php
		}
		if($cekEmail){
		?>
			<script language="JavaScript">alert('EMAIL ANDA SUDAH ADA');
			document.location='daftar.html?page=daftar'</script>
			<?php
		}
		else{
		
			$hasil = mysql_query("INSERT INTO member(nim, email, password) VALUES('$nim','$email','$password')");
			if ($hasil){
				?>
				<script language="JavaScript">alert('ANDA BERHASIL DAFTAR');
				document.location='index.php?page=login'</script>
				<?php
			}
			else{ 
				echo "<p>kiriman gagal</p>";
				?>
				<script language="JavaScript">alert('DATA TIDAK BERHASIL DIKIRIM');
				document.location='daftar.html?page=daftar'</script>
				<?php
			}
		}
	}
else{ 
echo "Data yang akan dikirim tidak lengkap";}
?>


       