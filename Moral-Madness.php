<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Morale Madness | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.madness {
background-image: url("/assets/images/BannerPhotos21/Katerina_R-16.jpg");
}
</style>
<div class="page-heading parallax madness">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Morale Madness</h1>
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
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a class="active">Morale Madness</a></li>
						<li><a href="/transform-today">Transform Today</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Morale Madness</h2>

                <p>Morale Madness is a 10 v. 10 kickball tournament. Read below for more information regarding the event, teams, tickets and safety requirements. </p>
				<p><b>What:</b> 10 v. 10 kickball tournament </p>
				<p><b>Where:</b> TBD </p>
				<p><b>When:</b> TBD. </p>
				<p><b>Teams:</b> All teams can have up to 10 players</p>
				<p><b>Tickets:</b> Tickets will be available soon.</a> Tickets can be purchased online for $5 per player or $50 for your entire team using the “Team Ticket” option. Purchase a ticket to play in the kickball tournament and to learn more about UF Health Shands Children’s Hospital. </p>
				<p>For more information, please contact the Morale Overall Director, Michael Sivilli, at <a href="mailto:msivilli@floridadm.org">msivilli@floridadm.org</a>.</p>
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
