<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Mini-Marathon | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");

	$events = array(
		   array(
					'name' => '<b>Belleview High School</b><br/><font style="color: #003">Event Date: <b>February 12th</b></font><br/>Belleview, FL',
					'image' => 'hsdm13.png',
					'url' => 'http://www.marionschools.net/bhs',
			      	),
				array(
					'name' => '<b>Boca Raton High School</b><br/><font style="color: #003">Event Date: <b>March 4th</b></font><br/>Boca Raton, FL',
					'image' => 'hsdm6.jpg',
					'url' => 'http://www.edline.net/pages/Boca_Raton_High_School',
							),
		  	array(
      		'name' => '<b>Buchholz High School</b><br/><font style="color: #003">Event Date: <b>February 19th</b></font><br/>Gainesville, FL',
	        'image' => 'hsdm5.jpg',
	  	  	'url' => 'http://buchholz.sbac.edu/pages/BHS0431',
			        ),
  			array(
		      'name' => '<b>Deerfield Beach High School</b><br/>Date TBD<br/>Deerfield Beach, FL',
          'image' => 'hsdm10.jpg',
					'url' => 'http://www.deerfieldbeachhigh.net/',
					    ),
				array(
		      'name' => '<b>Eastside High School</b><br/><font style="color: #003">Event Date: <b>February 5th</b></font><br/>Gainesville, FL',
	        'image' => 'hsdm3.jpg',
			  	'url' => 'http://eastside.sbac.edu/pages/EHS0421',
			        ),
			  array(
			    'name' => '<b>Gainesville High School</b><br/><font style="color: #003">Event Date:  <b>February 26th</b></font><br/>Gainesville, FL',
					'image' => 'hsdm9.jpg',
					'url' => 'http://gainesville.sbac.edu/pages/GHS0151',
							),
        array(
					'name' => '<b>Jensen Beach High School</b><br/>Date TBD<br/>Jensen Beach, FL',
					'image' => 'hsdm11.jpg',
					'url' => 'http://jbhs.martinschools.org/pages/Jensen_Beach_High_School',
							),
				array(
					'name' => '<b>Jupiter Community High School </b><br/>Date TBD<br/>Jupiter, FL',
					'image' => 'hsdm17.png',
					'url' => 'http://www.edline.net/pages/Jupiter_High_School',
							),
        array(
	        'name' => '<b>Kanapaha Middle School</b><br/><font style="color: #003">Event Date: <b>May 6th</b></font><br/>Gainesville, FL',
	        'image' => 'hsdm14.jpeg',
	        'url' => 'http://kanapaha.sbac.edu/pages/KAN0502',
	            ),
				array(
					'name' => '<b>Newberry High School </b><br/>Date TBD<br/>Gainesville, FL',
					'image' => 'hsdm18.jpg',
					'url' => 'http://newberryhigh.sbac.edu/pages/NHS0261l',
							),
       array(
         'name' => '<b>Oak Hall High School</b><br/><font style="color: #003">Event Date: <b>January 29th</b></font><br/>Gainesville, FL',
         'image' => 'hsdm1.jpg',
				 'url' => 'http://www.oakhall.org/RelId/33637/ISvars/default/Home.htm',
            ),
        array(
         'name' => '<b>Palm Beach Central</b><br/><font style="color: #003">Event Date: <b>January 30th</b></font><br/>Palm Beach, FL',
         'image' => 'hsdm4.jpg',
			   'url' => 'http://www.palmbeach.k12.fl.us/palmbeachcentralhs/',
            ),
        array(
         'name' => '<b>PK Yonge</b><br/><font style="color: #003">Event Date: <b>January 30th</b></font><br/>Gainesville, FL',
         'image' => 'hsdm12.jpg',
         'url' => 'http://pkyonge.ufl.edu/',
            ),
        array(
         'name' => '<b>Seminole Ridge High School</b><br/><font style="color: #003">Event Date: <b>February 19th</b></font><br/>Loxahatchee, FL',
         'image' => 'hsdm7.jpg',
		     'url' => 'http://www.edline.net/pages/Seminole_Ridge_Community_HS',
            ),
        array(
         'name' => '<b>Suncoast High School</b><br/><font style="color: #003">Event Date: <b>TBD</b></font><br/>Riviera Beach, FL',
         'image' => 'hsdm16.jpg',
		     'url' => 'http://www.edline.net/pages/Suncoast_High_School',
            ),
        array(
         'name' => '<b>Taveres High School</b><br/><font style="color: #003">Event Date: <b>TBD</b></font><br/>Tavares, FL',
         'image' => 'hsdm15.jpg',
		     'url' => 'http://www.edline.net/pages/Suncoast_High_School',
			 ),
        array(
         'name' => '<b>Vero Beach High School</b><br/><font style="color: #003">Event Date: <b>February 26th</b></font><br/>Vero Beach, FL',
         'image' => 'hsdm2.jpg',
		   	 'url' => 'https://www.indianriverschools.org/vbhs',
            ),
        array(
          'name' => '<b>Wellington High School</b><br/><font style="color: #003">Event Date: <b>March 11th</b></font><br/>Wellington, FL',
          'image' => 'hsdm8.jpg',
			    'url' => 'http://www.edline.net/pages/wellington_high_school',
            ),
        );
?>

<div class="page-heading parallax hsdm-events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Mini-Marathon</h1>
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
<<<<<<< HEAD
            <li><a href="/community-events">Campus Events</a></li>
            <li><a class="active">Mini-Marathon</a></li>
            <li><a href="/ft5k">FT5K</a></li>
            <li><a href ="/fundraising-days">Fundraising Days</a></li><!--NOT YET MADE -->
            <li><a href="/gala">Gala</a></li><!--NOT YET MADE -->
           <!-- <li><a href="/event">Event</a></li><!--NOT YET MADE -->
=======
						<li><a href="/community-events">Community Events</a></li>
						<li><a class="active">Mini-Marathon</a></li>
						<li><a href="/ftk-festival">FTK Festival</a></li>
>>>>>>> master

<!--                        <li><a href="/eventsurvey">DM 2015 Event Survey</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <div role="tabpanel">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#mini-marathon" aria-controls="mini-marathon" role="tab" data-toggle="tab">Mini-Marathon</a></li>
            <li role="presentation"><a href="#schools" aria-controls="schools" role="tab" data-toggle="tab">Schools</a></li>
            <li role="presentation"><a href="#whatsmyzone" aria-controls="whatsmyzone" role="tab" data-toggle="tab">What's My Zone?</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="mini-marathon">
            <p>Dance Marathon at the University of Florida is the largest and most successful student-run philanthropy in the Southeast United States. This past year DM at UF celebrated its 22nd year and raised a historic $2,434,315.18! All money raised goes directly to benefitting the children at UF Heath Shands Children’s Hospital. Our event brings together the University of Florida community to stand for 26.2 hours with the hope of providing a better future for so many deserving children and their families. We would love for you to become a member our DM family! So, join us next year as we continue to make bigger and better miracles For The Kids!</p>
            <p><iframe width="720" height="405" src="https://www.youtube.com/embed/yeRQhLtFIuU" frameborder="0" allowfullscreen></iframe></p>
            <p>If you would like to learn more about our Mini-Marathon program or would like to get involved, please contact our Marathon Relations Overall, Rachel Auld, at <a href="mailto:rauld@floridadm.org">rauld@floridadm.org</a>.</p>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="schools">
            <?php

            for($i = 0; $i < count($events); $i++) { ?>
                <!-- Button trigger modal -->
                <?php if ($i % 3 == 0) { ?>
                <div class="clearfix visible-xs-block visible-sm-block"></div>
                <?php } ?>
                <?php if ($i % 4 == 0) { ?>
                <div class="clearfix visible-md-block visible-lg-block"></div>
                <?php } ?>
                <div class="col-xs-4 col-md-3">
                    <a href="<?php echo $events[$i]['url']; ?>" class="text-center" target="_blank" style="text-decoration: none">
                        <img class="img-square img-thumbnail" src="<?php echo ('/assets/images/hsdm/'.$events[$i]['image']); ?>" alt="..."><br>
                        <p><?php echo $events[$i]['name']; ?></p>
                    </a>
                </div>
            <?php } ?>
          </div>

          <div role="tabpanel" class="tab-pane fade" id="whatsmyzone">
          <img src="/assets/images/hsdm/zoningpg1.png" width="697" height="889" title="zoningpg1" alt="zoningpg1" />
          <img src="/assets/images/hsdm/zoningpg2.png" width="697" height="889" title="zoningpg2" alt="zoningpg2" />

            </div>
        </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
