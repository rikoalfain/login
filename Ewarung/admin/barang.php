<div id="box">
	<div class="judul">Daftar Barang||<a href="?p=fbarang">Tambah Data</a></div>
	<div class="isi">
	
		<div style="overflow-x;auto">
			<form method="get" action="savebarang.php">
			<table class="table table-bordered table-hover	">
				
				<thead>
					<th>ID</th>
					<th>Nama</th>
					<th>ID Kategori</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Insert Date</th>
					<th>Last Update</th>
					<th>Opsi</th>
				</thead>
					
				<?php
					include "../lib/koneksi.php";
					$query=$db->prepare("select * from tbbarang");
					$query->execute();
					$data=$query->fetchAll();
					foreach($data as $barang){
				?>
							<tr>
								<td><?=$barang['id']?></td>
								<td><?=$barang['nama']?></td>
								<td><?=$barang['id_kategori']?></td>
								<td><?=$barang['harga']?></td>
								<td><?=$barang['jumlah']?></td>
								<td><?=$barang['insertdate']?></td>
								<td><?=$barang['lastupdate']?></td>	
								<td><a href="?p=feditbarang&id=<?=$barang['id']?>">Edit</a>|<a href="?p=barang&id=$barang['id']">Hapus</a	></td>
							</tr>
					<?php
					}
					?>
			</table>
		</form>
		</div>
	</div>
</div>