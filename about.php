<?php
	$status = "open";
	$GLOBALS['page_title'] = 'About | Florida Dance Marathon';
	$GLOBALS['parent'] = 'about';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax about">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>About Us</h1>
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
						<li><a href="/dmaa">DMAA</a></li>
						<li><a href="/alumni">Alumni</a></li>
						<li><a href="/faq">FAQ</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  			<p>Dance Marathon at the University of Florida is an annual 26.2-hour event benefiting the patients of UF Health Shands Children's Hospital in Gainesville, Florida. Each year, more than 800 students stay awake and on their feet to raise money and awareness for Children's Miracle Network Hospitals. In the 21 years of Dance Marathon at UF's existence, more than $10 million has been donated, making it the most successful student-run philanthropy in the Southeastern United States. In 2015, DM at UF raised a grand total of $2,015,307.17 for Children's Miracle Network Hospitals at UF Health Shands Children's Hospital, our local Children’s Miracle Network Hospital.</p>
        <p>More than 8,500 pediatric patients visit UF Health Shands Children’s Hospital each year and more than 150,000 patient visits. All of the funds raised through DM at UF go directly to purchase state-of-the-art medical equipment, fund research grants and educational programs, and purchase toys and other items to help make the children’s stay at the hospital more enjoyable. In addition, donations help fund research for cures for some of the most common yet incurable diseases such as diabetes, cystic fibrosis and cancer. Dance Marathon is celebrating its 22nd birthday this upcoming year and is excited to see the miracles we make in 2016! Go Gators and FTK!</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
