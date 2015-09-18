<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Sponsors | Florida Dance Marathon';
	$GLOBALS['parent'] = 'sponsors';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax sponsors">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Sponsors</h1>
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
            <li><a href="/sponsorship-levels">Sponsorship Levels</a></li>
            <li><a href="/partners">Our Partners</a></li>
          </ul>
        </div>
      </div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  			<h3>Corporate & Business Sponsors</h3>
  			<p>Dance Marathon at the University of Florida would not be what it is today without the help of local and national sponsors. Sponsors have the chance to be an integral part of the most successful student-run philanthropy in the southeastern United States. This honor highlights the immense exposure gained by our sponsors.</p>
   			<p>Dance Marathon at the University of Florida is more than a weekend event, it is a yearlong fundraising effort and celebration for Children's Miracle Network Hospitals. Throughout the year, more than 6,000 UF students in more than 100 student organizations attend community events, fundraising nights at local businesses and engage in contests, often via social media, to benefit our sponsors. During the weekend event, more than 2,500 Overall Directors, Captains, Staff members, Miracle Families, and Dancers spend 26.2 hours in the Stephen C. O'Connell Center, offering continuous brand exposure for our sponsors. We receive more than 220,000 web hits annually, have more than 10,800 Facebook fans, over 5,000 Twitter followers, and more than 3,000 Instagram followers. If your company targets young professionals and enjoys giving back to a wonderful cause, Dance Marathon at the University of Florida is a great match for your company.</p>
 			<p>For information, to sign up as a sponsor, or donate in-kind items, email the External Communications Overall Director, Mackenzie LaPorte, at <a href="mailto:mlaporte@floridadm.org">mlaporte@floridadm.org</a> or the Sponsorship Overall Director, Torrie Scianna, at <a href="mailto:tscianna@floridadm.org">tscianna@floridadm.org</a></p>
  			<h3>In-Kind Donations</h3>
  			<p>Dance Marathon at the University of Florida graciously welcomes in-kind donations from local and national sponsors. We use in-kind donations as items in our silent auction, fundraising efforts, and food donations to feed participants at the main event and at our community events. We'd love anything your company would be willing donate.</p>
  			<h3>Marketing Kit</h3>
  			<a href="/docs/MarketingKit2015.pdf">&raquo; View PDF</a>
  			<h3>Sponsor Testimonials</h3>
  			<p>"This year’s Dance Marathon event marks the seventh year Pinners Fine Shoes has been involved in what we feel is one of the most worthwhile causes on the planet!
				As the only store in town offering such coveted UF brands as Jack Rogers, Hunter rain boots, and Longchamp Le’Pliage handbags, seven years ago we thought our DM market day would be a great way to introduce our store to hundreds of Gator girls but never realized what the almost spiritual experience this thing would mean to us personally.  
				We have fallen in love with  Dance Marathon, having attended the closing ceremony the past two years, leaving with tears in our eyes after experiencing  great passion and unselfish care thousands of UF volunteers put forth for the kids they are helping.
				Dance Marathon is a win-win for all , at Pinners we are honored to be associated with you!"</br>
				<i>Duke Pinner, Owner of Pinner’s Fine Shoes</i></p>
			<p>"It is very special and rewarding to see the children's smiles and to work with the exceptional Dance Marathon staff. For many years we have had the pleasure of being involved in Dance Marathon at UF, providing recognition and support for a great organization. The staff is highly dedicated to these children and they really go above and beyond to help. Everyone at KISS 105.3 really looks forward to DM events because it is guaranteed to be a great time! Thank you from everyone at KISS 105.3 for the incredible service you provide to our community!”
			</br><i>Alex Davis, Promotions Coordinator of KISS 105.3 FM</i></p>
			<p>“Gator Dominoes has been working with DM at UF for 20 years.  Every year it is an absolute pleasure to work with the students that run this fantastic organization.  Their professionalism and dedication to the cause and their sponsors is unparalleled.  The exposure Gator Dominoes has gained through our ongoing partnership has benefited us well, increasing our patron base and allowing us to have a profound impact on the community through our donation.  I would encourage anyone interested in bringing their brand to tens of thousands of students to reach out and pursue a partnership with this fantastic organization.”
			</br><i>Freddie, Local Franchise Owner from Gator Domino's</i></p>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>