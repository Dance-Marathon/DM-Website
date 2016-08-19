<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Fast Facts | Press | Florida Dance Marathon';
	$GLOBALS['parent'] = 'press';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax fast-facts">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Fast Facts</h1>
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
						<li><a href="/press-contacts.php">Press Contacts</a></li>
						<li><a class="active">Fast Facts</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>Where the Money Goes</h3>
        <p>
          All of the funds raised go to UF Health Shands Children's Hospital, our local Children Miracle Network hospital. Of these funds, most recently, <b>48%</b> goes to research, <b>10%</b> to education and <b>42%</b> to patient care.
          <br />
          How much of the money goes to UF Health Shands Children’s Hospital: <b>100% of total raised</b>
        </p>

        <h3>Length of Dance Marathon at UF</h3>
        <p>
          Before 2008: <b>32  hours</b>
          <br/>
          After 2008: <b>26.2 hours</b>
        </p>

        <h3>Total Hours Danced</h3>
        <p>
          <b>651.8</b> hours
          <br/>
          <b>367,081.2</b> hours by all of our dancers <b>combined</b> <!--change to exact-->
          <br/>
          Year that DM at UF started: <b>1995</b>
        </p>

        <h3>Participants</h3>
        <p>
          Number of Dancers in 2016: <b>815</b> (maximum capacity)
          <br/>
          Number of Captains: <b>365</b>
          <br/>
          Number of Staff: <b>454</b>
          <br/>
          Number of participants in total (including Overalls, Captains, Dancers and Staff): <b>6,833</b> <!-- WHAT?! WHERE DID 4,653 COME FROM!!!!-->
          <br/>
          Number of Miracle Families: <b>77</b>
          <br/>
          Number of Sponsors: <b>150</b>
          <br/>
          Most Years as a Dancer: <b>12 years, Matt Michel</b> <!--change to exact-->
        </p>

        <h3>Fundraising</h3>
        <p>
          <b>43,746</b> donations on Donor Drive <!--change to exact-->
          <br/>
          <b>6,861</b> fundraisers raised at least $1 <!--change to exact-->
          <br/>
          Amount raised in 2016: <b>$2,434,315.18</b>
          <br/>
          Total amount raised in past 22 years: more than <b>$12.5 million</b> ($12,531,016) <!-- 10,096,701-->
          <br/>
          Community Events: <b>5 events</b> - Bowling, Dodgeball, Food Truck Rally, FT5K, Cirque du FTK
        </p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
