<?php
  $status = "open";
  $GLOBALS['page_title'] = 'Employee Matching | Fundraising | Dance Marathon at UF';
  $GLOBALS['parent'] = '';
  include("includes/head.php");
  include("includes/navbar.php");
?>

<div class="page-heading parallax employee-matching">
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
            <li><a href="/campus-push-days">Transform Today</a></li>
						<li><a href="/DonorDrive">DonorDrive</a></li>
						<li><a class="active">Employee Matching</a></li>
            <li><a href="/fundraising_brackets">Fundraising Brackets</a></li>
						<li><a href="/fundraising-guide">Fundraising Guide</a></li>
            <li><a href="/register-to-fundraise">Register to Fundraise</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

      <h3>Employee Matching</h3>
      <p>
        Have you considered that your company might match your donation and multiply your contribution For The Kids? Every company has its own guidelines for matching. To find out if your company has a matching program, visit <a href="https://www.matchinggifts.com/uff">https://www.matchinggifts.com/uff</a>.
      </p>

      <p>
        If your company matches contributions to <u>Shands Teaching Hospital and Clinics, Inc.</u> locally (preferred) <b>OR</b> <u>Children’s Miracle Network</u> nationally, here are two ways to match your contribution:
      </p>

      <ol>
        <li>
          If your company uses an online platform for gift matching, submit an online gift matching verification form through your company’s portal and use the information listed below as the destination for your contribution. To be appropriately matched in the most efficient manner, we encourage matching through our preferred donation location listed below. Shands Teaching Hospital and Clinics, Inc. is our local Children’s Miracle Network Hospital and it is easiest to complete your employee match through this local option.
        </li>
        <li>
        Obtain a matching gift verification form from your Human Resources Department.  Complete the form and list our organization name below.  If you directed your donation to Children’s Miracle Network, please email <a href="mailto:coverholt@floridadm.org">coverholt@floridadm.org</a> with a copy of the matching gift verification form.
        </li>
      </ol>

      <h3>Primary Donation Location*</h3>
      <address>
        <strong>UF Health Shands</strong> - Your Local Children's Miracle Network Hospital<br/>
        <strong>EIN/TIN:</strong> 59-1943502<br/>
        <strong>Charitable Organization Section:</strong><br />
        Shands Teaching Hospital and Clinics, Inc. <u>d/b/a Children’s Miracle Network at Shands</u><br/>
        <strong>ATTN:</strong> Dance Marathon at the University of Florida
      </address>

      <h4>Address Field</h4>
      <address>
          PO BOX 100386<br />
          Gainesville, FL 32610-0386
      </address>

* PLEASE NOTE: If you are selecting this preferred donation location, please do not list Dance Marathon at the University of Florida or CMN as the matching entity. Many companies will not accept this request, as our tax exempt status is included under the larger umbrella of Shands Teaching Hospital and Clinics, Inc. If you have any questions about this process, please reach out to Lindsay Ritenbaugh, Development Associate for Children’s Miracle Network, for clarification at RITENL@shands.ufl.edu.

      <h3>Alternative Donation Location</h3>
      <address>
      <strong>Children's Miracle Network National Office</strong><br/>
      <strong>EIN/TIN:</strong> 87-0387205<br />
      <strong>Charitable Organization Section:</strong><br />
      Children's Miracle Network<br/>
      <strong>ATTN:</strong> Dance Marathon at the University of Florida
      </address>

      <h4>Address Field</h4>
      <address>
        205 W 700 S<br />
        Salt Lake City, Utah 84101-2715<br />
      </address>

      <p>
        If your company requires verification by a W9 form, please visit these links:
      </p>
        <ul>
            <li>
              <a href="assets/PDFs/W-9_Shands_HealthCare.pdf">Shands Teaching Hospital and Clinics, Inc.</a>
            </li>
            <li>
              <a href="assets/PDFs/CMNW-9.pdf">Children's Miracle Network</a>
            </li>
        </ul>
      <p>
        <strong>
          PLEASE NOTE: Notify Kelsea Henry at <a href="mailto:khenry@floridadm.org">khenry@floridadm.org</a> whenever a matching gift request has been submitted. The matching gift will be attributed to the individual who received the original donation. Please allow 60 days for the Office of Development to process your donor match before further inquiry as it can often be a lengthy process. Thank you for multiplying your miracles!
        </strong>
      </p>
      <p>
        <strong>
          Important - Please do not fill out any forms sent with checks; instead turn them in directly into the Finance Manager reachable at <a href="mailto:khenry@floridadm.org">khenry@floridadm.org</a>.
        </strong>
      </p>

      <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
    </div>
  </div>
</div>

<?php include("includes/foot.php"); ?>
