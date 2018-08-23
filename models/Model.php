<?php
include 'classes/DBHandler.php';
class Model
{
    private $dbh ;
    private $table;
    public function __construct($table){
        $this->table = $table;
        $this->dbh = new DBHandler('localhost', 'root', '','blog');
    }
    public function query($sql){
        $rows = array();
        $result = $this->dbh->query($sql);
        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                array_push($rows, $row);
            }
        }
        return $rows;
        
    }
    public function getAll(){
        $sql = 'SELECT * FROM ' . $this->table;
        return $this->query($sql);
    }
        
    public function get($id){
        $sql = 'SELECT * FROM ' . $this->table . ' where id=' . $id;
        return $this->query($sql);
    }
    public function execute($sql){
        return $this->dbh->query($sql);
    }
}

