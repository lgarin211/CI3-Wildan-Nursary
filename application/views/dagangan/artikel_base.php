<div class="container">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>blog.css" rel="stylesheet">
    <div class="jumbotron p-4 p-md-5 text-white rounded bg-success">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"><?= $tulis[0]->judul ?></h1>
            <p class="lead my-3"><?= $tulis[0]->head ?>,<?= $tulis[0]->isi_head ?></p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
                Wildan Nursary
            </h3>
            <div class="blog-post">
                <h2 class="blog-post-title"><?= $tulis[0]->head ?></h2>
                <p class="blog-post-meta"><?= $tulis[0]->tgl ?> by <a href="#"><?= $tulis[0]->penulis ?></a></p>

                <p><?= $tulis[0]->isi_head ?></p>
                <h3 class="blog-post-title"><?= $tulis[0]->sh_1 ?></h3>
                <p class="blog-post-meta">
                    <?= $tulis[0]->isi_s1 ?>
                </p>
                <h3><?= $tulis[0]->sh_2 ?></h3>
                <p class="blog-post-meta"><?= $tulis[0]->isi_s2 ?></p>
            </div>

        </div>
        <div class="col-md-4">
            <div class="p-4 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
            <div class="p-4">
                <h4 class="font-italic">artikel lain</h4>
                <ol class="list-unstyled mb-0">
                    <? foreach ($artikel as $key => $value) : ?>
                        <li><a href="<?= base_url('dagang/artikel?id=') . $paket['ids'][$key] ?>"><?= $paket['judul'][$key] ?></a></li>
                    <? endforeach; ?>
                </ol>
            </div>

        </div>
    </div>
    <!-- <div class="card"> -->
        <div class="container">
            <div class="row">
                <? foreach ($asesoris[5][0] as $key => $value) : ?>
                    <? $ims = $asesoris[5][1][$key]; ?>
                    <div class="col-md-4 text-center my-auto mx-auto">
                        <a href="<?= $ims ?>">
                            <img src="<?= $value ?>" width="50%" class="card-img-top" alt="">
                        </a>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</div>