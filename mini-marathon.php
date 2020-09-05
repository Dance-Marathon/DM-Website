<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Mini-Marathon | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");

	$events = array(
				array(
				 'name' => '<b>American Heritage High School</b><br/><font style="color: #003">Event Date: <b>Feb. 2</b></font><br/>Delray Beach, FL',
				 'image' => 'ahhs.png',
				 'url' => 'http://www.ahschool.com/',
					 ),
		   array(
					'name' => '<b>Belleview High School</b><br/><font style="color: #003">Event Date: <b>Feb. 16</b></font><br/>Belleview, FL',
					'image' => 'hsdm13.png',
					'url' => 'http://www.marionschools.net/bhs',
			      	),
				array(
					'name' => '<b>Boca Raton Community High School</b><br/><font style="color: #003">Event Date: <b>Mar. 2</b></font><br/>Boca Raton, FL',
					'image' => 'hsdm6.jpg',
					'url' => 'http://www.edline.net/pages/Boca_Raton_High_School',
							),
				// array(
				// 	'name' => '<b>Cardinal Newman High School</b><br/><font style="color: #003">Event Date: <b> TBD </b></font><br/>West Palm Beach, FL',
				// 	'image' => 'cnhs.png',
				// 	'url' => 'http://www.cardinalnewman.com/',
				// 			),
				array(
		      'name' => '<b>Deerfield Beach High School</b><br/><font style="color: #003">Event Date: </br><b>Feb. 23-24</b></font><br/>Deerfield Beach, FL',
	        'image' => 'dbhs.png',
			  	'url' => 'http://www.deerfieldbeachhigh.net/',
			        ),
				array(
		      'name' => '<b>Eastside High School</b><br/><font style="color: #003">Event Date: <b> TBD </b></font><br/>Gainesville, FL',
	        'image' => 'hsdm3.jpg',
			  	'url' => 'http://eastside.sbac.edu/pages/EHS0421',
			        ),
				array(
					'name' => '<b>East Ridge High School</b><br/><font style="color: #003">Event Date: <b> TBD </b></font><br/>Clermont, FL',
					'image' => 'erhs.png',
					'url' => 'https://www.lake.k12.fl.us/Domain/2848',
							),
				array(
				 'name' => '<b>F.W. Buchholz High School</b><br/><font style="color: #003">Event Date: <b>Feb. 9</b></font><br/>Gainesville, FL',
				 'image' => 'bhs.png',
				 'url' => 'http://buchholz.sbac.edu/pages/BHS0431',
						),
			  array(
			    'name' => '<b>Gainesville High School</b><br/><font style="color: #003">Event Date:  <b>Mar. 16</b></font><br/>Gainesville, FL',
					'image' => 'hsdm9.jpg',
					'url' => 'http://gainesville.sbac.edu/pages/GHS0151',
							),
				array(
					'name' => '<b>Jupiter Community High School </b><br/><font style="color: #003">Event Date: <b>Feb. 24,</br>5-10pm </b></font><br/>Jupiter, FL',
					'image' => 'hsdm17.png',
					'url' => 'http://www.edline.net/pages/Jupiter_High_School',
							),
        array(
	        'name' => '<b>Kanapaha Middle School</b><br/><font style="color: #003">Event Date: <b> TBD </b></font><br/>Gainesville, FL',
	        'image' => 'hsdm14.jpeg',
	        'url' => 'http://kanapaha.sbac.edu/pages/KAN0502',
	            ),
        array(
	        'name' => '<b> Key West Hight School </b><br/><font style="color: #003">Event Date: <b>Mar. 10</b></font><br/>Key West, FL',
	        'image' => 'kwhs.png',
	        'url' => 'http://kwh.keysschools.com',
	            ),
       array(
         'name' => '<b>Oak Hall High School</b><br/><font style="color: #003">Event Date: <b> TBD </b></font><br/>Gainesville, FL',
         'image' => 'hsdm1.jpg',
				 'url' => 'http://www.oakhall.org/RelId/33637/ISvars/default/Home.htm',
            ),
        array(
         'name' => '<b>Palm Beach Cental High School</b><br/><font style="color: #003">Event Date: <b>Feb. 24</b></font><br/>Palm Beach, FL',
         'image' => 'hsdm4.jpg',
			   'url' => 'http://www.palmbeach.k12.fl.us/palmbeachcentralhs/',
            ),
				array(
				 'name' => '<b>Palm Beach Gardens Community High School</b><br/><font style="color: #003">Event Date: <b>Mar. 3</b></font><br/>Palm Beach Gardens, FL',
				 'image' => 'pbghs.png',
				 'url' => 'http://www.edline.net/pages/palm_beach_gardens_high_school',
						),
        array(
         'name' => '<b>PK Yonge High School</b><br/><font style="color: #003">Event Date: <b>Mar. 17</b></font><br/>Gainesville, FL',
         'image' => 'hsdm12.jpg',
         'url' => 'http://pkyonge.ufl.edu/',
            ),
        array(
         'name' => '<b>Saint Francis Catholic Academy</b><br/><font style="color: #003">Event Date: <b>Mar. 3</b></font><br/>Gainesville, FL',
         'image' => 'stfhs.png',
		     'url' => 'http://sfchs.org',
            ),
				array(
				 'name' => '<b>Seminole Ridge High School</b><br/><font style="color: #003">Event Date: <b>Feb. 23</b></font><br/>Loxahatchee, FL',
				 'image' => 'hsdm7.jpg',
				 'url' => 'http://www.edline.net/pages/Seminole_Ridge_Community_HS',
						),
        array(
         'name' => '<b>Suncoast High School</b><br/><font style="color: #003">Event Date: <b>Mar. 2</b></font><br/>Riviera Beach, FL',
         'image' => 'hsdm16.jpg',
		     'url' => 'http://www.edline.net/pages/Suncoast_High_School',
            ),
        array(
         'name' => '<b>Tavares High School</b><br/><font style="color: #003">Event Date: <b>Mar. 03</b></font><br/>Tavares, FL',
         'image' => 'hsdm15.jpg',
		     'url' => 'https://www.lake.k12.fl.us/Domain/3700',
			 ),

			 array(
				'name' => '<b>Trinity Catholic High School</b><br/><font style="color: #003">Event Date: <b>Jan. 31</b></font><br/>Ocala, FL',
				'image' => 'tchs.png',
			 	'url' => 'http://www.trinitycatholichs.org/',
		 		),
        array(
         'name' => '<b>Vero Beach High School</b><br/><font style="color: #003">Event Date: <b>Feb. 24</b></font><br/>Vero Beach, FL',
         'image' => 'hsdm2.jpg',
		   	 'url' => 'https://www.indianriverschools.org/vbhs',
            ),
        array(
          'name' => '<b>Wellington High School</b><br/><font style="color: #003">Event Date: <b>Mar. 9</b></font><br/>Wellington, FL',
          'image' => 'hsdm8.jpg',
			    'url' => 'http://www.edline.net/pages/wellington_high_school',
            ),
				array(
					'name' => '<b>Wellington Landings Middle School</b><br/><font style="color: #003">Event Date: <b>TBD</b></font><br/>Wellington, FL',
					'image' => 'wlms.png',
					'url' => 'http://www.edline.net/pages/wellington_landings_ms',
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
		  				<li><a href="/dance-marathon">Dance Marathon 2021</a></li>
						<li><a class="active">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a href="/Moral-Madness">Morale Madness</a></li>

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
            <p>24 high schools around the state of Florida participate each year in our Mini Marathon program. High school students at these schools show an enthusiastic passion for Dance Marathon even before their college years begin and play a vital role in our movement. This past year, our Mini Marathon programs raised a total of $626,314.23, proving that these students are truly one generation fighting for the next. All money raised by Mini Marathons goes toward DM at UF’s total amount raised, which directly benefits the children at UF Health Shands Children’s Hospital.</p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/-qCnFuEPZOo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p>We are always looking for more high schools to join our Dance Marathon family. If you would like to learn more about our Mini-Marathon Programs or would like to get involved, please contact our Marathon Relations Overall Directors, Mady Benton and Alexis Pollak, at <a href="mbenton@floridadm.org">mbenton@floridadm.org</a> and <a href="apollak@floridadm.org">apollak@floridadm.org</a>.</p>


            <div role="tabpanel" class="tab-pane fade" id="schools">
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

          <div role="tabpanel" class="tab-pane fade" id="whatsmyzone">
          <img src="/assets/images/hsdm/zoningpg1.png" width="697" height="889" title="zoningpg1" alt="zoningpg1" />

            </div>
        </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
