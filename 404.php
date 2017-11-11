<?php
	$status = "open";
	$GLOBALS['page_title'] = '404 - File Not Found | Dance Marathon at UF';
	$GLOBALS['parent'] = '';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax e404">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
        <?php if ($status == "open") { ?>
    			<h1>Page Not Found</h1>
    			<p>Looks like the page you're trying to access does not exist or has been moved. If you believe this is incorrect, please contact us.</p>
        <?php } else { echo 'This page is currently closed.'; } ?>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<?php include("includes/foot.php"); ?>