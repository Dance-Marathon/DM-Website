<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Delegates | Get Involved | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax delegates">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Delegates</h1>
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
						<li><a class="active">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
<!--             <li><a href="/dmrave">DM 2015 Rave Hour</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <div role="tabpanel">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#become-a-delegate" aria-controls="become-a-delegate" role="tab" data-toggle="tab">Become a Delegate</a></li>
            <li role="presentation"><a href="#starting-a-team" aria-controls="starting-a-team" role="tab" data-toggle="tab">Starting a Team</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="become-a-delegate">
              <h3>What is a Delegate?</h3>
              <p><em>del·e·gate</em> (noun): A delegate is the representative from an organization participating in Dance Marathon, whose primary responsibility is to convey information to the members of their organization and motivate them to make a difference in the lives of kids at UF Health Shands Children’s Hospital. Delegates are the heartbeat of Dance Marathon and we are extremely thankful for the hard work and passion they dedicate for the kids. Each Delegate has a designated Dancer Relations captain to serve as his or her primary point of contact to answer any questions and help as much as possible.</p>
              <p>Synonyms: motivator, representative, leader, rockstar</p>
              <h3>Responsibilities:</h3>
              <ul>
                <li>Attend bi-weekly Delegate meetings led by the Dancer Relations Overall</li>
                <li>Inform your organization's members of all information they need to participate including events, dates, incentives, etc.</li>
                <li>Recruit members of your organization to participate in Dance Marathon</li>
                <li>Motivate your organization to fund raise and participate at their highest potential</li>
                <li>Inspire your members and help them understand the heart behind DM</li>
              </ul>
              <h3>Responsibilities during Dance Marathon:</h3>
              <ul>
                <li>Be available in case of any emergencies</li>
                <li>Help assign Dancer buddies to each Dancer from your organization</li>
                <li>Be positive and upbeat!</li>
              </ul>
              <p class="alert alert-info"><strong>Note:</strong> Delegates can also be Dancers at the event!</p>
              <h3>Delegate Tips</h3>
              <ul>
                <li>Attend all Delegate meetings. This is the most effective way to get the information in the clearest way possible.</li>
                <li>Utilize your designated Dancer Relations captain. They want to answer questions and be as helpful as possible!</li>
              </ul>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="starting-a-team">
              <p>To participate as an organization in Dance Marathon, you must register your team each year. To register your team, please complete the following steps:</p>
              <ol>
                <li>Go to <a href="http://floridadm.org">floridadm.org</a> and click “Donate.”</li>
                <li>You will be redirected to the Kintera site. Click “Create Donor Page.”</li>
                <li>After reading the agreement, you may click “I Agree” to proceed.</li>
                <li>Click “Start an Organization.”</li>
                <li>Fill out the proceeding information for your team and once your team has been registered, your members can join your team by following steps 1-3 and for step 4, they will select “Join an Organization.”</li>
              </ol>
              <p>Each team will need a Delegate to represent them. Please email the Dancer Relations Overall, Suzy Schrimsher, at <a href="mailto:sschrimsher@floridadm.org">sschrimsher@floridadm.org</a> to inform her you have created a team and will be serving as the Delegate or have plans of selecting a Delegate in the near future. The Dancer Relations Overall will not be able to get in contact with you unless you email her to let her know you started a team.</p>
            </div>
          </div>

        </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
