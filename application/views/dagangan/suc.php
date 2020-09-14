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
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
      </nav>
      <a class="btn btn-outline-primary" href="#">Sign up</a>
    </div>

    
    <div class="container ">
        <div class="row">
        <div class="col-md-3 mx-auto card" style="max-width: 50%;">
            <img src="<?=base_url('assets/img/dam/').$one[0]->img_link?>" class="card-img " width="50px" alt="">
        </div>
        <div class="col-md card">
         <h1 class="card-title"><small>produk</small> <?=$one[0]->nama_produk?></h1>
         <p class="card-text">desripsi: <br> <?=$one[0]->deskripsi?>.</p>
         <h5 class="card-title">Rp.<?=$one[0]->harga?></h5>
         <h5 class="card-title">stok<?=$one[0]->banyak_produk?></h5>
         <p class="card-text"><small class="text-muted">
             <a class="btn btn-primary" href="<?=base_url('dagang/beli?id=').$one[0]->id;?>">beli sekarang</a>
         </small></p>
        </div>
        <div class="col-md-5">

        <!-- here -->
        </div>        
        </div>
    </div>

    <progress class="col-md"></progress>


    <div class="text-white blockquote-footer row ">
    <?foreach ($two as $key => $k) :?>
    <div class="col-md-2 mx-auto">
    <img src="<?=base_url('assets/img/dam/').$k->img_link?>" width="80px" height="60%" class="card-img" alt="...">
         <div class="card-img-overlay">
           <h5 class="card-title"><?=$k->nama_produk?></h5>
           <p class="card-text"><?=$k->harga?></p>
           <p class="card-text"><a class="btn btn-primary" href="<?=base_url('/dagang/Rtwo?id=').$k->id?>">view</a></p>
         </div>
    </div>
    <?endforeach;?>

    </div>