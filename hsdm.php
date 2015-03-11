<?php
	$status = "open";
	$GLOBALS['page_title'] = 'High School DM | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");

	$events = array(
        array(
            'name' => '<b>Oak Hall High School</b><br/>Total Raised: <b>$5,029.68</b>, Gainesville, FL',
            'image' => 'hsdm1.jpg',
			'url' => 'http://www.oakhall.org/RelId/33637/ISvars/default/Home.htm',
            ),
        array(
            'name' => '<b>Vero Beach High School</b><br/>Total Raised: <b>$3,784.45</b>, Vero Beach, FL',
            'image' => 'hsdm2.jpg',
			'url' => 'https://www.indianriverschools.org/vbhs',
            ),
        array(
            'name' => '<b>Eastside High School</b><br/>Total Raised: <b>$5,005.86</b>, Gainesville, FL',
            'image' => 'hsdm3.jpg',
			'url' => 'http://eastside.sbac.edu/pages/EHS0421',
            ),
        array(
            'name' => '<b>Palm Beach Central</b><br/>Total Raised: <b>$20,754.47</b>, Palm Beach, FL',
            'image' => 'hsdm4.jpg',
			'url' => 'http://www.palmbeach.k12.fl.us/palmbeachcentralhs/',
            ),
        array(
            'name' => '<b>Buchholz High School</b><br/>Total Raised: <b>$3,008.39</b>, Gainesville, FL',
            'image' => 'hsdm5.jpg',
			'url' => 'http://buchholz.sbac.edu/pages/BHS0431',
            ),
			array(
            'name' => '<b>Boca Raton High School</b><br/>Total Raised: <b>$7,612.10</b>, Boca Raton, FL',
            'image' => 'hsdm6.jpg',
			'url' => 'http://www.edline.net/pages/Boca_Raton_High_School',
            ),
        array(
            'name' => '<b>Seminole Ridge High School</b><br/Total Raised: <b>$18,654.34</b>, Loxahatchee, FL',
            'image' => 'hsdm7.jpg',
			'url' => 'http://www.edline.net/pages/Seminole_Ridge_Community_HS',
            ),
        array(
            'name' => '<b>Wellington High School</b><br/>Total Raised: <b>$14,648.25</b>, Wellington, FL',
            'image' => 'hsdm8.jpg',
			'url' => 'http://www.edline.net/pages/wellington_high_school',
            ),
        array(
            'name' => '<b>Gainesville High School</b><br/>March 13th, Gainesville, FL',
            'image' => 'hsdm9.jpg',
			'url' => 'http://gainesville.sbac.edu/pages/GHS0151',
            ),
        array(
            'name' => '<b>Deerfield Beach High School</b><br/>Date TBD, Deerfield Beach, FL',
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
    			<h1>High School DM</h1>
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
						<li><a class="active">High School DM</a></li>
            <li><a href="/ft5k">FT5K 2015</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <div class="container-fluid">
          <div class="row">
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
