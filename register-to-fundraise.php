<?php
$status = "open";
$GLOBALS['page_title'] = 'Register to Fundraise | Fundraising | Dance Marathon at UF';
$GLOBALS['parent'] = '';
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
						<li><a href="/campus-push-days">Campus Push Days</a></li>
						<li><a href="/classy">Classy</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
						<li><a href="/fundraising_brackets">Fundraising Brackets</a></li>
						<li><a href="/fundraising-guide">Fundraising Guide</a></li>
						<li><a class="active">Register to Fundraise</a></li>
          </ul>
				</div>
			</div>
			<div class="col-md-8 col-md-push-1">
				<?php if ($status == "open") { ?>
				<h2>Register to Fundraise</h2>
				<p> Registering to fundraise is pretty easy! </br></p>

					<p>Just follow the steps below:</p>
					<ol>
						<li>Follow this <a href="https://donate.giving.ufhealth.org/campaign/dance-marathon-at-the-university-of-florida-2020/c223292" target="_blank">Link</a> to register now!
							<li> Select <b>'Register Now' </b> <li/>
								<ul>
									<li> If you are joining as an individual, click <b>‘As an Individual’</b>. </li>
									<li> If you are joining an organization, click <b>‘Join a Team’ </b>and then find your team.  </li>
									<ul>
										<li>If your organization isn’t there, no worries! Click <b>‘Create a Team’</b> and then request that other members of your organization join the team online.</li>
									</ul> </ul>
									<li> Next, select <b>‘Create an account’</b> and provide the login credentials that you will use to access your fundraising page and then your first and last name. </li>
									<li> After, you can customize your fundraising page by setting your personal fundraising goal, creating a headline, and uploading a profile photo.</li>
									<li> From here, you can use the tools on Classy to send emails from a template, track your fundraising and personalize your fundraising page!</li>
								</ol>

								<p>If you have any questions about Classy contact the Fundraising & Organization Development Overall Director  <a href="mailto:khenry@floridadm.org  ">khenry@floridadm.org  </a></p>

						   	</div>
							</div>
						</div>
					</div>
					<?php } else { echo 'This page is currently closed.'; } ?>

				<?php include("includes/foot.php"); ?>
