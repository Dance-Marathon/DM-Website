<?php
	$status = "close";
	$GLOBALS['page_title'] = 'Campus Events | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");

	$events = array(
        array(
            'name' => 'Bowling',
            'description' => 'Teams of four compete at Alley Gatorz Bowling Alley, many dressing in costumes to show team spirit. A DJ is in attendance, along with Miracle Families who bowl in the tournament. Many teams participate for a fun day of bowling with friends, while others put on their game faces and compete for a top spot in the tournament. A number of trophies, which are bowling pins painted by the kids at Shands Children&#39;s Hospital, are awarded for highest individual score, highest team score and best costumes.',
            'image' => 'Bowling.JPG',
            ),
        array(
            'name' => 'FTKickball',
            'description' => '',
						'image' => '',
            ),
        array(
            'name'  => 'FTK Festival',
            'description' => 'Come one, come all to Dance Marathon’s FTK Festival. We\'re celebrating DM’s 23rd year, and this is the perfect way to get us ready for the event! Get ready for food, entertainment, , face-painting, balloon animals and carnival games. FTK Festival is a family favorite, dont miss out!',
            'image' => 'carnival.jpg',
            ),
        );
?>

<div class="page-heading parallax community_events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Campus Events</h1>
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
            <li><a class="active">Campus Events</a></li>
            <li><a href="/mini-marathon">Mini-Marathon</a></li>
            <li><a href="/ft5k">FT5K</a></li>
            <li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/ftk-festival">FTK Festival</a></li>
						<?php if ($dance_marathon_event_started == true) { ?>
							<li><a href="/dance-marathon">Dance Marathon <?php echo $dm_year; ?></a></li>
						<?php } ?>
          </ul>
        </div>
      </div>
      <div class="col-md-8 col-md-push-1">
      <?php if ($status=="open" ) { ?>
				<h3>Campus Events </h3>
			   <!--	<p>quick explination about community events</p> -->



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
