<div id="box">
<div class="judul">
	data barang||<a href="?p=fbarang">tambah data</a>
	</div>	
		<div class="isi">
		<div  style="overflow-x:auto">
			<table width="100%" align="center">
			<tr>
				<th>id</th>
				<th>nama</th>
				<th>id_kategori</th>
				<th>harga</th>
				<th>jumlah</th>
				<th>insertdate</th>
				<th>lastupdate</th>
				<th>gambar</th>
				<th>opsi</th>
			</tr>
				<?php
				include_once"../lib/koneksi.php";
				$query=$db->prepare("select * from tbbarang");
				$query->execute();
				$data=$query->fetchAll();
				foreach($data as $tbbarang){
					?>
					<tr>
						<td><?=$tbbarang['id']?></td>
						<td><?=$tbbarang['nama']?></td>
						<td><?=$tbbarang['id_kategori']?></td>
						<td><?=$tbbarang['harga']?></td>
						<td><?=$tbbarang['jumlah']?></td>
						<td><?=$tbbarang['insertdate']?></td>
						<td><?=$tbbarang['lastupdate']?></td>
						<td><img src="../<?=$tbbarang['gambar']?>"width="50" height="40"></img></td>
						<td>
							<a href="?p=feditbarang&id=<?=$tbbarang['id']?>">Edit</a>
							<a href="?p=tbbarang&id=$tbbarang['id']">hapus</a>
						</td>
					</tr>
						<?php
						
						
				}
				?>
			</table>
			</div>
	</div>
</div>			