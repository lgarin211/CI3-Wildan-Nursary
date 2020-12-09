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
        <h2 style="margin-top:0px">User List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('user_asses/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('user_asses/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('user_asses'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Image</th>
		<th>Password</th>
		<th>Role Id</th>
		<th>Is Active</th>
		<th>Date Created</th>
		<th>Setsesion</th>
		<th>Action</th>
            </tr><?php
            foreach ($user_asses_data as $user_asses)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $user_asses->name ?></td>
			<td><?php echo $user_asses->email ?></td>
			<td><?php echo $user_asses->image ?></td>
			<td><?php echo $user_asses->password ?></td>
			<td><?php echo $user_asses->role_id ?></td>
			<td><?php echo $user_asses->is_active ?></td>
			<td><?php echo $user_asses->date_created ?></td>
			<td><?php echo $user_asses->setsesion ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('user_asses/read/'.$user_asses->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('user_asses/update/'.$user_asses->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('user_asses/delete/'.$user_asses->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('user_asses/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('user_asses/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>