<?php
	class hp{

	public $merk;
	public $warna;
	public $ukuran_layar;
	public $speck;

	function hidupkan_hp()
	{
		return "Hidupkan_hp";
	}
	function matikan_hp()
	{
		return "matikan_laptop";
	}
	}
	$hp_warna = new hp();
	
	$hp_warna->merk="samsung";
	$hp_warna->warna="hitam";
	$hp_warna->ukuran_layar="5 inchi";
	$hp_warna->speck="ram 1gb";

	echo $hp_warna->merk;
	echo "<br />";
	echo $hp_warna->warna;
	echo "<br />";
	echo $hp_warna->ukuran_layar;
	echo "<br />";
	echo $hp_warna->speck;
?>
