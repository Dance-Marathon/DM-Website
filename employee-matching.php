<?php
  $status = "open";
  $GLOBALS['page_title'] = 'Employee Matching | Florida Dance Marathon';
  $GLOBALS['parent'] = 'sponsors';
  include("includes/head.php");
  include("includes/navbar.php");
?>

<div class="page-heading parallax sponsors">
  <div class="inner-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Employee Matching</h1>
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
            <li><a href="/sponsorship-levels">Sponsorship Levels</a></li>
            <li><a href="/partners">Our Partners</a></li>
            <li><a class="active">Employee Matching</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

      <h3>Employee Matching</h3>
      <p>Have you considered that your company might match your donation and multiply your contribution For The Kids?</p>
      <p>Every company has its own guidelines for matching. To find out if your company has a matching program, visit <a href="https://www.matchinggifts.com/uff">https://www.matchinggifts.com/uff</a>.</p>
      <p>If your company matches contributions to <u>Shands Teaching Hospital and Clinics, Inc.</u> locally <b>OR</b> <u>Children’s Miracle Network</u> nationally, here are two ways to match your contribution:</p>
      <p style="margin-left:5%">1. If your company uses an online platform for gift matching, submit an online gift matching verification form through your company’s portal and use the information listed below as the destination for your contribution.</p>
      <p></p>
      <p style="margin-left:5%">OR</p>
      <p></p>
      <p style="margin-left:5%">2. Obtain a matching gift verification form from your Human Resources Department.  Complete the form and list our organization name below.  If you directed your donation to Children’s Miracle Network, please email <a href="mailto:jsands@floridadm.org">jsands@floridadm.org</a> with a copy of the matching gift verification form.</p>
      <p></p>

      <p>Primary Donation Location:<br />
      UF Health Shands- Your Local Children's Miracle Network Hospital<br/>
      <b>EIN:</b> 59-1943502<br/>
      <b>Charitable Organization Section:</b></p>
      <p>Shands Teaching Hospital and Clinics, Inc. <u>d/b/a Children’s Miracle Network at Shands</u><br/>
      <b>ATTN:</b> Dance Marathon at the University of Florida</p>

      <p><b>Address field:</b></p>
      <p style="text-align:center">PO BOX 100336</p>
      <p style="text-align:center">Gainesville, FL 32610-0336</p>
      <p><b>Alternative Donation Location:</b><br/>
      Children's Miracle Network National Office<br/>
      <b>EIN/TIN:87-0387205</b></p>
      <p><b>Charitable Organization Section:</b></p>
      <p>Children's Miracle Network<br/>
      <b>ATTN:</b> Dance Marathon at the University of Florida</p>
      <p></p>
      <p><b>Address Field:</b><br/>
      205 W 700 S<br/>
      Salt Lake City, Utah 84101-2715</p>
      <p>If your company requires verification by a W9 form, please visit these links:</p>
      <p style="margin-left:5%"><a href="assets/PDFs/W-9 Shands Healthcare.pdf">Shands Teaching Hospital and Clinic, Inc.</a><br/><a href="assets/PDFs/Children's Miracle Network W-9.pdf">Children's Miracle Network</a></p>
      <p><b>* PLEASE NOTE: Notify Jesse Sands at <a href="mailto:jsands@floridadm.org">jsands@floridadm.org</a> that a matching gift request has been submitted. The matching gift will be attributed to the individual who received the original donation. Please allow 60 days for the Office of Development to process your donor match before further inquiry as it can often be a lengthy process.  Thank you for multiplying your miracles! <a href="mailto:jsands@floridadm.org">jsands@floridadm.org</a></b></p>
      <p><b>** Important - Please do not fill out any forms sent with checks, turn them in directly into the Finance Director reachable at <a href="mailto:jsands@floridadm.org">jsands@floridadm.org</a></b></p>
          

      <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
    </div>
  </div>
</div>

<?php include("includes/foot.php"); ?>
