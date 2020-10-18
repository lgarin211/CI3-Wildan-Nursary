<div class="container">
    <div class="row">
        <!-- start -->
        <?foreach ($gas as $key => $f):?>
        
        <div class="col-md-4">
            <div class="card mb-4 bg-black_c shadow-sm">
                <div class="card-header bg-black_ch">
                    <h4 class="my-0 text-center pilk font-weight-normal"><?= $f['nama_produk'] ?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                    </div>
                    <a href="#" data-toggle="modal" data-target=".id<?= $f['id'] ?>">
                    <div class="card bg-dark text-white">
                  
                        <img src="<?= base_url('assets/img/dam/').$f['img_link'] ?>" class="card-img" alt="...">

                        <!-- <img src="../5a28d563aa6e96.1476758515126255076981.png" width="200px" height="250px"  class="card-img" alt="..."> -->
                        <div class="card-img-overlay">
                            <!-- <ul class="list-unstyled mt-3 mb-4">
                                <li>10 users included</li>
                                <li>2 GB of storage</li>
                                <li>Email support</li>
                                <li>Help center access</li>
                            </ul> -->
                        </div>
                    </div>
                    </a>
                    <div>
                        <a type="a" href="<?=base_url('/dagang/rtwo?id='.$f['id'])?>" class="btn btn-lg btn-block btn-light">Contact us</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade bd-example-modal-lg id<?= $f['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="container-fluid text-center">
                <div class="row">
                  <div class="card col-md-4">
                    <img src="<?= base_url('/assets/img/dam/' . $f['img_link']) ?>" class="card-img-top" alt="">
                  </div>
                  <div class="col-md-3">
                    <h5><small>nama produk</small><br>
                      <strong><?= $f['nama_produk'] ?></strong></h5>
                    <h5>harga
                      <strong>Rp <?= $f['harga'] ?>.000,~</strong></h5>
                    <h5>stok
                      <?= $f['banyak_produk'] ?>
                    </h5>
                  </div>
                  <div class="col-md-5">
                    <h5>
                      desripsi: <br> <?= $f['deskripsi'] ?>.
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
        <?endforeach;?>

        <!-- end -->
    </div>
</div>