
<html>
	<head>
		<title>onlineshoop</title>
		<link rel="stylesheet" href="../style/tampilan.css" type= "text/css">
		<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scala b=0"/>
		<script src="../js/jquery-2.1.1.js"></script>
		<script src="../js/umum.js"></script>
	</head>
	<body>
		<div id ="header">
			<div class="logo">
				<a href="">Richo septa alfian.<span>Com</span></a>
				</div>
			</div>
			<a class="mobile" href="">MENU</a>
			
			
		<div class="container">
			<div id ="sidebar">
			<ul id="nav">
				<li><a href="?p=dashboard" class="selected">Home</a></li>
				<li class="barang"><a href="?p=tbbarang">Barang</a></li>
				<li class="kategori"><a href="?p=dkategori">Kategori</a></li>
				<li class="member"><a href="?p=member">Member </a></li>
				<li class="sublayer"><a href="?p=sublayer">sublayer </a></li>
			</ul>
		</div>
		<div id ="content">
			<?php
				$p=isset($_GET['p'])?$_GET['p']:"dashboard";
					include("$p.php");
			
			?>
		</div>
		<div id="footer">
			@2016 copyright
		</div>
	</body>
</html>