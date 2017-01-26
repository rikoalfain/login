<?php
	include"../lib/koneksi.php";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$idkategori=isset($_GET['idkategori'])?$_GET['idkategori']:"";
	$harga=isset($_GET['harga'])?$_GET['harga']:"";
	$jumlah=isset($_GET['jumlah'])?$_GET['jumlah']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	$insertdate=date('y-m-d')
	if($btnsimpan)
	{
		$query=$db->prepare("insert into tbbarang values('','$nama','$idkategori','$harga','$jumlah')");
		$query->execute();
		echo"<script>alert('Data sudah disimpan');location.href='index.php?p=tbbarang'
		</script>";
	}
?>