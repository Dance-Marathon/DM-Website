<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Dance Marathon Live | Dance Marathon at UF';
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
  			<h1 style="margin: 0 auto 40px; text-align: center">Live Stream</h1>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src="//www.youtube.com/v/lt_iXSfnxJc"></iframe>
        </div>
  		</div>
			<div class="col-md-12" id="data-replace">
  			<h1 style="margin: 66px auto 40px; text-align: center">Event Timeline</h1>
  			<div id="loading"></div>
        <div role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" id="load-nav" role="tablist">
            <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a></li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content" id="load-content">
          </div>
        </div>
		  </div>
			<div class="col-md-12">
        <h1 style="margin: 66px auto 40px; text-align: center">Floor Map</h1>
        <div id="floor-map" style="width: 50%; margin: 0 auto;"><img src="assets/images/odome.png"></div>
			</div>
		</div>
	</div>
</div>

<script src="lib/jquery-dateFormat.min.js"></script>
<script type="text/javascript">  
jQuery(document).ready(function() { 
  var timeNow = new Date();
  var url = "http://dev.floridadm.org/app/events.php";
	var events;
  $("html,body").promise().done(function(){
    $("#data-replace").css({ opacity: 0.5 });
    $("#loading").show();
    $.ajax({
    	url: url,
    	data: $(this).serialize(),
    	dataType: "json"
    }).done(function(data) {
    	$("#data-replace").animate({opacity: 0}, 200);
    	$("#loading").hide();
    	$("#data-replace").promise().done(function(){
      	var tabCategories = [], uniqueTabCategories = [], uniqueTabCategoriesEncoded = [], tabCategoriesHTML = [], tabContent = [], tabTableHTML = [], relevantData = [], allData = [], dataObj, firstTabContent;
        
        // build categories array
        for (var i = 0; i < data.length; i++) {
          dataObj = data[i];
          tabCategories.push(dataObj.category);
        }
        
        // filter out repeated values
        $.each(tabCategories, function(i, el){
          if($.inArray(el, uniqueTabCategories) === -1) uniqueTabCategories.push(el);
        });
        
        // sort alphabetically
        uniqueTabCategories = uniqueTabCategories.sort();
        
        // write first tab content
        var k = 0;
        for (var j = 0; j < data.length; j++) {
          dataObj = data[j];
          
          a1 = dataObj.endDate.split(' ');
          b1 = a1[0].split('-');
          c1 = a1[1].split(':');
          var timeEnd = new Date(b1[0], b1[1]-1, b1[2], c1[0], c1[1], c1[2]);
          
          a2 = dataObj.startDate.split(' ');
          b2 = a2[0].split('-');
          c2 = a2[1].split(':');
          var timeStart= new Date(b2[0], b2[1]-1, b2[2], c2[0], c2[1], c2[2]);

          // save the data for the matching event
          if (timeEnd > timeNow) {
            allData[k] = new Array();
            allData[k].push(dataObj.title, dataObj.category, timeStart, timeEnd);
            k++;
          }
        }
        
        allData.sort(function(x, y){
          return x[2] - y[2];
        })
        
        // build tab content HTML
        firstTabContent = '<div role="tabpanel" class="tab-pane fade in active" id="all"><table class="table table-bordered"><thead><tr><th class="col-xs-4">Time</th><th class="col-xs-8">Event</th></tr></thead><tbody>';
        
        for (var j = 0; j < allData.length; j++) {
          var formattedStart = $.format.date(allData[j][2], "h:mm a");
          var formattedEnd = $.format.date(allData[j][3], "h:mm a");
          firstTabContent += '<tr><td>'+formattedStart+' - '+formattedEnd+'</td><td>'+allData[j][0]+'</td></tr>';
        }
        
        firstTabContent += '</tbody></table></div>';

        // output tab content HTML
        $("#data-replace #load-content").append(firstTabContent);
        
        // loop through each tab category
        for (var i = 0; i < uniqueTabCategories.length; i++) {
          
          // encode categories for anchor usage
          uniqueTabCategoriesEncoded[i] = uniqueTabCategories[i].replace(/\s+/g, '-').toLowerCase();
          
          // build tab category HTML
          tabCategoriesHTML[i] = '<li role="presentation"><a href="#'+uniqueTabCategoriesEncoded[i]+'" aria-controls="'+uniqueTabCategoriesEncoded[i]+'" role="tab" data-toggle="tab">'+uniqueTabCategories[i]+'</a></li>';
          
          // output tab categories HTML
          $("#data-replace #load-nav").append(tabCategoriesHTML[i]);
          
          relevantData[i] = new Array();

          // loop through each event
          var k = 0;
          for (var j = 0; j < data.length; j++) {
            dataObj = data[j];
            
            a1 = dataObj.endDate.split(' ');
            b1 = a1[0].split('-');
            c1 = a1[1].split(':');
            var timeEnd = new Date(b1[0], b1[1]-1, b1[2], c1[0], c1[1], c1[2]);
            
            a2 = dataObj.startDate.split(' ');
            b2 = a2[0].split('-');
            c2 = a2[1].split(':');
            var timeStart= new Date(b2[0], b2[1]-1, b2[2], c2[0], c2[1], c2[2]);
                        
            // check if the current event category matches the current tab category and if the event is over
            if (dataObj.category == uniqueTabCategories[i]) {
              if (timeEnd > timeNow) {
                relevantData[i][k] = new Array();
                // save the data for the matching event
                relevantData[i][k].push(dataObj.title, dataObj.category, timeStart, timeEnd);
                k++;
              }
            }
          }
          
          relevantData[i].sort(function(x, y){
            return x[2] - y[2];
          })
          
          // build tab content HTML
          tabContent[i] = '<div role="tabpanel" class="tab-pane fade" id="'+uniqueTabCategoriesEncoded[i]+'"><table class="table table-bordered"><thead><tr><th class="col-xs-4">Time</th><th class="col-xs-8">Event</th></tr></thead><tbody>'
          
          tabTableHTML[i] = "";
          
          for (var k = 0; k < relevantData[i].length; k++) {
            var formattedStart = $.format.date(relevantData[i][k][2], "h:mm a");
            var formattedEnd = $.format.date(relevantData[i][k][3], "h:mm a");
            tabTableHTML[i] += '<tr><td>'+formattedStart+' - '+formattedEnd+'</td><td>'+relevantData[i][k][0]+'</td></tr>';
          }
          
          tabContent[i] += tabTableHTML[i]+'</tbody></table></div>';

          // output tab content HTML
          $("#data-replace #load-content").append(tabContent[i]);
        }
        
    		$("#data-replace").animate({opacity: 1}, 200);
    	});
    	
    });
  });
});
</script>

<?php include("includes/foot.php"); ?>