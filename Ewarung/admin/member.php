<div id="box">
	<div class="judulb">
			Daftar Pelanggan||  ***  ||<a href="?p=fmember">Tambah Pelanggan</a>
	</div>
	<div class="isib";
		<div style="overflow-x:auto">
			<table>
				<tr>
					<th>id</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Telephone</th>
					<th>Opsi</th>
				</tr>
				<?php
					include_once"../lib/koneksi.php";
					$query=$db->prepare("select * from tbuser");
					$query->execute();
					$data=$query->fetchAll();
					foreach ($data as $member){
						?>
						<tr>
							<td><?=$member['id']?></td>
							<td><?=$member['nama']?></td>
							<td><?=$member['alamat']?></td>
							<td><?=$member['nmr_telfon']?></td>
							<td><a href="?p=editmember&id=<?=$member['id']?>">
								Edit</a>|<a href=?p=member&id=$member['id']">
								hapus</a></td>
						</tr>
						<?php

					}
				?>
				</table>
				</div>
		</div>
</div>
