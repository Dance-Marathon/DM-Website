<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Events</h1>
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
				<li><a href="/mini-marathon">Mini-Marathon (High School DM)</a></li>
				<li><a href="/dance-marathon">Dance Marathon 2016</a></li>
				<!--<li><a href="/eventsurvey">DM 2015 Event Survey</a></li>-->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>A Year Long Philanthropy</h3>
        <p>Dance Marathon is a yearlong commitment which includes many fundraising events aimed at reaching out to university students, businesses, and Gainesville residents. The main goal of these events is to create a fun and exciting atmosphere while raising awareness about DM, whether it is social media or straight from the mouths of the Miracle Children who speak at the events. These events include a bowling tournament, kickball tournament, 5K run/walk, and kickoff event. They are all highly anticipated as they build up throughout the year toward the "big dance".</p>
        <p>Whether it is fueled by a competitive drive to participate, a supportive attitude to fundraise, or a caring heart to see the meaning behind your contributing efforts, it is your involvement in these events that make them a success. Reaching out for the support of the entire community is vital for the continued success of Gainesville's local Children's Miracle Network Hospital! For more information about to how to get involved in these events, please contact Matt Weider at <a href="mailto:mweider@floridadm.org">mweider@floridadm.org</a></p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
