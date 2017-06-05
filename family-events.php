<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Events | Family | Florida Dance Marathon';
	$GLOBALS['parent'] = 'family';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax family_events">
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
         Your child will receive letters in the mail from their organizations once a month. Each month is themed and some months the organizations even send packages and videos!
          All of the correspondence is checked for appropriateness and home addresses are kept confidential.
          This year we are implementing a new part to our Pen Pal Program; each family will have the opportunity to have a get-together or dinner with its paired organization in the fall and again in the spring.
        </p>

        <h3>Hospitality Nights</h3>
        <p>
          Want to enjoy a nice bite to eat with DM community while raising money for the cause? There will be various times throughout the fall and spring when the Hospitality Team puts together fundraiser nights at local restaurants. We would love for you to come join in on the fun!
        </p>
        <h3>Family Day</h3>
        <p>
          In the fall and spring, come out to spend time with other Miracle Families in a fun-filled day. From exploring science museums in Tampa to looking at all the animals in the Santa Fe Zoo, you and your family will have a great day and you won't want to miss out!
        </p>
        <h3>Talent Show</h3>
        <p>
          This is your child’s chance to be a Dance Marathon celebrity! We want our Miracle Children to get on stage and show us their hidden talents. In the past, we have had children perform songs, show us a dance they choreographed and even perform with the University of Florida Dazzlers!
        </p>
        <h3>Family Room</h3>
        <p>
          At Dance Marathon, we provide a “Family Room” for your families during the event. Each year, the Family Room is decorated with a different theme. This past year, we themed our Family Room "Disney World," and included an exciting scavenger hunt! The Family Room is a place for the families to relax and eat their meals. Most of them stay down on the floor, though, so that they don’t miss out on all the fun!
        </p>
      <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
