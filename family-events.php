<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Events | Family | Florida Dance Marathon';
	$GLOBALS['parent'] = 'family';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax family">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Family Events</h1>
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
						<li><a href="/meet-the-kids">Meet the Kids</a></li>
						<li><a class="active">Family Events</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>Pen Pal Program</h3>
        <p>
          The Pen Pal Program is a fun and exciting chance for our Miracle Families to be paired with University of Florida students who are participating in Dance Marathon. This is a unique experience for the children to interact with members from participating organizations.
          <br/> Your child will receive letters in the mail from their organizations once a month. Each month is themed and some months the organizations even send packages and videos!
          <br/> All of the correspondence is checked for appropriateness and home addresses are kept confidential.
          <br/> This year we are implementing a new part to our Pen Pal Program. Each family will have the opportunity to have a get together or dinner with their paired organization in the Fall and again in the Spring.
        </p>
        <h3>Sweet Dreams</h3>
        <p>
          During the Spring, your Miracle Child gets the chance to invent his/her very own special ice cream flavor for everyone to enjoy. Schedule a time to visit with us at the shop, to take a tour, savor ice cream, and design your own dreamy treat! Even if you don't live in the Gainesville area, you are still welcome to design your own flavor. All of the “Miracle Flavors” will be displayed in the Sweet Dream’s ice cream case for all of Gainesville to try. Come hang out with your organization and enjoy a night of eating delicious treats with your family!
        </p>
        <h3>Hospitality Nights</h3>
        <p>
          Want to enjoy a nice bite to eat with friends and help raise money for DM at the same time? There will be various times throughout the Fall and Spring where the Hospitality team will be putting together nights at local restaurants and we would love for you to come join in on the fun!
        </p>
        <h3>Family Day</h3>
        <p>
          In the Fall and Spring come out to spend time with other Miracle Families in a fun filled day. From exploring science museums in Tampa to looking at all the animals in the Santa Fe Zoo, you and your family will have a great day and you don’t want to miss out!
        </p>
        <h3>Talent Show</h3>
        <p>
          This is your child’s chance to be a Dance Marathon celebrity! We want our Miracle Children to get on stage and show us their hidden talents. In the past we have had children perform a song for their first time, show us a dance they made with their paired organization and even perform with the University of Florida Dazzlers!
        </p>
        <h3>Family Room</h3>
        <p>
          At Dance Marathon, we provide a “Family Room” for our families during the event. Each year the Family Room is decorated with a different theme. This past year a scavenger hunt was even included! The Family Room is a place for the families to relax and eat their meals. Most of them stay down on the floor though so they don’t miss out on all the fun!
          <br/> At DM 2014, we will have two “Family Rooms,” one for our Miracle Children who are 12 and under and then another room for our 13 and older Miracle Teens and Miracle Gator Nation Families!
        </p>
      <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
