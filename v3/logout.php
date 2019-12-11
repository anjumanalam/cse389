<?php
//start session
session_start();

//clear session variable
session_destroy();

header("location: index.php");

// if(isset($_SESSION["sess_user"])){    
//     echo "it did not log out";
// } else {
//   echo "it logged out";
// }

?>