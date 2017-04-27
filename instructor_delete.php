<?php

/*

DELETE.PHP

Deletes a specific entry from the 'players' table

*/



// connect to the database

include('config.php');



// check if the 'id' variable is set in URL, and check that it is valid

if (isset($_GET['instructor_id']) && is_numeric($_GET['instructor_id']))

{

// get id value

$id = $_GET['instructor_id'];



// delete the entry

$result = mysqli_query($connect, "DELETE FROM instructor_table WHERE instructor_id=$instructor_id")

or die(mysqli_error($connect));



// redirect back to the view page

header("Location: instructor.php");

}

else

// if id isn't set, or isn't valid, redirect back to view page

{

header("Location: instructor.php");

}



?>