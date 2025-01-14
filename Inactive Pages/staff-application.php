<?php
	$status = "closed";
	$GLOBALS['page_title'] = 'Staff Application | Get Involved | Dance Marathon at UF';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax get-involved">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Staff Application</h1>
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
						<li><a href="http://floridadm.kintera.org/faf/home/waiver.asp?ievent=1114670&lis=1&kntae1114670=49B319BD1C5D464982B0286ECCA2EBEB" target="_blank">Register to Fundraise</a></li>
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
						<li><a class="active">Staff Application</a></li>
						<li><a href="/moralentine">Moralentine's Day Form</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <p>Please direct all inquiries to Nha-Uyen Hua, Internal Communications Overall at <a href="mailto:nhua@floridadm.org">nhua@floridadm.org</a>.</p>
      <?php } else { ?>
        <p class="alert alert-info"><b>Note:</b> Staff applications are closed.</p>
        <p>Please direct all inquiries to Nha-Uyen Hua, Internal Communications Overall at <a href="mailto:nhua@floridadm.org">nhua@floridadm.org</a>.</p>
      <?php } ?>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
