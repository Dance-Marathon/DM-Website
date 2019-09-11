<?php
	$status = "closed";
	$GLOBALS['page_title'] = 'Dancer Registration Spring 2015 | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Dancer Registration</h1>
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
						<li><a href="/community-events">Community Events</a></li>
						<li><a href="/hsdm">High School DM</a></li>
            <li><a href="/ft5k">FT5K 2015</a></li>
            <li><a class="active">Dancer Registration</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>Register Today</h3>
        
      <?php } else { ?>
        <p class="alert alert-info"><b>Note:</b> Spring 2015 Dancer Registration has ended.</p>
      <?php } ?>
  			<p>If you have any questions, please contact Suzy Schrimsher, Dancer Relations Overall, at <a href="mailto:sschrimsher@floridadm.org">sschrimsher@floridadm.org</a>.</p>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
