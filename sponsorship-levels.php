<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Sponsorship Levels | Sponsors | Florida Dance Marathon';
	$GLOBALS['parent'] = 'sponsors';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax sponsors">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Sponsorship Levels</h1>
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
            <li><a class="active">Sponsorship Levels</a></li>
            <li><a href="/partners">Our Partners</a></li>
          </ul>
        </div>
      </div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <ul class="sponsor">
          <li class="level-1">
            <div class="sponsor-panel left">
              <div class="sponsor-content">
                <ul>
                  <li>Premium placement of logo on all official DM t-shirts</li>
                  <li>Upgrade to a full page premium placed ad in the event program</li>
                  <li>Placement of logo on the DM website homepage</li>
                  <li>Opportunity to air an additional 30 second commercial at the event<sup>*</sup></li>
                </ul>
              </div>
              <div class="sponsor-circle">
                <h4>Miracle</h4>
                <span>$29,999-$13,000</span>
              </div>
            </div>
          </li>
          <li>
            <div class="sponsor-panel right">
              <div class="sponsor-content">
                <ul>
                  <li>Logo and link on our mobile application</li>
                  <li>Receive an additional two official DM event t-shirts</li>
                  <li>Opportunity to hang an additional company banner at the event<sup>*</sup></li>
                  <li>"Sponsor Spotlight" - Social Media exposure during DM Spirit Week</li>
                </ul>
              </div>
              <div class="sponsor-circle">
                <h4>Champion</h4>
                <span>$12,999-$7,500</span>
              </div>
            </div>
          </li>
          <li>
            <div class="sponsor-panel left">
              <div class="sponsor-content">
                <ul>
                  <li>Opportunity to air one 30-second commercial at the event<sup>*</sup></li>
                  <li>Corporate logo featured on the official event t-shirt</li>
                  <li>Upgraded to a half page advertisement in the official event program<sup>*</sup></li>
                </ul>
              </div>
              <div class="sponsor-circle">
                <h4>Marathon</h4>
                <span>$7,499-$5,000</span>
              </div>
            </div>
          </li>
          <li>
            <div class="sponsor-panel right">
              <div class="sponsor-content">
                <ul>
                  <li>Receive a custom recognition plaque</li>
                  <li>Opportunity to submit a 5-10 second "business spotlight and clip of support" to be played at event<sup>*</sup></li>
                </ul>
              </div>
              <div class="sponsor-circle">
                <h4>Gator</h4>
                <span>$4,999-$3,000</span>
              </div>
            </div>
          </li>
          <li>
            <div class="sponsor-panel left">
              <div class="sponsor-content">
                <ul>
                  <li>Opportunity to hang one company banner inside event<sup>*</sup></li>
                  <li>A quarter page advertisement in the official event program<sup>*</sup></li>
                  <li>Two official DM event t-shirts</li>
                  <li>Upgraded to two coupons or samples in Dancer Bags<sup>*</sup></li>
                </ul>
              </div>
              <div class="sponsor-circle">
                <h4>Blue</h4>
                <span>$2,999-$2,000</span>
              </div>
            </div>
          </li>
          <li>
            <div class="sponsor-panel right">
              <div class="sponsor-content">
                <ul>
                  <li>Company name on event t-shirt</li>
                  <li>Upgraded to corporate logo and link on the Dance Marathon website</li>
                  <li>Logo included in a periodic large scrolling display at event</li>
                </ul>
              </div>
              <div class="sponsor-circle">
                <h4>Orange</h4>
                <span>$1,999-$1,200</span>
              </div>
            </div>
          </li>
          <li>
            <div class="sponsor-panel left">
              <div class="sponsor-content">
                <ul>
                  <li>Recognition in the official event program</li>
                  <li>One coupon or sample placed in event Dancer Bags (850 Dancers)<sup>*</sup></li>
                  <li>Company link added to Dance Marathon Website</li>
                </ul>
              </div>
              <div class="sponsor-circle">
                <h4>Spirit</h4>
                <span>$1,199-<br>$800</span>
              </div>
            </div>
          </li>
          <li>
            <div class="sponsor-panel right">
              <div class="sponsor-content">
                <ul>
                  <li>"Twitter Sponsor Shout-out" and link through social media</li>
                  <li>Name on Dance Marathon Website</li>
                  <li>Tour during the event</li>
                </ul>
              </div>
              <div class="sponsor-circle">
                <h4>Friendship</h4>
                <span>$799-<br>$250</span>
              </div>
            </div>
          </li>
        </ul>

        <p><sup>*</sup>Provided by Sponsor</p>
        <ul>
          <li>Monetary donations are counted at face value</li>
          <li>In-Kind donations are counted at 1/2 face value for Partnership Level purposes</li>
        </ul>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
