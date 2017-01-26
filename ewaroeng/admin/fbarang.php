<div id="box">
	<div class="judul">
	</div>
	<div class="isi">
		<form method="POST" action="savebarang.php" enctype="multipart/form-data">
			<table>
				<tr>
					<td>id</td>
					<td>:</td>
					<td><input type="text" name="id" id="id">
					</td>
				</tr>
				<tr>
					<td>nama</td>
					<td>:</td>
					<td><input type="text" name="nama" id="nama">
					</td>
				</tr>
				<tr>
					<td>id_kategori</td>
					<td>:</td>
					<td><select name="id_kategori">
						<?php
							include"../lib/koneksi.php";
							$query=$db->prepare("select * from tbkategori");
							$query->execute();
							$data=$query->fetchAll();
							foreach ($data as $dkategori)
							{
								?>
									<option value="<?=$dkategori['id']?>"><?=$dkategori['nama']?></option>
								<?php	
							}
						?>
					</select>
					</td>
				</tr>			
				<tr>
					<td>harga</td>
					<td>:</td>
					<td><input type="text" name="harga" id="harga">
					</td>
				</tr>
				<tr>
					<td>jumlah</td>
					<td>:</td>
					<td><input type="text" name="jumlah" id="jumlah">
					</td>
				</tr>
				<tr>
					<td>gambar</td>
					<td>:</td>
					<td><input type="file" name="gambar" id="gambar">
					</td>
				</tr>
					
					<tr>
						<td colspan="3">
							<input type="submit" name="btnsimpan" value="simpan">
						</td>
						</tr>	
				</tr>
			</tr>
		</table>
	</form>
	</div>
</div>	