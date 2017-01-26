<div id="box">
	<div class="judul">
	</div>
	<div class="isi">
		<form method="post" action="savebarang.php">
			<table>
				<tr>
					<td>nama</td>
					<td>:</td>
					<td><input name="nama">
					<?php
						include_once"lib/koneksi.php";
						$query=$db->prepare("select from kategori");
						$query->execute();
						$data=$query->fetchAll();
						foreach ($data as $nama) {
							?>
							<option value="<?=nama['nm']?>">
							<?=$nama['nm']?>
							</option>
							<?php
						}
					?>
					</td>
				</tr>
				<tr>
					<td>id kategori</td>
					<td>:</td>
					<td>
						<select type="text" name="id_kategori">
						<?php
							include_once"lib/koneksi.php";
							$query=$db->prepare("select from kategori");
							$query->execute();
							$data=$query->fetchAll();
							foreach($data as $kategori){
						?>
						<option value="<?=kategori['id']?>">
						<?=$kategori['nama']?>
						</option>
						<?php
							}
						?>
						</select>
					</td>
				</tr>
				<tr>
					<td>harga</td>
					<td>:</td>
					<td>
						<input name="harga">
						<?php
							include_once"lib/koneksi.php";
							$query=$db->prepare("select from kategori")
						?>
					</td>
				</tr>
				<tr>
					<td>jumlah</td>
					<td>:</td>
					<td><input type="text" name="jumlah" id="jumlah"></td>
				</tr>
				<tr>
					<td>insertdate</td>
					<td>:</td>
					<td><input type="text" name="insertdate" id="insertdate"></td>
				</tr>
				<tr>
					<td>lastupdate</td>
					<td>:</td>
					<td><input type="text" name="lastupdate" id="lastupdate"></td>
				</tr>
				<tr>
					<td colspan="3">
					<input type="submit" name="btnsimpan" value="Disimpan">
					</td>
				</tr>
			</table>
		</form>
	</div>
</div>