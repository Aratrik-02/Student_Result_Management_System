<!DOCTYPE html>
<html>
<head>
	<title>Delete Entry</title>
	<link rel="stylesheet" type="text/css" href="css/delete.css">
</head>
<body><br><br>
	<table align="center">
		<form action="#" method="POST">
			<tr>
				<font color="orange"><h1>Delete Student Details</h1></font><hr>
				<h4>Enter roll no. of student whose data needs to be deleted.</h4>
				<h4>Once deleted it can't be recovered!!</h4>
			</tr>
			<tr>
				<td><input class="input-box" type="text" style="height: 30px; font-size:20px; text-align:center;" name="std-rlno" placeholder="Roll Number"></td>
			</tr>
			<tr>
				<td><br>
					<button class="button-18" type="Submit" name="Submit" style="vertical-align:middle" value="DELETE">
		                <span>DELETE</span>
		            </button>
				</td>
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
		$rlno = $_POST['std-rlno'];
	}
	$sql = "DELETE FROM result WHERE roll = '$rlno'" ;
	$chk = mysqli_query($con , $sql);
	
	if(empty($rlno)){
		echo "Please Provide Roll Number";
	}else{
		if($chk)
			echo "<center>DATA DELETED</center>";
		else
			echo " <center>DELETION FAILED</center>";
	}
}		
?>