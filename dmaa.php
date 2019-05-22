
<?php
/*header("Location: http://www.floridadm.org/alumni.php"); /* Redirect browser */
/*exit();*/
	$status = "closed";
	$GLOBALS['page_title'] = 'DM Alumni | Alumni | Dance Marathon at UF';
	$GLOBALS['parent'] = 'dmaa';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax about-dma">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>About DM Alumni</h1>
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
						<li><a class="active">About DM Alumni</a></li>
            <li><a href="/meet-dma-board">Meet the DMA Board</a></li>
            <li><a href="/dma-members">DM Alumni Members</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
     	<h3>Get Involved</h3>
      <p>Your commitment to a worthy cause doesn't have to end after you graduate. Join DMA and stay FTK for years to come. <a href="https://docs.google.com/forms/d/1BmlbhCSrQkvRyYE7S4go5uLMu-Q-xnTQSQHQXKc5VnE">Become a member or renew your membership today.</a></p>
      <p>Be sure to like the official page for <a href="https://www.facebook.com/FloridaDMAlumni?fref=ts">Dance Marathon at UF Alumni on Facebook</a> to stay connected with the rest of your Dance Marathon Alumni family.</p>
      <h3>About</h3>
      <p>Since 1995, Dance Marathon at UF has raised over $15.2 million for UF Health Shands Children's Hospital, our local Children’s Miracle Network hospital. Thanks to your dedication and support throughout your college years, we have become the most successful student-run philanthropy in the southeastern United States.</p>Dance Marathon at UF knows that the Gator Nation is everywhere. Formed in 2013, the Dance Marathon Alumni group gives alumni across the country the opportunity to continue to give back and stay involved with their alma mater. Membership is only $35 per year FTK and offers a variety of benefits.</p>
      </p>
      <h3>Benefits</h3>
      <ul>
        <li>Discounted ticket to the Miracle Gala</li>
        <li>An official DMA shirt at the Event</li>
        <li>Miracle Breakfast on the Sunday of the Event</li>
        <li>Preferred floor access at the Event</li>
        <li>Access to the Family Room at the Event</li>
        <li>Behind-the-scenes Hospital Tour during the Event weekend</li>
        <li>Newsletters keeping you up-to-date on DM at UF and the DMA</li>
        <li>Additional benefits depending upon sponsorship agreements</li>
      </ul>
      <p></p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
