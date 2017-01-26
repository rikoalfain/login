<?php
	class mobil
	{
		private $warna;
		private $merk;
		private $jumlah_roda;
		private $bahan_bakar;
	}

	function hidup_mesin()
	{
		return "hidup_mesin";
	}
	function mati_mesin()
	{
		return "mati_mesin";
	}
	$mobil_andik = new mobil();
	$mobil_andik->warna="merah";
	$mobil_andik->merk="avanza";
	$mobil_andik->jumlah_roda="4";
	$mobil_andik->bahan_bakar="Bensin";

	//tampilan porperty
	echo $mobil_andik->warna;
	echo "<br />";
	echo $mobil_andik->merk;
	echo "<br />";
	echo $mobil_andik->jumlah_roda;
	echo "<br />";
	echo $mobil_andik->Bensin;
	echo "<br />";
?>