<div class="container-fluid">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md"></div> -->
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide col-md" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <!-- <? foreach ($asesoris[2] as $key => $value) : ?>
                        <li data-target="#myCarousel" data-slide-to="<?= $key ?>" class="active"></li>
                    <? endforeach; ?> -->
                    </ol>
                    <div class="carousel-inner">
                        <? foreach ($asesoris[2] as $key => $value) : ?>
                            <div class="carousel-item <? if ($key == 0) {
                                                            echo " active";
                                                        } ?>">
                                <img src="<?= base_url('assets/img/produk/' . $value) ?>" alt="" srcset="" class="bd-placeholder-img card imh-rela" width="100%" height="100%">
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

    <div class="row">
        <div class="col-md-3">
        <div class="text-center">
                <div>
                    <a href="#" class="list-group-item active">artikel<span class="label label-primary pull-right"><?= $artikelv2['total'] ?>
                    </a>
                    <ul class="list-group">

                        <? foreach ($artikelv2['artikel'] as $key => $value) : ?>
                            <li class="list-group-item"><?= $value->title ?>
                                <span class="label label-primary pull-right"><?= $cos1[$key]; ?></span>
                            </li>
                        <? endforeach; ?>
                    </ul>
                </div>
            </div>
            <div>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-success"><a href="#">New Offer's Coming </a></li>
                    <li class="list-group-item list-group-item-info"><a href="#">New Products Added</a></li>
                    <li class="list-group-item list-group-item-warning"><a href="#">Ending Soon Offers</a></li>
                    <li class="list-group-item list-group-item-danger"><a href="#">Just Ended Offers</a></li>
                </ul>
            </div>

            <div class="well well-lg offer-box offer-colors">


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
            </div>

        </div>

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
                <? foreach ($apidata['apidata'] as $key => $value) : ?>
                    <div class="col-md-4 pt-2 pb-1 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <?
                            foreach ($value['detail']->item->images as $key => $value2) : ?>
                                <? if ($key == 0) { ?>
                                    <img src="<?= 'https://cf.shopee.co.id/file/' . $value2 ?>" alt="" />
                                <? } ?>
                            <? endforeach ?>
                            <div class="caption">
                                <h4><a href="#"><? $kata = $value['detail']->item->name;
                                                $jm_K = strlen($kata);
                                                if ($jm_K >= 25) {
                                                    echo substr($kata, 0, 24) . '...';
                                                } else {
                                                    echo $kata;
                                                } ?></a></h4>
                                <p>Harga : <strong>Rp <?= $value['harga'] ?></strong> </p>
                                <p><a href="#">Detail</a></p>
                                <p></p>
                                <p>
                                    <? $kata = '';
                                    foreach ($value['detail']->item->attributes as $key => $value3) : ?>
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
    <div class="row">
        <div class="col-md-9">

            <!-- start slider-->
            <div class="main box-border">

                <div id="mi-slider" class="mi-slider">
                    <!-- <? foreach ($cos as $key => $value) : ?> -->
                    <ul>
                        <!-- <? foreach ($value as $ke => $value2) : ?> -->
                        <li><a href="#">
                                <img src="<?= base_url('assets/img/dam/') . $value2['img_link']; ?>" alt="img01">
                                <h4><small>Rp.</small><?= $value2['harga'] ?>.000,~</h4>
                            </a></li>
                        <!-- <? endforeach; ?> -->

                    </ul>
                    <!-- <? endforeach; ?> -->
                    <nav>
                        <? foreach ($kategori[1] as $key => $value) : ?>
                            <a href="#"><?= $value->value ?></a>
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
                    <? foreach ($pasing as $key => $value) : ?>
                        <li class="list-group-item"><?= $value->value ?>
                            <span class="label label-primary pull-right"><?= $cos1[$key]; ?></span>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
        </div>

    </div>
</div>

</div>



<!--Footer -->
<div class="col-md-12 footer-box">

    <div class="row">
        <div class="col-md-4">
            <strong>Send a Quick Query </strong>
            <hr>
            <form>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" required="required" placeholder="Email address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit Request</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-4">
            <strong>Our Location</strong>
            <hr>
            <p>
                234, New york Street,<br />
                Just Location, USA<br />
                Call: +09-456-567-890<br>
                Email: info@yourdomain.com<br>
            </p>

            2014 www.yourdomain.com | All Right Reserved
        </div>
        <div class="col-md-4 social-box">
            <strong>We are Social </strong>
            <hr>
            <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
            <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
            <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
            <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec nisl odio. Mauris vehicula at
                nunc id posuere. Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
            </p>
        </div>
    </div>
    <hr>
</div>

<div class="col-md-12 end-box ">
    &copy; 2014 | &nbsp; All Rights Reserved | &nbsp; www.yourdomain.com | &nbsp; 24x7 support | &nbsp; Email us:
    info@yourdomain.com
</div>

<!--Footer end -->
<!-- my -->
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });



    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });

    });
</script>
<!-- endmy -->
<!--Core JavaScript file  -->
<script src="<?= base_url('/assets/bs-digishop-mini/') ?>assets/js/jquery-1.10.2.js"></script>
<!--bootstrap JavaScript file  -->
<script src="<?= base_url('/assets/bs-digishop-mini/') ?>assets/js/bootstrap.js"></script>
<!--Slider JavaScript file  -->
<script src="<?= base_url('/assets/bs-digishop-mini/') ?>assets/ItemSlider/js/modernizr.custom.63321.js"></script>
<script src="<?= base_url('/assets/bs-digishop-mini/') ?>assets/ItemSlider/js/jquery.catslider.js"></script>
<script>
    $(function() {

        $('#mi-slider').catslider();

    });
</script>
</body>