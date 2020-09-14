<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Welcome</title>


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

    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Wildan Nursery</h5>
  <nav class="my-2 my-md-0 mr-md-3">
     <a class="p-2 text-dark" href="#">sessi(<?=$_SESSION['semi_id'];?>)</a>
    <a class="p-2 text-dark" href="#">Support</a>
    <a class="p-2 text-dark" href="#">Pricing</a>
  </nav>
  <a class="btn btn-outline-primary" href="<?=base_url('/auth')?>">Sign up</a>
</div>




<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
<h1 class="display-4">total</h1>
<?$nilai=0;foreach ($isi as $key => $a) {$nilai=$nilai+$a[0]->harga;}?>
  <p class="lead">total harga=<?=$nilai?></p>
</div>
<div class="row">
<div class="col-md-7">
<div class="col-md-9 card-group container">
  <div class="row">
  <form action="<?=base_url('/dagang/manycek')?>" method="get">
<?foreach ($isi as $key => $i):?>
    <? $a=$i[0];    ?>
    <div class="card mb-3 col-md-2" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?=base_url('assets/img/dam/')?><?=$a->img_link?>" height="140px"  class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?=$a->nama_produk?></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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
<div class="col-md-4">
    <h1 class="text-center">RINCIAN</h1>
  <div class="">
  <ul>
  <li class="list-group">
    <div class="row">
    <p class="col-md-5">produk :</p>
    <p class="col-md">harga :</p>
    </div> 
  </li>

  <?$total=0;foreach ($isi as $key => $i):?>
    <? $a=$i[0];?>
    <li class="list-group-item ">
    <div class="row">
    <p class="col-md-5"><?=$a->nama_produk?></p>
    <p class="col-md">Rp.<?=$a->harga;$total=$total+$a->harga?></p>
    </div> 
  </li>
  <?endforeach;?>
  <li class="list-group-item d-flex justify-content-between bg-light">
          <span>Total (USD)</span>
          <strong>RP.<?=$total?>.000,~</strong>
        </li> 
        <button type="submit" class='col-md btn btn-primary'>beli semua</button>
</form>
  </ul>

  </div>
</div>
</div>
<!-- list -->



<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Free</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>10 users included</li>
          <li>2 GB of storage</li>
          <li>Email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>20 users included</li>
          <li>10 GB of storage</li>
          <li>Priority email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Enterprise</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>30 users included</li>
          <li>15 GB of storage</li>
          <li>Phone and email support</li>
          <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
      </div>
    </div>
  </div>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2019</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>list chart</h1>
    <ul>
    </ul>

</body>
<!-- </html> -->