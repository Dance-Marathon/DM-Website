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
					<h1>Dance Marathon 2021
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
						<li><a class="active">Dance Marathon 2021</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a href="/Moral-Madness">Morale Madness</a></li>
						<li><a href="/Transform-Today">Transform Today</a></li>
					</ul>
				</div>
			</div>

			<div class="col-md-8 col-md-push-1">

<p> We are so excited to see everyone safely at the O'Connell center on April 10 - 11, 2021! </p>
	<p>Follow us on social media for event updates! </p>

<h2>Main Event FAQs</h2>
    <h3>We have provided specific questions for the following general groups:</h3>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  How can I ask a specific question?
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                We love questions! Send any inquiries to <a href="mailto:floridadm@floridadm.org">floridadm@floridadm.org</a>.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Who should I contact if I have a press inquiry?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                Please contact our Public Relations Overall Director, Maddy Whalen, at <a href="mailto:mwhalen@floridadm.org">mwhalen@floridadm.org</a>.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Can I send a donation via check?
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                Of course you can! Please make all checks out to Children's Miracle Network, and send them to
                <br><br>CMN Attn: DM at UF
                <br>PO Box 100386
                <br>Gainesville, FL 32610
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                  Where can I get instant updates about DM at UF?
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
                Like us on <a href="http://www.facebook.com/floridaDM">Facebook</a> and follow us on <a href="http://www.twitter.com/floridadm">Twitter</a> and <a href="http://www.instagram.com/dmatuf">Instagram</a>.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  Do you have questions about dancing?
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
                Check out our <a href="http://www.floridadm.org/dancers">Dancer Page</a> for Dancer information and FAQs.
              </div>
            </div>
          </div>
        </div>
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

 <!-- ASDJFKA:SDFJASDF -->
								<div class="row mb">
									<div class="col-md-12">
										<h2>2019 Event Livestream</h2>
									</div>
								</div>
								<iframe width="560" height="315" src="https://www.youtube.com/embed/XKLMDu1HaRo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

								<?php } else { echo 'This page is currently closed.'; } ?>

							</div>
						</div>
					</div>

					<?php include("includes/foot.php"); ?>
