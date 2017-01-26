<div id="box">
	<div class="judul">
	Data kategori ||<a href="?p=fkategori">tambah data</a>
	</div>
	<div class="isi">
		<div style="overflow-x:auto">
			<table width="90%">
				<tr>
					<th>id</th>
					<th>nama</th>
					<th>keterangan</th>
				</tr>
				<?php
					include_once"../lib/koneksi.php";
					$query=$db->prepare("select * from tbkategori");
					$query->execute();
					$data=$query->fetchAll();
					foreach($data as $dkategori){
						?>
						<tr align="center">
							<td><?=$dkategori['id']?></td>
							<td><?=$dkategori['nama']?></td>
							<td><?=$dkategori['keterangan']?></td>
							<td><a href="?p=feditkategori&id=<?=$dkategori['id']?>">
								Edit</a>|<a href="?p=dkategori$aksi=hapus$id=<?=$dkategori['id']?>">
									hapus</a></td>
						</tr>	
						<?php
					}
				?>
			</table>
		</div>
	</div>
</div>