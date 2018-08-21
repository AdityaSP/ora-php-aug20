<?php
$times = 1;
if (isset($_COOKIE['returninguser'])){
    $times = $_COOKIE['returninguser'];
    setcookie("returninguser",++$times);
    if ($times > 5){
        setcookie('returninguser', '', time()-3600);
    }
    echo "Hello, welcome back";
    echo "<hr>";
    var_dump($_COOKIE);
}else{
    setcookie("returninguser",1);
    echo "Hello There";
}

//var_dump($_COOKIE);
