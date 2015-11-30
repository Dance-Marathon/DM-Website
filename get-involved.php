<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Get Involved | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax get-involved">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Get Involved</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
  			<div class="sub-nav">
          <ul>
				<li><a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=786" target="_blank">Register to Fundraise</a></li>
				<li><a href="/delegates">Delegates</a></li>
				<li><a href="/dancers">Dancers</a></li>
				<li><a href="/organizations">Organizations</a></li>
				<li><a href="/captain-teams">Captain Teams</a></li>
				<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
				<li><a href="/ftkrew">FTKrew</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  			<p>Take a look at all the different ways you can get involved with Dance Marathon at UF. Whether you are interested in being a Captain, Dancer, Staff, Delegate or fundraiser, this is your hub for all things involvement! There are so many ways to give back through DM at UF and we would love for you to join our DM family and help make miracles For the Kids.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
