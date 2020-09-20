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
        <h2 style="margin-top:0px">User_access_menu Read</h2>
        <table class="table">
	    <tr><td>Role Id</td><td><?php echo $role_id; ?></td></tr>
	    <tr><td>Menu Id</td><td><?php echo $menu_id; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('user_access_menu') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>