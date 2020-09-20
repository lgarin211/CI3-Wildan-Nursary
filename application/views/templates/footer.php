<link rel="stylesheet" href="<?=base_url('assets/two.css'); ?>">            <!-- Footer -->
<footer class="bg-hijau_c b border-top">
<div class="row bg-black_c">
        <div class="col-12 col-md">
            <div class="text-left">
            <img class="mb-2" src="<?=base_url('assets/img/produk/head.jpg');?>" alt="" width="150px" >
            <h5 class="d-block mb-3 text-muted">Menjual berbagai jenis tanaman hias, tanaman lindung, tanaman buah, tanaman obat dll.</h5>
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
              <li><a class="text-muted" href="#"><small>alamat : </small>Jl. Bojong Kaler Rt.01/04 Kel.Bojongkerta Kec.Bogor Selatan - Bogor 16139</a></li>
              <li><a class="text-muted" href="#"><small>contak : </small>0896 7355 4066 - 085771970103</a></li>
            </ul>
          </div>
        </div>
        </div>

        <div class="container my-auto">
                    <div class="copyright pt-3 bg-hijau_c text-center my-auto">
                        <span>Copyright &copy; Wildan Nursery <?= date('Y'); ?></span>
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