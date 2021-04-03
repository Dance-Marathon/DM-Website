<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Morale Madness | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax madness">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Morale Madness</h1>
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
		  				<li><a href="/dance-marathon">Dance Marathon 2021</a></li>
						<li><a href="/dance-marathon-virtual">Dance Marathon Virtual Event 2021</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a class="active">Morale Madness</a></li>
						<li><a href="/transform-today">Transform Today</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Morale Madness</h2>

                <p>Morale Madness is a 10 v. 10 kickball tournament taking place on March 14 from 1-5 p.m. A virtual option will be available over Zoom for those unable to attend the in-person tournament. Read below for more information regarding the event, teams, tickets and safety requirements. </p>
				<p><b>What:</b> 10 v. 10 kickball tournament </p>
				<p><b>Where:</b> RecSports Softball Fields or virtual</p>
				<p><b>When:</b> Sunday, March 14 from 1-5 p.m. Game times will be staggered, your team will be contacted closer to the event with information regarding your specific time. </p>
				<p><b>Teams:</b> All teams can have up to 10 players</p>
				<p><b>Tickets:</b> Tickets are available <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4558">here.</a> Tickets can be purchased online for $5 per player or $50 for your entire team using the “Team Ticket” option. Purchase a ticket to play in the kickball tournament and to learn more about UF Health Shands Children’s Hospital. Virtual participants do not need to purchase a ticket. </p>
				<p><b>Safety Requirements:</b> All in-person participants will be required to complete a safety clearance questionnaire before signing in at the event and present a “Cleared” ONE.UF status. Participants will be required to wear facial coverings for the entirety of the event; masks with vents or exhalation valves will not be permitted. Masks are highly encouraged over the use of a bandana or gaiter alternative. Participants are encouraged to attend in QuaranTeams of two to four individuals and physical distancing will be enforced throughout the entirety of the event. </p>
				<p>For more information, please contact the Morale Overall Director, Anna Fitzpatrick, at <a href="mailto:afitzpatrick@floridadm.org">afitzpatrick@floridadm.org</a>.</p>
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
