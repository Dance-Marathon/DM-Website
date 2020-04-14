<?php
$status = "open";
$GLOBALS['page_title'] = 'Captain Teams | Students | Dance Marathon at UF';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>


<script>

  // this will grab the names of all the captians from the google doc

   // ID of the Google Spreadsheet
   var spreadsheetID = "1qGVFluq-wlSZGPX2ubEZ8TcqmhfaLyJVjNiJTl3F0EE";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   var counters = {
     outreach: 0,
     dancerrelations: 0,
     designandtech: 0,
     fundraising: 0,
     hospitality: 0,
     leadershipdevelopment: 0,
     marathonrelations: 0,
     merch: 0,
     morale: 0,
     multimedia: 0,
     productions: 0,
     pr: 0,
     recruitment: 0,
     sponsorships: 0,
     familyrelations: 0
   };

   $('.outreach').append('<tr>');
   $('.dancerrelations').append('<tr>');
   $('.designandtech').append('<tr>');
   $('.fundraising').append('<tr>');
   $('.hospitality').append('<tr>');
   $('.leadershipdevelopment').append('<tr>');
   $('.marathonrelations').append('<tr>');
   $('.merch').append('<tr>');
   $('.morale').append('<tr>');
   $('.multimedia').append('<tr>');
   $('.productions').append('<tr>');
   $('.pr').append('<tr>');
   $('.recruitment').append('<tr>');
   $('.sponsorships').append('<tr>');
   $('.familyrelations').append('<tr>');
   $.getJSON(url, function(data) {

       var entry = data.feed.entry;

       $(entry).each(function() {

        // outreach
        if (!($(entry)[1].gsx$communityoutreach.$t.includes("n/a"))) {
            if(counters["outreach"] < 3) {
              $('.outreach').append('<td>' + this.gsx$communityoutreach.$t + '</td>');
              counters["outreach"]++;
            } else {
                $('.outreach').append('</tr>'); 
                $('.outreach').append('<tr>');  
                $('.outreach').append('<td>' + this.gsx$communityoutreach.$t + '</td>');
                counters["outreach"] = 1;
            }
          }
          // dancer relations
          if (!($(entry)[1].gsx$dancerrelations.$t.includes("n/a"))) {
            if(counters["dancerrelations"] < 3) {
              $('.dancerrelations').append('<td>' + this.gsx$dancerrelations.$t + '</td>');
              counters["dancerrelations"]++;
            } else {
                $('.dancerrelations').append('</tr>'); 
                $('.dancerrelations').append('<tr>');  
                $('.dancerrelations').append('<td>' + this.gsx$dancerrelations.$t + '</td>');
                counters["dancerrelations"] = 1;
            }
          }
          // design and technology
          if (!($(entry)[1].gsx$designtechnoly.$t.includes("n/a"))) {
            if(counters["designandtech"] < 3) {
              $('.designandtech').append('<td>' + this.gsx$designtechnoly.$t + '</td>');
              counters["designandtech"]++;
            } else {
                $('.designandtech').append('</tr>'); 
                $('.designandtech').append('<tr>');  
                $('.designandtech').append('<td>' + this.gsx$designtechnoly.$t + '</td>');
                counters["designandtech"] = 1;
            }
          }
           // fundraising
        if (!($(entry)[1].gsx$fundraisingandorganizationdevelopment.$t.includes("n/a"))) {
            if(counters["fundraising"] < 3) {
              $('.fundraising').append('<td>' + this.gsx$fundraisingandorganizationdevelopment.$t + '</td>');
              counters["fundraising"]++;
            } else {
                $('.fundraising').append('</tr>'); 
                $('.fundraising').append('<tr>');  
                $('.fundraising').append('<td>' + this.gsx$fundraisingandorganizationdevelopment.$t + '</td>');
                counters["fundraising"] = 1;
            }
          }
          // hospitality
          if (!($(entry)[1].gsx$hospitality.$t.includes("n/a"))) {
            if(counters["hospitality"] < 3) {
              $('.hospitality').append('<td>' + this.gsx$hospitality.$t + '</td>');
              counters["hospitality"]++;
            } else {
                $('.hospitality').append('</tr>'); 
                $('.hospitality').append('<tr>');  
                $('.hospitality').append('<td>' + this.gsx$hospitality.$t + '</td>');
                counters["hospitality"] = 1;
            }
          }
          // leadership and development
          if (!($(entry)[1].gsx$leadershipdevelopment.$t.includes("n/a"))) {
            if(counters["leadershipdevelopment"] < 3) {
              $('.leadershipdevelopment').append('<td>' + this.gsx$leadershipdevelopment.$t + '</td>');
              counters["leadershipdevelopment"]++;
            } else {
                $('.leadershipdevelopment').append('</tr>'); 
                $('.leadershipdevelopment').append('<tr>');  
                $('.leadershipdevelopment').append('<td>' + this.gsx$leadershipdevelopment.$t + '</td>');
                counters["leadershipdevelopment"] = 1;
            }
          }
           // marathon relations
        if (!($(entry)[1].gsx$marathonrelations.$t.includes("n/a"))) {
            if(counters["marathonrelations"] < 3) {
              $('.marathonrelations').append('<td>' + this.gsx$marathonrelations.$t + '</td>');
              counters["marathonrelations"]++;
            } else {
                $('.marathonrelations').append('</tr>'); 
                $('.marathonrelations').append('<tr>');  
                $('.marathonrelations').append('<td>' + this.gsx$marathonrelations.$t + '</td>');
                counters["marathonrelations"] = 1;
            }
          }
          // merchandise
          if (!($(entry)[1].gsx$merchandise.$t.includes("n/a"))) {
            if(counters["merch"] < 3) {
              $('.merch').append('<td>' + this.gsx$merchandise.$t + '</td>');
              counters["merch"]++;
            } else {
                $('.merch').append('</tr>'); 
                $('.merch').append('<tr>');  
                $('.merch').append('<td>' + this.gsx$merchandise.$t + '</td>');
                counters["merch"] = 1;
            }
          }
          // morale
          if (!($(entry)[1].gsx$morale.$t.includes("n/a"))) {
            if(counters["morale"] < 3) {
              $('.morale').append('<td>' + this.gsx$morale.$t + '</td>');
              counters["morale"]++;
            } else {
                $('.morale').append('</tr>'); 
                $('.morale').append('<tr>');  
                $('.morale').append('<td>' + this.gsx$morale.$t + '</td>');
                counters["morale"] = 1;
            }
          }
           // multimedia
        if (!($(entry)[1].gsx$multimedia.$t.includes("n/a"))) {
            if(counters["multimedia"] < 3) {
              $('.multimedia').append('<td>' + this.gsx$multimedia.$t + '</td>');
              counters["multimedia"]++;
            } else {
                $('.multimedia').append('</tr>'); 
                $('.multimedia').append('<tr>');  
                $('.multimedia').append('<td>' + this.gsx$multimedia.$t + '</td>');
                counters["multimedia"] = 1;
            }
          }
          // productions
          if (!($(entry)[1].gsx$productions.$t.includes("n/a"))) {
            if(counters["productions"] < 3) {
              $('.productions').append('<td>' + this.gsx$productions.$t + '</td>');
              counters["productions"]++;
            } else {
                $('.productions').append('</tr>'); 
                $('.productions').append('<tr>');  
                $('.productions').append('<td>' + this.gsx$productions.$t + '</td>');
                counters["productions"] = 1;
            }
          }
          // pr
          if (!($(entry)[1].gsx$publicrelations.$t.includes("n/a"))) {
            if(counters["pr"] < 3) {
              $('.pr').append('<td>' + this.gsx$publicrelations.$t + '</td>');
              counters["pr"]++;
            } else {
                $('.pr').append('</tr>'); 
                $('.pr').append('<tr>');  
                $('.pr').append('<td>' + this.gsx$publicrelations.$t + '</td>');
                counters["pr"] = 1;
            }
          }
           // recruitment
        if (!($(entry)[1].gsx$recruitment.$t.includes("n/a"))) {
            if(counters["recruitment"] < 3) {
              $('.recruitment').append('<td>' + this.gsx$recruitment.$t + '</td>');
              counters["recruitment"]++;
            } else {
                $('.recruitment').append('</tr>'); 
                $('.recruitment').append('<tr>');  
                $('.recruitment').append('<td>' + this.gsx$recruitment.$t + '</td>');
                counters["recruitment"] = 1;
            }
          }
          // sponsorships
          if (!($(entry)[1].gsx$sponsorships.$t.includes("n/a"))) {
            if(counters["sponsorships"] < 3) {
              $('.sponsorships').append('<td>' + this.gsx$sponsorships.$t + '</td>');
              counters["sponsorships"]++;
            } else {
                $('.sponsorships').append('</tr>'); 
                $('.sponsorships').append('<tr>');  
                $('.sponsorships').append('<td>' + this.gsx$sponsorships.$t + '</td>');
                counters["sponsorships"] = 1;
            }
          }
          // family relations
          if (!($(entry)[1].gsx$familyrelations.$t.includes("n/a"))) {
            if(counters["familyrelations"] < 3) {
              $('.familyrelations').append('<td>' + this.gsx$familyrelations.$t + '</td>');
              counters["familyrelations"]++;
            } else {
                $('.familyrelations').append('</tr>'); 
                $('.familyrelations').append('<tr>');  
                $('.familyrelations').append('<td>' + this.gsx$familyrelations.$t + '</td>');
                counters["familyrelations"] = 1;
            }
          }
          
               
       });
   });
   $('.outreach').append('</tr>');
   $('.dancerrelations').append('</tr>');
   $('.designandtech').append('</tr>');
   $('.fundraising').append('</tr>');
   $('.hospitality').append('</tr>');
   $('.leadershipdevelopment').append('</tr>');
   $('.marathonrelations').append('</tr>');
   $('.merch').append('</tr>');
   $('.morale').append('</tr>');
   $('.multimedia').append('</tr>');
   $('.productions').append('</tr>');
   $('.pr').append('</tr>');
   $('.recruitment').append('</tr>');
   $('.sponsorships').append('</tr>');
   $('.familyrelations').append('</tr>'); 
   
</script>

<div class="page-heading parallax captain-teams">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Captain Teams</h1>
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
						<li><a href="/alumni">Alumni</a></li>
						<li><a href="/ambassadors">Ambassadors</a></li>
						<li><a class="active">Captain Teams</a></li>
						<li><a href="/emerging-leaders">Emerging Leaders</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/kirstynskrew">Kirstyn's Krew</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
      <h3>Captain Teams</h3>
<!--      <p>Emerging Leaders List can be found <a href="/emerging-leaders">here</a></p> -->
     <p>Each Captain Team is composed of an <b>Overall Director</b>, <b>Assistant Directors</b> and <b>Captains</b>. </p>
      <ul>
        <li><b>Assistant Directors</b> are individuals who work yearlong with their respective Overall Directors to ensure steady growth and management within their Captain Team. ADs possess effective skills in responsibility, organization and leadership. The responsibilities of each AD position vary among each Captain Team. Assistant Directors are elected at the end of Spring semester.</li>
        <li><b>Captains</b> are leaders within our organization who have specific duties throughout the year depending on their teams. There are 15 Captain Teams, each having vastly different responsibilities to ensure the growth and promotion of our cause on many different fronts. Captains typically have weekly or biweekly meetings and are a vital part of the Dance Marathon family. Captains applications are released at the beginning of Fall semester. </li>
      </ul>
      <p>Click each tab below to learn more about each team and its responsibilities.</p>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
       <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q13">
           <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#a13" aria-expanded="false" aria-controls="a13">Community Outreach</a>
          </h4>
        </div>
        <div id="a13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q13">
         <div class="panel-body">
          <b> The Community Outreach Team </b>  is responsible for increasing the awareness and reach of Dance Marathon at the University of Florida throughout the Gainesville community and beyond. They work to promote a focused, consistent message about Dance Marathon at UF and to create strong community partnerships. The goal is to expand DM at UF’s reach to the Gainesville community, sharing our mission and forming positive relationships with new communities in our cause. Community Outreach is responsible for large community-based events such as the Miracle Gala. The Team also focuses on creating and organizing targeted engagement projects around the Gainesville community. They collaborate with the Dance Marathon Alumni (DMA) to increase alumni engagement and participation and are responsible for fostering Faculty Engagement with our cause.
          <br>
          <h4><b>Overall Director</b></h4>
          Grace Crowder
          <!-- <br>
                 <h4><b>Assistant Director of Community Partnerships </b></h4>
                 Caitlyn Pennell
                 <h4><b>Assistant Director of Connections and Communication</b></h4>
                 Jamie Breit
                 <h4><b>Assistant Director of Events </b></h4>
                 Claire Mobley
               <h4>  <b>Captains</b></h4>
               <table style="width:100%">
                <tbody class="outreach"> </tbody>
              </table> -->

               </div>
             </div>
           </div>

          <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q3">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a3" aria-expanded="false" aria-controls="a3">Dancer Relations</a>
            </h4>
          </div>
          <div id="a3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q3">
            <div class="panel-body">
              <b> The Dancer Relations Team </b> is responsible for welcoming all registered Dancers into our organization. Dancer Relations Captains are responsible for ensuring that all registered Dancers are informed about our upcoming events and opportunities, as well as maintaining open communication with Dancers. Responsibilities include registering Dancers for our main 26.2-hour event, tracking Dancer participation via spirit points, working weekly and other various Check-Ins, planning and executing Registered Dancer events, organizing guest Check-Ins for visitors at the main Event, and being a constant resource and source of encouragement for our registered Dancers throughout the year.
              <br>
              <h4><b>Overall Director</b></h4>
              Caroline Lee
              <!-- <br>
              <h4><b>Assistant Director of Check-Ins</b></h4>
              Peter Giannas
              <h4><b>Assistant Director of Dancer Engagement</b></h4>
              Alex Gagliano
              <h4><b>Assistant Director of Tracking and Logistics</b></h4>
              Carlie Yent
              <h4><b>Captains</b></h4>
              <table style="width:100%">
                <tbody class="dancerrelations"> </tbody>
              </table> -->

            </div>
          </div>
        </div>
              <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q2">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a2" aria-expanded="false" aria-controls="a2">Design & Technology</a>
            </h4>
          </div>
          <div id="a2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q2">
            <div class="panel-body">
              <b> The Design & Technology Team </b>is a collection of graphic designers and software developers responsible for making Dance Marathon media come to life. Captains are responsible for either the development/maintenance of the website and mobile applications (iOS and Android) or the creation of all print/web design needs (e.g. merchandise, social media graphics, newsletters, calendars, etc.). Throughout the year, Captains work together to create high-tech, portfolio-quality materials that showcase Dance Marathon as a professional student-run movement. At the Event itself, Captains run the Tech Booth, which includes managing multiple screens inside the O’Dome, sending app notifications, coordinating audio/visual feeds, and creating in-event graphics.
              <br>
              <h4><b>Overall Director</b></h4>
              Madison Hersch
              <!-- <br>
              <h4><b>Assistant Director of Project Management</b></h4>
              Ali Sammour
              <h4><b>Assistant Director of Technology Logistics</b></h4>
              Kyle Bassignani
              <h4>  <b> Captains</b></h4>
              <table style="width:100%">
                <tbody class="designandtech"> </tbody>
              </table> -->
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q5">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a5" aria-expanded="false" aria-controls="a5">Family Relations</a>
            </h4>
          </div>
          <div id="a5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q5">
            <div class="panel-body">
              <b> Family Relations Captains </b> serve as liaisons between the Dance Marathon community and the Miracle Families. Captains are paired with at least one Miracle Family, and their responsibilities include: maintaining consistent contact with their respective Miracle Families, working on the Pen Pal program, and coordinating events between the Miracle Families and participating Organizations through Miracle Child Teams. Captains will attend monthly Family Fun Days in order to connect Miracle Families to the Dance Marathon community. Captains also volunteer at UF Health Shands Children’s Hospital in Pediatric Units 44 and 45. Captains create the family room for the 26.2-hour event and facilitate activities and entertainment for the Miracle Families throughout the entirety of the Event. 
              <br>
              <h4><b>Overall Director</b></h4>
              Courtney Kerwin
              <!-- <br>
              <h4><b>Assistant Director of External Relations</b></h4>
              Courtney Kerwin
              <h4><b>Assistant Director of Family Events</b></h4>
              Sam Bradley
              <h4><b>Assistant Director of Family Outreach</b></h4>
              Hannah Cooper
			  <h4><b>Assistant Director of Internal Relations</b></h4>
              Lauren Connell

    <h4>      <b>Captains</b></h4>
    <table style="width:100%">
                <tbody class="familyrelations"> </tbody>
              </table> -->

            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q6">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a6" aria-expanded="false" aria-controls="a6">Fundraising and Organization Development</a>
            </h4>
          </div>
          <div id="a6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q6">
            <div class="panel-body">
              <b> The Fundraising and Organization Development Team </b> is responsible for financial oversight, funds processing, collections, and fundraising strategies/incentives. These Captains play an integral role in the success of Dance Marathon at UF by ensuring that the total fundraising reveal is accurate up until the very last minute, when the final numbers are raised. This team is also responsible for coordinating the Organization Ambassador Program to ensure Ambassadors of Organizations have updated and accurate information about all upcoming events, deadlines, and fundraising tracking. Each Captain will be assigned several Organizations to keep informed and to certify their Organizations' success. He/she is also expected to coordinate with the Family Relations and Dancer Relations Teams in regard to his/her Organization(s). 
              <br>
              <h4><b>Overall Director</b></h4>
              Emma McClane
              <!-- <br>
              <h4><b>Assistant Director of Canning and Special Projects</b></h4>
              Meaghan Norus
              <h4><b>Assistant Director of Mini-Marathon Fundraising</b></h4>
              Emma McClane
              <h4><b>Assistant Director of Organization Relations</b></h4>
              Jacqueline Lamm
   <h4>  <b> Captains</b></h4>
   <table style="width:100%">
                <tbody class="fundraising"> </tbody> -->
              </table>
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q7">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a7" aria-expanded="false" aria-controls="a7">Hospitality</a>
            </h4>
          </div>
          <div id="a7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q7">
            <div class="panel-body">
              <b> The Hospitality Captains </b> work year-round with local restaurants to coordinate monthly Hospitality fundraising nights for Dance Marathon. Captains also spend a large portion of the year reaching out to large food corporations and local restaurants in Gainesville to coordinate donations and corporate sponsorships. Hospitality is responsible for all food-related needs for the 26.2-hour event and all community events throughout the year, including our own Hospitality Event. Captains plan, solicit, and serve a continuous flow of food to all participants for the duration of the 26.2-hour event.
              <br>
              <h4><b>Overall Director</b></h4>
              Maddy Lee
              <!--<br>
              <h4><b>Assistant Director of Hospitality Events</b></h4>
              Scarlett Thorne
              <h4><b>Assistant Director of Hospitality Nights</b></h4>
              Madison Lee
              <h4><b>Assistant Director of Stewardship</b></h4>
              Elizabeth Thompson
   <h4>  <b>Captains</b></h4>
   <table style="width:100%">
                <tbody class="hospitality"> </tbody>
              </table> -->


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q8">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a8" aria-expanded="false" aria-controls="a8">Leadership Development</a>
            </h4>
          </div>
          <div id="a8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q8">
            <div class="panel-body">
              <b> The Leadership Development Team </b> is responsible for overseeing and running the Emerging Leaders Program. As a part of this, Captains will work to cultivate the leadership skills of the newfound members of our Dance Marathon Family. This team will focus on developing and integrating students with minimal previous Dance Marathon experience through tangible exposure to Dance Marathon’s various leadership roles. Captains are responsible for attending general body meetings that will include prominent speakers from the Gainesville community, while simultaneously leading small group meetings with a curriculum that will focus on progressing Emerging Leader’s roles within Dance Marathon at the University of Florida.
              <br>
              <h4><b>Overall Director</b></h4>
              Michelle Podolnyy
              <!-- <br></br>
              <h4><b>Assistant Director of Emerging Leader Development</b></h4>
              Connor Wax
              <h4><b>Assistant Director of Emerging Leader Engagement</b></h4>
              Ashley Smokonich
              <h4><b>Assistant Director of Emerging Leader Outreach</b></h4>
              Michelle Podolnyy
              <h4><b>Assistant Director of Emerging Leader Tracking</b></h4>
              Lauren Spataro
      <h4>  <b> Captains</b></h4>
      <table style="width:100%">
                <tbody class="leadershipdevelopment"> </tbody>
              </table> -->


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q9">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a9" aria-expanded="false" aria-controls="a9">Marathon Relations North</a>
            </h4>
          </div>
          <div id="a9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q9">
            <div class="panel-body">
              <br>
              <h4><b>Overall Director</b></h4>
              Mady Benton
              <!-- <b> The Marathon Relations Team </b> is responsible for advising and growing Dance Marathon at UF’s high school programs, Mini Marathons. They energize and support our “Minis” by educating students on Children’s Miracle Network and Dance Marathon at UF’s history and culture. Captains focus on strengthening relationships with high schools around the state, by helping them plan and implement their own Mini Marathons. Most importantly, the Marathon Relations team attends all of our Mini Marathons, as well as hosts our partnering high school programs during Dance Marathon at the University of Florida. Captains will be responsible for at least one school which they will work with all year in order to ensure that school’s success.
              <br></br>
              <h4><b>Assistant Director of New and Emerging Programs</b></h4>
              Sheri Kusatzky
              <h4><b>Assistant Director of Northern Region</b></h4>
              Madalyn Benton
              <h4><b>Assistant Director of Southern Region</b></h4>
              Kayla Anschuetz
	          <h4><b>Assistant Director of Special Projects and Communication</b></h4>
              Alexis Pollak
       <h4>  <b>Captains </b></h4>
       <table style="width:100%">
                <tbody class="marathonrelations"> </tbody>
              </table> -->

            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q9">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a10" aria-expanded="false" aria-controls="a10">Marathon Relations South</a>
            </h4>
          </div>
          <div id="a10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q10">
            <div class="panel-body">
              <br>
              <h4><b>Overall Director</b></h4>
              Alexis Pollak
              <!-- <b> The Marathon Relations Team </b> is responsible for advising and growing Dance Marathon at UF’s high school programs, Mini Marathons. They energize and support our “Minis” by educating students on Children’s Miracle Network and Dance Marathon at UF’s history and culture. Captains focus on strengthening relationships with high schools around the state, by helping them plan and implement their own Mini Marathons. Most importantly, the Marathon Relations team attends all of our Mini Marathons, as well as hosts our partnering high school programs during Dance Marathon at the University of Florida. Captains will be responsible for at least one school which they will work with all year in order to ensure that school’s success.
              <br></br>
              <h4><b>Assistant Director of New and Emerging Programs</b></h4>
              Sheri Kusatzky
              <h4><b>Assistant Director of Northern Region</b></h4>
              Madalyn Benton
              <h4><b>Assistant Director of Southern Region</b></h4>
              Kayla Anschuetz
	          <h4><b>Assistant Director of Special Projects and Communication</b></h4>
              Alexis Pollak
       <h4>  <b>Captains </b></h4>
       <table style="width:100%">
                <tbody class="marathonrelations"> </tbody>
              </table> -->

            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q11">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a11" aria-expanded="false" aria-controls="a11">Merchandise</a>
            </h4>
          </div>
          <div id="a11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q11">
            <div class="panel-body">
              <b> The Merchandise Team </b> is responsible for all Dance Marathon at the University of Florida merchandise and stores. Throughout the year, Captains focus on creating an official product offering for DM at UF apparel and accessories. Captains are responsible for running the DM store at Turlington every Wednesday, at community events, mini marathons, and online. Additional responsibilities include: Facilitating pre-orders with delegates and organizations, inventory tracking, organizing check-in and event shirt orders, and keeping track of incentive items as well as passing them out. Pre-event, Captains manage the online store and fulfill orders as well as order and stuff Dancer Bags. In-event, Captains manage the store as well as the incentive table.
              <br>
              <h4><b>Overall Director</b></h4>
              Bryson Keel
              <!-- <br></br>
              <h4><b>Assistant Director of Incentive Merchandise</b></h4>
              Sajid Jafferjee
              <h4><b>Assistant Director of Inventory</b></h4>
              Emily McGaughy
              <h4><b>Assistant Director of Mini Marathons</b></h4>
              Bryson Keel
			  <h4><b>Assistant Director of Orders</b></h4>
              Taylor Tribuiani

       <h4>  <b>Captains</b></h4>
       <table style="width:100%">
                <tbody class="merch"> </tbody>
              </table> -->


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q12">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a12" aria-expanded="false" aria-controls="a12">Morale</a>
            </h4>
          </div>
          <div id="a12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q12">
            <div class="panel-body">
              <b> The Morale Team </b> is responsible for keeping the spirit of Dance Marathon energetic, positive, and meaningful throughout the entire year, prior to and during the 26.2-hour event. They do this through engaging with students and the UF community, hosting Fall and Spring fundraisers, attending both Dance Marathon and UF-related events, interacting with high school students at Mini Marathons, and much more. They constantly work to uplift, inspire, and encourage every member of the DM at UF community. In addition, Morale is in charge of creating, planning, and executing “Theme Hours,” which are unique hours during the big Event that include costumes and activities to entertain the Dancers. Finally, Morale Captains create the revered Linedance, which uplifts and connects every person at the 26.2-hour event. Morale then teaches and demonstrates the Linedance at the Event and throughout the year. 
              <br>
              <h4><b>Overall Director</b></h4>
              Anna Fitzpatrick
              <!-- <br>
              <h4><b>Assistant Director of Captain Relations</b></h4>
              Sammie Saunders
			  <h4><b>Assistant Director of Fundraising</b></h4>
              Anna Fitzpatrick
              <h4><b>Assistant Director of Mini Marathon Coordination</b></h4>
              Alex Sikoryak
      <h4>  <b> Captains</b></h4>
      <table style="width:100%">
                <tbody class="morale"> </tbody>
              </table> -->


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q14">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a14" aria-expanded="false" aria-controls="a14">Multimedia</a>
            </h4>
          </div>
          <div id="a14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q14">
            <div class="panel-body">
              <b> The Multimedia Team </b> is responsible for videography and photography throughout the year and during the Event, working together to create a visually appealing representation of the organization and its cause. The Captains edit, sort, and upload videos and photos regularly for them to be shown on Facebook, Instagram, and YouTube, respectively. In order to capture and upload this media, Captains are responsible for acquiring the needed equipment for all filming and photography, including all software involved for editing videos and photos such as Lightroom and Premiere Pro. In addition, Captains are preferred to have experience with photography, video filming, and video editing. During the 26.2-hour event, Captains take photos and videos and contribute to the Facebook, Instagram, and YouTube channel.
              <br>
              <h4><b>Overall Director</b></h4>
              Paige Davis
              <!-- <br>
              <h4><b>Assistant Director of Logistics</b></h4>
              Gabriella Paul
              <h4><b>Assistant Director of Photography</b></h4>
              Mary Grace Paris
              <h4><b>Assistant Director of Social Media</b></h4>
              Paige Davis
              <h4><b>Assistant Director of Videography</b></h4>
              Erica Criss
    <h4>  <b>Captains</b></h4>
    <table style="width:100%">
                <tbody class="multimedia"> </tbody>
              </table> -->


            </div>
          </div>
        </div>

           <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q15">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a15" aria-expanded="false" aria-controls="a15">Productions</a>
              </h4>
            </div>
            <div id="a15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q15">
              <div class="panel-body">
                <b> The Productions Team </b> is responsible for all logistics and entertainment throughout the year and during the 26.2-hour event. The Productions Team is also in charge of building and organizing the homecoming float, planning and executing campus events (including but not limited to FTK Festival, Warrior Run, FT5K, and FTKickoff), and working with the O’Connell Center to plan all logistics for the main Event. The Productions Team carries out all operational duties in the O’Connell Center, including setting up and striking Theme Hours, organizing security and clean up, and overseeing all entertainment aspects during the 26.2 hours. The Productions Team also assists other teams when necessary with logistics and entertainment necessary for their respective undertakings.
                <br>
                <h4><b>Overall Director</b></h4>
                Jacqueline Lamm
                <!-- <br>
                <h4><b>Assistant Director of Campus Events </b></h4>
                Carl Ty
                <h4><b>Assistant Director of Logistics </b></h4>
                Alex Smock
                <h4><b>Assistant Director of Talent Relations </b></h4>
                Vicky Wajsbrot
<h4>   <b>Captains</b></h4>
<table style="width:100%">
                <tbody class="productions"> </tbody>
              </table> -->


              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q16">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a16" aria-expanded="false" aria-controls="a16">Public Relations</a>
              </h4>
            </div>
            <div id="a16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q16">
              <div class="panel-body">
                <b> The Public Relations Team </b> is responsible for maintaining the external views and public reputation of Dance Marathon at UF. The Captains work year-round to uphold the organization's mission statement, vision and branding. This involves forming relationships with local media sources, creating campaigns to propel the organization’s efforts, and using social media as a communication tool between the organization and the public. Captains use creativity to construct additional campaigns throughout the year, storylines for multimedia videos, innovative ways to extend DM at UF’s reach, and getting the community involved and informed. During the event, Captains are also responsible for escorting media, updating social media platforms, and ensuring the smooth running of the official Livestream.
                <br>
                <h4><b>Overall Director</b></h4>
                Maddy Whalen
                <!-- <h4><b>Assistant Director of Internal Communications </b></h4>
                Samantha Srebnick
                <h4><b>Assistant Director of Media Outreach </b></h4>
                Allison Hellier
                <h4><b>Assistant Director of Publications </b></h4>
                Remi Storch
                <h4><b>Assistant Director of Social Media </b></h4>
                Madison Whalen
     <h4>  <b> Captains</b></h4>
     <table style="width:100%">
                <tbody class="pr"> </tbody>
              </table> -->


              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q17">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a17" aria-expanded="false" aria-controls="a17">Recruitment</a>
              </h4>
            </div>
            <div id="a17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q17">
              <div class="panel-body">
                <b> The Recruitment Team </b> The Recruitment Team is responsible for the recruitment of Dancers, Kirstyn’s Krew, Captains, Emerging Leaders, and Organizations to participate in Dance Marathon at UF. Throughout the year, Captains will give presentations and flyer about our cause to various organizations across campus, working to convey the miracles that Dance Marathon creates, and how each organization can give back to their local Children’s Miracle Network Hospital. Recruitment Captains are integral parts of the movement as they inspire and create leaders in our community, all while raising awareness about Dance Marathon and its purpose. Each Recruitment Captain is also in charge of recruiting external organizations who are not currently a part of Dance Marathon, in order to expand our involvement throughout the University of Florida and find ways to support other organizations the way they support us. 
                <br>
                <h4><b>Overall Director</b></h4>
                Rebecca Daniel
                <!-- <br>
                <h4><b>Assistant Director of Campus Relations</b></h4>
                Rebecca Daniel
                <h4><b>Assistant Director of Organization Development</b></h4>
                Gianna Mangino
                <h4><b>Assistant Director of Tracking</b></h4>
                Breen Kiel
           <h4>  <b>Captains</b></h4>
           <table style="width:100%">
                <tbody class="recruitment"> </tbody>
              </table> -->

              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q18">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a18" aria-expanded="false" aria-controls="a18">Sponsorships</a>
              </h4>
            </div>
            <div id="a18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q18">
              <div class="panel-body">
                <b> The Sponsorships Team </b> is charged with soliciting businesses for monetary and in­-kind (item) donations. Through reaching out to businesses, both local and national, Sponsorships Captains will build strong relationships with our Sponsors, utilizing skills of leadership, communication, and stewardship. Captains are also responsible for organizing and working the Silent Auction at Dance Marathon as well as organizing the Miracle Market in the Fall semester.
                <br>
                <h4><b>Overall Director</b></h4>
                Sophie Shapiro
                <!-- <br>
                <h4><b>Assistant Director of In-Kind Donations</b></h4>
                Galina Nelson
                <h4><b>Assistant Director of Internal Relations</b></h4>
                Nicole Russo
                <h4><b>Assistant Director of Stewardship</b></h4>
                Paige Leaming
          <h4>  <b>Captains</b></h4>
          <table style="width:100%">
                <tbody class="sponsorships"> </tbody>
              </table> -->

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
