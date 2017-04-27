<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

include('config.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['std_roll_no']) && is_numeric($_GET['std_roll_no']))

{

// get id value

$id = $_GET['std_roll_no'];



// delete the entry

$result = mysqli_query($connect, "DELETE FROM student_table WHERE std_roll_no=$std_roll_no")

or die(mysqli_error($connect));



// redirect back to the view page

header("Location: student.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: student.php");

}



?>