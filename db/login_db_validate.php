<?php
function login_db_validate($conn, $uname, $pass){
    $sql = 'select email, pass from users where email="' . $uname . '" and pass="' . $pass . '"';
    $result = $conn->query($sql);
    if ($result->num_rows>0)
        return true;
    return false;
}