<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Dance Marathon Virual Event 2021 | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax gala">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Dance Marathon Virtual Event 2021</h1>
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
                        <li><a class="active">Dance Marathon Virtual Event 2021</a></li>
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="miracle-gala">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a href="/Moral-Madness">Morale Madness</a></li>
						<li><a href="/Transform-Today">Transform Today</a></li>
                     </ul>
            </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Dance Marathon Virtual Event</h2>

                    <p>Dance Marathon at the University of Florida is hosting our Main Event on April 10-11. We are so excited to be able to have a portion of our members join us in the Stephen C. O’Connell Center and safely participate in two 13.1-hour shifts. We are also hosting a variety of virtual options throughout the Dance Marathon 2021 weekend for those unable to join us in person. Each tab has a schedule, as well as links for each group to follow and enjoy their virtual experience.</p>
       <div role="tabpanel">

<script>

function tabs(evt, cityName) {
  // Declare all variables
  var i, tabcontent;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tab-pane");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  var tablinks = ["dancers-virtual","alumni-virtual","general-virtual"];
  for (i = 0; i < 3; i++) {
	 // console.log(tablinks[i]);
    tablinks[i].className = "tab-pane fade";
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  
  document.getElementById(cityName).style.display = "block";
  document.getElementById(cityName).className += " in active";
  console.log(evt.currentTarget);
}

</script>

<!-- Nav tabs -->
         <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a onclick="tabs(event, 'dancers-virtual')" href="#dancers-virtual" aria-controls="dancers-virtual" role="tab" data-toggle="tab" class="tab-links">Dancers</a></li>
          <li role="presentation"><a href="#alumni-virutal" onclick="tabs(event, 'alumni-virtual')" aria-controls="alumni-virtual" role="tab" data-toggle="tab" class="tab-links">Alumni</a></li>
          <li role="presentation"><a href="#general-virtual" onclick="tabs(event, 'general-virtual')" aria-controls="general-virtual" role="tab" data-toggle="tab" class="tab-links">General</a></li>
         <!-- <li role="presentation"><a href="#dancing-as-an-individual" aria-controls="dancing-as-an-individual" role="tab" data-toggle="tab">Dancing as an Individual</a></li> -->
 
         </ul>

<!-- Tab panes -->
         <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="dancers-virtual">

	          <h2>Dancers</h2>
	          <p></p>
	          <p>Dancers will have the opportunity to participate in Dance Marathon at UF 2021 in-person or virtually. In-person Dancers will attend the Orange Shift 1 on Saturday, April 10 from 8 a.m. to 9:06 p.m. or Blue Shift 2 on Sunday, April 11 from 6 a.m. to 7:06 p.m. We encourage all of our Dancers to continue their event online once their Dancer shift ends. Fully virtual Dancers have the option to join Theme Hour and Fundraising Zooms and tune into our live streams.</p>
	          <p>On April 10 from 12-2 p.m., Dancers who are not participating in the in-person Orange Shift 1 are invited to join us on Norman Field for food, games and more. On April 11 from 2-4 p.m.,  Dancers who are not participating in the in-person Blue Shift 2 are invited to join us on Norman Field for food, games and more.</p>
	          <p></p>
			  <h3>Orange Shift Schedule</h3>
			    <h4>Saturday</h4>
	             <ul>
				    <li>In event - 8:00 a.m. to 9:06 p.m.</li>
				 </ul>
				<h4>Sunday</h4>
				 <ul>
				    <li>Miracles on Broadway Zoom - 8:00 a.m. - 10:00 a.m.  Fundraising Breakouts</li>
					<li>Dream for Donny - 10:30 - 11:00 p.m.</li>
					<li>DM Games Zoom - 12:10 - 1:50 p.m.  Fundraising Berakouts</li>
					<li>DM on a Field - Norman, 2:00 - 4:00 p.m.</li>
					<li>SS DM Zoom - 3:10 - 5:00 p.m.  Fundraising Breakouts</li>
					<li>Miracle Stories every hour (8:20 a.m., 9:20 a.m., 10:20 a.m., 11:20 a.m., 12:20 p.m., 1:20 p.m., 3:20 p.m., 4:20 p.m.)</li>
					<li>Closing Ceremonies and Total Reveal: In the O’Dome 6:00 p.m. - 7:06 p.m. (Sign in at Gate 3 at the O’Dome by 5:45 p.m.)</li>
			     </ul>

			  <h3>Blue Shift Schedule</h3>
				<h4>Saturday</h4>
				 <ul>
				    <li>Opening Ceremonies Live stream - 8:00 a.m. - 9:00 a.m.</li>
					<li>Greece/Grease Zoom - 10:10 a.m. - 12:00 p.m.  Fundraising Breakout</li>
					<li>DM on a Field - Norman, 12:00 - 2:00 p.m.</li>
					<li>All for Arden - 12:30 - 1:00 p.m.</li>
					<li>Survivor Zoom - 2:10 - 3:50 p.m.  Fundraising Breakout</li>
					<li>Out of the Page Zoom - 5:10 - 7:00 p.m.  Fundraising Breakout</li>
					<li>Miracle Stories every hour (10:20 a.m., 11:20 a.m., 12:20 a.m., 1:20 p.m., 2:20 p.m., 3:20 p.m, 5:20 p.m., 6:20 pm.)</li>
			     </ul>
				<h4>Sunday</h4>
				 <ul>
				    <li>In event - 6:00 a.m. - 7:06 p.m.</li>
				 </ul>
	            
			 <h2>Virtual Dancer Schedule</h2>
			   <h3>Saturday</h3>
			   <ul>
				    <li>Opening Ceremonies Live Stream - 8:00 a.m. - 9:00 a.m.</li>
					<li>Theme Hour Zoom: Greece/Grease - 10:10 a.m. - 12:00 p.m.  Fundraising breakouts</li>
					<li>DM on a Field - Norman, 12:00 - 2:00 p.m.</li>
					<li>All for Arden - 12:30 - 1:00 p.m.</li>
					<li>Theme Hour Zoom: Survivor - 2:10 - 3:50 p.m.  Fundraising breakouts</li>
					<li>Theme Hour Zoom: Out of the Page - 5:10 - 7:00 p.m.  Fundraising breakouts</li>
					<li>Miracle Stories every hour (10:20 a.m., 11:20 a.m., 12:20 a.m., 1:20 p.m., 2:20 p.m., 3:20 p.m, 5:20 p.m., 6:20 pm.)</li>
			     </ul>
			    <h3>Sunday</h3>
				<ul>
				    <li>Theme Hour Zooom: Miracles on Broadway Zoom - 8:00 a.m. - 10:00 a.m.  Fundraising Breakouts</li>
					<li>Dream for Donny - 10:30 - 11:00 p.m.</li>
					<li>Theme Hour Zoom: DM Games - 12:10 - 1:50 p.m.  Fundraising Berakouts</li>
					<li>DM on a Field - Norman, 2:00 - 4:00 p.m.</li>
					<li>Theme Hour Zoom: SS DM - 3:10 - 5:00 p.m.  Fundraising Breakouts</li>
					<li>Miracle Stories every hour (8:20 a.m., 9:20 a.m., 10:20 a.m., 11:20 a.m., 12:20 p.m., 1:20 p.m., 3:20 p.m., 4:20 p.m.)</li>
					<li>Closing Ceremonies and Total Reveal: In the O’Dome 6:00 p.m. - 7:06 p.m. (Sign in at Gate 3 at the O’Dome by 5:45 p.m.)</li>
			     </ul>
          </div>
	
          <div role="tabpanel" class="tab-pane fade" id="alumni-virtual">

	       <h2>Alumni</h2>
	          <p></p>
	          <p>Alumni will have the opportunity to participate in Dance Marathon 2021 through our virtual platforms. A schedule of events can be found on the “General” tab, and Alumni-specific virtual opportunities are available below. Alumni can participate in the Alumni Power Hour on Saturday, April 10 before attending the virtual Miracle Gala. Miracle Gala tickets can be purchased with the link below. All Alumni are invited to tune into our live streams with @dmatuf on Instagram and Dance Marathon at UF on Facebook for Miracle Stories, fundraising hours and more! </p>
	          <p></p>
	       <h3>Saturday</h3>
			     <ul>
				    <li>Opening Ceremonies Live Stream - 8:00 a.m. - 9:00 a.m.</li>
					<li>Stop! It’s Alumni Time. Zoom: 3:30 - 4:30 p.m.
                        <br>Stop! It’s Alumni Time kickoff Livestream 3:30 p.m.</br>
                        <br>2020 Linedance Livestream: 4:20 p.m.</br>
                     </li>
					<li>Gala: 6:00 - 9:00 p.m.
					    <br>6:00 - 7:00 p.m.: VIP Hour</br>
                        <br>7:00 - 9:00 p.m.</br>
                        <br>Purchase tickets here. The links will be emailed to you. Reach out to gcrowder@floridadm.org with any questions.</br>
					</li>
			    </ul>
			    <h3>Sunday</h3>
				<ul>
				    <li>Opening Ceremonies Livestream: 6:00 a.m. - 7:00 a.m.</li>
					<li>Alumni Zoom: 12:00 - 1:00 p.m.
                        <br>2018 Linedance (4 year Dancer)</br>
						<br>Livestream Watch Party: 12:10 p.m.</br>
                    </li>
					<li>Closing Ceremonies and Total Reveal Livestream: 6:10 p.m. - 7:06 p.m.</li>
			     </ul>
            </div>



            <div role="tabpanel" class="tab-pane fade " id="general-virtual">
	
	        <p>Information Update Coming Soon!</p>
           </div>

  
		
	   </div>



			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
 </div>

<?php include("includes/foot.php"); ?>
