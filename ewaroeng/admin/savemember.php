<?php
	include"../lib/koneksi.php";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$alamat=isset($_GET['alamat'])?$_GET['alamat']:"";
	$telepon=isset($_GET['telepon'])?$_GET['telepon']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if ($btnsimpan)
	{
		$query=$db->prepare("insert into member values('','$nama','$alamat','$telepon')");
		$query->execute();
		echo"<script>alert('data sudah tersimpan');location.href='index.php?p=fmember'</script>";
	}
?>	