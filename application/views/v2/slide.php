<div class="container">
    <div class="row">
        <!-- <div class="col-md"></div> -->
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide col-md" data-ride="carousel">
                <ol class="carousel-indicators">
                    <!-- <? foreach ($asesoris[2] as $key => $valuedam) : ?>
                        <li data-target="#myCarousel" data-slide-to="<?= $key ?>" class="active"></li>
                    <? endforeach; ?> -->
                </ol>
                <div class="carousel-inner">
                    <? foreach ($asesoris[2] as $key => $valuedim) : ?>
                        <div class="carousel-item <? if ($key == 0) {
                                                        echo " active";
                                                    } ?>">
                            <img src="<?= base_url('assets/img/produk/' . $valuedim) ?>" alt="" srcset="" class="bd-placeholder-img card imh-rela" width="100%" height="100%">
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
    </div>
</div>