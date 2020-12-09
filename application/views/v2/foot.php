</div>

</div>
<!--Footer -->
<div class="col-md-12 footer-box">

    <div class="row">
        <div class="col-md-4">
            <strong>Send a Quick Query </strong>
            <hr>
            <!-- <form> -->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input id="dom" type="text" class="form-control" required="required" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <input id='dos' type="text" class="form-control" required="required" placeholder="Email address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea id='dor' name="message" id="message" required="required" class="form-control" rows="3" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input id='no' type="hidden" value="<?=$asesoris['No_HP'];?>">
                            <button type="submit" onclick="lord()" class="btn btn-primary">Submit Request</button>
                        </div>
                    </div>
                </div>
            <!-- </form> -->
        </div>
<script>
function lord(params) {
    var no=document.getElementById('no').value    
    var dom=document.getElementById('dom').value    
    var dos=document.getElementById('dos').value    
    var dor=document.getElementById('dor').value 
    window.open('https://api.whatsapp.com/send?phone=62'+no+'&text='+dor+' atas nama '+dom+' email '+dos);
}

  function klik(){

    }

</script>

        <div class="col-md-4">
            <strong>Our Location</strong>
            <hr>
            <p>
                <?= $asesoris['Alamat'] ?><br>
                Call: <?= $asesoris['No_HP'] ?><br>
                Email: <?= $asesoris['email'] ?><br>
            </p>
        </div>
        <div class="col-md-4 social-box">
            <strong>We are Social </strong>
            <a href="#"><i class="fa fa-facebook-square fa-3x "></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-3x "></i></a>
            <a href="#"><i class="fa fa-google-plus-square fa-3x c"></i></a>
            <a href="#"><i class="fa fa-linkedin-square fa-3x "></i></a>
            <a href="#"><i class="fa fa-pinterest-square fa-3x "></i></a>
            <p>
                <?= $asesoris['text-foot'] ?>
            </p>
        </div>
    </div>
    <hr>
</div>

<div class="col-md-12 end-box ">
    <div class="row">
        <div class="col-md-10">
            &copy; <?= date('Y'); ?> | &nbsp; &nbsp; <?= base_url('') ?> | &nbsp; 24x7 support | &nbsp; Email us:
            <?= $asesoris['email'] ?>
        </div>
        <div class="col-md-2 end-box ">
            <img src="<?= base_url('assets/img/produk/head.jpg'); ?>" width="100px" class="">
        </div>
    </div>
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