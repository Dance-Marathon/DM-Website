<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Dance Marathon Live | Florida Dance Marathon';
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
			<div class="col-md-6">
  			<h3>Live Stream</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="//www.youtube.com/v/lt_iXSfnxJc" allowfullscreen="1"></iframe>
        </div>
  		</div>
			<div class="col-md-6">
        <h3>Floor Map</h3>
        <div id="floor-map"><img src="assets/images/odome.png"></div>
			</div>
			<div class="col-md-12">
  			<h3>Event Timeline</h3>
        <div role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
            <li role="presentation"><a href="#entertainment" aria-controls="entertainment" role="tab" data-toggle="tab">Entertainment</a></li>
            <li role="presentation"><a href="#family" aria-controls="family" role="tab" data-toggle="tab">Family</a></li>
            <li role="presentation"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
            <li role="presentation"><a href="#hospitality" aria-controls="hospitality" role="tab" data-toggle="tab">Hospitality</a></li>
            <li role="presentation"><a href="#linedance" aria-controls="linedance" role="tab" data-toggle="tab">Linedance</a></li>
            <li role="presentation"><a href="#special" aria-controls="special" role="tab" data-toggle="tab">Special</a></li>
            <li role="presentation"><a href="#theme-hour" aria-controls="theme-hour" role="tab" data-toggle="tab">Theme Hour</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="all">
              <table class="table table-bordered">
                <thead>
                  <tr>
                  	<th class="col-xs-4">Time</th>
                    <th class="col-xs-8">Event</th>
                  </tr>
                </thead>
                <tbody>
              	  <tr>
                  	<td>9:00 AM - 10:00 AM</td>
                    <td>Event</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="entertainment">a</div>
            <div role="tabpanel" class="tab-pane fade" id="family">b</div>
            <div role="tabpanel" class="tab-pane fade" id="general">c</div>
            <div role="tabpanel" class="tab-pane fade" id="hospitality">d</div>
            <div role="tabpanel" class="tab-pane fade" id="linedance">e</div>
            <div role="tabpanel" class="tab-pane fade" id="special">f</div>
            <div role="tabpanel" class="tab-pane fade" id="theme-hour">g</div>
          </div>
        </div>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>