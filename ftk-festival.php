<?php
	$status = "open";
	$GLOBALS['page_title'] = 'FTK Festival | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax get-involved">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>FTK Festival</h1>
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
			<li><a href="/community-events">Campus Events</a></li>
            <li><a href="/mini-marathon">Mini-Marathon</a></li>
            <li><a href="/ft5k">FT5K</a></li>
            <li><a href ="/fundraising-days">Fundraising Days</a></li>
            <li><a href="/gala">Gala</a></li>
            <li><a class="active">FTK Festival</a></li>
						<?php if ($dance_marathon_event_started == true) { ?>
							<li><a href="/dance-marathon">Dance Marathon <?php echo $dm_year; ?></a></li>
						<? } ?>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>FTK Festival</h2>

				<h3>Buy your tickets today!</h3>
<p>					<a href="https://squareup.com/market/dance-marathon-at-uf/item/ftk-festival-1" target="_blank">Buy your tickets here</a>, </p>
				      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
