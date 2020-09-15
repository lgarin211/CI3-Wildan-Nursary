<div id="myCarousel" class="carousel slide" data-ride="carousel">
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
        <img src="<?=base_url('assets/')?>img/dam/979349.jpg" alt="" srcset="" class="bd-placeholder-img" width="100%" height="500px">
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
        <img src="<?=base_url('assets/')?>img/dam/374846.jpg" alt="" srcset="" class="bd-placeholder-img" width="100%" height="500px">
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
        <img src="<?=base_url('assets/')?>img/dam/545909.jpg" alt="" srcset="" class="bd-placeholder-img" width="100%" height="500px">
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


<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Pricing</h1>
  <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
</div>

<div class="container">
  <div class="card-deck mb-2 text-center row">

 <?foreach ($one as $key => $a) :?>
  
      <!-- link -->
      <link rel="stylesheet" href="<?=base_url('assets/one.css')?>">
    
    <div class="product-grid-item product without-stars product-no-swatches quick-shop-on quick-view-on woodmart-hover-quick  col-6 col-sm-4 col-md-3 col-lg-2 product-in-grid type-product post-2215 status-publish instock product_cat-bibit-jambu-air product_cat-jual-bibit-tanaman product_tag-bibit-jambu-air-king-rose product_tag-harga-bibit-jambu-air-king-rose product_tag-jual-bibit-jambu-air-king-rose product_tag-tabulampot-jambu-air-king-rose has-post-thumbnail shipping-taxable purchasable product-type-simple hover-width-small" data-loop="2" data-id="2215">
      <div class="product-element-top">
         <a href="<?=base_url('/Dagang/Rtwo')?>?id=<?=$a->id;?>" class="product-image-link">
           <img src="<?=base_url('assets/img/dam/')?><?=$a->img_link?>" alt="">
 </a>
  <div class="woodmart-buttons">
    <div class="quick-view">
       <a href="<?=base_url('/Dagang/Rtwo')?>?id=<?=$a->id;?>" class="open-quick-view woodmart-tltp">
  <span class="woodmart-tooltip-label" style="margin-left: -51px;">Quick View</span>Quick View</a>
  </div>
  </div>
  <div class="woodmart-add-btn">
     <a href="<?=base_url('/Dagang/Rtwo')?>?id=<?=$a->id;?>" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop">
    <span>Tambah ke keranjang</span>
  </a>
  </div>
  <div class="quick-shop-wrapper">
    <div class="quick-shop-close">
    <span>Tutup</span>
  </div>
  <div class="quick-shop-form">

    </div>
  </div>
  </div>
  <h3 class="product-title">
    <a href="#"><?=$a->nama_produk?></a>
    </h3>
     <span class="price">
      <span class="woocommerce-Price-amount amount">
      <bdi>
      <span class="woocommerce-Price-currencySymbol">Rp</span><?=$a->harga?>.000</bdi>
    </span>
    </span>
    </div>
    <? endforeach; ?>
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">    
    </div>
  </div>
</div>
