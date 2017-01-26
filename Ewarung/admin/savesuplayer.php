<?php
	include"../lib/koneksi.php";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$alamat=isset($_GET['alamat'])?$_GET['alamat']:"";
	$telepon=isset($_GET['telepon'])?$_GET['telepon']:"";
	$email=isset($_GET['email'])?$_GET['email']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if($btnsimpan)
	{
		$query=$db->prepare("insert into suplayer values('','$nama','$alamat','$telepon','$email')");
		$query->execute();
		echo "<script>alert('Data Sudah Tersimpan');location.href='index.php?p=suplayer'</script>";
	}
?>