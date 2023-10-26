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
        background-color: #e2883c;
        color: white;
        font-weight: 700;
        width: fit-content;
        border: none;
        outline: none;
        cursor: pointer;
        height: 60px;
        padding: 14px 16px;
        transition: 0.2s;
    }

    /* Style the tab */
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
        color: #e2883c;
        border-bottom: 2px solid #e2883c;
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
            <p><span style="color: #000000">Dance Marathon at the University of Florida is a yearlong philanthropic effort benefiting the patients of UF Health Shands Children's Hospital in Gainesville, Florida. Each year, students stay awake and on their feet at our annual 26.2 hour event to raise funds and awareness for Children's Miracle Network Hospitals for the duration of the event. In the 29 years of Dance Marathon at UF's existence, we have </span><span style="color: #e2883c"><b> raised more than $30 million</b> </span><span style="color: #000000">, making it </span><span style="color: #233563"><b> the most successful student-run philanthropy in the Southeastern United States. </b></span><span style="color: #000000"> In 2023, DM at UF raised a grand total of </span><span style="color: #e2883c"><b>$2,007,079.05</b></span><span style="color: #000000"> for UF Health Shands Children's Hospital, our local Children’s Miracle Network Hospital.</span></p>
            <p><span style="color: #000000">In 2022, UF Health Shands Children's Hosptial treated children from 65 counties in Florida, 42 other states, and 5 other countries. There were 48,994 telehealth visits, 37,789 ER visits, and 277,646 clinic visits. </span><span style="color: #233563"><b>All of the funds raised by DM at UF go directly to purchasing state-of-the-art medical equipment, enhancements to make the children’s stay at the hospital more enjoyable, and funding for research grants and educational programs.</b></span></p>
            <p><span style="color: #000000">Patient care funding provides necessities such as bandages and patient gowns, as well as equipment and hospital improvements to make hospital stays more enjoyable for children and their families. Research funding helps our doctors find solutions for incurable diseases such as cystic fibrosis and cancer, and it allows them to develop life-saving technology and enhanced processes that improve the daily lives of pediatric patients. Education funding supports programs such as Child Life Diversion therapy and goes toward raising funds and awareness for the Children’s Miracle Network.</span></p>
            <p><span style="color: #233563"><b>As we head into our</span> <span style="color: #e2883c">30th year</span><span style="color: #233563">, Dance Marathon at UF is excited to make even more miracles!</b></span></p>
            <!-- Get updated numbers fro how many people visit UF Health-->
        <?php } else {
            echo 'This page is currently closed.';
        } ?>
    </div>
</div>
<div class="tab">
    <button id="defaultTab" class="tablinks" onclick="openCity(event, 'our-story')">OUR STORY</button>
    <button class="tablinks" onclick="openCity(event, 'cmn')">CMN & UF HEALTH</button>
    <button class="tablinks" onclick="openCity(event, 'meet-kids')">MEET OUR MIRACLE FAMILIES</button>
    <!--<button class="tablinks" onclick="openCity(event, 'faq')">FAQ</button>-->
</div>
<!-- Tab content -->
<div id="our-story" class="tabcontent">
    <div class="subtab">
        <button id="defaultSubTab" class="tablinks-subtab" onclick="openSubTab(event, 'story')">OUR STORY</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, 'fast-facts')">FAST FACTS</button>
        <button class="tablinks-subtab" onclick="openSubTab(event, 'nomen')">NOMENCLATURE</button>
    </div>
    <div id="story" class="tabcontent-subtab">
        <p>Dance Marathon at UF is a yearlong philanthropic effort that culminates in our Main Event each spring where students remain awake and on their feet for 26.2 hours to represent the hardships faced by children battling pediatric illness. DM at UF is one of the five founding Dance Marathon programs in the nation, and since our start we have raised more than $30 million for the Miracle Children at UF Health Shands Children’s Hospital, our local CMN Hospital. Today, Dance Marathon at UF involves hundreds of internal members and a variety of sponsors and community partners.</p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="col-sm-6">Year</th>
              <th class="col-sm-6">Total Donated</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1995</td>
              <td>$12,424.66</td>
            </tr>
            <tr>
              <td>1996</td>
              <td>$23,783.27</td>
            </tr>
            <tr>
              <td>1997</td>
              <td>$57,057.02</td>
            </tr>
            <tr>
              <td>1998</td>
              <td>$75,938.18</td>
            </tr>
            <tr>
              <td>1999</td>
              <td>$114,511.81</td>
            </tr>
            <tr>
              <td>2000</td>
              <td>$158,603.56</td>
            </tr>
            <tr>
              <td>2001</td>
              <td>$195,148.15</td>
            </tr>
            <tr>
              <td>2002</td>
              <td>$217,945.10</td>
            </tr>
            <tr>
              <td>2003</td>
              <td>$247,941.04</td>
            </tr>
            <tr>
              <td>2004</td>
              <td>$250,012.48</td>
            </tr>
            <tr>
              <td>2005</td>
              <td>$319,842.78</td>
            </tr>
            <tr>
              <td>2006</td>
              <td>$361,454.68</td>
            </tr>
            <tr>
              <td>2007</td>
              <td>$370,317.00</td>
            </tr>
            <tr>
              <td>2008</td>
              <td>$435,560.89</td>
            </tr>
            <tr>
              <td>2009</td>
              <td>$416,485.27</td>
            </tr>
            <tr>
              <td>2010</td>
              <td>$520,871.79</td>
            </tr>
            <tr>
              <td>2011</td>
              <td>$713,053.68</td>
            </tr>
            <tr>
              <td>2012</td>
              <td>$886,726.15</td>
            </tr>
            <tr>
              <td>2013</td>
              <td>$1,169,722.16</td>
            </tr>
            <tr>
              <td>2014</td>
              <td>$1,528,330.16</td>
            </tr>
            <tr>
              <td>2015</td>
              <td>$2,015,307.17</td>
            </tr>
						<tr>
              <td>2016</td>
              <td>$2,434,315.18</td>
            </tr>
						<tr>
              <td>2017</td>
              <td>$2,724,324.19</td>
            </tr>
            <tr>
              <td>2018</td>
              <td>$3,026,420.19</td>
            </tr>
            <tr>
              <td>2019</td>
              <td>$3,230,025.23</td>
            </tr>
            <tr>
                <td>2020</td>
                <td>$2,526,418.24</td>
            </tr>
           <tr>
               <td>2021</td>
               <td>$2,270,311.40</td>
            </tr>
            <tr> 
            <td>2022</td>
           <td>$2,334,217.21</td>
           </tr>
           <tr>
            <td>2023</td>
            <td>$2,007,079.05</td>
</tr>
          </tbody>
        </table>
    </div>
    

    <div id="fast-facts" class="tabcontent-subtab">
        <!-- <h3><b><span style="color: #000000">WHERE THE MONEY GOES</span></b></h3> -->
        <h3>Where The Money Goes</h3>
        <p>
            <span style="color: #000000"><b>100%</b> of the funds raised by DM at UF go directly to UF Health Shands Children's Hospital, our local Children Miracle Network Hospital. Of these funds, most recently, <b>48%</b> goes to research, <b>10%</b> to education and <b>42%</b> to patient care.</span>
        </p>
        <p><span style="color: #000000">Patient care funding provides necessities such as bandages and patient gowns, as well as life-saving equipment and hospital improvements including the recent expansion of the Neonatal Intensive Care Unit. These funds also provide sleeper sofas for parents, playrooms for children, and Child Life programs, in an effort to make hospital stays more enjoyable for children and their families. Research funding helps our doctors find solutions for incurable diseases such as diabetes, cystic fibrosis, and cancer, and it allows them to develop new technology and enhanced processes that improve the daily lives of pediatric patients. Education funding supports programs such as Child Life Diversion therapy and goes toward raising funds and awareness for the Children’s Miracle Network.</span></p>

        <!--<h3><span style="color: #000000"><b>LENGTH OF DANCE MARATHON AT UF</b></span></h3>-->
        <h3>Length of Dance Marathon</h3>
        <p><span style="color: #000000">
                Before 2008: <b>32 hours</b>
                <br />
                After 2008: <b>26.2 hours</b>
            </span></p>

        <!--<h3><span style="color: #000000"><b>PARTICIPANTS</b></span></h3>-->
        <h3>Participants</h3>
        <p>
            <li><span style="color: #000000">Number of Registered Dancers in 2022: <b>1250</b> </b></span></li>
            <li><span style="color: #000000">Number of Captains: <b>467</b></span></li>
            <li><span style="color: #000000">Number of Emerging Leaders: <b>160</b></span></li>
            <li><span style="color: #000000">Number of Kirstyn's Krew: <b>53</b></span></li>
            <li><span style="color: #000000">Number of Miracle Families: <b>56</b></span></li>
            <li><span style="color: #000000">Number of Sponsors: <b>74</b></span></li>
            <li><span style="color: #000000">Most Years as a Dancer: <b>4 years</b></span></li>
            <!--change to exact-->
        </p>

        <!--<h3><span style="color: #000000"><b>FUNDRAISING</b></span></h3>-->
        <h3>Fundraising</h3>
        <p><span style="color: #000000">
                <b>44,899</b> donations on DonorDrive
                <!--change to exact-->
                <br />
                <b>2,715</b> fundraisers raised at least $1
                <!--change to exact-->
                <br />
                Amount raised in 2022: <b>$2,334,217.21</b>
                <br />
                Total amount raised in past 28 years: over <b>28 million dollars</b>
                <br />
                Alumni Contribution: <b>$83,235.89</b>
                <br />
    </div>
    </span></p>
</div>
<div id="nomen" class="tabcontent-subtab nomen">
    <!--<h3><span style="color: #000000"><b>EVENT TITLE</b></span></h3>-->
    <h3>Event Title</h3>
    <p><span style="color: #000000">
            First Reference: Dance Marathon at the University of Florida
            <br />
            Second Reference: Dance Marathon at UF
            <br />
            Social Media and Marketing Reference: DM at UF
            <br />
            Not Acceptable: DM UF, UF DM, DM @ UF
        </span></p>

    <!--<h3><span style="color: #000000"><b>HOSPITAL TITLE</b></span></h3>-->
    <h3>Hospital Title</h3>
    <p><span style="color: #000000">
            First Reference: UF Health Shands Children’s Hospital
            <br />
            Second Reference: UF Health Shands
        </span></p>

    <!--<h3><span style="color: #000000"><b>CHILDREN AND THEIR FAMILIES</b></span></h3>-->
    <h3>Children and their Families</h3>
    <p><span style="color: #000000">
            Miracle Family
            <br />
            Miracle Children
            <br />
            Miracle Child (0-12)
            <br />
            Miracle Teen (13+)
            <br />
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
                <li><span style="color: #000000">Digital Marketing</li></span>
                <li><span style="color: #000000">Family Relations</li></span>
                <li><span style="color: #000000">Fundraising and Organization Development</li></span>
                <li><span style="color: #000000">Hospitality</li></span>
                <li><span style="color: #000000">Leadership Development</li></span>
                <li><span style="color: #000000">Marathon Relations</li></span>
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
                <li><span style="color: #000000">Digital Marketing</li></span>
                <li><span style="color: #000000">Family Relations</li></span>
                <li><span style="color: #000000">Fundraising and Orginization Development</li></span>
                <li><span style="color: #000000">Hospitality</li></span>
                <li><span style="color: #000000">Leadership Development</li></span>
                <li><span style="color: #000000">Marathon Relations</li></span>
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
    <?php } else {
        echo 'This page is currently closed.';
    } ?>
</div>

<div id="meet-kids" class="tabcontent">
    <?php if ($status == "open") { ?>
        <h3>For The Families</h3>
        <p>Dance Marathon at the University of Florida is very fortunate to have 35 Miracle Families who are true inspirations to everyone involved in the organization and are the pinnacle for what we stand for. The birthday parties, end-of-chemotherapy parties, and play dates that we have with the children constantly remind us of the true meaning behind “For All The Right Reasons.” The entire team at Dance Marathon is honored and privileged to have these amazing families attend Dance Marathon every year and support our students.</p>
        <p>If you have any questions about the Family Relations program, or would like to become a Dance Marathon Miracle Family, please contact the Family Relations Overall Director, Anne-Charles Zimmer, at <a href="mailto:azimmer@floridadm.org">azimmer@floridadm.org</a></p>

        <h3>Meet Our Miracle Families</h3>
        <p>Take a moment to meet the heart and soul of our philanthropy. Our Miracle Children are the inspiration for every student who is part of DM at UF.</p>
        <?php
        $kids = array(
            array(
                'name'  => 'Adrienne W.',
                'description' => 'Adrienne Williams was born a healthy 8 pounds and 2 ounces in Ohio. She had been examined prior to birth because of her brother’s heart defect, and all seemed well. Little did her family know her issues would be completely different from her brother’s, but just as difficult. Adrienne was diagnosed with hydrocephalus and Arnold Chiari type 1. In 2007, she had a VP Shunt put in and in 2008, her first posterior fossa decompression. In 2010, Adrienne had her second posterior fossa decompression. In between her posterior fossa decompressions, she had a mic-key put in. Adrienne has always enjoyed life and is happy, stays active, and is gifted in academics.',
                'image' => 'AdrienneWilliams',
            ),
                      array(
                                   'name'  => 'Alyssa M.',
                                   'description' => 'Alyssa was born at 26 weeks, weighing 1 pound and 4 ounces. Her parents were told she would not live through the night, but she continued to surprise the doctors by fighting to live. Due to her premature birth, she developed hydrocephalus, a neurological disorder that causes an abnormal buildup of fluid in the brain. Alyssa has a shunt, cerebral palsy and other medical issues for which she needs continuous monitoring and treatment. Her parents were told she would never walk, talk, eat, or interact with them. However, today, she is 26 years old and eats what her parents eat - with a few modifications. Alyssa can hear with her cochlear implant but mainly relies on sign language to communicate. Walking is a challenge, but she does it with the help of a walker and many years of physical therapy. Once she gets to know them, her interaction with friends and family is outstanding. She has an awesome personality and loves to ride horses, swim, watch movies and athletic events! Alyssa adores participating in Dance Marathon at the University of Florida events and is so appreciative of her time being a Children’s Miracle Network Ambassador',
                                               'image' => 'Alyssa2',
                                   ),
                                                
                                                
                                           array(
                                           'name'  => 'Ayden M.',
                                               'description' => 'At 3 years old, Ayden was diagnosed with a rare inoperable brain tumor called pilocytic astrocytoma with glioma blast. He lost his vision at age 3 and had a total of 17 surgeries and many treatments within his first year at Shands. His family and he have traveled to St. Judes Hospital in Memphis, Tennessee, where they lived for eight months while Ayden received treatments along with two more surgeries. Upon returning from Memphis, Ayden now receives treatment at Arnold Palmer Hospital in Orlando, another CMN hospital. He is undergoing active chemotherapy treatment now and will continue that treatment for years and years to come. Unlike most kids, Ayden will receive treatment into his 30’s or longer, and he will never be in remission or cancer-free unless a true miracle happens. Because of CMN hospitals, Ayden is alive today! Bailey’s family is truly thankful for all CMN does for kids and that these hospitals always keep fighting to help the next one.',
                                                             
                                         'image' => 'Ayden3',
                                            ),

                      array(
                                      'name' => 'Bailey A.',
                                      'description' => 'Bailey Abbott was born in Central Florida with Turner Syndrome, a rare chromosome disorder that occurs when a female child is missing an X chromosome. Turner Syndrome occurs to 1 in every 2,000 live female births, but even more remarkably, only 2% of children conceived with Turner Syndrome survive to birth. From the moment Bailey was born, she was already a true miracle! When Bailey was just 2 weeks old, she received heart surgery to correct a birth defect on her aorta, a common problem for girls born with her condition. Bailey visits the UF Health Turner Syndrome Clinic every four months, where she is seen by many specialists, including endocrinologists to monitor her growth, cardiologists for electrocardiograms, and psychologists for education consults. Because girls with Turner Syndrome often have problems with short stature, Bailey started daily injections of growth hormones when she was 2 and will continue to receive them through puberty. Bailey was also born with only one kidney, which is monitored closely by her nephrology team at UF Health. People quickly learn that Bailey is just an active 14 year old that is not defined by her diagnosis who loves swimming and weight lifting. She has a bright, bubbly personality that touches lives everywhere she goes. Bailey enjoys being active in several of her school’s clubs, such as Future Farmers of America and Interact where she learns community service and leadership. Bailey’s family continues to spread awareness of Turner Syndrome by hosting Bailey’s Butterflies for Turner Syndrome walks annually and reaching out to other families affected with Turner Syndrome. Her family is forever grateful to Children’s Miracle Network Hospitals and UF Health Shands Children’s Hospital for the incredible care Bailey has been able to receive!',
                                      'image' => 'Bailey',
                                  ),
                      array(
                                      'name'  => 'Beckett G.',
                                      'description' => 'Beckett was born on October 12, 2014. Once he came home, his parents always worried about his breathing. On December 22, 2014,  his parents brought him to the ER thinking he had a minor infection. Their local hospital quickly admitted him and soon after he went into respiratory distress. He was diagnosed with dilated cardiomyopathy, a condition where the heart muscles become weakened and enlarged. On Christmas Eve, he was transferred to UF Health Shands Children’s Hospital. Beckett received the Berlin heart on January 5, 2015 to maintain blood flow into the heart, and fortunately, he received a heart transplant only 10 days later. Beckett is now a happy 8 year old and loves spending time with his amazing siblings, McKenna, Harper, and Danny, as well as swimming, playing tennis, rocking out to music, gaming, and doing art!',
                                      'image' => 'Beckett',
                                  ),
                                  array(
                                      'name' => 'Bennett J.',
                                      'description' => 'Bennett Jefferson is missing his right ventricle and tricuspid valve in his heart. The written diagnosis is a technical, wordy paragraph. Some doctors say tricuspid atresia and others say hypoplastic right heart syndrome. In short, he is a single ventricle patient, which means he only has half of a heart but twice the fight! In December 2013, Bennett had his first open-heart surgery at 3 months old. The doctors at UF Health Shands Children’s Hospital performed a bilateral bi-directional Glenn procedure, in which the doctors placed a band around his pulmonary artery and connected both of his inferior vena cavas to his pulmonary artery. The doctors believe that Bennett having the two inferior vena cavas is what kept him stable for three months, while most babies with his condition require surgery at around 7 days old. In July 2017, just before he turned 4 years old, Bennett had his second open-heart surgery. The procedure was called the Fontan procedure; the doctors connected his superior vena cava to his pulmonary artery. Since the pressure in Bennett’s heart changed with this procedure, they also removed the band around his pulmonary artery. This procedure is the final repair for his type of defect. If Bennett ever goes into heart failure, the only solution would be a heart transplant. For now, the Jefferson family tries their best to enjoy every day and not take anything for granted. Bennett is now in 4th grade and enjoys playing video games, soccer, and swimming. His favorite color is red which is no surprise because his favorite movie is Spiderman. Bennett and his family are so thankful for the work of Dance Marathon at UF and for the amazing medical team at UF Health Shands Children’s Hospital!',
                                      'image' => 'Bennett3',
                                  ),
                                  array(
                                       'name' => 'Brooks & Broward R.',
                                       'description' => 'The link between brothers, Brooks and Broward Roberts, is especially unique. Brooks, 4, and Broward, 5, do everything together. They ride four-wheelers and go on backyard adventures. They were also both diagnosed with a non-genetic tethered spinal cord, a neurologic condition caused by the spinal cord attaching to tissue around the spine. In October 2020, Broward started suffering from back pain. His mother, Kristin, noticed a lump by his lower spine. As the week went on, her oldest son’s complaints grew more frequent. His symptoms culminated on Halloween night; Broward started dragging his toe while walking. Kristin said it was as though her son was tripping over his right foot. Fortunately, the Roberts family was familiar with UF Health’s pediatric neurosurgery team. Born with a sacral dimple, or a small bump on his lower back, Broward first visited Lance Governale, M.D., UF Health’s chief of pediatric neurosurgery, at 6 weeks old. Nearly three years after his first visit, Broward would need surgery. The surgery helped Broward get back to walking and running – as soon as nine days after the procedure. Two months later, Brooks, Broward’s younger brother, would have his successful surgery. Kristin noticed Brooks had begun to curl his toes and stack them on top of one another. Eventually, Brooks started to trip over his toes, resembling one of Broward’s symptoms. Both Brooks and Broward have since been released from Dr. Governale’s care. Visits with him are only “as needed,” Kristin said. Brooks still does check-ins with cardiology, pulmonology, audiology, ENT (ear nose throat), urology, gastrointestinal and nutrition at UF Health because he was a micro-preemie and was born at 31 weeks. Broward loves playing soccer, and Brooks is his biggest supporter!',
                                             'image' => 'Brooks&Broward',
                                   ),
                                   array(
                                    'name'  => 'Cason T.',
                                    'description' => 'In loving memory of Kirstyn Tripp: August 17, 2004 to April 16, 2018 
                                    <br>Cason Tripp helps raise funds and awareness for Children’s Miracle Network through Dance Marathon at UF in honor of his sister, Kirstyn Tripp, who passed away from a rare metabolic disorder. “Love is a remarkable superpower,” she always said. #KirstynStrong',
                                    'image' => 'cason',
                                ),
                                  array(
                                      'name'  => 'Claire E.',
                                      'description' => 'Claire Essex was born at UF Health Shands Children’s Hospital weighing only 3 lbs. She stayed in the Neonatal Intensive Care Unit (NICU) for 64 days while her body grew big enough to 5 lbs. She has received many medical diagnoses, including 19p13.3 duplication (intellectual disability and neurodevelopmental delays), metaphyseal dysplasia of the Schmid type (short stature and bowed legs), spina bifida (incomplete formation of the spinal cord), autism, and chronic kidney disease. At the age of 7, her right kidney had to be removed after septic shock, cardiac arrest, and pulmonary failure. During this time, healthcare providers at UF Health Shands took care of Claire in the Pediatric Intensive Care Unit (PICU) for 36 days. Claire has been seen by and received care from many UF Health pediatric specialists, including genetics, GI/nutrition, neurology, nephrology, urology, orthopedic surgery, physical therapy, occupational therapy, speech therapy, dentistry and surgery. Claire’s primary care is UF Health Pediatrics, and UF Health Shands Children’s Hospital is very special to Claire’s family. Claire is 10 years old and loves the color purple, stem toys, swinging, and music!',
                                      'image' => 'Claire1',
                                  ),
                                  array(
                                      'name'  => 'Courtney H.',
                                      'description' => 'In February 2013, Courtney Holcomb was diagnosed with stage 5 retinoblastoma in her right eye. After three rounds of chemotherapy treatments, her doctors decided it would be safest to remove her eye to make sure the cancer did not spread. She is now a healthy 8 year old who loves to dance and play soccer! Courtney continues to receive the best follow-up care and treatments at UF Health Shands Children’s Hospital to keep her healthy.',
                                      'image' => 'Courtney',
                                  ),
                                  array(
                                      'name'  => 'Dani-Lynn E.',
                                      'description' => 'Dani-Lynn Early was born in May 2015 in Jacksonville, Florida. Dani-Lynn is diagnosed with congenital heart disease, with a combination of 3 different defects. She has hypoplastic left heart syndrome (HLHS) where the left side of the heart has not formed properly, ventricular septal defect where there is a hole in the wall between the two chambers of the heart, and partially anomalous pulmonary return that causes abnormal blood flow from the lungs to the heart. She has undergone two of the three HLHS surgeries. The first surgery occurs within the first 2 weeks of life where the surgeon creates a new aorta to connect to the right ventricle. The second surgery is performed on an infant of 4-6 months old that creates a connection between the pulmonary artery and the superior vena cava. She is currently listed on the heart transplant list to receive a brand new heart. Dani-Lynn enjoys Disney, pageants, and playing with her two older sisters. Her favorite movie is Frozen, and she loves the color pink!',
                                      'image' => 'Dani-Lynn',
                                  ),
                      array(
                          'name'  => 'Elijah G.',
                          'description' => 'On March 31, 2016, Elijah was born at UF Health Shands Children’s Hospital after 39 weeks and six days of what seemed to be a picture-perfect pregnancy. At only 30 minutes old, he was taken to the Neonatal Intensive Care Unit (NICU) due to low oxygen saturation levels. He ended up staying nine nights in the NICU due to an array of problems, including his oxygen levels dropping, random drops in his heart rate, low central tone, and difficulty feeding. Eli was eventually sent home with an apnea and bradycardia, or an A/B, monitor, so his parents could continue monitoring his heart rate and oxygen levels at home. In Eli’s first year of life, he had many tests performed, all of which came back within normal range, leading only to a diagnosis of laryngomalacia and delayed myelination. On March 23, 2017, only 8 days before his first birthday, Eli’s geneticist notified his parents that he had been diagnosed with a rare genetic syndrome, called coffin-siris syndrome (CSS). At the time of his diagnosis, his parents were told that there were only 140 documented cases of CSS worldwide and that his syndrome would cause him to have global developmental delays. He has since had tests showing conductive hearing loss, and he has also had surgeries performed by an otolaryngologist, a urologist, and a neurosurgeon. Eli received outpatient occupational and physical therapy at UF Health Rehab Center for Kids from 1 month old through 29 months of age. In addition to starting OT and PT services at a young age, after receiving an autism diagnosis at 2 years old, Eli started ABA therapy at 2.5 years old and speech therapy at 4 years old. Eli is currently 7 years old and spends most of his day in a general Ed classroom with his RBT acting as his 1:1 aide. During Eli’s hospital stays after surgeries and for overnight assessments, his parents have seen how the money raised within Children’s Miracle Network (CMN) and DM at UF is being utilized to access up-to-date equipment for his medical providers and to allow for toys, games, and specialists to keep the children happy and entertained. Eli is almost always happy, and he loves giving kisses and watching Mickey Mouse Clubhouse. He loves going up to strangers, holding their hands, sitting in their laps, and bossing them around. Eli’s family wants to personally thank all of the volunteers and donors who make families like theirs feel loved and supported through all CMN and DM at UF events.',
                          'image' => 'Eli1',
                      ),
                                  array(
                                      'name'  => 'Elizabeth C.',
                                      'description' => 'Elizabeth or “Elie” Chapman is diagnosed with untyped glycogen storage disease (GSD). When she was 6, Elie was brought to the Pediatric Emergency Room at UF Health Shands Children’s Hospital after vomiting over 30 times. At the hospital, the doctors discovered that her blood sugar level was at 42 (normal being 70-100), and she had a seizure. Elie’s family was referred to Dr. Weinstein, a world-renowned doctor for GSD, at UF Health Shands Children’s Hospital. Elie’s family learned that patients with this disorder are unable to fully break down glycogen to glucose and, therefore, are dependent on a continuous supply of glucose. Without this supply of glucose, hypoglycemia (low blood sugar levels), lactic acidosis (excess of lactate production) and seizures can occur. Since learning more about GSD, Elie can advocate for herself by pricking her finger to check her blood sugar and ketones when she is not feeling well. She has to snack regularly and drink a protein supplement twice a day in order to maintain her blood sugar and prevent muscle breakdown, which can cause severe cramping. Because of GSD, when Elie has a typical fever or illness, she often has to go to the hospital to get special IV fluids, which may take her longer to recover. Today, Elie is 16 years old and brings so much joy to our DM family!',
                                      'image' => 'Elie2',
                                  ),
                                  
                                  array(
                                      'name'  => 'Emily M.',
                                      'description' => 'Emily Monroe was born premature at 23 weeks and started life with blindness in her right eye. Eventually, her family started to notice that she was having more trouble seeing and were concerned about the vision in her left eye. Doctors at UF Health Shands Children’s Hospital diagnosed her with uveitis, inflammation in the eye. Emily lost most of her vision when she was about four years old due to being on oxygen for an extended period of time during prematurity. Despite her diagnosis, Emily is now 17 years old, and she is full of energy. Emily loves Harry Potter, listening to music, swinging, and singing. Emily is now a senior in high school, and this is her 13th year being involved in DM at UF!',
                                      'image' => 'Emily Monroe 2022',
                                  ),
                                  array(
                                       'name'  => 'Fletcher H.',
                                       'description' => 'Fletcher was diagnosed with cancer at the end of February 2017. We were experiencing all of the feelings and emotions you would expect someone in our situation would; we were simultaneously sad, angry, heartbroken, and had a feeling of being helpless. The type of cancer that Fletcher was diagnosed with, Burkitt’s, is extremely aggressive. The cancer cells can double every 24 hours and they were doing a number on our boy. Fletcher went from being happy and running around with his sister and friends to being in the PICU on a breathing tube and dialysis in a span of one week. To be honest when you are at that point, it’s hard to envision a positive outcome. Luckily we were at an amazing place, Shands, with an amazing team of nurses, doctors, and other support staff to help us get through that initial shock to both our minds and Fletcher’s fragile body. Thanks in part to fundraisers, like Dance Marathon, Shands was able to provide Fletcher with the innovative and comprehensive care that he needed. Dance Marathon raises millions of dollars per year which allows Shands and other Network hospitals to purchase state-of-the-art medical equipment and provides many other enhancements for Fletcher and the more than 8,500 other pediatric patients at Shands. These enhancements not only make their stays in the hospital more comfortable, it also increases their chances of survival. Little by little, hour by hour, day by day, he began to get better. Once he was moved from the PICU to the regular Pediatric Cancer Unit he improved even more. Despite going through an intense chemo regimen that was referred to as “the kitchen sink approach” Fletcher never flinched. He lost his hair, but simply said, “Mom it’s just hair, it will grow back, and I can’t even see my eyebrows or eyelashes anyway so I don’t care.” It truly is amazing the perspective that children with cancer have. Having spoken with other parents, it’s not something that’s unique to Fletcher, many children seem to have a sense of calm and wisdom about them that is well beyond their years. There were definitely some really hard days, like when Fletcher had seizures, but overall he was making progress and heading in the right direction. Fletcher was right, his hair is growing back. He completed his last round of chemo on July 23rd and is set to have his central line removed August 30th. Looking back on everything we went through it feels as though a lifetime of emotion has been compressed into six months and it will take time to process all we’ve been through. But, Fletcher has a future now, he’ll be going to 1st grade, he’s playing with friends again, and, although those are very common things for a kid his age, it could have easily not happened for him. We have learned to truly take advantage of and enjoy every day, because life is a gift, a very fragile one, and we are going to celebrate it as much as possible.',
                                       'image' => 'IMG_4022',
                                  ),
                                  array(
                                        'name'  => 'Hadley P.',
                                        'description' => 'When Powie was 2 weeks old, she stopped breathing during her first family outing. She was hospitalized, and that was the first time her family heard the words “mitochondrial disease.” The path to diagnosis was long and winding, as mitochondrial disease can be difficult to diagnose, and because there is no effective treatment, we focus on treating her symptoms. Powie sees nine specialists at UF Health Shands Children’s Hospital and four specialists elsewhere. Mitochondrial disease is a systemic disease and impacts many of her organ systems. She relies on many medications and several medical interventions to function. The Patterson family is very fortunate that UF Health Shands Children’s Hospital has a pediatric gastric stimulator program that has allowed Powie to thrive! Powie is now 7 years old, and she’s truly doing so well with the correct support in place! She’s a very typical child who loves school, her siblings, and her puppies! Dance Marathon at UF has become one of her most favorite things in this world!',
                                        'image' => 'Powie',
                                  ),
                                  array(
                                      'name'  => 'Hannah S.',
                                      'description' => 'Joel is 17 and Hannah is 5 and they are two people out of the 2,000 people in the world who have a rare genetic condition called Cystinosis. Cystinosis is a disease that effects every cell in your body. Joel had his first kidney transplant at Shands Children’s Hospital in 2018. This kidney rejected and he received another transplant in 2020. Both Hannah and Joel receive food and medication through a g-tube around the clock. Hannah gets hooked up to a machine at bedtime so that way she can sleep through the night. One side effect of Cystinosis is that it can cause you to go blind without proper treatment. So, Hannah’s eyes are always very sensitive. The funds we raise have allowed Hannah and Joel to receive the proper treatment, care, and medications that allow them to live a seemingly normal life.',
                                      'image' => 'Hannah',
                                  ),
                      
                                  array(
                                      'name'  => 'Isaiah R.',
                                      'description' => 'Isaiah Richardson was his mother’s fourth child, so when labor began, they expected everything to be routine. Like Isaiah’s parents’ previous children, Isaiah was born in the birthing tub at The Birth Center of Gainesville. After a seemingly normal delivery, their baby boy was placed on his mother’s chest. The midwife and the mother immediately noticed that Isaiah was not crying or breathing normally. After he was evaluated, it was determined that it would be in the family’s best interest to transport Isaiah to Shands by ambulance. The response was amazing. When the Richardson family arrived at the hospital, they were met by Dr. Sandra Sullivan who advised that Isaiah appeared to have a bacterial infection due to meconium aspiration. However, she believed he should be released within a day or so. Isaiah’s father was starting a new job the next day, and three other children were at home. They were overwhelmed. The next morning, a social worker came to visit Isaiah’s mother. The social worker provided her with loads of information regarding what to expect in the hospital and services available through Childrens Miracle Network. By the second day, Isaiah’s condition had worsened. While his parents had finally left the hospital to get some rest, Dr. Sullivan called to advise them that they needed to get to the hospital as soon as possible. This was the worst phone call Isaiah’s parents had ever received. When his parents arrived, they were told that Isaiah also had a hole in his heart. The combination of the cardiac and respiratory issues were preventing adequate exchange to sustain life. Doctors wanted to put Isaiah on an extracorporeal membrane oxygenation machine. This surgical procedure would place a tube in Isaiah’s neck to his heart, which would remove blood that would be replaced by oxygenated blood, which would then be pumped back in. Isaiah stayed on the machine for six days. By this time, he had been in the hospital for two weeks, and his oxygen levels were finally improving. He was not able to be released until about two weeks later when Isaiah was able to breathe on his own, the oxygen level stayed consistent, and his blood pressure was controlled. At 5 weeks old, he was finally released. Today, Isaiah is a thriving 10 year old!',
                                      'image' => 'IsaiahRichardson',
                                  ),
                                  array(
                                      'name'  => 'Izabella N.',
                                      'description' => 'Izabella Neira (Bella) and her twin sister Jesubelle were born 3 months premature in December 2011 at Memorial West Hospital in South Florida. At only 3 weeks old, Izabella had a pulmonary hemorrhage, meaning that she was bleeding out from her lungs. She was then transferred to a more critical hospital in South Florida where she was stabilized, but she was still in very critical condition. Izabella was eventually diagnosed with a very rare surfactant deficiency that prevented her lungs from functioning normally. Her condition was so rare it did not even have a name yet. A lung transplant would provide Izabella’s only chance at survival, but before she could be placed on the list, protocols called for a bronchoscopy, a procedure that was too risky for Izabella to endure, and therefore her parents rejected it. Doctors only gave Izabella a 7 month life expectancy. UF Health Shands Children’s Hospital was Izabella’s true savior. The UF Health Congenital Heart Center said that it did not need the risky procedure to put Izabella on the transplant list, and Izabella was transferred to UF Health Shands Children’s Hospital when she was 6 months old. Izabella remained in the Pediatric Intensive Care Unit (PICU) at UF Health Shands Children’s Hospital for 9 months until they got “the call.” Izabella received her transplant on January 27th, 2013, 417 days after she was born. Izabella is the youngest patient in the Southeast to ever receive a double heart-lung transplant. On March 20th, 2013, after 469 days, Izabella left the hospital for the first time in her life. UF Health Shands Children’s Hospital kept her alive for double her life expectancy until she received the heart and lungs she needed to survive. Many of the machines that kept Izabella alive while she was on life support would not have been there if not for the support the Children’s Miracle Network provides to UF Health. Today, Izabella is a thriving 10 year old who loves ballet, playing outside, swinging and playing with her three sisters. Doctors didn’t think she would live, walk, talk, or eat normally, but she has continued to amaze them every single step of the way. Her family is endlessly grateful for everything that Children’s Miracle Network and UF Health Shands Children’s Hospital did to save their daughter.',
                                      'image' => 'Bella',
                                  ),

                                  array(
                                      'name' => 'Jada T.',
                                      'description' => 'Jada Turner is a spunky 13-year-old girl in seventh grade. Jada loves drawing, playing in her school’s band, and is an honorary UF Women’s Lacrosse member. In August 2018, Jada was diagnosed with acute myeloid leukemia. Starting that fall, she underwent treatment and 6 months of chemotherapy. Upon completing her chemotherapy regimen, Jada received a bone marrow transplant and was given a remission status. Jada’s cancer returned in the fall of 2020; she underwent a second round of chemotherapy and received her second bone marrow transplant. Jada was placed in remission once more, and returned to her life at home. On February 27th of 2022, halfway through her 6th grade year, Jada’s family received the news that her cancer had returned for a third time. After a third round of chemotherapy and a bone marrow transplant, Jada is cancer free! Jada continues to inspire her family and friends everyday with her upbeat attitude and smile that can light up a room!',
                                      'image' => 'Jada2',
                                  ),
                      array(
                          'name'  => 'Joel S.',
                          'description' => 'Joel is 17 and Hannah is 5 and they are two people out of the 2,000 people in the world who have a rare genetic condition called Cystinosis. Cystinosis is a disease that effects every cell in your body. Joel had his first kidney transplant at Shands Children’s Hospital in 2018. This kidney rejected and he received another transplant in 2020. Both Hannah and Joel receive food and medication through a g-tube around the clock. Hannah gets hooked up to a machine at bedtime so that way she can sleep through the night. One side effect of Cystinosis is that it can cause you to go blind without proper treatment. So, Hannah’s eyes are always very sensitive. The funds we raise have allowed Hannah and Joel to receive the proper treatment, care, and medications that allow them to live a seemingly normal life.',
                          'image' => 'Joel Strickland',
                      ),
                                  array(
                                      'name' => 'Jude & Oliver S.',
                                      'description' => 'Jude and Oliver were born on July 13th, 2011, 14 weeks before their due date, at UF Health Shands Children’s Hospital. Jude weighed 1 pound and 15 1/2 ounces, and Oliver weighed 2 pounds and 1 ounce. They were immediately taken to the Neonatal Intensive Care Unit (NICU) to receive critical care. Jude and Oliver were put on giraffe beds, which allowed nurses and doctors to access them while providing an environment similar to the womb. Their undeveloped lungs were the biggest concern, and they were intubated and given surfactant treatment to help the lungs develop. They were also treated with antibiotics, phototherapy for jaundice, transfusions for anemia, and constantly monitored for common prematurity problems, such as necrotizing enterocolitis (NEC) or brain bleeds, which fortunately, neither boy experienced. Jude made slow improvements on breathing, but Oliver suffered setbacks after initially being weaned down to Continuous Positive Airway Pressure (CPAP) machines. Oliver was diagnosed with patent ductus arteriosus (PDA) and required surgery to prevent oxygen rich blood from continuously flowing back to his lungs. This surgery took place when he was 3 weeks old and caused great improvement in Oliver’s lung development. Jude went home after 81 days in the NICU, and Oliver went home 3 months after his birth. Oliver’s PDA resulted in the diagnosis of early chronic lung disease, and he went home requiring supplemental oxygen for two more months. He has struggled with asthma since he was a toddler and had two short hospitalizations at 5 years old. Oliver is followed by pulmonary specialists at UF Health Shands Children’s Hospital, and his asthma is well-managed. In 2023, the boys turned 12 years old. They are incredibly energetic and bright boys who play a variety of sports, including flag football and basketball, throughout the year. Oliver loves science, technology, animals, and sports, and Jude loves history, anime, and video games.',
                                      'image' => 'Jude',
                                  ),

                                  array(
                                      'name' => 'Kaliah E.',
                                      'description' => 'Kaliah Edwards was a healthy 8 year old who loved playing various sports such as soccer, volleyball, track, and cheerleading. However, in July 2015, Kaliah woke up with swelling in different parts of her body and had difficulty swallowing due to neck swelling. Kaliah was then diagnosed with nephrotic syndrome. Kaliah had a kidney biopsy and scheduled weekly infusions to help control her edema. In November 2017, Kaliah had her port removed and replaced with a catheter the same day she started dialysis. Today, Kaliah is 13 years old and thriving. The level of care at UF Health Shands Children’s Hospital has exceeded her family’s expectations. Everyone on the staff is thoughtful, supportive, and all around fabulous.',
                                      'image' => 'KaliahEdwards',
                                  ),
                                  array(
                                      'name' => 'Kendall L.',
                                      'description' => 'Kendall Lewis, aka “Miss K,” was born on June 2nd, 2011 after a planned repeat cesarean section and  within the first few hours of her life was transported to UF Health Shands Children’s Hospital. Her family didn’t know about any of her issues prior to her birth. Within the first few hours, it was determined that she has VACTERL Association. This is an acronym that represents a number of things. “V” stands for vertebrae, or spinal issues. Her L4 vertebrae is a hemi/half vertebrae, or wedge shaped. She has deformities of the sacral/coccyx and a tethered spinal cord. “A” stands for anal. She has a low imperforate anus, meaning she was born without the anal opening where it should have been. “C” stands for cardiac. She has Tetralogy of Fallot with pulmonary atresia (TOF/PA). The vein and valve that bring blood to one’s lungs from one’s heart was essentially non-existent. She has a number of other issues with her heart as well. “T” stands for trachea. She has a tracheoesophageal fistula with esophageal atresia, which signifies the “E” for esophageal. Simply put, Kendall had an abnormal connection between her trachea and her esophagus, and her esophagus wasn’t attached to her stomach. “R” stands for renal. She has a duplicated collecting system on her right kidney. “L” stands for limb. Some people with this diagnosis can be missing odd bones in their body. This is the only component that she does not have. In addition to these issues, she also has some extensive pulmonary complications as well as immune system complications. Miss K had her first set of surgeries at 5 days old that included her first bowel reconstructive surgery and another to repair and reconnect her esophagus to her stomach. Her first open-heart surgery was at 26 days old. After her second surgery in 2014, she was placed on infusions to help boost her immune system. She continues to take these every other week. In the spring of 2015, Kendall had a cardiac catheterization done to help the narrowing in her conduit that was occurring due to her immune system not liking the donor tissue. She was placed on another type of Infusion to help stop her body from rejecting her new heart conduit. It didn’t help, but it bought Kendall some time while she had to have a second bowel reconstructive surgery done. In the summer of 2016, at the age of 5, Kendall had to have her third open-heart surgery - sooner than planned. However, as she grows, new things are found. In the spring of 2018, her family found out that Kendall likely had a small stroke after her second open-heart surgery. While the MRI was done to rule out anything serious, it was found that she also has hemiplegic cerebral palsy. It is very minor, and she functions very highly with it. Kendall is followed by 10 specialty teams at UF Health Shands Children’s Hospital. It has been Kendall’s family’s home away from home since day one. The Lewis family loves the pediatric departments at UF Health Shands Children’s Hospital, and they are thankful for everything Shands has done for their family.',
                                      'image' => 'Kendall',
                                  ),

                                  array(
                                      'name'  => 'Kinsey B.',
                                      'description' => 'Kinsey Bogart was born at 35 weeks on September 22nd, 2003 at UF Health Shands Children’s Hospital. She was premature but otherwise healthy. At about eight months, her parents noticed she began getting puffy around her face, feet, and hands. Labs and evaluations by their pediatrician quickly found that her kidneys were not working properly, and they were sent to the UF Health Pediatric Nephrology department for evaluation. They began treatment with steroids and a few other medications. They returned to Shands two weeks later to the pediatric emergency department. Her kidneys had almost completely stopped filtering the blood, labs were critical, and she began seizing. For 12 weeks she was admitted for further tests, treatments, and biopsies. Her team of doctors told them to brace for the worst. Her kidneys and liver were failing, and her brain couldn’t regulate her temperature. The machines were keeping her alive, and there was nothing else they could do. Thankfully, Kinsey improved and within days, had regained all organ function except for her kidneys. She was diagnosed with Atypical hemolytic uremic syndrome (aHUS), an exceedingly rare disease. They were sent home on dialysis and continued peritoneal dialysis at home for 11 years. There would be many hospitalizations, treatments and several new diagnoses in the years to come like autism, cardiomyopathy, brittle bone and other skeletal issues just to name a few. Kinsey received a kidney transplant on October 6th, 2015. Unfortunately, her transplant only lasted a little over two years. Kinsey went back on dialysis, but this time they have to travel to UF Health Shands Children’s Hospital for 4.5 hours of dialysis, three days a week. They would also learn that Kinsey does not have aHUS, and at this point, she is still undiagnosed. They are working with the undiagnosed network (UDN) to possibly find a diagnosis. Their journey has been long, and far from over as they move forward in hopes of another transplant surgery. Kinsey is still here because of the life-saving efforts of all the staff at UF Health Shands Children’s Hospital, and the wonderful resources they have that help them take care of patients.',
                                      'image' => 'Kinsey',
                                  ),
                                  array(
                                       'name' => 'Loxley S.',
                                       'description' => 'Loxley Slocumb was in 7th grade when she went to an orthopedic physician for an exam on her knee that had been causing pain. Her doctor, Dr. Walter, ordered an X-ray which showed the growth of a tumor. Images were then sent to Dr. Gibbs at UF Health Shands Children’s Hospital who ordered a biopsy, which came back positive for osteosarcoma, a rare form of bone cancer. Dr. Gibbs confirmed the tumor was malignant. She had to go through 10 preliminary weeks of chemotherapy. Afterwards, she had a major surgery on October 20th, which consisted of a 19 centimeter femur replacement and a total knee replacement followed by 20 more weeks of chemotherapy. She underwent many months of physical therapy that turned into a whole year worth of therapy to work on her leg to get her back to normal activities, some of which she is still working toward today. She had to watch what she ate, take handfuls of medicine multiple times a day, and drink plenty of liquids, which was difficult when she was feeling nauseous and sick all the time. She had to be on a neutropenic diet, and ended up losing a lot of weight and almost had to get a feeding tube. She is now 18 years old, and it’s been 6 years since she was declared in remission on March 29th, 2017. She is now a Kappa Delta at Georgia Southwestern State University studying Nursing.',
                                       'image' => 'Loxley',
                                  ),
                                  array(
                                      'name' => 'Max W.',
                                      'description' => 'Max was born with hypoplastic left heart syndrome–a congenital heart defect. In 2002, he came to UF Health Shands Children’s Hospital and underwent a procedure that included pulmonary artery banding–a palliative surgical technique used for the correction of congenital cardiac defects, characterized by pulmonary overcirculation caused by left-to-right shunting of blood–as well as a patent dcutus arteriosus (PDA) stent procedure–a minimally invasive treatment for babies born with a severe heart condition.In 2003, he had Norwood stage I and stage II (bi-drectional Glenn Operation) procedures done; two years lante, he underwent the final stage of the Norwood procedure–Fontan Operation. This three-stage heart surgery created a new functional systemic circuit for Max. In 2010, Max had a left pulmonary artery (LPA) stent placed in.',
                                      'image' => 'Max1',
                                  ),
                                  array(
                                      'name' => 'Mazzy J.',
                                      'description' => 'Mazzy Jester was diagnosed with cancer when she was 11 years old. When a trip to the emergency room showed numerous tumors in her abdomen, Mazzy and her family were introduced to a pediatric oncologist who told them Mazzy needed a biopsy. Mazzy was diagnosed with Hodgkin’s lymphoma. Her prognosis was good, but she would need to start chemotherapy right away. Mazzy was just starting middle school and was allowed to go to school for a few days before she was readmitted to the hospital for a number of tests and surgeries. The chemotherapy was administered through a port in her heart. She missed most of 6th grade as she was in and out of the hospital going through chemotherapy and working through the aftermath. She responded well to the treatment but never liked the long stays in the hospital. Thankfully, the programs and volunteers always helped make the time go by. Today, Mazzy is a healthy 19 year old whose huge heart and beautiful smile reminds us what a miracle is every day!',
                                      'image' => 'Mazzy',
                                  ),
                                  array(
                                      'name' => 'Nakia F.',
                                      'description' => 'Nakia Farlin’s family was told she wouldn’t live past the age of 4. However, God had other plans. These last several years have been rough for Nakia and her family, but they always pray and press forward. In June of 2014, Nakia had her right leg amputated, which was a very hard decision for her family to make. Since then, she has been doing great, and she did not experience any pain nor require any pain medications once she left the hospital. This past year Nakia has been experiencing some breathing issues and is now on a Continuous Positive Airway Pressure (CPAP) machine to help her breathe due to her tendency to take long pauses and stop breathing. The only option left if this doesn’t work is a tracheotomy, where a breathing tube is inserted into the front of the neck. Nakia’s latest issue has been seizures, which she started happening about two years ago. Her family constantly watches her to check on her health. The situation is scary, but the Farlin family knows God gave Nakia to them for a reason, and He will take care of her. Nakia is now 24 years old!',
                                      'image' => 'Nakia Farlin 2022',
                                  ),
                                  array(
                                      'name' => 'Nathan F.',
                                      'description' => 'Nate Ferrell was born with a genetic condition called mitochondrial disease, a multi-systemic disease resulting in organ dysfunction. Nate has been a patient of UF Health Shands Children’s Hospital since his birth. His nine pediatric specialists at UF Health Shands Children’s Hospital ensure that Nate can live a fairly normal life, despite relying heavily on medical equipment and medications to keep his body functioning properly. Because of his amazing medical team and donations to Children’s Miracle Network, Nate is an energetic and joyful middle schooler who loves playing video games, watching YouTube videos, and playing the violin.',
                                      'image' => 'Nate',
                                  ),
                                  array(
                                       'name' => 'Nicole M.',
                                       'description' => 'Nicole Myer is a brain cancer survivor! The cancer was discovered at the start of her sixth grade year. She went to the school clinic almost every day concerned about horribly annoying headaches. The morning of September 29th, 2015 she endured the worst possible headache that she’d ever known. She lost all balance and had to be carried to the school clinic. Tears ran down her face as I realized that this was NOT just a headache. Her mom came a few minutes later and immediately unenrolled her from band class, thinking the baritone was taking all the air out of her body and causing the headaches. They then went to the local doctor’s office where they sent them to the hospital to have a CAT scan of her brain. Moments later they returned with the results, telling them that there was a tumor on the scan that required immediate attention. They set them up with an ambulance that took them to UF Health Shands Children’s Hospital in Gainesville, Florida. They removed the tumor the next morning. After surgery, the room was full of people saddened to give Nicole the official news of her diagnosis. Since the discovery of her illness, she has undergone a total of 9-10 surgeries, 9 blood transfusions, and 1 platelet transfusion. She has learned how to walk and to use her hands all over again. Nicole says, “My oncologist, Doctor G., has been very helpful in the process of my health, being available 24/7 and helping in all ways he has possible. Dance Marathon has been the greatest support of not only me, but all kids like me. All the joy and support of this organization has given me a deeper love for this world, showing me that there is hope for everyone. I am proud to be a part of a great movement, and I can’t wait for what successes come in the future!”',
                                       'image' => 'image 2',
                                       ),
                                       
                                  array(
                                      'name' => 'Owen M.',
                                      'description' => 'Owen Maier was born at Munroe Regional Medical Center in Ocala, Florida, on June 10th, 2013 with a congenital heart defect called transposition of the great arteries. In transposition of the great arteries, the aorta and pulmonary arteries are formed on the incorrect atriums, which does not allow for blood to get oxygenated and returned to the body. Owen was born blue. He was immediately placed on a ventilator and many life saving IVs, pumps, and equipment. He was transported within minutes by ShandsCair to UF Health Shands Hospital. He had his first surgery at just 6 hours old, which was a septostomy performed by Dr. Fudge to help sustain Owen until he was stable enough for open-heart surgery. When Owen was just 2 weeks old, Dr. Bleiweis performed his open-heart surgery, an operation called the arterial switch, to switch the aorta and pulmonary arteries. He came home for the first time when he was 2 months old. Today, Owen is an energetic 10 year old that loves playing with his big brother, Noah and his little sister, Lainey!',
                                      'image' => 'Owen',
                                  ),


                                  array(
                                      'name' => 'Sage P.',
                                      'description' => 'Sage Pridemore was born with a congenital heart defect called hypoplastic left heart syndrome, which means he was born with half of a heart. The left side of his heart did not form properly. Since birth, Sage has had three open-heart surgeries. These surgeries were to re-route his heart to make the right side do what the left side is supposed to do. This was done to help his heart last as long as possible because one day Sage will need a new heart. Sage is now 16 years old, and Dance Marathon at UF 2024 will be Sage’s 14th year as a CMN Ambassador!',
                                      'image' => 'Sage',
                                  ),

                                  array(
                                      'name' => 'Wyatt T.',
                                      'description' => 'Wyatt Thomas was born with five heart defects. He had a stroke at 3 months old and a heart transplant at 9.5 months old. Wyatt is now a very happy 13 year old who took his second chance at life and ran with it! He enjoys hunting, fishing, swimming or any activity that involves the outdoors. His favorite colors are camo and pink, and his favorite TV shows are Heartland and Duck Dynasty.',
                                      'image' => 'Wyatt2',
                                  )
        );
        for ($i = 0; $i < count($kids); $i++) {
            if ($i % 4 == 0) {
                echo '<div class="row">';
            } ?>
            <!-- Button trigger modal -->
            <div class="col-xs-3">
                <a href="#" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
                    <img class="img-circle img-thumbnail" src="<?php echo ('/assets/images/kids/Miracle Children/' . $kids[$i]['image']); ?>.jpg" alt="..."><br>
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
                <img src="<?php echo ('/assets/images/kids/fullsize/' . $kids[$i]['image']); ?>.png" class="img-responsive img-full" />
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
                if (($i - 3) % 4 == 0) {
                    echo '</div>';
                }
            } ?>-->
        <?php } else {
        echo 'This page is currently closed.';
    } ?>
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
                <p></p>
            </div>
        </div>
    </div>
</div>

<script>
    window.addEventListener('load', function() {
        document.getElementById('defaultTab').click();
    });

    window.addEventListener('load', function() {
        document.getElementById('defaultSubTab').click();
    });
</script>


<?php include("includes/foot.php"); ?>
