<?php
	include"../lib/koneksi.php";
	$id=isset($_GET['id'])?$_GET['id']:"";
	$nama=isset($_GET['nama'])?$_GET['nama']:"";
	$keterangan=isset($_GET['keterangan'])?$_GET['keterangan']:"";
	$btnsimpan=isset($_GET['btnsimpan'])?$_GET['btnsimpan']:"";
	if($btnsimpan=="Disimpan Mas")
	{
		$query=$db->prepare("update tbkategori SET nama='$nama', keterangan='$keterangan' where id='$id'");
		$query->execute();
		echo"<script>alert('data sudah dirubah');location.href='index.php?p=dkategori'</script>";
	}
?>	