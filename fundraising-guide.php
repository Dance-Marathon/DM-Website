<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Fundraising Guide | Florida Dance Marathon';
	$GLOBALS['parent'] = 'register-to-fundraise';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax get-involved">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Fundraising Guide</h1>
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
            <li><a href="/register-to-fundraise">Register to Fundraise</a></li>
            <li><a href="/employee-matching">Employee Matching</a></li>
            <li><a class="active">Fundraising Guide</a></li>
            <li><a href="/campus-push-days">Campus Push Days</a></li>
          <!--  <li><a href="/fundraising_brackets">Fundraising Brackets</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
			 <p>Take a look at all the different ways you can fundraise with Dance Marathon at UF. Whether you ask friends and family to support you, showcase your passion on social media, participate in canning, or volunteer your time for donations, there are many ways to fundraise! There are so many ways fundraise for DM at UF, and we would love for you to read below about all the options out there!</p>
				<!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="q1">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#a1" aria-expanded="false" aria-controls="a1">Welcome</a>
							</h4>
						</div>
						<div id="a1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q1">
							<div class="panel-body">
								<h4>Letter from Drew/Joey/Rachel</h4>
							 <table style="width:100%">
									<tr>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
					</div> -->
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="q1">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#a1" aria-expanded="true" aria-controls="a1">Start Here</a>
							</h4>
						</div>
						<div id="a1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="q1">
							<div class="panel-body">
								<h4>Reaching Out</h4>
								<h4 style="padding-left:1em; size:80%">Letters and Emails</h3>
								 <ul>
								 	<li>Why - Adds a personal touch to your fundraising request</li>
								 	<li>Tips to a better response - Personalize your message and tell the story that brought you into this organization. Follow up! Be persistent! You care about this cause and that devotion will shine forth through your efforts.
								 	</li>
								 	<li>A great way to say thanks for becoming part of the DM family! </li>
								 </ul>
								 <h4 style="padding-left:1em; size:80%">Templates</h3>
								 <p>
								 <!--- Templates to be inserted here!-->

								<h4>Fundraising Tips</h4>
									<ul>
								 	<li>Showcase your passion for the cause</li>
								 	<li>Make your messages personal
								 	</li>
								 	<li>Share videos and photos that help convey the incredible impact you help make</li>
								 	<li>Offline donations in the form of checks are accepted. Be sure to fill out your name in the memo and make the check out to Children’s Miracle Network.</li>
								 </ul>

								 <h4>Canning</h4>
								 <ul>
								 <li>WHAT IS IT? - Soliciting loose change and small dollar donations outside of public places or businesses in order to benefit Dance Marathon at the University of UF Health Shands Children’s Hospital.</li>
								 <li>HOW CAN IT BENEFIT - The money you raise via these efforts can be credited to your personal fundraising page as you look to raise more money and awareness For The Kids!</li>
								 <li>HOW TO DO IT? - First, obtain specially designed canning buckets from our Fundraising team (contact <a href="mailto:abecher@floridadm.org">abecher@floridadm.org</a> for further informaiton). Email, call, or go inside a local business in your hometown and request to speak to the General Manager regarding canning donations. They will be sure and inform you of all the necessary regulations, and allow you to coordinate a time that works for both you and the business. Be sure and show up promptly and dressed in Dance Marathon at UF attire to help spread your message! From there, talk to customers as they leave the business about donating to your cause. No donation is too small and every amount helps make miracles For The Kids! </li>
								 </ul>

								 <h4>Fundraising Levels</h4>
								 Fundraising kit PDF<!-- 	Link this to PDF-->

							 <table style="width:100%">
									<tr>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
					</div>


             </div>
						 <p> <b>Want to know more about DM?</b> Submit your information<a href="https://docs.google.com/forms/d/e/1FAIpQLSc1mXWGc9rfL4GL6375p7HDqFhBrqa_GNQENMN9gS-l4tCwdw/viewform"> here</a></p>

			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
