<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?><span>jika ingin Menpapat Token tekan link ini <?= $pas ?></span></h1>
    <div>

    </div>

    <? foreach ($tag as $key => $aas) : ?>
        <form action="http://localhost/CODE/ws/admin/wp_get_token" method="POST">
            <div class="row">
                <div class="col-md-12 form-group">
                    <label for="exampleFormControlInput1"><?= $aas['tag'] ?></label>
                    <input type="hidden" name="tag" value="<?= $aas['tag'] ?>">
                    <input type="text" name="value" value="<?= $aas['value'] ?>" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">kirim</button>
                </div>
            </div>
        </form>
    <? endforeach ?>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->