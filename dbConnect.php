<?php 
$host='ap-cdbr-azure-east-c.cloudapp.net'; 
$user='b94f219a139ff3'; 
$pass='dfe4215d'; 
$db='siso'; 
$con= mysql_connect($host,$user,$pass); 
if(!mysql_select_db($db,$con));?>
