<?php
	include"../lib/koneksi.php";
	$id=isset($_GET['id'])?$_GET['id']:"";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$id_kategori=isset($_GET['id_kategori'])?$_GET['id_kategori']:"";
	$harga=isset($_GET['harga'])?$_GET['harga']:"";
	$jumlah=isset($_GET['jumlah'])?$_GET['jumlah']:"";
	$gambar=isset($_FILES['gambar'])?$_FILES['gambar']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if ($btnsimpan=="Disimpan")
	{
		$query=$db->prepare("update tbbarang SET nama='$nama',id_kategori='$id_kategori',harga='$harga',jumlah='$jumlah',gambar='$gambar' where id='$id'");
		$query->execute();
		echo"<script>alert('Sudah Disimpan');location.href='index.php?p=tbbarang'</script>";
	}
?>