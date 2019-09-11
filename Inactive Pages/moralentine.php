<?php
	$status = "closed";
	$GLOBALS['page_title'] = 'Moralentine Day Form | Get Involved | Dance Marathon at UF';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax get-involved">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Moralentine's Day Request Form</h1>
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
						<li><a href="/staff-application">Staff Application</a></li>
						<li><a class="active">Moralentine's Day Form</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
				<p><h3>Pay Here: <a href="http://floridadm.kintera.org/faf/donorReg/donorPledge.asp?ievent=1114670&supid=344011808" target="_blank">Click This Link</a></h3></p>
				<p>Please direct all inquiries to Keith Shopa at <a href="mailto:kshopa@floridadm.org">kshopa@floridadm.org</a>.</p>				
				<p>If you're on a mobile device, <a href="https://docs.google.com/forms/d/1UBZvJwkvWNPTG6AjDIlrecyC-GuOzJeAua_5KNMb3TA/viewform?usp=send_form" target="_blank">Click this link</a> to fill out the form.</p>
				<iframe src="https://docs.google.com/forms/d/1UBZvJwkvWNPTG6AjDIlrecyC-GuOzJeAua_5KNMb3TA/viewform?embedded=true" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>		 
      <?php } else { ?>
        <p class="alert alert-info"><b>Note:</b> This form is no longer open.</p>
      <?php } ?>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
