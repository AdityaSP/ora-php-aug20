<?php

include 'models/Blog.php';
class BlogView{
    private $model;
    public function __construct(){
        $this->model = new Blog('blogs');
    }
    public function render_all(){
        $blogs = $this->model->getAll();
        $view = '';
       
        foreach($blogs as $blog){
            $img_tag = '';
            if (isset($blog['img']) and $blog['img']!='')
                $img_tag = "<img width=100% style='padding:75px' src=". $blog['img'] . ">";

            $view = $view . '<div class="card">
			<h5 class="card-header">'. $blog['title'] .'</h5>
			<div class="card-body">
                '. $img_tag .'
				<p class="card-text">'. $blog['body'] .'</p>
			</div>
			<div class="card-footer">'.$blog['author'].'</div>
		</div><br>';
        }
        return $view;
    }
    public function create($title, $body, $author, $img){
        return $this->model->create($title, $body, $author, $img);
        
    }
    public function get_blog_author($author){
        return $this->model->get_blog_author($author);
    }
    public function render_blog_listing($rows){
        $table_rows = '';
            foreach($rows as $row){
                echo '<tr>
							<td>'.$row['id'].'</td>
							<td>'.$row['title'].'</td>
							<td>'. $row['body'] . '...</td>
							<td><a href=bloglisting.php?action=delete&id='.$row['id'].'>Delete</a></td>
						</tr>';
            }
    }
    public function delete($id, $author){
        return $this->model->delete($id, $author);
    }
}

