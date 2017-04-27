<?php
session_start();
include_once '../config.php';
?> 

<html>
        <title>Take Attendance</title>
        <link href="../bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="../style.css"  rel='stylesheet' type='text/css'> 
        <link href="../image/AUN.png" rel="icon">
    
    <body>

    <div class="container">
       
        <!--- Navbar --->
        <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation" style="background-color: white; box-shadow: 0 1px 2px rgba(0,0,0,0.1);">
            <div class="container topnav">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" href="home.php" style="color: black;">AUN ATS</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li style="margin-top: -1px;">
                            <button class="btn btn-default" style="margin-top: 9px; background-color: #23989d;"><a href="logout.php" style="color: white;">LOGOUT</a></button>
                        </li>
                    </ul>
                </div>

            </div> 

        </nav>
        
        
        <?php  
            error_reporting(E_ALL ^ E_DEPRECATED);
            include("../config.php");?>
            <div class="form-container" style="margin-top: 120px;">
                <form method="post" action="saveattendance.php" role="form">
                 <!-- <div class="container"> -->
                 <div class="col-lg-3">
                  <div class="form-group">
            <?php
                  $qs=mysqli_query($connect,"select * from tbl_attendance inner join student_table where aunid = StudentRollNumber");
                  ?>
                  <?php	
                  echo "<select class='form-control' name='stid' >";			
                  while($row=mysqli_fetch_assoc($qs))
                  {				
                   echo '<option value="'.$row['aunid'].'">'.$row['aunid'].'</option>';
                   }
                  echo "</select>"."<br>";
                  ?>
                  </div>
                  </div> <!--col-lg-4-->
                   <div class="col-lg-3">
                  <?php
                  $qs1=mysqli_query($connect,"select * from subject_table where '{$_SESSION['username']}' = teacher_name");	
                  echo "<select class='form-control' name='subjid'>";			
                  while($row1=mysqli_fetch_assoc($qs1))
                  {				
                   echo '<option value="'.$row1['subject_name'].'">'.$row1['subject_name'].'</option>';
                   }
                  echo "</select>";?>
                  </div> <!--col-lg-4-->
				<div class="col-lg-3"> <input class="form-control" placeholder="Barcode" name="barcode" type="text" id="barcode" autofocus> </div>
                  <input type="radio" name="present" value="P" />Present
                  <input type="radio" name="present" value="A" />Absent
                  <button type="submit" name="save" value="Save" class="btn btn-success btn-sm">Save</button>

                </form>
        </div>
        
        
    </div>
        
        <script></script>
    </body>
</html>