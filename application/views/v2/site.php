<div class="row">
    <div class="col-md-3">
        <div class="text-center">
            <div>
                <a href="#" class="list-group-item active">artikel<span class="label label-primary pull-right"><?= $artikelv2['total'] ?>
                </a>
                <ul class="list-group">

                    <? foreach ($artikelv2['artikel'] as $key => $valueds) : ?>
                        <li class="list-group-item"><a href="<?= base_url('/Dagang/v2') . '?bagian=1&id=' . $valueds->ID ?>"><?= $valueds->title ?></a>
                            <span class="label label-primary pull-right"><a href="<?= base_url('/Dagang/v2') . '?bagian=1&id=' . $valueds->ID ?>"><?= 'baca' ?></a></span>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>
        <div>
            <ul class="list-group text-center">
                <li class="list-group-item list-group-item-success"><a href="#"><img src="https://id-test-11.slatic.net/p/00e58800ee8d1721987edcfb7e5717c7.png" width="50px" alt=""></a></li>
                <li class="list-group-item list-group-item-success"><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Shopee_logo.svg/1200px-Shopee_logo.svg.png" width="50px" alt=""></a></li>
                <li class="list-group-item list-group-item-info"><a href="#">New Products Added</a></li>
                <li class="list-group-item list-group-item-warning"><a href="#">Ending Soon Offers</a></li>
                <li class="list-group-item list-group-item-danger"><a href="#">Just Ended Offers</a></li>
            </ul>
        </div>

        <!-- <div class="well well-lg offer-box offer-colors">


            <span class="glyphicon glyphicon-star-empty"></span>25 % off , GRAB IT

            <br />
            <br />
            <div class="progress progress-striped">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                    <span class="sr-only">70% Complete (success)</span>
                    2hr 35 mins left
                </div>
            </div>
            <a href="#">click here to know more </a>
        </div> -->

    </div>