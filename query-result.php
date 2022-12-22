<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
<?php
$con=mysqli_connect('localhost','root','','rms');
if (!$con) {
  die("Connection failed");
}
else{


	$sql="SELECT*FROM result";
			
	
	$res=mysqli_query($con,$sql);
	$num_rows=mysqli_num_rows($res);
	echo " 
	<div style='overflow:auto;height:400px;padding: 10px;'>
    <table border='1' cellspacing='0'  width='90%'>
        <thead>
	        <tr>
	            <th>#</th>
	            <th>Student Name</th>
	            <th>Roll Id</th>
	            <th>Contact</th>
	            <th>Date-of-Birth</th>
	            <th>Operating System</th>
	            <th>Object Oriented Programming</th>
	            <th>Software Engineering</th>
	            <th>Artificial Intelligence</th>
	            <th>Compiler Design</th>
	        </tr>
        </thead>
        <br><br>

        ";

 
	if($num_rows>0)
	{
		while($row=mysqli_fetch_array($res))
		{
			echo'<tbody>';
				echo'<tr>';

					echo'<td>';
					echo $row['id'];
					echo '</td>';

					echo'<td>';
					echo $row['name'];
					echo '</td>';

					echo'<td>';
					echo $row['roll'];
					echo '</td>';
					echo'<td>';
					echo $row['contact'];
					echo '</td>';

					echo'<td>';
					echo $row['dob'];
					echo '</td>';

					echo'<td>';
					echo $row['os'];
					echo '</td>';

					echo'<td>';
					echo $row['oops'];
					echo '</td>';

					echo'<td>';
					echo $row['se'];
					echo '</td>';

					echo'<td>';
					echo $row['ai'];
					echo '</td>';

					echo'<td>';
					echo $row['cd'];
					echo '</td>';
				echo'</tr>';
			echo'</tbody>';
		}
	}
	else
	{
		echo"NO AVAILABLE DATA";
	}
	echo "</div>";
	echo'</table>';
}
?>
</body>
</html>


