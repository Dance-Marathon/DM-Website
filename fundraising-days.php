<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Fundraising Days | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax community_events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Fundraising Days</h1>
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
			<li><a href="/community-events">Campus Events</a></li>
            <li><a href="/mini-marathon">Mini-Marathon</a></li>
            <li><a href="/ft5k">FT5K</a></li>
            <li><a class="active">Fundraising Days</a></li><!--NOT YET MADE -->
            <li><a href="/gala">Gala</a></li><!--NOT YET MADE -->
            <!--<li><a href="/event">Event</a></li><!--NOT YET MADE -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Transform Today</h2>

  			
  			Why
  			
  			<ul>

  			<li>For 26.2 hours, Dance Marathon at the University of Florida unites to shatter records during this state-wide fundraising campaign, bringing together high school and college students across the state. </li>
  			</ul>

  			
  			Around When?
  			
  			<ul>
  			<li> It’s a surprise! Every year this event occurs without public knowledge and motivates fundraising through a 26.2 hour campaign. </li>
  			</ul>
  			
  			What
  			
  			<ul>
  			<li> 26.2 hour fundraising campaign involving Dance Marathon at the University of Florida beginning in the morning at 8:00am and ending the subsequent day at 10:12 am. </li>
  			</ul>

  			<h2>Multiplying Miracles</h2>

  			
  			Why
  			
  			<ul>
  				<li>
  				This is an opportunity to celebrate the unique history of our organization while raising money and awareness during the final period leading up to our main event. 
  				</li>

  			</ul>
  			
  			Around When?
  			
  			<ul>
  				<li> 
				This event occurs around one month prior to our main event in March. Typically, this leads to it taking place in late February. 
  				</li>

  			</ul>
  			
  			What
  			
  			<ul>
  				<li>Specific campaign that falls during the final days of “money turn-in” the time period during which organizations have their final fundraising push to secure more dancer spots.  </li>
  			</ul>
  			<p>

      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>