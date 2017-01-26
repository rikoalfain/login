 <?php
 	$id=isset($_GET['id'])?$_GET['id']:"";
 	include"../lib/koneksi.php";
 	$query=$db->prepare("select * from suplier where id='$id'");
 	$query->execute();
 	$suplier=$query->fetch();

 ?>
 <div id="box">
 	<div class="judulb">
 	</div>
 	<div class="isib">
 		<form method="get" action="editsupplier.php">
 			<table>
 				<tr>
 					<td>id</td>
 					<td>:</td>
 					<td><input type="hidden" name="id" id="id" value="<?=$dsuplier['id']?>"></td>
 				</tr>
 				<tr>
 					<td>Persero</td>
 					<td>:</td>
 					<td><input type="text" name="nama" id="nama" value="<?=$dsuplier['nama']?>"></td>
 				</tr>
 				<tr>
 					<td>Nomor Induk Persero</td>
 					<td>:</td>
 					<td><input type="text" name="alamat" id="alamat" value="<?=$dsuplier['alamat']?>"></td>
 				</tr>
 				<tr>
 					<td>Kurir</td>
 					<td>:</td>
 					<td><input type="text" name="telepon" id="telepon" value="<?=$dsuplier['telepon']?>"></td>
 				</tr>
 				<tr>
 					<td>Tanggal Masuk</td>
 					<td>:</td>
 					<td><input type="text" name="gmail" id="gmail" value="<?=$dsuplier['gmail']?>"></td>
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
 