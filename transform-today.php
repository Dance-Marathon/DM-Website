<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Transform Today | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax moralloween">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Transform Today</h1>
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
		  				<li><a href="/dance-marathon">Dance Marathon 2021</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a class="Moralloween">Moralloween</a></li>
						<li><a href="/Moral-Madness">Morale Madness</a></li>
						<li><a href="/active">Transform Today</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Transform Today</h2>
                <h4><i>Why</i></h4>

                For 26.2 hours, Dance Marathon at the University of Florida unites during this fundraising campaign to transform the lives of the patients at UF Health Shands Children’s hospital. In only 26.2 hours, our campus community rises to create as many miracles as possible for the children and families at Shands Children’s Hospital.

<h4><i>When</i></h2>

From 8 a.m. on October 27 to 10:12 a.m. on October 28. Dance Marathon at the University of Florida will be hosting activities on the Reitz North Lawn and will have canning stations on-campus and throughout Gainesville.  </li>

<h4><i>What</i></h4>

Transform Today is Dance Marathon at the University of Florida’s Fall fundraising campaign. For 26.2 hours from 8 a.m. until 10:12 a.m. the next day, Dance Marathon at UF compiles our efforts to raise funds and awareness to transform the lives of the children and families at UF Health Shands Children’s Hospital. 

<h4><i>How Can I Get Involved<i><h4>

Transform Today is Dance Marathon at the University of Florida’s largest fundraising campaign in the Fall semester. There are a variety of different ways to join our movement and help us transform the lives of our student body, the lives of the children at UF Health Shands Children’s Hospital, and the lives of each other. 

If you are looking to make a financial contribution to support our cause, you can donate using our DonorDrive, linked <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donordrive.donate&EventID=4042" target="_blank">here.</a> 
If you are looking to register to Dance in our 2021 Main Event, you can register to Dance <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4327" target="_blank">here.</a> All registered Dancers must also create a DonorDrive page, you can do so <a href="https://events.dancemarathon.com/index.cfm?fuseaction=register.start&eventID=4042" target="_blank">here.</a> Dancer registration is only open for the duration of Transform Today. 
If you are looking for additional resources to help with fundraising on Transform Today, click <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4327" target="_blank">here.</a> All registered Dancers must also create a DonorDrive page, you can do so <a href="https://drive.google.com/drive/folders/1juPbkFsqrFn6Sec6FY_KM9HVUfWMRXlQ?usp=sharing" target="_blank">here.</a>

			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
