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
        <h2 style="margin-top:0px">V2_call_required Read</h2>
        <table class="table">
	    <tr><td>Dock</td><td><?php echo $Dock; ?></td></tr>
	    <tr><td>Value</td><td><?php echo $Value; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('v2_asses_call_required') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>