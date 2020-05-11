<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Warrior Run | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
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
						<li><a href="/dance-marathon">Dance Marathon 2019</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a class="active">Warrior Run</a></li>
						<li><a href="/ft5k">FT5K</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Warrior Run</h2>


  			<p>
			  In the Spring semester, get ready to test your strength and agility as you run, crawl, climb, and jump your way to the finish to see if you have what it takes to be a Miracle Warrior!

				</p>
			<p>Registration for the Warrior Run will open in January. Check back soon for the ticket link, or email Ashley Knoblauch, Productions Overall Director, at <a href="mailto:aknoblauch@floridadm.org">aknoblauch@floridadm.org</a> for more information!</p>


      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
