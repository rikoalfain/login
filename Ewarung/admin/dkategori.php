<div id="box"> 
	<div class="judulb">
		Data kategori||  ***  ||<a href="?p=fkategori">Tambah Data</a>
	</div>
	<div class="isib">
		<div style="overflow-x:auto">
			<table>
				<tr>
					<th>id</th>
					<th>nama</th>
					<th>keterangan</th>
					<th>opsi</th>
				</tr>
				<?php
					include_once"../lib/koneksi.php";
					$query=$db->prepare("select * from tbkategori");
					$query->execute();
					$data=$query->fetchAll();
					foreach ($data as $dkategori){
						?>
						<tr>
							<td><?=$dkategori['id']?></td>
							<td><?=$dkategori['nama']?></td>
							<td><?=$dkategori['keterangan']?></td>
							<td><a href="?p=dkategori&aksi=hapus&id=<?=$dkategori['id']?>">edit</a>| <a href="?p=dkategori&aksi=hapus&id=<?=$dkategori['id']?>">hapus</a></td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
	</div>
	
</div>  