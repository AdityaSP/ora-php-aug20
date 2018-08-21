<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<!--   <form method=GET action='register.php'> -->

<?php 
include_once 'navbar.php';
include_once 'util.php';

//if(isset($_POST['fn'])){
if(! empty($_POST)){
    
    echo "<hr>";
    #echo "Hello " . $_POST['fn'];
    echo "Welcome" . with_sal(full_name($_POST['fn'], $_POST['ln']), $_POST['title']);
    
} else {

$form_str = "<form method=POST action='register.php'>
	<p>First Name </p> 
    <select name='title'>
        <option value='Mr'>Mr</option>
        <option value='Ms'>Ms</option>
    </select>  

	<input name='fn' type='text'> 
	<p>Last Name </p>
	<input name='ln' type='text'>    
    <p>email</p>
	<input name='email' type='email'>
    <p>Password</p>
	<input name='pass' type='password'>
	<input type='Submit' value='Send'> 

</form>";
    echo $form_str; 
}

?>


</body>
</html>
