<h2>Masukan berita</h2>
<from class="form-horizontal" method="post" action="simpanBerita.php" name="frmBerita" enctype="multipart/from-data">
<div class="control-group">
<label class="control-label"for="inputJudul">judul</label>
<div class="controls">
<input type="text" class="span12" placeholder="judul Berita"name="jld_berita"required>
</div>
</div>
<div class="control-group">
<label class="control-label"for="inputisiBerita">isi Berita</label>
<div class="controls">
<input type="file" id="inputGambar"name="gbr_berita"required>
</div>
</div>
<div class="control-group">
<div class="controls">
<button type="submit" calss="btn btn-primary">Post</button>
<button type="reset"class="btn btn-inverse">Cencel</button>
</div>
</div>
</from>