<?php
	include"../lib/koneksi.php";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$idkategori=isset($_GET['idkategori'])?$_GET['idkategori']:"";
	$harga=isset($_GET['harga'])?$_GET['harga']:"";
	$jumlah=isset($_GET['jumlah'])?$_GET['jumlah']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	$insertdate=date('y-m-d');
	if($btnsimpan)
	{
		$query=$db->prepare("insert into barang values('','$nama','$idkategori','$jumlah','$harga','$insertdate','$gambar')");
		$query->execute();
		echo"<script>alert('Data sudah disimpan');location.href='index.php?p=barang'</script>";
	}
?>