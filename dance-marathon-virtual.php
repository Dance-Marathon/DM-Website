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
                    <p>Check out what's going on below!</p>
                    <ul>
                      <li>General Zoom: <a href="https://cmnhospitals.zoom.us/s/82583068420;" target="_blank">https://cmnhospitals.zoom.us/s/82583068420;</a></li>
                      <li>Additional Livestream Option: <a href="https://www.facebook.com/floridaDM" target="_blank">https://www.facebook.com/floridaDM</a></li>
                      <li>Alumni Zoom: <a href="https://ufl.zoom.us/j/95643231990" target="_blank">https://ufl.zoom.us/j/95643231990</a></li>
                      <li>Merchandise: <a href="https://dance-marathon-at-uf-510104.square.site/" target="_blank">https://dance-marathon-at-uf-510104.square.site/</a></li>
                      <li>Silent Auction: <a href="https://event.gives/dmuf21" target="_blank">https://event.gives/dmuf21</a></li>
                    </ul>
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
  var tablinks = ["dancers-virtual","alumni-virtual","general-virtual","sponsers-virtual"];
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
		  <li role="presentation"><a href="#sponsers-virtual" onclick="tabs(event, 'sponsers-virtual')" aria-controls="sponsers-virtual" role="tab" data-toggle="tab" class="tab-links">Sponsors</a></li>
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
				    <li>Opening Ceremonies Livestream: 6:00 a.m. - 7:00 a.m.</li>
				    <li>Theme Hour Zoom: Miracles on Broadway - 8:00 a.m. - 10:00 a.m.  Fundraising Breakouts</li>
					<li>Dream for Donny - 10:30 - 11:00 p.m.</li>
					<li>Theme Hour Zoom: DM Games - 12:10 - 1:50 p.m.  Fundraising Breakouts</li>
					<li>DM on a Field - Norman, 2:00 - 4:00 p.m.</li>
					<li>Theme Hour Zoom: SS DM - 3:10 - 5:00 p.m.  Fundraising Breakouts</li>
					<li>Miracle Stories every hour (8:20 a.m., 9:20 a.m., 10:20 a.m., 11:20 a.m., 12:20 p.m., 1:20 p.m., 3:20 p.m., 4:20 p.m.)</li>
					<li>Closing Ceremonies and Total Reveal: In the O’Dome 6:00 p.m. - 7:06 p.m. (Sign in at Gate 3 at the O’Dome by 5:45 p.m.)</li>
			     </ul>

			  <h3>Blue Shift Schedule</h3>
				<h4>Saturday</h4>
				 <ul>
				    <li>Opening Ceremonies Live stream - 8:00 a.m. - 9:00 a.m.</li>
					<li>Theme Hour Zoom: Greece/Grease - 10:10 a.m. - 12:00 p.m.  Fundraising Breakout</li>
					<li>DM on a Field - Norman, 12:00 - 2:00 p.m.</li>
					<li>All for Arden - 12:30 - 1:00 p.m.</li>
					<li>Theme Hour Zoom: Survivor - 2:10 - 3:50 p.m.  Fundraising Breakout</li>
					<li>Theme Hour Zoom: Out of the Page - 5:10 - 7:00 p.m.  Fundraising Breakout</li>
					<li>Miracle Stories every hour (10:20 a.m., 11:20 a.m., 12:20 a.m., 1:20 p.m., 2:20 p.m., 3:20 p.m, 5:20 p.m., 6:20 pm.)</li>
			     </ul>
				<h4>Sunday</h4>
				 <ul>
				    <li>In event - 6:00 a.m. - 7:06 p.m.</li>
				 </ul>
	            
			 <h2>Virtual Dancer Schedule</h2>
			   <h4>Saturday</h4>
			   <ul>
				    <li>Opening Ceremonies Livestream - 8:00 a.m. - 9:00 a.m.</li>
					<li>Theme Hour Zoom: Greece/Grease - 10:10 a.m. - 12:00 p.m.  Fundraising breakouts</li>
					<li>DM on a Field - Norman, 12:00 - 2:00 p.m.</li>
					<li>All for Arden - 12:30 - 1:00 p.m.</li>
					<li>Theme Hour Zoom: Survivor - 2:10 - 3:50 p.m.  Fundraising breakouts</li>
					<li>Theme Hour Zoom: Out of the Page - 5:10 - 7:00 p.m.  Fundraising breakouts</li>
					<li>Miracle Stories every hour (10:20 a.m., 11:20 a.m., 12:20 a.m., 1:20 p.m., 2:20 p.m., 3:20 p.m, 5:20 p.m., 6:20 pm.)</li>
			     </ul>
			    <h4>Sunday</h4>
				<ul>
				    <li>Opening Ceremonies Livestream: 6:00 a.m. - 7:00 a.m.</li>
				    <li>Theme Hour Zooom: Miracles on Broadway Zoom - 8:00 a.m. - 10:00 a.m.  Fundraising Breakouts</li>
					<li>Dream for Donny - 10:30 - 11:00 p.m.</li>
					<li>Theme Hour Zoom: DM Games - 12:10 - 1:50 p.m.  Fundraising Berakouts</li>
					<li>DM on a Field - Norman, 2:00 - 4:00 p.m.</li>
					<li>Theme Hour Zoom: SS DM - 3:10 - 5:00 p.m.  Fundraising Breakouts</li>
					<li>Miracle Stories every hour (8:20 a.m., 9:20 a.m., 10:20 a.m., 11:20 a.m., 12:20 p.m., 1:20 p.m., 3:20 p.m., 4:20 p.m.)</li>
					<li>Closing Ceremonies and Total Reveal Livestream: 6:00 p.m. - 7:06 p.m.</li>
			     </ul>
           </div>
	
          <div role="tabpanel" class="tab-pane fade" id="alumni-virtual">

	       <h2>Alumni</h2>
	          <p></p>
            <p><li>Alumni Zoom: <a href="https://ufl.zoom.us/j/95643231990" target="_blank">https://ufl.zoom.us/j/95643231990</a></li></p>
	          <p>Alumni will have the opportunity to participate in Dance Marathon 2021 through our virtual platforms. A schedule of events can be found on the “General” tab, and Alumni-specific virtual opportunities are available below. Alumni can participate in the Alumni Power Hour on Saturday, April 10 before attending the virtual Miracle Gala. Miracle Gala tickets can be purchased with the link below. All Alumni are invited to tune into our live streams with @dmatuf on Instagram and Dance Marathon at UF on Facebook for Miracle Stories, fundraising hours and more! </p>
	          <p></p>
	       <h3>Saturday</h3>
			     <ul>
				    <li>Opening Ceremonies Live Stream - 8:00 a.m. - 9:00 a.m.</li>
					<li>Stop! It’s Alumni Time. Zoom: 3:30 - 4:30 p.m.</li>
					<ul>
                        <li>Stop! It’s Alumni Time kickoff Livestream 3:30 p.m.</li>
                        <li>2020 Linedance Livestream: 4:20 p.m.</li>
                     </ul>
					<li>Miracle Gala: 6:00 - 9:00 p.m.</li>
					<ul>
					    <li>6:00 - 7:00 p.m.: VIP Hour</li>
                        <li>7:00 - 9:00 p.m.</li>
                        <li>Purchase tickets <a href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4541" target="_blank">here.</a> The links will be emailed to you. Reach out to gcrowder@floridadm.org with any questions.</li>
					</ul>
			    </ul>
			    <h3>Sunday</h3>
				<ul>
				    <li>Opening Ceremonies Livestream: 6:00 a.m. - 7:00 a.m.</li>
					<li>Alumni Zoom: 12:00 - 1:00 p.m.</li>
					<ul>
                        <li>2018 Linedance (4 year Dancer)</li>
						<li>Livestream Watch Party: 12:10 p.m.</li>
                    </ul>
					<li>Closing Ceremonies and Total Reveal Livestream: 6:10 p.m. - 7:06 p.m.</li>
			     </ul>
            </div>



            <div role="tabpanel" class="tab-pane fade " id="general-virtual">
	
	             <h2>General</h2>
				   <p>Faculty, parents, community members and high school students are invited to virtually participate in Dance Marathon at UF 2021 through our livestreams. Tune into our livestreams with @dmatuf on Instagram and Dance Marathon at UF on Facebook for Miracle Stories, fundraising hours and more! </p>
                 <h3>General Schedule</h3>
				 <h4>Saturday</h4>
			     <ul>
				    <li>Opening Ceremonies Live Stream - 8:00 a.m. - 9:00 a.m.</li>
					<li>Closing Ceremonies Livestream: 8:20 p.m. - 9:06 p.m.</li>
					<li>Miracle Gala: 6:00 - 9:00 p.m</li>
					<ul>
                        <li>6:00 - 7:00 p.m.: VIP Hour</li>
                        <li>7:00 - 9:00 p.m.</li>
						<li>Purchase tickets here. The links will be emailed to you. Reach out to gcrowder@floridadm.org with any questions.</li>
                     </ul>
					<li>Miracle Stories every hour (10:20 a.m., 11:20 a.m., 12:20 a.m., 1:20 p.m., 2:20 p.m., 3:20 p.m, 5:20 p.m., 6:20 pm.)</li>
			    </ul>
			    <h4>Sunday</h4>
				<ul>
				    <li>Opening Ceremonies Livestream: 6:00 a.m. - 7:00 a.m.</li>
					<li>Closing Ceremonies and Total Reveal Livestream: 6:10 p.m. - 7:06 p.m.</li>
					<li>Miracle Stories every hour (8:20 a.m., 9:20 a.m., 10:20 a.m., 11:20 a.m., 12:20 p.m., 1:20 p.m., 3:20 p.m., 4:20 p.m.)</li>
			     </ul>
		   </div>

		   <div role="tabpanel" class="tab-pane fade " id="sponsers-virtual">
	
	        <div class="col-md-8">


    <h2>Our 2021 Virtual Sponsors</h2>
    <hr>
      <div class="sponsor-section">
        <div class="row">
          <div class="col-sm-7">
            <img style="max-width:100%" src="assets\images\VSponsers\1200px-Marriott_Vacations_Worldwide_Corporation_logo.svg.png" alt="centered image" />
          </div>
        </div>
        <div style="height: 35px;"></div>
        <div class="col-sm-7">
          <img style="max-width:100%" src="assets\images\VSponsers\Bento Logo.png" alt="centered image" />
        </div>
        <div style="height: 35px;"></div>
        <div class="row">
          <div class="col-sm-7">
            <img style="max-width:100%" src="assets\images\VSponsers\bjs.png" alt="centered image" />
          </div>
        </div>
        <div style="height: 35px;"></div>
        <div class="row">
          <div class="col-sm-7">
            <img style="max-width:100%" src="assets\images\VSponsers\Bradenton+Yacht+Club.png" alt="centered image" />
          </div>
        </div>
        <div style="height: 35px;"></div>
        <div class="row">
          <div class="col-sm-7">
            <img style="max-width:100%" src="assets\images\VSponsers\Bz Gelati.PNG" alt="centered image" />
          </div>
        </div>

		<div></div>

        <div style="margin-top: 35px;" class="row">
          <div class="col-sm-6">
            <img style="max-width:100%" src="assets\images\VSponsers\Chick-fil-a logo-page-001.jpg" alt="centered image" />
          </div>
		  </div>
		  <div style="margin-top: 35px;" class="row">
          <div class="col-sm-6">
            <img style="max-width:100%" src="assets\images\VSponsers\Copy of Piesanos-page-001.jpg" alt="centered image" />
          </div>
        </div>

        <div style="margin-top: 35px;" class="row">
           <div class="col-sm-6">
            <img style="max-width:100%" src="assets\images\VSponsers\Dominos logo.jpg" alt="centered image" />
          </div>
          <div class="col-sm-6">
            <img style="max-width:100%" src="assets\images\VSponsers\Dunkin+Logo_mid.jpg" alt="centered image" />
          </div>
        </div>
        <div style="margin-top: 35px;" class="row">
          <div class="col-sm-6">
            <img style="max-width:100%" src="assets\images\VSponsers\Gainesville_3rdAve_Standard_Logo (1).png" alt="centered image" />
          </div>
          <div class="col-sm-6">
            <img style="max-width:100%" src="assets\images\VSponsers\Gator D_Lites.png" alt="centered image" />
          </div>
        </div>
		<br/><br/>
         <div  class="row">
          <div class="col-sm-6">
            <img style="max-width:100%" src="assets\images\VSponsers\jersey mikes logo.png" alt="centered image" />
          </div>
          <div class="col-sm-6">
            <img style="max-width:100%" src="assets\images\VSponsers\logo_bv 2.jpg" alt="centered image" />
          </div>
        </div>
        <div style="margin-top: 35px;" class="row">
         <div class="col-sm-6">
           <img style="max-width:100%" src="assets\images\VSponsers\logo-top.png" alt="centered image" />
         </div>
         <div class="col-sm-6">
           <img style="max-width:100%" src="assets\images\VSponsers\logo.png" alt="centered image" />
         </div>
       </div>

      </div>
      <hr>
      <center>
      <div class="sponsor-section">
        <div  class="row">
          <div class="col-sm-4">
            <img style="max-width:100%" src="assets\images\VSponsers\maple street.png" alt="centered image" />
          </div>
          <div class="col-sm-4">
            <img style="max-width:100%" src="assets\images\VSponsers\Mi Apa Logo.png" alt="centered image" />
          </div>
        </div>
        <div style="height: 35px;">
        </div>
        <div  class="row">
          <div class="col-sm-4">
            <img style="max-width:100%" src="assets\images\VSponsers\mojo hogtown logo.jpg" alt="centered image" />
          </div>
          <div class="col-sm-4">
            <img style="max-width:100%" src="assets\images\VSponsers\Monster_Energy_logo.png" alt="centered image" />
          </div>
        </div>
        <div style="height: 35px;">
        </div>
        <div  class="row">
          <div class="col-sm-4">
            <img style="max-width:100%" src="assets\images\VSponsers\PDQ-page-001.jpg" alt="centered image" />
          </div>
          <div class="col-sm-4">
            <img style="max-width:100%" src="assets\images\VSponsers\Sababa Logo.jpg" alt="centered image" />
          </div>
        </div>
        <div  class="row">
          <div class="col-sm-4">
            <img style="max-width:100%" src="assets\images\VSponsers\social.jpg.png" alt="centered image" />
          </div>
          <div class="col-sm-4">
              <img style="max-width:100%" src="assets\images\VSponsers\Texas Roadhouse Logo.png" alt="centered image" />
          </div>
        </div>
        <div  class="row">
          <div class="col-sm-4">
            <img style="max-width:100%" src="assets\images\VSponsers\university_standard-01 (5).png" alt="centered image" />
          </div>
          <div class="col-sm-4">
              <img style="max-width:100%" src="assets\images\VSponsers\Unknown (1).png" alt="centered image" />
          </div>
        </div>
      </div>
      <hr>
      <div></div>

        <div style="height: 35px;">
        </div>
        <div class="row">
          <div class="col-sm-3">
            <img style="max-width:100%" src="assets\images\VSponsers\Unknown-6.png" alt="centered image" />
          </div>

          <div class="col-sm-3">
            <img style="max-width:100%" src="assets\images\VSponsers\xajsZ7Yh.png" alt="centered image" />
          </div>
        </div>

        <div style="height: 35px;">
        </div>
        <div class="row">
          <div class="col-sm-3">
            <img style="max-width:100%" src="assets\images\VSponsers\zaxbys.png" alt="centered image" />
          </div>
        </div>

      </div>



      </div>
    </div>
    </div>
  </div>
  </div>
  <div style="margin-top: 25px;" class="row">
</div>
           </div>

  
		
	   </div>



			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
 </div>

<?php include("includes/foot.php"); ?>
