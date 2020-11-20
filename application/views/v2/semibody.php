<div class="container">
    <div class="row">
        <div class="col-md-9">

            <!-- start slider-->
            <div class="main box-border">

                <div id="mi-slider" class="mi-slider">
                    <? foreach ($cos as $key => $value) : ?>
                        <ul>
                            <? foreach ($value as $ke => $value2) : ?>
                                <li><a href="#">
                                        <img src="<?= base_url('assets/img/dam/') . $value2['img_link']; ?>" alt="img01">
                                        <h4><?= $value2['id'] ?></h4>
                                    </a></li>
                            <? endforeach; ?>

                        </ul>
                    <? endforeach; ?>
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

    <div class="row">
        <div class="col-md-3">


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
                    <button type="button" class="btn btn-default"><strong>1235 </strong>items</button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                            Sort Products &nbsp;
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">By Price Low</a></li>
                            <li class="divider"></li>
                            <li><a href="#">By Price High</a></li>
                            <li class="divider"></li>
                            <li><a href="#">By Popularity</a></li>
                            <li class="divider"></li>
                            <li><a href="#">By Reviews</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <? foreach ($one as $key => $value) : ?>
                    <div class="col-md-4 text-center col-sm-6 col-xs-6">
                        <div class="thumbnail product-box">
                            <img src="<?= base_url('/assets/img/dam/') . $value['img_link'] ?>" alt="" />
                            <div class="caption">
                                <h3><a href="#"><?= $value['nama_produk'] ?></a></h3>
                                <p>Harga : <strong>Rp <?= $value['harga'] ?></strong> </p>
                                <p><a href="#">Detail</a></p>
                                <p></p>
                                <p><?= $value['deskripsi'] ?> </p>
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