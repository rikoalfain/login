<div id="box">
	<div class="judul">Daftar Pelanggan</div>
	<div class="isi">
	
		<div style="overflow-x;auto">
		
			<table class="table table-bordered table-hover	">
				
				<thead>
					<th>ID</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Tlp</th>
					<th>Opsi</th>
					
				</thead>
					
				<?php
					include_once"../lib/koneksi.php";
					$query=$db->prepare("select * from pelanggan");
					$query->execute();
					$data=$query->fetchAll();
					foreach($data as $pelanggan){
				?>
							<tr>
								<td><?=$pelanggan['id']?></td>
								<td><?=$pelanggan['nama']?></td>
								<td><?=$pelanggan['alamat']?></td>
								<td><?=$pelanggan['telfon']?></td>
								<td><a href="?p=feditpelanggan&id=<?=$pelanggan['id']?>">Edit</a>|<a href="?p=pelanggan&id=$pelanggan['id']">Hapus</a	></td>
							</tr>
					<?php
					}
					?>
			</table>
		</div>
	</div>
</div>