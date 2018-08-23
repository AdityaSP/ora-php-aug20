<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>My blog!</title>

<meta name="description" content="Source code generated using layoutit.com">
<meta name="author" content="LayoutIt!">

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="row">
<div class="col-md-2">
<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg">
</div>
<div class="col-md-10">
<h1>
My Blog
</h1>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="navbar-nav">
<?php
if (isset($_SESSION['uname'])){
?>    
        <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="landingpage.php">Admin</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
        </li>
        
<?php     
} else {
?>
        <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
        </li>
<?php
}
?>
</ul>
</div>
</nav>
</div>
</div>
