<?php
include 'session.php';
include 'navbar.php';
include 'classes/Blog.php';
if (! empty($_POST)){
    if (isset($_POST['title']) and isset($_POST['body'])){
        $blog = new Blog();
        $blog->title = $_POST['title'];
        $blog->body = $_POST['body'];
        $blog->author = $_SESSION['uname'];
        if($blog->insert()){
            echo "Blog created successfully. Create another one";
        } else {
            echo "Something went wrong. Please contact the admin";
        }
    }
}

?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form class="form-horizontal" method=POST>
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