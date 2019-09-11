<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Golf Tournament | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax golf">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Golf Tournament</h1>
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
						<li><a href="/dance-marathon">Dance Marathon 2018</a></li>
						<li><a class="active">Golf Tournament</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Warrior">Warrior Run</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Golf Tournament</h2>
				<h3>Fore The Kids Miracle Scramble benefiting Dance Marathon at the University of Florida</h3>

  			<p>
					The Fore The Kids Miracle Scramble benefiting Dance Marathon at the University of Florida will be held on Sunday, October 15, 2017 at the Haile Plantation Golf and Country Club. Check-in will begin at 11:30 AM with a shotgun start at 1:00 PM.
					<p>
						Registration includes:
						<ul>
							<li>food throughout the afternoon</li>
							<li>dinner</li>
							<li>drinks</li>
							<li>a polo shirt</li>
							<li>the opportunity to win one-of-a-kind-prizes!</li>
						</ul>
						<p>
							All proceeds benefit UF Health Shands Children’s Hospital!
						<p>
							Individual Registration: $150 (individuals will be placed with a team of four for the event)
							Team Registration: $550 (registration for one foursome)
						<p>
						<a href="https://docs.google.com/forms/d/e/1FAIpQLScuud_MP459BJAKo5LDh8h9vgfCOHIF_c9qPipAcgOK9uoCVA/viewform">Register here!</a>
						<p>
							Registration will close on Monday, October 9, 2017 at 11:59 PM.
							Interested in Sponsoring this event? Contact Outreach Overall Director, Matt Migliazza -
						<a href="mailto:mmigliazza@floridadm.org">mmigliazza@floridadm.org</a>
						<p>
						<h3>Sponsorship Levels</h3>
						<p>
						$5,000 - Golf Cart Sponsor
						<ul>
							<li>registration for two foursomes in the tournament </li>
							<li>signage on all golf carts used during the tournament</li>
							<li>opportunity to have a table or banner set up during check-in and dinner</li>
							<li>verbal recognition during opening and closing ceremonies</li>
							<li>opportunity to provide branded gift items, cards, or flyers for golfers</li>
							<li>sponsor recognition in any printed material at the tournament</li>
							<li>recognition on the Dance Marathon at UF website</li>
						</ul>
						<p>
						$3,500 -  Club House Sponsor
						<ul>
							<li>registration for two foursomes in the tournament</li>
							<li>exclusive Club House Sponsor Sign at holes 10 and 18</li>
							<li>opportunity to have a table set up at the sponsored holes or during registration</li>
							<li>verbal recognition during opening and closing ceremonies</li>
							<li>opportunity to provide branded gift items, cards, or flyers for golfers</li>
							<li>sponsor recognition in any printed material at the tournament</li>
							<li>recognition on the Dance Marathon at UF website</li>
						</ul>
						<p>
						$2,000 - Hole Sponsor
						<ul>
							<li>registration for two foursomes in the tournament </li>
							<li>signage at a hole on the course</li>
							<li>opportunity to have a table set up at the sponsored hole</li>
							<li>verbal recognition during opening and closing ceremonies</li>
							<li>opportunity to provide branded gift items, cards, or flyers for golfers</li>
							<li>sponsor recognition in any printed material at the tournament</li>
							<li>recognition on the Dance Marathon at UF website</li>
						</ul>
						<p>
						$1,000 - Tee Sponsor
						<ul>
							<li>registration for one foursomes in the tournament </li>
							<li>verbal recognition during opening and closing ceremonies</li>
							<li>opportunity to provide branded gift items, cards, or flyers for golfers</li>
							<li>sponsor recognition in any printed material at the tournament</li>
							<li>recognition on the Dance Marathon at UF website</li>
						</ul>
						<p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
