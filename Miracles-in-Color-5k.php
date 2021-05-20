<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Miracles in Color 5K | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

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
						<li><a href="/dance-marathon-virtual">Dance Marathon Virtual Event 2021</a></li> 
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
                <p>Tickets are no longer available.</p>
        
                <p>Welcome to the Miracles in Color 5K benefiting UF Health Shands Children's Hospital!
Join us for the Miracles in Color 5K on February 13, 2021 at Flavet Field. Miracles in Color is open to anyone who wants to support our cause and have a great time. We couldn't think of a better way for you to spend your Saturday morning than with paint and by supporting a hospital that is so prominent in our community!
  </p>
                <p>The course runs through the University of Florida campus and will have color stations throughout the course as well as at the finish line. At each color station, runners will be doused in color.* All participants will be provided with a Miracles In Color 5K white shirt during registration.</p>
				<p>This year we are offering a virtual 5K option! Virtual participants will be provided a “Race Day Bundle” with a t-shirt and colored powder. There are individual tickets, as well as tickets for groups of two or four. Virtual registration must be completed by February 4 to guarantee shipping arrival before February 13.</p>
				<p>Registration closes Tuesday, Feb. 9 at 11:59 p.m. After that point, no more online registrations will be accepted. No registration will be allowed at the event due to capacity limits.</p>
				<p>All proceeds will be donated to UF Health Shands Children's Hospital, our local Children's Miracle Network Hospital, from Dance Marathon at the University of Florida.</p>
				<p>*Don't want to be colored with powder? We will give you something to indicate to our color team that you want to stay clean. </p>
				<p>For more information, please contact the Operations Manager, Hannah Cooper, at hcooper@floridadm.org.</p>

               <h2>Race Day Info</h2>

			   <p>Please arrive 15 minutes before your scheduled run time to sign in. You will be sent a Safety Clearance and Liability Waiver Form on Friday, Feb. 12. Please fill this form out ahead of time and screenshot your results.</p>
			   <p>There is parking available at Flavet Field, but please arrive early to ensure you have time to sign in before your scheduled race.</p>
			   <p>Check your email for more information, and email hcooper@floridadm.org with any questions.</p>

			   <h2>FAQs</h2>
			   <h3>What is a Color Run? </h3>
			   <p>A Color Run is a 5 kilometer race involving powder paint, inspired by the Hindu Festival of Holi. Participants wear white at the beginning of the race and are covered with color by the end. To learn more about Holi you can visit <a href="https://www.holifestival.org/" target="_blank">here.</a> </p>

			   <h3>What safety precautions are being taken to prevent the spread and transmission of COVID-19?</h3>
               <br>This plan has been developed within the current CDC, Florida Department of Health, and University of Florida guidelines for managing an event space while preventing the spread and transmission of COVID-19.</br>
               <br>All UF students attending the Miracles in Color 5K will be required to provide proof of a “Cleared” status on their ONE.UF to indicate that they are cleared to attend campus events.</br>
               <br>A safety clearance form will be sent to all participants prior to the event to screen for symptoms and exposure prior to attending the event. If participants are experiencing symptoms, exposed to COVID-19, or not cleared for campus, then they will not be permitted to participant in the event.</br>

			  <h3>Will I need to wear a facial covering while running?</h3>
               <br>Yes, facial coverings are required for the duration of the event.</br>
               <br>Masks with exhalation valves or vents allow air to be expelled and are prohibited because they do not provide protection to others. </br>
                <br>In addition, neck gaiters and bandanas should not be worn unless no other face covering is available. </br>

			   <h3>How is social distancing being enforced?</h3>
               <p>Each shift will be limited to 100 participants to keep capacities within University guidelines. Participants are invited to attend with up to three other members of their QuaranTeam and will be instructed to maintain social distancing. Dance Marathon at UF Captains will be at Flavet Field and on the course to remind participants of social distancing protocols.</p>

			  <h3>What is a QuaranTeam?</h3>
              <p>A QuaranTeam is a group of individuals who choose to socialize together and follow a mutually agreed upon set of rules or guidelines during the pandemic.  More information can be found at https://gatorwell.ufsa.ufl.edu/wp-content/uploads/2020/08/FindingYourQuaranTeam.pdf. </p>

			  <h3>What if I don’t want to be covered in colored powder?</h3>
              <p>We will give you something to indicate to our color team that you want to stay clean.</p>

			  <h3>Refund policy</h3>
			  <p>If you are unable to attend the Miracles in Color 5K due to a positive COVID-19 test or exposure, please contact hcooper@floridadm.org.</p>

              <h3>Will there be chip timing at the Miracles in Color 5K?</h3>
			  <p>No, there is no official timing system for the 5K. </p>

              <h3>Can I bring my animal to the Miracles in Color 5K?</h3>
			  <p>Animals are not permitted to attend Dance Marathon at UF events unless they are a certified service animal.</p>
      
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
