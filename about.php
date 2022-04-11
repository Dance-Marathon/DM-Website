<?php
	$status = "open";
	$GLOBALS['page_title'] = 'About | Dance Marathon at UF';
	$GLOBALS['parent'] = 'about';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.about {
background-image: url("/assets/images/BannerPhotos21/Charles_H-14.jpg");
}
</style>

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
						<li><a href="/blog">Blog</a></li>
						<li><a href="/uf-health">CMN & UF Health</a></li>
						<li><a href="/fastfacts-nomenclature">Fast Facts / Nomenclature</a></li><!-- page not made-->
						<li><a href="/faq">FAQ</a></li>
						<li><a href="/meet-the-kids">Meet The Kids</a></li>
						<li><a href="/our-story">Our Story</a></li>
						<li><a href="/press-releases">Press Release</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  			<p>Dance Marathon at the University of Florida is an annual event benefiting the patients of UF Health Shands Children's Hospital in Gainesville, Florida. Each year, students stay awake and on their feet, if able, to raise money and awareness for Children's Miracle Network Hospitals for the duration of the event. In the 28 years of Dance Marathon at UF's existence, we have raised more than $24 million, making it the most successful student-run philanthropy in the southeastern United States. In 2021, DM at UF raised a grand total of $2,334,217.21 for UF Health Shands Children's Hospital, our local Children’s Miracle Network hospital.</p>
        <p>Out of 150,000 yearly patients, UF Health Shands Children’s Hospital sees more than 8,500 pediatric cases each year. All of the funds raised by DM at UF go directly to purchasing state-of-the-art medical equipment, enhancements to make the children’s stay at the hospital more enjoyable, and funding for research grants and educational programs.</p>
		<p>Patient care funding provides necessities such as bandages and patient gowns, as well as equipment and hospital improvements to make hospital stays more enjoyable for children and their families. Research funding helps our doctors find solutions for incurable diseases such as cystic fibrosis and cancer, and it allows them to develop life-saving technology and enhanced processes that improve the daily lives of pediatric patients. Education funding supports programs such as Child Life Diversion therapy and goes toward raising funds and awareness for the Children’s Miracle Network.</p>
		<p>As we head into our 28th year, Dance Marathon at UF is excited to make even more miracles!</p>
				 <!-- Get updated numbers fro how many people visit UF Health-->
		  <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
