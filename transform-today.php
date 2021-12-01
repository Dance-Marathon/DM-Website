<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Transform Today | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.our-story {
background-image: url("/assets/images/BannerPhotos21/KVO-1091.jpg");
}
</style>
<div class="page-heading parallax our-story">
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
						<li><a href="Moralloween">Moralloween</a></li>
						<li><a href="/Moral-Madness">Morale Madness</a></li>
						<li><a class="active">Transform Today</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Transform Today</h2>
                              Transform Today is our largest fall fundraising effort which lasts 26.2 hours and took place on October 26th-27th this year! Our movement spread throughout our organization, campus and community as our different teams’ colored polos flooded the University of Florida; our participants took the initiative to dedicate their day to raise funds and awareness for patients at UF Health Shands Children’s Hospital. <br></br>

                              In efforts to boost engagement and encourage fundraising, we hosted programming at the Reitz Student Union in the Grand Ballroom and North Lawn. Throughout the day, merchandise, fundraising activities and Miracle Stories engaged and connected our members to our cause. We would like to extend a huge thank you to our participants, Alumni and donors for your continuous support throughout the day!<br></br>

                              Our overall total, which was raised in just 26.2 hours for our hospital, was <b>$589,484.19! </b> <br></br>

                              We are so eager to continue our efforts throughout this year and make miracles for the families who need it most! Please feel free to watch our Transform Today recap video <a href="https://www.youtube.com/watch?v=re8WypH-GlI&list=PLifN5hH-S4iQe14u-fHpP6cafBRGGPURj&index=7" target"_blank">here</a>.
<br></br>
                <h4><i>Why</i></h4>

                For 26.2 hours, Dance Marathon at the University of Florida unites during this fundraising campaign to transform the lives of the patients at UF Health Shands Children’s hospital. In only 26.2 hours, our campus community rises to create as many miracles as possible for the children and families at Shands Children’s Hospital.
<br></br>
<h4><i>When</i></h2>

Transform Today 2022 was from 9:00 a.m. on October 26th until 11:12 a.m. on October 27th!  </li>
<br></br>
<h4><i>What</i></h4>

Transform Today is Dance Marathon at the University of Florida’s Fall fundraising campaign. For 26.2 hours from 9 a.m. until 11:12 a.m. the next day, Dance Marathon at UF compiles our efforts to raise funds and awareness to transform the lives of the children and families at UF Health Shands Children’s Hospital. 
<br></br>
<h4><i>How Can I Get Involved</i></h4>

Transform Today is Dance Marathon at the University of Florida’s largest fundraising campaign in the Fall semester. There are a variety of different ways to join our movement and help us transform the lives of our student body, the lives of the children at UF Health Shands Children’s Hospital, and the lives of each other. </br>

<br>If you are looking to make a financial contribution to support our cause, you can donate using our DonorDrive, linked <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donordrive.donate&EventID=4042" target="_blank">here.</a></br> 
<br>If you are looking to register to Dance in our 2022 Main Event, you can register to Dance <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4327" target="_blank">here.</a> All registered Dancers must also create a DonorDrive page, you can do so <a href="https://events.dancemarathon.com/index.cfm?fuseaction=register.start&eventID=4042" target="_blank">here.</a> Dancer registration is only open for the duration of Transform Today. </br>
<br>If you are looking for additional resources to help with fundraising on Transform Today, click <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4327" target="_blank">here.</a>
 <br></br>
 <h4><i>Hospitality Nights</i></h4>

 Hospitality Nights serve as an opportunity for the local Gainesville community can support Dance Marathon at UF’s fundraising efforts. On Transform Today, hospitality nights will be occurring in select locations. Make sure to mention Dance Marathon at UF at check out and a portion of the proceeds will benefit the patients at UF Health Shands Children’s Hospital!


			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
