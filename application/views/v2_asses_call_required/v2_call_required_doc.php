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
        <h2>V2_call_required List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Dock</th>
		<th>Value</th>
		
            </tr><?php
            foreach ($v2_asses_call_required_data as $v2_asses_call_required)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $v2_asses_call_required->Dock ?></td>
		      <td><?php echo $v2_asses_call_required->Value ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>