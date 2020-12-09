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
        <h2>User List</h2>
        <table class="word-table" style="margin-bottom: 10px">
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
		
            </tr><?php
            foreach ($user_asses_data as $user_asses)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $user_asses->name ?></td>
		      <td><?php echo $user_asses->email ?></td>
		      <td><?php echo $user_asses->image ?></td>
		      <td><?php echo $user_asses->password ?></td>
		      <td><?php echo $user_asses->role_id ?></td>
		      <td><?php echo $user_asses->is_active ?></td>
		      <td><?php echo $user_asses->date_created ?></td>
		      <td><?php echo $user_asses->setsesion ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>