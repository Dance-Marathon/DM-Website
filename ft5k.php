<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Warrior Run | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax ft5k">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>FT5K</h1>
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
						<li><a href="/Warrior">Warrior Run</a></li>
						<li><a class="active">FT5K</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>FT5K</h2>
				<p>FT5K is a 5K race that brings together the UF campus and Gainesville community to benefit our Miracle Families at UF Health Shands Children’s Hospital. FT5K will take place in the Spring semester.</p>
				<p>Registration for FT5K will open in January. Check back soon for the ticket link, or email Ashley Knoblauch, Productions Overall Director, at <a href="mailto:aknoblauch@floridadm.org">aknoblauch@floridadm.org for more information!</p>

      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>