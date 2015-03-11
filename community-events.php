<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Community Events | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
	
	$events = array(
        array(
            'name' => 'Bowling',
            'description' => 'Teams of four compete at Alley Gatorz Bowling Alley, many dressing in costumes to show team spirit. A DJ is in attendance, along with Miracle Families who bowl in the tournament. Many teams participate for a fun day of bowling with friends, while others put on their game faces and compete for a top spot in the tournament. A number of trophies, which are bowling pins painted by the kids at Shands Hospital for Children, are awarded for highest individual score, highest team score, and best costumes.',
            'image' => 'Bowling.JPG',
            ),
        array(
            'name'  => 'Kickball',
            'description' => 'The Dance Marathon "Kickin\' It for the Kids" kickball tournament will be held in the Fall, traditionally on Hume Field. Any team of 10 can sign up for a day filled with kickball, music, appearances by Miracle Families and fun! The tournament is broken up into two brackets: a women\'s and a coed bracket. In 2014, over 40 teams participated on 4 fields to keep the games rolling. KISS 105.3 comes out to broadcast live from the event and provide tunes for participants to enjoy.',
            'image' => 'Kickball.JPG',
            ),
        array(
            'name'  => 'Food Truck Rally',
            'description' => 'Dance Marathon at UF had its first-ever Food Truck rally with our wonderful new partner, CYMplify. Their motto of ‘doing good things with good people’ is all encompassing of what DM stands for and helped create a great atmosphere for an even better event. The food truck line-up included Bubba Luigi’s Road Trip, FED Food Company, Go Go Stuff Yourself, Humble Pie, Off The Griddle, Soup to Nuts and Mobsta Lobsta. With entertainment, great food, and stories shared from our local Miracle Families, this is one event not to miss out on!',
            'image' => 'DMCymp.jpg',
            ),
        array(
            'name' => 'FT5K',
            'description' => '"For The Kids 5K" is an early morning race that takes participants through the beautiful UF campus every spring. Over 900 members of the community and students register to enjoy the run and compete for prizes. Whether it is to enjoy a light walk or jog through campus with friends, get in shape for bathing suit season, or compete for a place in the race, participants leave the race feeling accomplished for finishing the run just blocks away from UF Health Shands Children\'s Hospital. Please visit <a href="/ft5k">www.floridadm.org/ft5k</a> to sign up!',
            'image' => '5k.jpg',
            ),
        array(
            'name'  => 'FTKarnival',
            'description' => 'Come one, come all to Dance Marathon’s FTKarnival We\'re celebrating DM’s 21st year and this is the perfect way to get us ready for the big weekend! Get ready for food, entertainment, bounce houses, snow cones, clowns, face-painting, balloon animals and carnival games. FTKarnival is a family favorite Food-Games-Music-Fun all For the Kids!',
            'image' => 'carnival.jpg',
            ),
        );
?>

<div class="page-heading parallax events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Community Events</h1>
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
<<<<<<< Updated upstream
            <li><a class="active">Community Events</a></li>
            <li><a href="/hsdm.php">High School DM</a></li>
            <li><a href="/ft5k">FT5K 2015</a></li>
=======
<<<<<<< HEAD
						<li><a class="active">Community Events</a></li>
						<li><a href="/hsdm">High School DM</a></li>
                        <li><a href="/ft5k">FT5K 2015</a></li>
                        <li><a href="/registertodance">Dancer Registration</a></li>
=======
            <li><a class="active">Community Events</a></li>
            <li><a href="/hsdm.php">High School DM</a></li>
            <li><a href="/ft5k">FT5K 2015</a></li>
>>>>>>> origin/Thomas
>>>>>>> Stashed changes
          </ul>
        </div>
      </div>
      <div class="col-md-8 col-md-push-1">
      <?php if ($status=="open" ) { ?>
        <div class="container-fluid">
          <div class="row">
            <?php for($i=0 ; $i < count($events); $i++) { ?>
            <!-- Button trigger modal -->
              <?php if ($i % 3==0 ) { ?>
              <div class="clearfix visible-xs-block visible-sm-block"></div>
              <?php } ?>
              <?php if ($i % 4==0 ) { ?>
              <div class="clearfix visible-md-block visible-lg-block"></div>
              <?php } ?>
              <div class="col-xs-4 col-md-3">
                <a href="#" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
                  <img class="img-square img-thumbnail" src="<?php echo ('/assets/images/'.$events[$i]['image']); ?>" alt="..."><br>
                  <p><?php echo $events[$i]['name']; ?></p>
                </a>
              </div>
              
              <!-- Modal -->
              <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h3 class="modal-title" id="#myModal<?php echo $i; ?>Label"><?php echo $events[$i]['name']; ?></h3>
                    </div>
                    <div class="modal-body">
                      <!--<img src="<?php //echo ('/assets/images/kids/fullsize/'.$events[$i]['image']); ?>" class="img-responsive img-full" />
                      <hr>-->
                      <p><?php echo $events[$i]['description']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>
<?php include("includes/foot.php"); ?>