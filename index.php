<?php
error_reporting(E_ALL & ~ E_NOTICE);
session_start();
?>
<?php

if(isset($_SESSION['admin_id'])!="") {
    header("Location: home.php");
}

include_once 'config.php';

//check if form is submitted
if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $result = mysqli_query($connect, "SELECT * FROM admin WHERE username = '" .$username. "' and password = '" .$password. "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['admin_id'] = $id;
        $_SESSION['admin_username'] = $username;
        header("Location: home.php");
    } else {
        echo "<script>alert('Incorrect Email or Password!!!')</script>";
    }
}
?>

<?php

if(isset($_SESSION['id'])!="") {
    header("Location: instructor/home.php");
}

include_once 'config.php';

//check if form is submitted
if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $result = mysqli_query($connect, "SELECT * FROM instructor_table WHERE username = '" .$username. "' and password = '" .$password. "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        header("Location: instructor/home.php");
    } else {
        echo "<script>alert('Incorrect Email or Password!!!')</script>";
    }
}
?>


<?php
session_start();

if(isset($_SESSION['aunid'])!="") {
    header("Location: student/home.php");
}

include_once 'config.php';

//check if form is submitted
if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $result = mysqli_query($connect, "SELECT * FROM student_table WHERE username = '" . $username. "' and password = '" . $password . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['aunid'] = $row['aunid'];
        $_SESSION['username'] = $row['username'];
        header("Location: student/home.php");
    } else {
        echo "<script>alert('Incorrect Email or Password!!!')</script>";
    }
}
?>

<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: clinic/home.php");
}

include_once 'config.php';

//check if form is submitted
if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $result = mysqli_query($connect, "SELECT * FROM users WHERE username = '" . $username. "' and password = '" . $password . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_username'] = $row['username'];
        header("Location: clinic/home.php");
    } else {
        echo "<script>alert('Incorrect Email or Password!!!')</script>";
    }
}
?>

<html>
        <title>AUN Attendance Management System</title>
        <link href="bootstrap.css" rel='stylesheet' type='text/css'>
        <link href="style.css"  rel='stylesheet' type='text/css'> 
        <link href="image/AUN.png" rel="icon">
    
    <body>
<div class="container">

               <div class="row" align="center" style="margin-top: 80px; margin-bottom: 60px;">
                    <img src="image/AUN.png" class="img-responsive" height="80px;" width="80px;">
                </div>
 </div>
     <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php $_SERVER['PHP_SELF'];?>">
                                <div class="form-group">
                                    <input class="form-control" placeholder="User name" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label> <input name="remember" type="checkbox" value="Remember Me">Remember Me</label>
                                </div>
                                <button type="sumbit" name="submit" value="login" class="btn btn-lg btn-success btn-block">Login</button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        <script></script>
    </body>
</html>