
  <form action="<?= base_url('/dagang/rone')?>" method="post">
        <input type="hidden" name="idbarang" value="<?=$a->id?>">
        <input type="hidden" name="sesi" value="<?=$sas;?>">
<button type="submit" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart add-to-cart-loop" ><span>Tambah ke keranjang</span>
</button>
</form>