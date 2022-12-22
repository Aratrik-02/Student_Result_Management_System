
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/pass-cng-form.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div>
        <form action="#" method="post" ><br>
            <font color="orange"><h1>Change Password</h1></font><hr>
            <br><br>
             
            <div class="crnt-pass">
                <img style="margin-bottom: -20px;" src="img/icons8-password-64.png"/> &nbsp;&nbsp;&nbsp;&nbsp;
                <input class="input-box" type="password" name="current-pass" placeholder="CURRENT PASSWORD" required>
            </div>
            <br><br>
            <div class="new-pass">

                <img style="margin-bottom: -20px;" src="img/icons8-password-64.png"/> &nbsp;&nbsp;&nbsp;&nbsp;
                <input class="input-box" type="password" name="new-pass" placeholder="NEW PASSWORD" required>
            </div>
            <br><br>
            <div class="cnfrm-pass">
                <img style="margin-bottom: -20px;" src="img/icons8-validation-64.png"/>&nbsp;&nbsp;&nbsp;&nbsp;
                <input class="input-box" type="password" name="cnfrm-pass" placeholder="CONFIRM PASSWORD" required>
            </div><br>
            <button class="button-18" type="submit" name="Submit">
                <span>Submit </span>
            </button>
        </form>
    </div>

</body>
</html> 
<?php
if (isset($_POST['Submit'])) {
    $con=mysqli_connect('localhost','root','','rms');
    if (!$con) {
       die("Connection failed");
    }
    else{
        $currentpass = $_POST['current-pass'];
        $newpass = $_POST['new-pass'];
        $cnfrmpass = $_POST['cnfrm-pass'];
        $sql = "SELECT password FROM admin ";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $oldpass = $row["password"];
        if($currentpass != $oldpass ){
            echo '<script> alert("current password wrong");</script>';
        }
        else if($newpass !== $cnfrmpass){
            echo '<script> alert("pasword not matched");</script>';
        }
        else{
            $sql ="UPDATE `admin` SET `password`='$newpass' WHERE `id`='1'";
            $res = mysqli_query($con,$sql);
            if($res)
            echo '<script> alert("password changed sucessfully!!");</script>';
            else
            echo '<script> alert("opss!!");</script>';

        }
    }
}
?>