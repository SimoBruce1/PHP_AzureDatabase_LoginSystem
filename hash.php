<?php 
/* PHP password hash generate script by childofcode.com */

// Add plain text  password on 'pw' URL parameters to Creates a password hash, Example: hash.php?pw=passs1234
$password = $_GET['pw'];
$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
echo $param_password ;
?>



