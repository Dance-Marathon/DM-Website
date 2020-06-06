<?php
	$status = "open";
	$GLOBALS['page_title'] = 'DonorDrive | Fundraising | Dance Marathon at UF';
	$GLOBALS['parent'] = '';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax classy">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Classy</h1>
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
						<li><a class="active">DonorDrive</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
						<li><a href="/fundraising_brackets">Fundraising Brackets</a></li>
						<li><a href="/fundraising-guide">Fundraising Guide</a></li>
            <li><a href="/register-to-fundraise">Register to Fundraise</a></li>




          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Classy</h2>
				<p>UF Health Shands Children’s Hospital is utilizing Classy, an online fundraising platform, for its Dance Marathon programs. Dance Marathon at the University of Florida’s Fundraisers will now be creating Classy accounts to begin fundraising for DM at UF 2021. Classy is safe and easy to use. To create a fundraising page, register using the link below:</p>
				<a href="https://donate.giving.ufhealth.org/campaign/dance-marathon-at-the-university-of-florida-2020/c223292" target="_blank">Register To Fundraise</a>
				<p></p>

				<h3>FAQ:</h3>

<b>1. If I had a fundraising page last year, do I need to create a new account with Classy and a new fundraising page this year?</b>
<ul><li>Yes! Each year that you choose to participate with Dance Marathon, you will need to create a fundraising page. Additionally, this year, each individual that registers to fundraise will need to create a Classy account.</li></ul>
<b>2. What should my billing statement list as the donation charge after I donate online?</b>
<ul><li>SHANDS DEVELOPMENT ONL GAINESVILLE FL</li></ul>

<p>If you have any further questions, please contact <a href="khenry@floridadm.org">khenry@floridadm.org</a>.</p>


      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
