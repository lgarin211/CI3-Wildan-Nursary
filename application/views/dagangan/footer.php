<link rel="stylesheet" href="<?=base_url('assets/two.css'); ?>">            <!-- Footer -->
<footer class="bg-light b border-top">
<div class="row bg-link">
        <div class="col-12 ml-2 col-md">
            <div class="text-left">
            <img class="mb-2" src="<?=base_url('assets/img/produk/head.jpg');?>" alt="" width="150px" >
            <h5 class="d-block mb-3  mag"><?=$asesoris[1][0]->text_alig?></h5>
          </div>
        </div>
          <div class="col-12 col-md">
              <div class="text-center">
            <ul class="list-unstyled text-small">
            <li><h5><a href="<?=base_url('/')?>">Home</a></h5></li>
            <li><h5><a href="<?=base_url('/ot')?>">Galery</a></h5></li>
            <li><h5><a href="<?=base_url('/ot/abaut')?>">tentang kami</a></h5></li>
            </ul>
         </div>
         </div>
          <div class="col-12 col-md">
        <div class="text-right pr-3">
            <h5>contak</h5>
            <ul class="list-unstyled text-small">
              <li><a class=" mag" href="#"><small class="mag">alamat : </small><?=$asesoris[3][0]->text_alig?></a></li>
              <li><a class=" mag" href="#"><small class="mag">contak : </small><?=$asesoris[4][0]->text_alig?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-12 mx-auto">
                    <div class="copyright pt-3 bg-light text-center my-auto">
                        <span>Copyright &copy; Wildan linkery <?= date('Y'); ?></span>
                        <br>
                    </div>
        </div>
        </div>
      </footer>
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

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

            </body>

            </html> 