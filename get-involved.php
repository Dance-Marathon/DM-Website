<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Students | Dance Marathon at UF';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.get-involved {
background-image: url("/assets/images/BannerPhotos21/IMG_3231.jpg");
}
.btn-default.button {
	color: #f79b63;
  background-color: #ffffff;
  border-color: #f79b63;
  font-size: 14px;
  border: 2px solid;
  border-radius: 4px;
  text-transform: uppercase;
}
</style>
<div class="page-heading parallax get-involved">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Get Involved</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
		<div class="col-md-3">
  			
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
		<p>Take a look at all of the different ways you can get involved with Dance Marathon at UF. There are so many ways to give back through DM at UF, and we would love for you to join our Dance Marathon family and 
help us make miracles. <p>
	<p><a class="btn btn-default" id="download-app" href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4927" role="button">Register to Dance</a> <p>
		
 

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
								<h4>Register To Fundraise</h4>
								Registering to fundraise is the first step to joining the Dance Marathon movement. Creating a fundraising page is quick and easy! Go to the Register to Fundraise page for instructions on how to sign up.


								<h4>Get Involved with the Dance Marathon Family</h4>
								<p>If you would like to get involved with our organization, check out the list of positions below!</p>

									   <ul><a href="/organizations"><b>Organization:</b></a> 	Student Organizations work year-round to support our cause.</ul>
                     <ul><a href="/dancers"><b>Dancer:</b></a> Dancers stand on their feet if able for the duration of our Main Event in April to raise funds and awareness for UF Health Shands Children’s Hospital.</ul>
										 <ul><a href="/emerging-leaders"><b>Emerging Leader:</b> </a> Members of our Emerging Leaders Program work alongside the Recruitment Team, providing support to Captain Teams and brainstorming new ideas to ensure a successful future for our organization.</ul>
                     <ul><a href="/captain-teams"><b>Captain:</b> </a> Captains belong to 1 of 16 teams and take on yearlong responsibilities specific to their respective teams, with the goal of supporting and promoting our organization.</ul>
                     <ul><a href="/captain-teams"><b>Assistant Directors:</b> </a> Individuals who work all year with their respective Overall Directors to ensure steady growth and management within their Captain Teams.</ul>
                     <ul><a href="/meet-the-overalls"><b>Overall Directors:</b> </a> The 21 individuals who lead Dance Marathon efforts throughout the year. They are responsible for leading their respective Captain Teams to oversee, expand, and promote our organization.</ul>

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
						 <p> <b>Want to know more about DM?</b> Submit your information<a href="https://docs.google.com/forms/d/e/1FAIpQLSc1mXWGc9rfL4GL6375p7HDqFhBrqa_GNQENMN9gS-l4tCwdw/viewform"> here</a> and we will reach out to you!</p>

			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
