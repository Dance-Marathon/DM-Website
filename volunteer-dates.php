<?php
  $status = "open";
  $GLOBALS['page_title'] = 'Volunteer Dates | Service | Dance Marathon at UF';
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
          <h1>Volunteer Dates</h1>
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
            <li><a href ="/community-partners">Community Partners</a></li>
						<li><a class="active">Volunteer Dates</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

          <h3>Volunteer Dates</h3>
          <p>
              Dance Marathon at University of Florida is an organization led by servant leaders that strive to spread their passion for giving and creating change beyond our immediate campus. Members will receive one spirit point for engaging in a service event. </p>

          <p> Giving Tuesday - November 30th, 2021 </p>
                  <p> This is an organization-wide service day where all members will be able to dedicate the day to giving back to our community by volunteering with our Community Partners.
              Please register to volunteer for this event by clicking 
              <a href="https://docs.google.com/spreadsheets/d/17hRc6pJBqxHhnI-4G_Rkv9ikcnVg46HqPKTsaPnY9bc/edit">here</a>. </p>
          <p> If you are unable to volunteer, please participate in the Canned Food Drive with Hitchcock Field and Fork Food Pantry between 11/8 - 11/18 by bringing a canned food to your meetings or check-ins for an extra spirit point.</p>
          </ol>
      <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
    </div>
  </div>
</div>

<?php include("includes/foot.php"); ?>
