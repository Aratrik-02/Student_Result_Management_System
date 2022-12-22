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
    <title>Update Result</title>
    <link rel="stylesheet" type="text/css" href="css/update-result.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="res-form">
    <br><br><br><br>
    <div class="box">
        <?php include('updt-res-form.php'); ?>
    </div>
</div>


</body>
</html>
