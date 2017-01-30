<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Students | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
?>

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
  			<div class="sub-nav">
          <ul>
            <li><a class="active">Get Involved</a></li>
            <li><a href="organizations">Organizations</a></li>						
            <li><a href="/delegates">Delegates</a></li>
			<li><a href="/dancers">Dancers</a></li>
            <li><a href="/fundraising_brackets">Fundraising Brackets</a></li>
			<li><a href="/captain-teams" >Captain Teams</a></li>
			<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
            <li><a href="/emerging-leaders">Emerging Leaders Program</a></li>
            <li><a href="/ftkrew">FTKrew</a></li>
<!--            <li><a href="/overall-applications">Overall Applications</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
			 <p>Take a look at all the different ways you can get involved with Dance Marathon at UF. Whether you are interested in becoming a Captain, Dancer, Emerging Leader, Delegate, FTKrew member or fundraiser, this is your hub for all things involvement! There are so many ways to give back through DM at UF, and we would love for you to join our DM family to help make miracles For The Kids.</p>
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
								<h4>Register To Fundraise</h4>
								 Registering to be a fundraiser is the first step in becoming a part of the Dance Marathon family. Creating a fundraising page is quick and easy! Go to the Register to Fundraise page and find out how.

								<h4>Get Involved with the Dance Marathon Family</h4>
								<p>If you’d like to get involved and take on a leadership role within our organization, check out the tabs to the left! </p>

									   <ul><a href="/organizations"><b>Organization:</b></a> 	Student organizations that are currently involved in fundraising for our cause. </ul>
                     <ul><a href="/dancers"><b>Dancer:</b></a> Individuals who stand on their feet for 26.2 hours during our event in March to raise funds and awareness for the kids at UF Health Shands Children’s Hospital.</ul>
										 <ul><a href="/delegates"><b>Delegate:</b> </a>  A Delegate is the representative from an organization participating in Dance Marathon whose primary responsibility is to convey information to the members of his or her organization and to motivate them throughout the year.</ul>
										 <ul><a href="/emerging-leaders"><b>Emerging Leader:</b> </a> Members of our new Emerging Leaders Program who work alongside the Recruitment Team, tackling and brainstorming ideas to ensure a successful future of our program.</ul>
                     <ul><a href="/captain-teams"><b>Captain:</b> </a> Member of 1 in 15 teams who take on their respective yearlong responsibilities to expand and promote our organization. </ul>
                     <ul><a href="/captain-teams"><b>Assistant Directors:</b> </a> Individuals who work all year with their respective Overall Directors to ensure steady growth and management within their Captain teams.</ul>
                     <ul><a href="/meet-the-overalls"><b>Overall Directors:</b> </a> The 19 individuals who lead Dance Marathon efforts throughout the year. They are responsible for leading their respective Captain teams to oversee, expand and promote our organization. </ul>

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
