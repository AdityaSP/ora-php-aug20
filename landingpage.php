<?php
include 'session.php';
include 'navbar.php';
include 'views/BlogView.php';
if (! empty($_POST)) {
    if (isset($_POST['title']) and isset($_POST['body'])) {
   
        $filename = 'blog_pics/' . time() . $_FILES['img']['name'];
        $ext = pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION);
        if (!($ext =='jpg' or $ext == 'jpeg' or $ext == 'png')) {
            die("This accepts only image formats of jpg, jpeg, png");
        }
        
        move_uploaded_file($_FILES['img']['tmp_name'], $filename);
        
        $bv = new BlogView();
        var_dump($_POST);
        $ret = $bv->create($_POST['title'], $_POST['body'], $_SESSION['uname'], $filename);
        if ($ret) {
            echo "Blog created successfully. Create another one";
        } else {
            echo "Something went wrong. Please contact the admin";
        }
    }
}

?>
<div class="row">
	<p><a href='bloglisting.php'>View Blog List</a></p>
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form class="form-horizontal" method=POST enctype='multipart/form-data'>
			<fieldset>

				<!-- Form Name -->
				<legend>Create a Blog Post</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="title">Blog Title</label>
					<div class="col-md-5">
						<input id="title" name="title" type="text"
							placeholder="blog title 100 chars" class="form-control input-md"
							required="">

					</div>
				</div>

				<!-- Textarea -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="body">Blog Content</label>
					<div class="col-md-4">
						<textarea class="form-control" id="body" name="body">Any text</textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="img">Blog Image</label>
					<div class="col-md-5">
						<input id="img" name="img" type="file"
							class="form-control input-md">
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="create"></label>
					<div class="col-md-4">
						<button id="create" name="create" class="btn btn-primary">Create
							Blog</button>
					</div>
				</div>

			</fieldset>
		</form>


	</div>
	<div class="col-md-2"></div>
</div>
<?php
include 'footer.php';
?>