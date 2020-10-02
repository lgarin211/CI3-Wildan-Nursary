    <div class="container ">
        <div class="row">
        <div class="col-md-3 mx-auto card" style="max-width: 50%;">
            <img src="<?=base_url('assets/img/dam/').$one[0]->img_link?>" class="card-img " width="50px" alt="">
        </div>
        <div class="col-md card">
         <h1 class="card-title"><small>produk</small> <?=$one[0]->nama_produk?></h1>
         <p class="card-text">desripsi: <br> <?=$one[0]->deskripsi?>.</p>
         <h5 class="card-title">Rp.<?=$one[0]->harga?></h5>
         <h5 class="card-title">stok<?=$one[0]->banyak_produk?></h5>
         <p class="card-text"><small class="text-muted">
             <a class="btn btn-primary" href="<?=base_url('dagang/beli?id=').$one[0]->id;?>">beli sekarang</a>
         </small></p>
        </div>
        <div class="col-md-5">

        <!-- here -->
        </div>        
        </div>
    </div>

    <progress class="col-md"></progress>

    <div id="myCarousel" class="carousel slide col-md blockquote-footer" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?=base_url('assets/')?>img/produk/head.jpg" alt="" srcset="" class="bd-placeholder-img card" width="100%" height="300px">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 class="text-danger">Example headline.</h1>
            <p  class="text-danger">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p>
              <a class="btn btn-lg btn-primary" href="#" role="button">DAFTAR SEKARANG</a>
          </p>
          </div>
        </div>
      </div>
      <?foreach ($two as $key => $k) :?>
      <div class="carousel-item">
        <img src="<?=base_url('assets/img/dam/').$k->img_link?>" alt="" srcset="" class="bd-placeholder-img card" width="100%" height="300px">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="text-primary">RP.<?=$k->harga?>.000,~</h1>
            <h2 class="text-primary"><?=$k->nama_produk?></h2>
            <p><?=$k->nama_produk?></p>
            <p>
              <a class="btn btn-primary" href="<?=base_url('/dagang/Rtwo?id=').$k->id?>">view</a>
          </p>
          </div>
        </div>
      </div>
      <?endforeach;?>

    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true">

      </span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true">

      </span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>
</div>
