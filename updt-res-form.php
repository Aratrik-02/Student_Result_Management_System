<!DOCTYPE html>
<html>

<head>
	<title>update result</title>
	<link rel="stylesheet" type="text/css" href="css/updt-res-form.css">
</head>

<body style="color: orange">
	<div>
		<form action="#" method="post"><br>
			<h2> UPDATE FORM</h2>
			<hr>
			<br><br>
			<!-- <font color="orange">
            	Enter Roll Number to UPDATE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </font> -->
			<label for="rollno" style="font-size:20px;"><b>Enter Roll Number to UPDATE&nbsp;:&nbsp;</b></label>
			<input class="input-box" type="VALUE" name="rollno" placeholder="ROLL NUMBER"><br>
			<button class="button-18" type="submit" name="Submit" style="vertical-align:middle; margin-top: 10px">
				<span>Submit </span>
			</button>
		</form>
		<br><br><br>
	</div>
</body>

</html>
<?php

if (isset($_POST['update'])) {
	$con = mysqli_connect('localhost', 'root', '', 'rms');
	if (!$con) {
		die("Connection failed");
	}
	$sql = "SELECT * FROM result";
	$res = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($res);
	//student details
	$uname = $_POST['cng-name'];
	$uroll = $_POST['cng-roll'];
	// $ufname = $_POST['cng-fname'];
	$udob = $_POST['cng-dob'];
	$ucont = $_POST['cng-cont'];
	//image
	// $uimg_name = $_FILES['f1']['name'];
	//marks details
	$uos = $_POST['cng-os'];
	$uoops = $_POST['cng-oops'];
	$use = $_POST['cng-se'];
	$uai = $_POST['cng-ai'];
	$ucd = $_POST['cng-cd'];



	$sqli = "UPDATE `result` SET `name` = '$uname', `roll`= '$uroll', `dob`='$udob', `contact`='$ucont', `os`='$uos', `oops`='$uoops', `se`='$use', `ai`='$uai', `cd`='$ucd' WHERE `roll` = '$uroll'";

	$chk = mysqli_query($con, $sqli);
	if ($chk)
		echo "<script>alert(DATA UPDATED)</script>";
	else
		echo "<script>alert(DATA UPDATE FAILED)</script>";

}
if (isset($_POST['Submit'])) {

	$con = mysqli_connect('localhost', 'root', '', 'rms');
	if (!$con) {
		die("Connection failed");
	} else {
		$roll = $_POST['rollno'];

		$sql = "SELECT * FROM result";
		$res = mysqli_query($con, $sql);
		$num_rows = mysqli_num_rows($res);

		if ($num_rows > 0) {
			while ($row = mysqli_fetch_array($res)) {
				if ($roll == $row['roll']) {

					$sql = "SELECT * FROM result";

					$res = mysqli_query($con, $sql);
					$num_rows = mysqli_num_rows($res);

					while ($row = mysqli_fetch_array($res)) {
						if ($roll == $row['roll']) {
							$name = $row['name'];
							$rollno = $row['roll'];
							// $faname = $row['fname'];
							$contact = $row['contact'];
							$dob = $row['dob'];
							// if($row['imgpath'])	$imgname = $row['imgpath'];
							// else $imgname="no";
							$os = $row['os'];
							$oops = $row['oops'];
							$se = $row['se'];
							$ai = $row['ai'];
							$cd = $row['cd'];
						}
					}
					echo '
	<hr>
	<div >
		<h3>STUDENTS DETAILS</h3>
		<form action="#" method="POST">
		<table style="font-size: 20px; color: orange" align="center">		
				<tr>
					<td align="right"><img src="img/icons8-student-64.png"/></td>
					<td><input class="input-box" type="text" name="cng-name" value=';
						echo $name;
						echo ' required></td>
				</tr>
				<tr>
					<td align="right"><img src="img/icons8-pencil-drawing-64.png"/></td>
					<td><input class="input-box" type="text" name="cng-roll" value=';
						echo $rollno;
						echo ' required></td>
				</tr>
				<tr>
					<td align="right"><img src="img/icons8-birth-date-64.png"/></td>
					<td><input class="input-box" type="date" name="cng-dob" value=';
					echo $dob;
					echo ' required></td>
				</tr>
				<tr>
					<td align="right"><img src="img/icons8-phone-64.png"/></td>
					<td><input class="input-box" type="number" name="cng-cont" value=';
					echo $contact;
					echo ' required></td>
				</tr>
		</table>
		<h3>MARKS DETAILS</h3>
		<table style="font-size: 20px; color: orange" align="center">
		<tr>
			<td align="right"><h4>Operating System :</h4></td>
			<td><input class="input-box" type="number" name="cng-os" value=';
				echo $os;
				echo ' required></td>
		</tr>
		<tr>
			<td align="right"><h4>Object Oriented Programming :</h4></td>
			<td><input class="input-box" type="number" name="cng-oops" value=';
				echo $oops;
				echo ' required></td>
		</tr>
		<tr>
			<td align="right"><h4>Software Engineering :</h4></td>
			<td><input class="input-box" type="number" name="cng-se" value=';
				echo $se;
				echo ' required></td>
		</tr>
		<tr>
			<td align="right"><h4>Artificial Intelligence :</h4></td>
			<td><input class="input-box" type="number" name="cng-ai" value=';
				echo $ai;
				echo ' required></td>
		</tr>
		<tr>
			<td align="right"><h4>Compiler Design :</h4></td>
			<td><input class="input-box" type="number" name="cng-cd" value=';
				echo $cd;
				echo ' required></td>
		</tr>
			
		</table>

			<button class="button-18" type="submit" name="update" value="update" style="vertical-align:middle; margin-top: 10px">
                <span>UPDATE</span>
            </button>

		</form>
		<br>
	</div>';

					$msg = "";
					break;
				} else {
					$msg = "ROLL NUMBER NOT FOUND!!";
				}
			}
			$r=isset($row['roll'])? $row['roll'] : '';
			// if ($roll != $row['roll']) echo "$msg";
			if ($roll != $r) echo "$msg";
		}
	}
}
?>