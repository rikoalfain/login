<html>
	<head>
		<title>Web Decoration</title>
		<script src="js/jquery-2.2.3.js"/>
		<script src="js/umum.js"/>
		<meta name="viewport" content="width=device-width,initial-scale:1.0,user-scale b=0" />
	</head>
	<link rel="stylesheet" href="test/test.css" type="text/css">
	<body>
		<form method="get" action=".php" type="text/css">
			<div id="header">
				<div class="tampil">
					<a href="#">E<span>Comerce</span></a>
				</div>
			</div>
			<a href="#" class="mobile">menu</a>
			<div id="isi">
				<div class="slidebar" align="center">
					<ul id="nav" align="center">
						<li>
							<a href="dashboard.php">Home</a>
						</li>
						<li>
							<a href="#">Barang</a>
						</li>
						<li>
							<a href="#">Category</a>
						</li>
						<li>
							<a href="#">Member</a>
						</li>
					</ul>
				</div>
				<div class="conten">
					<?php
						$l=isset($_GET['l'])?$_GET['l']:"dashboard";
						include"$l.php";
					?>
				</div>
			</div>
		</form>
	</body>
</html>