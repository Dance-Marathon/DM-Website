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
                <object data="assets/PDFs/SponsorshipLevelsM.pdf" type="application/pdf" width="100%" height="600px">
                 
                  <p>It appears you don't have a PDF plugin for this browser.
                  No biggie... you can <a href="assets/PDFs/SponsorshipLevelsM.pdf">click here to
                  download the PDF file.</a></p>

                </object>
                
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
                <object data="assets/PDFs/SponsorshipLevelsIK.pdf" type="application/pdf" width="100%" height="600px">
                 
                  <p>It appears you don't have a PDF plugin for this browser.
                  No biggie... you can <a href="assets/PDFs/SponsorshipLevelsIK.pdf">click here to
                  download the PDF file.</a></p>

                </object>
              </div>
            </div>
          </div>
        </div>

      <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
    </div>
  </div>
</div>

<?php include("includes/foot.php"); ?>
