<?php
    $status = "open";
    $GLOBALS['page_title'] = 'Students | Dance Marathon at UF';
    $GLOBALS['parent'] = 'get-involved';
    include("includes/head.php");
    include("includes/navbar.php");
?>
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
        background-image: url("/assets/images/BannerPhotos21/Get involed (1).jpg");
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
}
</style>
<div class="page-heading parallax events">
  <div class="inner-wrapper">
      <div class="container">
        <div class="row">
              <div class="col-md-12">
                <h1>Get Involved</h1>
              </div>
        </div>
      </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        
<?php if ($status == "open") { ?>
    <p>Take a look at all of the different ways you can get involved with Dance Marathon at UF. Whether you are interested in becoming a Captain, Dancer, Emerging Leader, Ambassador, Fundraiser, or member of Kirstyn’s Krew, this page is your path to getting involved! There are so many ways to give back through DM at UF, and we would love for you to join our Dance Marathon family and help us make miracles.</p>
                    <!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="q1">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#a1" aria-expanded="false" aria-controls="a1">Welcome</a>
                                </h4>
                            </div>
                            <div id="a1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q1">
                                <div class="panel-body">
                                    <h4>Letter from Drew/Joey/Rachel</h4>
                                 <table style="width:100%">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="q1">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#a1" aria-expanded="true" aria-controls="a1"></a>
                                </h4>
                            </div>
                            <div id="a1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="q1">
                                <div class="panel-body">
                                    <h4>Register To Fundraise</h4>
                                    Registering to fundraise is the first step to joining the Dance Marathon movement. Creating a fundraising page is quick and easy! Go to the Register to Fundraise page for instructions on how to sign up.
     
     
                                    <h4>Get Involved with the Dance Marathon Family</h4>
                                    <p>If you would like to get involved with our organization, check out the list of positions below!</p>
     
                                           <ul><a href="/organizations"><b>Organization:</b></a>     Student Organizations work year-round to support our cause.</ul>
                         <ul><a href="/dancers"><b>Dancer:</b></a> Dancers stand on their feet if able for the duration of our Main Event in April to raise funds and awareness for UF Health Shands Children’s Hospital.</ul>
                                             <ul><a href="/emerging-leaders"><b>Emerging Leader:</b> </a> Members of our Emerging Leaders Program work alongside the Recruitment Team, providing support to Captain Teams and brainstorming new ideas to ensure a successful future for our organization.</ul>
                         <ul><a href="/captain-teams"><b>Captain:</b> </a> Captains belong to 1 of 16 teams and take on yearlong responsibilities specific to their respective teams, with the goal of supporting and promoting our organization.</ul>
                         <ul><a href="/captain-teams"><b>Assistant Directors:</b> </a> Individuals who work all year with their respective Overall Directors to ensure steady growth and management within their Captain Teams.</ul>
                         <ul><a href="/meet-the-overalls"><b>Overall Directors:</b> </a> The 21 individuals who lead Dance Marathon efforts throughout the year. They are responsible for leading their respective Captain Teams to oversee, expand, and promote our organization.</ul>
     
                                 <table style="width:100%">
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
     
     
                 </div>
                             <p> <b>Want to know more about DM?</b> Submit your information<a href="https://docs.google.com/forms/d/e/1FAIpQLSc1mXWGc9rfL4GL6375p7HDqFhBrqa_GNQENMN9gS-l4tCwdw/viewform"> here</a> and we will reach out to you!</p>

        <?php } else { echo 'This page is currently closed.'; } ?>
    </div>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'alum')">ALUMNI</button>
        <button class="tablinks" onclick="openCity(event, 'apps')">APPLICATIONS</button>
        <button class="tablinks" onclick="openCity(event, 'ambassadors')">AMBASSADORS</button>
        <button class="tablinks" onclick="openCity(event, 'miricle')">CAPTAIN TEAMS</button>
        <button class="tablinks" onclick="openCity(event, 'elp')">EMERGING LEADERS</button>
    </div>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'dancers')">DANCERS</button>
        <button class="tablinks" onclick="openCity(event, 'kirstyn')">KIRSTYN'S KREW</button>
        <button class="tablinks" onclick="openCity(event, 'orgs')">ORGANIZATIONS</button>
        <button class="tablinks" onclick="openCity(event, 'service')">SERVICE</button>
    </div>
    
<div id="alum" class="tabcontent">
<div class="subtab">
    <button class="tablinks-subtab" onclick="openSubTab(event, 'alumni')">ABOUT THE DM ALUMNI</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'dma')">MEET THE DMA BOARD</button>
</div>
<div id="alumni" class="tabcontent-subtab">
<h3>About</h3>

<p>Since 1995, Dance Marathon at UF has raised over $26 million for UF Health Shands Children's Hospital, our local Children’s Miracle Network Hospital. Thanks to your dedication and support throughout your college years, we have become the most successful student-run philanthropy in the southeastern United States.</p>
<p>Dance Marathon at UF knows that the Gator Nation is everywhere. Formed in 2013, Dance Marathon at UF Alumni gives alumni across the country the opportunity to continue to give back and stay involved with their alma mater. Membership is only $40 per year and offers a variety of benefits.</p>

            <h3>Get Involved!</h3>
            <!-- This should work -->
            <p>Our Dance Marathon at UF Alumni continue to support our cause and spread our movement, even after they graduate.  Join the DMA and stay a member of DM at UF for years to come with exclusive alumni access at the event and the opportunity to continue your involvement beyond your years at UF. <br><a href=https://dmatuf.page.link/lifetime>Become a member today!</a></p>
            <p>Follow us on <a href=https://www.instagram.com/dmatufalumni>Instagram</a>, and be sure to like the official page for <a href=https://www.facebook.com/dmatufalumni>Dance Marathon at UF Alumni on Facebook</a> to stay connected with the rest of your DM at UF Alumni family.</p>


          <h3>Lifetime DMA Membership</h3>
            <p>This lifetime membership provides the following benefits for a one-time fee of $40. If you are signing up for the DMA for the first time, you will receive a complimentary Event Package outlined underneath the membership benefits. Purchase the Lifetime DMA Miracle Membership <a href=https://dance-marathon-at-uf-510104.square.site/product/2022-dance-marathon-alumni-lifetime-membership/1?cs=true&cst=custom> here </a>. <p> </p>
                
            <div></div>
        <!--    <p>Within the Lifetime DMA Membership, there are <b><u>two</u></b> membership options:</p>
            <div></div>
          <h4><i style="color:#f79b63;"><b>(1) Miracle Membership</b></i></h4>
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
        <h4><i style="color:#617ba6;"><b>(2) Legacy Membership</b></i></h4>
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
                <p><b style="color:#f79b63;">Event Package:</b></p>
                <ul>
                    <p>DMA members can purchase an exclusive event package to enhance their experience during the Dance Marathon weekend in spring. This package is ideal for those who plan to attend Dance Marathon at UF and can be purchased for $40 up to one month before the event. If this is your first year signing up for the DMA, you will automatically receive a complimentary Event Package included in your Lifetime Miracle Membership. Purchase the DMA Event Package <a href=https://dance-marathon-at-uf-510104.square.site/product/2022-dance-marathon-alumni-lifetime-membership/1?cs=true&cst=custom> here</a>.</p>
                    <p><b style="color:#f79b63;">The Event Package includes:</b></p>
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
        <p>1. As a <b style="color:#f79b63;">Miracle Member</b> of the DMA, you will have the benefit to maintain this status for life. You may elect to upgrade your membership to the new <b style="color:#617ba6;">Legacy Membership</b> as outlined below.</p>
        <p>2. Any returning member, whose current membership lapses, will automatically move into the <b style="color:#f79b63;">Miracle Membership</b> status. These members may upgrade to the new <b style="color:#617ba6;">Legacy Membership</b> at any time throughout the year, up until one month before Dance Marathon weekend. </p>
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
</div>

<div id="dma" class="tabcontent-subtab">
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
<!--<div id="ambassadors" class="tabcontent-subtab zone">
<img src="/assets/images/hsdm/zoningpg1.png" width="697" height="889" title="zoningpg1" alt="zoningpg1" />

        </div>-->
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
<div id="apps" class="tabcontent">
<h3>Applications </h3>
<br>Thank you for your interest in Dance Marathon at the University of Florida 2023.</br>
<br>The online application forms are linked below. In order to be considered for a a Captain, ELP, or Ambassador position, you must:,</br>
<ul>
   <li>Complete the online application form</li>
   <li>Create a DonorDrive personal fundraising page</li>
   <li>Pay the $25 application fee. You only need to pay the application fee <b>once</b> even if you are applying for more than one position. Instructions on how to complete both of these items can be found on the front page of either application.</li>
</ul>
<br> You can apply for both the Emerging Leaders Program and for Captain Teams. However, your Captain Application will take priority over your Emerging Leader Application. To be eligible to be an Ambassador, you <b>can not</b> hold another position as well. </br>
   
<br>
</br>
   
<b>Manager Application</b> Now Closed</p>
<!-- Click <a href="Documents/2022 Manager Application.pdf" target="_blank">here</a> to view the 2022 Manager Application</p>-->
<b>Overall Director Application</b> Now Closed </p>
<!--Click <a href="Documents/2022 Overall Director Application.pdf" target="_blank">here</a> to view the 2022 Overall Director Application</p>-->
<!-- You can apply for both the Emerging Leaders Program and for Captain Teams. However, your Captain Application will take priority over your Emerging Leader Application. You can apply to be an Ambassador even if you hold another position, and you will be able to do both.</p> -->
<b>Assistant Director Applications</b> Now Closed </p>
<b>Captain Application</b> Now Closed </p>
<!--    The Captain Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_ey6G1kOFYWmcrTo" target="_blank">here</a>. We highly recommend completing your Application in a document and transferring it to Qualtrics when you’re ready to submit. This application will close at <b/>11:59 PM EST on Friday, September 3</b>.
<p>A PDF of all Captain Application questions can be found <a href="assets/PDFs/ApplicationQuestions.pdf" target="_blank">here</a>.</p>
-->
<b>Emerging Leaders Application</b> Now Closed </p>
<!--    <p>The Emerging Leaders Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_0vzpwH8jOnh0YRw" target="_blank">here</a>. This application will close at <b>11:59 PM EST on Thursday, September 9</b>.</p> -->
<b>Ambassador Application</b> Now Closed </p>
<p></p>
<p>If you have any questions regarding applications, please reach out to our Operations Manager, Zach Zelenak, at <a href="mailto:zzelenak@floridadm.org">zzelenak@floridadm.org</a>.</p>
                    
</div>

    <div id="ambassadors" class="tabcontent">

    <div class="subtab">
        <button class="tablinks-subtab" onclick="openSubTab(event, 'become')">BECOME AN AMBASSADOR</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, 'start')">STARTING A TEAM</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, '22amb')">2022 AMBASSADORS</button>
    </div>
    <div id="become" class="tabcontent-subtab">
<h3>What is an Ambassador?</h3>
<p>Organization Ambassadors serve as a liaison between Dance Marathon and their respective organization.</p>

<p>Organization Ambassadors will attend weekly meetings to receive information to relay to their Organizations and to work on professional and personal development. These meetings will allow Ambassadors to think creatively and brainstorm together to create new ways to incentivize and engage their members in Dance Marathon. Each Organization will be assigned a Fundraising & Organization Development Captain to work with on Organization involvement and fundraising throughout the year.<P>

Click <a href="assets/PDFs/Ambassador Guidelines 2021.pdf" target="_blank">here</a> to view the 2022 Ambassador Guidelines</p>

  <h3>Responsibilities:</h3>
  <ul>
    <li>Recruit and motivate members of their Organization to fundraise and participate</li>
    <li>Encourage members to get involved with Dance Marathon</li>
    <li>Inform all Organization members of events, registration dates, fundraising incentives, etc.</li>
    <li>Work with the Family Relations Team to engage with their respective Miracle Family throughout the year</li>
    <li>Host a minimum of one Hospitality Night or fundraising event</li>
    <li>Be in attendance at various Dance Marathon events during the year (i.e. Miracles in Color 5K, Moralloween, Miracle Family Events, etc.)</li>
  </ul>


  <h3>Responsibilities during the Main Event:</h3>
  <ul>
    <li>Help assign Dancer buddies prior to the Event for each Dancer</li>
    <li>Work with their Fundraising and Organization Development Captain to encourage and help Dancers fundraise at the Event</li>
    <li>Relay important information to Dancers throughout the Event</li>
    <li>Be available for Dancers in case of emergency</li>
  </ul>

  <p class="alert alert-info">Ambassadors are also encouraged to be Dancers if they choose and are eligible for free Dancer Registration upon meeting expectations of the program.</p>
    </div>

    <div id="start" class="tabcontent-subtab">
<p>To participate as an Organization in Dance Marathon, you must register your team each year. First, check to make sure your team is not already registered. To register a new team, please complete the following steps:</p>
<ol>
<li>Go to floridadm.org and click “Donate.”</li>
<li>Scroll down and click “Register Now.”</li>
<li>Input your information and create a new Organization.</li>
<li>Fill out the proceeding information for your team and once your team has been registered, your members can join your team by following the steps and joining your existing Organization team.</li>
</ol>
<p>Each team will need an Ambassador to represent them. Please email the Fundraising & Organizational Development Overall, Clayton Gaulding, at <a href=mailto:cgaulding@floridadm.org>cgaulding@floridadm.org</a> to inform him you have created a team and will be serving as the Ambassador or have plans of selecting an Ambassador in the near future. The Fundraising & Organizational Development Overall will not be able to get in contact with you unless you email him to let him know you started a team.</p>
          </div>
    </div>
    <div id="22amb" class="tabcontent-subtab zone">
<p></p>
<p></p>
<h3>2023 Ambassadors</h3>
           <p>    </p>
                
                
          <table style="width:100%; table-layout: fixed">
            <tbody>
              <tr>
                <tr>
                <td style="vertical-align:top"><b>Alpha Chi Omega</b><br>Louisina Morancy<br>Hailey Hood</td>
<td style="vertical-align:top"><b>Gamma Eta</b><br>Angelyn Castano Caicedo</td>
    <td style="vertical-align:top"><b>Sigma Chi</b><br>Brogan Tagman<br>William Galleher</td></tr>
                
                              
<tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Delta Pi</b><br>Lola Accardi<br></td>
                <td style="vertical-align:top"><b>Gamma Phi Beta</b><br>Alexis Pullos<br>Lauren Klein</td>
<td style="vertical-align:top"><b>Sigma Kappa</b><br>Danielle DePaul</td></tr>
                
              
<tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Epsilon Phi</b><br>Maggie Goldenberg<br>Sophie Gaer</td>
                <td style="vertical-align:top"><b>Gator Diplomats</b><br>Andrew Han</td>
         <td style="vertical-align:top"><b>Sigma Nu</b><br>Zachary Terwilliger </td></tr>
                             
<tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Epsilon Pi</b><br>Joshua Levin<br>Jason Snytte<br></td>
<td style="vertical-align:top"><b>Hispanic Student Association</b><br>Paula Gonzalez</td>
                <td style="vertical-align:top"><b>Sigma Phi Epsilon</b><br>Benjamin Lang<br>Liam Farrell</td></tr>
                
 <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Gamma Rho</b><br>Cole Verano<br></td>
              <td style="vertical-align:top"><b>Innovation Academy</b><br>Amelia Enciso-Mesa<br>Shreya Shah</td>
<td style="vertical-align:top"><b>Society of Women Engineers</b><br>Elena Rollins<br>Alessandra Andreozzi</td></tr>
    
                                
<tr><td><br></td></tr>
              <tr>
              <td style="vertical-align:top"><b>Alpha Omicron Pi</b><br>Madison Baker<br>Nicole Gigliotti</td>
              
               
             <td style="vertical-align:top"><b>Kappa Alpha Order</b><br>Nolan Carpenter<br>Robert Noble</td>
             
              <td style="vertical-align:top"><b>Tau Kappa Epsilon</b><br>Elijah Freedman</td>
              
               
                
 <tr><td><br></td></tr>
              <tr>
<td style="vertical-align:top"><b>Alpha Phi</b><br>Casey Strauss<br>Kelsey Reader</td>
                <td style="vertical-align:top"><b>Kappa Alpha Theta</b><br>Alexa Diamond</td>
              <td style="vertical-align:top"><b>The Gator Aides</b><br>Arianna Lowther</td>
              
                
                
<tr><td><br></td></tr>
               <tr>
               <td style="vertical-align:top"><b>AMSA</b><br>Taylor Tompkins<br>Hayley Makowski</td>
<td style="vertical-align:top"><b>Kappa Delta</b><br>Kshama Shetty<br>Madeline Browy</td>
<td style="vertical-align:top"><b>Theta Alpha</b><br>Kyla Clewis </td></tr>
              
                
                
                
<tr><td><br></td></tr>
              <tr>
<td style="vertical-align:top"><b>Alpha Tau Omega</b><br>Cameron Alvarez<br>James Wachter</td>
                 <td style="vertical-align:top"><b>Kappa Kappa Gamma</b><br>Ava Jones</td>
             <td style="vertical-align:top"><b>Theta Chi</b><br>Sazzad Mabud</td></tr>
             
                </tr>
                
<tr><td><br></td></tr>
              <tr>
<td style="vertical-align:top"><b>Beta Theta Pi</b><br>Paul Kolsun<br></td>
                
                <td style="vertical-align:top"><b>Kappa Phi Epsilon</b><br>Paul McKenzie<br>Aidan Hall</td>
            <td style="vertical-align:top"><b>Theta Tau</b><br>Rebecca Merwin<br>Katherine Walsh</td></tr>
                               
<tr><td><br></td></tr>
              <tr>
<td style="vertical-align:top"><b>Black Student Union</b><br>Louisina Morancy<br>Desrae Morris</td>
<td style="vertical-align:top"><b>Kappa Sigma</b><br>Nolan Hensley </td>
                <td style="vertical-align:top"><b>UF Honors Program</b><br>Claudia Elena Johnson Cuellar<br></td></tr>
                
                
<tr><td><br></td></tr>
              <tr>
              
<td style="vertical-align:top"><b>Chi Omega</b><br>Riley Rhoden</td>
              <td style="vertical-align:top"><b>Lambda Chi Alpha</b><br>Nickolas Powers<br>
<td style="vertical-align:top"><b>UF Pre-Physician Assistant Association</b><br>Isabella Clem</td>
              
              
              
                
                

<tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Chi Phi</b><br>Jacob Bravo<br>Cole Carpinteri</td>
              <td style="vertical-align:top"><b>Omega Phi Alpha</b><br>Rachel Farmer<br>Kristen Rifenberg</td>
<td style="vertical-align:top"><b>Zeta Beta Tau</b><br>Brendan Kligerman<br>Coby Farhi</td>
                
                              
<tr><td><br></td></tr>
              <tr>
<td style="vertical-align:top"><b>Delta Chi </b><br>Tor Moncrieff<br></td>
                <td style="vertical-align:top"><b>Phi Delta Theta</b><br>Answer Langer <br></td>
             <td style="vertical-align:top"><b>Zeta Tau Alpha</b><br>Caitlin Gregory</td>

              
              
                
               
 <tr><td><br></td></tr>
              <tr>
<td style="vertical-align:top"><b>Delta Delta Delta</b><br>Jennifer Berthy<br>Lainey Shapiro</td>
<td style="vertical-align:top"><b>Phi Eta Sigma Honor Society</b><br>Cade Ferguson</td>
                                                              
<tr><td><br></td></tr>
              <tr>
 <td style="vertical-align:top"><b>Delta Gamma</b><br>Gabriela Torres de Navarra<br>Tyller Bauer</td>
<td style="vertical-align:top"><b>Phi Kappa Tau</b><br>Brian Beckman</td>
                                                              
<tr><td><br></td></tr>
              <tr>
              <td style="vertical-align:top"><b>Delta Nu Zeta</b><br>Kyra Kimball<br>Sparsha Padi</td>
<td style="vertical-align:top"><b>Phi Mu</b><br>Samantha Butler</td>
                
               
                
<tr><td><br></td></tr>
              <tr>
              <td style="vertical-align:top"><b>Delta Phi Epsilon</b><br>Emma Glech<br>Rachel Lerner </td>
 <td style="vertical-align:top"><b>Pi Beta Phi</b><br>Elly Rogers<br>Ashlyn Sullivan</td>
              
              
                             
<tr><td><br></td></tr>
              <tr>
             <td style="vertical-align:top"><b>Delta Sigma Phi</b><br>Jack Ziegler<br>Elijah Bloyer</td>
<td style="vertical-align:top"><b>Pi Lambda Phi</b><br>Daniel Chaiet<br>Daniel Fernandez</td></tr>  </td>
                
                
<tr><td><br></td></tr>
              <tr>
<td style="vertical-align:top"><b>Delta Tau Delta</b><br>Michael Buzzeo</td>
        <td style="vertical-align:top"><b>Pi Kappa Alpha</b><br>Noah Sastoque<br>Kruze Peacock</td>
                    

               
                
                
              
              
<tr><td><br></td></tr>
              <tr>
<td style="vertical-align:top"><b>Delta Zeta </b><br>Brielle Serovich<br>Ariana Martinez</td>
             <td style="vertical-align:top"><b>Pre-Legal Honor Society</b><br>Freedom Scholes</td>

                 </td>
                


                


            </tbody>
        </table>
</div>
</div>
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
    <div id="elp" class="tabcontent">
<h3>Program Description</h3>
<p> <b>The Emerging Leaders Program</b> aims to cultivate the leadership skills of new members of the Dance Marathon community by providing hands-on activities, shadowing opportunities with other captain teams, and education about Dance Marathon at the University of Florida and Children's Miracle Network. The program strives to engage students who have a passion for helping others and who are passionate in our fight for a future without childhood illness.</p>
<p>Members of the Emerging Leaders Program will attend weekly small group meetings and monthly general body meetings. Throughout their small group meetings, Emerging Leaders will focus on completing diverse projects that inspire the Dance Marathon community, expanding their knowledge, leadership, and personal fundraising efforts, and participating in bonding with like-minded peers. At general body meetings, Emerging Leaders will have the opportunity to learn more about the goals and efforts of Dance Marathon, hear inspiring stories from our Miracle Families, and gain exposure to prominent speakers from the University of Florida and the Gainesville community.
<p>During the Main Event, Emerging Leaders will have the ability to use the skills they’ve learned throughout the year to participate in various leadership opportunities as well as enjoy the Main Event from different perspectives.
<!-- <p>All in all, the Emerging Leaders Program aspires to provide students wanting to join the Dance Marathon movement with a unique and immersive learning opportunity that allows students to instill positive change within the organization while also learning about the Dance Marathon community as a whole.</p> -->
<h3>2023 Emerging Leaders</h3>
<!-- <p>The Emerging Leaders Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_3TNT3WCljhDOJLw" target="_blank">here</a>. This application will close at <b>5:00 PM EST on Monday, September 12</b>.</p> -->
             
<table style="width:100%">
    <tbody class="emergingleaders"> </tbody>
 </table>
<table style="width:100%">
<tr>
    <td>    Abhay Tak    </td>
    <td>    Abhay Warren    </td>
    <td>    Adam Crasnow    </td>
    <td>    Aleah Henley    </td>
    <td>    Alexa Gottlieb    </td>
    <td>    Alexa Ziff    </td>
</tr>
 <tr>
     <td>    Alexandra Miller    </td>
     <td>    Alexandria Adler    </td>
     <td>    Alyssa Fennen    </td>
     <td>    Amina Mubarak    </td>
     <td>    Angela Trinh    </td>
     <td>    Angela Kara Hopkinson    </td>
</tr>
<tr>
    <td>    Angelina Fentress </td>
    <td>    Anna Adams    </td>
    <td>    Ashley James    </td>
    <td>    Ava Fore    </td>
    <td>    Ben Stone    </td>
    <td>    Boyd Nelson    </td>
</tr>
<tr>
    <td>    Breanna Macumber</td>
    <td>    Brooke McQuilken    </td>
    <td>    Brooke Morren    </td>
    <td>    Caelan Brindise    </td>
    <td>    Camden Nolde    </td>
    <td>    Camila Mendoza    </td>
</tr>
<tr>
    <td>    Carly Miller    </td>
    <td>    Caroline Schapansky    </td>
    <td>    Catherine Tyler    </td>
    <td>    Cathryn Miles    </td>
    <td>    Cecilia Coleman    </td>
    <td>    Chelsea Boyer    </td>
</tr>
<tr>
    <td>    Cristyl Rodriguez    </td>
    <td>    Daniela Villarreal    </td>
    <td>    Diana Nguyen    </td>
    <td>    Dylan McCarrick    </td>
    <td>    Eleanor Amoriello    </td>
    <td>    Ella Bray    </td>
</tr>
<tr>
    <td>    Ellie Neal    </td>
  <td>    Emily Brundage    </td>
  <td>    Emily Sanz    </td>
  <td>    Emma Helgeson    </td>
  <td>    Emma Sugarman    </td>
  <td>    Faith Giambalvo    </td>
</tr>
<tr>
    <td>    Gabriela Verez    </td>
    <td>    Gabriella Luna    </td>
    <td>    Gabriella Smith    </td>
    <td>    Grace Anderson    </td>
    <td>    Grace Carreno    </td>
    <td>    Grace Krantzberg    </td>
</tr>
<!--<tr>
    <td>    Elise Heidlebaugh    </td>
    <td>    Eliza Greenwald    </td>
    <td>    Ellen Rowland    </td>
    <td>    Emily Valenza    </td>
    <td>    Emma Ackerman    </td>
    <td>    Emma Silverman    </td>
</tr>-->
<tr>
    <td>    Grace Peters    </td>
  <td>    Grace Press    </td>
  <td>    Grant Collins    </td>
  <td>    Gregory Cohen    </td>
  <td>    Gregory Wareham II    </td>
  <td>    Hailea Herrera    </td>
</tr>
<tr>
    <td>    Hailey Petriccione    </td>
  <td>    Haley Jones    </td>
  <td>    Hannah Ross    </td>
  <td>    Harrison Winton    </td>
  <td>    Hilary Taylor    </td>
  <td>    Hollyn O'Brien    </td>
</tr>
<tr>
    <td>    Ian Perry    </td>
    <td>    Inaya Siddiqui    </td>
    <td>    Isabela Perdomo    </td>
    <td>    Isabella Kabacinski    </td>
    <td>    Isabella Sergeant    </td>
    <td>    Isabella Spagnolo    </td>
</tr>
<tr>
    <td>    Isabelle Ballantine    </td>
    <td>    Jack Broseman    </td>
    <td>    Jack Vitchock    </td>
    <td>    Jadelyn Daniels    </td>
    <td>    James Wahl    </td>
    <td>    Janelle Sumbeling    </td>
</tr>
<tr>
    <td>    Jaxon Russell    </td>
  <td>    Jenna Benjamin    </td>
  <td>    Jenna Stanley    </td>
  <td>    Jennifer Gardner    </td>
  <td>    Jeremy Marks    </td>
  <td>    Jessica Borowski    </td>
</tr>
<tr>
    <td>    Joah Levine    </td>
    <td>    Jordan Kier    </td>
    <td>    Jordyn Hannum    </td>
    <td>    Joy Johnson    </td>
    <td>    Juliana Martino    </td>
    <td>    Kaden Powell    </td>
</tr>
<tr>
    <td>    Kate Bass    </td>
    <td>    Kate Caskey    </td>
    <td>    Kate Ise    </td>
    <td>    Katerina Karamanis    </td>
    <td>    Katherine Nessa    </td>
    <td>    Kayleigh Sullivan    </td>
</tr>
    <tr>
    <td>    Kendall Wilson    </td>
    <td>    Kiara Mackenney    </td>
    <td>    Kimberley Winn    </td>
    <td>    Kira Schwartzberg    </td>
    <td>    Koralene Pearce    </td>
    <td>    Kylie Finkelstein    </td>
</tr>
<tr>
    <td>    Kylie Katims    </td>
    <td>    Kylie Warsaw    </td>
    <td>    Laynee Plawa    </td>
    <td>    Liam Berko    </td>
    <td>    Liam Pattison    </td>
    <td>    Lillian Ghozali    </td>
</tr>
<tr>
    <td>    Lilliana  Remilliard    </td>
    <td>    Lily Frank    </td>
    <td>    Lindsey Davis    </td>
    <td>    London Taylor    </td>
    <td>    Lucy Lopate    </td>
    <td>    Mackenzie Gale    </td>
</tr>
<tr>
    <td>    Madylin Morse    </td>
    <td>    Makenzie Cole    </td>
    <td>    Mallorie Watson    </td>
    <td>    Mallory Canavan    </td>
    <td>    Marissa Zuppa    </td>
    <td>    Max Leach    </td>
</tr>
<tr>
    <td>    Maya Vaidya    </td>
  <td>    Megan Sheehan    </td>
  <td>    Meredith Brown    </td>
  <td>    Mia Filoramo    </td>
  <td>    Morgan Mayhann    </td>
  <td>    Morgan Zvolska    </td>
</tr>
<tr>
    <td>    Natalie Ehrenwerth    </td>
    <td>    Natalija Grkovic    </td>
    <td>    Nate Bilgoray    </td>
    <td>    Nicholas Tayag    </td>
    <td>    Nicolas Gonzalez    </td>
    <td>    Nicole Hernalsteen    </td>
</tr>
<tr>
    <td>    Noa Pogany    </td>
  <td>    Noah Hollander    </td>
  <td>    Noah Spatz    </td>
  <td>    Olivia Erstling    </td>
  <td>    Olivia Replogle    </td>
  <td>    Rachael Friederich    </td>
</tr>
<tr>
    <td>    Rachel Talley    </td>
    <td>    Rebecca Reich    </td>
    <td>    Remi Sanchez    </td>
    <td>    Rilee Spegar    </td>
    <td>    Riley Hearn    </td>
    <td>    Ryan Goldblum    </td>
</tr>
<tr>
    <td>    Samantha Guerrero    </td>
    <td>    Samantha Kinggard    </td>
    <td>    Samuel Bennet    </td>
    <td>    Sarah McCluskey</td>
    <td>    Sean Behling    </td>
    <td>    Sheryl Kim    </td>
</tr>
<tr>
    <td>    Skylar Mac Calla    </td>
  <td>    Sophia Cuna    </td>
  <td>    Sydney Corn    </td>
  <td>    Timothy Hodges    </td>
  <td>    Trevor Shepherd    </td>
  <td>    Tyler Bonnoront    </td>
</tr>
<tr>
    <td>    Tyler Sentz    </td>
  <td>    Vanessa Waskowski    </td>
  <td>    Victoria Poliak</td>
  <td>    Victoria Shelford    </td>
  <td>    Whitney Dreyer    </td>
  <td>    William Lynfatt    </td>
</tr>
<tr>
    <td>    Yedalm Song    </td>
  <td>    Zachary Valdes    </td>
  <td>    Zeena Karkaria    </td>
  <td>    Zoe Gilliard    </td><!--
  <td>    Zeena Karkaria    </td>
  <td>    Zoe Gilliard    </td>
</tr>
<tr>
    <td>    Rachel Pohl    </td>
  <td>    Raegan Fink    </td>
  <td>    Rajel Wolcoff    </td>
  <td>    Ram Desai    </td>
  <td>    Rebecca Allison    </td>
  <td>    Rebecca Schlafke    </td>
</tr>
<tr>
    <td>    Samuel Speizman    </td>
  <td>    Sarah Blankenship    </td>
  <td>    Sarah Garavaglia    </td>
  <td>    Sarah Greep    </td>
  <td>    Sarah Sheerer    </td>
  <td>    Sarah Voskamp    </td>
</tr>
<tr>
    <td>    Shannon Chamberlain    </td>
    <td>    Shayna Cohen    </td>
    <td>    Sheelagh Dunn    </td>
    <td>    Skye Dougan    </td>
    <td>    Sophie Charlson    </td>
    <td>    Stephanie Kokeas    </td>
</tr>
<tr>
    <td>    Susanna van de Graaf    </td>
    <td>    Sydney Jimenez    </td>
    <td>    Sydney Miller    </td>
    <td>    Sydney Patterson    </td>
    <td>    Sydnie Winder    </td>
    <td>    Taryn Hibshman    </td>
</tr>
<tr>
    <td>    Tej Patel    </td>
    <td>    Thomas McGurk    </td>
    <td>    Valentina Nunez    </td>
    <td>    Valerie Jones    </td>
    <td>    Victor Rivera    </td>
    <td>    Vinny Savarino    </td>
</tr>
<tr>
    <td>    Yasmine Gillespie    </td>
  <td>    Zach Frielich    </td>
  <td>    Zachary Hahn    </td>
  <td>    Zachary Perez    </td>
  <td>    Zayne Moore    </td>
  <td>    Zoie Danyali    </td>
</tr>
<tr>
    <td>    Rebekah Shields     </td> -->
</tr>
</table>
                     </div>
                 </div>
             </div>
         </div>

</div>
</div>
</div>
    <div id="dancers" class="tabcontent">
<div class="subtab">
    <button class="tablinks-subtab" onclick="openSubTab(event, 'what')">WHAT IS DANCING?</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'dfaq')">DANCER FAQS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'resources')">DANCER RESOURCES</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'individual')">DANCING AS AN INDIVIDUAL</button>

</div>
<div id="what" class="tabcontent-subtab">
<p>Dance Marathon at the University of Florida is an annual event benefiting the patients of UF Health Shands Children's Hospital in Gainesville, Florida. Each year, students stay awake and on their feet, if able, to raise money and awareness for Children's Miracle Network Hospitals.</p>
            <p>As a Dancer, you will experience one of UF’s most adored traditions. Throughout the duration of the Main Event, you will learn our Linedance, enjoy live entertainment, eat delicious food from our local Sponsors, and hear inspiring stories from our Miracle Families.</p>
            <p>In addition to standing, if able, for the duration of the Main Event, Dancers will have year-long activities to take part in such as a Dancer Retreat, Registered Dancer Workshops, bonding with their internal Organization and more!</p>
            <p><a href="https://events.dancemarathon.com/event/floridadm" target="_blank">Click Here to Register to Dance</a></p>
            <p>Please email Lily Batley, Dancer Relations Overall Director, at <a href="mailto:lbatley@floridadm.org">lbatley@floridadm.org </a> with any questions!</p>
          </div>
</div>

<div id="dfaq" class="tabcontent-subtab">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q1">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a1" aria-expanded="false" aria-controls="a1">
                      If I register to dance, am I guaranteed a Dancer spot at DM?
                    </a>
                  </h4>
                </div>
                <div id="a1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q1">
                  <div class="panel-body">
                    Not necessarily. Dancer spots are allocated based off of participation and fundraising goals set for each Organization and individual.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q2">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a2" aria-expanded="false" aria-controls="a2">
                      I already registered to fundraise, do I need to register to dance?
                    </a>
                  </h4>
                </div>
                <div id="a2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q2">
                  <div class="panel-body">
                    Yes, registering to fundraise and registering to dance are two separate things.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q3">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a3" aria-expanded="false" aria-controls="a3">
                      Do I have to be a UF student to dance?
                    </a>
                  </h4>
                </div>
                <div id="a3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q3">
                  <div class="panel-body">
                  Yes, you must be enrolled as a student during the Spring semester in which Dance Marathon takes place. This also applies to those registered with UF who are doing an internship in place of classes.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q4">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a4" aria-expanded="false" aria-controls="a4">
                      I don’t have my DM shirt, can I still check in for spirit points?
                    </a>
                  </h4>
                </div>
                <div id="a4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q4">
                  <div class="panel-body">
                    You must be wearing a DM shirt to check in for spirit points. The purpose of wearing the shirt is to spread awareness around campus.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q5">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a5" aria-expanded="false" aria-controls="a5">
                      How do I register to dance?
                    </a>
                  </h4>
                </div>
                <div id="a5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q5">
                  <div class="panel-body">
                    Click the Dancer Resources tab above for instructions.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q6">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a6" aria-expanded="false" aria-controls="a6">
                      How do I register to fundraise?
                    </a>
                  </h4>
                </div>
                <div id="a6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q6">
                  <div class="panel-body">
                    See <a href="https://floridadm.org/register-to-fundraise">Register to Fundraise</a> for instructions.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q7">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a7" aria-expanded="false" aria-controls="a7">
                      Can I still dance if I am the Ambassador for my Organization’s team?
                    </a>
                  </h4>
                </div>
                <div id="a7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q7">
                  <div class="panel-body">
                    Yes!
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q9">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a9" aria-expanded="false" aria-controls="a9">
                      Who can come to the Event?
                    </a>
                  </h4>
                </div>
                <div id="a9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q9">
                  <div class="panel-body">
                    Anyone!
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q13">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a13" aria-expanded="false" aria-controls="a13">
                      What happens when someone registers to dance and isn’t given a spot?
                    </a>
                  </h4>
                </div>
                <div id="a13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q13">
                  <div class="panel-body">
                    The money paid for the registration fee goes toward their Organization’s total amount raised.
                  </div>
                </div>
              </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q14">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a14" aria-expanded="false" aria-controls="a13">
                      What if I am not in an Organization and want to register as an individual?
                    </a>
                  </h4>
                </div>
                <div id="a14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q14">
                  <div class="panel-body">
                    You do not have to be in an Organization to register to Dance. You can register as an individual using the link under Dancer Resources; individual Dancers will be placed onto the Gator Aides team. Gator Aides is a team that allows individual Dancers to participate in Dance Marathon at UF with a group although they are not registered with an Organization.
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
</div>
</div>
<div id="resources" class="tabcontent-subtab">
<h3>Register to Dance</h3>
            <p><a href="https://events.dancemarathon.com/event/floridadm" target="_blank">Click here to register to Dance!</a></p>
            <P>Follow the link and select “Buy Tickets!” Once you complete your registration, a Dance Marathon Captain will reach out to you with further details.</p>
            <p>Dancer Registration for Dance Marathon is open for two weeks in the Fall and two weeks in the Spring. To be a Dancer, participants must be enrolled as students at the University of Florida during the spring semester. This includes students who are enrolled but may have an internship in place of classes.</p>
            <p>Registering to <em>dance</em> is <u>not</u> the same thing as registering to <em>fundraise</em>. Anyone may register to fundraise at any time throughout the year, but Dancer Registration is only open for the two-week period in the Fall and in the Spring.</p>
            <p>You may register to dance with an Organization team or as an individual. If you are a member of an Organization that does not currently participate in Dance Marathon, you may start a team by registering on DonorDrive.</p>
            <p><em>Please note: registration does not guarantee Dancer spots. Dancer spots are allocated in the Spring based off of Organizational or individual achievements.</em></p>
</div>
</div>
</div>
<div id="individual" class="tabcontent-subtab">
<h3>Dancing as an Individual</h3>
            <p></p>
            <p>You have the option to register to Dance as an individual. When registering to Dance, it will ask you which Organization you are participating with, and there will be an option that says “Participating as an Individual.” Once you complete your registration, a Dance Marathon Captain will reach out to you with further details.</p>
            <p>Individual Dancers are placed on a team called Gator Aides. Being a part of Gator Aides will allow you to make connections with other individual Dancers as well as our Miracle Children. Gator Aides have additional opportunities, meetings, and events throughout the year you can choose to attend that will allow you to become even more involved in our cause. </p>
            <p>If you have any questions about dancing as an individual or the Gator Aides team, please contact the Recruitment Overall Director, Brandon White, at <a href="mailto:bwhite@floridadm.org">bwhite@floridadm.org</a></p>
          </div>

</div>
</div>

    <div id="kirstyn" class="tabcontent">
<h3>Kirstyn's Krew</h3>
                    <!--<p>Registration for Kirstyn's Krew 2021 is now closed. </p>-->
                    <h4><i>General Information</i></h4>
                    <p>Kirstyn’s Krew is a program that honors Kirstyn Tripp, our Miracle Child who lost her battle to childhood illness in 2018. Kirstyn's Krew allows students to experience Dance Marathon at the University of Florida from a different perspective and learn more about our fight to end pediatric illness. </p>
                    <p>As a member of Kirstyn’s Krew, throughout the year, participants will experience all that Dance Marathon at UF has to offer and celebrate the Miracles we make together for the children at UF Health Shands Children's Hospital. You will have the opportunity to participate in all DM at UF events, as well as events only open to Kirstyn's Krew, such as bonding events with the Tripp Family.</p>
                    <p>At the Main Event, you will be permitted to attend a 6-hour shift on either March 26th or March 27th. The shift will consist of a private teaching of the Linedance by our Morale team, various activities around the O’Dome, and an opportunity to hear from and get to know Kirstyn’s family. Kirstyn’s Krew will have a rolling application that requires a $13 minimum fundraising amount on your personal fundraising page. The $13 is raised in honor of her life and the amazing impact she made on our Organization and everyone in her life.</p>
                    <p> Please email Brandon White, Recruitment Overall Director, at <a href=mailto:bwhite@floridadm.org>bwhite@floridadm.org</a> with any questions! </p>
                    
                    <p><i> *Note: You cannot be on Kirstyn’s Krew and a Dance Marathon Captain Team. </i></p>
                    <!-- This is the Just copy and paste the 2018 link here with updating the words -->
                     <!-- <h2><a href="https://ufl.qualtrics.com/jfe/form/SV_aeH0EvqGWgRY4nz" target="_blank">2019 Emerging Leaders Program Application</a></h2>
                     <h2><a href="https://ufl.qualtrics.com/jfe/form/SV_9XiQPLmMzs1x9hH" target="_blank">2019 Captain Application</a></h2> -->

                    <p></p>
</div>
    <div id="orgs" class="tabcontent">
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


    </div>
</div>
<div id="service" class="tabcontent">
<div class="subtab">
    <button class="tablinks-subtab" onclick="openSubTab(event, 'serve')">SERVICE</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'vol')">VOLUNTEER DATES</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'community')">COMMUNITY PARTNERS</button>
</div>
<div id="serve" class="tabcontent-subtab">
<h3>Service</h3>
                        <p>Dance Marathon at UF aims to support the community which gives so much to our cause by uplifting local non-profits and service organizations, our Community Partners,  throughout the year! DM at UF offers service opportunities for our members to engage with these Community Partners year round and earn spirit points. </p>
                        <p>If you are interested in becoming a Community Partner or have any questions, please contact our Community Outreach Overall Director, Bridget Richer at
                        <a href="mailto:bricher@floridadm.org">bricher@floridadm.org</a>.</p>
  </div>
</div>

<div id="vol" class="tabcontent-subtab">
<h3>Volunteer Dates</h3>
                          <!--<p>Dance Marathon at University of Florida is an organization led by servant leaders that strive to spread their passion for giving and creating change beyond our immediate campus. Members will receive one spirit point for engaging in a service event. </p>
                        <p> Giving Tuesday - November 30th, 2021 </p>
                          <p> This is an organization-wide service day where all members will be able to dedicate the day to giving back to our community by volunteering with our Community Partners.
                          Please register to volunteer for this event by clicking
                          <a href="https://docs.google.com/spreadsheets/d/17hRc6pJBqxHhnI-4G_Rkv9ikcnVg46HqPKTsaPnY9bc/edit">here</a>. </p>
                          <p> If you are unable to volunteer, please participate in the Canned Food Drive with Hitchcock Field and Fork Food Pantry between 11/8 - 11/18 by bringing a canned food to your meetings or check-ins for an extra spirit point.</p>-->
                        <p> Check back soon! </p>
      </div>
</div>
<div id="community" class="tabcontent-subtab">
<h3>Meet our Community Partners:</h3>
                          <p>Meet our Community Partners for the 2021- 2022 year! These non-profit and service organizations help better the lives of those who live in the Gainesville Community, the community which gives so much to Dance Marathon at UF. As an organization whose goal is to create change, we hope to uplift our Community Partners throughout the year.
                        </p>
                        <div class="col-md-8">
                        </div>
                            <div style="height: 35px;"></div>
                            <div class="row">
                            <div class="col-sm-7">
                                <img class="img-responsive" style="display: block; margin: auto;" src="assets\images\CommunityPartners-01.png" width="865" height="1080"/></a>


                </div>
                </div>
                
</div>

<?php include("includes/foot.php"); ?>
