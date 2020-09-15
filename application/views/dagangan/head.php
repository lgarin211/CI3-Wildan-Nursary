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

    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>


  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <!-- <h5 class="">Company name</h5> -->
  <a class="navbar-brand my-0 mr-md-auto font-weight-normal" href="<?=base_url('/');?>">
    <img src="<?=base_url('assets/img/produk/head.jpg');?>" width="150px"  class="d-inline-block align-top" alt="" loading="lazy">
  </a>
  <nav class="my-2 my-md-0 mr-md-3">
  <a class="btn btn-outline-primary" href="<?=base_url('/')?>">HOME</a>
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    menu
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
    <a class="dropdown-item btn btn-primary" href="<?=base_url('/auth')?>">Sign up</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Separated link</a>
  </div>
    <!-- <a class="p-2 text-dark" href="#">Features</a> -->
  </nav>
  <a class="nav-link" href="<?=base_url('/dagang/keranjang')?>" ><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter"><?=$keranjang?></span></a>

</div>
  