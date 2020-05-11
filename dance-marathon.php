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
					<h1>Dance Marathon 2020
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
						<li><a class="active">Dance Marathon 2020</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Miracles in Color 5K">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a href="/Moral Madness">Moral Madness</a></li>
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
