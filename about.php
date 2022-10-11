<?php
	$status = "open";
	$GLOBALS['page_title'] = 'About | Dance Marathon at UF';
	$GLOBALS['parent'] = 'about';
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
.page-heading.parallax.about {
    background-image: url("/assets/images/BannerPhotos21/about us (1).jpg");
}
.check-out-buttons {
    display: flex;
    flex-direction: row;
    width: 100%;
    justify-content: space-evenly;
    margin-bottom: 3%;
}
.check-out-button {
    background-color: #F79B63;
    color: white;
    font-weight: 700;
    width: fit-content;
    border: none;
    outline: none;
    cursor: pointer;
    height: 60px;
    padding: 14px 16px;
    transition: 0.2s;
}    /* Style the tab */
.tab {
    overflow: hidden;
    display: flex;
    flex-direction: row;
    width: 100%;
    justify-content: space-evenly;
    margin-bottom: 3%;
}
/* Style the buttons that are used to open the tab content */
.tab button {
    background-color: #C4C4C4;
    color: white;
    font-weight: 700;
    width: 200px;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
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
    padding: 6px 12px;
    width: 80%;
    margin-left: 10%;
    margin-bottom: 3%;
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
.nomen {
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
    .nomen {
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

<div class="page-heading parallax about">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>About Us</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">

<?php if ($status == "open") { ?>
            <p><span style="color: #000000">Dance Marathon at the University of Florida is an annual event benefiting the patients of UF Health Shands Children's Hospital in Gainesville, Florida. Each year, students stay awake and on their feet, if able, to raise money and awareness for Children's Miracle Network Hospitals for the duration of the event. In the 26 years of Dance Marathon at UF's existence, we have </span><span style="color: #F79B63"><b> raised more than $24 million</b> </span><span style="color: #000000">, making it </span><span style="color: #014083"><b> the most successful student-run philanthropy in the southeastern United States </b></span><span style="color: #000000">. In 2021, DM at UF raised a grand total of </span><span style="color: #F79B63"><b>$2,270,311.40</b></span><span style="color: #000000"> for UF Health Shands Children's Hospital, our local Children’s Miracle Network hospital.</span></p>
            <p><span style="color: #000000">Out of 150,000 yearly patients, UF Health Shands Children’s Hospital sees more than 8,500 pediatric cases each year. </span><span style="color: #014083"><b>All of the funds raised by DM at UF go directly to purchasing state-of-the-art medical equipment, enhancements to make the children’s stay at the hospital more enjoyable, and funding for research grants and educational programs.</b></span></p>
            <p><span style="color: #000000">Patient care funding provides necessities such as bandages and patient gowns, as well as equipment and hospital improvements to make hospital stays more enjoyable for children and their families. Research funding helps our doctors find solutions for incurable diseases such as cystic fibrosis and cancer, and it allows them to develop life-saving technology and enhanced processes that improve the daily lives of pediatric patients. Education funding supports programs such as Child Life Diversion therapy and goes toward raising funds and awareness for the Children’s Miracle Network.</span></p>
            <p><span style="color: #014083"><b>As we head into our</span> <span style="color: #F79B63">29th year</span><span style="color: #014083">, Dance Marathon at UF is excited to make even more miracles!</b></span></p>
                 <!-- Get updated numbers fro how many people visit UF Health-->
        <?php } else { echo 'This page is currently closed.'; } ?>
        </div>
    </div>
    <div class="tab">
        <button class="tablinks" onclick="openCity(event, 'our-story')">OUR STORY</button>
        <button class="tablinks" onclick="openCity(event, 'cmn')">CMN & UF HEALTH</button>
        <button class="tablinks" onclick="openCity(event, 'meet-kids')">MEET OUR MIRACLE FAMILIES</button>
        <!--<button class="tablinks" onclick="openCity(event, 'faq')">FAQ</button>-->
    </div>
    <!-- Tab content -->
    <div id="our-story" class="tabcontent">
        <div class="subtab">
            <button class="tablinks-subtab" onclick="openSubTab(event, 'story')">OUR STORY</button>
            <button class="tablinks-subtab" onclick="openSubTab(event, 'fast-facts')">FAST FACTS</button>
            <button class="tablinks-subtab" onclick="openSubTab(event, 'nomen')">NOMENCLATURE</button>
        </div>
        <div id="story" class="tabcontent-subtab">
            <p>Dance Marathon at UF is a yearlong effort involving community, hospitality and marketing events at local businesses that culminate in our Event each spring where students remain awake and on their feet for 26.2 hours to represent the hardships faced by children battling pediatric illness. DM at UF is one of the three founding Dance Marathon programs in the nation, and since our start we have raised more than $26 million for the miracle children at UF Health Shands Children’s Hospital, our local CMN hospital. Today, Dance Marathon at UF involves 21 Overall Directors, 526 Captains, 160 Emerging Leaders, 44 Sponsors, 5,926 Fundraisers, and over 54,348 total donations.</p>
        </div>

        <div id="fast-facts" class="tabcontent-subtab">
            <!-- <h3><b><span style="color: #000000">WHERE THE MONEY GOES</span></b></h3> -->
            <h3>Where The Money Goes</h3>
            <p>
            <span style="color: #000000"><b>100%</b> of the funds raised by DM at UF go directly to UF Health Shands Children's Hospital, our local Children Miracle Network hospital. Of these funds, most recently, <b>48%</b> goes to research, <b>10%</b> to education and <b>42%</b> to patient care.</span>
            </p>
            <p><span style="color: #000000">Patient care funding provides necessities such as bandages and patient gowns, as well as life-saving equipment and hospital improvements including the recent expansion of the Neonatal Intensive Care Unit. These funds also provide sleeper sofas for parents, playrooms for children, and Child Life programs, in an effort to make hospital stays more enjoyable for children and their families. Research funding helps our doctors find solutions for incurable diseases such as diabetes, cystic fibrosis, and cancer, and it allows them to develop new technology and enhanced processes that improve the daily lives of pediatric patients. Education funding supports programs such as Child Life Diversion therapy and goes toward raising funds and awareness for the Children’s Miracle Network.</span></p>

            <!--<h3><span style="color: #000000"><b>LENGTH OF DANCE MARATHON AT UF</b></span></h3>-->
            <h3>Length of Dance Marathon</h3>
            <p><span style="color: #000000">
            Before 2008: <b>32  hours</b>
            <br/>
            After 2008: <b>26.2 hours</b>
            </span></p>

            <!--<h3><span style="color: #000000"><b>PARTICIPANTS</b></span></h3>-->
            <h3>Participants</h3>
            <p>
            <li><span style="color: #000000">Number of Registered Dancers in 2021: <b>640 (maximum capacity with COVID 19)</b></span></li>
            <li><span style="color: #000000">Number of Captains: <b>469</b></span></li>
            <li><span style="color: #000000">Number of Emerging Leaders: <b>153</b></span></li>
            <li><span style="color: #000000">Number of Kirstyn's Krew: <b>27</b></span></li>
            <li><span style="color: #000000">Number of Participants (including Overall Directors, Captains, Emerging Leaders and Kirstyn's Krew): <b>255</b></span></li><!-- WHAT?! WHERE DID 4,653 COME FROM!!!!-->
            <li><span style="color: #000000">Number of Miracle Families: <b>46</b></span></li>
            <li><span style="color: #000000">Number of Sponsors: <b>74</b></span></li>
            <li><span style="color: #000000">Most Years as a Dancer: <b>4 years</b></span></li> <!--change to exact-->
            </p>

            <!--<h3><span style="color: #000000"><b>FUNDRAISING</b></span></h3>-->
            <h3>Fundraising</h3>
            <p><span style="color: #000000">
            <b>44,899</b> donations on DonorDrive <!--change to exact-->
            <br/>
            <b>2,715</b> fundraisers raised at least $1 <!--change to exact-->
            <br/>
            Amount raised in 2021: <b>$2,270,311.40</b>
            <br/>
            Total amount raised in past 27 years: nearly <b>27 million dollars</b>
            <br/>
            Alumni Contribution: <b>$83,235.89</b>
            <br/>
            </div>
            </span></p>
        </div>
        <div id="nomen" class="tabcontent-subtab nomen">
            <!--<h3><span style="color: #000000"><b>EVENT TITLE</b></span></h3>-->
            <h3>Event Title</h3>
            <p><span style="color: #000000">
            First Reference: Dance Marathon at the University of Florida
            <br/>
            Second Reference: Dance Marathon at UF
            <br/>
            Social Media and Marketing Reference: DM at UF
            <br/>
            Not Acceptable: DM UF, UF DM, DM @ UF
            </span></p>

            <!--<h3><span style="color: #000000"><b>HOSPITAL TITLE</b></span></h3>-->
            <h3>Hospital Title</h3>
            <p><span style="color: #000000">
            First Reference: UF Health Shands Children’s Hospital
            <br/>
            Second Reference: UF Health Shands
            </span></p>

            <!--<h3><span style="color: #000000"><b>CHILDREN AND THEIR FAMILIES</b></span></h3>-->
            <h3>Children and their Families</h3>
            <p><span style="color: #000000">
            Miracle Family
            <br/>
            Miracle Children
            <br/>
            Miracle Child (0-12)
            <br/>
            Miracle Teen (13+)
            <br/>
            <!--Miracle Gator Nation (19+)-->
            </span></p>

            <!--<h3><span style="color: #000000"><b>POSITIONS</b></span></h3>-->
            <h3>Positions</h3>
            <ul>
            <li>
                <span style="color: #000000">Overall Directors</span>
                <ul>
                <li><span style="color: #000000">Executive Director</li></span>
                <li><span style="color: #000000">Operations Manager</li></span>
                <li><span style="color: #000000">Marketing Manager</li></span>
                <li><span style="color: #000000">Membership Manager</li></span>
                <li><span style="color: #000000">Finance Manager</li></span>
                <li><span style="color: #000000">Community Outreach</li></span>
                <li><span style="color: #000000">Dancer Relations</li></span>
                <li><span style="color: #000000">Design and Technology</li></span>
                <li><span style="color: #000000">Family Relations</li></span>
                <li><span style="color: #000000">Fundraising and Organization Development</li></span>
                <li><span style="color: #000000">Hospitality</li></span>
                <li><span style="color: #000000">Leadership Development</li></span>
                <li><span style="color: #000000">Marathon Relations North</li></span>
                <li><span style="color: #000000">Marathon Relations South</li></span>
                <li><span style="color: #000000">Merchandise</li></span>
                <li><span style="color: #000000">Morale</li></span>
                <li><span style="color: #000000">Multimedia</li></span>
                <li><span style="color: #000000">Productions</li></span>
                <li><span style="color: #000000">Public Relations</li></span>
                <li><span style="color: #000000">Recruitment</li></span>
                <li><span style="color: #000000">Sponsorships</li></span>
                </ul>
            </li>
            <li><span style="color: #000000">Assistant Directors & Captains</span>
                <ul>
                <li><span style="color: #000000">Community Outreach</li></span>
                <li><span style="color: #000000">Dancer Relations</li></span>
                <li><span style="color: #000000">Design and Technology</li></span>
                <li><span style="color: #000000">Family Relations</li></span>
                <li><span style="color: #000000">Fundraising and Orginization Development</li></span>
                <li><span style="color: #000000">Hospitality</li></span>
                <li><span style="color: #000000">Leadership Development</li></span>
                <li><span style="color: #000000">Marathon Relations North</li></span>
                <li><span style="color: #000000">Marathon Relations South</li></span>
                <li><span style="color: #000000">Merchandise</li></span>
                <li><span style="color: #000000">Morale</li></span>
                <li><span style="color: #000000">Multimedia</li></span>
                <li><span style="color: #000000">Productions</li></span>
                <li><span style="color: #000000">Public Relations</li></span>
                <li><span style="color: #000000">Recruitment</li></span>
                <li><span style="color: #000000">Sponsorships</li></span>
                </ul>
            </li>
            <li><span style="color: #000000">Emerging Leaders</li></span>
            <li><span style="color: #000000">Kirstyn's Krew</li></span>
            <li><span style="color: #000000">Ambassadors</li></span>
            <li><span style="color: #000000">Dancers</li></span>
            <li><span style="color: #000000">Fundraisers</li></span>
            <li><span style="color: #000000">Dance Marathon Alumni (DMA)</li></span>
            </ul>
        </div>
    </div>

    <div id="cmn" class="tabcontent">
        <?php if ($status == "open") { ?>
            <p>UF Health Shands Children’s Hospital is the local Children’s Miracle Network participating hospital for the North Central Florida, South Georgia and West Palm Beach areas. Children’s Miracle Network is an international non-profit organization dedicated to raising funds and awareness for children’s hospitals. CMN’s founding pledge, to keep all donations in the area in which they were raised, remains at the core of its philosophy.</p>
            <p>As the state’s premier pediatric health center, UF Health Shands Children’s Hospital provides innovative and comprehensive care at the highest standards of quality and service in partnership with patient families, healthcare teams, and communities. Community contributions support pediatric research and help to purchase the latest technology and equipment. Donations also help make hospital stays more comfortable and enjoyable for pediatric patients and their families. </p>
            <p>Ranked one of the top 50 pediatric hospitals in the nation in seven categories, UF Health Shands Children’s Hospital and Children’s Miracle Network have created one of the greatest facilities of care for children and young adults.</p>
              <p>For more information, please visit: <a href="https://ufhealth.org/shands-hospital-children-uf">https://ufhealth.org/shands-hospital-children-uf</a></p>
            <img src="/assets/images/TriBrandColors.png" alt="FT5K shirt" style="max-width:80%;max-height: 80%">
          <?php } else { echo 'This page is currently closed.'; } ?>
    </div>

    <div id="meet-kids" class="tabcontent">
        <?php if ($status == "open") { ?>
            <h3>For The Families</h3>
            <p>Dance Marathon at the University of Florida is very fortunate to have over 77 Miracle Families. Our Miracle Families are true inspirations and the pinnacle of what Dance Marathon stands for. The birthday parties, end-of-chemotherapy parties, and play dates that we have with the children constantly remind us of the true meaning behind “For All The Right Reasons.” The entire team at Dance Marathon is honored and privileged to have these amazing families attend Dance Marathon every year and support our students.</p>
            <p>If you have any questions about the Family Relations program, or would like to become a Dance Marathon Miracle Family, please contact the Family Relations Overall Director, Scotty Trethewey, at <a href="mailto:strethewey@floridadm.org">strethewey@floridadm.org</a></p>

            <h3>Meet Our Miracle Families</h3>
            <p>Take a moment to meet the heart and soul of our philanthropy. Our Miracle Children are the inspiration for every student who is part of DM at UF.</p>
            <?php
            for($i = 0; $i < count($kids); $i++) {
            if($i % 4 == 0) {
            echo '<div class="row">';
            } ?>
            <!-- Button trigger modal -->
            <div class="col-xs-3">
            <a href="#" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
                <img class="img-circle img-thumbnail" src="<?php echo ('/assets/images/kids/Miracle Children/'.$kids[$i]['image']); ?>.jpg" alt="..."><br>
                <p><?php echo $kids[$i]['name']; ?></p>
            </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="#myModal<?php echo $i; ?>Label">Meet <?php echo $kids[$i]['name']; ?></h3>
            </div>
            <div class="modal-body">
            <!--
                <img src="<?php echo ('/assets/images/kids/fullsize/'.$kids[$i]['image']); ?>.png" class="img-responsive img-full" />
                <hr>
            -->
                <p>
                    <?php echo $kids[$i]['description']; ?>
                </p>
            </div>
            </div>
            </div>
            </div>
            <!--<?php
            if(($i - 3) % 4 == 0) {
            echo '</div>';
            }
            } ?>-->
        <?php }
        else { echo 'This page is currently closed.'; } ?>
    </div>

</div>
</div>
                                                                     <div class="education">
                                                                       <div class="container text-center">
                                                                         <div class="row">
                                                                           <div class="container-fluid" style="padding-top:3em;">
                                                                               <div class="row">
                                                                                 <table style="width:100%">
                                                                                   <tr>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 16.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 15.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 14.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 13.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 12.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 11.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 10.png" /></th>
                                                                                   </tr>
                                                                                 </table>
                                                                                 <table style="width:100%">
                                                                                   <tr>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 9.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 8.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 7.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 6.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 5.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 4.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 3.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy 2.png" /></th>
                                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1 copy.png" /></th>
                                                                     <th><img class="img-responsive" src="/assets/images/awards1/Artboard 1.png" /></th>
                                                                        </tr>
                                                                    </table>
                                                                                <br>
                                                                     </div>
                                                                     <p></p></div>
                                                                     </div>
                                                                     </div>
                                                                     </div>
                                                                     

<?php include("includes/foot.php"); ?>
