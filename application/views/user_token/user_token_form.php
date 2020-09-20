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
        <h2 style="margin-top:0px">User_token <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('email') ?></label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Token <?php echo form_error('token') ?></label>
            <input type="text" class="form-control" name="token" id="token" placeholder="Token" value="<?php echo $token; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Date Created <?php echo form_error('date_created') ?></label>
            <input type="text" class="form-control" name="date_created" id="date_created" placeholder="Date Created" value="<?php echo $date_created; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('user_token') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>