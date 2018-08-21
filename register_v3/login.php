<?php
session_start();

function validate(){
    if ($_POST['email'] == 'sp.aditya@gmail.com' and $_POST['pass'] ='admin')
        return true;
    return false;
}

if(isset($_POST['email']) and isset($_POST['pass'])){
    $valid = validate();
    if ($valid){
        $_SESSION['uname'] = $_POST['email'];
    }
}

include_once 'navbar.php';

if (isset($_SESSION['uname'])) {
    echo "Hello There. Welcome back ". $_SESSION['uname'];
} else {
    echo "<form method=POST>
        <p>email</p>
        <input name='email' type='email'>
        <p>Password</p>
        <input name='pass' type='password'>
        <input type='Submit' value='Send'>
        </form>";
    if (isset($valid) and !$valid){
        echo "<p style='color:red'>Wrong username or password</p>";
    }
}