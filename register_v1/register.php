<?php
    echo "Called here <br>";
    #var_dump($GLOBALS);
//     echo "<hr>";
//     echo "Hello ". $GLOBALS['_GET']['fn'];
//     echo "<hr>";
//     var_dump($GLOBALS);
//     echo "<hr>";
//     var_dump($_GET);
//     echo "<hr>";
//     echo "Hello " . $_GET['fn'];
//    var_dump($GLOBALS);
    echo "<hr>";
    echo "Hello ". $GLOBALS['_POST']['fn'];
    echo "<hr>";
    var_dump($GLOBALS);
    echo "<hr>";
    var_dump($_POST);
    echo "<hr>";
    echo "Hello " . $_POST['fn'];
?>