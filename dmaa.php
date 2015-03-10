<?php
	$status = "open";
	$GLOBALS['page_title'] = 'DMAA | About | Florida Dance Marathon';
	$GLOBALS['parent'] = 'about';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax dmaa">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>DMAA</h1>
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
						<li><a class="active">DMAA</a></li>
						<li><a href="/faq">FAQ</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  			<p>Since 1995, Dance Marathon at UF has raised over $8 million for UF Health Shands Children's Hospital, our local Children’s Miracle Network Hospital. Thanks to your dedication and support throughout your college years, we have grown to the most successful student-run philanthropy in the region.</p>
  			<p>Your commitment to a worthy cause doesn’t have to end after you graduate. Join our Alumni Group on Facebook to stay connected to the rest of your Dance Marathon family.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
