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
<div class="form-check">
    <div class="row">
<?foreach ($kategori as $key => $min):?>
<div class="col-md-6">
<div class="row">
<input class="form-check-input position-static cal-md-2" type="checkbox" id="blankCheckbox" name="ktr<?=$min->id?>" value="<?=$min->id?>" aria-label="...">
<p class="col-md">kategory <?=$min->value?></p>
</div>
</div>
<?endforeach;?>
</div>
</div>


<button class="btn btn-primary col-md-12" type="submit">kirim</button>
</div>
</form>
</div>
</div>
</div>