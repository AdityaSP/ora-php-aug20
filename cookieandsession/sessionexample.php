<?php
session_start();
var_dump($_SESSION);
var_dump($_COOKIE);
if(isset($_SESSION['uname'])){
    echo "Welcome back";
} else {
    $_SESSION['uname'] = 'Aditya';
    echo "Hello";
}

