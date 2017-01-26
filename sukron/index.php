<html>	
	<head>
		<title>Web Decoration</title>
	</head>
	<link rel="stylesheet" href="style/tampilan.css" type="text/css">
	<meta charset="utf-8" content="width=device-width,intial-scale 1.0,user-scale b=0">
	<script src="../js/jquery-2.1.1.js"></script>
	<script src="../js/umum.js"></script>
	<body>
		<div id="header">
			<div class="tampil">
				<a href="#" id="">E<span>shop</span></a>
			</div>
		</div>
		<div id="contener">
			<div class="conten">
				<?php
					$p=isset($_GET['p'])?$_GET['p']:"dashboard";
					include"$p.php";
				?>
			</div>
			<div class="slidebar" align="center">
				<ul id="nav" align="center">
					<li>
						<a href="index.php" class="selected">Home</a>
					</li>
					<li class="barang">
						<a href="?p=dbarang">Barang</a>
					</li>
					<li class="kategori">
						<a href="?p=dkategori">Category</a>
					</li>
					<li class="member">
						<a href="?p=member">Member</a>
					</li>
					<li class="suplayer">
					<a href="?p=dsupplier">Suplayer</a>
					</li>
				</ul>
			</div>
		</div>
	</body>
</html>