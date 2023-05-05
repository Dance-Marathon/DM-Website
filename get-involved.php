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
        'organization'  =>  'Alpha Phi Omega',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Alpha Tau Omega',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'AMSA',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Beta Theta Pi',
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
        'organization'  =>  'CHSC',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'College of Education',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'College of Medicine',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'College of Nursing',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'College of Pharmacy',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Cupcakes for a Cure',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Dancin&#39; Gators',
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
        'organization'  =>  'Delta Upsilon',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Delta Zeta',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Doctors Without Borders Student Chapter',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Dream Team',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Epsilon Sigma Alpha',
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
        'organization'  =>  'Gator Band',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Hispanic Student Association',
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
        'organization'  =>  'National Society of Collegiate Scholars',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Nina Karlinsky Memorial Team',
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
        'organization'  =>  'Phi Epsilon Kappa',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Phi Eta Sigma Honor Society',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Phi Gamma Delta (FIJI)',
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
        'organization'  =>  'Phi Sigma Pi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Pi Beta Phi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Pi Delta Psi',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Pi Kappa Alpha',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Pi Kappa Phi',
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
        'organization'  =>  'Preview Staff',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Public Health and Health Professions',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'SHPE',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Sigma Alpha',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Sigma Alpha Epsilon',
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
        'organization'  =>  'Sigma Phi Lamda',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'Society of Women Engineers',
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
        'organization'  =>  'The Navigators',
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
        'organization'  =>  'Tone Def A Cappella',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'UF Honors Program',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'UF Innovation Academy',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'UF MBA',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'UF MEDLIFE',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'UF Signing Gators',
        'link'          =>  ''
        ),
      array(
        'organization'  =>  'UFAA: Florida Cicerones',
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
         // Get all elements with class="tabcontent" and hide them
    tabcontentSub = document.getElementsByClassName("tabcontent-subtab");
    for (i = 0; i < tabcontentSub.length; i++) {
      tabcontentSub[i].style.display = "none";
    }
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
        background-color: #233563;
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
    color: #e2883c;
    border-bottom: 2px solid #e2883c;
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
     
                                           <ul><b style="color: #233563">Organization:</b>     Student Organizations work year-round to support our cause.</ul>
                         <ul><b style="color: #233563">Dancer:</b> Dancers stand on their feet if able for the duration of our Main Event in April to raise funds and awareness for UF Health Shands Children’s Hospital.</ul>
                                             <ul><b style="color: #233563">Emerging Leader:</b> Members of our Emerging Leaders Program work alongside the Recruitment Team, providing support to Captain Teams and brainstorming new ideas to ensure a successful future for our organization.</ul>
                         <ul><b style="color: #233563">Captain:</b> Captains belong to 1 of 15 teams and take on yearlong responsibilities specific to their respective teams, with the goal of supporting and promoting our organization.</ul>
                         <ul><b style="color: #233563">Assistant Directors:</b> Individuals who work all year with their respective Overall Directors to ensure steady growth and management within their Captain Teams.</ul>
                         <ul><b style="color: #233563">Overall Directors:</b> The 20 individuals who lead Dance Marathon efforts throughout the year. They are responsible for leading their respective Captain Teams to oversee, expand, and promote our organization.</ul>
     
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
        <button class="tablinks" onclick="openCity(event, 'alum')">ALUMNI</button>
        <button class="tablinks" onclick="openCity(event, 'apps')">APPLICATIONS</button>
        <button class="tablinks" onclick="openCity(event, 'ambassadors')">AMBASSADORS</button>
        <button class="tablinks" onclick="openCity(event, 'captain-teams')">CAPTAIN TEAMS</button>
        <button class="tablinks" onclick="openCity(event, 'elp')">EMERGING LEADERS</button>
    </div>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'dancers')">DANCERS</button>
        <button class="tablinks" onclick="openCity(event, 'kirstyn')">KIRSTYN'S KREW</button>
        <button class="tablinks" onclick="openCity(event, 'orgs')">ORGANIZATIONS</button>
        <button class="tablinks" onclick="openCity(event, 'service')">SERVICE</button>
    </div>
    <div id="alum" class="tabcontent">
<h3>About</h3>

<p>Since 1995, Dance Marathon at UF has raised over $30 million for UF Health Shands Children's Hospital, our local Children’s Miracle Network Hospital. Thanks to your dedication and support throughout your college years, we have become the most successful student-run philanthropy in the southeastern United States.</p>
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
          <h4><i style="color:#e2883c;"><b>(1) Miracle Membership</b></i></h4>
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
        <h4><i style="color:#233563;"><b>(2) Legacy Membership</b></i></h4>
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
                <p><b style="color:#e2883c;">Event Package:</b></p>
                <ul>
                    <p>DMA members can purchase an exclusive event package to enhance their experience during the Dance Marathon weekend in spring. This package is ideal for those who plan to attend Dance Marathon at UF and can be purchased for $40 up to one month before the event. If this is your first year signing up for the DMA, you will automatically receive a complimentary Event Package included in your Lifetime Miracle Membership. Purchase the DMA Event Package <a href=https://dance-marathon-at-uf-510104.square.site/product/2022-dance-marathon-alumni-lifetime-membership/1?cs=true&cst=custom> here</a>.</p>
                    <p><b style="color:#e2883c;">The Event Package includes:</b></p>
                    <li>Opportunity to participate in a behind-the-scenes hospital tour</li>
                    <li>Opt-in to receive the DMA event t-shirt**</li>
                    <li>Discounted Miracle Gala tickets</li>
                    <li>Tickets to the DMA Brunch during the event</li>
                    <li>Ability to receive fundraising incentives during the event</li>
                    <li>Access to the Family Room at the event</li>
                    <p><small>*DMA event t-shirt opt-in includes a direct mailing option for those members unable to attend the  event.</small></p>
                </ul> <!--
        <h4><b><u><i>Please note:</i></u></b></h4>
        <p>1. As a <b style="color:#e2883c;">Miracle Member</b> of the DMA, you will have the benefit to maintain this status for life. You may elect to upgrade your membership to the new <b style="color:#233563;">Legacy Membership</b> as outlined below.</p>
        <p>2. Any returning member, whose current membership lapses, will automatically move into the <b style="color:#e2883c;">Miracle Membership</b> status. These members may upgrade to the new <b style="color:#233563;">Legacy Membership</b> at any time throughout the year, up until one month before Dance Marathon weekend. </p>
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
<br>Thank you for your interest in Dance Marathon at the University of Florida 2023.</br>
<br>The online application forms are linked below. In order to be considered for an Assistant Director, Captain, ELP, or Ambassador position, you must:</br>
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
<b>Assistant Director Applications</b> The Assistant Director Application can be found <a href="assets/PDFs/AD Application 2024.pdf" target="_blank">here</a>. This application will close at <b/>5:00 PM EST on Wednesday, May 10</b>. </p>

<b>Captain Application</b> Now Closed </p>
<!--    The Captain Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_ey6G1kOFYWmcrTo" target="_blank">here</a>. We highly recommend completing your Application in a document and transferring it to Qualtrics when you’re ready to submit. This application will close at <b/>11:59 PM EST on Friday, September 3</b>.
<p>A PDF of all Captain Application questions can be found <a href="assets/PDFs/ApplicationQuestions.pdf" target="_blank">here</a>.</p>
-->
<b>Emerging Leaders Application</b> Now Closed </p>
<!--    <p>The Emerging Leaders Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_0vzpwH8jOnh0YRw" target="_blank">here</a>. This application will close at <b>11:59 PM EST on Thursday, September 9</b>.</p> -->
<b>Ambassador Application</b> Now Closed </p>
<p></p>
<p>If you have any questions regarding applications, please reach out to our Membership Manager, Toni JeBailey, at <a href="mailto:tjebailey@floridadm.org">tjebailey@floridadm.org</a>.</p>
                    
</div>

    <div id="ambassadors" class="tabcontent">

    <div class="subtab">
        <button class="tablinks-subtab" onclick="openSubTab(event, 'become')">BECOME AN AMBASSADOR</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, 'start')">STARTING A TEAM</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, '22amb')">2023 AMBASSADORS</button>
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
<p>Each team will need an Ambassador to represent them. Please email the Fundraising & Organizational Development Overall, Dilon Bruncaj, at <a href=mailto:dbruncaj@floridadm.org>dbruncaj@floridadm.org</a> to inform them you have created a team and will be serving as the Ambassador or have plans of selecting an Ambassador in the near future. The Fundraising & Organizational Development Overall will not be able to get in contact with you unless you email them to let him know you started a team.</p>
          </div>
    </div>
    <div id="22amb" class="tabcontent-subtab zone">
<br></br>

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
               <!--<h4>  <b>Captains</b></h4> 
               <table style="width:100%">
                <tbody class="outreach">
			Alyssa Ali |
			Regan Bellantoni |
			Miranda Benjamin |
			Caitlin Casady |
			Emily Chattin |
			Adele Dorion |
			Abigail Dugas |
			Aadil Farid |
			Isabella Fogarty |
			Gabi Goldenberg |
			Maya Hershkowitz |
			Miles Jeffares |
			Maggie Mcguane |
			Nataly Montenegro |
			Sarina Parikh |
			Zoe Primack |
			Heather Sley |
			Lani Tudor-Dodd |
			Sonali Vijay |
			Gabriella Williams |
			David Zaibert
          </tbody>
              </table>-->
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
                <b>The Dancer Relations Team</b> is responsible for welcoming and communicating with Dancers by hosting Check-Ins, tracking Dancer involvement and providing a year long experience for Dancers through events and other engagement throughout the year. DR Captains work alongside the Recruitment Team to help register Dancers during registration pushes. Captains will be responsible for a group of Dancers that they will communicate with to promote all DM at UF and Dancer events or opportunities. Captains are expected to attend Check-Ins on Wednesdays in Turlington, where they will Check in Dancers, log their Spirit Points, help with the Check-Ins activity, and spread the word about DM at UF on campus. Dancer Relations also plans events and other engagement specifically for Dancers, which Captains will help execute! At the Main Event, their job is to Check in Dancers, encourage and support them throughout the 26.2 hours, and run swim/shower overnight. As a DR Captain, you are also expected to be a support system for your Dancers and be a resource to them throughout their entire DM at UF experience!
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
              <!--<h4><b>Captains</b></h4> 
                    
              <table style="width:100%">
                <tbody class="dancerrelations">
			Aline Capuano |
			Ashleigh Churchill |
			Bianca Ciancio |
			Abigail Cohen |
			Mai-Brie Conklin |
			Bayley Edwards |
			Maisie Farrell |
			Andie Galpern |
			Garrett Gerard |
			Marielle Goldschlag |
			Natalie Good |
			Michael Hampton |
			Annika Holmstrom |
			Payton Kadivar |
			Alex Katsotis |
			Emily Kelly |
			Nicole Klein |
			Sabrina Kresse |
			Kellie Kulp |
			Caroline Lee |
			Kaleigh Lentine |
			Daniel Lewis |
			Morgan Liotta |
			Lauren Maya |
			Carley Mccammon |
			Mary Pahides |
			Alejandro Ramirez |
			Lauren Rugh |
			Carly Salk |
			Kristin Santaniello |
			Samantha Sawka |
			Alli Schwartz |
			Rachael Siegel |
			Samantha Smith |
			Gianna Spadavecchia |
			Sara Sugerman |
			Amanda Veltri |
			Chloe Wai
                    </tbody>
              </table>-->

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
		    <br>
              <h4><b>Overall Director</b></h4>
              Brianna Barron
              <br><br>
              <h4><b>Assistant Director of Internal Design</b></h4>
              Cameron Appel
		<h4><b>Assistant Director of External Design</b></h4>
              Jordan Corina
              <h4><b>Assistant Director of Technology</b></h4>
              poopie
              <h4><b>Assistant Director of Internal Affairs</b></h4>
              Anderson Allen
            <!--  <h4>  <b> Captains</b></h4> 
              <table style="width:100%">
                <tbody class="designandtech">
			 Rachel Bernstein |
			Lexy Cohen |
			Camille Eyman |
			Jessica Freeman |
			Gabrielle Friedman |
			Natalie Kwak |
			Joshua Lamb |
			Katie Mcdonnell |
			Lauren Nigri |
			Rachel Peterson |
			Sami Sepehri |
			Emsley Thornton |
			Aaron Upchurch |
			Sydney Wall 
                   </tbody>
              </table>-->
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
              <b>The Family Relations Team</b> Captains serve as liaisons between the Dance Marathon at UF community and the Miracle Families. Captains are paired with at least one Miracle Family and their responsibilities include maintaining consistent contact with their paired Miracle Family, facilitating cause-connection between their Family and the community, coordinating the Pen Pal program between various groups, and organizing events between the Miracle Families and participating Organizations. Captains will attend monthly Family Fun Days, design and build the Family Room for the 26.2-hour Main Event, and facilitate activities and entertainment for the Miracle Families throughout the entirety of the year. Captains will build cause-connection with the entire Dance Marathon at UF community through fostering relationships between Miracle Families, Captains, Ambassadors, Emerging Leaders, Dancers, and the rest of the community.
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

    <!--<h4>      <b>Captains</b></h4> 
		     <table style="width:100%">
                <tbody class="familyrelations">
		        Nolan Anschuetz |
		        Samara Becker |
		        Rachel Beer |
			Mary Bennett |
		        Logan Black |
		        Jackson Bond |
			Brooke Christopher |
			Olivia Daniel |
			Ethan Davis |
			Jamsiyn Derks |
			Taylor Doering |
			Piper Dowdell |
			Lily Dvorchik |
			Faith Freeman |
			Grace Freeman |
			Dawson Geller |
			Hannah Kairab |
			Patrick Kline |
			Abbey Lantinberg |
			Samantha Litman |
			Ryan Magee |
			Abby Mcdade |
			Alexa Miller |
			Gabrielle Monk |
			Macy Monsour |
			Hollen Parsons |
			Connor Pitisci |
			Faith Ramirez |
			Kristen Russo |
			Ally Salzberg |
			Molly Sankey |
			Halle Silver |
			Amelia Tayag |
			Paola Toro |
			Ali Torregrosa |
			Noah Towbin |
			Gabby Vogel |
			Rachel Vogin |
			Alexis Waltzer |
			Anne-Charles Zimmer
                  </tbody>
              </table>-->

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
            <b>The Fundraising and Organization Development Team</b> is both responsible for financial oversight of Dance Marathon at UF and the coordination of the Ambassador Program. This program provides student Organizations at UF the opportunity to develop their involvement in Dance Marathon at UF through their chosen Ambassadors.  Each Captain is assigned several Ambassadors to work with throughout the year, acting as the liaison for the Organization to engage members, increase involvement, and provide concrete ways they can improve their fundraising capabilities. These Captains play an integral role in the success of Dance Marathon at UF by ensuring that their Ambassadors have updated and accurate information regarding their finance tracking, upcoming events and deadlines. Captains will lead weekly meetings with their assigned Ambassadors and are also expected to coordinate with the Family Relations and Dancer Relations Teams in regard to their Organization(s). 
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
   <!--<h4>  <b> Captains</b></h4> 
   <table style="width:100%">
                <tbody class="fundraising">
			Mya Arong |
			Elijah Bloyer |
			Aine Booth |
			Alexander Briones |
			Savannah Chalmers |
			Grey Chapin |
			Abby Coleman |
			Jessie Cramer |
			Olivia Delevan |
			Daniel Dvorak |
			Morgan Emmi |
			Clara Flint |
			Irina Frangos |
			Andrew Kistner |
			Zackary Kroyer |
			Madalyn Lueken |
			Victoria Lutz |
			Vaia Mavilla |
			Alexa Mazloff |
			Kara Motsch |
			Andrew Neclerio |
			Nolan Sanchez |
			Ellie Saunders |
			Morgan Simpson |
			Nick Soviero |
			Lara Symons |
			Jack Watkins
                </tbody>
              </table>-->
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
              <b>The Hospitality Team</b> works year-round with local restaurants to coordinate monthly Hospitality fundraising nights for Dance Marathon at UF. Captains spend a large portion of the year reaching out to large food corporations and local restaurants in the Gainesville area to coordinate donations and corporate sponsorships. Hospitality is responsible for all food-related needs for the 26.2-hour Main Event and all community events throughout the year. Captains will help serve food at Dance Marathon at UF events and will Check in attendees of our Hospitality Nights. The Hospitality Team also hosts an annual food-themed event for our Miracle Children, called Miracle Kitchen. Captains plan, solicit, and serve a continuous flow of food to all participants for the duration of the 26.2-hour Main Event.
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
  <!--<h4>  <b>Captains</b></h4> 
   <table style="width:100%">
                <tbody class="hospitality">
			Adam Birnbaum |
			Natalya Escobar |
			Reese Harper |
			Parker Hershkowitz |
			Alex Licht |
			Ethan Morandi |
			Abby Nussbaum |
			Liam O'Brien |
			Adam Paroff |
			Caroline Patterson |
			Leah Rison |
			Julia Saltzstein |
			Madison Schain |
			Ava Sheppard |
			Jessica Squadrito |
			Haley Strauch |
			Samantha Strobel |
			Ian Tajalli |
			Rhyan Tappan |
			Mackendrick Zavitz
                  </tbody>
              </table>-->


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
              <b>The Leadership Development Team</b> is responsible for overseeing and running the Emerging Leaders Program. This team will focus on developing and integrating students with minimal previous Dance Marathon experience into the Dance Marathon at UF community through tangible exposure to Dance Marathon’s various leadership roles. As a part of this team, Captains will work to cultivate the leadership skills of the newfound members of our Dance Marathon family. Captains are responsible for not only facilitating and leading their own small group meetings and attending general body meetings, but also tracking, overseeing, and organizing the involvement of the Emerging Leaders in various other Dance Marathon events. During the Main Event, Leadership Development Captains will be responsible for managing and monitoring Emerging Leader’s responsibilities in order to progress Emerging Leader’s roles within Dance Marathon as a whole.
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
     <!--<h4>  <b> Captains</b></h4> 
      <table style="width:100%">
                <tbody class="leadershipdevelopment">
			Emma Ackerman |
			Marcella Almgren |
			Andrew Bass |
			Michael Behling |
			Taylor Benson |
			Megan Blankenship |
			Camryn Boyette |
			Ryan Boyle |
			Ally Bravo |
			Coleman Brown |
			Amanda Carroll |
			Ava Carter |
			Brooke Collins |
			Logan Crawford |
			Madelyn Debski |
			Mandy Eastwood |
			Christian Hunter |
			William Jarrett |
			Chloe Jezerinac |
			Sophia Linale |
			Haley Mainwaring |
			Sophia Matthews |
			Maggie Mcmahan |
			Willow Oblin |
			Rhea Patel |
			Aoife Redmond |
			Joey Sheiner |
			Hensley Smith |
			Abigail Strzempka |
			Reece Tappan |
			Samantha Tedesco |
			Alana Toby
                  </tbody>
              </table>-->


            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q9">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a9" aria-expanded="false" aria-controls="a9">Marathon Relations</a>
            </h4>
          </div>
          <div id="a9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q9">
            <div class="panel-body">
              <b>The Marathon Relations Team</b> Captains are responsible for advising and growing Dance Marathon at UF’s high school programs, Mini Marathons. Marathon Relations is composed of two teams: Marathon Relations North and Marathon Relations South. They energize and support our “Minis” by educating students on Children’s Miracle Network and Dance Marathon at UF’s history and culture, as well as guiding them through fundraising and community involvement events throughout their school year. They do this by holding weekly meetings with the High Schoolers and communicating with Student Overalls and Advisors on a consistent basis, as well as updating the rest of the team with their progress at weekly Captain meetings. Marathon Relations North Captains focus on strengthening relationships with high schools in Gainesville and Ocala area, by helping them plan and implement their own Mini Marathons. Most importantly, the Marathon Relations North team attends all of our North Mini Marathons, as well as hosts our partnering high school programs during Dance Marathon at the University of Florida. Captains will be responsible for at least one school which they will work closely with all year in order to ensure that school’s success.
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


       <!--<h4>  <b>Captains </b></h4> 
       <table style="width:100%">
                <tbody class="marathonrelationsnorth">
			Adel Acs |
			Emma Bissell |
			Elizabeth Calabro |
			Taylor Callaway |
			Sean Campbell |
			Lexi Devescovi |
			Abby Ferrell |
			Kayleigh Gallo |
			Jt Girman |
			Grace Grier |
			Laurel Guffey |
			Kaley Hildebrand |
			Reagan Jones |
			Katie Kovar |
			Ashley Liddell |
			Adriana Ortega |
			Valeria Ortega |
			Chloe Rubin |
			Isabella Smedley |
			Sophia Spata |
			Lauren Still |
			Ansley Williams |
			Natalie Work |
			Ivey Young
                  </tbody>
              </table>-->

            </div>
          </div>
        </div>
        <!--<div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q10">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a10" aria-expanded="false" aria-controls="a10">Marathon Relations South</a>
            </h4>
          </div>
          <div id="a10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q10">
            <div class="panel-body">
                  <b>The Marathon Relations South Team</b> Marathon Relations Captains are responsible for advising and growing Dance Marathon at UF’s high school programs, Mini Marathons. Marathon Relations is composed of two teams: Marathon Relations North and Marathon Relations South.They energize and support our “Minis” by educating students on Children’s Miracle Network and Dance Marathon at UF’s history and culture, as well as guiding them through fundraising and community involvement events throughout their school year. They do this by holding weekly meetings with the High Schoolers and communicating with Student Overalls and Advisors on a consistent basis, as well as updating the rest of the team with their progress at weekly Captain meetings. Marathon Relations South Captains focus on strengthening relationships with high schools in the southern region, by helping them plan and implement their own Mini Marathons. Most importantly, the Marathon Relations South team attends all of our South Mini Marathons, as well as hosts our partnering high school programs during Dance Marathon at the University of Florida. Captains will be responsible for at least one school which they will work closely with all year in order to ensure that school’s success.
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
                Chloe Cornett

              <br>
        <h4>  <b>Captains </b></h4> 
       <table style="width:100%">
                <tbody class="marathonrelationssouth">
			Elizabeth Alarcon |
			Emma Arigo |
			Tiffany Cain |
			Efthymia Copulos |
			Kristin Deaver |
			Amanda Fernandez |
			Skylar Finkel |
			Gianna Gallo |
			Kate Hannah |
			Lindsay Hersh |
			Matthew Lehman |
			Zoe Leitner |
			Shannon Manning |
			Julia Mortensen |
			Gabriella Petillo |
			Mary Reagan Phillips |
			Khalin Pudupakkam |
			Julia Rocco |
			Jordyn Smith |
			Lauren Suggs |
			Annalee Watts |
			Jessica Winograd
                      </tbody>
              </table>

            </div>
          </div>
        </div>-->
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q11">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a11" aria-expanded="false" aria-controls="a11">Merchandise</a>
            </h4>
          </div>
          <div id="a11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q11">
            <div class="panel-body">
              <b>The Merchandise Team</b> The Merchandise Captain team is responsible for creating and distributing all official Dance Marathon at the University of Florida merchandise, including clothing, accessories, and fundraising incentives. Captains are responsible for running the DM at UF store in Turlington every Wednesday, at community wide DM events, online, and at Mini Marathons in the spring. Captains must interact with internal and external members to sell merchandise, pass out incentives, and share our cause. Captains are also responsible for facilitating orders with Ambassadors and organizations on campus, organizing Check-In and Event shirts, regularly tracking inventory, managing online sales by packing and shipping orders, and internally fundraising. Before the Main Event, Captains finalize merch designs, fulfill orders, organize inventory, and set up areas for store and incentives. During the Main Event, Captains are responsible for working the merchandise store and incentives booth to pass out products to the Dance Marathon at UF community.
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

        <!--<h4>  <b>Captains</b></h4> 
       <table style="width:100%">
                <tbody class="merch">
			Isabel Acosta |
			Jamie Ambos |
			Sophia Clemmensen |
			Amira Creason |
			Anabel De La Hoz |
			Nicole Desilva |
			Grace Gordish |
			Patrick Grey |
			Hailey Hartle |
			Mackenzie Hunt |
			Sofia Isayev |
			Perri Kisha |
			Olivia Knier |
			Ashlyn Kyser |
			Alexandra Levine |
			Emma Maclaren |
			Grant Meece |
			Lindsey Meiner |
			Sam Roth |
			Sarah Roth |
			Maya Rodrig |
			Macy Thompson |
			Jazlyn Yarbrough
                  </tbody>
              </table>-->


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
                <b>The Morale Team</b> is responsible for keeping the spirit of Dance Marathon energetic, positive, and meaningful throughout the entire year, prior to and during the 26.2-hour Main Event. Captains do this by engaging with students and the UF community at both Dance Marathon and UF-related events, hosting fall and spring fundraisers, interacting with high school students at Mini Marathons, and much more. Morale Captains bring the Dance Marathon spirit to campus all year. They constantly work to uplift, inspire, and encourage every member of the DM at UF community. In addition, Morale is in charge of creating, planning, and executing “Theme Hours,” which are unique hours during the Main Event that include costumes and activities to entertain the Dancers. Finally, Morale Captains create the Linedance, which connects every person at the 26.2-hour Main Event. Morale then teaches and demonstrates the Linedance at the Main Event and throughout the year.
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
     <!--<h4>  <b> Captains</b></h4> 
      <table style="width:100%">
                <tbody class="morale">
			Bronson Allemand |
			Juliette Andrews |
			Ryan Beany |
			Olivia Caldara |
			Isabel Chris |
			Jordan Cohan |
			Liz Delegal |
			Lexi Dovale |
			Madelon Enneking |
			Casey Farrell |
			Gina Fimiano |
			Logan Foster |
			Anna Garst |
			Brandon Gerardi |
			Elise Heidlebaugh |
			Peyten Hernandez |
			Kayla Kaufman |
			Mary Grace Kelly |
			Elisabeth Kern |
			Elizabeth Kern |
			Sydney Kollas |
			Isabella Leandri |
			Joshua Levin |
			Ryan Linthorst |
			Sara Liss |
			Drew Mcnally |
			Brooke Micallef |
			Caroline Murray |
			Lauren Nau |
			Liz Noonan |
			Dante Prado |
			Halle Prilik |
			Natalie Saliwanchik |
			Amit Sapir |
			Filomena Selvanik |
			Katherine Signori |
			Dylan Siegel |
			Casey Siner |
			Jacob Smith |
            Kristina Smith |
			Katie Swartzlander |
			Courtney Thomas |
			Eileen Vara |
			Haley Wadsworth |
			Joshua Waters |
			Mistie Webb
                    </tbody>
              </table>-->


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
                <b>The Multimedia Team</b> is responsible for capturing and editing all photography and videography content for Dance Marathon at the University of Florida throughout the year and during the Main Event. The main goal of the Multimedia Team is to capture content that represents the DM at UF brand and its cause. Multimedia Captains are expected to promptly edit, sort, and upload their photos and videos to be used on our organization’s Facebook, Instagram, YouTube, and other social media platforms. Captains are responsible for acquiring their own camera equipment and software needed, including Adobe Lightroom and Premiere Pro. In addition, Captains are expected to attend DM at UF events, including at least three high school Mini Marathons during the spring semester. Multimedia provides many opportunities for growth, collaboration and Captains are encouraged to learn from their peers. Captains should have previous experience and interest in photography and/or videography, editing, and be willing and motivated to grow in their craft throughout the year. During the 26.2-hour Main Event, Captains take photos and videos with rapid editing turn-around times to be uploaded to DM at UF’s various social media platforms. 
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
    <!-- <h4>  <b>Captains</b></h4> 
    <table style="width:100%">
                <tbody class="multimedia">
			Alessandra Ayala |
			Arnav Barpujari |
			Jennifer Blardonis |
			Lauren Bonet |
			Sydney Calle |
			Isabel Crist |
			Ashley Dankese |
			Alexis (Lexi) Deboer |
			Ava Dinow |
			Grayson Eastman |
			Emyle Garcia |
			Mary Beth Garrison |
			Sophia Gonzalez |
			Shelby Hatcher |
			Logan Henley |
			Brooke Johnson |
			Jessica Kuehler |
			Noah Morrow |
			Rebecca Salamon |
			Maura Schaeffer |
			Luke Scheper |
			Sarena Seeger |
			Kaavya Sethumadhavan |
			Evan Stice |
			Kaiyu Zhou
                    </tbody>
              </table>-->


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
                    <b>The Productions Team</b> is responsible for all logistics and entertainment throughout the year and during the 26.2-hour Main Event. Productions Captains are in charge of building and organizing the homecoming float, planning and executing campus events (including but not limited to Captain Events in fall and spring), coordinating Main Event logistics (such as set up, clean up, strike planning, and event security), helping Morale with the planning and execution of Theme Hours, and booking entertainment for all of our events. The Productions Team carries out all operational duties in the O’Connell Center and assists other teams when necessary with logistics and entertainment.
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
             <!--<h4>   <b>Captains</b></h4> 
              <table style="width:100%">
                <tbody class="productions">
			Bianca Arocha |
			Sophia Baird |
			Matthew Barrett |
			William Berry |
			Daniel Buonadonna |
			Caroline Eaton |
			Zachary Elowitch |
			Emily Guerra |
			Tyler Hersch |
			Leah Johnson |
			Corey Loss |
			Ryan Maze |
			Bradley Miller |
			Nicole Molina |
			Reagan Pomp |
			Mackenzie Potts |
			Uma Raja |
			Aubree Robinson |
			Joshua Rosenblatt |
			Andrew Salk |
			Sydney Savage |
			Brian Schildt |
			Logan Spiegelman |
			Georgette Suarez |
			Riley Towbin
                        </tbody>
              </table>-->


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
                    <b>The Public Relations Team</b> is responsible for maintaining the external views and public reputation of Dance Marathon at UF. PR Captains work year-round to uphold the organization’s mission statement, vision, and branding. This involves forming relationships with local media sources, writing blogs to share stories and important updates, and using social media (Instagram, Twitter, Facebook, and TikTok) to connect and engage with our audience. Captains use creativity to construct campaigns throughout the year, write storylines for Multimedia videos, and develop innovative ways to extend DM at UF’s reach and keep the community involved and informed. During the Main Event, Captains are also responsible for escorting the media, updating social media platforms and fundraising-incentive walls, and ensuring the smooth running of the official Livestream. 
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
     <!--<h4>  <b> Captains</b></h4> 
     <table style="width:100%">
                <tbody class="pr">
			Hope Barrist |
			Cole Buffa |
			Brennan Dampier |
			Averie Engel |
			Aliyah Formont |
			Alexis Gershuny |
			Leah Grobman |
			Trevor Isakson |
			Olivia Leeper |
			Veronica Nobles |
			Sydney Pappas |
			Romy Peretz |
			Jesse Pickel |
			Olivia Romano |
			Ellie Simkhai |
			Gabby Spitz |
			Hannah Stefan |
			Gaby Tryzmel |
			Ryan Tweeddale |
			Haley Wade
                        </tbody>
              </table>-->


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
                    <b>The Recruitment Team</b> is responsible for the recruitment of Dancers, Kirstyn’s Krew, Captains, Emerging Leaders, and Organizations to participate in Dance Marathon at UF. Throughout the year, Captains will work with and give presentations to various external organizations, including those who are not currently a part of Dance Marathon, in order to expand our campus involvement. One of the main goals is to find new ways to support other organizations the way they support us. Captains will also utilize flyers about our cause across campus, working to convey the Miracles that Dance Marathon at UF creates and how each student can give back to their local Children’s Miracle Network Hospital. During the Main Event, Captains will lead tours for visitors of various organizations and families to show the culmination of hard work from the year. Each Recruitment Captain will additionally connect our Faculty and Staff  to our year long engagement opportunities and organize events such as Faculty Appreciation Week. Recruitment Captains are integral parts of the movement as they inspire and create leaders in our community, all while raising awareness about Dance Marathon at UF and its purpose.
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
          <!-- <h4>  <b>Captains</b></h4> 
           <table style="width:100%">
                <tbody class="recruitment"> 
			Ariel Banfalvy |
			Isabella Delrosario |
			Raegan Direnzo |
			Tomas Gayoso |
			Isabella Gray |
			Kacey Hamlin |
			Mary Hanania |
			Allie Harbaruk |
			Jordan Hartman |
			Ashley Kiker |
			Lauren Kuller |
			Leamarie Mattia |
			Victoria Moltzan |
			Bryanne Parks |
			Erin Partlow |
			Kasey Permenter |
			Katie Piskun |
			Sukhman Sidhu |
			Madison St. Pierre |
			Anna Kate Stoner |
			Raelin Terrell |
			Victoria Theiss |
			Nicole Turner |
			Evelyn Vaughan |
			Sophia Villaverde |
			Julia Zager
                        </tbody>
              </table>-->

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
                <b>The Sponsorships Team</b> works yearlong to solicit businesses for monetary and in­-kind item donations. Through reaching out to businesses, both local and national, Sponsorships Captains will build strong relationships with our sponsors, utilizing skills of leadership, communication, and stewardship. Captains are also responsible for organizing and working the Silent Auction at the Main Event as well as organizing Miracle Market in the spring. 
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
         <!--<h4>  <b>Captains</b></h4> 
          <table style="width:100%">
                <tbody class="sponsorships">
			Zachary Abrams |
			Ansley Angulo |
			Austin Armbruster |
			Emily Bernstein |
			Elizabeth Bond |
			Griffin Boyd |
			Ryan Blume |
			Paul Czerniak |
			Dominique Dimeglio |
			Alli Dronsick |
			Spencer Gary |
			Eliza Greenwald |
			Christopher Keeble |
			Alexandra Longa |
			Sarah Mcpherson |
			Caitlin Moran |
			Ravi Patel |
			Preston Serra |
			Matthew Shake |
			William Steed |
			Jenna Stevens |
			Manuel Uribe
                    </tbody>
              </table>-->

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
            <p>Please email Ashleigh Churchill, Dancer Relations Overall Director, at <a href="mailto:achurchill@floridadm.org">achurchill@floridadm.org </a> with any questions!</p>
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
<br></br>
          </div>
</div>
</div>
<div id="individual" class="tabcontent-subtab">
<h3>Dancing as an Individual</h3>
            <p></p>
            <p>You have the option to register to Dance as an individual. When registering to Dance, it will ask you which Organization you are participating with, and there will be an option that says “Participating as an Individual.” Once you complete your registration, a Dance Marathon Captain will reach out to you with further details.</p>
            <p>Individual Dancers are placed on a team called Gator Aides. Being a part of Gator Aides will allow you to make connections with other individual Dancers as well as our Miracle Children. Gator Aides have additional opportunities, meetings, and events throughout the year you can choose to attend that will allow you to become even more involved in our cause. </p>
            <p>If you have any questions about dancing as an individual or the Gator Aides team, please contact the Recruitment Overall Director, Mary Kate Arbuckle, at <a href="mailto:marbuckle@floridadm.org">marbuckle@floridadm.org</a>.</p>
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
		  <p>Over 100 Organizations at the University of Florida participate in Dance Marathon every year!</p>
      <p>Organizations are the backbone of our philanthropy, and we are always looking for more people to join our family! If you would like to get your organization involved with Dance Marathon, please contact the Recruitment Overall, Mary Kate Arbuckle, at <a href=mailto:marbuckle@floridadm.org>marbuckle@floridadm.org</a>.</p>
      <p>Below are the Organizations currently involved in Dance Marathon at UF 2021:</p>

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
        
<div id="service" class="tabcontent">
<div class="subtab">
    <button class="tablinks-subtab" onclick="openSubTab(event, 'serve')">SERVICE</button>
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
                          <p>Meet our Community Partners! These non-profit and service organizations help better the lives of those who live in the Gainesville Community, the community which gives so much to Dance Marathon at UF. As an organization whose goal is to create change, we hope to uplift our Community Partners throughout the year.
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
