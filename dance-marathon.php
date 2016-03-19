<?php
$status = "open";
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
					<h1>Dance Marathon <span style="text-align: center;"><br />2016</span></h1>
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
						<li><a class="active">Dance Marathon 2016</a></li>
						<!--                        <li><a href="/eventsurvey">DM 2015 Event Survey</a></li> -->
					</ul>
				</div>
			</div>
			<div class="col-md-8 col-md-push-1">
				<?php if ($status == "open") { ?>
					<div role="tabpanel">

						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a></li>
							<li role="presentation"><a href="#bands" aria-controls="bands" role="tab" data-toggle="tab">Bands</a></li>
							<li role="presentation"><a href="#themehours" aria-controls="themehours" role="tab" data-toggle="tab">Theme Hours</a></li>
							<li role="presentation"><a href="#visithours" aria-controls="visithours" role="tab" data-toggle="tab">Visit Hours</a></li>
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
											<td>Gator Band/Albert &amp; Alberta</td>
											<td>10:40AM – 11:10AM</td>
										</tr>
										<tr>
											<td>Opening Ceremonies</td>
											<td>11:20AM – 12:00PM</td>
										</tr>
										<tr>
											<td>Lip Sync Battle</td>
											<td>11:40PM – 12:30AM</td>
										</tr>
										<tr>
											<td>Dance Battle</td>
											<td>4:40AM – 5:40AM</td>
										</tr>
										<tr>
											<td>Kid’s Talent Show</td>
											<td>11:40AM – 12:10PM</td>
										</tr>
										<tr>
											<td>Closing Ceremonies:<br /> The Final Countdown</td>
											<td>1:50PM – 2:30PM</td>
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

							<div role="tabpanel" class="tab-pane fade" id="visithours">
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
		</div>

		<?php include("includes/foot.php"); ?>
