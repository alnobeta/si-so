<html>
<title>Instalasi Sistem</title>
<script type="text/javascript">
    var counter = 5;
    function countDown()
    {
        if(counter>=0)
        {
            document.getElementById("timer").innerHTML = counter;
        }
        counter -= 1; 

        var counter2 = setTimeout("countDown()",1000);
        return;
    }
   </script>
<style>
#form_login{
background-image:url('../images/debut_light/debut_light.png');
margin-top:50px;
margin-left:400px;
padding:20px;
width:300px;
border:2px solid;
border-radius:10px; 
border-color:#dedede;
}
</style>
<body onload="countDown()">
<div id="form_login" align="center">
<?php 
//membuat koneksi ke mysql
$connect=mysql_connect($_POST['host'],$_POST['user'],$_POST['pass'])or die (mysql_error());
echo "....terkoneksi ke server mysql<br/>";

//membuat database
$buat_db=mysql_query("create database ".$_POST['db']."") or die (mysql_error());
echo "....berhasil membuat database<br/>";

//membuka database yang telah dibuat
$db=mysql_select_db($_POST['db'])or die (mysql_error());
echo "....database ditemukan<br/>";

//membuat table user dengan user standar
$buat_tbl_user =mysql_query("create table member(id int(11) auto_increment primary key not null, nim varchar(20) not null, email varchar(60) not null,password varchar (40) not null)")or die (mysql_error());
echo "....berhasil membuat table member<br/>";

//membuat table surat_peminjaman
$buat_tbl_surat_peminjaman =mysql_query("create table surat_peminjaman_kelas (id_surat_peminjaman_kelas int(11) auto_increment primary key NOT NULL, nama_pemohon varchar(50)  NULL, tujuan varchar(50)  NULL,tanggal date  NULL,nama_tempat varchar(50)  NULL)")or die (mysql_error());
echo "berhasil membuat table surat_peminjaman<br/>";

//membuat table surat_tugas
$buat_tbl_surat_tugas =mysql_query("create table surat_tugas (id_surat_tugas int(11) auto_increment primary key NOT NULL, nama_pemohon varchar(50)  NULL, tujuan varchar(50)  NULL,tanggal date NULL,nama_perusahaan varchar(50) NULL)")or die (mysql_error());
echo "berhasil membuat table surat_tugas<br/>";

//memasukan satu user standar
$tambah_user =mysql_query("insert into member values ('1','admin','admin@gmail.com',md5('surat'))") or die (mysql_error());
echo "....berhasil mengisi user ke dalam member<br/>";

//membuat file dbConnect.php

$file_config = fopen('../dbConnect.php', 'w+');
fwrite($file_config, "<?php \r\n");
fwrite($file_config, "\$host='".$_POST['host']."'; \r\n");
fwrite($file_config, "\$user='".$_POST['user']."'; \r\n");
fwrite($file_config, "\$pass='".$_POST['pass']."'; \r\n");
fwrite($file_config, "\$db='".$_POST['db']."'; \r\n");
fwrite($file_config, "\$con= mysql_connect('".$_POST['host']."','".$_POST['user']."','".$_POST['pass']."'); \r\n");
fwrite($file_config, "if(!mysql_select_db('".$_POST['db']."',\$con));");
fwrite($file_config, "?>");
fclose($file_config);

//memindahkan ke index.php
echo "<h3>Berhasil membuat file dbConnect.php, silahkan hapus folder instal</h3>
<br/><img src=\"../images/progress.gif\"><br/>
<span id=\"timer\"> detik </span>
<meta http-equiv=\"refresh\" content=\"10;../index.php\">";
?>
</div>
</body>
</html>