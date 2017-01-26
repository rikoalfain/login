<?php
$server ="localhost";
$username ="root";
$password = "password";
$database = "db_latihan";
$koneksi = mysql_connect($server,$username,$password) or die ('koneksi gagal');
if($koneksi){
	mysql_select _db($database) or die ('Database blum di buat');
}
?>