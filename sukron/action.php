<?php
	include "koneksi.php";
	$tampilkan_isi = "select * from tb_";
	$tampilkan_isi_sql = mysql_query($tampilkan_isi);
	while ($isi = mysql_fetch_array($tampilkan_isi_sql))
	{
	$no = $isi[''];
	$nama = $isi[''];
	$jeniskelamin = $isi[''];
	$tanggallahir = $isi[''];
	$alamat = $isi[''];
	echo ;
?>