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
        <h2>Chart List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Item</th>
		<th>Id User</th>
		<th>Quantity</th>
		<th>Harga</th>
		
            </tr><?php
            foreach ($chart_asses_data as $chart_asses)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $chart_asses->item ?></td>
		      <td><?php echo $chart_asses->id_user ?></td>
		      <td><?php echo $chart_asses->quantity ?></td>
		      <td><?php echo $chart_asses->harga ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>