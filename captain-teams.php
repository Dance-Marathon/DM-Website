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
   var url = "https://sheets.googleapis.com/v4/spreadsheets/" + spreadsheetID + "/values?alt=json";

   var counters = {
     outreach: 0,
     dancerrelations: 0,
     designandtech: 0,
     fundraising: 0,
     hospitality: 0,
     leadershipdevelopment: 0,
     marathonrelationsnorth: 0,
     marathonrelationssouth: 0,
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
   $('.marathonrelationsnorth').append('<tr>');
   $('.marathonrelationssouth').append('<tr>');
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
        if (!($(entry)[1].gsx$marathonrelationsnorth.$t.includes("n/a"))) {
            if(counters["marathonrelationsnorth"] < 3) {
              $('.marathonrelationsnorth').append('<td>' + this.gsx$marathonrelationsnorth.$t + '</td>');
              counters["marathonrelationsnorth"]++;
            } else {
                $('.marathonrelationsnorth').append('</tr>');
                $('.marathonrelationsnorth').append('<tr>');
                $('.marathonrelationsnorth').append('<td>' + this.gsx$marathonrelationsnorth.$t + '</td>');
                counters["marathonrelationsnorth"] = 1;
            }
          }
          if (!($(entry)[1].gsx$marathonrelationssouth.$t.includes("n/a"))) {
            if(counters["marathonrelationssouth"] < 3) {
              $('.marathonrelationssouth').append('<td>' + this.gsx$marathonrelationssouth.$t + '</td>');
              counters["marathonrelationssouth"]++;
            } else {
                $('.marathonrelationssouth').append('</tr>');
                $('.marathonrelationssouth').append('<tr>');
                $('.marathonrelationssouth').append('<td>' + this.gsx$marathonrelationssouth.$t + '</td>');
                counters["marathonrelationssouth"] = 1;
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
   $('.marathonrelationsnorth').append('</tr>');
   $('.marathonrelationssouth').append('</tr>');
   $('.merch').append('</tr>');
   $('.morale').append('</tr>');
   $('.multimedia').append('</tr>');
   $('.productions').append('</tr>');
   $('.pr').append('</tr>');
   $('.recruitment').append('</tr>');
   $('.sponsorships').append('</tr>');
   $('.familyrelations').append('</tr>');

</script>
<style>
.page-heading.parallax.captain-teams {
background-image: url("/assets/images/BannerPhotos21/VeroBeach_SarahXD193.jpg");
}
</style>
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
            <li><a href="/alumni">Alumni</a></li>
            <li><a href="/ambassadors">Ambassadors</a></li>
            <li><a href="/applications">Applications</a></li>
						<li><a class="active">Captain Teams</a></li>
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
      <h3>Captain Teams</h3>
<!--      <p>Emerging Leaders List can be found <a href="/emerging-leaders">here</a></p> -->
     <p>Each Captain Team is composed of an <b>Overall Director</b>, <b>Assistant Directors</b> and <b>Captains</b>. </p>
      <ul>
        <li><b>Assistant Directors</b> are individuals who work yearlong with their respective Overall Directors to ensure steady growth and management within their Captain Team. ADs possess effective skills in responsibility, organization and leadership. The responsibilities of each AD position vary among each Captain Team. Assistant Directors are elected at the end of Spring semester.</li>
        <li><b>Captains</b> are leaders within our organization who have specific duties throughout the year depending on their teams. There are 16 Captain Teams, each having vastly different responsibilities to ensure the growth and promotion of our cause on many different fronts. Captains typically have weekly or biweekly meetings and are a vital part of the Dance Marathon family. Captains applications are released at the beginning of Fall semester. </li>
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
           <b>The Community Outreach Team</b> seeks to grow the Dance Marathon community beyond our student body by sharing our passion and mission to Faculty and Staff, Members’ Families, Dance Marathon Alumni (DMA), and the broader Gainesville community. The servant leaders of this team focus on creating lasting relationships with our Community Partners by engaging in regular volunteering events and planning organization-wide service days, including but not limited to Giving Tuesday. The members of this team connect our Faculty and Staff, Members’ Families, and Dance Marathon Alumni to our yearlong engagements and organize events such as Faculty Appreciation Week, Family Weekend, and DMA Weekend. This team brings together this entire community by planning the annual Miracle Gala, a formal occasion during the main event where we honor outstanding members of the DM community and hold Raise The Paddle.
          <br>
          <h4><b>Overall Director</b></h4>
          Bridget Richer
          <br><br>
                 <h4><b>Assistant Director of Alumni Engagement</b></h4>
                 Madison Woodard
                 <h4><b>	Assistant Director of Community Partnerships</b></h4>
                 Jackson Jeffares
                 <h4><b>Assistant Director of Creative Events</b></h4>
                 Aria Patel
                 <h4><b>Assistant Director of Event Logistics</b></h4>
                 Katherine Borland
               <!--<h4>  <b>Captains</b></h4> -->
               <table style="width:100%">
                <tbody class="outreach">
          </tbody>
              </table>
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
                <b>The Dancer Relations Team</b> is responsible for welcoming and engaging all registered Dancers within our organization. They serve as the liaison between the Dance Marathon organization and the Dancers throughout the year and at the Main Event. Captains are responsible for communicating information about organization-wide events, fundraising campaigns, and general advising about how to earn a Dancer spot. Responsibilities include registering Dancers for our 26.2-hour event, monitoring Dancer participation through Spirit Points, and executing weekly Check-Ins at Turlington. Additionally, Captains are responsible for conducting small meetings with their assigned Dancers, while also assisting in the execution of all-Dancer events. At the Main Event, Dancer Relations Captains operate guest Check-Ins as well as in-event engagement. Most importantly, Captains serve as a point of guidance and support throughout the year for all registered Dancers.
              <br>
              <h4><b>Overall Director</b></h4>
              Lily Batley
              <br><br>
              <h4><b>Assistant Director of Check-Ins</b></h4>
              Marissa Northrop
              <h4><b>Assistant Director of Dancer Engagement</b></h4>
              Nikki Cuomo
              <h4><b>Assistant Director of Internal Relations</b></h4>
              Emily Lupo
	      <h4><b>Assistant Director of External Relations</b></h4>
              Abbey Ladd
              <!--<h4><b>Captains</b></h4> -->
                    
              <table style="width:100%">
                <tbody class="dancerrelations">
                    </tbody>
              </table>

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
               <b>The Design & Technology Team</b> is a collection of graphic designers and software developers responsible for making the Dance Marathon brand come to life. Technology Captains are responsible for either the development/maintenance of the website or mobile applications (iOS and Android), and Design Captains are responsible for the creation of all print/web design needs (e.g. merchandise, social media graphics, newsletters, calendars, etc.). Throughout the year, Captains work together to create high-tech, portfolio-quality materials that showcase Dance Marathon as a professional student-run movement. They are required to attend all DM at UF events and fundraisers, as well as fundraise individually throughout the year. At the event itself, Captains run the Tech Booth, which includes managing multiple screens inside the O’Dome, sending app notifications, coordinating audio/visual feeds, and creating in-event graphics.
              <br>
              <h4><b>Overall Director</b></h4>
              Brianna Barron
              <br><br>
              <h4><b>Assistant Director of Internal Design</b></h4>
              Cameron Appel
		<h4><b>Assistant Director of External Design</b></h4>
              Jordan Corina
              <h4><b>Assistant Director of Technology</b></h4>
              Hailey Paek
              <h4><b>Assistant Director of Internal Affairs</b></h4>
              Anderson Allen
              <!--<h4>  <b> Captains</b></h4> -->
              <table style="width:100%">
                <tbody class="designandtech">
                   </tbody>
              </table>
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
              <b>The Family Relations Team</b> Captains serve as liaisons between the Dance Marathon community and the Miracle Families. Captains are paired with at least one Miracle Family, and their responsibilities include: maintaining consistent contact with their respective Miracle Families, working on the Pen Pal program, and coordinating events between the Miracle Families and participating Organizations through Miracle Child Teams. Captains will attend monthly Family Fun Days in order to connect Miracle Families to the Dance Marathon community. Captains also volunteer at UF Health Shands Children’s Hospital in Pediatric Units 44 and 45. Captains create the family room for the 26.2-hour event and facilitate activities and entertainment for the Miracle Families throughout the entirety of the Event. Captains will build cause connection with the entire Dance Marathon community through fostering relationships between Miracle Families, Captain Teams, Ambassadors, Emerging Leaders, and Dancers.
              <br>
              <h4><b>Overall Director</b></h4>
              Carley Smith
              <br><br>
              <h4><b>Assistant Director of Family Events</b></h4>
              Rachel Nattis
              <h4><b>Assistant Director of Family Outreach</b></h4>
              Isabel Curtis
              <h4><b>Assistant Director of Tracking</b></h4>
              Caroline McMillan
              <h4><b>Assistant Director of Community</b></h4>
              Michael Muhlbach

    <!--<h4>      <b>Captains</b></h4> -->
    <table style="width:100%">
                <tbody class="familyrelations">
                  </tbody>
              </table>

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
            <b>The Fundraising and Organization Development Team</b> is responsible for both the financial oversight of Dance Marathon at UF and the coordination of the Organization Ambassador Program. The Ambassador Program provides student Organizations at UF the opportunity to develop their involvement in Dance Marathon through Ambassadors, who apply and interview to represent their respective Organizations. Each Captain is assigned several Ambassadors to work with throughout the year, acting as the liaison for the Organization to engage members, increase involvement and provide concrete ways they can improve their fundraising capabilities. These Captains play an integral role in the success of Dance Marathon by ensuring that their Ambassadors have updated and accurate information regarding their finance tracking, upcoming events, and deadlines. Organizations rely on these Captains to help maneuver the year, and lead them towards success and growth within Dance Marathon at UF. Captains will lead weekly meetings with their assigned Ambassadors, where they are given important information regarding events and initiatives, and are also expected to coordinate with the Family Relations and Dancer Relations Teams in regard to their Organization(s).
              <br>
              <h4><b>Overall Director</b></h4>
              Kellyn Murphy
              <br><br>
              <h4><b>	Assistant Director of Organization Relations</b></h4>
              Victoria Grande
              <h4><b>Assistant Director of Fundraising Engagement</b></h4>
              Molly Hubbard
              <h4><b>	Assistant Director of Internal Operations</b></h4>
              Dilon Bruncaj
              <h4><b>Assistant Director of External Operations</b></h4>
              Janel Hernandez
  <!-- <h4>  <b> Captains</b></h4> -->
   <table style="width:100%">
                <tbody class="fundraising">
                </tbody>
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
              <b>The Hospitality Team</b> works year-round with local restaurants to coordinate monthly Hospitality fundraising nights for Dance Marathon. Captains spend a large portion of the year reaching out to large food corporations and local restaurants in the Gainesville area to coordinate donations and corporate sponsorships. Hospitality is responsible for all food-related needs for the 26.2-hour main event and all community events throughout the year. Throughout the year, Captains will help serve food at Dance Marathon events and will check-in attendees of our Hospitality Nights. Hospitality also hosts an annual food-themed event for our Miracle Children, Miracle Kitchen. Captains plan, solicit, and serve a continuous flow of food to all participants for the duration of the 26.2-hour Main Event.
              <br>
              <h4><b>Overall Director</b></h4>
              Gwyneth Bishara
              <br><br>
              <h4><b>Assistant Director of Hospitality Events</b></h4>
              Brooke Freeman
              <h4><b>Assistant Director of Hospitality Nights</b></h4>
              Riley Duffy
              <h4><b>Assistant Director of Stewardship</b></h4>
              Ava Peiser
              <h4><b>Assistant Director of Internal Relations</b></h4>
              Allison Burns
  <!-- <h4>  <b>Captains</b></h4> -->
   <table style="width:100%">
                <tbody class="hospitality">
                  </tbody>
              </table>


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
              <b>The Leadership Development Team</b> is responsible for overseeing and running the Emerging Leaders Program. This team will focus on developing and integrating students with minimal previous Dance Marathon experience into the Dance Marathon community through tangible exposure to Dance Marathon’s various leadership roles. As a part of this Team, Captains will work to cultivate the leadership skills of the newfound members of our Dance Marathon Family. Captains are responsible for not only facilitating and leading their own small group meetings and attending general body meetings, but also tracking, overseeing, and organizing the involvement of the Emerging Leaders in various other Dance Marathon events. During the Main Event, Leadership Development Captains will be responsible for managing and monitoring Emerging Leader’s responsibilities in order to progress Emerging Leader’s roles within Dance Marathon as a whole.
              <br>
              <h4><b>Overall Director</b></h4>
              Amelia Williamson
              <br></br>
              <h4><b>Assistant Director of Development</b></h4>
              Darian Schneider
              <h4><b>Assistant Director of Engagement</b></h4>
              Alex Gruber
              <h4><b>Assistant Director of Outreach</b></h4>
              Emma Kate Joiner
              <h4><b>Assistant Director of Tracking</b></h4>
              Corinna Kuschnitzky
     <!-- <h4>  <b> Captains</b></h4> -->
      <table style="width:100%">
                <tbody class="leadershipdevelopment">
                  </tbody>
              </table>


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
              <b>The Marathon Relations North Team</b> Captains are responsible for advising and growing Dance Marathon at UF’s high school programs: Mini Marathons. Marathon Relations is composed of two teams: Marathon Relations North and Marathon Relations South. They energize and support our “Minis” by educating students on Children’s Miracle Network and Dance Marathon at UF’s history and culture, as well as guiding them through fundraising and community involvement events throughout their school year. They do this by holding weekly meetings with the High Schoolers and communicating with Student Overalls and Advisors on a consistent basis, as well as updating the rest of the team with their progress at weekly Captain meetings. Marathon Relations North Captains focus on strengthening relationships with high schools in Gainesville and Ocala area, by helping them plan and implement their own Mini Marathons. Most importantly, the Marathon Relations North team attends all of our North Mini Marathons, as well as hosts our partnering high school programs during Dance Marathon at the University of Florida. Captains will be responsible for at least one school which they will work closely with all year in order to ensure that school’s success.
              <br>
                <h4><b>Overall Director</b></h4>
                Harper Grabenhorst
                <br><br>
                <h4><b>	Assistant Director of Northern Programs</b></h4>
                Kaylin White
                <h4><b>	Assistant Director of New and Evolving Programs</b></h4>
                Claire Weitz
                <h4><b>	Assistant Director of Finance and Sponsorships</b></h4>
                Ryan Athay
                <h4><b>	Assistant Director of Projects and Communications</b></h4>
                Kayla Zweben


      <!-- <h4>  <b>Captains </b></h4> -->
       <table style="width:100%">
                <tbody class="marathonrelationsnorth">
                  </tbody>
              </table>

            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q10">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a10" aria-expanded="false" aria-controls="a10">Marathon Relations South</a>
            </h4>
          </div>
          <div id="a10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q10">
            <div class="panel-body">
                  <b>The Marathon Relations South Team</b> Captains are responsible for advising and growing Dance Marathon at UF’s high school programs: Mini Marathons. Marathon Relations is composed of two teams: Marathon Relations North and Marathon Relations South. They energize and support our “Minis” by educating students on Children’s Miracle Network and Dance Marathon at UF’s history and culture, as well as guiding them through fundraising and community involvement events throughout their school year. They do this by holding weekly meetings with the High Schoolers and communicating with Student Overalls and Advisors on a consistent basis, as well as updating the rest of the team with their progress at weekly Captain meetings. Marathon Relations South Captains focus on strengthening relationships with high schools in the southern region, by helping them plan and implement their own Mini Marathons. Most importantly, the Marathon Relations South team attends all of our South Mini Marathons, as well as hosts our partnering high school programs during Dance Marathon at the University of Florida. Captains will be responsible for at least one school which they will work closely with all year in order to ensure that school’s success.
              <br>
                <h4><b>Overall Director</b></h4>
                Rebecca Brennan
                <br><br>
               <h4><b>	Assistant Director of Southern Programs</b></h4>
                Toni JeBailey
                <h4><b>	Assistant Director of New and Evolving Programs</b></h4>
                Jackie Aloumanis
                <h4><b>	Assistant Director of Finance and Sponsorships</b></h4>
                Abigail Crawford
                <h4><b>	Assistant Director of Projects and Communications</b></h4>
                Mary Reagan Phillips

              <br>
       <!-- <h4>  <b>Captains </b></h4> -->
       <table style="width:100%">
                <tbody class="marathonrelationssouth">
                      </tbody>
              </table>

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
              <b>The Merchandise Team</b> is responsible for all official Dance Marathon at the University of Florida merchandise and fundraising incentives. Throughout the year, Captains focus on creating an official product offering for DM at UF apparel and accessories. Captains are responsible for running the DM store at Turlington every Wednesday, at community events, Mini Marathons, and online. Additional responsibilities include: facilitating orders with Ambassadors and organizations on campus, inventory tracking, organizing Check-in and Event shirt orders, passing out incentive items, and internally fundraising. Before the event, Captains manage the online store, help finalize merchandise designs, and fulfill orders. In-event, Captains will work at the merchandise store and incentive booth to pass out products to the Dance Marathon community.
              <br>
              <h4><b>Overall Director</b></h4>
              McKinley Elson
              <br></br>
             <h4><b>Assistant Director of Inventory and Incentives</b></h4>
              Jackie Snytte
              <h4><b>	Assistant Director of Fundraising</b></h4>
              Bryce Brandfon
              <h4><b>Assistant Director of Internal Operations</b></h4>
              Kalie Wright
              <h4><b>Assistant Director of Stores</b></h4>
              Emily Gill

       <!-- <h4>  <b>Captains</b></h4> -->
       <table style="width:100%">
                <tbody class="merch">
                  </tbody>
              </table>


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
                <b>The Morale Team</b> is responsible for keeping the spirit of Dance Marathon energetic, positive, and meaningful throughout the entire year, prior to and during the 26.2-hour event. Captains do this by engaging with students and the UF community, hosting Fall and Spring fundraisers, attending both Dance Marathon and UF-related events, interacting with high school students at Mini Marathons, and much more. Morale Captains bring the Dance Marathon spirit to campus all year. They constantly work to uplift, inspire, and encourage every member of the DM at UF community. In addition, Morale is in charge of creating, planning, and executing “Theme Hours,” which are unique hours during the Main Event that include costumes and activities to entertain the Dancers. Finally, Morale Captains create the Linedance, which uplifts and connects every person at the 26.2-hour event. Morale then teaches and demonstrates the Linedance at the Event and throughout the year.
              <br>
              <h4><b>Overall Director</b></h4>
              Victoria Leary
              <br><br>
              <h4><b>Assistant Director of Captain Relations</b></h4>
              Sydney Fialkow
			        <h4><b>Assistant Director of Fundraising</b></h4>
              Seth Kahler
              <h4><b>Assistant Director of Mini Marathon Coordination</b></h4>
              Julia Cesare
              <h4><b>	Assistant Director of Event Planning</b></h4>
              Kat Polaski
     <!--  <h4>  <b> Captains</b></h4> -->
      <table style="width:100%">
                <tbody class="morale">
                    </tbody>
              </table>


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
                <b>The Multimedia Team</b> is responsible for all Dance Marathon at UF photography and videography throughout the year and during the Event. The main goal of the Team is to capture content that represents DM at UF and its cause. The Captains are expected to promptly edit, sort, and upload their photos and videos to update our organization’s Facebook, Instagram, YouTube, and other social media platforms. Furthermore, Captains are responsible for acquiring the camera equipment and software needed, including Adobe Lightroom and Premiere Pro. In addition, Captains are expected to attend all DM at UF events, including at least three Mini Marathons. Captains should have experience and interest in photography and/or videography, editing experience, and be willing and motivated to grow in their craft throughout the year. During the 26.2-hour Event, Captains take photos and videos to contribute to the social media.
              <br>
              <h4><b>Overall Director</b></h4>
              Marlee Wittner
              <br><br>
              <h4><b>Assistant Director of Logistics</b></h4>
              Madison Murray
              <h4><b>Assistant Director of Photography</b></h4>
              Natalie Tajeddine
              <h4><b>Assistant Director of Social Media</b></h4>
              Anna Glass
              <h4><b>Assistant Director of Videography</b></h4>
              Braden Romano
    <!-- <h4>  <b>Captains</b></h4> -->
    <table style="width:100%">
                <tbody class="multimedia">
                    </tbody>
              </table>


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
                    <b>The Productions Team</b> is responsible for all logistics and entertainment throughout the year and during the 26.2-hour Event. The Productions Team is also in charge of building and organizing the homecoming float, planning and executing campus events (including but not limited to Captain Events in Fall and Spring, and Kickoff Event, Transform Today and Miracles In Color 5K,), coordinating Main Event logistics such as set up and strike planning, helping Morale with the planning and execution of Theme Hours, and booking all entertainment for all events. The Productions Team carries out all operational duties in the O’Connell Center, including setting up and striking Theme Hours, organizing event security and clean up, and overseeing all entertainment aspects during the 26.2 hours. The Productions Team also assists other teams when necessary with logistics and entertainment necessary for their respective undertakings.
                <br>
                <h4><b>Overall Director</b></h4>
                Kathryn Taylor
                <br><br>
                <h4><b>Assistant Director of External Logistics </b></h4>
                David Brennan
                <h4><b>Assistant Director of Internal Logistics </b></h4>
                Dylan Goodelle
                <h4><b>Assistant Director of Talent Relations </b></h4>
                Samantha Flyer
          <!--    <h4>   <b>Captains</b></h4> -->
              <table style="width:100%">
                <tbody class="productions">
                        </tbody>
              </table>


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
                    <b>The Public Relations Team</b> is responsible for maintaining the external views and public reputation of Dance Marathon at UF. In addition to fundraising, the PR Captains work year-round to uphold the organization’s mission statement, vision, and branding. This involves forming relationships with local media sources, writing blogs to share our Miracle Children’s stories, and using social media (Instagram, Twitter, Facebook, Spotify/Anchor and TikTok) to connect and engage with the public. Captains use creativity to construct campaigns throughout the year, write storylines for Multimedia videos, and develop innovative ways to extend DM at UF’s reach and keep the community involved and informed. During the Main Event, Captains are also responsible for escorting the media, updating social media platforms and fundraising-incentive walls, and ensuring the smooth running of the official Livestream.
                <br>
                <h4><b>Overall Director</b></h4>
                Molly Metcalf
                <br><br>
                <h4><b>Assistant Director of Communications </b></h4>
                Carlee Hontz
                <h4><b>Assistant Director of Publications </b></h4>
                Ashley Hearn
                <h4><b>Assistant Director of Social Media </b></h4>
                Jamie Knox
<h4><b>Assistant Director of Media Outreach </b></h4>
                Karina Wilson
     <!--<h4>  <b> Captains</b></h4> -->
     <table style="width:100%">
                <tbody class="pr">
                        </tbody>
              </table>


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
                    <b>The Recruitment Team</b> is responsible for the recruitment of Dancers, Kirstyn’s Krew, Captains, Emerging Leaders, and Organizations to participate in Dance Marathon at UF. Throughout the year, Captains will work with and give presentations to various external organizations - those who are not currently a part of Dance Marathon - in order to expand our involvement throughout the University of Florida. The team works to find ways to support other organizations the way they support us. Captains will also flyer about our cause across campus, working to convey the miracles that Dance Marathon creates and how each student can give back to their local Children’s Miracle Network Hospital. During the main event, Captains will lead tours for visitors of various organizations and families to show the culmination of the year’s work. Each Recruitment Captain will additionally have a hand in the organization and leadership of the Gator Aides, our large group of individually registered Dancers. Recruitment Captains are integral parts of the movement as they inspire and create leaders in our community, all while raising awareness about Dance Marathon and its purpose.
                <br>
                <h4><b>Overall Director</b></h4>
                Brandon White
                <br><br>
                <h4><b>Assistant Director of Campus Relations</b></h4>
                Mary Kate Arbuckle
                <h4><b>Assistant Director of Faculty Relations</b></h4>
                Taryn Smith
                <h4><b>Assistant Director of Tracking</b></h4>
                Anna-Sophia "Sophie" Hadley
         <!--  <h4>  <b>Captains</b></h4> -->
           <table style="width:100%">
                <tbody class="recruitment">
                        </tbody>
              </table>

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
                <b>The Sponsorships Team</b> is charged with soliciting businesses for monetary and in­-kind (item) donations. Through our year-long efforts of reaching out to businesses, both local and national, Sponsorships Captains will build strong relationships with our Sponsors, utilizing skills of leadership, communication, and stewardship. Captains are also responsible for organizing and working the Silent Auction at the Main Event as well as organizing Miracle Market in the Spring semester. Throughout the year, Captains are expected to attend other Captain Team's events and assist when needed. The Sponsorships team utilizes relationships with partners to secure locations to "can" throughout the year.
                <br>
                <h4><b>Overall Director</b></h4>
                Alexa Katz
                <br><br>
                <h4><b>	Assistant Director of Logistics</b></h4>
                Sophia Marne
                <h4><b>Assistant Director of Outreach</b></h4>
                Alexandra Patrascoiu
                <h4><b>Assistant Director of Stewardship</b></h4>
                Kate Gaucher
        <!--  <h4>  <b>Captains</b></h4> -->
          <table style="width:100%">
                <tbody class="sponsorships">
                    </tbody>
              </table>

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
