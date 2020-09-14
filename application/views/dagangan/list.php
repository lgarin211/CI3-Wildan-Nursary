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
    <link href="http://localhost/CODE/wildan/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">

  <!-- <h5 class="">Wildan Nursery</h5> -->
  <img src="<?=base_url('assets/img/produk/head.jpg');?>" class="my-0 mr-md-auto font-weight-normal" width="150px"  alt="" srcset="">
  <nav class="my-2 my-md-0 mr-md-3">
  <div class="dropdown">
  <!-- Default dropleft button -->
<div class="btn-group dropleft">
  <button type="button" class="btn btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

  </button>
  <div class="dropdown-menu row">
    <a class="p-2 col-md btn btn-primary " href="<?=base_url('/dagang/keranjang')?>">keranjang()</a>
    <a class="p-2 col-md btn btn-primary " href="#">sessi(<?= $sas?>)</a>
    <a class="p-2 col-md btn btn-primary " href="#">Support</a>
    <a class="p-2 col-md btn btn-primary " href="#">Pricing</a>
  </div>
</div>

</div>
  </nav>
  <a class="btn btn-primary" href="<?=base_url('/auth')?>">Sign up</a>
  <a class="nav-link" href="<?=base_url('/dagang/keranjang')?>" >
<i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter"><?=$keranjang?></span></a>
</div>


<div class="container" id="page-top">
<div class="row">
<div class="ml-2 card container col-md-2">
<h2 class="mx-auto">kategory</h2>
<ul>
<li><h6>tanaman buah</h6></li><hr>
<li><h6>tanaman lindung</h6></li><hr>
<li><h6>tanaman hias</h6></li><hr>
<li><h6>tanaman herbal</h6></li><hr>
</ul>
</div>
<div id="myCarousel" class="carousel slide col-md" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active">
      </li>
      <li data-target="#myCarousel" data-slide-to="1">
      </li>
      <li data-target="#myCarousel" data-slide-to="2">
      </li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img card" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
        <rect width="100%" height="100%" fill="#777">

        </rect>
      </svg> -->
        <img src="<?=base_url('assets/')?>img/dam/979349.jpg" alt="" srcset="" class="bd-placeholder-img card" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
              <a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
          </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img card" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
        <rect width="100%" height="100%" fill="#777">

        </rect>
      </svg> -->
        <img src="<?=base_url('assets/')?>img/dam/374846.jpg" alt="" srcset="" class="bd-placeholder-img card" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
              <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
          </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <svg class="bd-placeholder-img card" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
        <rect width="100%" height="100%" fill="#777">

        </rect>
      </svg> -->
        <img src="<?=base_url('assets/')?>img/dam/545909.jpg" alt="" srcset="" class="bd-placeholder-img card" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
              <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
          </p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true">

      </span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true">

      </span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>
</div>
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Pricing</h1>
  <img src="" alt="hw" srcset="">
  
  <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
</div>

<!-- list -->
<link rel="stylesheet" href="<?=base_url('assets/one.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/two.css');?>">
<div class="container row mx-auto">
<?foreach ($one as $key => $a) :?>
<div class="product-grid-item product without-stars product-no-swatches quick-shop-on quick-view-on woodmart-hover-quick  col-6 col-sm-4 col-md-3 col-lg-2 first  product-in-grid type-product post-15729 status-publish first instock product_cat-jual-bibit-tanaman product_tag-bibit-buah-tin-merah product_tag-bibit-tin-merah product_tag-buah-tin-merah product_tag-harga-bibit-buah-tin-merah product_tag-jual-bibit-buah-tin-merah product_tag-tabulampot-buah-tin-merah has-post-thumbnail sale shipping-taxable purchasable product-type-simple hover-width-small">
<div class="product-element-top">
<a href="<?=base_url('/dagang/rtwo?id='.$a->id)?>" class="product-image-link">
<div class="product-labels labels-rounded">
  <!-- <span class="onsale product-label">-24%</span> -->
</div>
<img width="150px" src="<?=base_url('assets/img/dam/'.$a->img_link)?>" height="200px" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" sizes="(max-width: 150px) 100vw, 150px"></a>
<div class="woodmart-buttons">
<div class="quick-view">
<a href="<?=base_url('/dagang/rtwo?id='.$a->id)?>" class="open-quick-view woodmart-tltp raskasl" ><span class="woodmart-tooltip-label" style="margin-left: -43px;">Quick View</span>Quick View</a>
</div>
</div>
<div class="woodmart-add-btn">
<form action="<?= base_url('/dagang/rone')?>" method="post">
        <input type="hidden" name="idbarang" value="<?=$a->id?>">
        <input type="hidden" name="sesi" value="<?=$sas;?>">
<button type="submit" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop btn-primary btn"><span><img src="<?=base_url('assets/vendor/fontawesome-free/svgs/solid/cart-plus.svg')?>"  width="30px" alt=""></span>
</button>	
</form>
</div>
<div class="quick-shop-wrapper">
<div class="quick-shop-close"><span>Tutup</span>
</div>
<div class="quick-shop-form">
</div>
</div>
</div>
<h3 class="product-title"><a href=""><?=$a->nama_produk?></a>
</h3>
<!-- <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp</span>125.000</bdi> -->
</span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp</span><?=$a->harga?>.000</bdi></span></ins></span>
</div>
<?endforeach;?>
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
</div>

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
