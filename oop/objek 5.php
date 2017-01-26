<?php
	class motor{
	
	public $merk;
	public $warna;
	public $jumlah_roda;
	public $bahan_bakar;
	public $mesin;
	public $pemmilik;
	public $alamat;

	public function hidup ()
	{
		return 'sedang hidup';
	}
	public function mati ()
	{
		return 'sedang mati';
	}

 	}
	$motor =new motor;
		echo "<h1>motor";
		echo "<br />";

	$motor->merk="merk :honda cb 100 basic";
		echo $motor->merk;
		echo "<br />";

	$motor->warna="warna :merah ";
		echo $motor->warna;
		echo "<br />";

	$motor->jumlah_roda="jumlah_roda : 2";
		echo $motor->jumlah_roda;
		echo "<br />";

	$motor->bahan_bakar="bahan_bakar : Bensin";
		echo $motor->bahan_bakar;
		echo "<br />";

	$motor->mesin="mesin : Tiger revo";
		echo $motor->mesin;
		echo "<br />";

	$motor->pemilik="pemilik : Riko";
		echo $motor->pemilik;
		echo "<br />";

	$motor->alamat="alamat : jl sadewa no 6 ponorogo";
		echo $motor->alamat;
		echo "<br />"
?>	