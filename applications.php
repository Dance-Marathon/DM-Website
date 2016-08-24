<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Captain & ELP Applications | Get Involved | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax applications">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Captain & ELP Applications</h1>
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
						<li><a href="/register-to-fundraise"> Register to Fundraise</a></li>
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
						<li><a href="/ftkrew">FTKrew</a></li>
						<li><a href="/emerging-leaders">Emerging Leaders Program</a></li>
				 		<li><a class="active">Captain & ELP Applications</a></li>

          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
 					<h1> Captain & Emerging Leaders Program Applications </h1>
					<p>Applications are now open! Applications will be due <b>Sunday, September 4th</b>.</p>
					<p>Click each tab below to access the applications for Captain Teams and Emerging Leadres Program</p>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										Captain Applications
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
								<div class="panel-body">

								<p>Each year, Dance Marathon at UF strives to grow and improve. This year we are excited to announce changes to our Captain Teams to help us make bigger and better miracles happen For The Kids!</p>
								<p>As reflected on the application, <i>Entertainment</i> and <i>Operations</i> are no longer. We have redistributed responsibilities to a new team: <b>Productions</b>.</p>
								<p>The Finance team has been revamped into a new team: <b>Fundraising</b>.</p>
								<p>A new team called <b>Outreach</b> was created and is comprised of a small group of <b>Assistant Directors</b> that works closely with the Dance Marathon Alumni Initiative. The outreach AD's also work to increase UF faculty engagement and all of UF Health engagement with Dance Marathon at UF. </p>
								<p>Please be sure to read over the <a href="/captain-teams">Captain Team</a> descriptions for more details about responsibilities and expectations for each team.</p>
								<ul>
									<li><a href="https://ufl.qualtrics.com/SE/?SID=SV_4T1y7HjD4e0ScG9" target="_blank">2017 Captain Application</a></li>
								</ul>								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h4 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Emerging Leaders Program Applications
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
								<div class="panel-body">
									The Emerging Leaders Program is a brand new aspect of Dance Marathon at UF. The focus of the program is to cultivate leadership skills while also immersing one’s self in Dance Marathon at UF. The Emerging Leaders Program is completely separate from Captains and FTKrew and will have their own unique responsibilities. More information can be found in the <a href="/elp">Emerging Leaders Program</a> page.

								<li><a href="https://ufl.qualtrics.com/SE/?SID=SV_8i8jtP9CdxTAwmN" target="_blank">2017 Emerging Leaders Program Application</a></li>

								</div>
							</div>
						</div>

        <p>Please direct questions to Grace Caswell, current Internal Communications Overall Director at <a href="mailto:gcaswell@floridadm.org">gcaswell@floridadm.org</a>.</p>
      <?php } else { ?>
      <!--  <p class="alert alert-info"><b>Note:</b> Captain applications are closed.</p>
        <p>Please direct questions to Jenna Baxter, current Internal Communications Overall Director at <a href="mailto:jbaxter@floridadm.org">jbaxter@floridadm.org</a>.</p>
      <?php } ?>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
