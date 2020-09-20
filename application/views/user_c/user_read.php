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
        <h2 style="margin-top:0px">User Read</h2>
        <table class="table">
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Image</td><td><?php echo $image; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Role Id</td><td><?php echo $role_id; ?></td></tr>
	    <tr><td>Is Active</td><td><?php echo $is_active; ?></td></tr>
	    <tr><td>Date Created</td><td><?php echo $date_created; ?></td></tr>
	    <tr><td>Setsesion</td><td><?php echo $setsesion; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('user_c') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>