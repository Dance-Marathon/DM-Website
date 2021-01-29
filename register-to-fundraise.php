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
						
						<li><a href ="/donordrive">DonorDrive</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
						<li><a href="/fundraising_brackets">Organization Impact Levels</a></li>
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
						<li>Follow this <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4042" target="_blank">Link</a> to register now!
							<li> Select <b>'Register Now' </b>
								<ul>
									  <li> If you have a DonorDrive account from DM at UF 2016-2019, select <b>‘Login to your account’</b>. </li>
								  	<li> If you do not have a DonorDrive account, then create an account now.  </li>
									</ul> </ul>
					  	<li> Next, select your role.
								<ul>
							   		<li> If you are joining an Organization, click <b>‘Join a Team’</b> and then search for your team name. </li>
											<ul>
												<li> If your Organization isn’t there, no worries! Click <b>‘Create a Team’</b> by including your Team Name and Team Fundraising Goal. </li>
											</ul> </ul>
						  <li> After, you will finalize your registration by answering the questions presented.
							<li> Once you have registered on DonorDrive, you can customize your fundraising page by adding a profile picture, editing your story, and updating your fundraising goal. Use this <a href="assets/PDFs/how-to-guide.pdf" target="_blank">How-To Guide</a> for step by step instructions.
							<li> From here, you can use the tools on DonorDrive to send emails from a template, track your fundraising, and share your fundraising link with others! </li>
								</ol>

								<p>If you have any questions about DonorDrive contact the Fundraising & Organization Development Overall Director  <a href="mailto:emcclane@floridadm.org  ">emcclane@floridadm.org  </a></p>

						   	</div>
							</div>
						</div>
					</div>
					<?php } else { echo 'This page is currently closed.'; } ?>

				<?php include("includes/foot.php"); ?>
