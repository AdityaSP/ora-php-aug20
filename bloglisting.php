
<?php
include 'session.php';
include 'navbar.php';
include 'views/BlogView.php';
$bv = new BlogView();
if(! empty($_GET)){
    if (isset($_GET['action']) and $_GET['action']=='delete'){
        if(isset($_GET['id'])){
            $ret = $bv->delete($_GET['id'], $_SESSION['uname']);
        }
    }
}


?>
<div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Content</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php 
					$bv->render_blog_listing($bv->get_blog_author($_SESSION['uname']));
					?>	
					</tbody>
				</table>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</div>

<?php
include 'footer.php';