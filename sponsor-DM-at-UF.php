<?php
  $status = "open";
  $GLOBALS['page_title'] = 'Sponsor DM at UF | Partners | Dance Marathon at UF';
  $GLOBALS['parent'] = 'partners';
  include("includes/head.php");
  include("includes/navbar.php");
?>

<div class="page-heading parallax sponsors">
  <div class="inner-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Sponsor DM at UF</h1>
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

            <li><a href="/partners">Our Sponsors</a></li>
        <!--  <li><a class="sponsorship-levels">Sponsorship Levels</a></li> -->
          <li><a class="active">Sponsor DM at UF</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


          <h2>Sponsor DM at UF</h2>

          <p>Dance Marathon at the University of Florida’s Sponsorships team will connect your company with one of UF’s most celebrated traditions and the second largest student-run philanthropy in the United States, with access to an extensive network of supporters of all ages and demographics. </p>


          <p> For more information, view our sponsorship opportunities <a href="assets/PDFs/SponsorshipPacket.pdf" target="_blank">here.</a>
          </p>


          <p>If you have any questions, please contact our Sponsorship Overall Director, Samantha Kitroser, at <a href="mailto:skitroser@floridadm.org">skitroser@floridadm.org</a></p>

      <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
    </div>
  </div>
</div>

<?php include("includes/foot.php"); ?>
