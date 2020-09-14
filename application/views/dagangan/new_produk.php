<div class="card">
<div class="container">
<form action="<?=base_url('dagang/cone')?>" method="post">
<div class="form-group">
<div class="row">
<input required autofocus type="text" class="form-control" name="name" placeholder="name">
</div>
<div class="row">
<input required autofocus type="number" class="form-control col-md-7" name="harga" placeholder="harga">
<small class="input-group-text">000,00</small></div>
<div class="row">
<input required autofocus type="text" class="form-control" name="deskripsi" placeholder="deskripsi">
</div>
<div class="row">
<input required autofocus type="number" class="form-control" name="banyak" placeholder="banyak">
</div>
<input required autofocus type="hidden" class="form-control" name="gambar" placeholder="gambar" value="default">
<button class="btn btn-primary col-md-12" type="submit">kirim</button>
</div>
</form>
</div>
</div>
</div>