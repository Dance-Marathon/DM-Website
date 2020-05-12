<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Miracle Gala | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax miraclesincolor">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Miracles in Color 5K</h1>
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
		  				<li><a href="/dance-marathon">Dance Marathon 2020</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a class="/miracle-gala">Miracle Gala</a></li>
						<li><a href="active">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a href="/Moral-Madness">Moral Madness</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Miracles in Color 5K</h2>

                <p>Our annual Miracles in Color 5k is a color run. Runners and walkers become vibrant and colorful throughout the course as they pass by our many color stations. This event is great for all ages and athletic abilities and includes free food, a live DJ, and more! It will be held in February 2021, and registration for the event will open at the end of 2020.</p>

			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
