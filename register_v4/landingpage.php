<?php
include 'session.php';
include 'navbar.php';
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<form class="form-horizontal">
			<fieldset>

				<!-- Form Name -->
				<legend>Form Name</legend>

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