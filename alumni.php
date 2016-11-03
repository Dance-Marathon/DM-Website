<?php
	$status = "open";
	$GLOBALS['page_title'] = 'DM Alumni | Get Involved | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");

  $overalls = array(
    array(
      'name'                  =>  'Jorge Sanchez',
      'previous_involvement'  =>  '<p>2011: Operations Captain</br>2012: Operations Overall</br>2013: Internal Communications Overall DM 2013</p>',
      'fun_fact'              =>  'I have watched The Office all the way through three times.',
      'favorite_memory'       =>  '<p>It is almost impossible to pick one, however I will never forget how incredile it was to watch the DM Rave from the top of the O’Dome.</p>
      </p>',
      'continued'             =>  'I am currently an Education Consultant while pursuing a Master of Health Administration at the University of South Florida in Tampa, FL. The spirit of Dance Marathon, and the desire to help others, does not go away once you graduate. Since graduating in 2013 I have volunteered with the Pediatric Cancer Foundation in Tampa, FL. This organization works to fund Phase 1 Clincial Trials for pediatric cancer research.',
      'image'                 =>  'sanchez'
    ),
    array(
      'name'                  =>  'Madison Hager',
      'previous_involvement'  =>  '<p>2009: Dancer</br>2010: Dancer and Delegate</br>2011: Hospitality Captain</br>2012: Hospitality Overall Director</br>2013: External Communications Director</br>2015: DMA Board Member</p>',
      'fun_fact'              =>  'I have visited all 50 states (and am originally from Iowa).',
      'favorite_memory'       =>  '<p>My favorite DM memory isn’t quite a memory, but a continual experience of being able to watch the miracle children grow up! I still remember the moment when I met Zander W. in 2009 (with a monkey baby leash on).</p>
      </p>',
      'continued'             =>  'I am currently living in Washington, DC. As alumni, we now have the opportunity not only to continue to raise awareness and financial support for both DM and CMNH, but do so outside of the Gainesville market. DM 2017 will be the ninth year I am involved with the organization and can’t wait to visit in person! I also still carry a keychain from CMNH that is the average size of a premature baby’s hand with me everywhere I go to remind me how fortunate I am.',
      'image'                 =>  'Hager'
    ),
    array(
      'name'                  =>  'Eden Joyner',
      'previous_involvement'  =>  '<p>2009: Dancer</br>2010: Public Relations Captain</br>2011: Public Relations Captain</br>2012: Public Relations Overall Director</p>',
      'fun_fact'              =>  'My cat is named Admiral Catbar.',
      'favorite_memory'       =>  '<p>It’s hard to pick just one. Flash mobs to raise awareness, Party Rocking with miracle children and coming back to Dance Marathon 2013 as an alumni to witness the $1 million milestone.</p>
      </p>',
      'continued'             =>  'Dance Marathon is more than just an event. It’s a mentality. Being involved in Dance Marathon at UF taught me how to be involved in my community and constantly give back. Since graduation and moving to San Francisco, CA, I have participated in several young professional Dance Marathons, including serving as Director of Communications for the first annual Bay Area Dance Marathon. With the creation of the UF DM Alumni group, I was able to stay connected with the same passionate individuals and families who inspired me many years ago. I will continue to raise funds and awareness for the cause for many years to come.',
      'image'                 =>  'Joyner'
    ),
    array(
      'name'                  =>  'Garrett Chappell',
      'previous_involvement'  =>  '<p>2010: Dancer</br>2011: Marketing Captain</br>2012: Marketing Overall</br>2013: Recruitment Overall</p>',
      'fun_fact'              =>  'I spent my 25th birthday hiking Patagonia in a snowstorm.',
      'favorite_memory'       =>  '<p>Aside from being part of the Million Dollar team, I will never forget the low country boil the Ferrell Family invited us to on St. Patrick’s Day.</p>
      </p>',
      'continued'             =>  'Almost 4 years since graduating and moving to Jacksonville, FL, I still take every chance I get to inform individuals I meet about the incredible things Dance Marathon at UF is accomplishing. It is an honor to watch this organization grow each year and a privilege to be able to connect with our alumni through the DMA and keep them engaged with our incredible cause.',
      'image'                 =>  'Chappell'
    ),
    array(
      'name'                  =>  'Jamie Heekin',
      'previous_involvement'  =>  '<p>2011: Dancer</br>2012: Community Events Captain</br>2013: Community Events Overall</br>2014: Overall Director</p>',
      'fun_fact'              =>  'There is a mountain in Antarctica named Mount Heekin.',
      'favorite_memory'       =>  '<p>Dancing on the field with Miracle Children and the UF Marching Band during the halftime show in the Swamp.</p>
      </p>',
      'continued'             =>  'After graduating from UF, I spent a year working at UF Health Shands with adult and pediatric populations. I was able to witness firsthand how countless children and their families benefit from the funds raised by DM at UF. Since that time, I have also participated in Jacksonville Citywide Dance Marathon. I am currently in Houston, Texas studying to be a PA in the Texas Medical Center. Through my rotations, I have the opportunity to practice with kids who are fighting in a CMN Hospital in Texas.',
      'image'                 =>  'Heekin'
    )
  );
?>

<div class="page-heading parallax dmaa">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>DM Alumni</h1>
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
            <li><a href="/register-to-fundraise"> Register to Fundraise</a></li>
            <li><a href="/delegates">Delegates</a></li>
            <li><a href="/dancers">Dancers</a></li>
            <li><a class="active">DM Alumni</a></li>
            <li><a href="/organizations">Organizations</a></li>
            <li><a href="/captain-teams">Captain Teams</a></li>
            <li><a href="/meet-the-overalls">Meet the Overalls</a></li>
            <li><a href="/emerging-leaders">Emerging Leaders Program</a></li>
            <li><a href="/ftkrew">FTKrew</a></li>
<!--            <li><a href="/overall-applications">Overall Applications</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <h3>Get Involved</h3>
      <p>Your commitment to a worthy cause doesn't have to end after you graduate. Join DMA and stay FTK for years to come. <a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=1353">Become a member or renew your membership today.</a></p>
      <p>Be sure to like our <a href="https://www.facebook.com/FloridaDMAlumni?fref=ts">alumni page on Facebook</a> to stay connected with the rest of your Dance Marathon alumni family.</p>
      <h3>About</h3>
      <p>Since 1995, Dance Marathon at UF has raised over $12.4 million for UFHealth Shands Children's Hospital, our local Children’s Miracle Network hospital. Thanks to your dedication and support throughout your college years, we have become the most successful student-run philanthropy in the southeastern United States.</p>Dance Marathon at UF knows that the Gator Nation is everywhere. Formed in 2013, the Dance Marathon Alumni group gives alumni across the country the opportunity to continue to give back and stay involved with their alma mater. Membership is only $35 a year FTK and offers a variety of benefits.</p>
      </p>
      <h3>Benefits</h3>
      <ul>
        <li>Invitation to The Miracle Gala sponsored by the UFAA on March 24, 2017</li>
        <li>An official DMA t-shirt at the event (March 25-26, 2017)</li>
        <li>DMA social Saturday night</li>
        <li>Miracle Breakfast on Sunday of the event</li>
        <li>Preferred floor access at the event</li>
        <li>Special offers to the online DM Store</li>
        <li>Newsletters keeping you up to date on the happenings of DM at UF, the DMA and more!</li>
        <li>Access to the Family Room during the Event</li>
      </ul>
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
                  <h4><b>Previous DM Involvement</b></h4>
                  <p><?php echo $overalls[$i]['previous_involvement']; ?></p>

                  <h4><b>Fun Fact</b></h4>
                  <p><?php echo $overalls[$i]['fun_fact']; ?></p>

                  <h4><b>Favorite DM Memory</b></h4>
                  <?php echo $overalls[$i]['favorite_memory']; ?>

                  <h4><b>How Have You Carried on Dance Marathon?</b></h4>
                  <?php echo $overalls[$i]['continued']; ?>
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
