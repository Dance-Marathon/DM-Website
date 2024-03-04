<?php
$status = "open";
$GLOBALS['page_title'] = 'Events | Dance Marathon at UF';
$GLOBALS['parent'] = 'events';
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
        tabcontentSub = document.getElementsByClassName("tabcontent-subtab");
        for (i = 0; i < tabcontentSub.length; i++) {
            tabcontentSub[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinksSub = document.getElementsByClassName("tablinks-subtab");
        for (i = 0; i < tablinksSub.length; i++) {
            tablinksSub[i].className = tablinksSub[i].className.replace(" active", "");
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
        background-image: url("/assets/images/BannerPhotos21/events (1) 2.jpg");
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
        background-color: #e3e9c8;
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
        color: #C1CB7F;
        border-bottom: 2px solid #C1CB7F;
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

        <?php if ($status == "open") { ?>
            <!--<h3><b><span style="color: black">A YEARLONG PHILANTHROPY</span></b></h3>-->
            <h2>A Yearlong Philanthropy</h2>
            <p>Dance Marathon is a <b><span style="color: #C1CB7F">yearlong commitment</span></b> that includes many fundraising events aimed at reaching University students, businesses, and Gainesville residents. These events help us create a fun and exciting atmosphere while raising awareness about DM, whether it is through social media or inspirational stories from our Miracle Children who speak at the events. DM at UF's community events are all highly anticipated as they build up throughout the year toward the main Event in the spring.</p>
            <p><b><span style="color: #e3e9c8">Your involvement in these events is what makes them successful!</span></b> Reaching out for the support of the entire community is vital for the continued success of Gainesville's local Children's Miracle Network Hospital. For more information about how to get involved in these events, please contact us at <a href="floridadm@floridadm.org">floridadm@floridadm.org</a>.</p>
        <?php } else {
            echo 'This page is currently closed.';
        } ?>
    </div>
    <div class="tab">
        <button id="defaultTab" class="tablinks" onclick="openCity(event, 'kickoff')">FALL KICKOFF</button>
        <button class="tablinks" onclick="openCity(event, 'dance')">MAIN EVENT</button>
        <button class="tablinks" onclick="openCity(event, 'mini')">MINI-MARATHONS</button>
        <button class="tablinks" onclick="openCity(event, 'miricle')">MIRACLE GALA</button>
    </div>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'in-color')">MIRACLES IN COLOR 5K</button>
        <button class="tablinks" onclick="openCity(event, 'moralloween')">MORALLOWEEN</button>
        <!--<button class="tablinks" onclick="openCity(event, 'madness')">MORALE MADNESS</button>-->
        <button class="tablinks" onclick="openCity(event, 'transform')">TRANSFORM TODAY</button>
    </div>

    <div id="kickoff" class="tabcontent">
        <h3>Fall Kickoff</h3>
        <p>DM at UF hosted its first annual Kickoff Event in 2021! We are excited to continue this event for many years to come. It is the first event of the year for all of our internal and external members, Miracle Families, and more to enjoy. The event is held at Flavet Field including music, fun games, Miracle Stories, food, merchandise, and more! </p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/fTElQSBr9bU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div id="dance" class="tabcontent">
        <h3>Main Event</h3>
        <p>Our Main Event is a 26.2-hour event held in the Stephen O’Connell Center, or as we like to call it, the O’Dome! During the Main Event, we celebrate all of our members and miracles made throughout the year. It is jam-packed full of entertainment, fundraising pushes, stories from Miracle Families, ceremonies, theme hours, a rave, and of course, the Linedance! Our Dancers will stand for the entire duration to symbolize our cause and the impact that we are making on the lives of children with pediatric illnesses at UF Health Shands Children’s Hospital. At the end of our event we will get to witness the reveal of the total amount raised by Dance Marathon over the whole year.</p>
        <!--<p><We are so excited to announce that the main event this year will be April 1-2, 2023!</p>-->

        <p>Follow us on social media for event updates!</p>
        <p>For additional questions, email <a href=mailto:mainevent@floridadm.org>mainevent@floridadm.org</a>.</p>
    </div>

    <div id="mini" class="tabcontent">

        <div class="subtab">
            <button class="tablinks-subtab" onclick="openSubTab(event, 'marathon')">MINI-MARATHON</button>
            <button class="tablinks-subtab" onclick="openSubTab(event, 'schools')">SCHOOLS</button>
            <!-- <button class="tablinks-subtab" onclick="openSubTab(event, 'zone')">WHAT'S MY ZONE?</button> -->
        </div>
        <div id="marathon" class="tabcontent-subtab">
            <p>10 high schools around the state of Florida participate each year in our Mini Marathon program. High school students at these schools show an enthusiastic passion for Dance Marathon even before their college years begin and play a vital role in our movement. This past year, our Mini Marathon programs raised a total of $600,310.82, proving that these students are truly one generation fighting for the next. All money raised by Mini Marathons goes toward DM at UF’s total amount raised, which directly benefits the children at UF Health Shands Children’s Hospital.</p>
            <!--  <iframe width="560" height="315" src="https://www.youtube.com/embed/-qCnFuEPZOo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/etQj32bVzlg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>We are always looking for more high schools to join our Dance Marathon family. If you would like to learn more about our Mini-Marathon Programs or would like to get involved, please contact our Marathon Relations Overall Director, Jackie Aloumanis, at <a href="jaloumanis@floridadm.org ">jaloumanis@floridadm.org </a>.</p>
        </div>

        <div id="schools" class="tabcontent-subtab">
            <ul>
                <li>Belleview High School</li>
                <li>East Ridge High School</li>
                <li>Forest High School</li>
                <li>F.W. Buchholz High School</li>
                <li>Gainesville High School</li>
                <li>Leesburg High School</li>
                <li>Newberry High School</li>
                <li>Oak Hall High School</li>
                <li>Vanguard High School</li>
                <li>Villages Charter School</li>
                <!-- <li>Palm Beach Gardens Community High School</li>
<li>Eastside High School</li>
<li>Kanapaha Middle School</li>
<li>American Heritage School - Delray</li>
<li>Trinity Catholic High School</li>
<li>Deerfield Beach High School</li>
<li>Saint Francis Catholic Academy</li>
<li>Wellington Landings Middle School</li> -->
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
    <p>Each year, Dance Marathon at UF hosts their Annual Miracle Gala the first night of the Main Event. <!--This year, our 7th Annual Miracle Gala will be held on April 1st, 2023 in Evans Champions Club at Ben Hill Griffin Stadium. This year’s Miracle Gala theme is Imagine the Day in tribute to our year long campaign to #ImagineTheDay no child faces pediatric illness. We hope you will join us to raise funds and awareness for the children at UF Health Shands Children’s Hospital and help Change Their Future.</p>
    <p> -->This semi-formal event is designed for the Dance Marathon at UF community to celebrate a year of achievements and will include a cocktail hour, live music, silent auction, buffet dinner, raise the paddle fundraiser, and programming during which you will hear from Miracle Families and cause-connected speakers.  </p>
    <p>The night will be filled with many Special Guests, including our Ambassador Families, DM at UF parents/families, UF Health Shands Staff, Dance Marathon Alumni, Community Partners, UF Faculty, Sponsors, members of our High School Program, Keynote Speakers, and more!</p>
   <!-- <p>Tickets can be purchased <a href=https://dance-marathon-at-uf-510104.square.site/miracle-gala>here</a>. For a limited time only, we are offering group deals on general tickets for groups of 3 or more. If you purchase 3 tickets, use code ‘gala3’ for 5% off your ticket purchase. For purchases of 4 tickets, use code ‘gala4’ to receive 10% off your total. Lastly, for 5+ tickets, use code ‘gala5’ to receive 15% off your final total! -->
    <p>For more information or questions about sponsoring the event, please contact the Community Outreach Overall Director, Aria Patel, at <a href=mailto:apatel@floridadm.org>apatel@floridadm.org</a>. We look forward to seeing you there! </p>

</div>
<div id="in-color" class="tabcontent">
    <h3>Miracles in Color 5K</h3>
    <!-- <p>Tickets are no longer available.</p> -->

    Welcome to the Miracles in Color 5K benefiting UF Health Shands Children's Hospital! 
   <!-- <b>Miracles in Color will be taking place on February 5th, 2023 at Flavet Field. </b> -->It is open to anyone who wants to support our cause and have a great time. We couldn't think of a better way for you to spend your Sunday morning than with paint and by supporting a hospital that is so prominent in our community!
    </p>
  <!--  <p> Purchase <a href=https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5533>Miracles in Color 5k Tickets here!</a>* </p> -->
              
             <!-- <p><i> *Tickets purchased after January 31 will not include a complimentary 5K shirt </i></p> -->
    <p> The course runs through the University of Florida campus and will have color stations throughout the course as well as at the finish line. At each color station, runners will be doused in color.* <u>All participants will be provided with a Miracles In Color 5k white shirt with registration.</u> </p>

    <p>The 5k course will be split into 2 shifts. When registering, you will be able to choose which shift you would like to run at. Shift options include 8:00 a.m. or 9:00 a.m. <b>On the day of the event, please arrive at least 15 minutes prior to your start time. </b></p>

    <p>All proceeds will be donated to UF Health Shands Children's Hospital, our local Children's Miracle Network Hospital, from Dance Marathon at the University of Florida. </p>

    <p>*Don't want to be colored with powder? We will give you something to indicate to our color team that you want to stay clean. </p>

    <p>For more information, please contact the Operations Manager, Gwyneth Bishara, at <a href=mailto:gbishara@floridadm.org>gbishara@floridadm.org</a>.</p>

    <h2>Race Day Info</h2>

    <p>Please arrive 15 minutes before your scheduled run time to sign in. You must fill out the required <a href=https://ufl.qualtrics.com/jfe/form/SV_3mA8svPgLNm2xMy>Liability Waiver Form </a> prior to arriving at our 5k. We recommend you fill out this form at the same time as registration and save/screenshot your results. You will be required to show proof of completion when checking in the day of. </p>

    <p>There is parking available at Flavet Field, but please arrive early to ensure you have time to sign in before your scheduled race. </p>

    <p>Check your email for more information, and email <a href=mailto:gbishara@floridadm.org>gbishara@floridadm.org</a> with any questions. </p>

    <h2>FAQs</h2>
    <h3>What is a Color Run? </h3>
    <p>A Color Run is a 5 kilometer race involving powder paint, inspired by the Hindu Festival of Holi. Participants wear white at the beginning of the race and are covered with color by the end. To learn more about Holi you can visit <a href="https://www.holifestival.org/" target="_blank">here.</a> </p>

    <h3>What if I don’t want to be covered in colored powder?</h3>
    <p>We will give you something to indicate to our color team that you want to stay clean.</p>

    <!--<h3>What do I do after I finish my shift?</h3>-->
    <!--<p>You are more than welcome to hang out with us on Flavet Field and enjoy free food, purchase merchandise, and stay for our big Color Throw at 10:20 a.m.! </p>-->

    <h3>Will there be chip timing at the Miracles in Color 5K?</h3>
    <p>No, there is no official timing system for the 5K. </p>
</div>
<div id="moralloween" class="tabcontent">
    <h3>Moralloween</h3>

    <p>Moralloween is an annual fall fundraiser put on by Dance Marathon at UF, a student-run philanthropy that raises funds and awareness year-round at UF Health Shands Children’s Hospital! Organizations across campus participate by creating booths with activities, candy, and ways to bond with attendees and Miracle Families. Moralloween has a DJ, great food, and is a great way for everyone to get in the Halloween spirit!</p>
    <p>For more information, please contact the Morale Overall Director, Filomena Selvanik, at <a href="mailto:fselvanik@floridadm.org">fselvanik@floridadm.org</a>.</p>

<p> Purchase tickets to our 2023 Moralloween event <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=6035" target="_blank">HERE!</a>

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
    Transform Today is our largest fall fundraising effort which lasts 26.2 hours and will take place during the fall this year! Our movement spread throughout our organization, campus and community as our different teams’ colored polos flooded the University of Florida; our participants took the initiative to dedicate their day to raise funds and awareness for patients at UF Health Shands Children’s Hospital. <br></br>

    In efforts to boost engagement and encourage fundraising, we hosted programming at the Reitz Student Union in the Grand Ballroom and North Lawn. Throughout the day, merchandise, fundraising activities and Miracle Stories engaged and connected our members to our cause. We would like to extend a huge thank you to our participants, Alumni and donors for your continuous support throughout the day!<br></br>

    Our 2022 total, which was raised in just 26.2 hours for our hospital, was <b>$526,292.90! </b> <br></br>

    We are so eager to continue our efforts throughout this year and make miracles for the families who need it most! Please feel free to watch our Transform Today recap video from last year here. 
    <br></br>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/k-LhKKJ-yyk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <!--    <iframe width="560" height="315" src="https://www.youtube.com/embed/k-LhKKJ-yyk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <br></br>
    <h4><i>Why</i></h4>

    For 26.2 hours, Dance Marathon at the University of Florida unites during this fundraising campaign to transform the lives of the patients at UF Health Shands Children’s hospital. In only 26.2 hours, our campus community rises to create as many miracles as possible for the children and families at Shands Children’s Hospital.
    <br></br>
    <h4><i>When</i></h2>

        TBA <!--Transform Today 2022 is from 9:00 a.m. on October 25th until 11:12 a.m. on October 26th! </li> -->
        <br></br>
        <h4><i>What</i></h4>

        Transform Today is Dance Marathon at the University of Florida’s Fall fundraising campaign. For 26.2 hours from 9 a.m. until 11:12 a.m. the next day, Dance Marathon at UF compiles our efforts to raise funds and awareness to transform the lives of the children and families at UF Health Shands Children’s Hospital.
        <br></br>
        <h4><i>How Can I Get Involved</i></h4>

        Transform Today is Dance Marathon at the University of Florida’s largest fundraising campaign in the Fall semester. There are a variety of different ways to join our movement and help us transform the lives of our student body, the lives of the children at UF Health Shands Children’s Hospital, and the lives of each other. </br>

        <br>If you are looking to make a financial contribution to support our cause, you can donate using our DonorDrive, linked <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.donate&eventID=5233" target="_blank">here.</a></br>
       <!-- <br>If you are looking to register to Dance in our 2023 Main Event, you can register to Dance <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5422" target="_blank">here.</a> All registered Dancers must also create a DonorDrive page, you can do so <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5233" target="_blank">here.</a> Dancer registration is only open for the duration of Transform Today. </br> -->
        <br></br>
        <h4><i>Hospitality Nights</i></h4>

        Hospitality Nights serve as an opportunity for the local Gainesville community can support Dance Marathon at UF’s fundraising efforts. On Transform Today, hospitality nights will be occurring in select locations. Make sure to mention Dance Marathon at UF at check out and a portion of the proceeds will benefit the patients at UF Health Shands Children’s Hospital!


</div>
</div>

<script>
    window.addEventListener('load', function() {
        document.getElementById('defaultTab').click();
    });
</script>

<?php include("includes/foot.php"); ?>
