<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Dance Marathon Live | Florida Dance Marathon';
	$GLOBALS['parent'] = '';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax event-page">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Dance Marathon Live</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
  			<h3>Live Stream</h3>
  		</div>
			<div class="col-md-6">
        <h3>Floor Map</h3>
        <div id="floor-map"><img src="assets/images/odome.png"></div>
			</div>
			<div class="col-md-12">
  			<h3>Event Timeline</h3>
  		</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>