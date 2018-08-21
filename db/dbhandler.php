<?php
function connect(){
    $server = 'localhost';
    $db = 'blog';
    $db_user = 'root';
    $db_pass = '';
    
    $conn = new mysqli($server, $db_user, $db_pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function close($conn){
    $conn->close();
}