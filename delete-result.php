<?php 
    session_start();
 ?>
 <?php 
    if($_SESSION['status']!="loggedin"){
        header('location:index.php');
    }
  ?>
<!DOCTYPE html>
<html>
<head>
    <title>Result Entry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/delete-result.css">
</head>
<body>
    <div >
        <header>
            <?php include('topbaradmin.php');?>
        </header>
    </div>
    <div >
        <?php include('leftbar.php');?>
    </div>
<div class="del-form">
    <div class="box">
        <?php include('delete.php');?>
    </div>
</div>


</body>
</html>