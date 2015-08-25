<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Press Releases | Press | Florida Dance Marathon';
	$GLOBALS['parent'] = 'press';
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
						<li><a href="/nomenclature.php">Nomenclature</a></li>
						<li><a class="active">Press Releases</a></li>
						<li><a href="/press-contacts.php">Press Contacts</a></li>
						<li><a href="/fast-facts.php">Fast Facts</a></li>
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
          <li><a href="/Documents/Transform-Today-Press-Release.pdf" target="_blank">Transform Today</a> 01/08/15</li>
          <li><a href="/Documents/CYMplify-Food-Truck-Rally-Press-Release.pdf" target="_blank">CYMplify Food Truck Rally</a> 12/05/2014</li>
          <li><a href="/Documents/DMKickball2014.pdf" target="_blank">DM Kickball</a> 10/16/2014</li>
        </ul>
        <p>If you have any questions, please contact Armani Abreu, Public Relations Overall at <a href="mailto:aabreu@floridadm.org">aabreu@floridadm.org</a>.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>