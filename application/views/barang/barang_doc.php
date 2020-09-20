<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Barang List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Produk</th>
		<th>Banyak Produk</th>
		<th>Deskripsi</th>
		<th>Harga</th>
		<th>Img Link</th>
		<th>Kategory</th>
		
            </tr><?php
            foreach ($barang_data as $barang)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $barang->nama_produk ?></td>
		      <td><?php echo $barang->banyak_produk ?></td>
		      <td><?php echo $barang->deskripsi ?></td>
		      <td><?php echo $barang->harga ?></td>
		      <td><?php echo $barang->img_link ?></td>
		      <td><?php echo $barang->kategory ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>