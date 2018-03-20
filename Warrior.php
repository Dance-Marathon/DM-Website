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
						<li><a href="/golf-tournament">Golf Tournament</a></li>
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
					On February 11th, get ready to test your strength and agility as you run, crawl, climb, and jump your way to the finish to see if you have what it takes to be a Miracle Warrior!
				</p>
				<ul>
					<li>1:00pm - Check-in and day-of registration</li>
					<li>1:30pm - Kids Race</li>
					<li>2:00pm - First heat of the Warrior Run</li>
				</ul>
					<p>
						<b>Registration:</b>
					Warrior Run: $25 ($30 day-of)
					Kids race (ages 12 & under): $10 or included free with adult registration (parent supervision required for all participants)
					</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
