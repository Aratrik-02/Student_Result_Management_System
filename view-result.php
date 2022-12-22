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
    <title>View Result</title>
    <link rel="stylesheet" type="text/css" href="css/view-result.css">
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
<div class="result-table">
    <div class="box"><br>
        <center>
        <font color="orange"><h1>STUDENT'S DETAILS</h1></font><hr>
        <?php include('query-result.php');?>
        </center>
    </div>
</div>



</body>
</html>