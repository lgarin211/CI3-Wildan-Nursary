<?$phone='628888360409';
            $produk='';
            foreach ($p as $key => $i) {$produk=$produk.','.$i[0]->nama_produk;} ?>
       <?php $kalimat = "saya ".$link['namapembeli'].'>> akan membeli '.$produk.'>> sebanyak '.$link['total'].'>>,keterangan: email= '.$link['telp'].',alamat penerima= '.$link['alamat'].'pesan untuk anda='.$link['pesan'];?>
<div class="container">       
<div class="card">
  <div class="card-body">
  <h4 class="card-title">Paket anda</h5>
    <h3 class="card-text">
 bapak/ibu '<?=$link['namapembeli']?> anda akan membeli <a href="">
        <ul><?foreach ($p as $key => $i) :?>
           <li><?=$i[0]->nama_produk?></li>
        <?endforeach?>
        </ul>
    </a> dengan harga total Rp.<?=$link['total']?>.000,~</h3>   
    <p class="card-text">
        <small class="text-muted">
        keterangan : </small>
        <ul>
            <li>alamat penerima: <?=$link['alamat']?></li>
            <li>telp penerima: <?=$link['telp']?></li>
            <li>pesan pengirim: <?=$link['pesan']?></li>
        </ul>
    </p>
    <a href="https://api.whatsapp.com/send?phone=<?=$no_admin?>&text=<?=$text?>" class="btn btn-primary">chat penjual</a>
  </div>
  <img src="<?=base_url('assets/img/dam/').'979349.jpg'?>" height="500px" class="card-img-top" alt="...">
</div>


<div class="card mb-3">

  <div class="card-body">
  </div>
</div>
</div>
</div>