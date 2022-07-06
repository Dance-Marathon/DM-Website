<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Miracle Gala | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.gala {
background-image: url("/assets/images/BannerPhotos21/Overnight_SarahD30.jpg");
}
</style>
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
<!--
<p><a href=https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5106>Purchase your tickets here!</a>
-->

<p>Each year, Dance Marathon at UF hosts their Annual Miracle Gala the first night of the Main Event. This year, the Annual Miracle Gala will be held on March 26th, 2022 from 6 PM - 9 PM EST. This year’s Miracle Gala theme is Change Their Future in tribute to our yearlong campaign to #ChooseChange. We hope you will join us to raise funds and awareness for the children at UF Health Shands Children’s Hospital and help Change Their Future.</p>
<p>This black-tie event is designed for the Dance Marathon at UF community to celebrate a year of achievements, meet other community members and our Miracle Families, experience fine dining, hear from guest speakers, receive exclusive tours of the Main Event, participate in our Silent Auction, and take part in our Raise the Paddle fundraiser which benefits a participant of the donor’s choice. </p>
<p>The night will be filled with many Special Guests, including Miracle Families, UF Health Shands Staff, Community Partners, Sponsors, members of our High School Program, Keynote Speakers, an Alumni Spotlight, and more!</p>
<p>Ticket sales will be launched shortly! When they become available, they will be found here. </p>
<p>For more information or questions about sponsoring the event, please contact the Community Outreach Overall Director, Bridget Richer, at <a href=mailto:bricher@floridadm.org>bricher@floridadm.org</a>. We look forward to seeing you there! </p>    
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
