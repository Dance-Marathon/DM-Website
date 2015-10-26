<?php
	$status = "open";
	$GLOBALS['page_title'] = 'High School DM | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");

	$events = array(
        array(
            'name' => '<b>Oak Hall High School</b><br/><font style="color: #003">Total Raised: <b>$5,029.68</b></font><br/>Gainesville, FL',
            'image' => 'hsdm1.jpg',
			'url' => 'http://www.oakhall.org/RelId/33637/ISvars/default/Home.htm',
            ),
        array(
            'name' => '<b>Vero Beach High School</b><br/><font style="color: #003">Total Raised: <b>$3,784.45</b></font><br/>Vero Beach, FL',
            'image' => 'hsdm2.jpg',
			'url' => 'https://www.indianriverschools.org/vbhs',
            ),
        array(
            'name' => '<b>Eastside High School</b><br/><font style="color: #003">Total Raised: <b>$5,005.86</b></font><br/>Gainesville, FL',
            'image' => 'hsdm3.jpg',
			'url' => 'http://eastside.sbac.edu/pages/EHS0421',
            ),
        array(
            'name' => '<b>Palm Beach Central</b><br/><font style="color: #003">Total Raised: <b>$20,754.47</b></font><br/>Palm Beach, FL',
            'image' => 'hsdm4.jpg',
			'url' => 'http://www.palmbeach.k12.fl.us/palmbeachcentralhs/',
            ),
        array(
            'name' => '<b>Buchholz High School</b><br/><font style="color: #003">Total Raised: <b>$3,008.39</b></font><br/>Gainesville, FL',
            'image' => 'hsdm5.jpg',
			'url' => 'http://buchholz.sbac.edu/pages/BHS0431',
            ),
			array(
            'name' => '<b>Boca Raton High School</b><br/><font style="color: #003">Total Raised: <b>$7,612.10</b></font><br/>Boca Raton, FL',
            'image' => 'hsdm6.jpg',
			'url' => 'http://www.edline.net/pages/Boca_Raton_High_School',
            ),
        array(
            'name' => '<b>Seminole Ridge High School</b><br/><font style="color: #003">Total Raised: <b>$18,654.34</b></font><br/>Loxahatchee, FL',
            'image' => 'hsdm7.jpg',
			'url' => 'http://www.edline.net/pages/Seminole_Ridge_Community_HS',
            ),
        array(
            'name' => '<b>Wellington High School</b><br/><font style="color: #003">Total Raised: <b>$14,648.25</b></font><br/>Wellington, FL',
            'image' => 'hsdm8.jpg',
			'url' => 'http://www.edline.net/pages/wellington_high_school',
            ),
        array(
            'name' => '<b>Gainesville High School</b><br/><font style="color: #003">Total Raised: <b>$9,252.87</b></font><br/>Gainesville, FL',
            'image' => 'hsdm9.jpg',
			'url' => 'http://gainesville.sbac.edu/pages/GHS0151',
            ),
        array(
            'name' => '<b>Deerfield Beach High School</b><br/>Date TBD<br/>Deerfield Beach, FL',
            'image' => 'hsdm10.jpg',
			'url' => 'http://www.deerfieldbeachhigh.net/',
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
						<li><a href="/community-events">Community Events</a></li>
						<li><a class="active">Mini-Marathon</a></li>
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
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="mini-marathon">
            <p>Dance Marathon at the University of Florida is the largest and most successful student-run philanthropy in the Southeast United States. This past year DM at UF celebrated its 21st year and raised a historic $2,015,307.17! All money raised goes directly to benefitting the children at UF Heath Shands Children’s Hospital. Our event brings together the University of Florida community to stand for 26.2 hours with the hope of providing a better future for so many deserving children and their families. We would love for you to become a member our DM family! So, join us next year as we continue to make bigger and better miracles For The Kids!</p>
            <object width="720" height="480" data="http://www.youtube.com/v/yeRQhLtFIuU" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/yeRQhLtFIuU" /></object>
            </br>
            <p>If you would like to learn more about our Mini-Marathon program or would like to get involved, please contact our Marathon Relations Overall, Drew Carlton, at <a href="mailto:dcarlton@floridadm.org">dcarlton@floridadm.org</a>.</p>
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
        </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
