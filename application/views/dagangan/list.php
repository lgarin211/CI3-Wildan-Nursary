<div class="container" id="page-top">
<div class="row">
<div class="ml-2 card container col-md-2">
<h2 class="mx-auto">kategory</h2>
<ul class="text-center">
<li><h6><a href="<?=base_url('/dagang/rone?val=2')?>">tanaman buah</a></h6></li><hr>
<li><h6>tanaman lindung</h6></li><hr>
<li><h6><a href="<?=base_url('/dagang/rone?val=1')?>">tanaman hias</a></h6></li><hr>
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
        <img src="<?=base_url('assets/')?>img/dam/979349.jpg" alt="" srcset="" class="bd-placeholder-img card" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
              <a class="btn btn-lg btn-primary" href="#" role="button">DAFTAR SEKARANG</a>
          </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?=base_url('assets/')?>img/dam/374846.jpg" alt="" srcset="" class="bd-placeholder-img card" width="100%" height="500px">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
              <a class="btn btn-lg btn-primary" href="#" role="button">Tentang kami</a>
          </p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
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
<br>
<!-- list -->
<link rel="stylesheet" href="<?=base_url('assets/one.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/two.css');?>">
<div class="container row mx-auto">
<?foreach ($one as $key => $a) :?>
<div class="product-grid-item product without-stars product-no-swatches quick-shop-on quick-view-on woodmart-hover-quick  col-6 col-sm-4 col-md-3 col-lg-2 first  product-in-grid type-product post-15729 status-publish first instock product_cat-jual-bibit-tanaman product_tag-bibit-buah-tin-merah product_tag-bibit-tin-merah product_tag-buah-tin-merah product_tag-harga-bibit-buah-tin-merah product_tag-jual-bibit-buah-tin-merah product_tag-tabulampot-buah-tin-merah has-post-thumbnail sale shipping-taxable purchasable product-type-simple hover-width-small">
<div class="product-element-top">
<a href="<?=base_url('/dagang/rtwo?id='.$a['id'])?>" class="product-image-link">
<div class="product-labels labels-rounded">
  <!-- <span class="onsale product-label">-24%</span> -->
</div>
<img width="150px" src="<?=base_url('assets/img/dam/'.$a['img_link'])?>" height="200px" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" sizes="(max-width: 150px) 100vw, 150px"></a>
<div class="woodmart-buttons">
<div class="quick-view">
<a href="<?=base_url('/dagang/rtwo?id='.$a['id'])?>" class="open-quick-view woodmart-tltp raskasl" ><span class="woodmart-tooltip-label" style="margin-left: -43px;">Quick View</span>Quick View</a>
</div>
</div>
<div class="woodmart-add-btn">
<form action="<?= base_url('/dagang/rone')?>" method="post">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="idbarang" value="<?=$a['id']?>">
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
<h3 class="product-title"><a href=""><?=$a['nama_produk']?></a>
</h3>
<!-- <span class="price"><del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp</span>125.000</bdi> -->
</span></del> <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Rp</span><?=$a['harga']?>.000</bdi></span></ins></span>
</div>
<?endforeach;?>
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
</div>