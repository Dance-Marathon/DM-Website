<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Warrior Run | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax warrior-run">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Warrior Run</h1>
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
						<!--<li><a href="/golf-tournament">Golf Tournament</a></li>-->
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a class="active">Warrior Run</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Warrior Run</h2>

  			<p>
					Believe in the warrior in you! On Feb. 3, release your inner warrior as you face a series of obstacles that will test your endurance, strength, and agility! Join us on <b>Hume Field</b> starting at 10 a.m. to check in, pick up your t-shirt, and receive your race number. The Miracle Child race will be at 10:30 a.m. and the first official heat of the Warrior Run will start at 11 a.m.!

				</p>
				<ul>
					<li>The registration fee of $15 includes a t-shirt & a secured spot in the race.</li>
					<li>Registration at the door (day of) is $25.</li>
					<li>Registration for children ages 12 and under is $10, but if the parent/guardian of the child registers, the child’s registration fee is waived!</li>
				</ul>
					<p>
						<b>Use the link below to register today for one of our favorite days of the year!</b>
					</p>
					</p>
					<h3><a href=https://squareup.com/market/dance-marathon-at-uf/item/warrior-run-ticket>Tickets can be bought here</a></h3>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
