<?php 
include_once 'navbar.php';
include_once 'util.php';

include 'db/dbhandler.php';
include 'db/register_db.php';

//if(isset($_POST['fn'])){
if(!empty($_POST) ){
    $conn = connect();
    if(! validate_register($conn, $_POST['email'])){
        echo "User already exists";        
    } else {
        $ret = register($conn, array('title' => $_POST['title'],
                'fn' => $_POST['fn'],
                'ln' => $_POST['ln'],
                'email' => $_POST['email'],
                'pass' => $_POST['pass']
        ));
        
        if ($ret){
            echo "Welcome" . with_sal(full_name($_POST['fn'], $_POST['ln']), $_POST['title']);
            echo "Successfully registered";
            echo "You can now login. <a href='login.php'>Login</a>";
        }
    }
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
include 'footer.php';
?>


