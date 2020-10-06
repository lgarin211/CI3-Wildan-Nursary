<!-- list -->
<link rel="stylesheet" href="<?=base_url('assets/one.css');?>">
<link rel="stylesheet" href="<?=base_url('assets/two.css');?>">
<div class="row">
<div class="container col-md-10" >
<div class="row mx-auto">
<?foreach ($one as $key => $a) :?>
<div class="product-grid-item product without-stars product-no-swatches quick-shop-on quick-view-on woodmart-hover-quick  col-6 col-sm-4 col-md-3 col-lg-2 first  product-in-grid type-product post-15729 status-publish first instock product_cat-jual-bibit-tanaman product_tag-bibit-buah-tin-merah product_tag-bibit-tin-merah product_tag-buah-tin-merah product_tag-harga-bibit-buah-tin-merah product_tag-jual-bibit-buah-tin-merah product_tag-tabulampot-buah-tin-merah has-post-thumbnail sale shipping-taxable purchasable product-type-simple hover-width-small">
<div class="product-element-top">
<!-- <a href="<?=base_url('/dagang/rtwo?id='.$a['id'])?>" class="product-image-link"> -->
<a href="#" data-toggle="modal" data-target=".id<?=$a['id']?>">
<div class="product-labels labels-rounded">
  <!-- <span class="onsale product-label">-24%</span> -->
</div>
  <img width="150px" src="<?=base_url('assets/img/dam/'.$a['img_link'])?>" height="200px" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" sizes="(max-width: 150px) 100vw, 150px"></a>
<div class="woodmart-buttons">
  <i class="far fa-eye"></i>
<div class="quick-view">
<a href="<?=base_url('/dagang/rtwo?id='.$a['id'])?>" class="open-quick-view woodmart-tltp raskasl" ><span class="woodmart-tooltip-label" style="margin-left: -43px;">Quick View</span>Quick View</a>
</div>
</div>
<div class="woodmart-add-btn">
<form action="<?= base_url('/dagang/rone')?>" method="post">
        <input type="hidden" name="quantity" value="1">
        <input type="hidden" name="idbarang" value="<?=$a['id']?>">
        <input type="hidden" name="sesi" value="<?=$_SESSION['semi_id'];?>">
<button type="submit" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop btn-primary btn"><span><i class="fas fa-cart-plus fa-fw"></i></span>
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

<div class="modal fade bd-example-modal-lg id<?=$a['id']?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="container-fluid text-center">
        <div class="row">
            <div class="card col-md-4">
                <img src="<?=base_url('/assets/img/dam/'.$a['img_link'])?>" class="card-img-top" alt="">
              </div>
          <div class="col-md-3">
            <h5><small>nama produk</small><br>
            <strong><?=$a['nama_produk']?></strong></h5>
            <h5>harga 
            <strong>Rp <?=$a['harga']?>.000,~</strong></h5>
            <h5>stok
              <?=$a['banyak_produk']?>
            </h5>
          </div>
          <div class="col-md-5">
            <h5>
                dekripsi=
                produk ini kbaksbdkjalbsjdl kldhask dkb slihaioblsbd lkdbkbalskbfalksndkf al sbk andjls kdb alksbfkanskdasjdn skbaknsbkl;a k,fnks bdjasb kdb kbs; lanskbdn lb l;bkbfkasvlb.kslbdkasbf kaslbfckasndk bslkbsfkbas kbskbf;alsdbkslb fkbsjfkbalkfbskahfs
            </h5>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mx-auto">
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">Left</button>
        <button type="button" class="btn btn-secondary">Middle</button>
        <button type="button" data-dismiss="modal" class="btn btn-secondary">cencel</button>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?endforeach;?>
</div>
</div>
  <div class="col-md-2">
    <div class="container">
     <div class="card bg-black_c ">
        <ul>
        <li><p class="text-center"><a href="#">lazada</a></p></li>
        <li><p class="text-center"><a href="#">lazada</a></p></li>
        <li><p class="text-center"><a href="#">lazada</a></p></li>
        <li><p class="text-center"><a href="#">lazada</a></p></li>
        </ul>
     </div>    
   </div>
  </div>

</div>
</div>
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
</div>