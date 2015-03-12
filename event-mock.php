<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Event Mock | Florida Dance Marathon';
	$GLOBALS['parent'] = '';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax event-page">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Dance Marathon Live</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
      <?php if ($status == "open") { ?>
  			<h3>Live Stream</h3>
        <h3>Floor Map</h3>
        <div id="floor-map"></div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<link rel="stylesheet" href="css/jquery-jvectormap-2.0.2.css">
<style>
.jvectormap-label {
  position: absolute;
  display: none;
  background: #333333;
  color: white;
  padding: 5px 10px;
  font-size: 11px;
  font-weight: bold;
  text-shadow: none;
  z-index: 10000;
  zoom: 1;
}
.jvectormap-zoomin, .jvectormap-zoomout {
	display: block;
  position: absolute;
  background: transparent;
  padding: 0px;
  color: #000;
  width: 24px;
  height: 24px;
  cursor: pointer;
  line-height: 24px;
  text-align: center;
  text-shadow: none;
  font-size: 32px;
}
.jvectormap-zoomin {
  left: 0;
  top: 0;
}
.jvectormap-zoomout {
  left: 0;
  top: 32px;
}
.jvectormap-tip {
  font-family: Open Sans, Arial, sans-serif;
  font-size: 14px;
  font-weight: normal;
  border-radius: 0;
  border: 0;
  padding: 10px;
  box-sizing: border-box;
  width: 300px;
  margin-left: -10px;
  margin-top: -10px;
}
</style>
<script src="js/jquery-jvectormap-2.0.2.min.js"></script>
<script src="js/jquery-jvectormap-o-connell-center.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	// Map setup
	var areaData = {
  	"Study Room":"Stay on top of your school work in the Study Room, sponsored by Study Edge. (does this room cost money to use?",
  	"Computers/Magazines":"Get caught up on the latest news with the computers and magazines.",
  	"Jail Break":"Volunteers have been put in DM Jail! They set a bail and can't get out until they have raised their bail.",
  	"Visitors":"An for visitors to see Dancers and volunteers.",
  	"Silent Auction":"Check out the items in the silent auction, all proceeds For The Kids.",
  	"Tech Booth":"Find the Technology Team here operating all of the music, videos, DM Live Feed and more!",
  	"Basketball Hoop":"Take a break from dancing and shoot some hoops at Gate 2.",
  	"Side Stage":"",
  	"Photo Booth":"Document your memories at Dance Marathon at the Photo Booth with the Art and Layout team.",
  	"Main Stage":"Learn the Linedance, hear Miracle Stories and see many other incredible performances on the Main Stage.",
  	"Meals":"Dancers, stay nourished with all of the delicious meals provided by our partners.",
  	"Medical Room":"If you need medical attention at any point throughout Dance Marathon, visit the Med. Room for assistance.",
  	"Men's Locker Room":"Male Dancers will keep their belongings here.",
  	"Women's Locker Room":"Female Dancers will keep their belongings here.",
  	"Visitor Entrance":"All visitors must enter at Gate 1. In this area, you will also find the Marketing Table, Recruitment Team giving tours and the Community Events team."}
	
	// Initialize jVectorMap
	$('#floor-map').vectorMap({
		map: 'o_connell_center',
		values: areaData,
		backgroundColor: 'transparent',
		zoomOnScroll: false,
		zoomMax: 2,
		zoomStep: 2,
		zoomAnimate: false,
		regionStyle: {
      initial: {
        fill: '#fff',
        "fill-opacity": 1,
        stroke: '#000',
        "stroke-width": 1,
        "stroke-opacity": 1
      },
      hover: {
        "fill-opacity": 0.8,
        cursor: 'pointer'
      }
    },
		onRegionTipShow: function(event, label, cc){
			label.append('<div class="area-description">'+areaData[cc]+'</div>');
		}
	});
});
</script>

<?php include("includes/foot.php"); ?>