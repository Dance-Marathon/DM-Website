<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Sponsors | Florida Dance Marathon';
	$GLOBALS['parent'] = 'sponsors';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax sponsors">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Sponsors</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
      <?php if ($status == "open") { ?>
  			<p>Dance Marathon at the University of Florida would not be what it is today without the help of local and national sponsors. Sponsors have the chance to be an integral part of the most successful student-run philanthropy in the southeastern United States. This honor highlights the immense exposure gained by our sponsors.</p>
  			<p>For information, to sign up as a sponsor, or donate in-kind items, email the External Communications Overall Director, Andrew Giacini, at <a href="mailto:agiacini@floridadm.org">agiacini@floridadm.org</a>.</p>
  			<h3>Corporate & Business Sponsors</h3>
  			<p>Dance Marathon at the University of Florida is more than a weekend event, it is a yearlong fundraising effort and celebration for Children's Miracle Network Hospitals. Throughout the year, more than 6,000 UF students in more than 100 student organizations attend community events, fundraising nights at local businesses and engage in contests, often via social media, to benefit our sponsors. During the weekend event, more than 2,500 Overall Directors, Captains, Staff members, Miracle Families, and Dancers spend 26.2 hours in the Stephen C. O'Connell Center, offering continuous brand exposure for our sponsors. We receive more than 220,000 web hits annually, have more than 10,200 Facebook fans, over 4,700 Twitter followers, and more than 2,300 Instagram followers. If your company targets young professionals and enjoys giving back to a wonderful cause, Dance Marathon at the University of Florida is a great match for your company.</p>
  			<h3>In-Kind Donations</h3>
  			<p>Dance Marathon at the University of Florida graciously welcomes in-kind donations from local and national sponsors. We use in-kind donations as items in our silent auction, fundraising efforts, and food donations to feed participants at the main event and at our community events. We'd love anything your company would be willing donate.</p>
  			<h3>Marketing Kit</h3>
  			<a href="/docs/MarketingKit2015.pdf">&raquo; View PDF</a>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>