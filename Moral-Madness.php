<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Miracle Gala | Events | Dance Marathon at UF';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax madness">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Morale Madness</h1>
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
						<li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a href="/miracle-gala">Miracle Gala</a></li>
						<li><a href="/Miracles-in-Color-5k">Miracles in Color 5K</a></li>
						<li><a href="/Moralloween">Moralloween</a></li>
						<li><a class="active">Morale Madness</a></li>
						<li><a href="/Transform-Today">Transform Today</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Morale Madness</h2>

                <p>Morale Madness is a basketball tournament put on by Dance Marathon at UF, a student-run philanthropy that raises funds and awareness year-round For The Kids at UF Health Shands Children’s Hospital! The basketball games are 3 v. 3 half court games, with 3-5 individuals per team. If you aren't playing on a team, you can stop by to cheer on your friends, hang out with our Miracle Families, enjoy some good food, and have fun!</p>
				<p>For more information, please contact the Morale Overall Director, Anna Fitzpatrick, at <a href="mailto:afitzpatrick@floridadm.org">afitzpatrick@floridadm.org</a>.</p>
			<?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
