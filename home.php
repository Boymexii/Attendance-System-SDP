<?php
session_start();
include_once 'config.php';
?> 

<html>
        <title><?php echo $_SESSION['admin_username']; ?>'s Home</title>
        <link href="bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="style.css"  rel='stylesheet' type='text/css'> 
        <link href="image/AUN.png" rel="icon">
    
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
        
        
        <table class="table table-bordered table-responsive" style="margin: 0 auto; margin-top: 130px; width: 540px;">
            <thead>
                <tr>
                    <th>Views</th>
                    <th>Entries</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="student.php" style="color: inherit;">Student</a></td>
                    <td><a href="student_entry.php" style="color: inherit;">Student Entry</a></td>
                </tr>
                <tr>
                    <td><a href="instructor.php" style="color: inherit;">Instructor</a></td>
                    <td><a href="instructor_entry.php" style="color: inherit;">Instructor Entry</a></td>
                </tr>
                <tr>
                    <td><a href="subject.php" style="color: inherit;">Subject</a></td>
                    <td><a href="subject_entry.php" style="color: inherit;">Subject Entry</a></td>
                </tr>
                <tr>
                    <td><a href="#" style="color: inherit;">Users</a></td>
                    <td><a href="#" style="color: inherit;">Users Entry</a></td>
                </tr>
            </tbody>
        </table>
        
        
    </div>
        
        <script></script>
    </body>
</html>