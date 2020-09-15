<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<h1 class="display-4">total</h1>
<?$nilai=0;foreach ($isi as $key => $a) {$nilai=$nilai+($a[0]->harga*$link_p[$key]);}?>
  <p class="lead">total harga=<?=$nilai?></p>
</div>
<div class="row">
<div class="col-md-7">
<div class="col-md-7 card-group container">
<div class="row">
  <form action="<?=base_url('/dagang/manycek')?>" method="get">
<?foreach ($isi as $key => $i):?>
    <? $a=$i[0];?>
    <div class="card mb-3 col-md-2" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=base_url('assets/img/dam/')?><?=$a->img_link?>" height="140px"  class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$a->nama_produk?></h5>
        <p class="card-text">sebanyak: <?=$link_p[$key]?>.</p>
        <p class="card-text">    <small class="text-muted">
      <div class="btn-group" >
      <button type="button" class="btn btn-warning">beli</button>
      <button type="button" class="btn btn-primary">Lihat</button>
      <a href="<?= base_url('/dagang/hapus?idbarang='.$a->id.'&sesi='.$_SESSION['semi_id'])?>"  class="btn btn-danger">hapus</a>
      <input type="hidden" name="id<?=$key?>" value="<?=$a->id?>">
      </div>
    </small>
      </p>
      </div>
    </div>
  </div>
</div>
<?endforeach;?>
  </div>
</div>
<div class="container">
<div class="">
<button type="submit" class='col-md btn btn-primary'>beli semua</button>
</div>
</div>
</div>
<div class="col-md-5">
    <h1 class="text-center">RINCIAN</h1>
  <div class="">
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">produk</th>
      <th scope="col">banyak</th>
      <th scope="col">harga</th>
    </tr>
  </thead>
  <tbody>
  <?$total=0;foreach ($isi as $key => $i):?>
    <? $a=$i[0];?>
      <tr>
      <th scope="row">1</th>
      <td><?=$a->nama_produk?></td>
      <td><?=$link_p[$key]?></td>
      <td>Rp.<?=$a->harga*$link_p[$key];?></td>
    </tr>

  <?endforeach;?>
  </tbody>
</table>
  <li class="list-group-item d-flex justify-content-between bg-light">
          <span>Total (USD)</span>
          <strong>RP.<?=$nilai?>.000,~</strong>
        </li> 
        <button type="submit" class='col-md btn btn-primary'>beli semua</button>
</form>
  </ul>

  </div>
</div>
</div>
<!-- list -->