<?php
	include"../lib/koneksi.php";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$Alamat=isset($_GET['Alamat'])?$_GET['Alamat']:"";
	$Telepon=isset($_GET['Telepon'])?$_GET['Telepon']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if($btnsimpan)
	{
		$query=$db->prepare("insert into sublayer values('','$nama','$Alamat','$Telepon')");
		$query->execute();
		echo"<script>alert('data sudah tersimpan');location.href='index.php?p=fsublayer'</script>";
	}
?>	