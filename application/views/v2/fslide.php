<div class="row">
    <div class="col-md-9">

        <!-- start slider-->
        <div class="main box-border">

            <div id="mi-slider" class="mi-slider">
                <!-- <? foreach ($cos as $key => $valuedoc) : ?> -->
                <ul>
                    <!-- <? foreach ($valuedoc as $ke => $valuedoc2) : ?> -->
                    <li><a href="#">
                            <img src="<?= base_url('assets/img/dam/') . $valuedoc2['img_link']; ?>" alt="img01">
                            <h4><small>Rp.</small><?= $valuedoc2['harga'] ?>.000,~</h4>
                        </a></li>
                    <!-- <? endforeach; ?> -->

                </ul>
                <!-- <? endforeach; ?> -->
                <nav>
                    <? foreach ($kategori[1] as $key => $valuedoc3) : ?>
                        <a href="#"><?= $valuedoc3->value ?></a>
                    <? endforeach; ?>
                </nav>
            </div>

        </div>
        <!-- end slider -->
        <br />
    </div>
    <div class="col-md-3 text-center">
        <div>
            <a href="#" class="list-group-item active">Kategory
            </a>
            <ul class="list-group">
                <? foreach ($pasing as $key => $valuedoc4) : ?>
                    <li class="list-group-item"><?= $valuedoc4->value ?>
                        <span class="label label-primary pull-right"><?= $cos1[$key]; ?></span>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>

</div>