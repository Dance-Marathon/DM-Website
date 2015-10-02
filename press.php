<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Press | Florida Dance Marathon';
	$GLOBALS['parent'] = 'press';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax press">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Press</h1>
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
						<li><a href="/nomenclature">Nomenclature</a></li>
						<li><a href="/press-releases">Press Releases</a></li>
						<li><a href="/press-contacts">Press Contacts</a></li>
						<li><a href="/fast-facts">Fast Facts</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  			<p>Dance Marathon at the University of Florida is an annual 26.2-hour event benefiting the patients of UF Health Shands Children's Hospital in Gainesville, Florida. Each year, more than 800 students stay awake and on their feet to raise money and awareness for Children's Miracle Network Hospitals. In the 21 years of Dance Marathon at UF's existence, more than $10 million have been donated, making it the most successful student-run philanthropy in the Southeastern United States. In 2015, DM at UF raised a grand total of $2,015,307.17 for Children's Miracle Network Hospitals at UF Health Shands Children's Hospital. Dance Marathon is celebrating its 22nd birthday in 2016. Many children and families have received tremendous care and support while they battle diseases and illnesses because of the dedication and endless hard work of the students at UF over the past 21 years.</p>
  			<p>Thank you for your interest in Dance Marathon at the University of Florida. You will find many resources for press in this section of the website.</p>
  			<p>If you have any questions, please contact the Public Relations Overall Director, Armani Abreu at <a href="mailto:aabreu@floridadm.org">aabreu@floridadm.org</a>.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>