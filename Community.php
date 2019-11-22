<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Community | Dance Marathon at UF';
	$GLOBALS['parent'] = 'community';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax family_events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Community</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<!-- <div class="col-md-3">
  			<div class="sub-nav">
          <ul>
          </ul>
        </div>
			</div> -->
			<div class="col-md-12">
      <?php if ($status == "open") { ?>
        <h2>Community</h2>


<p>New to Dance Marathon? There is so much to know!</p>
<ul>
<li><a href="http://floridadm.org/our-story" target="blank">Click here</a> to learn our story and history…</li>
<li><a href="http://floridadm.org/uf-health" target="blank">Click here</a> to learn more about UF Health Shands Children’s Hospital and Children’s Miracle Network Hospitals…</li>
<li><a href="http://floridadm.org/fastfacts-nomenclature" target="blank">Click here</a> for some fast facts…</li>
<li>And <a href="http://floridadm.org/meet-the-kids" target="blank">click here</a> to meet the kids!</li>
</ul>
<h2>Get Involved</h2>
<p>Now that you know about Dance Marathon, how can you help us Redefine Tomorrow For The Kids? Here are a few quick and easy ways to get involved in our cause!</p>
<ul>
<h3>Donate</h3>
	<p>Visit <a href="https://donate.giving.ufhealth.org/campaign/dance-marathon-at-the-university-of-florida-2020/c223292">floridadm.org/donate</a> and click “Donate Now” to make a general donation or type a specific participant’s name in the “Fundraiser Search” box to support their individual fundraising efforts. Every dollar goes to fund groundbreaking research, life saving equipment, and vital childlife services for the children and families at UF Health Shands Children’s Hospital.</p>
<h3>Stay up to date</h3>
	<p>Follow DM at UF on <a href="https://www.facebook.com/floridaDM/" target="blank">Facebook</a>, <a href="https://twitter.com/floridadm?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="blank">Twitter</a>, and <a href="https://www.instagram.com/dmatuf/?hl=en" target="blank">Instagram</a> to keep up with all our events and news. Not active on social media? <a href="https://goo.gl/forms/tYox4xjnVpCvfKxu1" target="blank">Click here</a> to join our community listserv so you can receive periodic emails with information about upcoming activities and events.</p>
<h3>Come to Dance Marathon</h3>
	<p>Dance Marathon 2020 will be March 28th - 29th at the Stephen C. O’Connell Center. Join us for Opening Ceremonies on Saturday, March 28th and Closing Ceremonies and Total Reveal on Sunday, March 29th. You can also drop by on Saturday afternoon or Sunday morning to join the Recruitment Team for a tour or sit in the stands and watch the action on the floor. Throughout the 26.2 hour event you might see the 2019 Linedance, experience one of the Theme Hours, or hear one of our Miracle Families share their story. Stay tuned - more information will be coming soon about special Community Hours and other community-centered programming at the event.</p>
<h3>Attend the Miracle Gala</h3>
	<p>The 2nd Annual Miracle Gala will be held on Saturday, March 28th in the Touchdown Terrace in Ben Hill Griffin Stadium. Join us for a reception at 7:00 p.m. and dinner at 8:00 p.m. During dinner you will learn more about cause and our year long efforts to raise funds and awareness for UF Health Shands Children’s Hospital. Buy your ticket today!</p>
</ul>




      <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
