<?php
function validate_register($conn, $email){
    $sql = 'select email, pass from users where email="' . $email . '"';
    $result = $conn->query($sql);
    if ($result->num_rows>0)
        return false;
    return true;
}

function register($conn, $user){
    $sql = 'insert into users values(null,
    "'. $user['title'].'",
    "'. $user['fn'] . '",
    "'. $user['ln'] . '",
    "'. $user['email'] . '",
    "'. $user['pass'] . '"
    )';
    $ret = $conn->query($sql);
    return $ret;
}