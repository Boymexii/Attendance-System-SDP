<?php
session_start();
include_once '../config.php';
?> 

<html>
        <title>Search Results</title>
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
						<li>
                            <form action="results.php" method="get">
                            <div class="input-group" style="width: 420px; margin-top: 12px; margin-right: 20px;">
                                <input type="text" class="form-control" placeholder="e.g need for speed" name="user_keyword">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="submit" name="submit">Search!</button>
                            </span>
                            </div>
                            </form>
                        </li>
                        <li style="margin-top: -1px;">
                            <button class="btn btn-default" style="margin-top: 9px; background-color: #23989d; margin-top: 13px;"><a href="logout.php" style="color: white;">LOGOUT</a></button>
                        </li>
                    </ul>
                </div>

            </div>

        </nav>
        
 
		<!---- Display Section ---->
        <?php 
	       $con = mysqli_connect("localhost","root","","sdp");
	
	       if(isset($_GET['search'])){
	
	       $get_value = $_GET['user_query'];
	 
	       if($get_value==''){
	
	       echo "<center style='margin-top: 80px;'><b style='font-size: 35px;'>Please, write something in the search box!</b></center>";
	       exit();
	   }
	
	       $result_query = "select * from student_table where aunid like '%$get_value%' LIMIT 7";
	
	       $run_result = mysqli_query($con,$result_query);
	
	       if(mysqli_num_rows($run_result)<1){
	
	       echo "<center style='margin-top: 80px;'><b style='font-size: 35px;'>Oops! sorry, $get_value wasn't found!</b></center>";        
	       exit();
	
	   }
	
	   while($row_result=mysqli_fetch_array($run_result)){
		
		$aunid=$row_result['aunid'];
		$aunid=$row_result['fullname'];
	 		   
		echo "
			<div class='row' align='center' style='margin-top: 120px;'>
				<div class='col-lg-2'>
					<h1 style='font-size: 16px;'>$aunid</h1>
        			<div class='button' style='margin-bottom: -10px;'>
					<img src='../image/avatar.png' class='img-circle' style='height: 100px; width: 100px; margin-bottom: 5px;'><br>
					<a href='#'><button class='btn btn-success'>Take Attendance</button></a>
					</div>
        			<hr>
				</div>
			</div>
		";   
 
        /*echo "<div class='login'>
                <h2 align='center'>$game_title</h2>
                <div class='image' align='center' style='margin-top: 20px;'>
                <img src='images/$game_image' class='img-circle' alt='' width='120' height='120' />
                </div>
                <p class='pbox' align='center' style='margin-top: 20px;'>$game_desc</p>
                <div class='button' align='center' style='margin-top: 25px;'>
                <a href='$game_link' target='_blank'><button class='btn btn-success'>Download NOW</button></a> <a href='#' target=''><button class='btn btn-primary'>Review</button></a><br/>
                OR<br/>
                <a href='#' target=''><button class='btn btn-default'>ChatRoom</button></a>
                </div>
            </div>";
        */
           
		}
           }

        ?> 
         
        
        <!--- User_Keyword ---->
        <?php 
	       $con = mysqli_connect("localhost","root","","sdp");
	
	       if(isset($_GET['submit'])){
	
	       $get_value = $_GET['user_keyword'];
	
	       if($get_value==''){
	
	       echo "<center style='margin-top: 80px;'><b style='font-size: 35px;'>Please, write something in the search box!</b></center>";
	       exit();
	   }
	
	       $result_query = "select * from student_table where aunid like '%$get_value%' LIMIT 7";
	
	       $run_result = mysqli_query($con,$result_query);
	
	       if(mysqli_num_rows($run_result)<1){
	
	       echo "<center style='margin-top: 80px;'><b style='font-size: 35px;'>Oops! sorry, $get_value wasn't found!</b></center>";
	       exit();
	
	   }
	
	   while($row_result=mysqli_fetch_array($run_result)){
		
		$aunid=$row_result['aunid'];
		$aunid=$row_result['fullname'];
	 		   
		echo "
			<div class='row' align='center' style='margin-top: 120px;'>
				<div class='col-lg-2'>
					<h1 style='font-size: 16px;'>$aunid</h1>
        			<div class='button' style='margin-bottom: -10px;'>
					<img src='../image/avatar.png' class='img-circle' style='height: 100px; width: 100px; margin-bottom: 5px;'><br>
					<a href='#'><button class='btn btn-success'>Take Attendance</button></a>
					</div>
        			<hr>
				</div>
			</div>
		";

       /* echo "<div class='login'>
                <h2 align='center'>$game_title</h2>
                <div class='image' align='center' style='margin-top: 20px;'>
                <img src='images/$game_image' class='img-circle' alt='' width='120' height='120' />
                </div>
                <p class='pbox' align='center' style='margin-top: 20px;'>$game_desc</p>
                <div class='button' align='center' style='margin-top: 25px;'>
                <a href='$game_link' target='_blank'><button class='btn btn-success'>Download NOW</button></a> <a href='#' target=''><button class='btn btn-primary'>Review</button></a><br/>
                OR<br/>
                <a href='#' target=''><button class='btn btn-default'>ChatRoom</button></a>
                </div>
            </div>"; 
        */    
            
		}
           }
		
        ?>  
		
		
		</div>
		
	</body>
</html>