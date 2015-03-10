<?php
	$status = "open";
	$GLOBALS['page_title'] = 'FT5K | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>2015 FT5K Registration</h1>
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
						<li><a href="/community-events">Community Events</a></li>
						<li><a href="/hsdm">High School DM</a></li>
            <li><a href="/ft5k" class="active">FT5K 2015</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>Event Information</h3>
  			<p>The theme for this year's run is superhero-themed "Up Up and Away" FT5K and Mini K Fun Run. As a reminder,
  			 the Mini K Fun Run is for participants of ages 12 and under.</p>
        <p>The race will be held Sunday, February 8th. Registration will start at 8:00am, FT5K will start at 9am, and the Mini K Fun Run will start at 10am at the UF Commuter Lot on campus.</p>
        <p>If you have any questions, please contact Jacqueline Papilsky at <a href="mailto:jpapilsky@floridadm.org">jpapilsky@floridadm.org</a>.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
