<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Alumni | Dance Marathon at UF';
	$GLOBALS['parent'] = 'get-involved';
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

<!--Alumni Member Script-->
<script>
 // ID of the Google Spreadsheet
 var spreadsheetID = "1X_SEiR2-WT8ojUrxxI0OHwPKD2V3WFcFyDMQR13pvrg";

 // Make sure it is public or set to Anyone with link can view
 var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

 $.getJSON(url, function(data) {

		 var entry = data.feed.entry;

		 $(entry).each(function() {

				 // 1995
				 if (!($(entry)[1].gsx$year1995.$t.includes("n/a"))) {
						 if (this.gsx$year1995.$t.includes('1995')) {
								 $('.95-title').append('<h3 class="dma-year">' + this.gsx$year1995.$t + '</h3> <hr>');
						 } else {
								 $('.95').append('<p>' + this.gsx$year1995.$t + '</p>');
						 }
				 }


				 // 1996

				 if (!($(entry)[1].gsx$year1996.$t.includes("n/a"))) {
						 if (this.gsx$year1996.$t.includes('1996')) {
								 $('.96-title').append('<h3 class="dma-year">' + this.gsx$year1996.$t + '</h3> <hr>');
						 } else {
								 $('.96').append('<p>' + this.gsx$year1996.$t + '</p>');
						 }
				 }

				 // 1997
				 if (!($(entry)[1].gsx$year1997.$t.includes("n/a"))) {

						 if (this.gsx$year1997.$t.includes('1997')) {
								 $('.97-title').append('<h3 class="dma-year">' + this.gsx$year1997.$t + '</h3> <hr>');
						 } else {
								 $('.97').append('<p>' + this.gsx$year1997.$t + '</p>');
						 }
				 }

				 // 1998
				 if (!($(entry)[1].gsx$year1998.$t.includes("n/a"))) {
						 if (this.gsx$year1998.$t.includes('1998')) {
								 $('.98-title').append('<h3 class="dma-year">' + this.gsx$year1998.$t + '</h3> <hr>');
						 } else {
								 $('.98').append('<p>' + this.gsx$year1998.$t + '</p>');
						 }
				 }

				 // 1999
				 if (!($(entry)[1].gsx$year1999.$t.includes("n/a"))) {
						 if (this.gsx$year1999.$t.includes('1999')) {
								 $('.99-title').append('<h3 class="dma-year">' + this.gsx$year1999.$t + '</h3> <hr>');
						 } else {
								 $('.99').append('<p>' + this.gsx$year1999.$t + '</p>');
						 }
				 }
				 // 2000
				 if (!($(entry)[1].gsx$year2000.$t.includes("n/a"))) {
						 if (this.gsx$year2000.$t.includes('2000')) {
								 $('.00-title').append('<h3 class="dma-year">' + this.gsx$year2000.$t + '</h3> <hr>');
						 } else {
								 $('.00').append('<p>' + this.gsx$year2000.$t + '</p>');
						 }
				 }
				 // 2001
				 if (!($(entry)[1].gsx$year2001.$t.includes("n/a"))) {
						 if (this.gsx$year2001.$t.includes('2001')) {
								 $('.01-title').append('<h3 class="dma-year">' + this.gsx$year2001.$t + '</h3> <hr>');
						 } else {
								 $('.01').append('<p>' + this.gsx$year2001.$t + '</p>');
						 }
				 }

				 //2002
				 if (!($(entry)[1].gsx$year2002.$t.includes("n/a"))) {
						 if (this.gsx$year2002.$t.includes('2002')) {
								 $('.02-title').append('<h3 class="dma-year">' + this.gsx$year2002.$t + '</h3> <hr>');
						 } else {
								 $('.02').append('<p>' + this.gsx$year2002.$t + '</p>');
						 }
				 }
				 // 2003
				 if (!($(entry)[1].gsx$year2003.$t.includes("n/a"))) {
						 if (this.gsx$year2003.$t.includes('2003')) {
								 $('.03-title').append('<h3 class="dma-year">' + this.gsx$year2003.$t + '</h3> <hr>');
						 } else {
								 $('.03').append('<p>' + this.gsx$year2003.$t + '</p>');
						 }
				 }
				 // 2004
				 if (!($(entry)[1].gsx$year2004.$t.includes("n/a"))) {
						 if (this.gsx$year2004.$t.includes('2004')) {
								 $('.04-title').append('<h3 class="dma-year">' + this.gsx$year2004.$t + '</h3> <hr>');
						 } else {
								 $('.04').append('<p>' + this.gsx$year2004.$t + '</p>');
						 }
				 }
				 // 2005
				 if (!($(entry)[1].gsx$year2005.$t.includes("n/a"))) {
						 if (this.gsx$year2005.$t.includes('2005')) {
								 $('.05-title').append('<h3 class="dma-year">' + this.gsx$year2005.$t + '</h3> <hr>');
						 } else {
								 $('.05').append('<p>' + this.gsx$year2005.$t + '</p>');
						 }
				 }
				 // 2006
				 if (!($(entry)[1].gsx$year2006.$t.includes("n/a"))) {
						 if (this.gsx$year2006.$t.includes('2006')) {
								 $('.06-title').append('<h3 class="dma-year">' + this.gsx$year2006.$t + '</h3> <hr>');
						 } else {
								 $('.06').append('<p>' + this.gsx$year2006.$t + '</p>');
						 }
				 }
				 // 2007
				 if (!($(entry)[1].gsx$year2007.$t.includes("n/a"))) {
						 if (this.gsx$year2007.$t.includes('2007')) {
								 $('.07-title').append('<h3 class="dma-year">' + this.gsx$year2007.$t + '</h3> <hr>');
						 } else {
								 $('.07').append('<p>' + this.gsx$year2007.$t + '</p>');
						 }
				 }
				 // 2008
				 if (!($(entry)[1].gsx$year2008.$t.includes("n/a"))) {
						 if (this.gsx$year2008.$t.includes('2008')) {
								 $('.08-title').append('<h3 class="dma-year">' + this.gsx$year2008.$t + '</h3> <hr>');
						 } else {
								 $('.08').append('<p>' + this.gsx$year2008.$t + '</p>');
						 }
				 }
				 // 2009
				 if (!($(entry)[1].gsx$year2009.$t.includes("n/a"))) {
						 if (this.gsx$year2009.$t.includes('2009')) {
								 $('.09-title').append('<h3 class="dma-year">' + this.gsx$year2009.$t + '</h3> <hr>');
						 } else {
								 $('.09').append('<p>' + this.gsx$year2009.$t + '</p>');
						 }
				 }

				 // 2010
				 if (!($(entry)[1].gsx$year2010.$t.includes("n/a"))) {
						 if (this.gsx$year2010.$t.includes('2010')) {
								 $('.10-title').append('<h3 class="dma-year">' + this.gsx$year2010.$t + '</h3> <hr>');
						 } else {
								 $('.10').append('<p>' + this.gsx$year2010.$t + '</p>');
						 }
				 }

				 // 2011
				 if (!($(entry)[1].gsx$year2011.$t.includes("n/a"))) {
						 if (this.gsx$year2011.$t.includes('2011')) {
								 $('.11-title').append('<h3 class="dma-year">' + this.gsx$year2011.$t + '</h3> <hr>');
						 } else {
								 $('.11').append('<p>' + this.gsx$year2011.$t + '</p>');
						 }
				 }
				 // 2012
				 if (!($(entry)[1].gsx$year2012.$t.includes("n/a"))) {
						 if (this.gsx$year2012.$t.includes('2012')) {
								 $('.12-title').append('<h3 class="dma-year">' + this.gsx$year2012.$t + '</h3> <hr>');
						 } else {
								 $('.12').append('<p>' + this.gsx$year2012.$t + '</p>');
						 }
				 }
				 // 2013
				 if (!($(entry)[1].gsx$year2013.$t.includes("n/a"))) {
						 if (this.gsx$year2013.$t.includes('2013')) {
								 $('.13-title').append('<h3 class="dma-year">' + this.gsx$year2013.$t + '</h3> <hr>');
						 } else {
								 $('.13').append('<p>' + this.gsx$year2013.$t + '</p>');
						 }

				 }
				 // 2014
				 if (!($(entry)[1].gsx$year2014.$t.includes("n/a"))) {
						 if (this.gsx$year2014.$t.includes('2014')) {
								 $('.14-title').append('<h3 class="dma-year">' + this.gsx$year2014.$t + '</h3> <hr>');
						 } else {
								 $('.14').append('<p>' + this.gsx$year2014.$t + '</p>');
						 }
				 }
				 // 2015
				 if (!($(entry)[1].gsx$year2015.$t.includes("n/a"))) {
						 if (this.gsx$year2015.$t.includes('2015')) {
								 $('.15-title').append('<h3 class="dma-year">' + this.gsx$year2015.$t + '</h3> <hr>');
						 } else {
								 $('.15').append('<p>' + this.gsx$year2015.$t + '</p>');
						 }
				 }

				 // 2016
				 if (!($(entry)[1].gsx$year2016.$t.includes("n/a"))) {
						 if (this.gsx$year2016.$t.includes('2016')) {
								 $('.16-title').append('<h3 class="dma-year">' + this.gsx$year2016.$t + '</h3> <hr>');
						 } else {
								 $('.16').append('<p>' + this.gsx$year2016.$t + '</p>');
						 }
				 }

				 // 2017
				 if (!($(entry)[1].gsx$year2017.$t.includes("n/a"))) {
						 if (this.gsx$year2017.$t.includes('2017')) {
								 $('.17-title').append('<h3 class="dma-year">' + this.gsx$year2017.$t + '</h3> <hr>');
						 } else {
								 $('.17').append('<p>' + this.gsx$year2017.$t + '</p>');
						 }
				 }
		 });
 });
</script>



<div class="page-heading parallax alumni">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Alumni</h1>
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
						<li><a class="active">Alumni</a></li>
						<li><a href="/applications">Applications</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/emerging-leaders">Emerging Leaders</a></li>
						<li><a href="/ftkrew">FTKrew</a></li>
						<li><a href="/organizations">Organizations</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <div role="tabpanel">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#mini-marathon" aria-controls="mini-marathon" role="tab" data-toggle="tab">About DM Alumni</a></li>
            <li role="presentation"><a href="#schools" aria-controls="schools" role="tab" data-toggle="tab">Meet The DMA Board</a></li>
            <li role="presentation"><a href="#whatsmyzone" aria-controls="whatsmyzone" role="tab" data-toggle="tab">DM Alumni Members</a></li>
          </ul>

          <!-- Tab panes -->

          <div class="tab-content">

            <div role="tabpanel" class="tab-pane fade in active" id="mini-marathon">
							<h3>Get Involved</h3>
				      <p>Your commitment to a worthy cause doesn't have to end after you graduate. Join DMA and stay FTK for years to come. <a href="https://docs.google.com/forms/d/e/1FAIpQLSfM9yfKlItJr_P2qRLSjsZhKNoDzs5zzrk751nDSFNwR1gnFQ/viewform?usp=sf_link">Become a member or renew your membership today.</a></p>
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
          	</div>

          	<div role="tabpanel" class="tab-pane fade" id="schools">
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
          		</div>
						</div>

          	<div role="tabpanel" class="tab-pane fade" id="whatsmyzone">
							<div class="dma-members">
								<div class="members-list text-left">
									<div class="container-fluid">

									<!-- 1995 -->
									<div class="dma-year 95-title"></div>
									<ul>
										<div class="95"></div>
									</ul>

									<!-- 1996 -->
									<div class="dma-year 96-title"></div>
									<ul>
										<div class="96"></div>
									</ul>

									<!-- 1997 -->
									<div class="dma-year 97-title"></div>
									<ul>
										<div class="97"></div>
									</ul>

									<!-- 1998 -->
									<div class="dma-year 98-title"></div>
									<ul>
										<div class="98"></div>
									</ul>

									<!-- 1999 -->
									<div class="dma-year 99-title"></div>
									<ul>
										<div class="99"></div>
									</ul>

									<!-- 2000 -->
									<div class="dma-year 00-title"></div>
									<ul>
										<div class="00"></div>
									</ul>

									<!-- 2001 -->
									<div class="dma-year 01-title"></div>
									<ul>
										<div class="01"></div>
									</ul>


									<!-- 2002 -->
									<div class="dma-year 02-title"></div>
									<ul>
										<div class="02"></div>
									</ul>

									<!-- 2003 -->
									<div class="dma-year 03-title"></div>
									<ul>
										<div class="03"></div>
									</ul>


									<!-- 2004-->
									<div class="dma-year 04-title"></div>
									<ul>
										<div class="04"></div>
									</ul>

									<!-- 2005 -->
									<div class="dma-year 05-title"></div>
									<ul>
										<div class="05"></div>
									</ul>

									<!-- 2006-->
									<div class="dma-year 06-title"></div>
									<ul>
										<div class="06"></div>
									</ul>


									<!-- 2007 -->
									<div class="dma-year 07-title"></div>
									<ul>
										<div class="07"></div>
									</ul>

									<!-- 2008 -->
									<div class="dma-year 08-title"></div>
									<ul>
										<div class="08"></div>
									</ul>

									<!-- 2009 -->
									<div class="dma-year 09-title"></div>
									<ul>
										<div class="09"></div>
									</ul>

									<!-- 2010 -->
									<div class="dma-year 10-title"></div>
									<ul>
										<div class="10"></div>
									</ul>

									<!-- 2011 -->
									<div class="dma-year 11-title"></div>
									<ul>
										<div class="11"></div>
									</ul>


									<!-- 2012 -->
									<div class="dma-year 12-title"></div>
									<ul>
										<div class="12"></div>
									</ul>

									<!-- 2013 -->
									<div class="dma-year 13-title"></div>
									<ul>
										<div class="13"></div>
									</ul>

									<!-- 2014 -->
									<div class="dma-year 14-title"></div>
									<ul>
										<div class="14"></div>
									</ul>

									<!-- 2015 -->
									<div class="dma-year 15-title"></div>
									<ul>
										<div class="15"></div>
									</ul>

									<!-- 2016 -->
									<div class="dma-year 16-title"></div>
									<ul>
										<div class="16"></div>
									</ul>

									<!-- 2017 -->
									<div class="dma-year 17-title"></div>
									<ul>
										<div class="17"></div>
									</ul>
								</div>
							</div>
						</div>

        	</div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
