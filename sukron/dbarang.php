<h1>Barang</h1>
<p>Persediaan Barang yang Ada Disini !!</p>
<div id="box">
	<div class="judul">informasi barang</div>
		<div class="isi">
			<div id="barang">
				<form method="post" action="savebarang.php">
					<table border=0 height=5% width="80%" align="center">
						<tr>
							<th>No.</th>
							<th>Nama Barang</th>
							<th>Jenis Barang</th>
							<th>Harga Barang</th>
						</tr>
						<tr>
						<?php
							include_once"lib/koneksi.php";
							$query=$db
						?>
						</tr>
						<tr>
							<td align="center" rowspan="4">01</td>
							<td align="center" rowspan="4">LAPTOP</td>
							<td align="center">Acer</td>
							<td align="center">Rp.8000.000,00</td>
						</tr>
						<tr>
							<td align="center">Asus</td>
							<td align="center">Rp.5.500.000,00</td>
						</tr>
						<tr>
							<td align="center">Lenovo</td>
							<td align="center">Rp.5000.000,00</td>
						</tr>
						<tr>
							<td align="center">Toshiba</td>
							<td align="center">Rp.8000.000,00</td>
						</tr> 
						<tr>
							<td align="center" rowspan="4">02</td>
							<td align="center" rowspan="4">HANDPHONE</td>
							<td align="center">Samsung</td>
							<td align="center">Rp.2.000.000,00</td>
						</tr>
						<tr>
							<td align="center">Nokia</td>
							<td align="center">Rp.1.200.000,00</td>
						</tr> 
						<tr>
							<td align="center">Colped</td>
							<td align="center">Rp.1.700.000,00</td>
						</tr> 
						<tr>
							<td align="center">asus</td>
							<td align="center">Rp.3000.000,00</td>
						</tr>	
						<tr>
							<td align="center" rowspan="4">03</td>
							<td align="center" rowspan="4">TELEVISI</td>
							<td align="center">LG</td>
							<td align="center">Rp.4000.000,00</td>
						</tr>
						<tr>
							<td align="center">Samsung</td>
							<td align="center">Rp.2000.000,00</td>
						</tr>
						<tr>
							<td align="center">Toshiba</td>
							<td align="center">Rp.5000.000,00</td>
						</tr>
						<tr>
							<td align="center">Panasonic</td>
							<td align="center">Rp.3000.000,00</td>
						</tr>
						<tr>
							<td align="center" rowspan="4">04</td>
							<td align="center" rowspan="4">KIPAS ANGIN</td>
							<td align="center">Cosmos</td>
							<td align="center">Rp.300.000,00</td>
						</tr>
						<tr>
							<td align="center">Panasonic</td>
							<td align="center">Rp.1500.000,00</td>
						</tr>
						<tr>
							<td align="center">Nasional</td>
							<td align="center">Rp.500.000,00</td>
						</tr>
						<tr>
							<td align="center">Politron</td>
							<td align="center">Rp.550.000,00</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>