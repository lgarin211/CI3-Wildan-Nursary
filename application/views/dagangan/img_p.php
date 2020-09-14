<?php echo $one->nama_produk;?>
<div class="card container">
<h1>harap Perhatin!</h1>
<p>produk <?=$one->nama_produk;?> harus memakukan value baru untuk Poseter produk </p>
<?php echo form_open_multipart('Dagang/Uone');?>

<input type="file" name="userfile" size="20" />
<input type="hidden" name="id" value="<?=$one->id;?>" >
<br/><br/>

<input type="submit" value="upload" />

</form>
<hr>
</div>