<div class="row ">
    <div class="col-md-3">
        <div id="myCarousel" class="carousel slide col-md" data-ride="carousel">
            <ol class="carousel-indivators">
                <? foreach ($apidata['detail']->item->images as $key => $valuedam) : ?>
                    <!-- <li data-target="#myCarousel" data-slide-to="<?= $key ?>" class="active"></li> -->
                <? endforeach; ?>
            </ol>
            <div class="carousel-inner">
                <? foreach ($apidata['detail']->item->images as $key => $valuedim) : ?>
                    <div class="carousel-item <? if ($key == 0) {
                                                    echo " active";
                                                } ?>">
                        <img src="https://cf.shopee.co.id/file/<?= $valuedim ?>" alt="" srcset="" class="bd-placeholder-img card imh-rela" width="100%" height="100%">
                        <div class="container">
                            <div class="carousel-caption text-center">
                            </div>
                        </div>
                    </div>
                <? endforeach; ?>
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
    <div class="jumbotron col-md-6">

        <div class="row">
            <div class="mt-1 col-md-7">
                <h3>Nama Produk :</h3> <?= ($apidata['detail']->item->name) ?>
            </div>
            <div class="mt-1 col-md-5">
                <h3>Harga Produk :</h3> <?= ($apidata['detail']->item->price_max) ?>
            </div>
            <div class="mt-1 col-md-12">
                <h3>Desripsi Produk :</h3> <?= ($apidata['detail']->item->description) ?>
            </div>
            <div class="mt-1 col-md-6">
                <h3>Asal Produk :</h3> <?= ($apidata['detail']->item->shop_location) ?>
            </div>
            <div class="mt-1 col-md-6">
                <h3>Abaut Produk :</h3>
                <ul>
                    <? $dom = ['Merek', 'Impor/Lokal', 'Tipe'];
                    foreach ($apidata['detail']->item->attributes as $key => $value) {
                        echo '<li>' . $value->name . ' : ' . $value->value . '</li>';
                    } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= base_url('dagang/rone') ?>" method="post">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="idbarang" value="<?= ($apidata['detail']->item->itemid) ?>">
                        <input type="hidden" name="Harga" value="<?= ($apidata['detail']->item->price_max) ?>">
                        <input type="hidden" name="sesi" value="<?= $_SESSION['semi_id'] ?>">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-cart-plus fa-fw"></i>
                            |Masukan Keranjang
                        </button>
                    </form>
                </div>
                <div class="col-md-6">
                    <?$text='Hallo Saya Tertarik dengan Produk>>'.base_url('/Dagang/detail?id=').$apidata['detail']->item->itemid.'>>apa Produkini masih ada?';
                    $text=str_replace(" ","%20",$text);
                    $text=str_replace(">>","%0A",$text);
                    ?>
                    <a href="<?='https://api.whatsapp.com/send?phone=62'.$asesoris['No_HP'].'&text='.$text; ?>" target="_blank" class="btn btn-primary" role="button">Contak Seller</a>
                </div>

            </div>
        </div>
    </div>
</div>