<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Alumni | Dance Marathon at UF';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
	$overalls = array(
		array(
			'name'                  =>  'Kelsey Torgerson',
			'current_city'          =>  'New York City - Manhattan',
			'previous_involvement'  =>  'DM Dancer 2012</br>Community Events Captain 2012-2015</br>Family Relations Captain 2015-2017</br>Assistant Director of Family Events 2017</br>Jen Krug 2017</br>Miracle Network Distinguished Leadership Award 2017</br>DMA Member 2017-2019</p>',
			'fun_fact'				=>  'I want to get an orange corgi and name her Cheddar.',
			'favorite_memory'       =>  'At the FTKickball Tournament, Zander got hit in the face with the kickball and started to cry. His dad rushed over to him, but Zander asked for me to come comfort him. I wiped away his tears and told him that he was strong and tough. He went along playing all evening, and at the end of the event, because of how I interacted with their son, the Wyants asked me to become Zander\'s godmother. It is the best job in the world to love on my sweet Z baby!</p>',
			'continued'             =>  'Living on Manhattan, I got connected to The Stand, New York City\'s Dance Marathon Program for young adults. I immediately joined the organization as the Family and Hospital Relations Director and fell in love with our Miracle Children at Cohen\'s Medical Center on Long Island. We fundraised over $80,000 in two years and were able to purchase incubator giraffe beds for the NICU. And now, I am happy to serve on the DMA Board for two years, giving back to the organization that gave me my world today.',
			'image'                 =>  'KelseyT'
		),
		array(
			'name'                  =>  'Mary Hanvey',
			'current_city'          =>  'Boston, Massachusetts ',
			'previous_involvement'  =>  'I was a 4 year dancer and a creative development captain for a year. </p>',
			'fun_fact'              =>  'Even though I was a 4 year dancer, I think my dancing abilities actually got worse each year. ',
			'favorite_memory'       =>  'There are so many amazing Dance Marathon memories, but I think my favorite is my first year as a dancer, I remember the reveal at the end of DM and realizing we raised over a million dollars! It was in that moment that it hit me just how important and amazing Dance Marathon really was and I fell in love with the cause. </p>',
			'continued'             =>  'First and foremost, I’ve carried on Dance Marathon by joining the DMA to stay involved even from a thousand miles away! Also, I have continued to fundraise and to support my previous captain team members and organization’s dancers. In Boston, I enjoy talking about DM to those unfamiliar with the cause and wanting to learn more. Lastly, being a part of Dance Marathon at UF taught me so much about hard work, passion, and dedication and I try to incorporate those values into my life everyday. I love coming back every year for this great event and look forward to seeing what this year holds for DM! FTK always!',
			'image'                 =>  'MaryH'
		),
		array(
			'name'                  =>  'Maria Mandese',
			'current_city'          =>  'Orlando, Florida',
			'previous_involvement'  =>  '2013: Dancer</br>2014: Morale Captain</br>2015: Morale Captain + Line dance Team</br>2016: Morale Captain</br>2016-2019: DMA Member</p>',
			'fun_fact'              =>  'When I was in middle school, my grandparents sent me to Space Camp at Kennedy Space Center! I also don’t know how to whistle!',
			'favorite_memory'       =>  'WOW, so many incredible memories to choose from! I would have to say one being when I had the amazing privilege and honor to receive the Jen Krug Award my senior year. As it was announced, I felt my fellow morale captains and best friends surround me, hugging and holding me (since I literally almost fell to the ground). What a truly special and unforgettable moment as I walked to receive the award hugging some of the miracle children and their families along the way who have touched my life forever. This moment still brings tears to my eyes because I know that DM has made me who I am today, it has given me so much joy, hope and love. This award meant everything to me; it was for these miracle children who I will continue to fight for every day, for the millions of dollars raised, and for the passion I will always have for this amazing cause. ALSO can\'t forget, getting to dress up in crazy costumes while doing the line dance are some of my favorite memories as well. :)</p>',
			'continued'             =>  '"Dance Marathon led me to my career as a Certified Child Life Specialist, where I help children and families cope with the psychosocial stressors and challenges of a child’s hospitalization. I continue to use my passion for Dance Marathon every day as a Child Life Specialist working at a Children’s Miracle Network hospital, Arnold Palmer Hospital for Children in Orlando, Florida (full circle right!?). I owe so much to Dance Marathon and have been back to Dance Marathon for the past 3 years since graduating. I will continue to go back every year and continue to fight, raise money and dance for these kiddos who deserve a chance to be a kid and have a future!',
			'image'                 =>  'MaryM'
		),
		array(
			'name'                  =>  'Joelle Waksman',
			'current_city'          =>  'Atlanta, GA',
			'previous_involvement'  =>  '2010: Dancer</br>2011: Morale Staff</br>2012: Morale Captain</br>2013: Morale Captain + Linedance Team</br>2014: Morale Overall</br>2014-2018: DMA Member </p>',
			'fun_fact'              =>  'My first job was a "motivational dancer" at bar/bat mitzvahs (and the occasional quinceañera) for Pure Energy Entertainment.',
			'favorite_memory'       =>  'I cannot even begin to try and pick one, at this exact moment the first one that came to mind was when we came up with the closing song for the linedance in 2013. We closed our eyes and listened to it and pictured those moments and I totally broke down, chills, crying, screaming. It was the best.</p>',
			'continued'             =>  'Every year except for one, I have been back to DM at UF! It has been the absolute best to a part of the DMA whatever that has turned out to look like year after year. As I become more and more "irrelevant" to the current students involved, I feel even more connected to where this program has come from and where it is growing to. FTK!',
			'image'                 =>  'joelle'
		),
		array(
			'name'                  =>  'Taylor Chambers',
			'current_city'          =>  'Gainesville, FL',
			'previous_involvement'  =>  '2012: Staff (FTKrew)</br>2013: Dancer Relations Captain</br>2014: Dancer Relations Overall</br>2015: Overall Director</p>',
			'fun_fact'              =>  'I was a competitive gymnast for 10 years',
			'favorite_memory'       =>  'After a long and stressful day of exams DM had an ice cream hospitality night scheduled. I was exhausted but decided to stop in and grab a scoop before heading home. I ended up spending an hour with our Captain Teams Miracle Family, the Pences, laughing and making ridiculous videos. It completely washed away the stress of the day and has always stood out to me as one of the best nights where my eyes were opened to the magic of DM and what a special organization it is.</p>',
			'continued'             =>  'Continuing to live in Gainesville and working for UF Health has given me the unique opportunity to maintain ties with our Miracle Families and DM at UF. I continue to support local events and work build relationships with the students each year. Whether it is simply writing an encouraging email or getting coffee, I like to be available and give any resources I can to continue to grow the cause we all know and love.',
			'image'                 =>  'chambers'
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

				 // 2018
				 if (!($(entry)[1].gsx$year2018.$t.includes("n/a"))) {
						 if (this.gsx$year2018.$t.includes('2018')) {
								 $('.18-title').append('<h3 class="dma-year">' + this.gsx$year2018.$t + '</h3> <hr>');
						 } else {
								 $('.18').append('<p>' + this.gsx$year2018.$t + '</p>');
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
		  				<li><a href="/applications">Applications</a></li>
						<li><a class="active">Alumni</a></li>
						<li><a href="/ambassadors">Ambassadors</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/emerging-leaders">Emerging Leaders</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/kirstynskrew">Kirstyn's Krew</a></li>
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
						<!-- This should work -->
						<p>Our Dance Marathon at UF Alumni continue to support our cause and spread our movement, even after they graduate.  Join the DMA and stay FTK for years to come with exclusive alumni access at the event and the opportunity to continue your involvement beyond your years at UF. <a href=https://docs.google.com/forms/d/1BmlbhCSrQkvRyYE7S4go5uLMu-Q-xnTQSQHQXKc5VnE>Become a member or renew your membership today.</a></p>
						<p>Be sure to like the official page for <a href=https://www.facebook.com/FloridaDMAlumni?fref=ts>Dance Marathon at UF Alumni on Facebook</a> to stay connected with the rest of your Dance Marathon Alumni family.</p>

						<h3>About</h3>

<p>Since 1995, Dance Marathon at UF has raised over $18.2 million for UF Health Shands Children's Hospital, our local Children’s Miracle Network Hospital. Thanks to your dedication and support throughout your college years, we have become the most successful student-run philanthropy in the southeastern United States. This past year, the DMA contributed $54,925.83 to our final total, exhibiting their continued passion For The Kids.</p>
<p>Dance Marathon at UF knows that the Gator Nation is everywhere. Formed in 2013, the Dance Marathon Alumni group gives alumni across the country the opportunity to continue to give back and stay involved with their alma mater. Membership is only $35 per year and offers a variety of benefits.</p>

				      <h3>Benefits</h3>
				      <ul>
					  	<li>Preferred floor access at the Event</li>
					  	<li>Access to the Family Room at the Event</li>
					  	<li>Behind-the-scenes Hospital Tour during the Event weekend</li>
						<li>Opportunity to participate as an Alumni Dancer</li>
						<li>An official DMA shirt at the Event</li>
						<li>Receive fundraising incentives at the Event</li>
						<li>Miracle Meal on the Sunday of the Event</li>
						<li>Discounted ticket to the Miracle Gala</li>
						<li>Newsletters keeping you up-to-date on DM at UF and the DMA</li>
					  </ul>
					  <h3>Newsletter</h3>
				      <p>Each Captain Team sends monthly newsletters to their team’s Alumni, with information and updates on what’s happening with their team and the organization overall. If you would like to receive your team’s newsletter, please contact the current Overall Director of your respective former team.</p>
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

									<!-- 2018 -->
									<div class="dma-year 18-title"></div>
									<ul>
										<div class="18"></div>
									</ul>

								</div>
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
