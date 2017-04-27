<?php
session_start();
include_once '../config.php';
?> 

<html>
		<?php if (isset($_SESSION['usr_id'])) { ?>
        	<title><?php echo $_SESSION['usr_username']; ?>'s Home</title>
		<?php } ?>
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
        
 
		<form action="results.php" method="get">
			<div class="input-group" align="center" style="width: 510px; margin-top: 130px; margin-left: 310px;">
                <input type="text" class="form-control" style="border-radius: 1px; font-size: 18px; height: 40px;" placeholder="Search using Students ID Numbers" name="user_query">
                   <span class="input-group-btn">
                       <button class="btn btn-primary" style="border-radius: 1px; font-size: 18px; height: 40px;" type="submit" name="search">Search!</button>
                   </span>
            </div>
		</form>
        
		
		</div>
		
	</body>
</html>
