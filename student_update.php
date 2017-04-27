<?php
session_start();
include_once 'config.php';
?> 

<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($std_roll_no, $aunid, $fullname, $email, $error)

{

?>

<html>
        <title>Update Student Details</title>
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
                <?php

                    // if there are any errors, display them

                    if ($error != '')

                    {

                    echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

                    }

                ?>

                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                <tr>
                    <td colspan="2"><b>Student Details Entry</b></td>
                </tr>
                <tr>
                    <td>Student ID</td>
                    <td><input class="form-control" type="hidden" name="std_id" value="<?php echo $std_roll_no; ?>"></td>
                </tr>    
                <tr>
                    <td>Student AUN ID</td>
                    <td><input class="form-control" placeholder="Student AUN ID" type="text" name="aunid" value="<?php echo $aunid; ?>" required></td>
                </tr>
                <tr>
                    <td>Student Fullname</td>
                    <td><input class="form-control" placeholder="Student Fullname" type="text" name="fullname" value="<?php echo $fullname; ?>" required></td>
                </tr>
                <tr>
                    <td>Student E-mail</td>
                    <td><input class="form-control" placeholder="Student E-mail Address" type="email" name="email" value="<?php echo $email; ?>" required></td>
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

<?php

}


// connect to the database

include('config.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (is_numeric($_POST['std_roll_no']))

{

// get form data, making sure it is valid
$std_id = $_POST['std_roll_no'];

$aunid = mysqli_real_escape_string($connect, htmlspecialchars($_POST['aunid']));

$fullname = mysqli_real_escape_string($connect, htmlspecialchars($_POST['fullname']));
    
$email = mysqli_real_escape_string($connect, htmlspecialchars($_POST['email']));



// check that firstname/lastname fields are both filled in

if ($aunid == '' || $fullname == '' || $email == '')

{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($std_roll_no, $aunid, $fullname, $email, $error);

}

else

{

// save the data to the database7
mysqli_query($connect, "UPDATE student_table SET aunid='$aunid', fullname='$fullname', email='$email' WHERE std_id='$std_roll_no'")

or die(mysqli_error($connect));



// once saved, redirect back to the view page

header("Location: student.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{
    // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['std_roll_no']) && is_numeric($_GET['std_roll_no']) && $_GET['std_roll_no'] > 0)

{

// query db

$std_id = $_GET['std_roll_no'];

$result = mysqli_query($connect, "SELECT * FROM student_table WHERE std_roll_no=$std_roll_no")

or die(mysqli_error($connect));

$row = mysqli_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

$aunid = $row['aunid'];

$fullname = $row['fullname'];
    
$email = $row['email'];
    
// show form

renderForm($std_roll_no, $aunid, $fullname, $email, '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>