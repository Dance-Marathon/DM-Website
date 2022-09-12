<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<<<<<<< Updated upstream
<style>
.page-heading.parallax.events {
background-image: url("/assets/images/BannerPhotos21/Gracie C13.jpg");
=======
<script>
	function openCity(evt, cityName) {
		// Declare all variables
		var i, tabcontent, tablinks;
	  
		// Get all elements with class="tabcontent" and hide them
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
		  tabcontent[i].style.display = "none";
		}
	  
		// Get all elements with class="tablinks" and remove the class "active"
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
		  tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
	  
		// Show the current tab, and add an "active" class to the button that opened the tab
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}
function openSubTab(evt, storySub) {
    // Declare all variables
    var i, tabcontentSub, tablinksSub;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontentSub = document.getElementsByClassName("tabcontent-subtab");
    for (i = 0; i < tabcontentSub.length; i++) {
      tabcontentSub[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinksSub = document.getElementsByClassName("tablinks-subtab");
    for (i = 0; i < tablinksSub.length; i++) {
      tablinksSub[i].className = tablinksSub[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab

    document.getElementById(storySub).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<style>
	.page-heading.parallax.events {
		background-image: url("/assets/images/BannerPhotos21/events (1).jpg");
	}
	.tab {
		overflow: hidden;
		display: flex;
		flex-direction: row;
		width: 100%;
		justify-content: space-evenly;
		margin-bottom: 2%;
	}
	/* Style the buttons that are used to open the tab content */
	.tab button {
		background-color: #C4C4C4;
		color: white;
		font-weight: 700;
		width: 200px;
		height: 50px;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 2px 17px;
		transition: 0.2s;
	}

	/* Change background color of buttons on hover */
	.tab button:hover {
		background-color: #ddd;
	}
	/* Create an active/current tablink class */
	.tab button.active {
		background-color: #4070A2;
		margin-bottom: 0%;
	}
	/* Style the tab content */
	.tabcontent {
		display: none;
		padding: 0px 12px;
		margin-bottom: 3%;
		width: 80%;
		margin-left: 10%;
	}
.tabcontent-subtab {
    display: none;
    width: 70%;
    margin-left: 15%;
    margin-top: 3%;
}
.subtab {
    overflow: hidden;
    border-bottom: 2px solid black;
    width: 70%;
    margin-left: 15%;
    background-color: none;
    display: flex;
    justify-content: space-evenly;
    margin-bottom: 3%;
}
.subtab button {
    background-color: white;
    font-weight: 700;
    color: black;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    width: 33%;
    padding: 14px 16px;
    transition: 0.1s;
}
.subtab button.active {
    color: #F79B63;
    border-bottom: 2px solid #F79B63;
    height: 50px;
}
.zone {
    display: none;
    width: 55%;
    margin-left: 22.75%;
    margin-top: -3%;
}
@media only screen and (max-width: 600px) {
    .tab button {
        width: 100px;
    }
    .check-out-button {
        width: 150px;
        padding: 0;
    }
    .subtab {
        width: 100%;
        margin-left: 0%;
    }
    .subtab button {
        padding: 0px 0px;
        font-size: 14px;
    }
    .tabcontent {
        padding: 10px;
        width: 100%;
        margin-left: 0%;
    }
    .zone {
        width: 100%;
        margin-left: 6%;
        margin-top: -10%;
    }
    .tabcontent-subtab {
        padding: 10px;
        width: 100%;
        margin-left: 0%;
    }
}
>>>>>>> Stashed changes
}
</style>
<div class="page-heading parallax events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Events</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
<<<<<<< Updated upstream
		<div class="row">
			<div class="col-md-3">
  			<div class="sub-nav">
          <ul>
  			<li><a href="/dance-marathon">Dance Marathon 2021</a></li>
			<li><a href="/dance-marathon-virtual">Dance Marathon Virtual Event 2021</a></li>
			<li><a href="/mini-marathon">Mini-Marathon</a></li>
        
            <li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
			<li><a href="/Moralloween">Moralloween</a></li>
			<li><a href="/Moral-Madness">Morale Madness</a></li>
			<li><a href="/transform-today">Transform Today</a></li>

           <!-- <li><a href="/event">Event</a></li>NOT YET MADE -->

				<!--<li><a href="/dance-marathon">Dance Marathon 2016</a></li>
				<li><a href="/eventsurvey">DM 2015 Event Survey</a></li>-->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <h3>A Yearlong Philanthropy</h3>
        <p>Dance Marathon is a yearlong commitment that includes many fundraising events aimed at reaching University students, businesses, and Gainesville residents. These events help us create a fun and exciting atmosphere while raising awareness about DM, whether it is through social media or inspirational stories from our Miracle Children who speak at the events. DM at UF's community events are all highly anticipated as they build up throughout the year toward the main Event in the spring.</p>
        <p>Your involvement in these events is what makes them successful! Reaching out for the support of the entire community is vital for the continued success of Gainesville's local Children's Miracle Network Hospital. For more information about how to get involved in these events, please contact us at <a href="floridadm@floridadm.org">floridadm@floridadm.org</a>.</p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
=======
		<?php if ($status == "open") { ?>
			<!--<h3><b><span style="color: black">A YEARLONG PHILANTHROPY</span></b></h3>-->
            <h2>A Yearlong Philanthropy</h2>
        	<p>Dance Marathon is a <b><span style="color: #F79B63">yearlong commitment</span></b> that includes many fundraising events aimed at reaching University students, businesses, and Gainesville residents. These events help us create a fun and exciting atmosphere while raising awareness about DM, whether it is through social media or inspirational stories from our Miracle Children who speak at the events. DM at UF's community events are all highly anticipated as they build up throughout the year toward the main Event in the spring.</p>
        	<p><b><span style="color: #014083">Your involvement in these events is what makes them successful!</span></b> Reaching out for the support of the entire community is vital for the continued success of Gainesville's local Children's Miracle Network Hospital. For more information about how to get involved in these events, please contact us at <a href="floridadm@floridadm.org">floridadm@floridadm.org</a>.</p>
		<?php } else { echo 'This page is currently closed.'; } ?>
	</div>
	<div class="tab">
        <button class="tablinks" onclick="openCity(event, 'involved')">GET INVOLVED</button>
        <button class="tablinks" onclick="openCity(event, 'dance')">DANCE MARATHON</button>
		<button class="tablinks" onclick="openCity(event, 'mini')">MINI-MARATHONS</button>
		<button class="tablinks" onclick="openCity(event, 'miricle')">MIRACLE GALA</button>
	</div>
	<div class="tab">
        <button class="tablinks" onclick="openCity(event, 'in-color')">MIRACLES IN COLOR 5K</button>
        <button class="tablinks" onclick="openCity(event, 'moralloween')">MORALLOWEEN</button>
		<!--<button class="tablinks" onclick="openCity(event, 'madness')">MORALE MADNESS</button>-->
		<button class="tablinks" onclick="openCity(event, 'transform')">TRANSFORM TODAY</button>
	</div>
	
<div id="involved" class="tabcontent">
<div class="subtab">
    <button class="tablinks-subtab" onclick="openSubTab(event, 'alumni')">ALUMNI</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'apps')">APPLICATIONS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'ambassadors')">AMBASSADORS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'captains')">CAPTAIN TEAMS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'emerging')">EMERGING LEADERS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'dancers')">DANCERS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'kirstyn')">KIRSTYN'S KREW</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'orgs')">ORGANIZATIONS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'service')">SERVICE</button>
</div>
<div id="alumni" class="tabcontent-subtab">
<p>24 high schools around the state of Florida participate each year in our Mini Marathon program. High school students at these schools show an enthusiastic passion for Dance Marathon even before their college years begin and play a vital role in our movement. This past year, our Mini Marathon programs raised a total of $551,525.33, proving that these students are truly one generation fighting for the next. All money raised by Mini Marathons goes toward DM at UF’s total amount raised, which directly benefits the children at UF Health Shands Children’s Hospital.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-qCnFuEPZOo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>We are always looking for more high schools to join our Dance Marathon family. If you would like to learn more about our Mini-Marathon Programs or would like to get involved, please contact our Marathon Relations Overall Directors, Harper Grabenhorst and Rebecca Brennan, at <a href="hgrabenhorst@floridadm.org ">hgrabenhorst@floridadm.org </a> and <a href="rbrennan@floridadm.org">rbrennan@floridadm.org</a>.</p>
</div>

<div id="apps" class="tabcontent-subtab">
<ul>
        <li>Oak Hall School</li>
<li>Buchholz High School</li>
<li>Forest High School</li>
<li>Saint Andrew's School</li>
<li>Boca Raton Community High School</li>
<li>Palm Beach Gardens Community High School</li>
<li>Seminole Ridge Community High School</li>
<li>Jupiter Community High School</li>
<li>Palm Beach Central High School</li>
<li>Eastside High School</li>
<li>Kanapaha Middle School</li>
<li>Suncoast Community High School</li>
<li>American Heritage School - Delray</li>
<li>Olympic Heights Community High School</li>
<li>Wellington Community High School</li>
<li>Belleview High School</li>
<li>Trinity Catholic High School</li>
<li>East Ridge High School</li>
<li>Gainesville High School</li>
<li>Newberry High School</li>
<li>Deerfield Beach High School</li>
<li>Vero Beach High School</li>
<li>Saint Francis Catholic Academy</li>
<li>Wellington Landings Middle School</li>
</ul>
      </div>
</div>
<div id="ambassadors" class="tabcontent-subtab zone">
<img src="/assets/images/hsdm/zoningpg1.png" width="697" height="889" title="zoningpg1" alt="zoningpg1" />

        </div>
</div>
</div>
</div>
</div>
<div id="miricle" class="tabcontent">
<h3>Miracle Gala</h3>
<!-- <p><a href=https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5106>Purchase your tickets here!</a>
-->
<p>Each year, Dance Marathon at UF hosts their Annual Miracle Gala the first night of the Main Event. This year, the Annual Miracle Gala will be held on March 26th, 2022 from 6 PM - 9 PM EST. This year’s Miracle Gala theme is Change Their Future in tribute to our yearlong campaign to #ChooseChange. We hope you will join us to raise funds and awareness for the children at UF Health Shands Children’s Hospital and help Change Their Future.</p>
<p>This black-tie event is designed for the Dance Marathon at UF community to celebrate a year of achievements, meet other community members and our Miracle Families, experience fine dining, hear from guest speakers, receive exclusive tours of the Main Event, participate in our Silent Auction, and take part in our Raise the Paddle fundraiser which benefits a participant of the donor’s choice. </p>
<p>The night will be filled with many Special Guests, including Miracle Families, UF Health Shands Staff, Community Partners, Sponsors, members of our High School Program, Keynote Speakers, an Alumni Spotlight, and more!</p>
<p>Ticket sales will be launched shortly! When they become available, they will be found here. </p>
<p>For more information or questions about sponsoring the event, please contact the Community Outreach Overall Director, Bridget Richer, at <a href=mailto:bricher@floridadm.org>bricher@floridadm.org</a>. We look forward to seeing you there! </p>
        
</div>
</div>
</div>
</div>
</div>
<div id="dance" class="tabcontent">
<p> We are so excited to announce that the main event this year will be March 26-27, 2022! </p>

<p>Follow us on social media for event updates! </p>

<h3>Main Event FAQs</h3>
    <h4>We have provided specific questions for the following general groups:</h4>
    <br>  <h4>All Participants</h4>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                What precautions are in place to ensure safety at the Main Event?
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                Dance Marathon at UF is working closely with UF Health Screen, Test & Protect to ensure that the Main Event can safely occur following the University of Florida and CDC event guidelines. Dr. Cindy Prins, the UF Health Screen, Test & Protect Campus Infection Preventionist, has reviewed the current Main Event safety plan. DM at UF will continue to work with Dr. Prins and UF Health Screen, Test & Protect as we plan for the Main Event.
                <br><br>All UF students attending the Dance Marathon at UF Main Event will be required to provide proof of a “Cleared” status on their ONE.UF to indicate that they are cleared to attend campus events. We are advising all members to limit unnecessary exposures for two weeks leading up to the Main Event to reduce the risk of exposure to COVID-19. All members will have their temperatures checked before entering the Stephen C. O’Connell Center. Temperatures must be below 100.4° to attend the Main Event.
                <br><br>On-site volunteer medical staff will be available to assist with any injuries or illnesses that may occur throughout the Main Event.
                <br><br>The O’Connell Center and UF Health Screen, Test & Protect have adjusted capacities to allow for physical distancing. Capacities are broken down according to each location in the O’Connell Center and will be strictly enforced.
                <br><br>All participants will be required to wear a face covering for the duration of the Main Event.
                <br><br>Masks with exhalation valves or vents that allow air to be expelled are prohibited because they do not provide protection to others.
                <br><br>In addition, neck gaiters and bandanas should not be worn unless no other face covering is available.
                <br><br>Participants will be asked to arrive with their own face covering, however, we will have disposable masks available if someone forgets their face covering.
                <br><br>Visitors’ contact with UF students will be as limited as possible.
                <br><br>Thorough and frequent cleaning procedures will be done throughout the O’Connell Center during the Main Event. This will include but is not limited to, hydrostatic sprayers, routinely disinfecting highly trafficked surfaces and hand sanitizing stations.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Will there be virtual engagement for those unable to attend or uncomfortable attending in-person?
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="panel-body">
              Yes! The Main Event will be live-streamed on various social media platforms. There will be additional opportunities for Dancers, Captains, Emerging Leaders, Ambassadors, high schoolers and visitors to attend virtually. Visit the Dance Marathon 2021 Virtual Event page to learn more about our virutal options.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Are these decisions finalized?
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
              These plans have been developed within the current CDC, Florida Department of Health and University of Florida guidelines for managing an event space while preventing the spread and transmission of COVID-19. All information is subject to change to achieve our goal of keeping members, Miracle Families and our community safe.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFour">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Why are there two shifts?
                </a>
              </h4>
            </div>
            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
              <div class="panel-body">
              Two shifts allow us to provide more Dancer spots while keeping our members safe and following the capacities from the O’Connell Center.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFive">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                What is the date and time of each shift?
                </a>
              </h4>
            </div>
            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
              <div class="panel-body">
              Orange Shift 1: April 10, 8 a.m. - 9:06 p.m.
              <br>Blue Shift 2: April 11, 6 a.m. - 7:06 p.m.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSix">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                Will visitors be able to attend the Main Event in the O’Connell Center?
                </a>
              </h4>
            </div>
            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
              <div class="panel-body">
              Visitors must be invited by Dance Marathon at UF to attend the Main Event. Visitor invitations have been sent out for the Main Event.
              <br><br>Visitor invitations are in place to ensure the safety of our members and prevent the outside spread of COVID-19.
              <br><br>The Main Event will be live-streamed to provide a virtual opportunity for visitors to tune in to the event and stay up to date on what is happening live at the O’Connell Center.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSeven">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                How do I know which shift I will attend for Dance Marathon 2021?
                </a>
              </h4>
            </div>
            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
              <div class="panel-body">
              Dancers will preference shifts once their spot is confirmed. We cannot guarantee which shift a Dancer will be assigned due to space availability. Please see the Dancer FAQ section for more information on shifts, preference deadlines and Dancer groups.
              <br><br>Captains will coordinate with their Overall Director to preference their assignments. Please see the Captain FAQ section for more information.
              <br><br>Emerging Leaders will be assigned shifts based on their Unit. Please see the Emerging Leader FAQ section for more information.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingEight">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                Will the engagement be the same at each shift?
                </a>
              </h4>
            </div>
            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
              <div class="panel-body">
              Similar engagement will be provided at Orange Shift 1 and Blue Shift 2. Our goal is to provide the same experience for all Dancers, regardless of the shift. Each shift will include Theme Hours, Linedances, fundraising incentives and more.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingNine">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                Will everyone be allowed to attend Total Reveal?
                </a>
              </h4>
            </div>
            <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
              <div class="panel-body">
              Captains, Emerging Leaders, Dancers, Ambassadors and Kristyn's Krew will be invited back to attend our Total Reveal in person. All members will be physically distanced in the 100 and 200 level stands for Total Reveal. The reveal will be live-streamed on DM at UF social media platforms for anyone to tune in.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTen">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                Will any meals be provided?
                </a>
              </h4>
            </div>
            <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
              <div class="panel-body">
              Meals will be provided to Dancers at the Main Event. All meals will be served by Hospitality Captains who will wear gloves and sanitize frequently. Participants will be instructed to eat outside under covered parking garages or under tents. Additional information regarding food safety will be provided to those groups.
              </div>
            </div>
          </div>
        </div>

        <h4>Miracles Families</h4>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingEleven">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                Can Miracles Families attend the entire event?
                </a>
              </h4>
            </div>
            <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
              <div class="panel-body">
              The duration of time that each Miracle Family can be present in the O’Connell Center will vary depending on the number of families who are interested in attending. Please lookout for an email from the Family Relations Overall, Courtney Kerwin, to indicate your interest level. Once this information is collected, Family shifts will be announced.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwelve">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                What are the precautions to ensure the safety of the Miracle Children?
                </a>
              </h4>
            </div>
            <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
              <div class="panel-body">
              We are committed to the health and safety of all of our Miracle Families and members. To ensure the safety of our Miracle Children there will be routine cleaning and sanitizing procedures throughout the O’Connell Center. Each child’s medical team must approve, review or advise their attendance to Dance Marathon 2021. More details will be provided regarding Miracle Child involvement. If you have further questions please contact mainevent@floridadm.org.
              </div>
            </div>
          </div>
        </div>

        <h4>Dancers</h4>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThirteen">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                How will the in-person Dancer experience be this year?
                </a>
              </h4>
            </div>
            <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
              <div class="panel-body">
              The Dancer experience will uphold the traditional Dancer experience while adapting to CDC guidelines. Dancer shifts will include Miracle Stories, Theme Hours, entertainment, meals and more. Dancers will stand, if able, with no sleep and no caffeine for the duration of their 13.1-hour shift in solidarity with every child affected by pediatric illness.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFourteen">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                How will Dancer shifts get assigned?
                </a>
              </h4>
            </div>
            <div id="collapseFourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourteen">
              <div class="panel-body">
              Dancers will preference shifts once their Dancer spot is confirmed on March 26. We cannot guarantee which shift a Dancer will be assigned due to space availability. Dancers will have until Tuesday, March 30 at 12 p.m. to preference their shifts and until Friday, April 2 to confirm their spot in that specific shift.
              <br><br>Dancers will sign up with a group of two to four members of their Organization which will serve as their QuaranTeam for the duration of the shift. They will be in the same Dancer Group as their QuaranTeam.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingFifteen">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                What is a Dancer Group?
                </a>
              </h4>
            </div>
            <div id="collapseFifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFifteen">
              <div class="panel-body">
              A Dancer Group is a small group of approximately 20 Dancers who will remain together for the duration of the Main Event. Groups will remain physically distanced throughout the event. Each Dancer Group will be paired with a Dancer Relations Captain or a Recruitment Captain. Dancer Groups will rotate throughout the O’Connell Center periodically to ensure that everyone can experience all aspects of the Main Event while following the O’Connell Center capacities.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSixteen">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                How do you get selected to be a Dancer?
                </a>
              </h4>
            </div>
            <div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
              <div class="panel-body">
              Dancer spots will be allocated to each Organization based on their yearlong fundraising and involvement.
              <br><br>Organizations select Dancers from their Registered Dancer lists and submit the names to DM at UF. Organization Dancer lists will be due by March 26.
              </div>
            </div>
          </div>
        </div>

        <h4>Ambassadors</h4>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingSeventeen">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                Will I be able to attend both shifts?
                </a>
              </h4>
            </div>
            <div id="collapseSeventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeventeen">
              <div class="panel-body">
              Ambassadors are encouraged to register to dance, meaning that they would be assigned to one shift. There will be a designated area for Ambassadors to come during either shift to assist their Organization’s Dancers.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingEighteen">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                Will every Dancer in my Organization have to attend the same shift?
                </a>
              </h4>
            </div>
            <div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEighteen">
              <div class="panel-body">
              No, every Dancer from an Organization may be in the same shift but that is unlikely. Dancers from each Organization will be split into each shift.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingNineteen">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                How will fundraising levels work?
                </a>
              </h4>
            </div>
            <div id="collapseNineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNineteen">
              <div class="panel-body">
              Fundraising levels are determined based on an Organization’s fundraising, Spirit Points and the number of locked Dancers. When combined, Organizations will be placed into a fundraising level and compete against other Organizations for their spot. Fundraising levels will determine the number of Dancers from each Organization who can attend the Main Event. More information will be provided to Ambassadors regarding fundraising levels.
              </div>
            </div>
          </div>
        </div>

        <h4>Captains</h4>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwenty">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                What will Captain attendance look like?
                </a>
              </h4>
            </div>
            <div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwenty">
              <div class="panel-body">
              Captains will be assigned different times to attend depending on the Captain Team’s role in the Main Event. The duration of shifts will vary depending on the Team’s role. Your Overall Director will assign shifts closer to the Main Event.
              <br><br>All Captains will be invited to attend the Overnight Captain & ELP Engagement.
              <br><br>The 200 level stands will be reserved for Captains for the duration of the Main Event to observe the Dancer shifts.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwentyone">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyone" aria-expanded="false" aria-controls="collapseTwentyone">
                How will my team’s responsibilities change?
                </a>
              </h4>
            </div>
            <div id="collapseTwentyone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyone">
              <div class="panel-body">
              Please contact your Overall Director for individual team changes.
              </div>
            </div>
          </div>
         </div>

         <h4>Emerging Leaders Program</h4>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwentytwo">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentytwo" aria-expanded="false" aria-controls="collapseTwentytwo">
                Will I be able to attend both shifts?
                </a>
              </h4>
            </div>
            <div id="collapseTwentytwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentytwo">
              <div class="panel-body">
              Emerging Leaders will attend one Dancer shift, assigned based on their Unit.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwentythree">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentythree" aria-expanded="false" aria-controls="collapseTwentythree">
                What will the Emerging Leaders Program experience be like?
                </a>
              </h4>
            </div>
            <div id="collapseTwentythree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentythree">
              <div class="panel-body">
              Emerging Leaders will have specific roles for their shifts and will be able to experience the entirety of a shift at the Main Event. More details will be provided throughout the semester from the Leadership Development Captain Team.
              </div>
            </div>
          </div>
         </div>

         <h4>High Schoolers</h4>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwentyfour">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyfour" aria-expanded="false" aria-controls="collapseTwentyfour">
                What will in-person engagement be?
                </a>
              </h4>
            </div>
            <div id="collapseTwentyfour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyfour">
              <div class="panel-body">
              More details will be provided regarding high school in-person visitor involvement at the Main Event. If you have further questions, please email mainevent@floridadm.org.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwentyfive">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentyfive" aria-expanded="false" aria-controls="collapseTwentyfive">
                How can we engage virtually?
                </a>
              </h4>
            </div>
            <div id="collapseTwentyfive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwenty">
              <div class="panel-body">
              High schoolers will have the opportunity to engage with DM at UF over various social media platforms. The Marathon Relations Teams will provide information on additional virtual engagement opportunities for high school programs.
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwentysix">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwentysix" aria-expanded="false" aria-controls="collapseTwentysix">
                Will we need to find somewhere to stay if we attend in-person?
                </a>
              </h4>
            </div>
            <div id="collapseTwentysix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentysix">
              <div class="panel-body">
              Dance Marathon at UF does not provide accommodations for visitors.
              </div>
            </div>
          </div>
        </div>

        <br><h4>For additional questions, email mainevent@floridadm.org </h4>
	</div>

	<div id="mini" class="tabcontent">

    <div class="subtab">
        <button class="tablinks-subtab" onclick="openSubTab(event, 'marathon')">MINI-MARATHON</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, 'schools')">SCHOOLS</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, 'zone')">WHAT'S MY ZONE?</button>
    </div>
    <div id="marathon" class="tabcontent-subtab">
<p>24 high schools around the state of Florida participate each year in our Mini Marathon program. High school students at these schools show an enthusiastic passion for Dance Marathon even before their college years begin and play a vital role in our movement. This past year, our Mini Marathon programs raised a total of $551,525.33, proving that these students are truly one generation fighting for the next. All money raised by Mini Marathons goes toward DM at UF’s total amount raised, which directly benefits the children at UF Health Shands Children’s Hospital.</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-qCnFuEPZOo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>We are always looking for more high schools to join our Dance Marathon family. If you would like to learn more about our Mini-Marathon Programs or would like to get involved, please contact our Marathon Relations Overall Directors, Harper Grabenhorst and Rebecca Brennan, at <a href="hgrabenhorst@floridadm.org ">hgrabenhorst@floridadm.org </a> and <a href="rbrennan@floridadm.org">rbrennan@floridadm.org</a>.</p>
    </div>

    <div id="schools" class="tabcontent-subtab">
<ul>
            <li>Oak Hall School</li>
<li>Buchholz High School</li>
<li>Forest High School</li>
<li>Saint Andrew's School</li>
<li>Boca Raton Community High School</li>
<li>Palm Beach Gardens Community High School</li>
<li>Seminole Ridge Community High School</li>
<li>Jupiter Community High School</li>
<li>Palm Beach Central High School</li>
<li>Eastside High School</li>
<li>Kanapaha Middle School</li>
<li>Suncoast Community High School</li>
<li>American Heritage School - Delray</li>
<li>Olympic Heights Community High School</li>
<li>Wellington Community High School</li>
<li>Belleview High School</li>
<li>Trinity Catholic High School</li>
<li>East Ridge High School</li>
<li>Gainesville High School</li>
<li>Newberry High School</li>
<li>Deerfield Beach High School</li>
<li>Vero Beach High School</li>
<li>Saint Francis Catholic Academy</li>
<li>Wellington Landings Middle School</li>
</ul>
          </div>
    </div>
    <div id="zone" class="tabcontent-subtab zone">
<img src="/assets/images/hsdm/zoningpg1.png" width="697" height="889" title="zoningpg1" alt="zoningpg1" />

            </div>
    </div>
</div>
	</div>
</div>
	<div id="miricle" class="tabcontent">
<h3>Miracle Gala</h3>
<!-- <p><a href=https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5106>Purchase your tickets here!</a>
-->
<p>Each year, Dance Marathon at UF hosts their Annual Miracle Gala the first night of the Main Event. This year, the Annual Miracle Gala will be held on March 26th, 2022 from 6 PM - 9 PM EST. This year’s Miracle Gala theme is Change Their Future in tribute to our yearlong campaign to #ChooseChange. We hope you will join us to raise funds and awareness for the children at UF Health Shands Children’s Hospital and help Change Their Future.</p>
<p>This black-tie event is designed for the Dance Marathon at UF community to celebrate a year of achievements, meet other community members and our Miracle Families, experience fine dining, hear from guest speakers, receive exclusive tours of the Main Event, participate in our Silent Auction, and take part in our Raise the Paddle fundraiser which benefits a participant of the donor’s choice. </p>
<p>The night will be filled with many Special Guests, including Miracle Families, UF Health Shands Staff, Community Partners, Sponsors, members of our High School Program, Keynote Speakers, an Alumni Spotlight, and more!</p>
<p>Ticket sales will be launched shortly! When they become available, they will be found here. </p>
<p>For more information or questions about sponsoring the event, please contact the Community Outreach Overall Director, Bridget Richer, at <a href=mailto:bricher@floridadm.org>bricher@floridadm.org</a>. We look forward to seeing you there! </p>
            
	</div>
	<div id="in-color" class="tabcontent">
<h3>Miracles in Color 5K</h3>
               <!-- <p>Tickets are no longer available.</p> -->
        
          Welcome to the Miracles in Color 5K benefiting UF Health Shands Children's Hospital!
          Miracles in Color is open to anyone who wants to support our cause and have a great time. In addition to our 5k run, we will have free food and merchandise to purchase on Flavet Field. We couldn't think of a better way for you to spend your Saturday morning than with paint and by supporting a hospital that is so prominent in our community!
  </p>
              <!-- <p> Purchase <a href=https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5022>Miracles in Color 5k Tickets here!</a>* </p>
              
              <p><i> *Tickets purchased after January 31 will not include a complimentary 5K shirt </i></p> -->
              <p> The course runs through the University of Florida campus and will have color stations throughout the course as well as at the finish line. At each color station, runners will be doused in color.* <u>All participants will be provided with a Miracles In Color 5k white shirt with registration.</u> </p>

              <p>The 5k course will be split into 4 shifts. When registering, you will be able to choose which shift you would like to run at. Shift options include: 7:30 a.m., 8:00 a.m., 8:30 a.m., or 9:00 a.m. <b>On the day of the event, please arrive at least 15 minutes prior to your start time. </b></p>

              <p>All proceeds will be donated to UF Health Shands Children's Hospital, our local Children's Miracle Network Hospital, from Dance Marathon at the University of Florida. </p>

              <p>*Don't want to be colored with powder? We will give you something to indicate to our color team that you want to stay clean. </p>

                <p>For more information, please contact the Operations Manager, Zachary Zelenak, at <a href=mailto:zzelenak@floridadm.org>zzelenak@floridadm.org.</a></p>

               <h2>Race Day Info</h2>

               <p>Please arrive 15 minutes before your scheduled run time to sign in. You must fill out the required <a href=https://ufl.qualtrics.com/jfe/form/SV_bj9Q0gkFuj4uKXA>Liability Waiver Form </a> prior to arriving at our 5k. We recommend you fill out this form at the same time as registration and save/screenshot your results. You will be required to show proof of completion when checking in the day of. </p>
              
              <p>There is parking available at Flavet Field, but please arrive early to ensure you have time to sign in before your scheduled race. </p>

              <p>Check your email for more information, and email <a href=mailto:zzelenak@floridadm.org>zzelenak@floridadm.org</a> with any questions. </p>

               <h2>FAQs</h2>
               <h3>What is a Color Run? </h3>
               <p>A Color Run is a 5 kilometer race involving powder paint, inspired by the Hindu Festival of Holi. Participants wear white at the beginning of the race and are covered with color by the end. To learn more about Holi you can visit <a href="https://www.holifestival.org/" target="_blank">here.</a> </p>

              <h3>What if I don’t want to be covered in colored powder?</h3>
              <p>We will give you something to indicate to our color team that you want to stay clean.</p>

              <h3>What do I do after I finish my shift?</h3>
              <p>You are more than welcome to hang out with us on Flavet Field and enjoy free food, purchase merchandise, and stay for our big Color Throw at 10:20 a.m.! </p>

              <h3>Will there be chip timing at the Miracles in Color 5K?</h3>
              <p>No, there is no official timing system for the 5K. </p>
	</div>
	<div id="moralloween" class="tabcontent">
<h3>Moralloween</h3>

                <p>Moralloween is an annual fall fundraiser put on by Dance Marathon at UF, a student-run philanthropy that raises funds and awareness year-round at UF Health Shands Children’s Hospital! Organizations across campus participate by creating booths with activities, candy, and ways to bond with attendees and Miracle Families. Moralloween has a DJ, great food, and is a great way for everyone to get in the Halloween spirit!</p>
                <p>For more information, please contact the Morale Overall Director, Victoria Leary, at <a href="mailto:vleary@floridadm.org">vleary@floridadm.org</a>.</p>
            
	</div>

	<!--<div id="madness" class="tabcontent"> -->
<!-- <h3>Morale Madness</h3> -->

          
                <!--<p> Purchase tickets <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5062" target="_blank">HERE!</a> -->
                <!-- <p>Morale Madness is a 10 v. 10 kickball tournament taking place on February 27th from 12-5:30 p.m. Read below for more information regarding the event, teams, and tickets. </p>
                <p><b>What:</b> 10 v. 10 kickball tournament </p>
                <p><b>Where:</b> RecSports Softball Fields </p>
                <p><b>When:</b> Sunday, February 27th from 12-5:30 p.m. Game times will be staggered, your team will be contacted closer to the event with information regarding your specific start time. </p>
                <p><b>Teams:</b> Teams should be composed of 10 players!</p>
                <p><b>Tickets:</b> Tickets will be available on January 24th. Tickets can be purchased online in one of three ways. A Spectator Ticket ($3) grants you access to the event and all we have to offer, but does not grant you access to play in the tournament. If you want to play in the tournament purchase either a $5 Player Ticket or a $50 Team Ticket using the “Team Ticket” option. We hope to see you there for all of the fun and to learn more about UF Health Shands Children’s Hospital. </p>
                <p>For more information, please contact the Morale Overall Director, Victoria Leary, at <a href="mailto:vleary@floridadm.org">vleary@floridadm.org</a>.</p> -->
	<!-- </div> -->
	<div id="transform" class="tabcontent">
<h3>Transform Today</h3>
                              Transform Today is our largest fall fundraising effort which lasts 26.2 hours and took place on October 26th-27th this year! Our movement spread throughout our organization, campus and community as our different teams’ colored polos flooded the University of Florida; our participants took the initiative to dedicate their day to raise funds and awareness for patients at UF Health Shands Children’s Hospital. <br></br>

                              In efforts to boost engagement and encourage fundraising, we hosted programming at the Reitz Student Union in the Grand Ballroom and North Lawn. Throughout the day, merchandise, fundraising activities and Miracle Stories engaged and connected our members to our cause. We would like to extend a huge thank you to our participants, Alumni and donors for your continuous support throughout the day!<br></br>

                              Our overall total, which was raised in just 26.2 hours for our hospital, was <b>$589,484.19! </b> <br></br>

                              We are so eager to continue our efforts throughout this year and make miracles for the families who need it most! Please feel free to watch our Transform Today recap video <a href="https://www.youtube.com/watch?v=re8WypH-GlI&list=PLifN5hH-S4iQe14u-fHpP6cafBRGGPURj&index=7" target"_blank">here</a>.
<br></br>
                <h4><i>Why</i></h4>

                For 26.2 hours, Dance Marathon at the University of Florida unites during this fundraising campaign to transform the lives of the patients at UF Health Shands Children’s hospital. In only 26.2 hours, our campus community rises to create as many miracles as possible for the children and families at Shands Children’s Hospital.
<br></br>
<h4><i>When</i></h2>

Transform Today 2022 was from 9:00 a.m. on October 26th until 11:12 a.m. on October 27th!  </li>
<br></br>
<h4><i>What</i></h4>

Transform Today is Dance Marathon at the University of Florida’s Fall fundraising campaign. For 26.2 hours from 9 a.m. until 11:12 a.m. the next day, Dance Marathon at UF compiles our efforts to raise funds and awareness to transform the lives of the children and families at UF Health Shands Children’s Hospital.
<br></br>
<h4><i>How Can I Get Involved</i></h4>

Transform Today is Dance Marathon at the University of Florida’s largest fundraising campaign in the Fall semester. There are a variety of different ways to join our movement and help us transform the lives of our student body, the lives of the children at UF Health Shands Children’s Hospital, and the lives of each other. </br>

<br>If you are looking to make a financial contribution to support our cause, you can donate using our DonorDrive, linked <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donordrive.donate&EventID=4042" target="_blank">here.</a></br>
<br>If you are looking to register to Dance in our 2022 Main Event, you can register to Dance <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4327" target="_blank">here.</a> All registered Dancers must also create a DonorDrive page, you can do so <a href="https://events.dancemarathon.com/index.cfm?fuseaction=register.start&eventID=4042" target="_blank">here.</a> Dancer registration is only open for the duration of Transform Today. </br>
<br>If you are looking for additional resources to help with fundraising on Transform Today, click <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4327" target="_blank">here.</a>
 <br></br>
 <h4><i>Hospitality Nights</i></h4>

 Hospitality Nights serve as an opportunity for the local Gainesville community can support Dance Marathon at UF’s fundraising efforts. On Transform Today, hospitality nights will be occurring in select locations. Make sure to mention Dance Marathon at UF at check out and a portion of the proceeds will benefit the patients at UF Health Shands Children’s Hospital!


>>>>>>> Stashed changes
	</div>
</div>



<?php include("includes/foot.php"); ?>
