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
		  				<li><a href="/dance-marathon">Dance Marathon 2019</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a class="active">Miracle Gala</a></li>
						<li><a href="/Warrior">Warrior Run</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Miracle Gala</h2>

<p>Each year, we invite guests to join us for an evening of fine dining and dancing to recognize all of the accomplishments of Dance Marathon at UF and the doctors at UF Health Shands Children’s Hospital. The Miracle Gala is a beautiful night to celebrate our movement and the incredible strides we make each year!</p>
 <p>For more information, please contact the Outreach Overall Director, Matt Migliazza, at <a href="mailto:mmigliazza@floridadm.org">mmigliazza@floridadm.org</a>. We look forward to seeing you there!</p>

			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
