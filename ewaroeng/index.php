<html>
<head>
	<title>Angkringan Online</title>
	<link rel="stylesheet" type="text/css" href="styles/format.css">
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/slide.js"></script>
	
</head>
<body onload="slide()">

	<div id="menuatas">
		<div class="batas">
			<h2>Angringan Online</h2>
			<ul id="itemmenu">
				<li><a href="#">Member baru</a></li>
				<li><a href="#">login</a></li>
				<li><a href="#">Status Belanja</a></li>
			</ul>
		</div>
	</div>
	<div id="menuatas1">
		<div class="batas">
		
		</div>
		</div>
		<div id="slide">
		<div id="img" style ="transfrom :translateX(0%);">
			<img  src="images/rotibakar.jpg">
			<img  src="images/2.jpg">
			<img  src="images/3.jpg">
			<img  src="images/4.jpg">
		</div>	
		</div>
		<input type="hidden" name="ke" value="0" id="ke" value="0">
		</div>
		<div class="batas">
			<div id="kat">	
			<h3>kategori</h3>
			<h4><a href= "?p=barang">semua</a></h4>
			<ul>
			<?php
				include"lib/koneksi.php";
				$query=$db->prepare("select * from tbkategori");
				$query->execute();
				$data=$query->fetchAll();
				foreach ($data as $dkategori){
					?>
					<li><a href="?p=kat&id=<?=$dkategori['id']?>"><?=$dkategori['nama']?></a></li>
					<?php
				}
			?>
			</ul>
			<h3>produsen</h3>
			<h4><a href="#">semua</h4>
		</div>
		
		</div>
		<div class="batas">
			<div id="isi">
			<h2>barang ter baru</h2>
			<?php
				include "lib/koneksi.php";
				$query=$db->prepare("select * from tbbarang order by insertdate desc limit 0,4" );
				$query->execute();
				$data=$query->fetchAll();
				foreach ($data as $dbarang){
					?>
			<div id="barang">
				<a href="?p=detailbarang&id=<?=$dbarang['id']?>">
				<img src="<?=$dbarang['gambar']?>"width="80px" height="100px">
				<img  src="images/5.jpg">
				<img src="images/6.jpg">
				</a>
				</div>
				<?php
				}
				?>
			</div>
		</div>
			<div class="footer">
			
		</div>	
	</body>
</html>
