<?php
include 'Model.php';
class Blog extends Model{
    
    public function __construct($table){
        parent::__construct($table);
    }
    
    public function create($title, $body, $author, $img){
        $sql = 'insert into blogs values(null,
        "' . $title .'",
        "' . $body .'",
        "' . $author .'",
        "' . $img .'")
        ';
        var_dump($sql);
        return parent::execute($sql);
    }
    public function get_blog_author($author){
        $sql = 'select * from blogs where author ="' . $author . '"';
        return parent::query($sql);
    }
    public function delete($id, $author){
        $sql = 'delete from blogs where id='. $id. ' and author="' . $author. '"';
        return parent::execute($sql);
    }
}

