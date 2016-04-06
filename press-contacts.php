<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Press Contacts | Press | Florida Dance Marathon';
	$GLOBALS['parent'] = 'press';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax press">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Press Contacts</h1>
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
						<li><a href="/press-releases.php">Press Releases</a></li>
						<li><a class="active">Press Contacts</a></li>
						<li><a href="/fast-facts.php">Fast Facts</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  			<h3>Claire Daniel</h3>
        <p>
          Public Relations Overall Director
          <br/>
          <a href="mailto:cdaniel@floridadm.org">cdaniel@floridadm.org</a>
        </p>

        <h3>Jacob Leuze</h3>
        <p>
          External Communications Overall Director
          <br/>
          <a href="mailto:jleuze@floridadm.org">mlaporte@floridadm.org</a><br/>
        </p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
