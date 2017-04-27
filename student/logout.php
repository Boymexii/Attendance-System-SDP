<?php
session_start();

if(isset($_SESSION['aunid'])) {
    session_destroy();
    unset($_SESSION['aunid']);
    unset($_SESSION['username']);
    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}
?>