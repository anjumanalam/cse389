<?php
    #load functions
    require_once('functions.php');

    // Assign root URL to PHP constant (WWW_ROOT)
    // Use same document root as web server
    // dynamically find everything in URL up to "/public"
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);


?>