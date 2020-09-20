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
        <h2>User_access_menu List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Role Id</th>
		<th>Menu Id</th>
		
            </tr><?php
            foreach ($user_access_menu_data as $user_access_menu)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $user_access_menu->role_id ?></td>
		      <td><?php echo $user_access_menu->menu_id ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>