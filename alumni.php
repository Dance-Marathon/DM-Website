<?php
	$status = "closed";
	$GLOBALS['page_title'] = 'Alumni | About | Florida Dance Marathon';
	$GLOBALS['parent'] = 'about';
	include("includes/head.php");
	include("includes/navbar.php");

  $overalls = array(
    array(
      'name'                  =>  'Matt Thalhamer',
      'previous_involvement'  =>  'I danced freshman year, Morale staff sophomore year, then Morale Captain Junior and Senior year.',
      'fun_fact'              =>  'I think every fact about me is fun BUT if I had to pick one, then I guess I’ll say that I’ve caught a pass from an NFL Pro Bowl MVP Quarterback',
      'favorite_memory'       =>  '<p>Impossible to pick one, unless I can say every single moment.  So here are some highlights:</br>
a.       Seeing the LINEDANCE for the first time as a freshman and knowing I wanted to be one of those people dancing on stage in crazy costumes
</br>b.      Being on the Morale stage in 2013 when they raised the numbers seeing we broke $1 million
</br>c.       Moralentines Day
</br>d.      Seeing people’s reaction each time we got to reveal the 2014 LINEDANCE to them for the first time
</br>e.      Every random moment in between with the goofiest, funniest, and most caring people I know (lego movie/boxtrolls & rafreaki, HSDMs, every Tuesday meeting, every social/jocial, post DM bonding, big/little, going out in a onesie, kickball/5k, starting a “taped down tarps” chant, when Kyle/Dave shaved his beard)
</br>f.        Okay I need to stop now cause I could go on forever.</p>',
      'continued'             =>  '<p>While working for an investment firm for a year, I was involved with DM through donations and an unbelievable amount of FOMO.  I went back to my job after attending DM 2015 knowing I needed to make a change in my career.  It just so happened that the Children’s Miracle Network Hospitals posted on Facebook about job openings less than a week later.  A spot was open for a Data Analyst.  After a few rounds of interviews, I was offered the position and accepted instantaneously.  I began working with CMNH in July and have never been happier.  It’s still a surreal feeling every day I come to work, and I love seeing and helping with all of the other avenues that CMNH fundraises in addition to Dance Marathons in pursuit of their One Billion Dollar goal. </p>',
      'image'                 =>  'MattT'
    ),
    array(
      'name'                  =>  'Joelle Waksman',
      'previous_involvement'  =>  'I was involved for 5 years! Dancer &#39;09 --> Morale Staff &#39;10 --> Morale Captain &#39;11 --> Morale Captain/Linedance Team &#39;12--> Morale Overall &#39;13. ',
      'fun_fact'              =>  'I once got a concussion because of a dinosaur fight. Also, I had a weave. Also, I&#39;m half Cuban! ',
      'favorite_memory'       =>  '<p>Literally every single moment of the 5 years I was involved, impossible to pick but here are some highlights:
</br>- Dancing on the Field. In 2013, the Overall Team was able to learn, practice and perform a dance with the Pride of the Sunshine, University of Florida&#39;s Gator Marching Band during a halftime show! It was amazing.
</br>- Counting coins in DX. Throughout the year when I was Morale Overall, I passed around an old pickle jar each meeting to collect any spare change morale captains had with the intension of counting it and donating it to our team at the end of the year. When it came time to do just that, a couple of my captains (Matt Thalhamer, and Kyle Carr) and I spent the entire morning driving around to different banks in Gainesville to try and get them to count it for us. When no one could, we ended up sitting on the floor of Delta Chi, Room 12-13 and counting them ourselves. We raised at least $100 if not more.
</br>- The Final Morale Meeting at Dance Marathon 2014. Impossible to put into words the energy, and love and commitment flowing around in that 20 minute meeting, but trust me it was unbeatable.
</br>- Oh, and also all of the line dance reveals. Whether I was a dancer, or I was the overall showing it to my team of captains for the first time with the line dance team, THE BEST FEELING IN THE WORLD.
</br>- Oh, and of course all of the total reveals - hello. Okay, I&#39;m done.</p></p>',
      'continued'             =>  'I live in New York City now, which is not Gainesville, but it&#39;s still pretty good. The minute I landed on this island I got involved with some other DM Alum, with New York City&#39;s own City-Wide Dance Marathon for young adults, called The Stand! It just happened in October and it was great. I was on the Morale Committee and actually was a part of a team of 2 who created the linedance, which was a huge success! I plan on getting even more involved next year!! FTK!',
      'image'                 =>  'JoelleW'
    )
  );
?>

<div class="page-heading parallax dmaa">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Alumni Spotlight</h1>
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
            <li><a href="/uf-health">CMN & UF Health</a></li>
            <li><a href="/our-story">Our Story</a></li>
            <li><a href="/dmaa">DMAA</a></li>
            <li><a class="active">Alumni</a></li>
            <li><a href="/faq">FAQ</a></li>
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
