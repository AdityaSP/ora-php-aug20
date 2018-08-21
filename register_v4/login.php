<?php
include_once 'navbar.php';
include 'db/dbhandler.php';
include 'db/login_db_validate.php';

function validate(){
    $valid = false;
    $conn = connect();
    $valid = login_db_validate($conn,$_POST['email'],$_POST['pass']);
    close($conn);
    return $valid;
}

if(isset($_POST['email']) and isset($_POST['pass'])){
    $valid = validate();
    if ($valid){
        $_SESSION['uname'] = $_POST['email'];
    }
}

if (isset($_SESSION['uname'])) {
    #echo "Hello There. Welcome back ". $_SESSION['uname'];
    header('Location: landingpage.php');
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

include 'footer.php';