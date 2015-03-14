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
			<div class="col-md-12" id="data-replace">
  			<h3>Event Timeline</h3>
  			<div id="loading"></div>
        <div role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" id="load-nav" role="tablist"></ul>
          <!-- Tab panes -->
          <div class="tab-content" id="load-content">
            <div role="tabpanel" class="tab-pane fade in active">
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

<script type="text/javascript">  
jQuery(document).ready(function() {
	 var url = "http://dev.floridadm.org/app/events.php";
	 var events;
   $("html,body").promise().done(function(){
      $("#data-replace").css({ opacity: 0.5 });
      $("#loading").show();
      $.ajax({
      	url: url,
      	data: $(this).serialize()
      }).done(function(data) {
      	$("#data-replace").animate({opacity: 0}, 200);
      	$("#loading").hide();
      	$("#data-replace").promise().done(function(){
        	var arrayLength = data.length;
        	var tabCategories, tabNav, tabContent;
          for (var i = 0; i < arrayLength; i++) {
            tabCategories = ;
          }
      		$("#data-replace #load-nav").html(tabCategories);
      		$("#data-replace").animate({opacity: 1}, 200);
      	});
      });
  });
});
</script>

<?php include("includes/foot.php"); ?>