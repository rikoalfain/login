<html>	
	<head>
		<title>Angkringan online</title>
		<link rel="stylesheet" type="text/css" href="styles/format.css">
		<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="js/slide.js"></script>
	
	</head>
<body onload="slide()">	

	<div id="menuatas">
		<div class="batas">
			<h2>Angkringan Online</h2>
			<ul id="itemmenu">
				<li><a href="#">Member baru</a></li>
				<li><a href="#">login</a></li>
				<li><a href="#">Status </a></li>
			</ul>
		</div>
	</div>
	<div id="menuatas1">
		<div class="batas">
		
		</div>
		</div>
		<div id="slide">
		<div id="img" style ="transfrom :translate X (0%)">
			<img  src="images/1.jpg">
			<img  src="images/2.jpg">
			<img  src="images/3.jpg">
			<img  src="images/446.jpg">
		</div>	
		</div>
		<input type="hidden" name="ke" value="0" id="ke" value="0">
		<div class="batas">
			<div id="kat">	
			<h3>kategori</h3>
			<h4><a href= "?p=barang">semua</h4>
			<ul>
			<?php
				include"lib/koneksi.php";
				$query=$db->prepare("select * from tbkategori");
				$query->execute();
				$data=$query->fetchAll();
				foreach ($data as $dkategori){
					?>
					<li><a href="?p=kat&id=<?=$dkategori['id']?>"<?=$dkategori['nama']?></a></li>
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
			<h2>Barang terebaru</h2>
			<?php
				include "lib/koneksi.php";
				$query=$db->prepare("select * from tbbarang orde by insertdate desc limit 0,4");
				$query->execute();
				$data=$query->fetchAll();
				foreach ($data as $dbarang){
			?>
			<div id="barang">

				<a href="?p=detailbarang&id=<?=$dbarang['id']?>">
				<img src="<?=$dbarang ['gambar']?>"width="100px" height="100px">
				</a>
				<input type="submit" class="button" name="beli" value="beli">
				<input type="submit" class="button" name="detail" value="detail">
				<?php
					if(isset($_POST['action'])){
						switch ($_POST['action']){
							case 'beli';
								beli();
								break;
							case 'detail';
								detail();
								break ;
						}

					}
					function detail(){
					echo "untuk melihat detail";
					exit;
					}
					function beli(){
					echo "untuk melihat pembeli";
					exit;
					}
				?>
		</div>
		</div>
			<div class="footer"></div>
			
		</div>	
	</body>
</html>