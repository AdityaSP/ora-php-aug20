<?php
var_dump($_FILES);

echo "<hr>";
var_dump($_POST);
$filename = 'blog_pics/' . time() . $_FILES['myfile']['name'];
echo "new file name is " . $filename;

if ($_FILES['myfile']['size'] > 1000000){
    die("Too big to upload");
}

$ext = pathinfo($_FILES['myfile']['name'],PATHINFO_EXTENSION);
echo $ext;
#move_uploaded_file($_FILES['myfile']['tmp_name'], $filename);