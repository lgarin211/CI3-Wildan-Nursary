<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Welcome</title>


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- <link rel="stylesheet" href="<?= base_url('assets/multiverse/') ?>assets/css/main.css" /> -->
  <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-link is-preload">

  <div class="bg-light site-header sticky-top">
    <div class=" bg-link d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 border-bottom shadow-sm">
      <!-- <h5 class="">Company name</h5> -->
      <a class="navbar-brand my-0 mr-md-auto font-weight-normal" href="<?= base_url('/'); ?>">
        <img src="<?= base_url('assets/img/produk/head.jpg'); ?>" width="150px" class="d-inline-block align-top" alt="" loading="lazy">
      </a>
      <nav class=" navbar navbar-expand-lg navbar-light ">
        <button class="mx-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse mx-auto navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="pr-3 nav-item mx-auto">
              <a class="" href="<?= base_url('/') ?>">
                <h4 class="mass pilk " id="ding1">Home</h4>
              </a>
            </li>
            <li class="pr-3 nav-item mx-auto">
              <a class="" href="<?= base_url('/ot') ?>">
                <h4 class="mass pilk ding2">Tentang Kami</h4>
              </a>
            </li>
            <li class="pr-3 nav-item mx-auto">
              <a class="" href="<?= base_url('/dagang/gales') ?>">
                <h4 class="mass pilk ding3">Produk</h4>
              </a>
            </li>

          </ul>
        </div>
      </nav>
      <!-- <nav class="my-2 my-md-0 mr-md-3">



      </nav> -->
      <div class="row">
        <a href="<?= base_url('/auth') ?>">
          <i class="border border-primary rounded-circle fas fa-user-alt fa-fw"></i></a>
        <a class="" href="<?= base_url('/dagang/keranjang') ?>"><i class="fas fa-box-open fa-fw"></i><span class="badge badge-danger badge-counter"><?= $keranjang ?></span></a>
      </div>

    </div>
  </div>
