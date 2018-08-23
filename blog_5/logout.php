<?php
session_start();
$_SESSION = array();
if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), time()-3600);
}
session_destroy();
#header("Location: home.php");
include 'navbar.php';
echo "You have been logged out. See you soon";
include 'footer.php';