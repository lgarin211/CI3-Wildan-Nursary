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
        <h2>V2 List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Json Data</th>
		<th>ID Shope</th>
		<th>Link Shopie</th>
		
            </tr><?php
            foreach ($v2_asses_data as $v2_asses)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $v2_asses->Json_data ?></td>
		      <td><?php echo $v2_asses->ID_Shope ?></td>
		      <td><?php echo $v2_asses->Link_Shopie ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>