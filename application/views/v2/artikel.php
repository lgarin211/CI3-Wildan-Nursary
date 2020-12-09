<link rel="stylesheet" href="https://s0.wp.com/_static/??-eJydkttOwzAMhl+INNtATFwgniUH03nNSYnD6NvjZlCVDlUTihTFzv/Zjh15ScLEQBBI+iqSqz2GIi/JRC+KRwfjyupMKQ9ygWkX+xn0Kg9AGHqhVZYs/e25gRc5S9XFZEyEka336Fy8bOlP8QOy0FVrB0zT6GCWYzCuWnZPFVhVTsgBSucx3ErORRLfDzp+zoetvA6HiQJKygyiWTfyH21f2dSQe77JIF+6p24vdUVnp7Y1XGeVx1X5/w5DJ/D3hGnU4hFqjJVEn9HeXckqRFbTjNdzWOMmfmOHjpe0WGj2ib/RReeV5QG2j3X9kbN9hVCGSG3Q82Er2tRK9vukaFJ4sKjAcf8CbWHX1FqnDKUI3j1WL1rjW7o3/7p/3h13h8fjcXf+AlfPQ9s=?cssminify=yes">
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