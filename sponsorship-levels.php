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
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

          <!-- Monetary Donation Tab -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Monetary Donation Levels
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <ul class="sponsor">
                  <li class="level-1">
                    <div class="sponsor-panel left">
                      <div class="sponsor-content">
                        <ul>
                          <li>Premium placed logo on DM at UF website homepage scrolling banner</li>
                          <li>Opportunity to table on floor for 2 hours at event</li>
                          <li>Opportunity to name an award presented on stage at closing ceremonies</li>
                          <li>Opportunity to present donation check on stage of event during sponsor hour</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Miracle</h4>
                        <span>$15,001+</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel right">
                      <div class="sponsor-content">
                        <ul>
                          <li>Oppurtunity to table at event during sponsor hour</li>
                          <li>Opportunity to hang two banners at event</li>
                          <li>Personal “Thank You” video for your social media use</li>
                          <li>Featured in miracle child “Thank You” video during sponsor hour at event</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Champion</h4>
                        <span>$10,001-$15,000</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel left">
                      <div class="sponsor-content">
                        <ul>
                          <li>Company logo on official DM at UF Event shirt</li>
                          <li>30 second commercial during sponsor hour</li>
                          <li>Full page advertisement in event program</li>
                          <li>Opportunity to table at a community event</li>
                          <li>Facebook “Thank You” photo post and link</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>FTK</h4>
                        <span>$5,001-$10,000</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel right">
                      <div class="sponsor-content">
                        <ul>
                          <li>Company name on event t-shirt</li>
                          <li>Recognition in collective post-event thank you</li>
                          <li>Upgraded to two coupons in dancer bags</li>
                          <li>Opportunity to make “sponsor spotlight” video to be played at event</li>
                          <li>Custom recognition plaque</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Gator</h4>
                        <span>$2,501-$5,000</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel left">
                      <div class="sponsor-content">
                        <ul>
                          <li>Opportunity to hang one banner at event</li>
                          <li>Quarter page advertisement in event program</li>
                          <li>Logo included on scrolling display at event</li>
                          <li>Company logo in Alumni Newsletter sent to DM at UF Alumni nationally</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Family</h4>
                        <span>$1,501-$2,500</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel right">
                      <div class="sponsor-content">
                        <ul>
                          <li>Company logo displayed on DM at UF website</li>
                          <li>VIP Corporate Partner tour at the event</li>
                          <li>Coupon in over 800 dancer bags</li>
                          <li>Recognition in official event program </li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Hope</h4>
                        <span>$501-<br>$1,500</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel left">
                      <div class="sponsor-content">
                        <ul>
                          <li>Company Name and link listed on DM at UF Website</li>
                          <li>Twitter Sponsor Shout Out</li>
                          <li>Proud Supporter of Dance Marathon at UF Decal</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Friendship</h4>
                        <span>$250-<br>$500</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- In-Kind Donation Tab -->
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  In-Kind Donation Levels
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
                <ul class="sponsor">
                  <li class="level-1">
                    <div class="sponsor-panel left">
                      <div class="sponsor-content">
                        <ul>
                          <li>Premium placement of logo on event shirt</li>
                          <li>Opportunity to table on floor for 2 hours at event</li>
                          <li>30 second commercial during sponsor hour</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Miracle</h4>
                        <span>$20,001+</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel right">
                      <div class="sponsor-content">
                        <ul>
                          <li>Opportunity to table at event during sponsor hour</li>
                          <li>Premium placed logo on DM at UF website homepage scrolling banner</li>
                          <li>Featured in miracle child “Thank You” video during sponsor hour at event</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Champion</h4>
                        <span>$15,001-$20,000</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel left">
                      <div class="sponsor-content">
                        <ul>
                          <li>Company logo on official DM at UF Event shirt</li>
                          <li>Opportunity to table at a community event</li>
                          <li>Facebook “Thank You” photo post and link</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>FTK</h4>
                        <span>$10,001-$15,000</span>
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
                        <span>$5,001-$10,000</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel left">
                      <div class="sponsor-content">
                        <ul>
                          <li>Company name on event t-shirt</li>
                          <li>Company logo on DM at UF website</li>
                          <li>Quarter page advertisement in event program</li>
                          <li>Logo included on scrolling display at event</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Family</h4>
                        <span>$2,001-$5,000</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel right">
                      <div class="sponsor-content">
                        <ul>
                          <li>Twitter shout out and link</li>
                          <li>Company logo and link on DM at UF website</li>
                          <li>Coupon in over 800 dancer bags</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Hope</h4>
                        <span>$601-<br>$2,000</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="sponsor-panel left">
                      <div class="sponsor-content">
                        <ul>
                          <li>Proud Supporter of Dance Marathon at UF Decal</li>
                          <li>Sponsor Name listed on DM at UF Website</li>
                        </ul>
                      </div>
                      <div class="sponsor-circle">
                        <h4>Friendship</h4>
                        <span>$0 -<br>$600</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

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
