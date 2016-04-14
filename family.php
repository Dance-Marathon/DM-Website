<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Family | Florida Dance Marathon';
	$GLOBALS['parent'] = 'family';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax family">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Family</h1>
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
						<li><a href="/meet-the-kids">Meet the Kids</a></li>
						<li><a href="/family-events">Family Events</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>For the Kids, For the Families</h3>
        <p>Dance Marathon at the University of Florida is very fortunate to have over 77 Miracle Families. Our Miracle Families are a true inspiration, and the pinnacle of what Dance Marathon stands for. The birthday parties, end-of-chemotherapy parties, and play dates that we have with the children constantly reminds us of the true meaning behind “For the Kids” and “For All the Right Reasons”. The entire team at Dance Marathon is honored and privileged to have these amazing families attend Dance Marathon every year and support our students.</p>
        <p>If you have any questions about the Family Relations Program, or would like to become a Dance Marathon Miracle Family please contact the Family Relations Overall Director, Taytum Orshan, at <a href="mailto:torshan@floridadm.org">torshan@floridadm.org</a></p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
