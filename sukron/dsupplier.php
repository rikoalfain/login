<div id="box">
	<div class="judul">
		Data Supplier||<a href="?p=fsupplier">Tambah Data</a>
	</div>
	<div class="isi">
		<div style="overflow-x:auto">
			<table width="80%">
				<tr>
					<th>id</th>
					<th>nama</th>
					<th>alamat</th>
					<th>telepon</th>
					<th>gmail</th>
					<th>opsi</th>
				</tr>
				<?php
					include_once"lib/koneksi.php";
					$query=$db->prepare("select * from supplier");
					$query->execute();
					$data=$query->fetchAll();
					foreach($data as $dsupplier){
						?>
						<tr>
							<td><?=$dsupplier['id']?></td>
							<td><?=$dsupplier['nama']?></td>
							<td><?=$dsupplier['alamat']?></td>
							<td><?=$dsupplier['telepon']?></td>
							<td><?=$dsupplier['gmail']?></td>
							<td><a href="?p=feditsupplier&id=<?=$dsupplier['id']?>">
							edit</a>|<a href="?p=dsupplier&id=$dsupplier['id']">
							hapus</a></td>
						</tr>
						<?php
					}
				?>
			</table>
		</div>
	</div>
</div>