<?php
	$status = "open";
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
    			<h1>FTKrew</h1>
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
						<li><a class="active">FTKrew</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <p>Out with the old and in with the new.  We have listened to your feedback about Staff and created a new position that is more involved and invested in Dance Marathon at the University of Florida, called FTKrew.  There are two different FTKrew teams, Morale FTKrew and Marathon FTKrew.  Morale FTKrew will be working with a specific theme hour throughout the event and assisting Morale Captains with their tasks. Marathon FTKew will work with the Dancer Relations, Operations and Hospitality team captains to help with their responsibilities throughout the event. </p> <p> As a member of the FTKrew, you will be asked to attend meetings throughout the spring semester, attend all Dance Marathon at UF events and fundraise $300.  Interviews will be held, January 4th-8th from 5-10pm.  A doodle will be emailed to you after applications close.  Selections will be made after interviews.  <p>We are excited to offer these new teams and to extend our Dance Marathon family!  If you have any questions, please contact Jenna Baxter at jbaxter@floridadm.org</p>
		<ul>
			<li><a href="http://goo.gl/forms/d4u1dcqWCD" target="_blank">2016 FTKrew Application</a></li>
			<li><a href="http://goo.gl/forms/d4u1dcqWCD" target="_blank">Payment Link</a></li>
		</ul>
        <p>Please direct questions to Jenna Baxter, current Internal Communications Overall Director at <a href="mailto:jbaxter@floridadm.org">jbaxter@floridadm.org</a>.</p>
      <?php } else { ?>
        <p class="alert alert-info"><b>Note:</b> FTKrew Applications are closed.</p>
        <p>Please direct questions to Jenna Baxter, current Internal Communications Overall Director at <a href="mailto:jbaxter@floridadm.org">jbaxter@floridadm.org</a>.</p>
      <?php } ?>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
