<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Event Survey | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax overall-applications">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>DM 2015 Event Survey</h1>
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
            <li><a class="active">DM 2015 Event Survey</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  		<h3>Click <a href="https://docs.google.com/forms/d/1U1WgKZUicFMxKPCXmaDIiNlaNhMQj2ZDPQLkTfdNeQI/viewform" target="_blank">here</a> to fill out the survey.</h3></br>
  		<p>Dance Marathon at UF is humbled by this year's amazing accomplishments. We know that without your contributions, be they large or small, we would not have reached our goals.</p>
  		<p>As much success as we had this year, we are constantly striving for improvements to our event and would love to hear your opinion. Please consider filling out this event survey, so next year's event can be even better!</p>
        <p>Please direct all inquiries to the Nha-Uyen Hua, the outgoing Internal Communications Overall Director, at <a href="mailto:nhua@floridadm.org">nhua@floridadm.org</a>.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
