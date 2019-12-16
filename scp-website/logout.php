<?php
//start session
session_start();

//clear session variable
session_destroy();

// send user to home page once logged out
header("location: index.php");

?>