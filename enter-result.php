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
    <link rel="stylesheet" type="text/css" href="css/enter-result.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div >
        <header>
            <?php include('topbaradmin.php');?>
        </header>
    </div>
    <div class="left">
        <?php include('leftbar.php');?>
    </div>
<div class="student-det">
    <br><br><br>
    <div class="box">
        <?php include('student-details.php');?>
    </div>
</div>


</body>
</html>