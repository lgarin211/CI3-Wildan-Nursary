<link rel="stylesheet" href="">
<div class="container">
  <div class="row">
    <div class="col-md-5 table-responsive">
      <table class="table table-sm">
        <tbody>
          <tr>
            <? foreach ($isi as $key => $items) : ?>
              <td scope="row" colspan="1">
                <div class="col-md-12 text-center">
                  <a href="<?= base_url('/') . 'Dagang/detail?id=' . $items['detail']->item->itemid ?>">
                    <img class="img-fluid rounded-circle" src="<? echo 'https://cf.shopee.co.id/file/' . $items['detail']->item->image; ?>" width="150px">
                  </a>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <? if ($items['quantity'] > 1) : ?>
                          <a type="button" href="<?= base_url('/dagang/updatev2') . '?idbarang=' . $items['detail']->item->itemid . '&sesi=' . $_SESSION['semi_id'] . '&now=' . ($items['quantity'] - 1) ?>" class="btn btn-warning">-</a>
                        <? endif ?>
                        <a href="<?= base_url('/dagang/hapus') . '?idbarang=' . $items['detail']->item->itemid . '&sesi=' . $_SESSION['semi_id'] ?>" type="button" class="btn btn-danger">Deleted</a>
                        <a type="button" href="<?= base_url('/dagang/updatev2') . '?idbarang=' . $items['detail']->item->itemid . '&sesi=' . $_SESSION['semi_id'] . '&now=' . ($items['quantity'] + 1) ?>" class="btn btn-warning">+</a>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
              <td>
                <ul class="list-group">
                  <li class="list-group-item">
                    <? echo $items['detail']->item->name ?>
                    <span class="badge bg-primary rounded-pill">x<? echo $items['quantity']; ?></span>
                  </li>
                  <li class="list-group-item">
                    <? echo $items['total']; ?>
                  </li>
                </ul>
              </td>
          </tr>
        <? endforeach; ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-3 col-lg-4 order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge bg-secondary rounded-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <? foreach ($isi as $key => $items) : ?>
          <li class="list-group-item d-flex justify-content-between text-center lh-sm">
            <div>
              <h6 class="my-0"><? echo $items['detail']->item->name ?></h6>
              <small class="text-muted"><? echo $items['quantity']; ?></small>
            </div>
            <span class="text-muted"><? echo $items['total']; ?></span>
          </li>
        <? endforeach; ?>

        <li class="list-group-item d-flex justify-content-between">
          <span>Total (Rupiah)</span>
          <strong>Rp.<? echo $seluruh; ?></strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">

          <? $dos = '';
          foreach ($isi as $key => $items) {
            $dos = $dos . base_url('/Dagang/detail?id=') . $items['detail']->item->itemid . ' x ' . $items['quantity'] . '%0A ';
          }
          $dos = 'saya hendak membeli%0A  '.$dos . '%0A dengan harga total ' . $items['total'];
          
          ?>
          <input type="text" class="form-control" placeholder="Promo code">
          <a type="button" target="_blank" href="<?='https://api.whatsapp.com/send?phone=62'.$asesoris['No_HP'].'&text='.$dos;?>" class="btn btn-secondary">Redeem</a>
        </div>
      </form>
    </div>
  </div>
</div>