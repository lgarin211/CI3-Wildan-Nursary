<div class="ml-4 mr-4" id="page-top">
  <div class="row">
    <div class="card bg-link  container col-md-2">
      <h2 class="mx-auto">kategory</h2>
      <div class="ord">
        <nav class="navbar navbar-expand-sm navbar-light">
          <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mx-auto text-center ">

              <? foreach ($kategori[1] as $key => $ln) : ?>
              <li class="nav-item pb-1 btn-light"><a class="btn" href="<?= base_url('/dagang/rtree?val=' . $ln->id) ?>"><?= $ln->value ?></a></li>
              <? endforeach; ?>
              <li class="nav-item pb-1 btn-light dropup">
                <a class="btn pb-1 btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  other
                </a>
                <div class="dropdown-menu">
                  <? foreach ($kategori[2] as $key => $ln) : ?>
                  <a class="btn pb-1 btn-light" href="<?= base_url('/dagang/rtree?val=' . $ln->id) ?>"><?= $ln->value ?></a>
                  <? endforeach; ?>
                </div>
              </li>







            </ul>
          </div>
        </nav>


      </div>
    </div>
    <div id="myCarousel" class="carousel slide col-md" data-ride="carousel">
      <ol class="carousel-indicators">
        <?foreach ($asesoris[2] as $key => $value): ?>
        <li data-target="#myCarousel" data-slide-to="<?= $key ?>" class="active"></li>
        <?endforeach;?>
      </ol>
      <div class="carousel-inner">
        <!-- <div class="carousel-item active">
          <img src="<?= base_url('assets/') ?>img/produk/s1.jpeg" alt="" srcset="" class="bd-placeholder-img card imh-rela" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption text-center">
              <p>
                <a class="btn btn-sm btn-success" href="<?= base_url('/auth') ?>" role="button">DAFTAR SEKARANG</a>
              </p>
            </div>
          </div>
        </div> -->
        <?foreach ($asesoris[2] as $key => $value): ?>
        <div class="carousel-item <?if ($key==0) {
          echo " active"; }?>">
          <img src="<?= base_url('assets/img/produk/' . $value) ?>" alt="" srcset="" class="bd-placeholder-img card imh-rela" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption text-center">
              <p>
                <!-- <a class="btn btn-sm btn-success" href="<?= base_url('/ot/abaut') ?>" role="button">Tentang kami</a> -->
              </p>
            </div>
          </div>
        </div>
        <?endforeach;?>


        <!-- <div class="carousel-item">
          <img src="<?= base_url('assets/') ?>img/produk/s3.jpeg" alt="" srcset="" class="bd-placeholder-img card imh-rela" width="100%" height="100%">
          <div class="container">
            <div class="carousel-caption text-center">
              <p>
                <a class="btn btn-sm btn-success" href="<?= base_url('/ot') ?>" role="button">Browse gallery</a>
              </p>
            </div>
          </div>
        </div> -->
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
<div class="">

</div>
<br>
<!-- list -->
<style>
  .pilk2 {
    color: #<?= $active; ?>;
  }
</style>
<link rel="stylesheet" href="<?= base_url('assets/one.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/two.css'); ?>">
<div class="row">
  <div class="bg-link col-md-10">
    <div class="row mx-auto">
      <? foreach ($one as $key => $a) : ?>
      <div class="border-info  product-grid-item product without-stars product-no-swatches quick-shop-on quick-view-on woodmart-hover-quick  col-6 col-sm-4 col-md-3 col-lg-2 first  product-in-grid type-product post-15729 status-publish first instock product_cat-jual-bibit-tanaman product_tag-bibit-buah-tin-merah product_tag-bibit-tin-merah product_tag-buah-tin-merah product_tag-harga-bibit-buah-tin-merah product_tag-jual-bibit-buah-tin-merah product_tag-tabulampot-buah-tin-merah has-post-thumbnail sale shipping-taxable purchasable product-type-simple hover-width-small">
        <div class="product-element-top">
          <a href="#" data-toggle="modal" data-target=".id<?= $a['id'] ?>">
            <div class="product-labels labels-rounded">
              <!-- <span class="onsale product-label">-24%</span> -->
            </div>
            <img width="100%" src="<?= base_url('assets/img/dam/' . $a['img_link']) ?>" height="100%" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" sizes="(max-width: 150px) 100vw, 150px">
          </a>
          <div class="woodmart-buttons">
          </div>
          <div class="woodmart-add-btn">
            <form action="<?= base_url('/dagang/rone') ?>" method="post">
              <input type="hidden" name="quantity" value="1">
              <input type="hidden" name="idbarang" value="<?= $a['id'] ?>">
              <input type="hidden" name="sesi" value="<?= $sas; ?>">
              <button type="submit" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop btn-success btn"><span><i class="fas fa-cart-plus fa-fw"></i></span>
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
        <h3 class="text-center"><?= $a['nama_produk'] ?></h3>

        <h6>
          <ins>
            <bdi>
              Rp
              <?= $a['harga'] ?>.000,~
            </bdi>
          </ins>
        </h6>
      </div>

      <div class="modal fade bd-example-modal-lg id<?= $a['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="container-fluid text-center">
              <div class="row">
                <div class="card col-md-4">
                  <img src="<?= base_url('/assets/img/dam/' . $a['img_link']) ?>" class="card-img-top" alt="">
                </div>
                <div class="col-md-3">
                  <h5><small>nama produk</small><br>
                    <strong><?= $a['nama_produk'] ?></strong></h5>
                  <h5>harga
                    <strong>Rp <?= $a['harga'] ?>.000,~</strong></h5>
                  <h5>stok
                    <?= $a['banyak_produk'] ?>
                  </h5>
                </div>
                <div class="col-md-5">
                  <h5>
                    desripsi: <br> <?= $a['deskripsi'] ?>.
                  </h5>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 mx-auto">
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">keranjang</button>
                    <button type="button" class="btn btn-success">beli</button>
                    <button type="button" data-dismiss="modal" class="btn warni">cencel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <? endforeach; ?>
    </div>
  </div>
  <div class="col-md-2">
    <div class="container">
      <div class="card bg-link  ">
        <ul>
          <?foreach ($asesoris[5][0] as $key => $value):?>
          <?$ims=$asesoris[5][1][$key];?>
          <li>
            <p class="text-center"><a href="<?= $ims ?>"><img src="<?= $value ?>" width="70%" alt=""></a></p>
          </li>
          <?endforeach;?>
        </ul>
      </div>
    </div>
  </div>

</div>
</div>
<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
</div>