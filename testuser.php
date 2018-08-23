<?php
// include 'classes/User.php';
// $user = new User('sp.aditya@gmail.com', 'admin');
// echo $user->isUser();
// echo User::sayhi();

// include 'models/Blog.php';
// $blog = new Blog('blogs');
// var_dump($blog->getAll());

include 'views/BlogView.php';
$bv = new BlogView();
var_dump($bv->render_all());