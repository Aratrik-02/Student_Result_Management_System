 <!DOCTYPE html>
 <html>
 <!-- if css not updated use Ctrl + f5 / <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>"> -->

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
 			</div><br><br><br><br>
 			<form method="POST" action="index.php">
 				<div class="card-admin">
 					<div class="container">
 						<h2>Admin section</h2>
 						<h4>Username</h4>
 						<input class="input-box" type="text" id="UserName" name="UserName" placeholder="admin">
 						<h4>Password</h4>
 						<input class="input-box" type="Password" id="admin-pwd" name="admin-pwd" placeholder="1234">
 						<div>
 							<input class="button-18" type="submit" value="Submit" name="Submit">
 						</div>
 					</div>
 				</div>
 				<div class="card-student">
 					<div class="container">
 						<h2>Students section</h2>
 						<div class="click">
 							<a href="studentdash.php" style="color:white">Click here</a> to check the results.
 						</div>
 					</div>
 				</div>
 			</form>
 	</div><br>
 	<p class="text-center"><small>Copyright © Aratrik 2022</small></p>
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

			// here user name and password are called from data base
			$sql = "SELECT username, password FROM admin ";
			$result = mysqli_query($con, $sql);
			$num_row = mysqli_num_rows($result);

			if ($num_row > 0) {
				while ($row = mysqli_fetch_array($result)) {

					//this is to check if either of the fields are vacant
					if (empty($uname) || empty($pass)) {
						echo '<script>alert("please fill all the fields")</script>';
					}
					//this part is to check if the pass and user name are correct
					else if ($uname == $row["username"] && $pass == $row["password"]) {
						$_SESSION['uname'] = $uname;
						header('location:adminpanel.php');
						// echo "<script> window.location.assign('adminpanel.php'); </script>";
					}
					// this part is to accept 
					else
						echo '<script>alert("Wrong Password or UserName")</script>';
				}
			}
		}
	}
	?>