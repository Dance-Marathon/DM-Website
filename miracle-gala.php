<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Miracle Gala | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax gala">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Miracle Gala</h1>
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
						<li><a href="/golf-tournament">Golf Tournament</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a class="active">Miracle Gala</a></li>
						<li><a href="/Warrior">Warrior Run</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Miracle Gala</h2>

				<p>What better way to celebrate Dance Marathon at UF weekend than by enjoying an evening of fine dining and celebrating our year long efforts to raise funds and awareness for UF Health Shands Children’s Hospital? This year’s Miracle Gala will take place on Saturday, March 30th, 2019 at the Holloway Touchdown Terrace at Ben Hill Griffin Stadium. The itinerary for the evening: </p>
					<ul>
						<li>6:00 PM: Cocktail Hour</li>
						<li>6:00-7:30 PM: Optional tour of Main Event</li>
						<li>8:00 PM: Dinner, Silent Auction, Raise the Paddle</li>
					</ul>

				<p>For more information, please contact the Community Outreach Overall Director, Grace Murray, at <a href = mailto:gmurray@floridadm.org>gmurray@floridadm.org</a>. Ticket sales and sponsorship opportunities found in our Sponsorship Packet <a href=https://drive.google.com/file/d/13Zo9qCGQePTCzvzRkCtkOgfnnBBEM2NN/view>here</a>. We look forward to seeing you there!</p>

				<p><a href=https://squareup.com/market/dance-marathon-at-uf/item/miracle-gala>Tickets can be bought here</a></p>

			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
