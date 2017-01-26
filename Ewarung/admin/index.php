	<html>
	<head>
		<title>Home</title>
			<link rel="stylesheet" type="text/css" href="../styles/tampilan.css" >
		<meta name="viewport"content="width=device-width,intial-scale:1.0,user-scale b=0"/>
		<script src="../js/jquery-2.1.1.js"></script>
		<script src="../js/umum.js"></script>
	</head>
	<body>
		<div id="header">
			<div class="logo">
				<a href="?p=profil">aremaonline</a>
			</div>																
		</div>
		<a href="#"class="mobile">Menu</a>
		
		<div id="container">
			<div class="sidebar">
				<ul id="nav">
					<li><a href="?p=dashboard" class="selected">Home</a></li>
					<li class="barang"><a href="?p=tbbarang">Barang</a></li>
					<li class="kategori"><a href="?p=dkategori">Kategori</a></li>
					<li class="member"><a href="?p=member">Member</a></li>
					<li class="supplier"><a href="?p=dsupplier">supplier</a></li>
				</ul>
			</div>
			<div class="content">
			<?php
				$p=isset($_GET['p'])?$_GET['p']:"dashboard";
					include"$p.php";
			?>
		</div>
	</body>
</html>