<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Service | Dance Marathon at UF';
	$GLOBALS['parent'] = 'service';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.service {
background-image: url("/assets/images/BannerPhotos21/Gracie C13.jpg");
}
</style>

<div class="page-heading parallax events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Service</h1>
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
		  				<li><a href ="/community-partners">Community Partners</a></li>
						<li><a href="/volunteer-dates">Volunteer</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <p>Dance Marathon at UF aims to support the community which gives so much to our cause by uplifting local non-profits and service organizations, our Community Partners,  throughout the year! DM at UF offers service opportunities for our members to engage with these Community Partners year round and earn spirit points. </p>
        <p>If you are interested in becoming a Community Partner or have any questions, please contact our Community Outreach Overall Director, Melissa Tempest at
            <a href="mtempest@floridadm.org">mtempest@floridadm.org</a>.</p>
>>>>>>> Stashed changes
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
