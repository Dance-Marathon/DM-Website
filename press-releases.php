<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Press Releases | About | Dance Marathon at UF';
	$GLOBALS['parent'] = 'about';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax press">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Press Releases</h1>
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
            <li><a class="active">Press Release</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/faq">FAQ</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>2014-2015 Press Releases</h3>
        <ul>
          <li><a href="/Documents/DM2015PressRelease.pdf" target="_blank">Dance Marathon 2015</a> 03/07/15</li>
          <li><a href="/Documents/FTKanrival2015PressRelease.pdf" target="_blank">FTKarnival</a> 02/24/2015</li>
          <li><a href="/Documents/FT5K-Press-Release-2015.pdf" target="_blank">FT5K</a> 02/08/2015</li>
          <li><a href="/Documents/TransformTodayPressRelease2014.pdf" target="_blank">Transform Today</a> 01/08/15</li>
          <li><a href="/Documents/CYMplify-Food-Truck-Rally-Press-Release.pdf" target="_blank">CYMplify Food Truck Rally</a> 12/05/2014</li>
          <li><a href="/Documents/DMKickball2014.pdf" target="_blank">DM Kickball</a> 10/16/2014</li>
        </ul>
        <h3>2015-2016 Press Releases</h3>
        <ul>
          <li><a href="/Documents/TransformTodayPressRelease2015.pdf" target="_blank">Transform Today</a> 11/18/15</li>
        </ul>

        <p>If you have any questions, please contact Emily Boulter, Public Relations Overall at <a href="mailto:eboulter@floridadm.org">eboulter@floridadm.org</a>.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
