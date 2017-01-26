<div id="box">
	<div class="judul">
			Daftar Pelanggan||<a href="?p=fmember">Tambah Pelanggan</a>
	</div>
	<div class="isi";
		<div style="overflow-x:auto">
			<table width="80%">
				<tr>
					<th>id_member</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Telephone</th>
					<th>Opsi</th>
				</tr>
				<?php
					include_once"lib/koneksi.php";
					$query=$db->prepare("select * from member");
					$query->execute();
					$data=$query->fetchAll();
					foreach ($data as $member){
						?>
						<tr>
							<td><?=$member['id_member']?></td>
							<td><?=$member['Nama']?></td>
							<td><?=$member['Alamat']?></td>
							<td><?=$member['Telephone']?></td>
							<td><a href="?p=editmember&id=<?=$member['id_member']?>">
								Edit</a>|<a href=?p=member&id=$member['id_member']">
								hapus</a></td>
						</tr>
						<?php

					}
				?>
				</table>
				</div>
		</div>
</div>
