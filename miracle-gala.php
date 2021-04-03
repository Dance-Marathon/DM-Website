<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Miracle Gala | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax gala">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Miracle Gala</h1>
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
						<li><a class="active">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a href="/Moral-Madness">Morale Madness</a></li>
						<li><a href="/Transform-Today">Transform Today</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Miracle Gala</h2>

<p>Tickets for the 2021 virtual Dance Marathon Miracle Gala are now available <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4541">here!</a></p>
<p>Each year, we invite guests to join us for an evening of fine dining and dancing to recognize all of the accomplishments of Dance Marathon at UF and the doctors at UF Health Shands Children’s Hospital. This year, the Miracle Gala will be held 100% virtually. </p>
<p>We are focusing on reminiscing on and celebrating the past 27 years of DM at UF, with the theme being “Our Time Then vs. Our Time Now.” The night will be filled with many Special Guests, including Miracle Families, UF Health Shands Staff, members of our High School Program, Keynote Speakers, an Alumni Spotlight, and more! All attendees will also have access to participate in a Silent Auction and Raise the Paddle.</p>
<p>There are two ticket options available:</p>  
<ul>
<li>$40 for a VIP ticket</li>
<ul>
<li>Purchase your VIP event tickets by the evening of 3/28 to ensure you get your event package on time</li>
<li>Includes an Event Package shipped to you with exclusive merchandise, Miracle Gala items, and more </li>
<li>VIP Hour before the event</li>
</ul>
<li>$10 for a General Ticket </li>
<li>Legacy DMA Members will be offered a 20% discount on either option.</li>
</ul>    
<p>Although the event will look a little different, we still encourage you to put on your Black-tie attire and get ready to enjoy a night to remember, as the Miracle Gala is a beautiful night to celebrate our movement and the incredible strides we make each year!</p> 
<p>For more information, please contact the Community Outreach Overall Director, Grace Crowder, at gcrowder@floridadm.org. We look forward to seeing you there!</p>       
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
