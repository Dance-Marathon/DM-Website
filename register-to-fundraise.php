<?php
    $status = "open";
    $GLOBALS['page_title'] = 'Register to Fundraise | Fundraising | Dance Marathon at UF';
    $GLOBALS['parent'] = 'fundraising';
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
    .page-heading.parallax.fundraising {
        background-image: url("/assets/images/BannerPhotos21/Fundraising (1).jpg");
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
        background-color: #1c638f;
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
    color: #71cff0;
    border-bottom: 2px solid #71cff0;
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
<div class="page-heading parallax fundraising">
  <div class="inner-wrapper">
      <div class="container">
        <div class="row">
              <div class="col-md-12">
                <h1>Register to Fundraise</h1>
              </div>
        </div>
      </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        
<?php if ($status == "open") { ?>
    <h2>Register to Fundraise</h2>
                <p> Registering to fundraise is pretty easy! </br></p>
     
                    <p>Just follow the steps below:</p>
                    <ol>
                        <li>Follow this <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5803" target="_blank">Link </a> to register now!
                            <li> Select <b>'Register Now' </b>
                                <ul>
                                      <li> If you have a DonorDrive account from DM at UF 2023, select <b>‘Login to your account’</b>. </li>
                                      <li> If you do not have a DonorDrive account, then create an account now.  </li>
                                    </ul> </ul>
                          <li> Next, select your role.
                                <ul>
                                       <li> If you are joining an Organization, click <b>‘Join a Team’</b> and then search for your team name. </li>
                                            <ul>
                                                <li> If your Organization isn’t there, no worries! Click <b>‘Create a Team’</b> by including your Team Name and Team Fundraising Goal. </li>
                                            </ul> </ul>
                          <li> After, you will finalize your registration by answering the questions presented.
                            <li> Once you have registered on DonorDrive, you can customize your fundraising page by adding a profile picture, editing your story, and updating your fundraising goal. Use this <a href="assets/PDFs/how-to-guide.pdf" target="_blank">How-To Guide</a> for step by step instructions.
                            <li> From here, you can use the tools on DonorDrive to send emails from a template, track your fundraising, and share your fundraising link with others! </li>
                                </ol>
     
                                <p>If you have any questions about DonorDrive contact the Fundraising & Organization Development Overall Director, Dilon Bruncaj, at <a href="mailto:dbruncaj@floridadm.org">dbruncaj@floridadm.org</a>.</p>
     
                               </div>
                            </div>
                        </div>
                    </div>
                    <?php } else { echo 'This page is currently closed.'; } ?>
        </div>   
    <div class="tab">
        <button id="defaultTab" class="tablinks " onclick="openCity(event, 'donordrive')">DONORDRIVE</button>
        <button class="tablinks" onclick="openCity(event, 'match')">EMPLOYEE MATCHING</button>
        <!--<button class="tablinks" onclick="openCity(event, 'guide')">FUNDRAISING GUIDE</button>-->
        <button class="tablinks" onclick="openCity(event, 'hello')">FUNDRAISING GUIDE</button>
        <button class="tablinks" onclick="openCity(event, 'sponsors')">SPONSORS</button>
    </div>
    
<div id="donordrive" class="tabcontent">
<h3>DonorDrive</h3>
<p>UF Health Shands Children’s Hospital is continuing to use DonorDrive, an online fundraising platform used widely by Children’s Miracle Network Hospitals, for its Dance Marathon programs. Dance Marathon at the University of Florida’s Fundraisers will be creating DonorDrive accounts to begin fundraising for DM at UF 2024. DonorDrive is safe and easy to use, and was utilized by UF Health Shands Children’s Hospital this past year. To create a fundraising page, register using the link below:</p>
<a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=5803" target="_blank">Register To Fundraise</a>
<p></p>
 
<h3>FAQ:</h3>
 
<b>1. If I had a fundraising page last year, do I need to create a new account with DonorDrive and a new fundraising page this year?</b>
<ul><li>Yes! Each year that you choose to participate with Dance Marathon, you will need to create a fundraising page. </li></ul>
<b>2. What should my billing statement list as the donation charge after I donate online?</b>
<ul><li>Children's Miracle Network</li>
<li>Location: Salt Lake City, UT</li></ul>
 
<p>If you have any further questions, please contact our Finance Manager, Clara Flint, at <a href="cflint@floridadm.org">cflint@floridadm.org</a>.</p>



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
    <div id="match" class="tabcontent">
<h3>Employee Matching</h3>
<p>
  Have you considered that your company might match your donation and multiply your contribution? Every company has its own guidelines for matching. To find out if your company has a matching program, visit <a href="https://www.matchinggifts.com/uff">https://www.matchinggifts.com/uff</a>.
</p>
 
<p>
  If your company matches contributions to <u>Shands Teaching Hospital and Clinics, Inc.</u> locally (preferred) <b>OR</b> <u>Children’s Miracle Network</u> nationally, here are two ways to match your contribution:
</p>
 
<ol>
  <li>
    If your company uses an online platform for gift matching, submit an online gift matching verification form through your company’s portal and use the information listed below as the destination for your contribution. To be appropriately matched in the most efficient manner, we encourage matching through our preferred donation location listed below. Shands Teaching Hospital and Clinics, Inc. is our local Children’s Miracle Network Hospital and it is easiest to complete your employee match through this local option.
  </li>
  <li>
  Obtain a matching gift verification form from your Human Resources Department.  Complete the form and list our organization name below.  If you directed your donation to Children’s Miracle Network, please email our Executive Director, Harper Grabenhorst, at <a href="mailto:hgrabenhorst@floridadm.org">hgrabenhorst@floridadm.org</a> with a copy of the matching gift verification form.
  </li>
</ol>
 
<h3>Primary Donation Location*</h3>
<address>
  <strong>UF Health Shands</strong> - Your Local Children's Miracle Network Hospital<br/>
  <strong>EIN/TIN:</strong> 59-1943502<br/>
  <strong>Charitable Organization Section:</strong><br />
  Shands Teaching Hospital and Clinics, Inc. <u>d/b/a Children’s Miracle Network at Shands</u><br/>
  <strong>ATTN:</strong> Dance Marathon at the University of Florida
</address>
 
<h4>Address Field</h4>
<address>
    PO BOX 100386<br />
    Gainesville, FL 32610-0386
</address>
 
* PLEASE NOTE: If you are selecting this preferred donation location, please do not list Dance Marathon at the University of Florida or CMN as the matching entity. Many companies will not accept this request, as our tax exempt status is included under the larger umbrella of Shands Teaching Hospital and Clinics, Inc. If you have any questions about this process, please reach out to Tara Tovkach, Development Associate for Children’s Miracle Network, for clarification at <a href=mailto:ttov0002@shands.ufl.edu>ttov0002@shands.ufl.edu.</a>
 
<h3>Alternative Donation Location</h3>
<address>
<strong>Children's Miracle Network National Office</strong><br/>
<strong>EIN/TIN:</strong> 87-0387205<br />
<strong>Charitable Organization Section:</strong><br />
Children's Miracle Network<br/>
<strong>ATTN:</strong> Dance Marathon at the University of Florida
</address>
 
<h4>Address Field</h4>
<address>
  205 W 700 S<br />
  Salt Lake City, Utah 84101-2715<br />
</address>
 
<p>
  If your company requires verification by a W9 form, please visit these links:
</p>
  <ul>
      <li>
        <a href="assets/PDFs/W-9_Shands_HealthCare.pdf">Shands Teaching Hospital and Clinics, Inc.</a>
      </li>
      <li>
        <a href="assets/PDFs/CMNW-9.pdf">Children's Miracle Network</a>
      </li>
  </ul>
<p>
  <strong>
    PLEASE NOTE: Notify our Finance Manager, Clara Flint, at <a href="mailto:cflint@floridadm.org">cflint@floridadm.org</a> whenever a matching gift request has been submitted. The matching gift will be attributed to the individual who received the original donation. Please allow 60 days for the Office of Development to process your donor match before further inquiry as it can often be a lengthy process. Thank you for multiplying your miracles!
  </strong>
</p>
<p>
  <strong>
    Important - Please do not fill out any forms sent with checks; instead turn them in directly into the Finance Manager, reachable at <a href="mailto:cflint@floridadm.org">cflint@floridadm.org</a>.
  </strong>
</p>
<!--
<div id="guide" class="tabcontent">

<div class="subtab">
    <button class="tablinks-subtab" onclick="openSubTab(event, 'reaching')">REACHING OUT</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'tips')">FUNDRAISING TIPS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'canning')">CANNING</button>
</div>
<div id="reaching" class="tabcontent-subtab">
<p>24 high schools around the state of Florida participate each year in our Mini Marathon program. High school students at these schools show an enthusiastic passion for Dance Marathon even before their college years begin and play a vital role in our movement. This past year, our Mini Marathon programs raised a total of $551,525.33, proving that these students are truly one generation fighting for the next. All money raised by Mini Marathons goes toward DM at UF’s total amount raised, which directly benefits the children at UF Health Shands Children’s Hospital.</p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/-qCnFuEPZOo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p>We are always looking for more high schools to join our Dance Marathon family. If you would like to learn more about our Mini-Marathon Programs or would like to get involved, please contact our Marathon Relations Overall Directors, Harper Grabenhorst and Rebecca Brennan, at <a href="hgrabenhorst@floridadm.org ">hgrabenhorst@floridadm.org </a> and <a href="rbrennan@floridadm.org">rbrennan@floridadm.org</a>.</p>
</div>
 
<div id="tips" class="tabcontent-subtab">
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
<div id="canning" class="tabcontent-subtab canning">
<img src="/assets/images/hsdm/zoningpg1.png" width="697" height="889" title="zoningpg1" alt="zoningpg1" />
 
        </div>
</div> -->
</div>
</div>
</div>
 
</div>
</div>
</div>
</div>

</div>
</div>


<div id="sponsors" class="tabcontent">
<h2>Sponsor DM at UF</h2>
<p>Dance Marathon at UF is so thankful for the support of our generous Sponsors! DM at UF offers many different ways to get involved as a Sponsor for our cause, each with various benefits to show our appreciation for your support. Our Sponsorships Team will connect your company with our Organization, along with access to an extensive network of supporters of all ages and demographics.</p>
<p> For more information, view our sponsorship opportunities <a href="assets/PDFs/2023Sponsorship_Packet copy.pdf" target="_blank">here.</a>
</p>
<p>If you have any questions, please contact our Sponsorships Overall Director, Ryan Athay, at <a href="mailto:rathay@floridadm.org">rathay@floridadm.org</a>.</p>
<div >
<h2>Our 2023 Sponsors</h2>
<div class="sponsor-section">
  <div class="row sponsors-block">
      <img class="img-responsive" style="display: block; margin: auto;" src="assets\images\sponsors\2023\2023SponsorsList.png"/></a>

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
</div>


</div>
</div>

    <div id="hello" class="tabcontent">
<p>Take a look at all the different ways you can fundraise with Dance Marathon at UF! Whether you ask friends and family to support you, showcase your passion on social media, participate in canning, or volunteer your time for donations, there are so many ways to fundraise for DM at UF. Read more about all of these options below!</p>
<!-- <p> Check out our fundraising guide <a href="assets/PDFs/FundraisingKit2022.pdf" target="_blank"> here.</a> -->
<div class="subtab">
    <button class="tablinks-subtab" onclick="openSubTab(event, 'reaching')">REACHING OUT</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'tips')">FUNDRAISING TIPS</button>
    <button class="tablinks-subtab" onclick="openSubTab(event, 'canning')">CANNING</button>
</div>
<div id="reaching" class="tabcontent-subtab">
<h4>Reaching Out</h4>
<h4 style="padding-left:1em; size:80%">Letters and Emails</h3>
 <ul>
     <li><b>Why?</b> - Adds a personal touch to your fundraising request</li>
     <li><b>Tips to a better response</b> - Personalize your message and tell the story that brought you into this organization. Follow up! Be persistent! You care about this cause and that devotion will shine forth through your efforts.
     </li>
     <li>A great way to say thanks for becoming part of the DM family! </li>
 </ul>
 </div>
 
<div id="tips" class="tabcontent-subtab">
<h4>Fundraising Tips</h4>
<!--     <a href="assets/PDFs/Fundraisings.pdf" target="_blank">Fundraising Kit PDF </a> -->    <!--Link this to PDF-->

    <ul>
     <li>Showcase your passion for the cause</li>
     <li>Make your messages personal
     </li>
     <li>Share videos and photos that help convey the incredible impact you help make</li>
     <li>Offline donations in the form of checks are accepted. Be sure to fill out your name in the memo and make the check out to Children’s Miracle Network.</li>
 </ul>
 </div>

<div id="canning" class="tabcontent-subtab canning">
<h4>Canning</h4>
<ul>
<b><li>What is it?</b> - Soliciting loose change and small dollar donations outside of public places or businesses in order to benefit Dance Marathon at the University of Florida and UF Health Shands Children’s Hospital.</li>
<b><li>How can I benefit?</b>- The money you raise via these efforts can be credited to your personal fundraising page as you look to raise more money and awareness!</li>
<b><li>How to do it?</b> - First, obtain specially designed canning buckets from our Sponsorships Team (contact <a href="mailto:rathay@floridadm.org">rathay@floridadm.org</a> for further information). Email, call, or go inside a local business in your hometown and request to speak to the General Manager regarding canning donations. They will be sure and inform you of all the necessary regulations, and allow you to coordinate a time that works for both you and the business. Be sure and show up promptly and dressed in Dance Marathon at UF attire to help spread your message! From there, talk to customers as they leave the business about donating to your cause. No donation is too small and every amount helps make miracles! </li>
</ul>
 
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
</div>

<script>
    window.addEventListener('load', function() {
        document.getElementById('defaultTab').click();
    });
</script>
       
<?php include("includes/foot.php"); ?>

