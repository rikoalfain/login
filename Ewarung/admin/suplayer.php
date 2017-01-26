<div id="box">
	<div class="judul">Suplayer||<a href="?p=tsuplayer">Tambah Data</a></div>
	<div class="isi">
		<div style="overflow-x: auto;">
			<table class="table">
				<thead>
					<th>ID</th>
					<th>PT</th>
					<th>Nomor induk PT</th>
					<th>Kurir</th>
					<th>Tanggal Masuk Barang</th>
					<th>Opsi</th>
				</thead>
			<?php
				include"../lib/koneksi.php";
				$query=$db->prepare("select * from suplier");
				$query->execute();
				$data=$query->fetchAll();
				foreach($data as $suplayer)
					{
			?>	
				<tr>
					<td><?=$suplayer['id']?></td>
					<td><?=$suplayer['pt']?></td>
					<td><?=$suplayer['nomorinduk']?></td>
					<td><?=$suplayer['kurir']?></td>
					<td><?=$suplayer['tanggalmasuk']?></td>
					<td><a href="?p=feditkategori&id=<?=$dkategori['id']?>">Edit</a>|<a href="?p=dkategori&id=$dkategori['id']">Hapus</a	></td>
				</tr>
			<?php
				}
			?>
			</table>
		</div>
	</div>
</div>