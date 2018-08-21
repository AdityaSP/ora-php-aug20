<?php
$server = 'localhost';
$db = 'blog';
$db_user = 'root';
$db_pass = '';

$conn = new mysqli($server, $db_user, $db_pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "successfully connected to the database";
}

# Read in mysql
$sql = 'select email, pass from users';
$result = $conn->query($sql);
echo "Fetched" . $result->num_rows ;
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()) {
        var_dump($row);
    }
}
$conn->close();
