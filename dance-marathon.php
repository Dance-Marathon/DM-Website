<?php

$status = "open"; 				//	Set to open to enable content again
$livestream_on = "open";	//  Set to open to enable livestream

// 	Livestream youtube embed link
$livestream_link = "https://www.youtube.com/embed/90nYujy5Lbw?ecver=2";

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
						
						<li><a href="/mini-marathon">Mini-Marathon</a></li>

						<li><a href="/ft5k">FT5K</a></li>
						<li><a href="/gala">Gala</a></li>

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
							<div class="col-md-12 text-center" style="position:relative;height:0;padding-bottom:56.25%;">
								<iframe src="<?php echo $livestream_link; ?>" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
							</div>
						</div>

						<?php } else { ?>

							<div class="row">
								<div id="livestream_window" class="col-md-12 text-center">
									<h4>Livestream Currently Unavailable</h4>
								</div>
							</div>

							<?php } ?>

							<div class="row">
								<div class="col-md-12 text-center pt">
									<i><h6>Livestream Sponsored By GHQ</h6><i>
									</div>
								</div>

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
																<th>Day</th>
																<th>Hours</th>
															</tr>
														</thead>

														<tbody>

															<tr>
																<td>Opening Ceremonies</td>
																<td>Saturday</td>
																<td>11:15AM – 12:00PM</td>
															</tr>

															<tr>
																<td>High School Total Reveal</td>
																<td>Saturday</td>
																<td>7:30PM – 7:50PM</td>
															</tr>

															<tr>
																<td>Rave</td>
																<td>Sunday</td>
																<td>1:30AM – 2:45AM</td>
															</tr>

															<tr>
																<td>Family Hour</td>
																<td>Sunday</td>
																<td>11:00AM – 12:00PM</td>
															</tr>

															<tr>
																<td>Kid's Talent Show</td>
																<td>Sunday</td>
																<td>11:00AM – 12:00PM</td>
															</tr>

															<tr>
																<td>Pre-Closing Award Show</td>
																<td>Sunday</td>
																<td>12:50PM – 1:10PM</td>
															</tr>

															<tr>
																<td>Closing Ceremonies</td>
																<td>Sunday</td>
																<td>1:45PM – 3:00PM</td>
															</tr>

														</tbody>

													</table>
												</div>
												<div role="tabpanel" class="tab-pane fade" id="bands">

													<table class="table table-middle">

														<thead>
															<tr>
																<th>Band</th>
																<th>Day</th>
																<th>Hours</th>
															</tr>
														</thead>

														<tbody>

															<tr>
																<td>Sonic Brass Band</td>
																<td>Saturday</td>
																<td>10:00AM – 10:30AM</td>
															</tr>

															<tr>
																<td>Gator Pep Band</td>
																<td>Saturday</td>
																<td>10:40AM – 11:10AM</td>
															</tr>

															<tr>
																<td>Riff Off ( NSA &amp; Tone Def)</td>
																<td>Saturday</td>
																<td>1:20PM - 1:50PM</td>
															</tr>

															<tr>
																<td>Pure Band Class</td>
																<td>Saturday</td>
																<td>2:35PM – 3:00PM</td>
															</tr>

															<tr>
																<td>Miss America And Olympic Opening Ceremony</td>
																<td>Saturday</td>
																<td>4:00PM – 4:20PM</td>
															</tr>

															<tr>
																<td>Sons and Soldiers</td>
																<td>Saturday</td>
																<td>5:00PM – 5:30PM</td>
															</tr>

															<tr>
																<td>Silent Disco</td>
																<td>Saturday</td>
																<td>6:30PM – 7:10PM</td>
															</tr>

															<tr>
																<td>Savants of Soul</td>
																<td>Saturday</td>
																<td>9:00PM – 9:30PM</td>
															</tr>

															<tr>
																<td>Hypnotist</td>
																<td>Saturday</td>
																<td>10:30PM – 11:20PM</td>
															</tr>

															<tr>
																<td>Improv</td>
																<td>Saturday</td>
																<td>11:30PM – 12:00AM</td>
															</tr>

															<tr>
																<td>Rave Hour (feat. DJ Echols)</td>
																<td>Sunday</td>
																<td>1:30AM – 2:30AM</td>
															</tr>

															<tr>
																<td>Lip Sync Battle</td>
																<td>Sunday</td>
																<td>3:40AM – 4:20AM</td>
															</tr>

															<tr>
																<td>Dazzlers</td>
																<td>Sunday</td>
																<td>7:20AM - 7:40AM</td>
															</tr>

															<tr>
																<td>Arrows In Action</td>
																<td>Sunday</td>
																<td>8:20AM - 8:50AM</td>
															</tr>

															<tr>
																<td>Dance Battle</td>
																<td>Sunday</td>
																<td>9:40AM - 10:10AM</td>
															</tr>

														</tbody>

													</table>

												</div>
												<div role="tabpanel" class="tab-pane fade" id="themehours">
													<table class="table table-middle">

														<thead>

															<tr>
																<th>Theme</th>
																<th>Day</th>
																<th>Hours</th>
															</tr>

														</thead>

														<tbody>

															<tr>
																<td>Olympics</td>
																<td>Saturday</td>
																<td>4:00PM - 6:00PM</td>
															</tr>

															<tr>
																<td>00DM</td>
																<td>Saturday</td>
																<td>8:00PM - 9:30PM</td>
															</tr>

															<tr>
																<td>NYC</td>
																<td>Saturday</td>
																<td>10:30PM - 12:30AM</td>
															</tr>

															<tr>
																<td>All Nighter</td>
																<td>Sunday</td>
																<td>3:30AM - 5:30AM</td>
															</tr>

															<tr>
																<td>March Madness</td>
																<td>Sunday</td>
																<td>6:30AM - 8:00AM</td>
															</tr>

															<tr>
																<td>Gameshows</td>
																<td>Sunday</td>
																<td>9:00AM - 11:00AM</td>
															</tr>

														</tbody>

													</table>
												</div>

											</div>
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

								<?php } else { echo 'This page is currently closed.'; } ?>

							</div>
						</div>
					</div>

					<?php include("includes/foot.php"); ?>
