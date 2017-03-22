<?php

$status = "open"; 				//	Set to open to enable content again
$livestream_on = "closed";	//  Set to open to enable livestream

// 	Livestream youtube embed link
$livestream_link = "https://www.youtube.com/embed/IdGPYiivbPU";

$GLOBALS['page_title'] = 'Dance-Marathon | Events | Florida Dance Marathon';
$GLOBALS['parent'] = 'events';
include("includes/head.php");
include("includes/navbar.php");
?>

<div class="page-heading parallax about">
	<div class="inner-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Dance Marathon
						<span style="text-align: center;">
							<br /><?php echo $dm_year; ?>
						</span>
					</h1>
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
						<li><a href="/community-events">Community Events</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
            <li><a href ="/fundraising-days">Fundraising Days</a></li>
						<li><a href="/ft5k">FT5K</a></li>
            <li><a href="/gala">Gala</a></li>
            <li><a href="/ftk-festival">FTK Festival</a></li>
						<li><a class="active">Dance Marathon 2017</a></li>
						<!--                        <li><a href="/eventsurvey">DM 2015 Event Survey</a></li> -->
					</ul>
				</div>
			</div>

			<div class="col-md-8 col-md-push-1">

				<?php if ($status == "open") { ?>

					<div class="row">
						<div class="col-md-12 text-center">
							<h1 style="margin-top: 0px;">Livestream</h1>
						</div>
					</div>

					<?php if ($livestream_on == "open") { ?>

						<div class="row">
							<div class="col-md-12 text-center" style="background-color: #5A5A5A">
								<iframe width="560" height="315" src="<?php echo $livestream_link; ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>

						<?php } else { ?>

							<div class="row">
								<div class="col-md-12 text-center">
									<h4>Livestream Currently Unavailable</h4>
								</div>
							</div>

							<?php } ?>

							<hr />

							<div class="row mb">
								<div class="col-md-12 text-center">
									<h1>Schedule &amp; Events</h1>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">

									<div role="tabpanel">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a></li>
											<li role="presentation"><a href="#bands" aria-controls="bands" role="tab" data-toggle="tab">Bands</a></li>
											<li role="presentation"><a href="#themehours" aria-controls="themehours" role="tab" data-toggle="tab">Theme Hours</a></li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane fade in active" id="events">

												<table class="table table-middle">

													<thead>
														<tr>
															<th>Event</th>
															<th>Hours</th>
														</tr>
													</thead>

													<tbody>

														<tr>
															<td>Opening Ceremonies</td>
															<td>11:15AM – 12:00PM</td>
														</tr>

														<tr>
															<td>Olympics</td>
															<td>4:00PM – 6:00PM</td>
														</tr>

														<tr>
															<td>Silent Disco</td>
															<td>6:30PM – 7:10PM</td>
														</tr>

														<tr>
															<td>High School Total Reveal</td>
															<td>7:30PM – 7:50PM</td>
														</tr>

														<tr>
															<td>00DM</td>
															<td>7:30PM – 9:30PM</td>
														</tr>

														<tr>
															<td>NYC</td>
															<td>10:30PM – 12:30AM</td>
														</tr>

														<tr>
															<td>Rave</td>
															<td>1:30AM – 2:45AM</td>
														</tr>

														<tr>
															<td>All Nighter</td>
															<td>3:30AM – 5:30AM</td>
														</tr>

														<tr>
															<td>Lip Sync Battle</td>
															<td>3:40AM – 4:20AM</td>
														</tr>

														<tr>
															<td>March Madness</td>
															<td>6:30AM – 8:00AM</td>
														</tr>

														<tr>
															<td>Gameshows</td>
															<td>9:00AM – 11:00AM</td>
														</tr>

														<tr>
															<td>Family Hour</td>
															<td>11:00AM – 12:00PM</td>
														</tr>

														<tr>
															<td>Pre-Closing Award Show</td>
															<td>12:50PM – 1:10PM</td>
														</tr>

														<tr>
															<td>Closing Ceremonies:</td>
															<td>1:45PM – 3:00PM</td>
														</tr>

													</tbody>

												</table>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="bands">

												<table class="table table-middle">

													<thead>
														<tr>
															<th>
																Band
															</th>
															<th>
																Hours
															</th>
														</tr>
													</thead>

													<tbody>

														<tr>
															<td>Connor Reever</td>
															<td>10:00AM – 10:40AM</td>
														</tr>

														<tr>
															<td>Gator Band/Albert &amp; Alberta</td>
															<td>10:40AM – 11:10AM</td>
														</tr>

														<tr>
															<td>Latchkey</td>
															<td>1:20PM – 1:50PM</td>
														</tr>

														<tr>
															<td>Riff Off ( NSA &amp; Tone Def)</td>
															<td>2:40PM - 3:10PM</td>
														</tr>

														<tr>
															<td>Zumba</td>
															<td>3:40PM – 4:10PM</td>
														</tr>

														<tr>
															<td>Silent Disco</td>
															<td>7:30PM – 9:20PM</td>
														</tr>

														<tr>
															<td>The Fringes</td>
															<td>9:40PM – 10:10PM</td>
														</tr>

														<tr>
															<td>DJ Echols</td>
															<td>1:30AM – 2:30AM</td>
														</tr>

														<tr>
															<td>Morning Fatty</td>
															<td>3:10AM – 3:40AM</td>
														</tr>

														<tr>
															<td>Sollar Elipsis</td>
															<td>7:00AM – 7:30AM</td>
														</tr>

														<tr>
															<td>Sons and Soldiers</td>
															<td>9:30AM – 10:00AM</td>
														</tr>

														<tr>
															<td>80s Prom DJ</td>
															<td>10:00AM – 11:00AM</td>
														</tr>

														<tr>
															<td>Closing Ceremonies:<br />The Final Countdown</td>
															<td>1:50PM – 2:30PM</td>
														</tr>

													</tbody>

												</table>

											</div>
											<div role="tabpanel" class="tab-pane fade" id="themehours">
												<table class="table table-middle">
													<thead>
														<tr>
															<th>
																Theme
															</th>
															<th>
																Hours
															</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																Disney World
															</td>
															<td>
																4:30PM – 5:30PM
															</td>
														</tr>
														<tr>
															<td>
																Outer Space
															</td>
															<td>
																7:30PM – 8:30PM
															</td>
														</tr>
														<tr>
															<td>
																School of Rock
															</td>
															<td>
																9:30PM – 10:30PM
															</td>
														</tr>
														<tr>
															<td>
																Award Shows
															</td>
															<td>
																11:30PM – 12:30AM
															</td>
														</tr>
														<tr>
															<td>
																Rave
															</td>
															<td>
																1:30AM – 2:30AM
															</td>
														</tr>
														<tr>
															<td>
																Retro Video Games
															</td>
															<td>
																3:30AM – 4:30AM
															</td>
														</tr>
														<tr>
															<td>
																Camp DM
															</td>
															<td>
																6:00AM – 7:00AM
															</td>
														</tr>
														<tr>
															<td>
																Finding Neverland
															</td>
															<td>
																7:30AM – 8:30AM
															</td>
														</tr>
														<tr>
															<td>
																80s Prom
															</td>
															<td>
																9:30AM – 10:30AM
															</td>
														</tr>
														<tr>
															<td>
																Closing Ceremonies:<br />The Final Countdown
															</td>
															<td>
																1:50PM – 2:30PM
															</td>
														</tr>
													</tbody>
												</table>
											</div>

										</div>
										<?php } else { echo 'This page is currently closed.'; } ?>
									</div>
								</div>
							</div>

							<hr />

							<div class="row mb">
								<div class="col-md-12 text-center">
									<h1>Visiting Hours</h1>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12 text-center">
									<p>
										<strong>Please note that the hours of 11:00PM  - 4:00AM are off limits to visitors.</strong><br />
										However, visitors that have purchased a ticket it for the Rave Hour may visit between 1:30AM - 2:30AM!
									</p>
								</div>
							</div>

						</div>
					</div>
				</div>

				<?php include("includes/foot.php"); ?>
