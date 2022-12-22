<?php 
    session_start();
 ?>
 <?php 
    if($_SESSION['status']!="loggedin"){
        header('location:index.php');
    }
  ?>
<html>
<head>
    <title>Change Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/change-pass.css">
</head>
<body>
    <div >
        <header>
            <?php  include('topbaradmin.php');?>
        </header>
    </div>
    <div>
        <?php include('leftbar.php');?>
    </div>

    <div class="chng-password">
        <div class="box">
            <?php include('pass-cng-form.php') ?>
        </div>
    </div>


</body>
</html>