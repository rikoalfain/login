<div id="box">
	<div class="judul">
			Data Barang||<a href="?p=fbarang">Tambah Data</a>
	</div>
	<div class="isi">
		<div style="overflow-x:auto">
			<table>
				<tr>
					<th>id</th>
					<th>nama</th>
					<th>id kategori</th>
					<th>harga</th>
					<th>jumlah</th>
					<th>insertdate</th>
					<th>lastdate</th>
					<th>opsi</th>
				</tr>
				<?php
					include_once"lib/koneksi.php";
					$query=$db->prepare("select * from barang");
					$query->execute();
					$data=$query->fetchAll();
					foreach ($data as $barang){
						?> 
				<tr>
					<td><?=$barang['id']?></td>
					<td><?=$barang['nama']?></td>
					<td><?=$barang['id_kategori']?></td>
					<td><?=$barang['harga']?></td>
					<td><?=$barang['jumlah']?></td>
					<td><?=$barang['insertdate']?></td>
					<td><?=$barang['lastupdate']?></td>
					<td>
						<a href="?p=edittbbarang&id=<?=$tbbarang['id']?>">Edit</a> |
						<a href=?p=tbbarang&id=$tbbarang['id']">hapus</a>
						</td>
				</tr>
				<?php
				}
			?>
			</table>
		</div>
	</div>
</div>


