<div id="">
<div class="judul">
	DAFTAR PELANGGAN||<a href="?p=fmember">tambah data</a>
	</div>	
		<div class="isi">
		<div  style="overflow-x:auto">
			<table>
			<tr>
				<th>id_member</th>
				<th>nama</th>
				<th>alamat </th>
				<th>telepon</th>
			</tr>
				<?php
				include_once"../lib/koneksi.php";
				$query=$db->prepare("select * from member");
				$query->execute();
				$data=$query->fetchAll();
				foreach($data as $member){
					?>
					<tr>
						<td><?=$member['id']?></td>
						<td><?=$member['nama']?></td>
						<td><?=$member['alamat']?></td>
						<td><?=$member['telepon']?></td>
					</tr>
						<?php
						
						
				}
				?>
			</table>
</div>			