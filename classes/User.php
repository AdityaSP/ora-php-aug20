<?php
include 'DBHandler.php';


class User
{
    public $uname;
    public $pwd;
    public function __construct($uname, $pwd){
        $this->uname = $uname;
        $this->pwd = $pwd;
    }
    public function isUser(){
        $dbh = new DBHandler('localhost', 'root', '', 'blog');
        $sql = 'select email, pass from users where email="' . $this->uname . '" and pass="' . $this->pwd . '"';
        $result = $dbh->conn->query($sql);
        $valid = false;
        if ($result->num_rows>0)
            $valid = true;
        $dbh->conn->close();
        return $valid;
    }    
    static public function sayhi(){
        echo "Hi";
    }
}

