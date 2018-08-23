<?php
class DBHandler
{
    private $conn;
    public function __construct($s, $dbu, $dbp, $db){
        $this->conn = new mysqli($s, $dbu, $dbp, $db);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    }
    
    public function get_conn(){
        return $this->conn;
    }
    public function close(){
        $this->conn->close();
    }
    public function query($sql){
        return $this->conn->query($sql);
    }
    
}

