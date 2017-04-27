<?php
error_reporting(E_ALL ^ E_DEPRECATED);
include("../config.php");
$stid=$_POST['stid'];
$subjid=$_POST['subjid'];
$atten=$_POST['present'];
$date = date('Y-m-d H:i:s');
$query=mysqli_query($connect,"Insert into tbl_attendance(StudentRollNumber,SubjectId,attendance,date)VALUES('$stid','$subjid','$atten','$date')");
if(!$query)
{
	echo mysqli_error($connect);
	}

?>


<html>
    <head>
        <title>Attendance Taken Successfull</title>
        <link rel="stylesheet" href="../bootstrap.css">
        <link rel="icon" href="../image/AUN.png">
    </head>
    <body>
        <p style="margin-top: 150px;" align="center">Attendance taken successfully. <a href="takeattendance.php" style="color: white;"><button class="btn btn-primary" type="button">Go Back</button></a></p>
    </body>
</html>