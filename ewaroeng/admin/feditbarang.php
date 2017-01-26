<?php
	$id=isset($_GET['id'])?$_GET['id']:"";
	include"../lib/koneksi.php";
	$query=$db->prepare("select * from tbbarang where id='$id'");
	$query->execute();
	$tbbarang=$query->fetch();
?>
<div id="box">
		<div class="judul">
		</div>
		<div class="isi">
			<form method="post" action="editbarang.php" enctype="multipart/form-data">
				<table class="table">
					<tr>
						<td>id </td>
						<td>:</td>
						<td><?=$tbbarang['id']?><input type="hidden" name="id" id="id" value="<?=$tbbarang['id']?>"></td>
					</tr>
					<tr>
						<td>nama</td>
						<td>:</td>
						<td><input type="text" name="nama" id="nama" value="<?=$tbbarang['nama']?>"></td>
					</tr>
					<tr>
						<td>id_kategori</td>
						<td>:</td>
						<td>
						<select name="id_kategori">
						<?php
						include"../lib/koneksi.php";
						
						$kd_kategori=$tbbarang['id_kategori'];
						
						$query=$db->prepare("select * from tbkategori");
						$query->execute();
						$data=$query->fetchAll();
						foreach($data as $dkategori){
							
						
							if($dkategori['id']==$kd_kategori){
							
						?>
								<option value="<?=$dkategori['id']?>">
												<?=$dkategori['nama']?>
								</option>
								<?php
										}
										else
										{
								?>
								<option value="<?=$dkategori['id']?>"><?=$dkategori['nama']?>
								</option>
									<?php
								}
							}
									?>
									
						</select>
						</td>	
					</tr>
					<tr>
						<td>harga</td>
						<td>:</td>
						<td><input type="text" name="harga" id="harga" value="<?=$tbbarang['harga']?>"></td>
					</tr>
					<tr>
						<td>jumlah</td>
						<td>:</td>
						<td><input type="text" name="jumlah" id="jumlah" value="<?=$tbbarang['jumlah']?>"></td>
					</tr>
					<tr>
						<td colspan ="3"><input type="submit" name="btnsimpan" value="Di simpan Lur"></td></tr></form>
						<form method="post" enctype="multipart/form-data">
					<tr>
						<input type="hidden" name="id" id="id" value="<?$tbbarang['kd_barang']?>">
						<td>gambar</td>
						<td>:</td>
						<td>
							<img src="../<?=$tbbarang['gambar']?>"width="50" height="50">
							<input type="file" name="gambar" id="gambar" required="required">
						</td>						
					</tr>
					<tr>
						<td colspan="3"<input type="submit" name="btubah" value="Ubah Gambar"></td>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
<?php
		if (isset($_POST['btnubah']))
		{
		$gambar=isset($_FILES['gambar'])?$_FILES['gambar']:"";
		$lastupdate=date("Y-m-d");
		$tmp=date('yhi');
			$fname="gbr".$tmp.".jpg";
			
			$move=move_uploaded_file($_FILES['gambar']['tmp_name'],"../images/$fname");
			
			if($move){
			$query=$db->prepare("update tbbarang SET gambar='/images/$fname' where id='$id'");
					$query->execute();
					echo"<script>alert('Alhamdulillah sudah disimpan');location.href='index.php?p=tbbarang'</script>";
			}
		}
?>		
</div>