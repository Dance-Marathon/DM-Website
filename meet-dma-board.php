<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Meet the DMA Board | Alumni | Florida Dance Marathon';
	$GLOBALS['parent'] = 'dmaa';
	include("includes/head.php");
	include("includes/navbar.php");

  $overalls = array(
    array(
      'name'                  =>  'Matt Thalhamer',
			'current_city'          =>  'Salt Lake City, UT',
      'previous_involvement'  =>  '2011: Dancer</br>2012: Morale Staff</br>2013: Morale Captain</br>2014: Morale Captain</p>',
      'favorite_memory'       =>  'My favorite DM memory has to be my first time seeing the 2011 Linedance as a dancer, then hearing my first miracle story.  Those two moments solidified the fact that I would be involved with Dance Marathon for the rest of my life.</p>',
      'continued'             =>  'I have carried on Dance Marathon as an alumnus by working for Children&#39;s Miracle Network Hospitals national headquarters as a Business Intelligence Manager and by continuing to support DM at UF through donations to current participants as well as fundraising on my own.',
      'image'                 =>  'Matt T'
    ),
    array(
      'name'                  =>  'Brian Giaquinta',
			'current_city'          =>  'West Palm Beach, FL',
      'previous_involvement'  =>  '2012: Finance Captain</br>2013: Finance Captain</br>2014: Finance Overall</p>',
      'fun_fact'              =>  'I met Matt Ryan a week after the Falcons beat the Bucs in November ‘16 and thanked him on behalf of the Gator Nation for beating Jameis Winston.',
      'favorite_memory'       =>  'My fondest memories come from doing the things I love with the people I love, so it’s no surprise that my favorites from DM have a lot to do with food and the Bravine/Pence family. Pizookies and pizza at BJ’s with Tyler, his mom, his siblings, and my finance team are memories I will cherish forever.
Acapella line dance after the event is a close second. DM people are above average singers and dancers, FYI. </p>',
      'continued'             =>  'Leaving Dance Marathon behind after graduation was a possibility that never crossed my mind. So long as the kids are in need of our support, and so long as I have something to give, this organization will always be a part of my life. DM at UF only grows its numbers one of two ways – the population of the University of Florida grows a bunch, which is unlikely, or the population of our involved alumni base grows a bunch, which is very likely! So, I’ll carry on spreading the word and raising the dollars and dancing the night away FTK…and adulting in my spare time.',
      'image'                 =>  'BrianG'
    ),
    array(
      'name'                  =>  'Eden Joyner',
			'current_city'          =>  'Oakland, CA',
      'previous_involvement'  =>  '2009: Dancer</br>2010: Public Relations Captain</br>2011: Public Relations Captain</br>2012: Public Relations Overall Director</p>',
      'fun_fact'              =>  'My cat is named Admiral Catbar.',
      'favorite_memory'       =>  'It’s hard to pick just one. Flash mobs to raise awareness, Party Rocking with miracle children and coming back to Dance Marathon 2013 as an alumni to witness the $1 million milestone.</p>
      </p>',
      'continued'             =>  'Dance Marathon is more than just an event. It’s a mentality. Being involved in Dance Marathon at UF taught me how to be involved in my community and constantly give back. Since graduation and moving to San Francisco, CA, I have participated in several young professional Dance Marathons, including serving as Director of Communications for the first annual Bay Area Dance Marathon. With the creation of the UF DM Alumni group, I was able to stay connected with the same passionate individuals and families who inspired me many years ago. I will continue to raise funds and awareness for the cause for many years to come.',
      'image'                 =>  'Joyner'
    ),
    array(
      'name'                  =>  'Jillian Abrahamson',
			'current_city'          =>  'Macon, GA',
      'previous_involvement'  =>  '2010: Dancer Buddy</br>2011: Staff</br>2012: Dancer Relations Captain</br>2013: Dancer Relations Overall</p>',
      'fun_fact'              =>  'I ran every day for a year and basically live my life in quotes from The Office.',
      'favorite_memory'       =>  'The 2013 Closing Ceremonies will forever be one of the most amazing 20 minutes of my life. Watching and being a part of the eruption of pure joy when we reached the $1 million milestone was unreal. I still get goosebumps every time I hear Carry On by Fun.</p>',
      'continued'             =>  'Dance Marathon has shaped who I am as a person today. It showed me the importance of purpose and to never lose sight of what is truly precious in life. I still seem to bring up DM in conversations with almost everyone I meet, have started a career in medical technology that improves patient care, and have wrangled my little brother and all his friends to get involved now that they are at UF. I remember how challenging it can be to reach ambitious fundraising goals while involved, and am honored to be in a position now to support this organization more than ever. Since I graduated in 2013, I have come back to the O&#39;Dome every year for Dance Marathon to stand alongside my fellow alums. While we all move on from college at some point, you never truly move on from Dance Marathon.',
      'image'                 =>  'Jillian'
    ),
    array(
      'name'                  =>  'Jamie Heekin',
			'current_city'          =>  'Houston, TX',
      'previous_involvement'  =>  '2011: Dancer</br>2012: Community Events Captain</br>2013: Community Events Overall</br>2014: Overall Director</p>',
      'fun_fact'              =>  'I know Latin but I don&#39;t like to speak it.',
      'favorite_memory'       =>  'Dancing on the field during the halftime show in the Swamp with Miracle Children and the UF Marching Band.</p>',
      'continued'             =>  'I am currently studying to be a PA in the Texas Medical Center in Houston, Texas. Through my rotations, I have the opportunity to practice with kids who are fighting their battles in our local CMN Hospital. Each time I see the CMN balloon on a billboard, in a patient information pamphlet, or on a piece of hospital equipment, I am reminded of the every day miracles DM at UF accomplishes. After graduating from UF, I spent a year working at UF Health and participated in Jacksonville Citywide Dance Marathon. I have, and will continue to give back through this cause for many years to support the amazing kids and their families. ',
      'image'                 =>  'Heekin'
    )
  );
?>

<div class="page-heading parallax dmaa">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Meet the DMA Board</h1>
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
            <li><a href="/dmaa">About DM Alumni</a></li>
            <li><a class="active">Meet the DMA Board</a></li>
            <li><a href="/dma-members">DM Alumni Members</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <p></p>
      <h3>Meet the DMA Board of Directors</h3>
      </p>
      <?php if ($status == "open") { ?>
        <?php

        for($i = 0; $i < count($overalls); $i++) {
          if($i % 3 == 0) {
            echo '<div class="row">';
          } ?>
          <div class="col-sm-4">
            <a href="#" style="display: block;" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
              <img class="img-circle img-thumbnail" src="<?php echo ('/assets/images/'.$overalls[$i]['image']); ?>.jpg" alt="..."><br>
              <h3><?php echo $overalls[$i]['name']; ?></h3>
            </a>
            <p style="text-align: center;">
              <em><?php echo $overalls[$i]['position']; ?></em>
              <br><a href="mailto:<?php echo $overalls[$i]['email']; ?>"><?php echo $overalls[$i]['email']; ?></a>
            </p>
          </div>

          <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title" id="#myModal<?php echo $i; ?>Label">Meet <?php echo $overalls[$i]['name']; ?></h4>
                </div>
                <div class="modal-body">
									<h4><b>Current City</b></h4>
									<p><?php echo $overalls[$i]['current_city']; ?></p>

									<h4><b>Previous DM Involvement</b></h4>
                  <p><?php echo $overalls[$i]['previous_involvement']; ?></p>

                  <h4><b>Fun Fact</b></h4>
                  <p><?php echo $overalls[$i]['fun_fact']; ?></p>

                  <h4><b>Favorite DM Memory</b></h4>
                  <p><?php echo $overalls[$i]['favorite_memory']; ?></p>

                  <h4><b>How Have You Carried on Dance Marathon?</b></h4>
                  <p><?php echo $overalls[$i]['continued']; ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php
          if(($i - 2) % 3 == 0) {
            echo '</div>';
          }
        } ?>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
