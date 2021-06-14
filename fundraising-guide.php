<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Fundraising Guide | Dance Marathon at UF';
	$GLOBALS['parent'] = '';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.fundraising-guide {
background-image: url("/assets/images/BannerPhotos21/MA-9963.JPG");
}
</style>
<div class="page-heading parallax fundraising-guide">
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
						
						<li><a href ="/donordrive">DonorDrive</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
						<li><a class="active">Fundraising Guide</a></li>
						<li><a href="/fundraising_brackets">Organization Impact Levels</a></li>
            <li><a href="/register-to-fundraise">Register to Fundraise</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
			 <p>Take a look at all the different ways you can fundraise with Dance Marathon at UF! Whether you ask friends and family to support you, showcase your passion on social media, participate in canning, or volunteer your time for donations, there are so many ways to fundraise for DM at UF. Read more about all of these options below!</p>
			 <p> Check out our fundraising guide <a href="assets/PDFs/FundraisingKit2022.pdf" target="_blank">here.</a>
			 <p> Check out our resource folder <a href="https://drive.google.com/drive/folders/1juPbkFsqrFn6Sec6FY_KM9HVUfWMRXlQ?usp=sharing" target="_blank">here.</a>
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
								<a data-toggle="collapse" data-parent="#accordion" href="#a1" aria-expanded="true" aria-controls="a1"></a>
							</h4>
						</div>
						<div id="a1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="q1">
							<div class="panel-body">
								<h4>Reaching Out</h4>
								<h4 style="padding-left:1em; size:80%">Letters and Emails</h3>
								 <ul>
								 	<li><b>Why?</b> - Adds a personal touch to your fundraising request</li>
								 	<li><b>Tips to a better response</b> - Personalize your message and tell the story that brought you into this organization. Follow up! Be persistent! You care about this cause and that devotion will shine forth through your efforts.
								 	</li>
								 	<li>A great way to say thanks for becoming part of the DM family! </li>
								 </ul>
								 <!-- <h4 style="padding-left:1em; size:80%">Templates</h3>
								 <p>
								Templates to be inserted here!-->

								<h4>Fundraising Tips</h4>
							<!-- 	<a href="assets/PDFs/Fundraisings.pdf" target="_blank">Fundraising Kit PDF </a><!-- 	Link this to PDF-->

									<ul>
								 	<li>Showcase your passion for the cause</li>
								 	<li>Make your messages personal
								 	</li>
								 	<li>Share videos and photos that help convey the incredible impact you help make</li>
								 	<li>Offline donations in the form of checks are accepted. Be sure to fill out your name in the memo and make the check out to Children’s Miracle Network.</li>
								 </ul>

								 <h4>Canning</h4>
								 <ul>
								 <b><li>What is it?</b> - Soliciting loose change and small dollar donations outside of public places or businesses in order to benefit Dance Marathon at the University of Florida and UF Health Shands Children’s Hospital.</li>
								 <b><li>How can I benefit?</b>- The money you raise via these efforts can be credited to your personal fundraising page as you look to raise more money and awareness!</li>
								 <b><li>How to do it?</b> - First, obtain specially designed canning buckets from our Fundraising & Organization Development Team (contact <a href="mailto:cgaulding@floridadm.org">cgaulding@floridadm.org</a> for further information). Email, call, or go inside a local business in your hometown and request to speak to the General Manager regarding canning donations. They will be sure and inform you of all the necessary regulations, and allow you to coordinate a time that works for both you and the business. Be sure and show up promptly and dressed in Dance Marathon at UF attire to help spread your message! From there, talk to customers as they leave the business about donating to your cause. No donation is too small and every amount helps make miracles! </li>
								 </ul>

								 <!--<a href="assets/PDFs/Incentive-Levels-2018.pdf" target="_blank"> <h4>Fundraising Levels</h4> </a>-->

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
