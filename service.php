<?php
$status = "open";
$GLOBALS['page_title'] = 'Service | Students | Dance Marathon at UF';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>

<style>
.page-heading.parallax.service {
background-image: url("/assets/images/BannerPhotos21/Gracie C13.jpg");
}
</style>

<div class="page-heading parallax service">
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
						<li><a href="/alumni">Alumni</a></li>
						<li><a class="ambassadors">Ambassadors</a></li>
						<li><a href="/applications">Applications</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/dancers">Dancers</a></li>
        				<li><a href="/emerging-leaders">Emerging Leaders</a></li>
						<li><a href="/kirstynskrew">Kirstyn's Krew</a></li>
            			<li><a href="/organizations">Organizations</a></li>
						<li><a class="active">Service</a></li>
          
					</ul>
        		</div>
			</div>
			<div class="col-md-8 col-md-push-1">
      		<?php if ($status == "open") { ?>
			<div role="tabpanel">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#service" aria-controls="service" role="tab" data-toggle="tab">Service</a></li>
					<li role="presentation"><a href="#dates" aria-controls="dates" role="tab" data-toggle="tab">Volunteer Dates</a></li>
					<li role="presentation"><a href="#partners" aria-controls="partners" role="tab" data-toggle="tab">Community Partners</a></li>
				</ul>

        		<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="service">

						<h3>Service</h3>
						<p>Dance Marathon at UF aims to support the community which gives so much to our cause by uplifting local non-profits and service organizations, our Community Partners,  throughout the year! DM at UF offers service opportunities for our members to engage with these Community Partners year round and earn spirit points. </p>
						<p>If you are interested in becoming a Community Partner or have any questions, please contact our Community Outreach Overall Director, Bridget Richer at
						<a href="mailto:bricher@floridadm.org">bricher@floridadm.org</a>.</p>
        	
					</div>
					<div role="tabpanel" class="tab-pane fade" id="dates">
						<h3>Volunteer Dates</h3>
          				<!--<p>Dance Marathon at University of Florida is an organization led by servant leaders that strive to spread their passion for giving and creating change beyond our immediate campus. Members will receive one spirit point for engaging in a service event. </p>
						<p> Giving Tuesday - November 30th, 2021 </p>
                  		<p> This is an organization-wide service day where all members will be able to dedicate the day to giving back to our community by volunteering with our Community Partners.
              			Please register to volunteer for this event by clicking 
              			<a href="https://docs.google.com/spreadsheets/d/17hRc6pJBqxHhnI-4G_Rkv9ikcnVg46HqPKTsaPnY9bc/edit">here</a>. </p>
          				<p> If you are unable to volunteer, please participate in the Canned Food Drive with Hitchcock Field and Fork Food Pantry between 11/8 - 11/18 by bringing a canned food to your meetings or check-ins for an extra spirit point.</p>-->
						<p> Check back soon! </p>
          			</div>
          			<div role="tabpanel" class="tab-pane fade" id="partners">
						<h3>Meet our Community Partners:</h3>
      					<p>Meet our Community Partners for the 2021- 2022 year! These non-profit and service organizations help better the lives of those who live in the Gainesville Community, the community which gives so much to Dance Marathon at UF. As an organization whose goal is to create change, we hope to uplift our Community Partners throughout the year.
    					</p>
						<div class="col-md-8">
						</div>
							<div style="height: 35px;"></div>
							<div class="row">
							<div class="col-sm-7">
								<img class="img-responsive" style="display: block; margin: auto;" src="assets\images\CommunityPartners-01.png" width="865" height="1080"/></a>


				</div>
				</div>
				</div>
			</div>
      		<?php } else { echo 'This page is currently closed.'; } ?>
		</div>
	</div>
</div>
</div>

<?php include("includes/foot.php"); ?>
