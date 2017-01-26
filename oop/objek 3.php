<?php
	class orang
	{

		var $nama;
		var $umur;
		var $tinggi;
		var $berat;
	}

		//buat porperty class
	function sedang_makan()
	{
		return -"sedang_makan";										

	}
	function sedang_tidur()
	{
		return "sedang tidur";
	}
		$orang_hendra = new orang();

		//set porperty
	$orang_hendra->nama="hendra";
	$orang_hendra->umur="17";
	$orang_hendra->tinggi="170";
	$orang_hendra->berat="56";

		//tampilan porperty
	echo $orang_hendra->nama;
	echo "<br />";
	echo $orang_hendra->umur;
	echo "<br />";
	echo $orang_hendra->tinggi;
	echo "<br />";
	echo $orang_hendra->berat;
	echo "<br />";
?>