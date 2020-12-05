<div class="col-md-9">
    <div>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Electronics</li>
        </ol>
    </div>

    <div class="row">
        <div class="btn-group alg-right-pad">
            <button type="button" class="btn btn-default"><strong><?= $apidata['itm_total'] ?></strong> items</button>
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                    Sort Products &nbsp;
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <? foreach ($apidata['toko_detail']['Kategori']->data->items as $key => $value31) : ?>
                        <li><a href="#"><?= $value31->name ?></a></li>
                        <li class="divider"></li>
                    <? endforeach ?>

                </ul>
            </div>
        </div>
    </div>

    <div class="row">
        <? foreach ($apidata['apidata'] as $key => $value32) : ?>
            <div class="col-md-4 pt-2 pb-1 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                    <?
                    foreach ($value32['detail']->item->images as $key => $value2) : ?>
                        <? if ($key == 0) { ?>
                            <img src="<?= 'https://cf.shopee.co.id/file/' . $value2 ?>" alt="" />
                        <? } ?>
                    <? endforeach ?>
                    <div class="caption">
                        <h4><a href="#"><? $kata = $value32['detail']->item->name;
                                        $jm_K = strlen($kata);
                                        if ($jm_K >= 25) {
                                            echo substr($kata, 0, 24) . '...';
                                        } else {
                                            echo $kata;
                                        } ?></a></h4>
                        <p>Harga : <strong>Rp <?= $value32['harga'] ?></strong> </p>
                        <p><a href="#">Detail</a></p>
                        <p></p>
                        <p>
                            <? $kata = '';
                            foreach ($value32['detail']->item->attributes as $key => $value3) : ?>
                                <? $kata = $kata . $value3->value;
                                if (strlen($kata) > 20) {
                                    // echo substr($kata, 0, 1) . '...';
                                } else {
                                    echo $kata . '.';
                                }
                                if ($key == 0) {
                                    break;
                                } ?>
                            <? endforeach; ?>
                        </p>
                        <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
                    </div>
                </div>
            </div>
        <? endforeach; ?>

        <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
                <img src="<?= base_url('/assets/bs-digishop-mini/') ?>assets/img/dummyimg.png" alt="" />
                <div class="caption">
                    <h3><a href="#">Samsung Galaxy </a></h3>
                    <p>Price : <strong>$ 3,45,900</strong> </p>
                    <p><a href="#">Ptional dismiss button </a></p>
                    <p>Ptional dismiss button in tional dismiss button in </p>
                    <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center col-sm-6 col-xs-6">
            <div class="thumbnail product-box">
                <img src="<?= base_url('/assets/bs-digishop-mini/') ?>assets/img/dummyimg.png" alt="" />
                <div class="caption">
                    <h3><a href="#">Samsung Galaxy </a></h3>
                    <p>Price : <strong>$ 3,45,900</strong> </p>
                    <p><a href="#">Ptional dismiss button </a></p>
                    <p>Ptional dismiss button in tional dismiss button in </p>
                    <p><a href="#" class="btn btn-success" role="button">Add To Cart</a> <a href="#" class="btn btn-primary" role="button">See Details</a></p>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <ul class="pagination alg-right-pad">
            <li><a href="#">&laquo;</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>

</div>

</div>