<?php
  $status = "open";
  $GLOBALS['page_title'] = 'Community Partners | Service | Dance Marathon at UF';
  $GLOBALS['parent'] = '';
  include("includes/head.php");
  include("includes/navbar.php");
?>
<style>
.page-heading.parallax.community-partners {
background-image: url("/assets/images/BannerPhotos21/KVO-1172.jpg");
}
</style>
<div class="page-heading parallax community-partners">
  <div class="inner-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Community Partners</h1>
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
            
						<li><a class="active">Community Partners</a></li>
						<li><a href="/volunteer-dates">Volunteer Dates</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

      <h3>Meet our Community Partners:</h3>
      <p>
          Meet our Community Partners for the 2021- 2022 year! These non-profit and service organizations help better the lives of those who live in the Gainesville Community, the community which gives so much to Dance Marathon at UF. As an organization whose goal is to create change, we hope to uplift our Community Partners throughout the year.
      </p>
    <div class="col-md-8">
       </div>
        <div style="height: 35px;"></div>
        <div class="row">
        <div class="col-sm-7">
            <img class="img-responsive" style="display: block; margin: auto;" src="assets\images\CommunityPartners-01.png" width="865" height="1080"/></a>
      </div>
      </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
    </div>
  </div>
</div>

<?php include("includes/foot.php"); ?>
