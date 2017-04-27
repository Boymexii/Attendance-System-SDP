<?php
session_start();
include_once 'config.php';
?> 

<?php
    include('config.php');
    if(isset($_POST['submit'])){

      $aunid = $_POST['aunid'];
      $fullname = $_POST['fullname'];
      $email = $_POST['email'];

      $sql2 = "INSERT INTO instructor_table (aunid, fullname, email) VALUES ('$aunid','$fullname','$email')";
      $result2 = mysqli_query($connect,$sql2) or die(mysqli_error());
    }
?> 

<html>
        <title>Student Entry</title>
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
        
        
        <table class="table table-bordered table-responsive" style="margin: 0 auto; margin-top: 130px; width: 500px;">
            <tbody>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <tr>
                    <td colspan="2"><b>Instructor Details Entry</b></td>
                </tr>
                <tr>
                    <td>Instructor AUN ID</td>
                    <td><input class="form-control" placeholder="Instructor AUN ID" type="text" name="aunid" required></td>
                </tr>
                <tr>
                    <td>Instructor Fullname</td>
                    <td><input class="form-control" placeholder="Instructor Fullname" type="text" name="fullname" required></td>
                </tr>
                <tr>
                    <td>Instructor E-mail</td>
                    <td><input class="form-control" placeholder="Instructor E-mail Address" type="email" name="email" required></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><input class="btn btn-primary" type="submit" name="submit"></td>
                </tr>
                </form>
            </tbody>
        </table>
        
        
    </div>
        
        <script></script>
    </body>
</html>