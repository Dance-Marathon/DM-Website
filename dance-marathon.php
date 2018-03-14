<?php

$status = "open"; 				//	Set to open to enable content again
$livestream_on = "open";	//  Set to open to enable livestream

// 	Livestream youtube embed link
$livestream_link = "https://www.youtube.com/embed/90nYujy5Lbw?ecver=2";

$GLOBALS['page_title'] = 'Dance-Marathon | Events | Dance Marathon at UF';
$GLOBALS['parent'] = 'events';
include("includes/head.php");
include("includes/navbar.php");
?>

<div class="page-heading parallax dmevent">
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
						<li><a class="active">Dance Marathon 2018</a></li>
						<li><a href="/golf-tournament">Golf Tournament</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<!--                        <li><a href="/eventsurvey">DM 2015 Event Survey</a></li> -->
					</ul>
				</div>
			</div>

			<div class="col-md-8 col-md-push-1">

				<!-- <?php if ($status == "open") { ?>

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
								</div> -->

<!-- 								<hr />
 -->
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
																<td>Coming Soon!</td>

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
																<td>Coming Soon!</td>

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
																<td>Coming Soon!</td>

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
											<strong>Coming Soon.</strong><br />
										</p>
									</div>
								</div>

								<?php } else { echo 'This page is currently closed.'; } ?>

							</div>
						</div>
					</div>

					<?php include("includes/foot.php"); ?>
