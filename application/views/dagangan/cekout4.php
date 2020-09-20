<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Checkout example · Bootstrap</title>
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
   


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?=base_url('')?>assets/img/produk/head.jpg" alt="" width="500px" height="20%">
    <h2>Checkout</h2>
    <p class="lead">Silahkan Lengakapi Form Pembelian</p>
  </div>

  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Keranjangmu</span>
        <span class="badge badge-secondary badge-pill"><?=$one?></span>
      </h4>
      <ul class="list-group mb-3">
        <?$total=0; foreach ($isi as $key => $two) :?>
            <?$total=$total+$two[0]->harga?>
      <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
          <!-- <? var_dump($two[0]);?> -->
            <h6 class="my-0"><?=$two[0]->nama_produk;?></h6>
            <small class="text-muted"><?=$two[0]->banyak_produk;?></small>
          </div>
          <span class="text-muted">Rp<?=$two[0]->harga;?>.000,~</span>
        </li>
        <?endforeach?>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (USD)</span>
          <strong>RP.<?=$total?>.000,~</strong>
        </li> 
      </ul>
    </div>
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">harap lengkapi</h4>
      <form class="needs-validation" method="POST" action="<?=base_url('dagang/manycek')?>" novalidate>
        <div class="row">
          <div class="col-md mb-3">
            <label for="firstName">Nama lengkap</label>
            <input type="text" name="namapembeli" class="form-control" id="firstName" placeholder="udin rizky" value="" required>
            <div class="invalid-feedback">
              Harap isi Nama Lengkap.
            </div>
          </div>
        </div>
<input type="hidden" name="total" value="<?=$total?>">
        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(tidak wajib)</span></label>
          <input type="email" email name="email" class="form-control" id="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            tolong masukan email.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="address" placeholder="Bogor Selatan,Tajur,rt1,rw1,no 12" required>
          <div class="invalid-feedback">
            harap masukan alamat pengiriman
          </div>
        </div>

        <div class="mb-3">
          <label for="address2">tingaalkan Pesan Untuk pengmtar<span class="text-muted">(tidak wajib)</span></label>
          <input type="text" name="pesan" class="form-control" id="address2" placeholder="di sebelah alfamart tajur">
        </div>
         <button class="btn btn-primary btn-lg btn-block" type="submit">lanjutkan</button> 
      </form> 
    </div>
  </div>

