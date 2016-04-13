<?php
	$status = "open";
	$GLOBALS['page_title'] = 'CMNH & UF Health | About | Florida Dance Marathon';
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
						<li><a class="active">CMN & UF Health</a></li>
						<li><a href="/our-story">Our Story</a></li>
						<li><a href="/dmaa">DMAA</a></li>
            			<li><a href="/alumni">Alumni</a></li>
						<li><a href="/faq">FAQ</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <p>UFHealth Shands Children’s Hospital at the University of Florida is the local Children’s Miracle Network participating hospital for the North Central Florida, South Georgia and West Palm Beach areas. Children’s Miracle Network is an international non-profit organization dedicated to raising funds for and awareness of children’s hospitals. CMN’s founding pledge, to keep all donations in the area in which they were raised, remains at the core of its philosophy.</p>
				<p>UFHealth Shands Children’s Hospital is the state’s premier pediatric health center providing innovative and comprehensive care at the highest standards of quality and service in partnership with patient families, healthcare teams and communities. Community contributions help support pediatric research and the purchase of the latest technology to maintain this high standard of clinical care.</p>
  			<p>UFHealth Shands Children’s Hospital is committed to the best medical care and provides a comfortable environment for families during hospital stays. Donations help provide many of the services, programs and amenities that make UFHealth Shands Children’s Hospital a leader in pediatric care.</p>
  			<p>Ranked one of the top 50 pediatric hospitals in the nation in seven categories, UFHealth Shands Children’s Hospital and Children’s Miracle Network have created one of the greatest facilities of care for children and young adults.</p>
  			<p>For more information, please visit: <a href="https://ufhealth.org/shands-hospital-children-uf">https://ufhealth.org/shands-hospital-children-uf</a></p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
