Nama Produk : <?= ($apidata['detail']->item->name) . '<br>' ?>
Harga Produk : <?= ($apidata['detail']->item->price_max) . '<br>' ?>
Desripsi Produk : <?= ($apidata['detail']->item->description) . 'popopopopopo<br>' ?>
Asal Produk : <?= ($apidata['detail']->item->shop_location) . '<br>' ?>
<?$dom=['Merek','Impor/Lokal','Tipe'];  foreach ($apidata['detail']->item->attributes as $key => $value) {
    echo $dom[$key].' : '.$value->value . '<br>';
} ?>


<?foreach ($apidata['detail']->item->images as $key => $value) : ?>
    <div class="mySlides fade">
        <div class="numbertext"><?=$key+1?></div>
        <!-- <img src="https://cf.shopee.co.id/file/<?= $value ?>" alt="" srcset=""> -->
        <!-- <div class="text">Caption Text</div> -->
    </div>
<? endforeach; ?>



<div class="col-md-3">
    <div id="myCarousel" class="carousel slide col-md" data-ride="carousel">
        <ol class="carousel-indicators">
            <? foreach ($apidata['detail']->item->images as $key => $valuedam) : ?>
                <li data-target="#myCarousel" data-slide-to="<?= $key ?>" class="active"></li>
            <? endforeach; ?>
        </ol>
        <div class="carousel-inner">
            <? foreach ($apidata['detail']->item->images as $key => $valuedim) : ?>
                <div class="carousel-item <? if ($key == 0) {
                                                echo " active";
                                            } ?>">
                    <img src="https://cf.shopee.co.id/file/<?= $valuedim?>" alt="" srcset="" class="bd-placeholder-img card imh-rela" width="100%" height="100%">
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