<?php
	$status = "closed";
	$GLOBALS['page_title'] = 'Overall Applications | Get Involved | Dance Marathon at UF';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax overall-applications">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Overall Applications</h1>
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
<!--						<li><a href="http://floridadm.kintera.org/faf/home/waiver.asp?ievent=1114670&lis=1&kntae1114670=49B319BD1C5D464982B0286ECCA2EBEB" target="_blank">Register to Fundraise</a></li>-->
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
						<li><a class="active">Overall Applications</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <p>Overall Applications are now Open! Both Applications will be due <b>Monday, March 23rd at 5pm</b> submitted via email to  Nha-Uyen Hua, current Internal Communications Overall Director at <a href="mailto:nhua@floridadm.org">nhua@floridadm.org</a>.</p>
        <p>Every year, Dance Marathon at UF strives to grow and improve. For DM 2016, we are excited to announce changes to our Overall Team to help us make bigger and better miracles happen For the Kids!</p>
		<p>As reflected on the application, both <i>Art & Layout and Technology</i> teams are no longer. We have redistributed responsibilities into two new teams: <b>Creative Development and Multimedia</b>.</p>
		<p>Additionally, the Marketing team has been revamped into 2 new teams: <b>Merchandise and Sponsorships</b>.<p>
		<p>Please be sure to read over the OT application for more details about responsibilities and expectations for each team.</p>
		<ul>
			<li><a href="/Documents/2016ManagerApplication.pdf" target="_blank">2016 Manager Application</a></li>
			<li><a href="/Documents/2016OTApplication.pdf" target="_blank">2016 OT Application</a></li>
		</ul>
        <p>Please direct all inquiries to Nha-Uyen Hua, current Internal Communications Overall Director at <a href="mailto:nhua@floridadm.org">nhua@floridadm.org</a>.</p>
      <?php } else { ?>
        <p class="alert alert-info"><b>Note:</b> Overall applications are closed.</p>
        <p>Please direct all inquiries to Jenna Baxter, current Internal Communications Overall Director at <a href="mailto:jbaxter@floridadm.org">jbaxter@floridadm.org</a>.</p>
      <?php } ?>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
