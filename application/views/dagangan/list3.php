<div class="container">
    <div class="row">
        <!-- start -->
        <?foreach ($gas as $key => $f):?>
        
        <div class="col-md-4">
            <div class="card mb-4 bg-light shadow-sm">
                <div class="card-header bg-light">
                    <h4 class="my-0 text-center pilk font-weight-normal"><?= $f['nama_produk'] ?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                    </div>
                    <div class="card bg-dark text-white">
                        <img src="<?= base_url('assets/img/dam/').$f['img_link'] ?>" class="card-img" alt="..." width="100%" height="100%">
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
                    <div>
                        <a type="a" href="<?=base_url('/dagang/rtwo?id='.$f['id'])?>" class="btn btn-lg btn-block btn-light">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
        <?endforeach;?>

        <!-- end -->
    </div>
</div>