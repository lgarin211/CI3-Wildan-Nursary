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
        <h2 style="margin-top:0px">V2_call_required <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="Dock">Dock <?php echo form_error('Dock') ?></label>
            <textarea class="form-control" rows="3" name="Dock" id="Dock" placeholder="Dock"><?php echo $Dock; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="Value">Value <?php echo form_error('Value') ?></label>
            <textarea class="form-control" rows="3" name="Value" id="Value" placeholder="Value"><?php echo $Value; ?></textarea>
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('v2_asses_call_required') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>