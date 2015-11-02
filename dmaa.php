<?php
	$status = "open";
	$GLOBALS['page_title'] = 'DMAA | About | Florida Dance Marathon';
	$GLOBALS['parent'] = 'about';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax dmaa">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>DMAA</h1>
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
						<li><a href="/uf-health">CMN & UF Health</a></li>
						<li><a href="/our-story">Our Story</a></li>
						<li><a class="active">DMAA</a></li>
						<li><a href="/faq">FAQ</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
     		<h3>About</h3>
  			<p>Since 1995, Dance Marathon at UF has raised over $10 million for UF Health Shands Children's Hospital, our local Children’s Miracle Network Hospital. Thanks to your dedication and support throughout your college years, we have grown to the most successful student-run philanthropy in the region.</p>
  			<p>Your commitment to a worthy cause doesn’t have to end after you graduate. Would you like to join DMAA and recieve benefits for Dance Marathon 2016? <a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=915">Click Here</a> to register and be sure to join our <a href="https://www.facebook.com/FloridaDMAlumni?fref=ts">Alumni Group on Facebook</a> to stay connected to the rest of your Dance Marathon family.</p>
  			<h3>Benefits</h3>
  			<ul>
  				<li>Discounted hotel rates for Dance Marathon Weekend (March 19-20, 2016)</li>
  				<li>An official DMAA t-shirt at the event</li>
  				<li>Special offers to the online DM Store</li>
  				<li>Miracle Breakfast on Sunday of the event</li>
  				<li>Preferred floor access at the event</li>
  				<li>Newsletters keeping you up to date on the happenings of DM at UF and the DMAA</li>
  				<li>Free access to the Friday night DMAA social before the event</li>
  				<li>And <b>more</b> to come!</li>
  			</ul>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
