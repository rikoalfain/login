<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"> 
 
<head profile="http://gmpg.org/xfn/11"> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
 
<title>Aplikasi Menghitung Selisih Waktu</title>
 
<style>
body{ background:#eee; font:12px Arial; }
h1{ color:#dd3380 }
form{ border:1px solid; width:300px; margin:10px; padding:15px 10px; text-align:left;
-moz-border-radius: 10px; -webkit-border-radius: 10px; border-radius: 10px; }
#rst{ color:#dd3380; font-size:16px; }
input{margin: 5px;}
</style>
 
<body>
 
	<center>
	<h1>Aplikasi Menghitung Selisih Waktu</h1>
	<form action="" method="post">
	inputkan tanggal dan jam (yyyy-mm-dd hh:ii:ss)<br /> <input type="text" name="dt" /><br />		
	<input type="submit" value="hitung" name="get" />
	</form>	
 
	<div id="rst">
		<?php echo timediff($_POST['dt']);?>
	</div>
 
	<?php
 
	function timediff($date)
	{
	    if(empty($date)) {
	        return "Tanggal tidak valid";
	    }
 
	    $periods         = array("detik", "menit", "jam", "hari", "minggu", "bulan", "tahun");
	    $lengths         = array("60","60","24","7","4.35","12","10");
 
	    $now             = time();
	    $unix_date       = strtotime($date);
 
	    if(empty($unix_date)) {   
	        return "Format tanggal salah";
	    }
 
	    if($now > $unix_date) {   
	        $difference     = $now - $unix_date;
	        $tense         = "yang lalu";
 
	    } else {
	        $difference     = $unix_date - $now;
	        $tense         = "dari sekarang";
	    }
 
	    for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
	        $difference /= $lengths[$j];
	    }
 
	    $difference = round($difference);
 
	    if($difference != 1) {
	        $periods[$j].= "";
	    }
 
	    return "$difference $periods[$j] {$tense}";
	}
 
	?>
 
</body>
</html>