<?php
include 'classes/User.php';
$user = new User('sp.aditya@gmail.com', 'admin');
echo $user->isUser();
echo User::sayhi();