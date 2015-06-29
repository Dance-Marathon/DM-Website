<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Meet The Overalls | Get Involved | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");

  $overalls = array(
    array(
      'name'                  =>  'Keith Shopa',
      'position'              =>  'Overall Director',
      'email'                 =>  'kshopa@floridadm.org',
      'previous_involvement'  =>  'Dancer, Two-year Morale Captain, Morale Overall',
      'major'                 =>  'Biology',
      'minor'                 =>  'Business Administration',
      'hometown'              =>  'Port Charlotte, FL',
      'outside_involvement'   =>  'Camp Kesem, Young Leaders Conference, Global Medical Training, Gators March for Babies, UFHealth Volunteer',
      'free_time'             =>  'I enjoy spending time with my family and friends, watching movies, exercising, playing guitar and listening to &#39;N Sync (the greatest band ever).',
      'fun_fact'              =>  'I live on a farm, with just about every critter you can think of!',
      'favorite_memory'       =>  '<p>Performing the 2014 line-dance at 4:30am in a conjoined-siamese-twin-outfit with another fellow Morale captain that caused a sea of dancers to laugh and smile at a time where their spirits were growing tired.</p>',
      'motivation'            =>  '<p>It&#39;s not often that an individual can put forth an effort to make a difference and actually see that change take place and benefit the lives of others. With Dance Marathon though they can. When I signed up to be a dancer my freshmen year I had no idea how incredible of an experience it would be or that I was embarking on a journey with Dance Marathon and Children&#39;s Miracle Network that would define the man I would grow to be. With every miracle story I heard, or line-dance I danced for those 26.2 hours I soon learned that I wanted to help the culture that is Dance Marathon grow from that point on.</p><p>I&#39;ve said it before and I&#39;ll say it again, if I could major in Dance Marathon and minor in Morale I&#39;d graduate next year with a 4.0 without a doubt. Not a day goes by where I don&#39;t think about the event and the difference it makes for the kids. I&#39;m so honored to be able to use my experiences as a dancer and a Morale captain and be able to reflect the spirit and passion of DM through this position. While I may not know exactly how I fell head-over-heels in love with this philanthropy, I do know that I&#39;m truly thankful I did.</p>',
      'image'                 =>  'Keith'
    ),
    array(
      'name'                  =>  'Mackenzie LaPorte',
      'position'              =>  'External Communication Overall',
      'email'                 =>  'mlaporte@floridadm.org',
      'previous_involvement'  =>  'Morale Staff, Marketing Captain, Marketing Overall',
      'major'                 =>  'Marketing',
      'minor'                 =>  '',
      'hometown'              =>  'Ponte Vedra Beach, FL',
      'outside_involvement'   =>  'Panhellenic Council, Ad Society, American Marketing Association',
      'free_time'             =>  'I like to spend time with my friends exploring Gainesville, travel anywhere I can and listening to music!',
      'fun_fact'              =>  'Fruity pebbles are my all-time-favorite cereal',
      'favorite_memory'       =>  '<p>My favorite DM memory would definitely be meeting Kaedyn and his family with the rest of the marketing team!</p>',
      'motivation'            =>  '<p>I didn&#39;t know much about Dance Marathon as a freshman and applied to be a part of the morale staff to try to get involved. The second I stepped inside the O&#39;dome for DM 2013, I fell in love with the cause. There was an electric feeling in the air, and seeing how special this event was for the miracle children was incredible. After that I decided I wanted to help this cause in any way I could, and I am so honored to be a part of the 2015 Overall Team!</p>',
      'image'                 =>  'Mackenzie'
    ),
    array(
      'name'                  =>  'Jenna Baxter',
      'position'              =>  'Internal Communication Overall',
      'email'                 =>  'jbaxter@floridadm.org',
      'previous_involvement'  =>  'Marketing Captain, Recruitment Captain, Recruitment Overall',
      'major'                 =>  'Management',
      'minor'                 =>  '',
      'hometown'              =>  'Wellington, TL',
      'outside_involvement'   =>  'Panhellenic Council',
      'free_time'             =>  'I like to exercise, cook food and travel',
      'fun_fact'              =>  'I pole vaulted in high school.',
      'favorite_memory'       =>  '<p>My favorite Dance Marathon memory is this year when the Recruitment Team planned Nate, our miracle child, a birthday party. The theme was based off his favorite show, Phineas and Ferb. When Nate and his family walked through the door, it was the most amazing feeling. Nate and his sisters has so much fun and the whole family was so appreciative. The smile on their faces will forever motivate and remind me why I do Dance Marathon.</p>',
      'motivation'            =>  '<p>As a captain my freshman year, I didn&#39;t know what to expect for my first Dance Marathon. Walking into the O&#39;Connell Center, I realized how this event was bigger than myself. The event allowed students to be apart of something so amazing and life-changing to the ones standing for 26.2 hours, but also the Miracle Families at Children&#39;s Miracle Network. I knew I was going to be apart of Dance Marathon throughout my college years and after.</p>',
      'image'                 =>  'Jenna'
    ),
    array(
      'name'                  =>  'Garrett Robertson',
      'position'              =>  'Finance Overall',
      'email'                 =>  'grobertson@floridadm.org',
      'previous_involvement'  =>  'Finance Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Leland Van Alstyne',
      'position'              =>  'Multimedia Overall',
      'email'                 =>  'lvanalstyne@floridadm.org',
      'previous_involvement'  =>  'Art & Layout Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Matthew Weider',
      'position'              =>  'Community Events Overall',
      'email'                 =>  'mweider@floridadm.org',
      'previous_involvement'  =>  'Community Events Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Jenna Glick',
      'position'              =>  'Dancer Relations Overall',
      'email'                 =>  'jglick@floridadm.org',
      'previous_involvement'  =>  'Dancer Relations Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Annaleigh Bonds',
      'position'              =>  'Entertainment Overall',
      'email'                 =>  'abonds@floridadm.org',
      'previous_involvement'  =>  'Entertainment Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Allison Buenaga',
      'position'              =>  'Family Relations Overall',
      'email'                 =>  'abuenaga@floridadm.org',
      'previous_involvement'  =>  'Family Relations Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Alexa Podolsky',
      'position'              =>  'Hospitality Overall',
      'email'                 =>  'apodolsky@floridadm.org',
      'previous_involvement'  =>  'Hospitality Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Drew Carlton',
      'position'              =>  'Marathon Relations Overall ',
      'email'                 =>  'dcarlton@floridadm.org',
      'previous_involvement'  =>  'Marathon Relations Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Allison Stroop',
      'position'              =>  'Merchandise Overall',
      'email'                 =>  'astroop@floridadm.org',
      'previous_involvement'  =>  'Public Relations Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Torrie Scianna',
      'position'              =>  'Sponsorhip Overall',
      'email'                 =>  'tscianna@floridadm.org',
      'previous_involvement'  =>  'Marketing Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Arielle Darvin',
      'position'              =>  'Morale Overall ',
      'email'                 =>  'adarvin@floridadm.org',
      'previous_involvement'  =>  'Morale Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Brad Wheeler',
      'position'              =>  'Operations Overall',
      'email'                 =>  'bwheeler@floridadm.org',
      'previous_involvement'  =>  'Dancer, Two-year Operations Captain',
      'major'                 =>  'Mechanical Engineering',
      'minor'                 =>  '',
      'hometown'              =>  'Tallahassee, FL',
      'outside_involvement'   =>  'Member of Theta Chi Fraternity, Previous Chairman of Student Government Productions',
      'free_time'             =>  'I coach youth travel lacrosse in my free time. I also enjoy woodworking, gardening, and hunting.',
      'fun_fact'              =>  'I am a proud owner of a hedgehog named Spud.',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p>What motivates me is seeing how much Dance Marathon and Children&#39;s Miracle Network does for the Miracle Children and their families by supplying them with not only the best doctors, but with smiles on their faces and beds to sleep on at night.</p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Armani Abreu',
      'position'              =>  'Public Relations Overall',
      'email'                 =>  'aabreu@floridadm.org',
      'previous_involvement'  =>  'Public Relations Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Grace Caswell',
      'position'              =>  'Recruitment Overall',
      'email'                 =>  'gcaswell@floridadm.org',
      'previous_involvement'  =>  'Recruitment Captain',
      'major'                 =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Replacement'
    ),
    array(
      'name'                  =>  'Kevin Kimbrough',
      'position'              =>  'Creative Development Overall',
      'email'                 =>  'kkimbrough@floridadm.org',
      'previous_involvement'  =>  'Technology Captain',
      'major'                 =>  'Computer Science',
      'minor'                 =>  'Business Administration',
      'hometown'              =>  'Clearwater Beach, FL',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '<p></p>',
      'motivation'            =>  '<p></p>',
      'image'                 =>  'Kevin'
    )
  );
?>

<div class="page-heading parallax meet-the-overalls">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Meet The Overalls</h1>
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
<!--            <li><a href="http://floridadm.kintera.org/faf/home/waiver.asp?ievent=1114670&lis=1&kntae1114670=49B319BD1C5D464982B0286ECCA2EBEB" target="_blank">Register to Fundraise</a></li>-->
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a href="/captain-teams" >Captain Teams</a></li>
						<li><a class="active">Meet the Overalls</a></li>
            <li><a href="/overall-applications">Overall Applications</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <?php
        for($i = 0; $i < count($overalls); $i++) {
          if($i % 3 == 0) {
            echo '<div class="row">';
          } ?>
          <div class="col-sm-4">
            <a href="#" style="display: block;" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
              <img class="img-circle img-thumbnail" src="<?php echo ('/assets/images/overalls/'.$overalls[$i]['image']); ?>.jpg" alt="..."><br>
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
                  <h4>Previous DM Involvement</h4>
                  <p><?php echo $overalls[$i]['previous_involvement']; ?></p>
                  <h4>Major</h4>
                  <p><?php echo $overalls[$i]['major']; ?></p>
                  <?php if($overalls[$i]['minor'] !== ""){ ?>
                  <h4>Minor</h4>
                  <p><?php echo $overalls[$i]['minor']; ?></p>
                  <?php } ?>
                  <h4>Hometown</h4>
                  <p><?php echo $overalls[$i]['hometown']; ?></p>
                  <h4>Outside Involvement</h4>
                  <p><?php echo $overalls[$i]['outside_involvement']; ?></p>
                  <h4>In My Free Time...</h4>
                  <p><?php echo $overalls[$i]['free_time']; ?></p>
                  <h4>Fun Fact</h4>
                  <p><?php echo $overalls[$i]['fun_fact']; ?></p>
                  <h4>Favorite Memory</h4>
                  <?php echo $overalls[$i]['favorite_memory']; ?>
                  <h4>What Motivates You?</h4>
                  <?php echo $overalls[$i]['motivation']; ?>
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
