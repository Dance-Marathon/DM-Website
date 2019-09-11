<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Events | Dance Marathon at UF';
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
            <li><a href="/mini-marathon">Mini-Marathon</a></li>
            <li><a href="/miracle-gala">Miracle Gala</a></li>
            <li><a href="/golf-tournament">Golf Tournament</a></li>
            <li><a href="/dance-marathon">Dance Marathon</a></li>

           <!-- <li><a href="/event">Event</a></li>NOT YET MADE -->

				<!--<li><a href="/dance-marathon">Dance Marathon 2016</a></li>
				<li><a href="/eventsurvey">DM 2015 Event Survey</a></li>-->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>A Yearlong Philanthropy</h3>
        <p>Dance Marathon is a yearlong commitment that includes many fundraising events aimed at reaching University students, businesses, and Gainesville residents. These events help us create a fun and exciting atmosphere while raising awareness about DM, whether it is through social media or inspirational stories from our Miracle Children who speak at the events. DM at UF's community events are all highly anticipated as they build up throughout the year toward the main Event in the spring.</p>
        <p>Your involvement in these events is what makes them successful! Reaching out for the support of the entire community is vital for the continued success of Gainesville's local Children's Miracle Network Hospital. For more information about how to get involved in these events, please contact us at <a href="floridadm@floridadm.org">floridadm@floridadm.org</a>.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
