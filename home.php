<?php
include 'navbar.php';
include 'views/BlogView.php';
?>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?php 
		$blogview = new BlogView();
		echo $blogview->render_all();
		?>
	</div>
	<div class="col-md-2"></div>
</div>
<?php
include 'footer.php';
?>