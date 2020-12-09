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
        <h2 style="margin-top:0px">V2 <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="longtext">Json Data <?php echo form_error('Json_data') ?></label>
            <input type="text" class="form-control" name="Json_data" id="Json_data" placeholder="Json Data" value="<?php echo $Json_data; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">ID Shope <?php echo form_error('ID_Shope') ?></label>
            <input type="text" class="form-control" name="ID_Shope" id="ID_Shope" placeholder="ID Shope" value="<?php echo $ID_Shope; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Link Shopie <?php echo form_error('Link_Shopie') ?></label>
            <input type="text" class="form-control" name="Link_Shopie" id="Link_Shopie" placeholder="Link Shopie" value="<?php echo $Link_Shopie; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('v2_asses') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>