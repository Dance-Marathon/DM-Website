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
		  				<li><a href="/dance-marathon">Dance Marathon 2021</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a class="active">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a href="/Moral-Madness">Morale Madness</a></li>
						<li><a href="/Transform-Today">Transform Today</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Miracle Gala</h2>

<p>Tickets for Dance Marathon Miracle Gala 2020 are now available <a href="https://squareup.com/market/dance-marathon-at-uf/item/miracle-gala-ticket">here!</a></p>
<p>Each year, we invite guests to join us for an evening of fine dining and dancing to recognize all of the accomplishments of Dance Marathon at UF and the doctors at UF Health Shands Children’s Hospital. The Miracle Gala is a beautiful night to celebrate our movement and the incredible strides we make each year!</p>
 <p>For more information, please contact the Community Outreach Overall Director, Grace Crowder, at <a href="mailto:gcrowder@floridadm.org">gcrowder@floridadm.org</a>. We look forward to seeing you there!</p>

			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
