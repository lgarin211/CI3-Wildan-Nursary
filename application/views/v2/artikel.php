<div class="col-md-8 container">
    <div class="jumbotron">
        <div class="blog-post">
            <h2 class="blog-post-title"><?= $isi->title ?></h2>
            <p class="blog-post-meta card"><?= $isi->modified ?> by <a href="#"><?= $isi->author->name ?></a></p>
            <div class="text-justify">
                <?= $isi->content ?>
            </div>
        </div>
    </div>
</div>