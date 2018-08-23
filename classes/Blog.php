<?php
include 'DBHandler.php';
class Blog
{
    public $id;
    public $title;
    public $body;
    public $author;
    public function getblogs(){
        $dbh = new DBHandler('localhost', 'root', '', 'blog');
        $sql = 'select * from blogs';
        $result = $dbh->conn->query($sql);
        $blog = new Blog();
        if ($result->num_rows>0){
            
            while($row = $result->fetch_assoc()) {
                
                $blog->id = $row['id'];
                $blog->title = $row['title'];
                $blog->body = $row['body'];
                $blog->author = $row['author'];
           }
            
        }
            $dbh->conn->close();
            return $blog;
    }
    public function render_blog(){
        $blog = $this->getblogs();
        return '<div class="card">
			<h5 class="card-header">'. $blog->title .'</h5>
			<div class="card-body">
				<p class="card-text">'. $blog->body .'</p>
			</div>
			<div class="card-footer">'.$blog->author.'</div>
		</div>';
        
    }
    public function insert(){
        $dbh = new DBHandler('localhost', 'root', '', 'blog');
        $sql = 'insert into blogs values(null,
        "' . $this->title .'",
        "' . $this->body .'",
        "' . $this->author .'")
        ';
        $ret = $dbh->conn->query($sql);
        $dbh->conn->close();
        return $ret;
    }
    
}

