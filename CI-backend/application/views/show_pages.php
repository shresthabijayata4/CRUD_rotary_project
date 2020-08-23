<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend_page</title>
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/style.css');?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/js/script.js');?>"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <style>
        table{
            margin-top:20px;
            text-align: center;
        }

        .heading a{
            font-size:18px;

        }
        tr {
            height: 30px
        }
    </style>

 
</head>
<body>
    <div class="body-part">
        <div class="heading">
        <h1>CMS page</h1>

        <a href="<?php echo base_url('pages/add_page');?>" class="add-page"> Add page</a>
        </div>
        <div class="page-list">
        <table  border = "1px" width="100%" height="100px">
            <tr>
                <td>S.No</td>
                <td>Name</td>
                <td>Alias</td>
                <td>View</td>
                <td>Edit</td>
                <td>Delete</td>


            </tr>

            <?php
            $i=1;
            foreach($data as $row)
            {
                
            ?>
            <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row->Name; ?></td>
            <td><?php echo $row->alias; ?></td>
            <td><a href="<?php echo base_url('pages/see_page').'/'.$row->id; ?>" class="fa fa-eye"></a></td>
            <td><a href="<?php echo base_url('pages/update_page').'/'.$row->id;?>">edit</a> </td>
            <td><a href="<?php echo base_url ('pages/delete').'/'.$row->id;?>">delete</a></td>
            </tr>            
            <?php
            $i++;
            }
            
            ?>

        </table>
        </div>

    </div>


    
</body>
</html>