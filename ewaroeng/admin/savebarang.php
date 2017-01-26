<?php
	include"../lib/koneksi.php";
	$id=isset($_POST['id'])?$_POST['id']:"";
	$nama=isset($_POST['nama'])?$_POST['nama']:"";
	$id_kategori=isset($_POST['id_kategori'])?$_POST['id_kategori']:"";
	$harga=isset($_POST['harga'])?$_POST['harga']:"";
	$jumlah=isset($_POST['jumlah'])?$_POST['jumlah']:"";
	$gambar=isset($_FILES['gambar'])?$_FILES['gambar']:"";
	$insertdate=date("Y-m-d");
	$btnsimpan=isset($_POST['btnsimpan'])?$_POST['btnsimpan']:"";
	if($btnsimpan)
	{
		if($gambar!="");
		{
			$tmp=date('ymdhi');
			$fname="gbr".$tmp."jpg";
			$move=move_uploaded_file($_FILES['gambar']['tmp_name'],'../images/'.$fname);
			if($move){
				$query=$db->prepare("update tbbarang values('$id','$nama','$id_kategori','$harga','$jumlah','$insertdate','','/images/$fname')");
			
		$query->Execute;
		echo"<script>alert('data sudah tersimpan');location.href='index.php?p=tbbarang'</script>";
		
	}
		}
	}
?>		