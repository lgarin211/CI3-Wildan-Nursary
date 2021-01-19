<div class="container card">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <? if (!empty($sel)) :?>
        <h3 class="text-center alert-success"><?=$sel?></h3>
    <?endif?>

    <h1 class="text-center">Jika Ada yang ingin di Kosongkan Harap Tuliskan #</h1>
    <ul class="list-group row">
        <? foreach ($all as $key => $pas) : ?>
            <li class="list-group-item ">
                <form action="<?= base_url('/Setting') ?>" method="POST">
                    <div class="input-group mb-3">
                        <input type="hidden" name="id" value="<?= $pas['id'] ?>">
                        <input type="hidden" name="dos" value="<?= $pas['Dock'] ?>">
                        <span class="input-group-text col-md-3" id="basic-addon1"><?= $pas['Dock'] ?></span>
                        <input type="text" class="col-md-8 input-group-text" name="value" value="<?= $pas['Value'] ?>">
                        <button type="submit" class="btn btn-primary">kirim</button>
                    </div>
                </form>
            </li>
        <? endforeach ?>
    </ul>
</div>
</div>