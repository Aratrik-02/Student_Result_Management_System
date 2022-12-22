<!DOCTYPE html>
<html>
<head>
	<title>Result Input</title>
	<link rel="stylesheet" type="text/css" href="css/student-details.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1 align="center" style="color:orange; padding-top:20px">Fill up Student's Details</h1><hr>
<table style="font-size: 20px; color: orange; margin-bottom:40px" align="center">
	<form action="#" method="POST">
		<tr>
			<td class="stu-details-pic" align="center"><img src="img/icons8-student-64.png"/></td>
			<td ><input class="input-box" type="text" name="std-name" placeholder="Student Name" required></td>
		</tr>
		<tr>
			<td class="stu-details-pic" align="center"><img src="img/icons8-pencil-drawing-64.png"/></td>
			<td><input class="input-box" type="text" name="rl" placeholder="Roll Number" required></td>
		</tr>
		<tr>
			<td class="stu-details-pic" align="center"><img src="img/icons8-birth-date-64.png"/></td>
			<td><input class="input-box" type="date" name="dob" placeholder="DD-MM-YYYY" required></td>
		</tr>
		<tr>
			<td class="stu-details-pic" align="center"><img src="img/icons8-phone-64.png"/></td>
			<td><input class="input-box" type="number" name="cnt-no" placeholder="Contact Number" required></td>
		</tr>
		<tr align="center">
			<td colspan="2"><br><br><h3>Marks Details</h3></td>
		</tr>
		<tr>
			<td align="center"><h4>Operating System </h4></td>
			<td><input class="marks-box" type="number" name="os" required></td>
		</tr>
		<tr>
			<td align="center"><h4>Object Oriented Programming </h4></td>
			<td><input class="marks-box" type="number" name="oops" required></td>
		</tr>
		<tr>
			<td align="center"><h4>Software Engineering </h4></td>
			<td><input class="marks-box" type="number" name="se" required></td>
		</tr>
		<tr>
			<td align="center"><h4>Artificial Intelligence </h4></td>
			<td><input class="marks-box" type="number" name="ai" required></td>
		</tr>
		<tr>
			<td align="center"><h4>Compiler Design </h4></td>
			<td><input class="marks-box" type="number" name="cd" required></td>
		</tr>
		<tr>
			<td colspan="2"><button class="button-18" type="submit" name="Submit" style="vertical-align:middle">
                <span>Submit </span>
            </button></td>
		</tr>
	</form>
</table>
</body>
</html>
<?php
if (isset($_POST['Submit'])) {

	$con=mysqli_connect('localhost','root','','rms');
	if (!$con) {
	   die("Connection failed");
	}
	else{
		$std_name = $_POST['std-name'];
		$std_roll = $_POST['rl'];
		$std_dob = $_POST['dob'];
		$std_cont = $_POST['cnt-no'];
		$os = $_POST['os'];
		$oops = $_POST['oops'];
		$se = $_POST['se'];
		$ai = $_POST['ai'];
		$cd = $_POST['cd'];
		$sql = "INSERT INTO `result`( `name`, `roll`, `dob`, `contact`, `os`, `oops`, `se`, `ai`, `cd`) VALUES ('$std_name','$std_roll','$std_dob','$std_cont','$os','$oops','$se','$ai','$cd')";

		$chk = mysqli_query($con , $sql);
		if($chk){
			echo "DATA INSERTED";
			echo "<script>alert('DATA INSERTED');</script>";

		}
		else
			echo "<script>alert('INSERTION FAILED');</script>";
	}
}
?>
