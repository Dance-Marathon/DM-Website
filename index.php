<?php
  $GLOBALS['page_title'] = 'Dance Marathon at UF';
  include("includes/head.php");
?>
<!-- intro -->
<div class="top">
  <div class="intro">
    <div id="top-carousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
 <!--      <ol class="carousel-indicators">
        <li data-target="#top-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#top-carousel" data-slide-to="1"></li>
        <li data-target="#top-carousel" data-slide-to="2"></li>
      </ol> -->
      <div class="carousel-inner">
        <div class="item active">
          <!--<img class="img-responsive"  src="assets/images/sectionbg/2021/total22.jpeg">-->

         <!--<img class="img-responsive"  src="assets/images/sectionbg/2021/total22.jpeg">-->
<video width = "100%" loop autoplay muted>
    <source type="video/mp4" src="/assets/images/Summer Campaign FINAL.mov"></source>
</video>
          <div class="carousel-caption text-center">
            <div class="row animate_fade_in">
              <!-- <div class="col-md-6">
                <div class="logo">
                  <img src="assets/images/logo_ftk_homepage.png">
                </div>
              </div> -->
              <!-- <div class="col-md-6">
                <h2 style="color: #fff; font-size: 2.5em;" class="student-title"><span id="student-counter">0</span> Students Making Miracles</h2>
                <a href="https://donate.giving.ufhealth.org/campaign/dance-marathon-at-the-university-of-florida-2020/c223292" target="_blank" class="top_btn">Donate Now</a>
              </div> -->
            </div>
          </div>
        </div>

        <!-- End Item -->

      </div>
      <!-- End Carousel Inner -->

      <!-- Controls -->

      <!-- <a class="left carousel-control" href="#top-carousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#top-carousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> -->
    </div>
  </div>
</div>
<?php include("includes/navbar.php"); ?>
<div class="container">

<?php if ($dance_marathon_event_started == true) { ?>

    <?php } ?>

  <!--  -->
  <!--  -->
  <!--  -->
  <!--  -->
<div class="row">
  <div class="col-md-12">
  </div>
</div>
<!-- <div class="row">
  <div style="margin: 45px 0;">
      <div class="col-md-3">
        <div class="text-center">
          <h2 style="margin: 45px 0; font-weight: 400; text-transform: uppercase;"> <span style="font-size:0.75em;">Transform Today</br></span> <span style="color: #f79b63; font-weight: 700;">ORGANIZATION</br></span><span style="font-size:0.75em;">Leaderboard</span> </h2>
          <div class="org-leaderboard"></div>
        </div>
    </div>
  </div>
  <div style="margin: 45px 0;">
      <div class="col-md-3">
        <div class="text-center">
          <h2 style="margin: 45px 0; font-weight: 400; text-transform: uppercase;"> <span style="font-size:0.75em;">Transform Today</br></span> <span style="color: #014083; font-weight: 700;">DANCER</br></span><span style="font-size:0.75em;">Leaderboard</span> </h2>
          <div class="dancer-leaderboard"></div>
        </div>
      </div>
  </div>
  <div style="margin: 45px 0;">
      <div class="col-md-3">
        <div class="text-center">
          <h2 style="margin: 45px 0; font-weight: 400; text-transform: uppercase;"> <span style="font-size:0.75em;">Transform Today</br></span> <span style="color: #f79b63; font-weight: 700;">CAPTAIN</br></span><span style="font-size:0.75em;">Leaderboard</span> </h2>
          <div class="captain-leaderboard"></div>
        </div>
      </div>
  </div>
  <div style="margin: 45px 0;">
      <div class="col-md-3">
        <div class="text-center">
          <h2 style="margin: 45px 0; font-weight: 400; text-transform: uppercase;"> <span style="font-size:0.75em;">Transform Today</br></span> <span style="color: #014083; font-weight: 700;">ELP</br></span><span style="font-size:0.75em;">Leaderboard</span> </h2>
          <div class="elp-leaderboard"></div>
        </div>
      </div>
  </div>
</div> -->



  <script>

   // ID of the Google Spreadsheet
   var spreadsheetID = "1hIBtefZpWls8oPe3_075MdWQiHQ0h_iwwFCYzvGdJPk";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      // Column names are name, age, etc.
      $('.org-leaderboard').append('<p>'+this.gsx$organizations.$t+'</p>');
    });

   });
  </script>

  <script>

   // ID of the Google Spreadsheet
   var spreadsheetID = "18JyFa8HzqBsvayfb1Zbew83UweIM99W3GHkQIVZDOe8";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      // Column names are name, age, etc.
      $('.dancer-leaderboard').append('<p>'+this.gsx$dancers.$t+'</p>');
    });

   });
  </script>

  <script>

   // ID of the Google Spreadsheet
   var spreadsheetID = "18Hc_wcOILennqexd-qSaijNmHe0clLCHrnV9gpqUI6c";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      // Column names are name, age, etc.
      $('.captain-leaderboard').append('<p>'+this.gsx$captains.$t+'</p>');
    });

   });
  </script>

  <script>

   // ID of the Google Spreadsheet
   var spreadsheetID = "1OkDZTJr6FdaQeahYSOa3oucenrH0Swt3kPvuGO8SQQc";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      // Column names are name, age, etc.
      $('.elp-leaderboard').append('<p>'+this.gsx$elp.$t+'</p>');
    });

   });
  </script>



    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
    <!--  -->
  <div class="row">
    <div class="col-md-12 welcome_txt text-center">
<!--       <p><a class="btn btn-default huge-button" href="dm2015">Follow the event live here!</a></p> -->


      <!--<p style="margin:0"><a href="/dance-marathon" style="color:#617ba6"><b>Check out our 2018 Livestream</b></a></p>-->


<div id="event_banner">
        <div class="row mt mb">
    </div>

    </div>

    <p style="padding-top:0;"><i style="color:#f79b63;"><b>Dance Marathon</b></i> at the <i style="color:#f79b63;"><b>University of Florida</b></i>  is the largest student-run and highest fundraising philanthropy in the Southeast United States. Our mission is to strive to bring together the campus and community to raise funds and awareness for our local Children's Miracle Network Hospital, <i style="color:#617ba6;"><b>UF Health Shands Children's Hospital</b></i>. We are going into our 29th year of Dance Marathon at UF, having fundraised over $30,000,000 thus far. This past year, we celebrated our 28th year by raising a historic <i style="color:#617ba6;"><b>$2,334,217.21</b></i>!<br/>
</b></a>
</i></p>

    </div>
  </div>
</div>
<div class="section">
    <div class="education">
        <div class="container", style="margin: auto;">
          <div class="container text-center">
            <div class="row">
              <div class="col-md-3", style="width: 33%;">
<img class="fa icon" src="../assets\images\Logos\book 1.jpg" style="position:relative; left:45%"/>
                <h3>Our Story</h3>
                <p>DM at UF is one of the five founding Dance Marathon programs in the nation. Since our start, we have raised more than $28 million for the Miracle Families UF Health Shands Children’s Hospital, our local Children’s Miracle Network hospital.</p>
                <!--<p><a class="btn btn-default" href="our-story" role="button">Learn More</a></p>-->
              </div>
     
                    <div class="col-md-3", style="width: 33%;">
                <i class="fa icon-balloon"></i>
                <h3>CMN Hospitals<br>& UF Health</h3>
                <p>Ranked one of the top 50 pediatric hospitals in the nation in seven categories, UF Health Shands Children’s Hospital and Children’s Miracle Network have created one of the greatest facilities of care for children and young adults.</p>
              <!--Update this information, we are highter than when we made this website -->
                <!--<p><a class="btn btn-default" href="uf-health" role="button">Learn More</a></p>-->
              </div>

              <div class="col-md-3", style="width: 33%;">
                   <i class="fa fa-heart"></i>
                <h3>Miracle Families</h3>
                <p>Take a moment to meet the heart and soul of our movement. Our Miracle Families are the inspiration for every student who is part of DM at UF.</p>
                <!--<p><a class="btn btn-default" href="family" role="button">Learn More</a></p>-->
              </div>
            </div>
            </div>
      </div>
    </div>
</div>
<!--<div class="counter">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center heading newsletter">Dancing Starts In...</div>
      <div class="col-md-12" id="countdown-wrapper"><div id="countdown"></div></div>
    </div>
  </div>
</div>-->
<!-- <div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="assets/images/floridamap.png" class="florida-map">
      </div>
      <div class="col-md-6">
        <br><br><br>
        <h3>Many Places, One Common Cause</h3>
<<<<<<< HEAD
        <p>Dance Marathon at the University of Florida is one piece of a larger international movement of students fighting for a future without childhood illness. Hundreds of Dance Marathon programs throughout North America raise funds and awareness for Children’s Miracle Network Hospitals. UF Health Shands Children’s Hospital receives support from three Dance Marathon programs in the region, allowing it to make more miracles each and every day.</p>
        
                
=======
<p>Dance Marathon at the University of Florida is one piece of a larger international movement of students fighting for a future without childhood illness. Hundreds of Dance Marathon programs throughout North America raise funds and awareness for Children’s Miracle Network Hospitals. UF Health Shands Children’s Hospital receives support from three Dance Marathon programs in the region, allowing it to make more miracles each and every day.</p> -->

        <!--
>>>>>>> 990c6a1c54931f0aa01aca6d48fa1454a987a411
        <div class="container-fluid" style="padding-top:3em;">
          <div class="row">
            <div class="col-xs-4">
              <img class="img-responsive" src="/assets/images/01.png" />
            </div>
            <div class="col-xs-4">
              <img class="img-responsive" src="/assets/images/02.png" />
            </div>
            <div class="col-xs-4">
              <img class="img-responsive" src="/assets/images/03.png" />
            </div>
            <div class="col-xs-4">
             <img class="img-responsive" src="/assets/images/campaignaward_2014.jpg" />
            </div>
             <div class="col-xs-4">
             <img class="img-responsive" src="/assets/images/moraleaward_2014.jpg" />
            </div>
           <div class="col-xs-4">
           <img class="img-responsive" src="/assets/images/BestMerch_2016.png" />
          </div>
          </div>
        </div>
        -->
     </div>
    </div>
  </div>
</div>
<!--
<div class="education">
  <div class="container text-center">
    <div class="row">
      <div class="container-fluid" style="padding-top:3em;">
          <div class="row">
            <table style="width:100%">
              <tr>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-15.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-14.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards_Artboard 1.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-02.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/best merchandise.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-03.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-04.png" /></th>
              </tr>
            </table>
            <table style="width:100%">
              <tr>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-05.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-06.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-07.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-08.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-09.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-10.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-11.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-13.png" /></th>
                <th><img class="img-responsive" src="/assets/images/awards/DM Awards-12.png" /></th>
 
              </tr>
            </table>
            <br> -->
          </div>
<div class="section">
    <div class="container">
        <div >
           <h2>Our 2022 Sponsors</h2>
          <div class="sponsor-section">
        </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel" style = "width: 700px, margin: auto">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
            <div class="active item">
                 <img src="assets/images/sponsors/sponsorImages/sponsor2.png" alt="Sponsor Logo" style = "margin: auto; max-height: 400px; display: block;">
            </div>
            <?php
                $sponsor_imgs = range(3, 119); // the number of sponsor images we have in sponsorImages folder starting from 2 to 119. (2 is first active image)
                $i = 3;
                foreach($sponsor_imgs as $index)
                {
                ?>
            <div class="item">
            <img src="assets/images/sponsors/sponsorImages/sponsor<?=$i?>.png" alt="Sponsor Logos" style = "margin: auto; max-height: 400px; display: block;">
            </div>
            <?php
            $i++;
            }
            ?>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="background: none; color: #f79b63;">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
         </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next" style="background: none; color: #014083">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
        </div>
    </div>
</div>
          <p></p>
      </div>
    </div>
  </div>
</div>

<?php include("includes/foot.php"); ?>

