<div id="box">
	<div class="judul">
		Data kategori||<a href="?l=fkategori">Tambah Data</a>
	</div>
	<div class="isi">
		<div style="overflow-x:auto">
			<table width="80%">
				<tr>
					<th>id</th>
					<th>nama</th>
					<th>keterangan</th>
					<th>opsi</th>
				</tr>
				<?php
					include_once"lib/koneksi.php";
					$query=$db->prepare("select * from kategori");
					$query->execute();
					$data=$query->fetchAll();
					foreach ($data as $dkategori){
						?>
						<tr>
							<td><?=$dkategori['id']?></td>
							<td><?=$dkategori['nama']?></td>
							<td><?=$dkategori['keterangan']?></td>
							<td><a href="?p=feditkategori.id=<?=$dkategori['id']?>" >
								Edit</a>|<a href="?p=dkategori&id=$dkategori['id']">
								hapus</a></td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
	</div>
	
</div>