<?php
	$status = "open";
	$GLOBALS['page_title'] = 'CMNH & UF Health | About | Dance Marathon at UF';
	$GLOBALS['parent'] = 'about';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax uf-health">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>CMNH & UF Health</h1>
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
            <li><a class="active">CMN & UF Health</a></li>
						<li><a href="/fastfacts-nomenclature">Fast Facts / Nomenclature</a></li>
						<li><a href="/faq">FAQ</a></li>
						<li><a href="meet-the-kids.php">Meet the Kids</a></li>
            <li><a href="/our-story">Our Story</a></li>
            <li><a href="/press-releases">Press Release</a></li>

          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
			<p>UF Health Shands Children’s Hospital is the local Children’s Miracle Network participating hospital for the North Central Florida, South Georgia and West Palm Beach areas. Children’s Miracle Network is an international non-profit organization dedicated to raising funds and awareness for children’s hospitals. CMN’s founding pledge, to keep all donations in the area in which they were raised, remains at the core of its philosophy.</p>
			<p>As the state’s premier pediatric health center, UF Health Shands Children’s Hospital provides innovative and comprehensive care at the highest standards of quality and service in partnership with patient families, healthcare teams, and communities. Community contributions support pediatric research and help to purchase the latest technology and equipment. Donations also help make hospital stays more comfortable and enjoyable for pediatric patients and their families. </p>
			<p>Ranked one of the top 50 pediatric hospitals in the nation in seven categories, UF Health Shands Children’s Hospital and Children’s Miracle Network have created one of the greatest facilities of care for children and young adults.</p>
  			<p>For more information, please visit: <a href="https://ufhealth.org/shands-hospital-children-uf">https://ufhealth.org/shands-hospital-children-uf</a></p>
				<img src="/assets/images/TriBrandColors.png" alt="FT5K shirt" style="max-width:80%;max-height: 80%">

		  <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
