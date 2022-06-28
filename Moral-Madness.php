<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Morale Madness | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.madness {
background-image: url("/assets/images/BannerPhotos21/Katerina_R-16.jpg");
}
</style>
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

          
                <p> Purchase tickets <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5062" target="_blank">HERE!</a>
                <p>Morale Madness is a 10 v. 10 kickball tournament taking place on February 27th from 12-5:30 p.m. Read below for more information regarding the event, teams, and tickets. </p>
				<p><b>What:</b> 10 v. 10 kickball tournament </p>
				<p><b>Where:</b> RecSports Softball Fields </p>
				<p><b>When:</b> Sunday, February 27th from 12-5:30 p.m. Game times will be staggered, your team will be contacted closer to the event with information regarding your specific start time. </p>
				<p><b>Teams:</b> Teams should be composed of 10 players!</p>
				<p><b>Tickets:</b> Tickets will be available on January 24th. Tickets can be purchased online in one of three ways. A Spectator Ticket ($3) grants you access to the event and all we have to offer, but does not grant you access to play in the tournament. If you want to play in the tournament purchase either a $5 Player Ticket or a $50 Team Ticket using the “Team Ticket” option. We hope to see you there for all of the fun and to learn more about UF Health Shands Children’s Hospital. </p>
				<p>For more information, please contact the Morale Overall Director, Victoria Leary, at <a href="mailto:vleary@floridadm.org">vleary@floridadm.org</a>.</p>
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
