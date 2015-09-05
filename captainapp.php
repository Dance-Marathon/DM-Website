<?php
	$status = "closed";
	$GLOBALS['page_title'] = 'Captain Applications | Get Involved | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax captain-applications">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Captain Applications</h1>
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
						<li><a class="active">Captain Applications</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <p>Captain Applications are now open! Applications will be due <b>Friday, September 4th</b>.</p>     
        <p>Each year, Dance Marathon at UF strives to grow and improve. This year we are excited to announce changes to our Captain Teams to help us make bigger and better miracles happen For the Kids!</p>
		<p>As reflected on the application, <i>Art & Layout</i> and <i>Technology</i> are no longer. We have redistributed responsibilities into two new teams: <b>Creative Development and Multimedia</b>.</p>
		<p>The Marketing team has been revamped into 2 new teams: <b>Merchandise and Sponsorships</b>.</p>
		<p>Please be sure to read over the Captain Team descriptions for more details about responsibilities and expectations for each team.</p>
		<ul>
			<li><a href="http://goo.gl/forms/d4u1dcqWCD" target="_blank">2016 Captain Application</a></li>
		</ul>
        <p>Please direct questions to Jenna Baxter, current Internal Communications Overall Director at <a href="mailto:jbaxter@floridadm.org">jbaxter@floridadm.org</a>.</p>
      <?php } else { ?>
        <p class="alert alert-info"><b>Note:</b> Captain applications are closed.</p>
        <p>Please direct questions to Jenna Baxter, current Internal Communications Overall Director at <a href="mailto:jbaxter@floridadm.org">jbaxter@floridadm.org</a>.</p>
      <?php } ?>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
