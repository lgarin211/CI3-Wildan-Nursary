<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Chart Read</h2>
        <table class="table">
	    <tr><td>Item</td><td><?php echo $item; ?></td></tr>
	    <tr><td>Id User</td><td><?php echo $id_user; ?></td></tr>
	    <tr><td>Quantity</td><td><?php echo $quantity; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('chart') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>