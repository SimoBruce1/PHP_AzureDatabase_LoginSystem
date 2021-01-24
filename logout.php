<?php
/* Microsoft Azure Database PHP logout script by childofcode.com */

session_start();
$_SESSION = array(); // Frees all session variables
session_destroy(); // destroys all session data
header("location: login.php"); // redirect back to login page
exit;
?>
