<?php
	$status = "open";
	$GLOBALS['page_title'] = 'About | Dance Marathon at UF';
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
						<li><a href="/fastfacts-nomenclature">Fast Facts / Nomenclature</a></li><!-- page not made-->
						<li><a href="/press-releases">Press Release</a></li>
						<li><a href="/blog">Blog</a></li>
						<li><a href="/faq">FAQ</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  			<p>Dance Marathon at the University of Florida is an annual 26.2 hour event benefiting the patients of UF Health Shands Children's Hospital in Gainesville, Florida. Each year, more than 800 students stay awake and on their feet to raise money and awareness for Children's Miracle Network Hospitals. In the 25 years of Dance Marathon at UF's existence, more than $21.5 million has been donated, making it the most successful student-run philanthropy in the southeastern United States. In 2019, DM at UF raised a grand total of $3,230,025.23 for UF Health Shands Children's Hospital, our local CMN Hospital.</p>
        <p>Out of 150,000 yearly patients, UF Health Shands Children’s Hospital sees more than 8,500 pediatric cases each year. All of the funds raised through DM at UF go directly to purchase state-of-the-art medical equipment, enhancements to make the children’s stay at the hospital more enjoyable, and funding for research grants and educational programs. This imperative research helps our doctors find solutions for incurable diseases such as diabetes, cystic fibrosis and cancer. Dance Marathon is celebrating its 25th birthday this upcoming year and is excited to see the miracles we make in 2020! Go Gators and FTK!</p>
				 <!-- Get updated numbers fro how many people visit UF Health-->
		  <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
