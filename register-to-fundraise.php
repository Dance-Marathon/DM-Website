<?php
$status = "open";
$GLOBALS['page_title'] = 'Register to Fundraise | Fundraising | Florida Dance Marathon';
$GLOBALS['parent'] = 'register-to-fundraise';
include("includes/head.php");
include("includes/navbar.php");
?>

<div class="page-heading parallax register_fundraise">
	<div class="inner-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Register to Fundraise</h1>
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
            <li><a class="active">Register to Fundraise</a></li>
            <li><a href="/employee-matching">Employee Matching</a></li>
            <li><a href="/fundraising-guide">Fundraising Guide</a></li>
            <li><a href="/fundraising-days">Fundraising Days</a></li>
            <li><a href="/fundraising_brackets">Fundraising Brackets</a></li>
          </ul>
				</div>
			</div>
			<div class="col-md-8 col-md-push-1">
				<?php if ($status == "open") { ?>
				<h2>Register to Fundraise</h2>
				<p> Registering to fundraise is pretty easy! </br>

					Just follow the steps bellow:</P>
					<ol>
						<li>Follow this <a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1146" target="_blank">Link</a> to register now!
							<li> Join a team <li/>
								<ul>
									<li>If you are joining as an individual, click <b>‘Individual’ under ‘Role’</b>. </li>
									<li> If you are joining an organization, click <b>‘Join a Team’ </b>and then find your team.  </li>
									<ul>
										<li>If your organization isn’t there, no worries! Click <b>‘Create a Team’</b> and then request that other members of your organization join the team online.</li>
									</ul> </ul>
									<li> Next, you will be asked to fill in your information (ex. Name, Email, Fundraising Goal) </li>
									<li> If desired, you can make a donation to your page.</li>
									<li> From here, you can use the tools on Donor Drive to send emails from a template, track your fundraising and personalize your fundraising page!</li>
								</ol>

								<p>If you have any questions about Donor Drive contact the Fundraising Overall, Allie Becher, at  <a href="mailto:abecher@floridadm.org">abecher@floridadm.org</a></p>

						   	</div>
							</div>
						</div>
					</div>
					<?php } else { echo 'This page is currently closed.'; } ?>

				<?php include("includes/foot.php"); ?>
