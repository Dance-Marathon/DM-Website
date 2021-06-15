<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Miracle Gala | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.moralloween {
background-image: url("/assets/images/BannerPhotos21/Moralloween_SXD101.jpg");
}
</style>
<div class="page-heading parallax moralloween">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Moralloween</h1>
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
					    <li><a href="/dance-marathon-virtual">Dance Marathon Virtual Event 2021</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a class="active">Moralloween</a></li>
						<li><a href="/Moral-Madness">Morale Madness</a></li>
						<li><a href="/Transform-Today">Transform Today</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Moralloween</h2>

                <p>Moralloween is an annual fall fundraiser put on by Dance Marathon at UF, a student-run philanthropy that raises funds and awareness year-round at UF Health Shands Children’s Hospital! Organizations across campus participate by creating booths with activities, candy, and ways to bond with attendees and Miracle Families. Moralloween has a DJ, great food, and is a great way for everyone to get in the Halloween spirit!</p>
				<p>For more information, please contact the Morale Overall Director, Michael Sivilli, at <a href="mailto:msivilli@floridadm.org">msivilli@floridadm.org</a>.</p>
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
