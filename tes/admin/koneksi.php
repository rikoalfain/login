<?php
$server="localhost";
$user="root";
$pass="";
$dbname="sales";

mysql_connect($server,$user,$pass)or die("KONEKSI GAGAL");
mysql_select_db($dbname)or die("DATA BASE TIDAK DITEMUKAN");
?>