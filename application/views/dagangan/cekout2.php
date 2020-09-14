<!-- .'<br>';
            echo '<small>keterangan: email= '.$link['email'].',alamat penerima= '.$link['alamat'];?> -->
       <?$phone='628888360409'?>
       <?php $kalimat = "saya ".$link['namapembeli'].'>> akan membeli '.$link['nama'].'>> sebanyak '.$link['banyak'].'>>,keterangan: email= '.$link['email'].',alamat penerima= '.$link['alamat'].'pesan untuk anda='.$link['pesan'];?>
<div class="container">       
<div class="card">
  <div class="card-body">
  <h4 class="card-title">Paket anda</h5>
    <h3 class="card-text">
 bapak/ibu '<?=$link['namapembeli']?> anda akan membeli <a href=""><?=$link['nama']?></a> dengan harga total Rp.<?=$link['harga']?>.000,~</h3>   
    <p class="card-text">
        <small class="text-muted">
        keterangan : </small>
        <ul>
            <li>alamat penerima: <?=$link['alamat']?></li>
            <li>email penerima: <?=$link['email']?></li>
            <li>pesan pengirim: <?=$link['pesan']?></li>
        </ul>
    </p>
    <a href="https://api.whatsapp.com/send?phone=<?=$phone?>&text=<?$a=str_replace(" ","%20",$kalimat);echo str_replace(">>","%0A",$a)?>" class="btn btn-primary">chat penjual</a>
  </div>
  <img src="<?=base_url('assets/img/dam/').$link['gambar']?>" height="500px" class="card-img-top" alt="...">
</div>

<div class="card mb-3">

  <div class="card-body">
  </div>
</div>
</div>
</div>