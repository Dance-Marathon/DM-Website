<?php
    $status = "open";
    $GLOBALS['page_title'] = 'Students | Dance Marathon at UF';
    $GLOBALS['parent'] = 'get-involved';
    include("includes/head.php");
    include("includes/navbar.php");

    $overalls = array(
      array(
        'name'                  =>  'Andrew Jensen',
        'email'                 =>  '',
              'current_city'          =>  '',
        'previous_involvement'  =>  '',
                'fun_fact'                =>  '',
        'favorite_memory'       =>  '',
        'continued'             =>  '',
        'image'                 =>  ''
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
                'name'                  =>  'Madison Grasty',
                'email'                 =>  '',
                'current_city'          =>  '',
                'previous_involvement'  =>  '',
                'fun_fact'              =>  '',
                'favorite_memory'       =>  '',
                'continued'             =>  'madison',
        'image'                 =>  ''
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

    $greek_organizations = array(
      array(
        'organization'  =>  'Alpha Chi Omega',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Alpha Delta Pi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Alpha Epsilon Phi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Alpha Epsilon Pi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Alpha Gamma Rho',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Alpha Omicron Pi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Alpha Phi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Alpha Tau Omega',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Beta Theta Pi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Black Student Union',
        'link'          =>  ''
        ), 
      array(
        'organization'  =>  'Brazilian Student Association (BRASA)',
        'link'          =>  ''
        ),                 
      array(
        'organization'  =>  'Catholic Gators',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Chi Omega',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Chi Phi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'College of Pharmacy',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Delta Delta Delta',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Delta Gamma',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Delta Nu Zeta',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Delta Phi Epsilon',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Delta Sigma Phi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Delta Tau Delta',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Delta Zeta',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Florida Cicerones',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Footprints: Buddy and Support Program',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Gamma Eta',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Gamma Phi Beta',
        'link'          =>  '',
        ),
      array(
        'organization'  =>  'Gator E Sports',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Hispanic Student Association',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Innovation Academy',
        'link'          =>  ''
        ),  
      array(
        'organization'  =>  'Kappa Alpha Order',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Kappa Alpha Theta',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Kappa Delta',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Kappa Kappa Gamma',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Kappa Phi Epsilon',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Kappa Sigma',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Lamba Chi Alpha',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Omega Phi Alpha',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Phi Delta Theta',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Phi Eta Sigma Honor Society',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Phi Kappa Tau',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Phi Mu',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Pi Beta Phi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Pi Kappa Alpha',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Pi Lamba Phi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Pre-Legal Honor Society',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Sigma Chi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Sigma Kappa',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Sigma Nu',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Sigma Phi Epsilon',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Society of Women Engineers',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Tau Epsilon Phi',
        'link'          =>  ''
        ),  
      array(
        'organization'  =>  'Tau Kappa Epsilon',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'The Gator Aides',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Theta Alpha',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Theta Chi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Theta Tau',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'UF Honors Program',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'UF Pre-Physician Assistant Association',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Zeta Beta Tau',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Zeta Tau Alpha',
        'link'          =>  ''
        )
      );
    
    function compareAlphabetically($a, $b) {
      return strcmp($a['organization'], $b['organization']);
    }
    usort($greek_organizations, 'compareAlphabetically');
    
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
        tabcontentSub = document.getElementsByClassName("tabcontent-subtab");
        for (i = 0; i < tabcontentSub.length; i++) {
            tabcontentSub[i].style.display = "none";
        }
        tablinksSub = document.getElementsByClassName("tablinks-subtab");
        for (i = 0; i < tablinksSub.length; i++) {
            tablinksSub[i].className = tablinksSub[i].className.replace(" active", "");
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
  function openCityAndSubTab(evt, cityName, storySub) {
    openCity(evt, cityName);
    openDefaultSubTab(evt, storySub);
  }

  function openDefaultSubTab(evt, storySub) {
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
        document.getElementById(storySub + "Button").className += " active";
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
        background-color: #017799;
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
    color: #FCD13A;
    border-bottom: 2px solid #FCD13A;
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
                <h1>Get Involved</h1>
              </div>
        </div>
      </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        
<?php if ($status == "open") { ?>
    <p>Take a look at all of the different ways you can get involved with Dance Marathon at UF. Whether you are interested in becoming a Captain, Miracle Maker, Emerging Leader, Ambassador, Fundraiser, or member of Kirstyn’s Krew, this page is your path to getting involved! There are so many ways to give back through DM at UF, and we would love for you to join our Dance Marathon family and help us make miracles.</p>
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
     
                                           <ul><b style="color: #017799">Organization:</b>     Student Organizations work year-round to support our cause.</ul>
                         <ul><b style="color: #017799">Miracle Maker:</b> Miracle Makers stand on their feet if able for the duration of our Main Event in April to raise funds and awareness for UF Health Shands Children’s Hospital.</ul>
                                             <ul><b style="color: #017799">Emerging Leader:</b> Members of our Emerging Leaders Program work alongside the Recruitment Team, providing support to Captain Teams and brainstorming new ideas to ensure a successful future for our organization.</ul>
                         <ul><b style="color: #017799">Captain:</b> Captains belong to 1 of 15 teams and take on yearlong responsibilities specific to their respective teams, with the goal of supporting and promoting our organization.</ul>
                         <ul><b style="color: #017799">Assistant Directors:</b> Individuals who work all year with their respective Overall Directors to ensure steady growth and management within their Captain Teams.</ul>
                         <ul><b style="color: #017799">Overall Directors:</b> The 20 individuals who lead Dance Marathon efforts throughout the year. They are responsible for leading their respective Captain Teams to oversee, expand, and promote our organization.</ul>
     
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


        <?php } else { echo 'This page is currently closed.'; } ?>
    </div>
    <div class="tab">
        <button id="defaultTab" class="tablinks" onclick="openCity(event, 'alum')">ALUMNI</button>
        <button class="tablinks" onclick="openCity(event, 'apps')">APPLICATIONS</button>
        <button class="tablinks" onclick="openCityAndSubTab(event, 'ambassadors', 'become')" >AMBASSADORS</button>
        <button class="tablinks" onclick="openCity(event, 'captain-teams')">CAPTAIN TEAMS</button>
        <!--<button class="tablinks" onclick="openCity(event, 'elp')">EMERGING LEADERS</button>-->
    </div>
    <div class="tab">
    <button class="tablinks" onclick="openCityAndSubTab(event, 'miracle-makers', 'what')">MIRACLE MAKERS</button>
    <button class="tablinks" onclick="openCity(event, 'elp')">EMERGING LEADERS</button>    
        <!--<button class="tablinks" onclick="openCity(event, 'kirstyn')">KIRSTYN'S KREW</button>-->
        <button class="tablinks" onclick="openCity(event, 'orgs')">ORGANIZATIONS</button>
        <!-- <button class="tablinks" onclick="openCityAndSubTab(event, 'service', 'serve')">SERVICE</button> -->
    </div>
    <div id="alum" class="tabcontent">
<h3>About</h3>

<p>Since 1995, Dance Marathon at UF has raised over $31 million for UF Health Shands Children's Hospital, our local Children’s Miracle Network Hospital. Thanks to your dedication and support throughout your college years, we have become the most successful student-run philanthropy in the southeastern United States.</p>
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
          <h4><i style="color:#FCD13A;"><b>(1) Miracle Membership</b></i></h4>
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
        <h4><i style="color:#017799;"><b>(2) Legacy Membership</b></i></h4>
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
                <p><b style="color:#FCD13A;">Event Package:</b></p>
                <ul>
                    <p>DMA members can purchase an exclusive event package to enhance their experience during the Dance Marathon weekend in spring. This package is ideal for those who plan to attend Dance Marathon at UF and can be purchased for $40 up to one month before the event. If this is your first year signing up for the DMA, you will automatically receive a complimentary Event Package included in your Lifetime Miracle Membership. Purchase the DMA Event Package <a href=https://dance-marathon-at-uf-510104.square.site/product/2022-dance-marathon-alumni-lifetime-membership/1?cs=true&cst=custom> here</a>.</p>
                    <p><b style="color:#FCD13A;">The Event Package includes:</b></p>
                    <li>Opportunity to participate in a behind-the-scenes hospital tour</li>
                    <li>Opt-in to receive the DMA event t-shirt**</li>
                    <li>Discounted Miracle Gala tickets</li>
                    <li>Tickets to the DMA Brunch during the event</li>
                    <li>Ability to receive fundraising incentives during the event</li>
                    <li>Access to the Family Room at the event</li>
                    <p><small>*DMA event t-shirt opt-in includes a direct mailing option for those members unable to attend the  event.</small></p>
                </ul> <!--
        <h4><b><u><i>Please note:</i></u></b></h4>
        <p>1. As a <b style="color:#FCD13A;">Miracle Member</b> of the DMA, you will have the benefit to maintain this status for life. You may elect to upgrade your membership to the new <b style="color:#017799;">Legacy Membership</b> as outlined below.</p>
        <p>2. Any returning member, whose current membership lapses, will automatically move into the <b style="color:#FCD13A;">Miracle Membership</b> status. These members may upgrade to the new <b style="color:#017799;">Legacy Membership</b> at any time throughout the year, up until one month before Dance Marathon weekend. </p>
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
<br>Thank you for your interest in Dance Marathon at the University of Florida 2025.</br>
<br>The online application forms are linked below. In order to be considered for a Captain, the Emerging Leaders Program, or Ambassador position, you must:</br>
<ul>
   <li>Complete the online application form.</li>
   <li>Create a DonorDrive personal fundraising page.</li>
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
<b>Assistant Director Application</b> Now Closed </p>
<!--The Assistant Director Application can be found <a href="assets/PDFs/Assistant Director Application 2025.pdf" target="_blank">here</a>. This application will close at <b/>5:00 PM EST on Saturday, May 11</b>. </p> -->
<b>Captain Application</b> Now Open! </p>
    <!--The Captain Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_9YoO63ERV8HTK3s" target="_blank">here</a>. We highly recommend completing your Application in a document and transferring it to Qualtrics when you’re ready to submit. This application will close at <b/>5:00 PM EST on Monday, September 4</b>. 

<p>A PDF of all Captain Team descriptions and Application questions can be found <a href="assets/PDFs/Captain Descriptions and Application Questions1.pdf" target="_blank">here</a>.</p> -->

<b>Emerging Leaders Application</b> Now Open! </p> 
    <!--<p>The Emerging Leaders Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_2066pLrEw4x6P0q" target="_blank">here</a>. This application will close at <b>11:59 PM EST on Monday, September 11</b>.</p> -->
<b>Ambassador Application</b> Now Open! </p> 
<p style="color:#017799;">The <b>Ambassador</b> Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_eG7brijBCrJ8mk6" target="_blank">here</a>. 
 This application will close at <b>11:59 PM EST on Sunday, September 8th</b>.</p>
 <p style="color:#017799;">The <b>Captain</b> Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_3pWD8fdMeJfRUKW" target="_blank">here</a>. 
 This application will close at <b> 5:00 p.m EST on Sunday, September 1</b>.</p>
 Click <a href="assets/PDFs/Captain Application Info Doc 2025.pdf" target="_blank">here</a> to view the 2025 Captain Application</p>
 <p style="color:#017799;">The <b>Emerging Leaders</b> Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_7TKhEyx59QxT8zQ" target="_blank">here</a>. 
 This application will close at <b> 11:59 p.m EST on Sunday, September 8</b>.</p>
<p>If you have any questions regarding applications, please reach out to our Membership Manager, Abby Ferrell, at <a href="mailto:aferrell@floridadm.org">aferrell@floridadm.org</a>.</p>
                    
</div>

    <div id="ambassadors" class="tabcontent" >

    <div class="subtab">
        <button id="becomeButton" class="tablinks-subtab" onclick="openSubTab(event, 'become')">BECOME AN AMBASSADOR</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, 'start')">STARTING A TEAM</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, '22amb')">2023 AMBASSADORS</button>

       
    </div>
    <div id="become" class="tabcontent-subtab">
<h3>What is an Ambassador?</h3>
<p>Organization Ambassadors serve as a liaison between Dance Marathon and their respective organization.</p>

<p>Organization Ambassadors will attend weekly meetings to receive information to relay to their Organizations and to work on professional and personal development. These meetings will allow Ambassadors to think creatively and brainstorm together to create new ways to incentivize and engage their members in Dance Marathon. Each Organization will be assigned a Fundraising & Organization Development Captain to work with on Organization involvement and fundraising throughout the year.<P>

Click <a href="assets/PDFs/2024 Ambassador Guidelines.pdf" target="_blank">here</a> to view the 2024 Ambassador Guidelines</p>

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
    <li>Help assign Miracle Maker buddies prior to the Event for each Miracle Maker</li>
    <li>Work with their Fundraising and Organization Development Captain to encourage and help Miracle Makers fundraise at the Event</li>
    <li>Relay important information to Miracle Makers throughout the Event</li>
    <li>Be available for Miracle Makers in case of emergency</li>
  </ul>

  <p class="alert alert-info">Ambassadors are also encouraged to be Miracle Makers if they choose and are eligible for free Miracle Maker Registration upon meeting expectations of the program.</p>
    </div>

    <div id="start" class="tabcontent-subtab">
<p>To participate as an Organization in Dance Marathon, you must register your team each year. First, check to make sure your team is not already registered. To register a new team, please complete the following steps:</p>
<ol>
<li>Go to floridadm.org and click “Donate.”</li>
<li>Scroll down and click “Register Now.”</li>
<li>Input your information and create a new Organization.</li>
<li>Fill out the proceeding information for your team and once your team has been registered, your members can join your team by following the steps and joining your existing Organization team.</li>
</ol>
<p>Each team will need an Ambassador to represent them. Please email the Organization Relations Overall, Caroline Lee, at <a href=mailto:clee@floridadm.org>clee@floridadm.org</a> to inform them you have created a team and will be serving as the Ambassador or have plans of selecting an Ambassador in the near future. The Organization Relations Overall will not be able to get in contact with you unless you email them to let them know you started a team.</p>
          </div>
    </div>
    <div id="22amb" class="tabcontent-subtab zone">


<h3 style="padding-top: 4.5%;">2023 Ambassadors</h3>
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
        <br></br>
</div>
</div>
            </div>
    </div>
</div>
    </div>
</div>

    <div id="captain-teams" class="tabcontent">
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
          <div class="panel-heading" role="tab" id="q16">
           <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#a16" aria-expanded="false" aria-controls="a16">Dancer Engagement</a>
          </h4>
        </div>
        <div id="a16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q16">
         <div class="panel-body">
           <b>The Dancer Engagement Team</b> is responsible for welcoming and communicating with Miracle Makers by hosting Check-Ins, tracking Miracle Maker involvement and providing a year long experience for Miracle Makers through events and other engagement throughout the year. DE Captains work alongside the Recruitment Team to help register Miracle Makers during registration pushes. Captains will be responsible for a group of Miracle Makers that they will communicate with to promote all DM at UF and Miracle Maker events or opportunities. Captains are expected to attend Check-Ins on Wednesdays in Turlington, where they will Check in Miracle Makers, log their Spirit Points, help with the Check-Ins activity, and spread the word about DM at UF on campus. Dancer Engagement also plans events and other engagement specifically for Miracle Makers, which Captains will help execute! At the Main Event, their job is to Check in Miracle Makers, encourage and support them throughout the 26.2 hours, and run swim/shower overnight. As a DE Captain, you are also expected to be a support system for your Miracle Makers and be a resource to them throughout their entire DM at UF experience! 
          <br><br>
          <h4><b>Overall Director</b></h4>
          Raegan DiRenzo
          <br><br>
                 <h4><b>Assistant Director of Stewardship</b></h4>
                 Frankie Provenzano
                 <h4><b>	Assistant Director of Internal Relations</b></h4>
                 Katie McKeon
                 <h4><b>Assistant Director of External Relations</b></h4>
                 Kate Hannah
               <h4>  <b>Captains</b></h4> 
               <table style="width:100%">
                <tbody class="outreach">
                Natalia Romano | Kendall Mehlenbacher | Colby Bottger | Daniella Escobar | River Koile | Morgan Schneider | Avery McCormack | Gabby London | Cooper Neel | Cami Rubin | Summer Kauffman | Davi Fishman
          </tbody>
              </table>
               </div>
             </div>
           </div>

          <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q2">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a2" aria-expanded="false" aria-controls="a2">Digital Marketing</a>
            </h4>
          </div>
          <div id="a2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q2">
            <div class="panel-body">
            <b>The Digital Marketing Team</b> is composed of graphic designers and software developers responsible for making the Dance Marathon at UF brand come to life. Technology Captains are responsible for either the development/maintenance of the website or mobile iOS/Android applications and Design Captains are responsible for the creation of all print/web design needs (merchandise, social media graphics, newsletters, calendars, etc.). Throughout the year, Captains work together to create high-tech, portfolio-quality materials that showcase Dance Marathon as a professional student-run movement. During the Main Event, Captains run the tech booth, which includes managing multiple screens inside the O’Dome, sending app notifications, coordinating audio/visual feeds, and creating in-event graphics.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Cameron Appel
          <br><br>
                 <h4><b>Assistant Director of Internal Design</b></h4>
                 Katrina Isé
                 <h4><b>	Assistant Director of External Design</b></h4>
                 Ansley Goldstein
                 <h4><b>Assistant Director of Internal Technology</b></h4>
                 Zachary Grosswirth
                 <h4><b>	Assistant Director of External Technology</b></h4>
                 Eric Hengber
                 <h4><b>Assistant Director of Internal Affairs</b></h4>
                 Hailey Paek
               <h4>  <b>Captains</b></h4> 
                    
              <table style="width:100%">
                <tbody class="dancerrelations">
                Kate Negron | Chloe Greene | Sean Cheema | Katelyn King | Jayden Spitulnik | Sydney Barnett | Jennifer Gardner | Marina Cheema | Mia Tunon | Casey Vargas | Rachel Glew | Phillip-Dylan Ndwiga | Alicia Grant | Riley Shapiiro | Jamie Knox
                    </tbody>
              </table>

            </div>
          </div>
        </div>
              <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q3">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a3" aria-expanded="false" aria-controls="a3">Family Relations</a>
            </h4>
          </div>
          <div id="a3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q3">
            <div class="panel-body">
            <b>The Family Relations Team</b> is composed of Captains that serve as liaisons between the Dance Marathon at UF community and the Miracle Families. Captains are paired with at least one Miracle Family and their responsibilities include maintaining consistent contact with their paired Miracle Family, facilitating cause-connection between their Family and the community, and organizing events between the Miracle Families and participating Organizations. Captains will attend monthly Family Fun Days, design and build the Family Room for the 26.2-hour Main Event, and facilitate activities and entertainment for the Miracle Families throughout the entirety of the year. Captains will build cause-connection with the entire Dance Marathon at UF community through fostering relationships between Miracle Families, Captains, Ambassadors, Emerging Leaders, Miracle Makers, and the rest of the community.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Dawson Geller
          <br><br>
                 <h4><b>Assistant Director of Family Events</b></h4>
                 Chloe Claxton
                 <h4><b>	Assistant Director of Tracking</b></h4>
                 Mary Bennett
                 <h4><b>Assistant Director of Internal Outreach</b></h4>
                 Jackson Bond
                 <h4><b>	Assistant Director of External Outreach</b></h4>
                 Kristen Russo
               <h4>  <b>Captains</b></h4> 
              <table style="width:100%">
                <tbody class="designandtech">
                Stella Hurwitz | Emma Shellard | Parker Brown | Samara Becker | Hadassah Sternfeld | Riley Hearn | Emma Sugarman | Logan Black | Lilly Smith | Aaron Fintz | Sophia Diaz | Jackie Bernstein | Piper Dowdell | Gabriella Paredes | Rachel Beer | Victoria Poliak | Gabriella Vogel | Alexa Diamond | Mollie Kron | Gabrielle Monk | Ashleigh Churchill | London Taylor | Jake Rattner | Catherine Hanania | Kaya Hall | Matthew Strogach | Ava Rechter | Shreya Shah | Ryan Magee | Janelle Sumbeling | Abhay Thungathurthi | Ashlin Cannella | Angela Trinh | Rebecca Beer | Haven Copeland | Jasmine Davis | Maddie Avergonzado | Arie Eitani | Joshua Brandt | Madison Daire
                   </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q4">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a4" aria-expanded="false" aria-controls="a4">Finance</a>
            </h4>
          </div>
          <div id="a4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q4">
            <div class="panel-body">
            <b>The Finance Team</b> is responsible for the financial oversight of Dance Marathon at UF. This is achieved through the creative planning and strategic tracking of fundraising campaigns throughout the year. Captains will actively participate in discussions and spearhead special projects involving the creation of fundraising campaigns, incentives, and templates used by all members of Dance Marathon at UF. Through collaborating with the Merchandise, Digital Marketing, and Organization Relations Teams, Finance Captains will have the opportunity to directly impact fundraising initiatives. The Finance Team tracks and projects year-long fundraising efforts while providing adept insight into program development and application by engaging members, increasing involvement, and coordinating ways to improve the fundraising capabilities of the Organization as a whole. Additionally, Finance Captains have the unique opportunity to apply matching and offline funds through Donor Drive, fostering a deeper connection to the success of Dance Marathon at UF.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Ryan Beany
          <br><br>
                 <h4><b>Assistant Director of Fundraising Development</b></h4>
                 Aaron Niazi
                 <h4><b>	Assistant Director of Finance Tracking</b></h4>
                 Tyler Bonnoront
               <h4>  <b>Captains</b></h4> 
		     <table style="width:100%">
                <tbody class="familyrelations">
                Alejandra Gomez-Pina | Karas Silver | Justien Nguyen | Abby Scapillato | Isabella Ebaugh-Santos | Miray Eser Eser | Jaxen Ranson | Jacob Bousky | Ava Fisher | Chloe Field | Grace Chukwu | Daniel Mateu
                  </tbody>
              </table>

            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q5">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a5" aria-expanded="false" aria-controls="a5">Leadership Development</a>
            </h4>
          </div>
          <div id="a5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q5">
            <div class="panel-body">
            <b>The Leadership Development Team</b> is responsible for overseeing and running the Emerging Leaders Program. This team will focus on developing and integrating students with minimal previous Dance Marathon experience into the Dance Marathon at UF community through tangible exposure to Dance Marathon’s various leadership roles. As a part of this team, Captains will work to cultivate the leadership skills of the newfound members of our Dance Marathon family. Captains are responsible for not only facilitating and leading their own small group meetings and attending general body meetings, but also tracking, overseeing, and organizing the involvement of the Emerging Leaders in various other Dance Marathon events. During the Main Event, Leadership Development Captains will be responsible for managing and monitoring Emerging Leader’s responsibilities in order to progress Emerging Leader’s roles within Dance Marathon as a whole.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Sophie Linale
          <br><br>
                 <h4><b>Assistant Director of Development</b></h4>
                 Alyssa Fennen
                 <h4><b>	Assistant Director of Engagement</b></h4>
                 Maya Vaidya
                 <h4><b>Assistant Director of Outreach</b></h4>
                 Emily Brundage
                 <h4><b>	Assistant Director of Tracking</b></h4>
                 Sophia Cuna
               <h4>  <b>Captains</b></h4> 
   <table style="width:100%">
                <tbody class="fundraising">
                Cristyl Rodriguez | William Lynfatt | Samantha Mirer | Sabrina Gomez | Bruna Pereira | Isabella Garcia | Julianne Jane | Laynee Plawa | Emma Michalski | Emma Ackerman | Madylin Morse | Grace Nesbit | Shannon Detert | Lindsay Nattis | Jillian Jones | Caitlyn Galvez | Gabriela Verez | Alexia Bello | Mackenzie Gale | Haley Jones | Isabelle Rosado | Joshua Song | Becca Reich | Rebekah Zuckerman | Gabriel Sengelmann | Mia Corigliano | Haley Black | Victoria Rios | Ally McGill | Stella Monforte | Ana Luiza Queiroz Damo | Surleen Sahni
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q6">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a6" aria-expanded="false" aria-controls="a6">Marathon Relations</a>
            </h4>
          </div>
          <div id="a6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q6">
            <div class="panel-body">
            <b>The Marathon Relations Team</b> is composed of Captains that are responsible for advising and growing Dance Marathon at UF’s high school programs, Mini Marathons. They energize and support our “Minis” by educating students on Children’s Miracle Network and Dance Marathon at UF’s history and culture, as well as guiding them through fundraising and community involvement events throughout their school year. They do this by holding weekly meetings with the High Schoolers and communicating with Student Overalls and Advisors on a consistent basis, as well as updating the rest of the team with their progress at weekly Captain meetings. Marathon Relations Captains focus on strengthening relationships with high schools in 8 different counties in North and Central Florida by helping them plan and implement their own Mini Marathons. Most importantly, the Marathon Relations team attends all of our Mini Marathons, as well as hosts our partnering high school programs during Dance Marathon at the University of Florida. Captains will be responsible for at least one school which they will work closely with all year in order to ensure that school’s success.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Lexi Devescovi
          <br><br>
                 <h4><b>Assistant Director of Established Programs</b></h4>
                 Madelyn Scaringe
                 <h4><b>	Assistant Director of Evolving Programs</b></h4>
                 Gabriella Petillo
                 <h4><b>Assistant Director of New Programs</b></h4>
                 Grace Nelson
                 <h4><b>	Assistant Director of Operations</b></h4>
                 Isabella Smedley
               <h4>  <b>Captains</b></h4> 
   <table style="width:100%">
                <tbody class="hospitality">
                Inara Drainville | Alexa Katz | Allison Pace | Eva Sutton | Kyley Holder | Faith Giambalvo | Haven Wilson | Tiffany Cain | Matthew Lehman | Kendyll Campi | Marisa Ricks | Grace Grier | Maria Sacchi | Sara Hassler | Julia Paulsen | Lucy Eichler | Kaylin Djoko | Amina Mubarak | Lindsay Hersh | Priya Kalaria | Kenley Robinson | Reagan Parker
                  </tbody>
              </table>


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q7">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a7" aria-expanded="false" aria-controls="a7">Merchandise</a>
            </h4>
          </div>
          <div id="a7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q7">
            <div class="panel-body">
            <b>The Merchandise Team</b> is responsible for creating and distributing all official Dance Marathon at the University of Florida merchandise, including clothing, accessories, and fundraising incentives. Captains are responsible for running the DM at UF store in Turlington every Wednesday, at community wide DM events, online, and at Mini Marathons in the spring. Captains must interact with internal and external members to sell merchandise, pass out incentives, and share our cause. Captains are also responsible for facilitating orders with Ambassadors and organizations on campus, organizing Check-In and Event shirts, regularly tracking inventory, managing online sales by packing and shipping orders, and internally fundraising. Before the Main Event, Captains finalize merch designs, fulfill orders, organize inventory, and set up areas for store and incentives. During the Main Event, Captains are responsible for working the merchandise store and incentives booth to pass out products to the Dance Marathon at UF community.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Olivia Knier
          <br><br>
                 <h4><b>Assistant Director of Incentives and Inventory</b></h4>
                 Alexandra Kaye
                 <h4><b>	Assistant Director of Fundraising</b></h4>
                 Abby Thibodeau 
                 <h4><b>Assistant Director of Internal Operations</b></h4>
                 Lauren Klein
                 <h4><b>	Assistant Director of Stores and Mini Marathons</b></h4>
                 Chloe Lindow
               <h4>  <b>Captains</b></h4> 
      <table style="width:100%">
                <tbody class="leadershipdevelopment">
                Morgan Mayhann | Camille Robinson | Lindsey Perry | Kenya Jarrett | Isabel Acosta | Abigayle Watson | Kiersten Grimes | Melody Alonso | Alexis Pullos | Joshua Yaciuk | Emily Celestrin | Taylor Barrett | Elana Gabbay | Adi Saigal | Alexandra Saclayan
                  </tbody>
              </table>


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q8">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a8" aria-expanded="false" aria-controls="a8">Morale</a>
            </h4>
          </div>
          <div id="a8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q8">
            <div class="panel-body">
            <b>The Morale Team</b> is responsible for keeping the spirit of Dance Marathon energetic, positive, and meaningful throughout the entire year, prior to and during the 26.2-hour Main Event. Captains do this by engaging with students and the UF community at both Dance Marathon and UF-related events, hosting fall and spring fundraisers, interacting with high school students at Mini Marathons, and much more. Morale Captains bring the Dance Marathon spirit to campus all year. They constantly work to uplift, inspire, and encourage every member of the DM at UF community. In addition, Morale is in charge of creating, planning, and executing “Theme Hours,” which are unique hours during the Main Event that include costumes and activities to entertain the Miracle Makers. Finally, Morale Captains create the Linedance, which connects every person at the 26.2-hour Main Event. Morale then teaches and demonstrates the Linedance at the Main Event and throughout the year.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Dylan Siegel
          <br><br>
                 <h4><b>Assistant Director of Captain Relations</b></h4>
                 Nina Rico
                 <h4><b>	Assistant Director of Event Planning</b></h4>
                 Lilliana Remillard
                 <h4><b>Assistant Director of Fundraising</b></h4>
                 Sam Gurrerro 
                 <h4><b>	Assistant Director of Mini Marathon Coordination</b></h4>
                 Raina Khanna
               <h4>  <b>Captains</b></h4> 
       <table style="width:100%">
                <tbody class="marathonrelationsnorth">
                Sean Campbell | Emily Sanz | DeLaney Brosen | Kylie Finkelstein | Carson Duke | Daniel Trethewey | Julia Zager | Annalee Watts | Lily Galkin | Sophie Fakhouri | Genesis Rodriguez | Ally Salzberg | Becca Harkins | Makenzie Cole | Zoe Donohoe | Candalyn Thompson | Jessica Perez | Cecilia Coleman | Hollyn O'Brien | Jordan Cohan | Casey Siner | Julia Mortensen | Lauren Maya | Cassandra Musca | Lily Darnell | Olivia Caldara | Kelsey Kettel | Anna Garst | Nika Forouzannia | Katie East | Lauren Price | Delaney Kennedy | Mary Grace Kelly | Olivia Martinez | Kayla Flores | Joshua Waters | Meghan Wilbrett | Sydney Kollas
                      </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q9">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a9" aria-expanded="false" aria-controls="a9">Multimedia</a>
            </h4>
          </div>
          <div id="a9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q9">
            <div class="panel-body">
            <b>The Multimedia Team</b> is responsible for capturing and editing all photography and videography content for Dance Marathon at the University of Florida throughout the year and during the Main Event. The main goal of the Multimedia Team is to capture content that represents the DM at UF brand and its cause. Multimedia Captains are expected to promptly edit, sort, and upload their photos and videos to be used on our organization’s Facebook, Instagram, YouTube, and other social media platforms. Captains are responsible for acquiring their own camera equipment and software needed, including Adobe Lightroom and Premiere Pro. In addition, Captains are expected to attend DM at UF events, including at least three high school Mini Marathons during the spring semester. Multimedia provides many opportunities for growth, collaboration and Captains are encouraged to learn from their peers. Captains should have previous experience and interest in photography and/or videography, editing, and be willing and motivated to grow in their craft throughout the year. During the 26.2-hour Main Event, Captains take photos and videos with rapid editing turn-around times to be uploaded to DM at UF’s various social media platforms.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Ava Dinow
          <br><br>
                 <h4><b>Assistant Director of Logistics</b></h4>
                 Braden Romano <!-- love u sm pookie -->
                 <h4><b>	Assistant Director of Photography</b></h4>
                 Sydney Crenshaw
                 <h4><b>Assistant Director of Social Media</b></h4>
                 Sky Augusta
                 <h4><b>	Assistant Director of Videography</b></h4>
                 Rebecca Salamon
               <h4>  <b>Captains</b></h4> 
       <table style="width:100%">
                <tbody class="merch">
                Anais Ramentol | Kyle DiDonato | Jennifer Blardonis | Alexa Freedman | Marissa Haberlin | Vanessa Garcia | Katie Apolo | Kathryn Burke | Briana Boyd | Maddox Forman | Kieran McAteer | Mallory Schumann | Libby Clifton | Lucy Tadlock | Delaney Craig | Abby Brady | Bayden Armstrong | Sophia Gonzalez
                  </tbody>
              </table>


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q10">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a10" aria-expanded="false" aria-controls="a10">Organization Relations</a>
            </h4>
          </div>
          <div id="a10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q10">
            <div class="panel-body">
            <b>The Organization Relations Team</b> facilitates communication and maintains strong relationships between Dance Marathon (DM) and UF student organizations. This team empowers student groups to get more involved with DM by building connections through dedicated student representatives called Ambassadors. Led by Captains, the Ambassador Program involves weekly meetings to keep Ambassadors informed, engaged, and equipped to involve their organizations in both programming and fundraising. Organization Relations Captains also collaborate with other Family Relations and Dancer Engagement Captains to ensure team alignment. In essence, they act as a liaison, fostering enthusiastic participation from our organizations and maximizing the collective impact of Dance Marathon.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Caroline Lee
          <br><br>
                 <h4><b>Assistant Director of IFC Relations</b></h4>
                 Peter Koltis
                 <h4><b>	Assistant Director of Panhellenic Relations</b></h4>
                 Ariana Martinez
                 <h4><b>Assistant Director of Student Relations</b></h4>
                 Zosia Czigany
                 <h4><b>	Assistant Director of Operations</b></h4>
                 Kelsey Reader 
               <h4>  <b>Captains</b></h4> 
      <table style="width:100%">
                <tbody class="morale">
                Cami Rosenthal | Avery Collada | Kaylee Wesner | Harmon Klein | Zoe Sakellarios | Shaila Spritzer | Holly Kaplan | Ariana Feldman | Julia Glacer | Carly Salk | Ryan LaLiberty | Chloe Megginson | Ashley Alex | Samantha Santo | Julianne Robinson | Corey Schwartz | Zach Wolsonovich | Liam Miller
                    </tbody>
              </table>


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q11">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a11" aria-expanded="false" aria-controls="a11">Outreach</a>
            </h4>
          </div>
          <div id="a11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q11">
            <div class="panel-body">
            <b>The Outreach Team</b> seeks to grow the Dance Marathon community beyond our student body by sharing our passion and mission to Faculty and Staff, Members’ Families, and the broader Gainesville community. The servant leaders of this team focus on creating and fostering lasting relationships through segmented communication to our external partners. This team serves to connect to Faculty and Staff, Members’ Families, and the external community to our year long engagements and organize events such as Faculty Appreciation Week, Family Weekend, and extending invitations to DM at UF events including but not limited to Moralloween, the Miracles in Color 5k, and the Main Event. The team will plan and engage in various volunteer opportunities with UF Health Shands Children’s Hospital on Giving Tuesday and throughout the duration of the school year. These efforts will culminate into an interactive experience during the Main Event to honor the entire community for their continued support of our cause.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Averie Engel
          <br><br>
                 <h4><b>Assistant Director of Community Engagement</b></h4>
                 Maya Hershkowitz
                 <h4><b>	Assistant Director of University Relations</b></h4>
                 Lani Tudor-Dodd
                 <h4><b>Assistant Director of Logistics</b></h4>
                 Alexandra Polo
               <h4>  <b>Captains</b></h4> 
    <table style="width:100%">
                <tbody class="multimedia">
                Catherine Hardy | Jordan Hentrich | Tori Kitchens | Danielle Work | Jenna Hentrich | Mila Mullin | Sonali Vijay | Gabriella Williams | Eden Zausner | Kylie Katims | Grace Carreno | Abhilasha Kadel
                    </tbody>
              </table>
            </div>
          </div>
        </div>

           <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q12">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a12" aria-expanded="false" aria-controls="a12">Partnerships</a>
              </h4>
            </div>
            <div id="a12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q12">
              <div class="panel-body">
              <b>The Partnerships Team</b> works year-round to solicit varied businesses, food distributors, and restaurants in the greater Gainesville area for monetary and in-kind item donations. Partnerships Captains spend a large portion of the year reaching out to these organizations to coordinate donations and sponsorships, building strong relationships, while utilizing skills of leadership, communication, and stewardship. The Partnerships Team is responsible for all food-related needs for the 26.2 hour Main Event and all Dance Marathon at UF events throughout the year, as well as coordinating monthly spirit nights for DM at UF. Captains will help serve food at Dance Marathon at UF events, including throughout the duration of the 26.2 hour Main Event, and will manage check-ins at spirit nights. The Partnerships Team also organizes Miracle Market in the Spring, Silent Auction at the Main Event, a Sponsor Appreciation Event in the Fall, and Miracle Kitchen, an annual food-themed event for our Miracle Children. 
          <br><br>
          <h4><b>Overall Director</b></h4>
          Jessica Winograd
          <br><br>
                 <h4><b>Assistant Director of Monetary Donations</b></h4>
                 Natalie Mann
                 <h4><b>	Assistant Director of In-Kind Donations</b></h4>
                 Jaiden Lopes
                 <h4><b>Assistant Director of Stewardship</b></h4>
                 Elle Lentz
                 <h4><b>	Assistant Director of Events</b></h4>
                 Chris Keeble
                 <h4><b>	Assistant Director of Logistics</b></h4>
                 Annie Ross
               <h4>  <b>Captains</b></h4> 
              <table style="width:100%">
                <tbody class="productions">
                Reagan Doucette | Courtney Carter | Annette Concepcion | Erin Mooney | Gabriela Wisz | Jessie Squadrito | Hadley Miller | Alex Licht | Sarah Klein | Marcus Khanna | Isabelle Azambuja | Kayla Bigelman | Emma Golub | Katie Glennon | Matthew Hill | Renee Zaiss
                        </tbody>
              </table>


              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q13">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a13" aria-expanded="false" aria-controls="a13">Productions</a>
              </h4>
            </div>
            <div id="a13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q13">
              <div class="panel-body">
              <b>The Productions Team</b> is responsible for all logistics and entertainment throughout the year and during the 26.2-hour Main Event. Productions Captains are in charge of building and organizing the homecoming float, planning and executing campus events (including but not limited to Captain Events in fall and spring), coordinating Main Event logistics (such as set up, clean up, strike planning, and event security), helping Morale with the planning and execution of Theme Hours, and booking entertainment for all of our events. The Productions Team carries out all operational duties in the O’Connell Center and assists other teams when necessary with logistics and entertainment.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Caroline Eaton
          <br><br>
                 <h4><b>Assistant Director of Talent Relations</b></h4>
                 Ashley Paek <!-- so proud of u bb -->
                 <h4><b>	Assistant Director of External Logistics</b></h4>
                 Joshua Rosenblatt
                 <h4><b>Assistant Director of Internal Logistics</b></h4>
                 Lillian Ghozali
                 <h4><b>	Assistant Director of Fundraising</b></h4>
                 Leah Johnson
               <h4>  <b>Captains</b></h4> 
     <table style="width:100%">
                <tbody class="pr">
                Addison Dodd | RyLee Haugh | Sarah Broe | Meagan Long | Claire Dinh | Layna Hood | Isabella Ward | Rebecca Weigle | Olivia Rodriguez | Dani Primerano | Kristina Guerra | Ava Scammell | Vivian Lopez | Meryn Rubenstein | Daniela San Martin | Elisa Crivelli
                        </tbody>
              </table>


              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q14">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a14" aria-expanded="false" aria-controls="a14">Public Relations</a>
              </h4>
            </div>
            <div id="a14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q14">
              <div class="panel-body">
              <b>The Public Relations Team</b> is responsible for maintaining the external views and public reputation of Dance Marathon at UF. PR Captains work year-round to uphold the organization’s mission statement, vision, and branding. This involves forming relationships with local media sources, writing blogs to share stories and important updates, and using social media (Instagram, Twitter, Facebook, and TikTok) to connect and engage with our audience. Captains use creativity to construct campaigns throughout the year, write storylines for Multimedia videos, and develop innovative ways to extend DM at UF’s reach and keep the community involved and informed. During the Main Event, Captains are also responsible for escorting the media, updating social media platforms and fundraising-incentive walls, and ensuring the smooth running of the official Livestream.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Grey Chapin
          <br><br>
                 <h4><b>Assistant Director of Internal Communications</b></h4>
                 Anabella Fernandez
                 <h4><b>	Assistant Director of External Communications</b></h4>
                 Rylie Pryor 
                 <h4><b>Assistant Director of Social Media</b></h4>
                 Lainey Shapiro
               <h4>  <b>Captains</b></h4> 
           <table style="width:100%">
                <tbody class="recruitment"> 
                Brooke Backof | Sofia Amoroso | Sofia Castaneda-Castellanos | Elizabeth Mallard | Taylor Dean | Sarah Abisror | Alexa Gingold | Alyza Dooley | Skylar Bons | Logan Feldman | Lexie Tantleff | Kaylee McCarthy | Lily Waldshan
                        </tbody>
              </table>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q15">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a15" aria-expanded="false" aria-controls="a15">Recruitment</a>
              </h4>
            </div>
            <div id="a15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q15">
              <div class="panel-body">
              <b>The Recruitment Team</b> is responsible for the recruitment of Miracle Makers, Kirstyn’s Krew, Captains, Emerging Leaders, and Organizations to participate in Dance Marathon at UF. Throughout the year, Captains will work with and give presentations to various external organizations, including those who are not currently a part of Dance Marathon, in order to expand our campus involvement. One of the main goals is to find new ways to support other organizations the way they support us. Captains will also utilize flyers about our cause across campus, working to convey the Miracles that Dance Marathon at UF creates and how each student can give back to their local Children’s Miracle Network Hospital. During the Main Event, Captains will lead tours for visitors of various organizations and families to show the culmination of hard work from the year. Each Recruitment Captain will additionally connect our Faculty and Staff to our year long engagement opportunities and organize events such as Faculty Appreciation Week. Recruitment Captains are integral parts of the movement as they inspire and create leaders in our community, all while raising awareness about Dance Marathon at UF and its purpose.
          <br><br>
          <h4><b>Overall Director</b></h4>
          Ava Orlando
          <br><br>
                 <h4><b>Assistant Director of Stewardship</b></h4>
                 Suki Sidhu
                 <h4><b>	Assistant Director of Tracking</b></h4>
                 Gabriella Proulx
                 <h4><b>Assistant Director of External Engagement</b></h4>
                 Isabella Duarte 
               <h4>  <b>Captains</b></h4> 
          <table style="width:100%">
                <tbody class="sponsorships">
                Jordan Hartman | Ariel Banfalvy | Abigail Elliott | Casey Strauss | Francesca Abarno | Daniela Velasquez | Amaana Quadir | Lea Mattia | Olivia Kaplan | Isabella Diaz Figueroa | Presley Berman | Kaitlyn Koviack | Prithika Bose | Rae Weinstein

                    </tbody>
              </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
          </div>
    </div>
    
    <div id="elp" class="tabcontent">
<h3>Program Description</h3>
<p> <b>The Emerging Leaders Program</b> aims to cultivate the leadership skills of new members of the Dance Marathon community by providing hands-on activities, shadowing opportunities with other captain teams, and education about Dance Marathon at the University of Florida and Children's Miracle Network. The program strives to engage students who have a passion for helping others and who are passionate in our fight for a future without childhood illness.</p>
<p>Members of the Emerging Leaders Program will attend weekly small group meetings and monthly general body meetings. Throughout their small group meetings, Emerging Leaders will focus on completing diverse projects that inspire the Dance Marathon community, expanding their knowledge, leadership, and personal fundraising efforts, and participating in bonding with like-minded peers. At general body meetings, Emerging Leaders will have the opportunity to learn more about the goals and efforts of Dance Marathon, hear inspiring stories from our Miracle Families, and gain exposure to prominent speakers from the University of Florida and the Gainesville community.
<p>During the Main Event, Emerging Leaders will have the ability to use the skills they’ve learned throughout the year to participate in various leadership opportunities as well as enjoy the Main Event from different perspectives.
<!-- <p>All in all, the Emerging Leaders Program aspires to provide students wanting to join the Dance Marathon movement with a unique and immersive learning opportunity that allows students to instill positive change within the organization while also learning about the Dance Marathon community as a whole.</p> -->
<h3>2024 Emerging Leaders</h3>
<!-- <p>The Emerging Leaders Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_3TNT3WCljhDOJLw" target="_blank">here</a>. This application will close at <b>5:00 PM EST on Monday, September 12</b>.</p> -->
             
<table style="width:100%">
    <tbody class="emergingleaders"> </tbody>
 </table>
<table style="width:100%">
<tr>
    <td>    Abby Neal    </td>
    <td>    Abhay Thungathurthi    </td>
    <td>    Abigail Lofstead    </td>
    <td>    Abigail Stafford    </td>
    <td>    Ahimsan Sivasekaran    </td>
    <td>    Alessandra Dunn    </td>
</tr>
 <tr>
     <td>    Alexandra Saclayan    </td>
     <td>    Alexia Bello    </td>
     <td>    Alissa Gonzalez-Mir    </td>
     <td>    Ally McGill    </td>
     <td>    Amberina Khoja    </td>
     <td>    Ana Luiza Queiroz Damo    </td>
</tr>
<tr>
    <td>    Angela Hanna </td>
    <td>    Anissa Moraille    </td>
    <td>    Annette Concepcion    </td>
    <td>    Annie Frost    </td>
    <td>    Anthony Soenhnlein    </td>
    <td>    Ashley Buckley    </td>
</tr>
<tr>
    <td>    Ava Mariani</td>
    <td>    Ava Eckstein-Schoemann    </td>
    <td>    Avery Collada    </td>
    <td>    Avery Thieman    </td>
    <td>    Bianca Filippone    </td>
    <td>    Bruna Pereira    </td>
</tr>
<tr>
    <td>    Catlin Neumann    </td>
    <td>    Caitlyn Galvez    </td>
    <td>    Camden Crews    </td>
    <td>    Carli Fitzpatrick    </td>
    <td>    Carolina Paz    </td>
    <td>    Caroline Fuss    </td>
</tr>
<tr>
    <td>    Caroline Morris    </td>
    <td>    Catherine Hanania    </td>
    <td>    Charlee Childers    </td>
    <td>    Chase LaGrande    </td>
    <td>    Chloe Hutt    </td>
    <td>    Christopher Hays    </td>
</tr>
<tr>
  <td>    Claire Dean    </td>
  <td>    Dakota Moss    </td>
  <td>    Daniela Frank-Fernandez    </td>
  <td>    Daniela San Martin    </td>
  <td>    Elisa Perez-Mena    </td>
  <td>    Elise Chapman    </td>
</tr>
<tr>
    <td>    Elizabeth Mallard    </td>
    <td>    Elizaveta Ivanova    </td>
    <td>    Ella Fedewa    </td>
    <td>    Ella Hartle    </td>
    <td>    Ella Zucchero    </td>
    <td>    Ellen Cocurull    </td>
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
  <td>    Ellie Alvis    </td>
  <td>    Elysse Sanchez    </td>
  <td>    Emely Almendarez    </td>
  <td>    Emilee Hass    </td>
  <td>    Emily Celestrin    </td>
  <td>    Emma Fetter    </td>
</tr>
<tr>
  <td>    Emma Joyner    </td>
  <td>    Emma Michalski    </td>
  <td>    Emma Shellard    </td>
  <td>    Erin Mooney    </td>
  <td>    Eryn Klaus    </td>
  <td>    Eva Sutton    </td>
</tr>
<tr>
    <td>    Evelyn McDaniel    </td>
    <td>    Fernando Santiago Balsalobre    </td>
    <td>    Gabriel Sengelmann    </td>
    <td>    Gabriela Castro    </td>
    <td>    Gabriela Wisz    </td>
    <td>    Gabriella Paredes    </td>
</tr>
<tr>
    <td>    Gavin Winkler    </td>
    <td>    Genesis Rodriguez    </td>
    <td>    Genevieve Lujan    </td>
    <td>    Georgia Little    </td>
    <td>    Grace Nesbit    </td>
    <td>    Haley Black    </td>
</tr>
<tr>
  <td>    Haley Hinkle    </td>
  <td>    Haley Randolph    </td>
  <td>    Halsey Fore    </td>
  <td>    Haven Copeland    </td>
  <td>    Heather Thomas    </td>
  <td>    Hudson Fry    </td>
</tr>
<tr>
    <td>    Illeana West    </td>
    <td>    Isabella Gomes    </td>
    <td>    Isabella Ward    </td>
    <td>    Isabelle Azambuja    </td>
    <td>    Isabelle Rosado    </td>
    <td>    Izzy Garcia    </td>
</tr>
<tr>
    <td>    Jackson Ferlan    </td>
    <td>    Jacob Bousky    </td>
    <td>    Jenna Bell    </td>
    <td>    Jennifer Lynfatt    </td>
    <td>    Jesse Zelahy    </td>
    <td>    Jessie Haller    </td>
</tr>
    <tr>
    <td>    Jillian Jones    </td>
    <td>    Jocelyn Riley    </td>
    <td>    Jocelyn Salpeter    </td>
    <td>    Jordyn Klein    </td>
    <td>    Julia Cherwony    </td>
    <td>    Julianna Tran    </td>
</tr>
<tr>
    <td>    Julianne Jane    </td>
    <td>    Justien Nguyen    </td>
    <td>    Karishma Advani    </td>
    <td>    Katelyn Uzila    </td>
    <td>    Katherine Anderson    </td>
    <td>    Katherine Timmins    </td>
</tr>
<tr>
    <td>    Katrina Langer    </td>
    <td>    Kayla Flores    </td>
    <td>    Kendall O'Connor    </td>
    <td>    Kiersten Grimes    </td>
    <td>    Kristina Vela    </td>
    <td>    Kyle Kuhn    </td>
</tr>
<tr>
    <td>    Kyle Silverstain    </td>
    <td>    Kyra Jones    </td>
    <td>    Lauren Woodhouse    </td>
    <td>    Layna Hood    </td>
    <td>    Liam Knowles    </td>
    <td>    Lilah Edwards    </td>
</tr>
<tr>
  <td>    Lindsay Nattis    </td>
  <td>    Lindsey Perry    </td>
  <td>    Luisa Peralta    </td>
  <td>    Macey Warring    </td>
  <td>    Madeline Walsh    </td>
  <td>    Madisyn Moore     </td>
</tr>
<tr>
    <td>    Mallory Loge    </td>
    <td>    Marianna Mendoza    </td>
    <td>    Marisa Fabian    </td>
    <td>    Marisa Ricks    </td>
    <td>    Mary Chase Germain    </td>
    <td>    Matthew Anderson     </td>
</tr>
<tr>
  <td>    Meg Orie     </td>
  <td>    Meghan Dunlap     </td>
  <td>    Mia Corigliano    </td>
  <td>    Mollie Kron     </td>
  <td>    Morgan Kronlage    </td>
  <td>    Naseh Sukhera     </td>
</tr>
<tr>
    <td>    Natalie Mann     </td>
    <td>    Naydelin Trejo    </td>
    <td>    Nicole Barroso    </td>
    <td>    Olivia Book    </td>
    <td>    Olivia Martinez    </td>
    <td>    Olivia Rodriguez    </td>
</tr>
<tr>
    <td>    Raaghuv Nandur    </td>
    <td>    Rachel Leiter    </td>
    <td>    Rachel Yavner</td>
    <td>    Rebecca Beer    </td>
    <td>    Rebekah Zuckerman    </td>
    <td>    Riley Taylor    </td>
</tr>
<tr>
  <td>    Rylee Brown    </td>
  <td>    Ryleigh Gray    </td>
  <td>    Sabrina Gomez    </td>
  <td>    Samantha Mirer    </td>
  <td>    Samantha Puma    </td>
  <td>    Samantha Santo    </td>
</tr>
<tr>
  <td>    Samantha Squires    </td>
  <td>    Samuel Mento</td>
  <td>    Sarah Broe    </td>
  <td>    Sarah Eisenberg    </td>
  <td>    Sarah Thomas    </td>
  <td>    Shannon Detert    </td>
</tr>
<tr>
  <td>    Skylar Bons    </td>
  <td>    Sofia Amoroso    </td>
  <td>    Sofia Bostic    </td>
  <td>    Sophia Monsalve   </td>
  <td>    Sophia Ode    </td>
  <td>    Spencer Sturman    </td>
</tr>
<tr>
  <td>    Stella Monforte    </td>
  <td>    Surleen Sahni    </td>
  <td>    Sydney Holderman    </td>
  <td>    Sydney Ohs    </td>
  <td>    Sydney Sever    </td>
  <td>    Sydney Shapiro    </td>
</tr>
<tr>
  <td>    Sydney Stresen-Reuter    </td>
  <td>    Sydney Yee    </td>
  <td>    Tamille Hutson    </td>
  <td>    Thomas Chicles    </td>
  <td>    Victoria Hurles    </td>
  <td>    Victoria Rios    </td>
</tr>
<tr>
    <td>    Vladimir Handjiev    </td>
    <td>    William Cioffi    </td><!--
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
    <div id="miracle-makers" class="tabcontent">
<div class="subtab">
    <button id="whatButton" class="tablinks-subtab" onclick="openSubTab(event, 'what')">WHAT IS A MIRACLE MAKER?</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'dfaq')">MIRACLE MAKER FAQS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'resources')">MIRACLE MAKER RESOURCES</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'individual')">MIRACLE MAKING AS AN INDIVIDUAL</button>

</div>
<div id="what" class="tabcontent-subtab">
<h3>What Is A Miracle Maker?</h3>
<p>Dance Marathon at the University of Florida is an annual event benefiting the patients of UF Health Shands Children's Hospital in Gainesville, Florida. Each year, students stay awake and on their feet, if able, to raise money and awareness for Children's Miracle Network Hospitals.</p>
            <p>As a Miracle Maker, you will experience one of UF’s most adored traditions. Throughout the duration of the Main Event, you will learn our Linedance, enjoy live entertainment, eat delicious food from our local Sponsors, and hear inspiring stories from our Miracle Families.</p>
            <p>In addition to standing, if able, for the duration of the Main Event, Miracle Makers will have year-long activities to take part in such as a Miracle Maker Retreat, Registered Miracle Maker Workshops, bonding with their internal Organization and more!</p>
        <!--    <p><a href="https://events.dancemarathon.com/event/dmatufdr24" target="_blank">Click Here to Register to Dance</a></p> -->
            <p>Please email Raegan DiRenzo, Dancer Engagement Overall Director, at <a href="mailto:rdirenzo@floridadm.org">rdirenzo@floridadm.org </a> with any questions!</p>
          </div>
</div>

<div id="dfaq" class="tabcontent-subtab">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q17">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a17" aria-expanded="false" aria-controls="a17">
                    If I register to be a Miracle Maker, am I guaranteed a Miracle Maker spot at DM?
                    </a>
                  </h4>
                </div>
                <div id="a17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q17">
                  <div class="panel-body">
                  Not necessarily. Miracle Maker spots are allocated based off of participation and fundraising goals set for each Organization and individual.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q18">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a18" aria-expanded="false" aria-controls="a18">
                    I already registered to fundraise, do I need to register to be a Miracle Maker?
                    </a>
                  </h4>
                </div>
                <div id="a18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q18">
                  <div class="panel-body">
                  Yes, registering to fundraise and registering to be a Miracle Maker are two separate things.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q19">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a19" aria-expanded="false" aria-controls="a19">
                    Do I have to be a UF student to be a Miracle Maker?
                    </a>
                  </h4>
                </div>
                <div id="a19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q19">
                  <div class="panel-body">
                  Yes, you must be enrolled as a student during the Spring semester in which Dance Marathon takes place. This also applies to those registered with UF who are doing an internship in place of classes.
                  </div>
                </div>
              </div> 
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q20">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a20" aria-expanded="false" aria-controls="a20">
                      I don’t have my DM shirt, can I still check in for spirit points?
                    </a>
                  </h4>
                </div>
                <div id="a20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q20">
                  <div class="panel-body">
                    You must be wearing a DM shirt to check in for spirit points. The purpose of wearing the shirt is to spread awareness around campus.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q21">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a21" aria-expanded="false" aria-controls="a21">
                      How do I register to be a Miracle Maker?
                    </a>
                  </h4>
                </div>
                <div id="a21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q21">
                  <div class="panel-body">
                    Click the Miracle Maker Resources tab above for instructions.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q22">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a22" aria-expanded="false" aria-controls="a22">
                      How do I register to fundraise?
                    </a>
                  </h4>
                </div>
                <div id="a22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q22">
                  <div class="panel-body">
                    See <a href="https://floridadm.org/register-to-fundraise">Register to Fundraise</a> for instructions.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q23">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a23" aria-expanded="false" aria-controls="a23">
                      Can I still be a Miracle Maker if I am the Ambassador for my Organization’s team?
                    </a>
                  </h4>
                </div>
                <div id="a23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q23">
                  <div class="panel-body">
                    Yes!
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q24">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a24" aria-expanded="false" aria-controls="a24">
                      Who can come to the Event?
                    </a>
                  </h4>
                </div>
                <div id="a24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q24">
                  <div class="panel-body">
                    Anyone!
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q25">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a25" aria-expanded="false" aria-controls="a25">
                      What happens when someone registers to be a Miracle Maker and isn’t given a spot?
                    </a>
                  </h4>
                </div>
                <div id="a25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q25">
                  <div class="panel-body">
                    The money paid for the registration fee goes toward their Organization’s total amount raised.
                  </div>
                </div>
              </div>

            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q26">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a26" aria-expanded="false" aria-controls="a26">
                      What if I am not in an Organization and want to register as an individual?
                    </a>
                  </h4>
                </div>
                <div id="a26" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q26">
                  <div class="panel-body">
                    You do not have to be in an Organization to register to be a Miracle Maker. You can register as an individual using the link under Miracle Maker Resources; individual Miracle Makers will be placed onto the Gator Aides team. Gator Aides is a team that allows individual Miracle Makers to participate in Dance Marathon at UF with a group although they are not registered with an Organization.
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
<h3>Register to be a Miracle Maker</h3>
           <!-- <p><a href="https://events.dancemarathon.com/event/dmatufdr24" target="_blank">Click here to register to Dance!</a></p> -->
            <P>Follow the link and select “Buy Tickets!” Once you complete your registration, a Dance Marathon Captain will reach out to you with further details.</p>
            <p>To be a Miracle Maker, participants must be enrolled as students at the University of Florida during the spring semester. This includes students who are enrolled but may have an internship in place of classes.</p>
            <p>Registering to be a<em>Miracle Maker</em> is <u>not</u> the same thing as registering to <em>fundraise</em>. Anyone may register to fundraise at any time throughout the year, but Miracle Maker Registration is only open for the two-week period in the Fall and in the Spring.</p>
            <p>You may register to be a Miracle Maker with an Organization team or as an individual. If you are a member of an Organization that does not currently participate in Dance Marathon, you may start a team by registering on DonorDrive.</p>
            <p><em>Please note: registration does not guarantee Miracle Maker spots. Miracle Maker spots are allocated in the Spring based off of Organizational or individual achievements.</em></p>
<br></br>
          </div>
</div>
</div>
<div id="individual" class="tabcontent-subtab">
<h3>Miracle Making as an Individual</h3>
            <p></p>
            <p>You have the option to register to be a Miracle Maker as an individual. When registering to be a Miracle Maker, it will ask you which Organization you are participating with, and there will be an option that says “Participating as an Individual.” Once you complete your registration, a Dance Marathon Captain will reach out to you with further details.</p>
            <p>Individual Miracle Makers are placed on a team called Gator Aides. Being a part of Gator Aides will allow you to make connections with other individual Miracle Makers as well as our Miracle Children. Gator Aides have additional opportunities, meetings, and events throughout the year you can choose to attend that will allow you to become even more involved in our cause. </p>
            <p>If you have any questions about Miracle Making as an individual or the Gator Aides team, please contact the Recruitment Overall Director, Ava Orlando, at <a href="mailto:aorlando@floridadm.org">aorlando@floridadm.org</a>.</p>
            <br></br>
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
                    <p> Please email Mary Kate Arbuckle, Recruitment Overall Director, at <a href=mailto:marbuckle@floridadm.org>marbuckle@floridadm.org</a> with any questions! </p>
                    
                    <p><i> *Note: You cannot be on Kirstyn’s Krew and a Dance Marathon Captain Team. </i></p>
                    <!-- This is the Just copy and paste the 2018 link here with updating the words -->
                     <!-- <h2><a href="https://ufl.qualtrics.com/jfe/form/SV_aeH0EvqGWgRY4nz" target="_blank">2019 Emerging Leaders Program Application</a></h2>
                     <h2><a href="https://ufl.qualtrics.com/jfe/form/SV_9XiQPLmMzs1x9hH" target="_blank">2019 Captain Application</a></h2> -->

                    <p></p>
</div>
    <div id="orgs" class="tabcontent">
    <h3>Organizations</h3>
		  <p>A variety of University of Florida affeliated Organizations participate in Dance Marathon every year!</p>
      <p>Organizations are the backbone of our philanthropy, and we are always looking for more people to join our family! If you would like to get your organization involved with Dance Marathon, please contact the Recruitment Overall, Ava Orlando, at <a href=mailto:aorlando@floridadm.org>aorlando@floridadm.org</a>.</p>
      <p>Below are the Organizations currently involved in Dance Marathon at UF 2023:</p>

      <table class="table table-bordered table-middle">
        <tbody>
          <?php
          $column_number = 4;
          $total_orgs = count($greek_organizations);
          $increment = ceil($total_orgs/$column_number);
          $extra_cells = $increment * $column_number - $total_orgs;

          for($i = 0; $i < $increment; $i++) {
            echo '<tr>';
            for($j = $i; $j < $total_orgs + $extra_cells; $j += $increment) {
              if($j < $total_orgs) {
                if($i == 0) {
                  echo '<td class="col-sm-3">';
                } else {
                  echo '<td>';
                }
                if($greek_organizations[$j]['link'] !== '') {
                  echo '<a href="'.$greek_organizations[$j]['link'].'"></td>';
                } else {
                  echo $greek_organizations[$j]['organization'].'</td>';
                }
              } else {
                echo '<td>&nbsp;</td>';
              }
            }
            echo '</tr>';
          }
          ?>
        </tbody>
      </table>
        </div>
        
<!-- <div id="service" class="tabcontent">
<div class="subtab">
    <button id="serveButton" class="tablinks-subtab" onclick="openSubTab(event, 'serve')">SERVICE</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'vol')">VOLUNTEER DATES</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'community')">COMMUNITY PARTNERS</button>
</div>
<div id="serve" class="tabcontent-subtab">
<h3>Service</h3>
                        <p>Dance Marathon at UF aims to support the community which gives so much to our cause by uplifting local non-profits and service organizations, our Community Partners,  throughout the year! DM at UF offers service opportunities for our members to engage with these Community Partners year round and earn spirit points. </p>
                        <p>If you are interested in becoming a Community Partner or have any questions, please contact our Community Outreach Overall Director, Aria Patel at
                        <a href="mailto:apatel@floridadm.org">apatel@floridadm.org</a>.</p>
  </div>
</div>

<div id="vol" class="tabcontent-subtab">
<h3>Volunteer Dates</h3> -->
                          <!--<p>Dance Marathon at University of Florida is an organization led by servant leaders that strive to spread their passion for giving and creating change beyond our immediate campus. Members will receive one spirit point for engaging in a service event. </p>
                        <p> Giving Tuesday - November 30th, 2021 </p>
                          <p> This is an organization-wide service day where all members will be able to dedicate the day to giving back to our community by volunteering with our Community Partners.
                          Please register to volunteer for this event by clicking
                          <a href="https://docs.google.com/spreadsheets/d/17hRc6pJBqxHhnI-4G_Rkv9ikcnVg46HqPKTsaPnY9bc/edit">here</a>. </p>
                          <p> If you are unable to volunteer, please participate in the Canned Food Drive with Hitchcock Field and Fork Food Pantry between 11/8 - 11/18 by bringing a canned food to your meetings or check-ins for an extra spirit point.</p>-->
                        <!-- <p> Check back soon! </p>
      </div>
</div>
<div id="community" class="tabcontent-subtab">
<h3>Meet our Community Partners:</h3>
                          <p>Meet our Community Partners! These non-profit and service organizations help better the lives of those who live in the Gainesville Community, the community which gives so much to Dance Marathon at UF. As an organization whose goal is to create change, we hope to uplift our Community Partners throughout the year.
                        </p>
                        <div class="col-md-8">
                        </div>
                            <div style="height: 35px;"></div>
                            <div class="row">
                            <div class="col-sm-7">
                                <img class="img-responsive" style="display: block; margin: auto;" src="assets\images\sponsors\2018\2023CommunityPartners.jpg" width="865" height="1080"/></a>


                </div>
                </div>
                
</div> -->

<script>
    window.addEventListener('load', function() {
        document.getElementById('defaultTab').click();
    });

    
</script>



<?php include("includes/foot.php"); ?>