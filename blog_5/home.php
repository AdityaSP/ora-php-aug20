<?php
include 'navbar.php';
include 'classes/Blog.php';
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?php 
		$blog = new Blog();
		 echo $blog->render_blog();
		?>
	</div>
	<div class="col-md-2"></div>
</div>
<?php
include 'footer.php';
?>