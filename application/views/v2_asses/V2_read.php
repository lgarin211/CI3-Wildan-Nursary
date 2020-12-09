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
        <h2 style="margin-top:0px">V2 Read</h2>
        <table class="table">
	    <tr><td>Json Data</td><td><?php echo $Json_data; ?></td></tr>
	    <tr><td>ID Shope</td><td><?php echo $ID_Shope; ?></td></tr>
	    <tr><td>Link Shopie</td><td><?php echo $Link_Shopie; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('v2_asses') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>