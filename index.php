 <?php 
 session_start();
  ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Index</title>
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" type="text/css" href="css/index.css">
 </head>

 <body class="bgimg">
 	<div >
 		<font color="white">
 			<div>
 				<?php include('topbar.php') ?>
 			</div><br><br>
 			<form method="POST" action="index.php">
 				<div class="float-container">
	 				<div class="card-admin float-child">
	 					<div class="container">
	 						<h2>Admin section</h2>
	 						<h4>Username</h4>
	 						<input class="input-box" type="text" id="UserName" name="UserName" placeholder="eg: admin@1234" required>
	 						<h4>Password</h4>
	 						<input class="input-box" type="Password" id="admin-pwd" name="admin-pwd" placeholder="eg: admin1234" required>
	 						<div>
	 							<input class="button-18" type="submit" value="Login" name="Submit">
	 						</div>
	 					</div>
	 				</div>
	 				<div class="card-student float-child">
	 					<div class="container">
	 						<h2>Students section</h2>
	 						<div class="click">
	 							<a href="studentdash.php" style="color:orange">Click here</a> to check the results.
	 						</div>
	 					</div>
	 				</div>
 				</div>
 			</form>
 	</div>
 	<footer>
 		<p class="text-center"><small>Copyright © Aratrik 2022</small></p>
 	</footer>
 </body>

 </html>
 <?php

	if (isset($_POST['Submit'])) {

		$con = mysqli_connect('localhost', 'root', '', 'rms');
		if (!$con) {
			die("Connection failed");
		} else {
			$uname = $_POST['UserName'];
			$pass = $_POST['admin-pwd'];
			$_SESSION['status'] = "loggedout";
			$sql = "SELECT username, password FROM admin ";
			$result = mysqli_query($con, $sql);
			$num_row = mysqli_num_rows($result);

			if ($num_row > 0) {
				while ($row = mysqli_fetch_array($result)) {
					if (empty($uname) || empty($pass)) {
						echo '<script>alert("please fill all the fields")</script>';
					}
					else if ($uname == $row["username"] && $pass == $row["password"]) {
						$_SESSION['uname'] = $uname;
						$_SESSION['status'] = "loggedin";
						header('location:adminpanel.php');
					}
					else{
						echo '<script>alert("Wrong Password or UserName")</script>';
					}
				}
			}
		}
	}
	?>