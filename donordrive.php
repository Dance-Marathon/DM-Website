<?php
	$status = "open";
	$GLOBALS['page_title'] = 'DonorDrive | Fundraising | Dance Marathon at UF';
	$GLOBALS['parent'] = '';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.DonorDrive {
background-image: url("/assets/images/BannerPhotos21/Katerina_R-51.jpg");
}
</style>
<div class="page-heading parallax DonorDrive">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>DonorDrive</h1>
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

						<li><a class="active">DonorDrive</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
						<li><a href="/fundraising-guide">Fundraising Guide</a></li>
						<li><a href="/fundraising_brackets">Organization Impact Levels</a></li>
            <li><a href="/register-to-fundraise">Register to Fundraise</a></li>




          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>DonorDrive</h2>
				<p>UF Health Shands Children’s Hospital is continuing to use DonorDrive, an online fundraising platform used widely by Children’s Miracle Network Hospitals, for its Dance Marathon programs. Dance Marathon at the University of Florida’s Fundraisers will be creating DonorDrive accounts to begin fundraising for DM at UF 2022. DonorDrive is safe and easy to use, and was utilized by UF Health Shands Children’s Hospital this past year. To create a fundraising page, register using the link below:</p>
				<a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4669" target="_blank">Register To Fundraise</a>
				<p></p>

				<h3>FAQ:</h3>

<b>1. If I had a fundraising page last year, do I need to create a new account with DonorDrive and a new fundraising page this year?</b>
<ul><li>Yes! Each year that you choose to participate with Dance Marathon, you will need to create a fundraising page. </li></ul>
<b>2. What should my billing statement list as the donation charge after I donate online?</b>
<ul><li>Children's Miracle Network</li>
<li>Location: Salt Lake City, UT</li></ul>

<p>If you have any further questions, please contact our Finance Manager, Emily Giles, at <a href="egiles@floridadm.org">egiles@floridadm.org</a>.</p>


      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
