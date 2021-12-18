<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Miracles in Color 5K | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.miraclesincolor {
background-image: url("/assets/images/BannerPhotos21/5k_2-13-21_SarahD24.jpg");
}
</style>
<div class="page-heading parallax miraclesincolor">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Miracles in Color 5K</h1>
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
						<li><a class="active">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a href="/Moral-Madness">Morale Madness</a></li>
						<li><a href="/Transform-Today">Transform Today</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Miracles in Color 5K</h2>
               <!-- <p>Tickets are no longer available.</p> -->
        
          Welcome to the Miracles in Color 5K benefiting UF Health Shands Children's Hospital!
          <b>Join us for the Miracles in Color 5K on February 19, 2022 at Flavet Field.</b> Miracles in Color is open to anyone who wants to support our cause and have a great time. In addition to our 5k run, we will have free food and merchandise to purchase on Flavet Field. We couldn't think of a better way for you to spend your Saturday morning than with paint and by supporting a hospital that is so prominent in our community!
  </p>
              <p> Purchase <a href=https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5022>Miracles in Color 5k Tickets here!</a> </p>
              <p> The course runs through the University of Florida campus and will have color stations throughout the course as well as at the finish line. At each color station, runners will be doused in color.* <u>All participants will be provided with a Miracles In Color 5k white shirt with registration.</u> </p>

              <p>The 5k course will be split into 4 shifts. When registering, you will be able to choose which shift you would like to run at. Shift options include: 7:30 a.m., 8:00 a.m., 8:30 a.m., or 9:00 a.m. <b>On the day of the event, please arrive at least 15 minutes prior to your start time. </b></p>

              <p>All proceeds will be donated to UF Health Shands Children's Hospital, our local Children's Miracle Network Hospital, from Dance Marathon at the University of Florida. </p>

              <p>*Don't want to be colored with powder? We will give you something to indicate to our color team that you want to stay clean. </p>

				<p>For more information, please contact the Operations Manager, Madison Hersch, at <a href=mailto:mhersch@floridadm.org>mhersch@floridadm.org.</a></p>

               <h2>Race Day Info</h2>

			   <p>Please arrive 15 minutes before your scheduled run time to sign in. You must fill out the required <a href=https://ufl.qualtrics.com/jfe/form/SV_bj9Q0gkFuj4uKXA>Liability Waiver Form </a> prior to arriving at our 5k. We recommend you fill out this form at the same time as registration and save/screenshot your results. You will be required to show proof of completion when checking in the day of. </p>
              
              <p>There is parking available at Flavet Field, but please arrive early to ensure you have time to sign in before your scheduled race. </p>

              <p>Check your email for more information, and email <a href=mailto:mhersch@floridadm.org>mhersch@floridadm.org.</a> with any questions. </p>

			   <h2>FAQs</h2>
			   <h3>What is a Color Run? </h3>
			   <p>A Color Run is a 5 kilometer race involving powder paint, inspired by the Hindu Festival of Holi. Participants wear white at the beginning of the race and are covered with color by the end. To learn more about Holi you can visit <a href="https://www.holifestival.org/" target="_blank">here.</a> </p>

			  <h3>What if I don’t want to be covered in colored powder?</h3>
              <p>We will give you something to indicate to our color team that you want to stay clean.</p>

              <h3>What do I do after I finish my shift?</h3>
              <p>You are more than welcome to hang out with us on Flavet Field and enjoy free food, purchase merchandise, and stay for our big Color Throw at 10:20 a.m.! </p>

              <h3>Will there be chip timing at the Miracles in Color 5K?</h3>
			  <p>No, there is no official timing system for the 5K. </p>
      
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
