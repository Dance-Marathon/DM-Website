<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Nomenclature | Press | Florida Dance Marathon';
	$GLOBALS['parent'] = 'press';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax press">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Nomenclature</h1>
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
						<li><a class="active">Nomenclature</a></li>
						<li><a href="/press-releases.php">Press Releases</a></li>
						<li><a href="/press-contacts.php">Press Contacts</a></li>
						<li><a href="/fast-facts.php">Fast Facts</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
  			<h3>Event Title</h3>  
        <p>
          First Reference: Dance Marathon at the University of Florida
          <br/> 
          Second Reference: Dance Marathon at UF
          <br/> 
          Social Media and Marketing Reference: DM at UF
          <br/> 
          Not Acceptable: DM UF, UF DM, DM @ UF
        </p>
        
        <h3>Hospital Title</h3>
        <p>
          First Reference: UF Health Shands Children’s Hospital
          <br/>  
          Second Reference: UF Health Shands
        </p>
        
        <h3>Motto</h3>
        <p>
          FTK means “For the Kids”
        </p>
        
        <h3>Children and Their Families</h3>
        <p>
          Miracle Family
          <br/>
          Miracle Children
          <br/>
          Miracle Child (0-12)
          <br/>
          Miracle Teen (13-18)
          <br/>
          Miracle Gator Nation (19+)
        </p>
        
        <h3>Volunteer Positions</h3>
        <ul>
          <li>
            Overall Directors
            <ul>
              <li>Art and Layout</li>
              <li>Community Events</li>
              <li>Dancer Relations</li>
              <li>Entertainment</li>
              <li>External Communication</li>
              <li>Family Relations</li>
              <li>Finance</li>
              <li>Hospitality</li>
              <li>Internal Communication</li>
              <li>Marathon Relations</li>
              <li>Marketing</li>
              <li>Morale</li>
              <li>Operations</li>
              <li>Public Relations</li>
              <li>Recruitment</li>
              <li>Technology</li>
            </ul>
          </li>
          <li>Captains
            <ul>
              <li>Art and Layout</li>
              <li>Community Events</li>
              <li>Dancer Relations</li>
              <li>Entertainment</li>
              <li>Family Relations</li>
              <li>Finance</li>
              <li>Finance</li>
              <li>Hospitality</li>
              <li>Marathon Relations</li>
              <li>Marketing</li>
              <li>Morale</li>
              <li>Operations</li>
              <li>Public Relations</li>
              <li>Recruitment</li>
              <li>Technology</li>
            </ul>
          </li>
          <li>Staff</li>
          <li>Delegates</li>
          <li>Dancers</li>
          <li>Fundraisers</li>
          <li>Dance Marathon Alumni Association (DMAA)</li>
        </ul>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>