<?php
	$status = "open";
	$GLOBALS['page_title'] = 'FT5K | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax community_eventsyea">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Miracles In The Milky Way</h1>
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
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
            <li><a href="/ft5k" class="active">FT5K</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Miracles In The Milky Way</h2>
				<p><i>It is our displeasure to announce that the Miracles in the Milky Way FT5K set for Sunday, January 22, will be rescheduled. After thoughtful discussions between our organization, the University of Florida and the National Weather Service, it has been decided that holding the race would present unsafe conditions for participants and attendees. Thunderstorms will be moving through the Gainesville area throughout the day along with high winds and chance of tornado warnings. </p>
				<p> Thank you to all who registered in support of UF Health Shands Children's Hospital. The race is likely to be rescheduled for Sunday, February 19. Registration for the race is currently closed, but it will reopen on Sunday, January 22, at 5 p.m. An email confirming the rescheduled date, including additional details regarding time and location, will be sent to all registered participants by the end of next week. All registered participants will be able to run in the rescheduled race and will also receive their runners’ packets. </p>
				<p>Thank you for your patience and understanding,</p>
				<p>DM at UF </i></p>
  			<p>Dance Marathon at UF’s annual FT5K is a 5K race benefitting UF Health Shands Children’s Hospital and Children’s Miracle Network. In its fourth year, the FT5K will bring together students and Gainesville community members, alike. This year, DM at UF is taking the race out of this world with the theme of Miracles in the Milky Way. <b>The galactical race will begin on Flavet Field at 11 a.m. on TBA</b> Following will be a stellar <b>post-race runner’s celebration on Flavet </b>where participants and onlookers can enjoy food, music, giveaways and games as we also award the top finishers from the race.</p>
				<h3>Sign Up</h3>
				<p>Whether you’re a walker or a runner, anyone can register to participate! The registration fee is $25 and will include a t-shirt.</p>
					<p><b> Sign ups are open! </b>
					<a href="http://events.dancemarathon.com/event/MilkyWayFT5K" target="_blank">Sign up here</a>, to participate in the FT5K! </p>
					<img src="/assets/images/MilkyWayShirt-01.png" alt="FT5K shirt" style="max-width:100%;max-height: 100%">
				<p> <b>Won’t be in Gainesville on this date? No worries! </b> You can register for our <b>virtual FT5K</b>, in which you can pledge to run 3 miles in a different location on the day of the race. This is a great way to get your friends and family together and run through your local community! Registration will be $25, and after proof of running the 5K, you will be mailed your runner’s packet and t-shirt.</p>
<p>If you have any questions, please contact Adam Lassley,  Community Events Overall at <a href="mailto:alassley@floridadm.org">alassley@floridadm.org</a></p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
