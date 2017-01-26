<div id="box">
	<div class="judulb">
			Data Barang|| *** ||<a href="?p=fbarang">Tambah Data</a>
	</div>
	<div class="isib">
		<div style="overflow-x:auto">
			<table>
				<tr>
					<th>id</th>
					<th>nama</th>
					<th>id_kategori</th>
					<th>harga</th>
					<th>jumlah</th>
					<th>insertdate</th>
					<td>lastupdate</td>
					<td>gambar</td>
					<th>opsi</th>
				</tr>
				<?php
					include_once"../lib/koneksi.php";
					$query=$db->prepare("select * from tbbarang");
					$query->execute();
					$data=$query->fetchAll();
					foreach ($data as $tbbarang){
						?> 
						<tr>
							<td><?=$tbbarang['id']?></td>
							<td><?=$tbbarang['nama']?></td>
							<td><?=$tbbarang['id_kategori']?></td>
							<td><?=$tbbarang['harga']?></td>
							<td><?=$tbbarang['jumlah']?></td>
							<td><?=$tbbarang['insertdate']?></td>
							<td><?=$tbbarang['lastupdate']?></td>
							<td><img src="../<?=$tbbarang['gambar']?>" width="50" height="50"</td>
							<td><a href="?p=feditbarang&id=<?=$tbbarang['id']?>">
								Edit</a>|<a href="?p=tbbarang&id=$tbbarang['id']">
								hapus</a></td>
						</tr>
						<?php

					}
				?>
			</table>
		</div>
	</div>
</div>
                        

                        |
                              