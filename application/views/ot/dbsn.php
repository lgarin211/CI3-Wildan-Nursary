<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nama_bd</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>

  <?foreach ($has as $key => $a) :?>
    <tr>
      <th scope="row"><?=$a->id?></th>
      <td><?=$a->nama_db?></td>
      <td><a class="btn btn-danger" href="<?=base_url('/'.$a->nama_db)?>">view</a></td>
      <td></td>
    </tr>
  <?endforeach;?>
  </tbody>
</table>