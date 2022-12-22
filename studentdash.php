<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/studentdash.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Student Dashboard</title>
</head>
<div id="non-printable"><?php  include('topbar.php');?> </div>
<body>

 <div  class="bgimg">
<center>
    <h1 id="non-printable" style="color:white;">View Result</h1>
<div id="non-printable">

		<form action="#" method="POST">

            <table class="info">
                <tr>
               	    <td align="center">
                        <label style="color:white;font-weight: bold;">Enter Your Roll Number</label>
               	    </td>
               	    <td> 
               	        <input class="input-box" type="text" name="roll" placeholder="Roll number">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td></td>
                </tr>

                <tr>	   
                   	<td align="center">
               	        <label style="color:white;font-weight: bold;">Enter your D.O.B</label>
               	    </td> 
               	    <td>
               	        <input class="input-box" type="date" name="dob">
               	    </td>
                </tr>
            </table>
            <button class="button-18 search" type="submit" name="search">
                    <span>Search </span>
            </button>
            <button class="button-18 reset" type="reset" name="reset">
                <span>Reset </span>
            </button>
    </form>
</div> 
</center>


</body>
<footer id="non-printable">
    <center><small>Copyright © Aratrik 2022</small></center>
</footer>

<?php

if(isset($_POST['search'])) {
    

    $con=mysqli_connect('localhost','root','','rms');
    if (!$con) {
      die("Connection failed");
    }
    else{
        $roll = $_POST['roll'];
        $dob = $_POST['dob'];
        $sql = "SELECT roll,dob FROM result ";
        $res = mysqli_query($con,$sql);
        $num_row = mysqli_num_rows($res);

        if($num_row > 0){
            while($row = mysqli_fetch_array($res)){
                if (empty($roll) || empty($dob)) {
                    $msg = 'required';
            		if($msg == 'required') echo '<script>alert("please fill all the fields")</script>';
                    break;
                }   
                else if($roll == $row["roll"] && $dob == $row["dob"]){
                    echo '<script>alert("Result Declared scroll down to see")</script>';
                    $msg = 'yes';
                    break;
                }
                else {
                    $msg = 'no';
                }
                            
            }
			if($msg == 'no') echo '<script>alert("Invalid Details")</script>';
        }
        else
            echo '<script>alert("Result Not Declared")</script>';
    }
    $sql1="SELECT * FROM result WHERE roll = '$roll' AND dob = '$dob'";
            
    
    $res=mysqli_query($con,$sql1);
    $num_rows=mysqli_num_rows($res);
    

    if($num_rows>0)
    {
        while($row=mysqli_fetch_array($res))
        {
            echo "<div id='non-printable'><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>";
            echo "<div id='printable' >";
            echo "<center><h1 id='details'style='color:white'>Student's Result</h1></center>";
            echo "<table cellspacing='0' class='box' align='center' border='0'>";
            echo "<tr>";
            echo "<td align='left' style='font-size:20px;padding-left:30px' class='res'>Student's Name:</td>";
            echo "<td style='font-size:20px;'>";
            echo $row['name'];
            echo "</td>";
            echo "</tr>";
            
            echo "<tr>";
            echo "<td align='left' class='res'>Roll No.:</td>";
            echo "<td style='font-size:20px;'>";
            echo $row['roll'];
            echo "</td>";
            echo "</tr>";
           
           
           echo "<tr>";
            echo "<td align='left' class='res'>Date of Birth:</td>";
            echo "<td style='font-size:20px;'>";
            echo $row['dob'];
            echo "</td>";
            echo "</tr>";
           
            echo "<tr>";
            echo "<td align='left' class='res'>Contact No.:</td>";

            echo "<td style='font-size:20px;'>";
            echo $row['contact'];
            echo "</td>";
            echo "</tr>";
           
            echo "<tr>";
        
            echo "<tr>";
            echo "<br><br><td align='center' class='marks'><b>Marks Obtained</b></td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='left' style='font-size:20px;padding-left:30px'>Operating System:</td>";

            echo "<td align='center' style='font-size:20px;'>";
            echo $row['os'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='left' style='font-size:20px;padding-left:30px'>Object Oriented Programming:</td>";
            echo "<td align='center' style='font-size:20px;'>";
            echo $row['oops'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='left' style='font-size:20px;padding-left:30px'>Software Engineering:</td>";

            echo "<td align='center' style='font-size:20px;'>";
            echo $row['se'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='left' style='font-size:20px;padding-left:30px'>Artificial Intelligence:</td>";

            echo "<td align='center' style='font-size:20px;'>";
            echo $row['ai'];
            echo "</td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td align='left' style='font-size:20px;padding-left:30px'>Compiler Design</td>";

            echo "<td align='center' style='font-size:20px;'>";
            echo $row['cd'];
            echo "</td>";
            echo "</tr>";
            echo "</table>";
            echo "</div>";           
        }
    }  

    if($msg == 'yes') echo "<br><br><center><button id='non-printable' class='button-18 print sub'  onclick='javascript:window.print();'>
        <span>Print</span></button>
        ";
}

?>
</html>






