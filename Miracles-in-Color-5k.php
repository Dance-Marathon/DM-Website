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
		  				<li><a href="/dance-marathon">Dance Marathon 2020</a></li>
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

                <p>Welcome to the Miracles in Color 5K benefiting UF Health Shands Children's Hospital!
Join us for the Miracles in Color 5K on February 13, 2021 at Flavet Field. Miracles in Color is open to anyone who wants to support our cause and have a great time. We couldn't think of a better way for you to spend your Saturday morning than with paint and by supporting a hospital that is so prominent in our community!
  </p>
                <p>The course runs through the University of Florida campus and will have color stations throughout the course as well as at the finish line. At each color station, runners will be doused in color.* All participants will be provided with a Miracles In Color 5K white shirt during registration.</p>
				<p>This year we are offering a virtual 5K option! Virtual participants will be provided a “Race Day Bundle” with a t-shirt and colored powder. There are individual tickets, as well as tickets for groups of two or four. Virtual registration must be completed by February 4 to guarantee shipping arrival before February 13.</p>
				<p>Registration closes Tuesday, Feb. 9 at 11:59 p.m. After that point, no more online registrations will be accepted. No registration will be allowed at the event due to capacity limits.</p>
				<p>All proceeds will be donated to UF Health Shands Children's Hospital, our local Children's Miracle Network Hospital, from Dance Marathon at the University of Florida.</p>
				<p>*Don't want to be colored with powder? We will give you something to indicate to our color team that you want to stay clean. </p>
				<p>For more information, please contact the Operations Manager, Hannah Cooper, at <a href="mailto:hcooper@floridadm.org">hcooper@floridadm.org\</a>.</p>

               <h2>Race Day Info</h2>

			   <p>Please arrive 15 minutes before your scheduled run time to sign in. You will be sent a Safety Clearance and Liability Waiver Form on Friday, Feb. 12. Please fill this form out ahead of time and screenshot your results.</p>
			   <p>There is parking available at Flavet Field, but please arrive early to ensure you have time to sign in before your scheduled race.</p>
			   <p>Check your email for more information, and email hcooper@floridadm.org with any questions.</p>
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
