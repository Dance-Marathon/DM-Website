<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Alumni | Dance Marathon at UF';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");
	$overalls = array(
		array(
			'name'                  =>  'Alexandra "Zandy" Hernandez',
			'email'                 =>  '',
            'current_city'          =>  'Atlanta, GA',
			'previous_involvement'  =>  '2015 Recruitment Captain, 2016 Recruitment Assistant Director, 2017 Outreach Overall Director, 2021 DMA Board Member, 2022 DMA President',
              'fun_fact'                =>  'I ate pizza for dinner for a week straight because I was dedicated to going to the various hospitality nights that week.',
			'favorite_memory'       =>  'I will never forget standing with my fellow Recruitment Captains during closing ceremonies of Dance Marathon at UF 2015.  When we realized we had raised over $2 million for the first time, we burst into tears and a huge group hug. I would not have wanted to share that moment with anyone else.',
			'continued'             =>  'My involvement in Dance Marathon shaped me both professionally and personally.  It left such a profound impact on my life that I love sharing with others whenever given the chance.  My time on the DMA Board has provided me with a more hands on opportunity to continue my involvement with DM and raise awareness for the cause.',
			'image'                 =>  'zandy'
		),
		array(
			'name'                  =>  'Arie Hariton',
            'email'                 =>  '',
			'current_city'          =>  'San Francisco, CA',
			'previous_involvement'  =>  '2017 Fundraising Captain, 2018 Fundraising Overall',
			'fun_fact'              =>  'I have been to all 7 continents.',
			'favorite_memory'       =>  'Raising the numbers for the first year DM raised over $3 million and seeing the joy and reactions from everyone.',
			'continued'             =>  'Participated in DMA events, kept up with Miracle Families through social media, and continued to donate to members of the Fundraising team!',
			'image'                 =>  'ari'
		),
		array(
              'name'                  =>  'Kelsey Johnson',
              'email'                 =>  '',
              'current_city'          =>  'Saint Augustine, FL',
              'previous_involvement'  =>  '2014 Dancer, 2015 Marketing Captain, 2016 Merchandise Captain, 2017 Merchandise Assistant Director',
              'fun_fact'              =>  'I have a habit of doing embarrassing things for donations. I once turned myself into a peanut butter & jelly sandwich, and have run the 5K dressed as an alien and in a banana costume!',
              'favorite_memory'       =>  'Performing in the DM Talent Show as Nick Mullen backup dancers as he sang Man in the Mirror by Michael Jackson, or embarrassing Mr. Scott Mullen year after year by winning fundraising challenges!',
              'continued'             =>  'I have continued to both fundraise and donate to Dance Marathon since I graduated from UF in 2017 and have had the opportunity to attend the event as an alumna. This past year I was also able to stay involved with the DMA miracle family, the Mullens, and consider their family as my extended family.',
			'image'                 =>  'kelsey'
		),
		array(
              'name'                  =>  'Jonathan Pereyra',
              'email'                 =>  '',
              'current_city'          =>  'Fort Lauderdale, FL',
              'previous_involvement'  =>  '2017 Creative Development Captain, 2018 Creative Development Overall',
              'fun_fact'              =>  'I bleached my hair for DM and my team called me Blondathon.',
              'favorite_memory'       =>  'Standing behind the Tech booth and being able to watch the event unfold from the best seat in the house.',
              'continued'             =>  'A little bit of Dance Marathon has been with me since graduation, whether it be continuing app development in my career, attending the event as an alumnus, or reaching out to the current members of Creative Development/Design & Technology and supporting them in whatever way I can.',
			'image'                 =>  'jonathan'
		),
		array(
              'name'                  =>  'Jesse Sands',
              'email'                 =>  '',
              'current_city'          =>  'Atlanta, GA',
              'previous_involvement'  =>  '2017 Finance Manager',
              'fun_fact'              =>  'I spent ages 6-12 living in the Netherlands.',
              'favorite_memory'       =>  'I had the opportunity to spend an hour at the top of the ODome during the event as an OT member.  Seeing the joy of the miracle families and the dancers really made me appreciate the opportunity to be there and all of the hard work of the folks involved to get us to that day.',
              'continued'             =>  'I have continued to stay involved through the DMA and still keep in touch with some of the miracle families I met at UF',
			'image'                 =>  'jesse'
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

<style>
.page-heading.parallax.alumni {
background-image: url("/assets/images/BannerPhotos21/Ben_G-5.jpg");
}
</style>

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
						<li><a href="/ambassadors">Ambassadors</a></li>
						<li><a href="/applications">Applications</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/emerging-leaders">Emerging Leaders</a></li>
						<li><a href="/kirstynskrew">Kirstyn's Krew</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a href="/service">Service</a></li>

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
          </ul>

          <!-- Tab panes -->

          <div class="tab-content">

            <div role="tabpanel" class="tab-pane fade in active" id="mini-marathon">

			
			<h3>About</h3>

<p>Since 1995, Dance Marathon at UF has raised over $28 million for UF Health Shands Children's Hospital, our local Children’s Miracle Network Hospital. Thanks to your dedication and support throughout your college years, we have become the most successful student-run philanthropy in the southeastern United States.</p>
<p>Dance Marathon at UF knows that the Gator Nation is everywhere. Formed in 2013, Dance Marathon at UF Alumni gives alumni across the country the opportunity to continue to give back and stay involved with their alma mater. Membership is only $40 per year and offers a variety of benefits.</p>

						<h3>Get Involved!</h3>
						<!-- This should work -->
						<p>Our Dance Marathon at UF Alumni continue to support our cause and spread our movement, even after they graduate.  Join the DMA and stay a member of DM at UF for years to come with exclusive alumni access at the event and the opportunity to continue your involvement beyond your years at UF. <br><a href=https://dmatuf.page.link/lifetime>Become a member today!</a></p>
						<p>Follow us on <a href=https://www.instagram.com/dmatufalumni>Instagram</a>, and be sure to like the official page for <a href=https://www.facebook.com/dmatufalumni>Dance Marathon at UF Alumni on Facebook</a> to stay connected with the rest of your DM at UF Alumni family.</p>


				      <h3>Lifetime DMA Membership</h3>
						<p>This lifetime membership provides the following benefits for a one-time fee of $40. If you are signing up for the DMA for the first time, you will receive a complimentary Event Package outlined underneath the membership benefits. Purchase the Lifetime DMA Miracle Membership <a href=https://dance-marathon-at-uf-510104.square.site/product/2022-dance-marathon-alumni-lifetime-membership/1?cs=true&cst=custom> here </a>. <p> </p>
                            
						<div></div>
					<!--	<p>Within the Lifetime DMA Membership, there are <b><u>two</u></b> membership options:</p>
						<div></div>
					  <h4><i style="color:#fff89f;"><b>(1) Miracle Membership</b></i></h4>
						<p>This <b>general membership</b> provides new DMA members with benefits outlined below, through a one-time fee of </b>$40</b>. The Miracle Membership, as it stands today, includes those registered members from the inception of the DMA (2015) to all current members (2021). This membership will automatically grandfather returning members, and new members to the DMA, into the Miracle Membership. </p>
						<p><b><i>Membership Benefits Include:</i></b></p>
							<ul>
								<li>Monthly E-Newsletter updates</li>
								<li>Preferred Access at the event to the DMA VIP room</li>
								<li>Opportunity to participate as a DMA Dancer* at the event</li>
								<li>Voting and leadership opportunities for the DMA Board</li>
								<li>Inclusion and invites to regionally hosted DMA events</li>
								<p><small>*DMA Dancer registration fees apply.</small></p>
							</ul>
					<h4><i style="color:#f3839c;"><b>(2) Legacy Membership</b></i></h4>
						<p>This <b>upgraded membership</b> unlocks all membership benefits, plus the bonus membership benefits outlined below, through an annual fee of <b>$40</b>. This membership is ideal for those who plan to attend Dance Marathon at UF in person and over multiple years. If this is your first year signing up for the DMA, your one-time fee of <b>$40</b> will grant you this exclusive Legacy Membership.</p> -->
						<p><b><i>Membership Benefits Include:</i></b></p>
							<ul>
								<li>Monthly E-Newsletter updates</li>
								<li>Preferred Access at the event to the DMA VIP room</li>
								<li>Opportunity to participate as a DMA Dancer* at the event</li>
								<li>Voting and leadership opportunities for the DMA Board</li>
								<li>Inclusion and invites to regionally hosted DMA events</li>
                                <li>First year members get a complimentary Event Package</li>
                                <p><small>*DMA Dancer registration fees apply.</small></p>
							</ul>
							<p><b style="color:#fff89f;">Event Package:</b></p>
							<ul>
                                <p>DMA members can purchase an exclusive event package to enhance their experience during the Dance Marathon weekend in spring. This package is ideal for those who plan to attend Dance Marathon at UF and can be purchased for $40 up to one month before the event. If this is your first year signing up for the DMA, you will automatically receive a complimentary Event Package included in your Lifetime Miracle Membership. Purchase the DMA Event Package <a href=https://dance-marathon-at-uf-510104.square.site/product/2022-dance-marathon-alumni-lifetime-membership/1?cs=true&cst=custom> here</a>.</p>
                                <p><b style="color:#fff89f;">The Event Package includes:</b></p>
								<li>Opportunity to participate in a behind-the-scenes hospital tour</li>
								<li>Opt-in to receive the DMA event t-shirt**</li>
								<li>Discounted Miracle Gala tickets</li>
								<li>Tickets to the DMA Brunch during the event</li>
								<li>Ability to receive fundraising incentives during the event</li>
								<li>Access to the Family Room at the event</li>
                                <p><small>*DMA event t-shirt opt-in includes a direct mailing option for those members unable to attend the  event.</small></p>
								<p><small>**Dependent on COVID-19 protocols and regulations.</small></p>
							</ul> <!--
					<h4><b><u><i>Please note:</i></u></b></h4>
					<p>1. As a <b style="color:#fff89f;">Miracle Member</b> of the DMA, you will have the benefit to maintain this status for life. You may elect to upgrade your membership to the new <b style="color:#f3839c;">Legacy Membership</b> as outlined below.</p>
					<p>2. Any returning member, whose current membership lapses, will automatically move into the <b style="color:#fff89f;">Miracle Membership</b> status. These members may upgrade to the new <b style="color:#f3839c;">Legacy Membership</b> at any time throughout the year, up until one month before Dance Marathon weekend. </p>
-->

					  <h4><b><u>FAQs</u></b></h4>
				      <p><b>Q: I have never been a part of the DMA before and just registered for the first time. What membership do I have? </b><br>
					  <b>A:</b> As a first-time DMA member, your <b>$40</b> fee makes you a Lifetime Miracle Member and provides you with a complimentary Event Package.The following year, you will have to pay $40 for the Event Package if you so choose.  </p>
					  <p><b>Q: What if I registered for the DMA in a previous year (2015-2021) and never renewed?</b><br>
					  <b>A:</b> You are already a Lifetime Miracle Member! Should you want an Event Package, you will have to purchase one for $40. The link to purchase is available <a href=https://dance-marathon-at-uf-510104.square.site/product/2022-dance-marathon-alumni-lifetime-membership/1?cs=true&cst=custom> here </a>.</p>
                          <p><b>Q: Can I purchase an Event Package throughout the year?</b> <br>
                          <b>A:</b> Yes! However, you can only purchase it up until one month before the event so we are able to accommodate for all of the additional benefits (i.e. t-shirt, brunch, etc.). This year the final day you can purchase the event package is February 28th.<br>
					  <div></div>
					  <p><b>If you have any questions, please feel free to email them to <a href="alumni@floridadm.org">alumni@floridadm.org</a>.</b></p>
          	</div>

          	<div role="tabpanel" class="tab-pane fade" id="schools">
							<?php

			        for($i = 0; $i < count($overalls); $i++) {
			          if($i % 3 == 0) {
			            echo '<div class="row">';
			          } ?>
			          <div class="col-sm-4">
			            <a href="#" style="display: block;" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
			              <img class="img-circle img-thumbnail" src="<?php echo ('/assets/images/DMA_Headshots21/'.$overalls[$i]['image']); ?>.jpg" alt="..."><br>
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
