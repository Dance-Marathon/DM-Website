
<?php
/*header("Location: http://www.floridadm.org/alumni.php"); /* Redirect browser */
/*exit();*/
	$status = "open";
	$GLOBALS['page_title'] = 'DMA Members | Alumni | Florida Dance Marathon';
	$GLOBALS['parent'] = 'DMA Members';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax dmaa">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>DM Alumni Members</h1>
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

            <li><a href="/dmaa">About DM Alumni</a></li>
            <li><a href="/meet-dma-board">Meet the DMA Board</a></li>
            <li><a class="active">DM Alumni Members</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
			<div class="dma-members">
				<h2>Members</h2>
				<div class="members-list text-left">
					<h3>— 2010 ————————</h3>
					<ul>
						<li>Kristine Kirstein</li>
					</ul>
					<h3>— 2012 ————————</h3>
					<ul>
						<li>Meredith Chipman</li>
						<li>Elise Costa</li>
						<li>Eden Joyner</li>
					</ul>
					<h3>— 2013 ————————</h3>
					<ul>
						<li>Jillian Abrahamson</li>
						<li>Garrett Chappell</li>
						<li>Angela Daly</li>
						<li>Eric Eade</li>
						<li>Matthew Gerstman</li>
						<li>Steven Giordano</li>
						<li>Madison Hager</li>
						<li>Jared Nash</li>
						<li>Sara West</li>
						</ul>
					<h3>— 2014 ————————</h3>
					<ul>
						<li>Brian Giaquinta</li>
						<li>Carlos Gordian</li>
						<li>Taylor Greer</li>
						<li>Jamie Heekin</li>
						<li>Brandon Scherff</li>
						<li>Matt Thalhamer</li>
						<li>Molly Tuschen</li>
						<li>Joelle Waksman</li>
						<li>Kate Walton</li>
					</ul>
					<h3>— 2015 ————————</h3>
					<ul>
						<li>Taylor Chambers</li>
						<li>Brandon Cornellier</li>
						<li>Michael Dingess</li>
						<li>Chelsey Faber</li>
						<li>Andrew Giacini</li>
						<li>Lauren Heekin</li>
						<li>Nha-Uyen Hua</li>
						<li>Abbey Konchan</li>
						<li>Melissa Lanes</li>
						<li>Kristina Murphy</li>
						<li>Dylan Schmer</li>
						<li>Jimmy Taylor</li>
						<li>Travus White</li></ul>
					<h3>— 2016 ————————</h3>
					<ul>
						<li>Vicki Baker</li>
						<li>Emily Coyle</li>
						<li>Matt Michel</li>
						<li>Keith Shopa</li>
						<li>Allison Stroop</li>
						<li>Alexa Tsongranis</li>
					</ul>
					<h3>— 2017 ————————</h3>
					<ul>
						<li>Rachel Carter</li>
						<li>Alexis Castro</li>
						<li>Grace Caswell</li>
						<li>Madison Eouse</li>
						<li>Carli Fischer</li>
						<li>Josh Fried</li>
						<li>Lindsay Goldman</li>
						<li>Daniel Grunberg</li>
						<li>Mary Hanvey</li>
						<li>Alexandra Hernandez</li>
						<li>Kristin Hubbard</li>
						<li>Kelsey Johnson</li>
						<li>Sun-Joong Kim</li>
						<li>Katy Kostyk</li>
						<li>Nikki Krakower</li>
						<li>Jacob Leuze</li>
						<li>Paige Levin</li>
						<li>Caylin Lewandowski</li>
						<li>Daisy Lopez</li>
						<li>Tami Moreno</li>
						<li>Jonathan Neiwirth</li>
						<li>Lauren Pierce</li>
						<li>Nicole Platti</li>
						<li>Alexa Ramer</li>
						<li>Lacy Rubloff</li>
						<li>Jesse Sands</li>
						<li>Drew Scatizzi</li>
						<li>Julia Stevens</li>
						<li>Ashlyn Sullivan</li>
						<li>Brenna Tiano</li>
						<li>Kelsey Torgerson</li>
						<li>Caitlyn Vaughn</li>
						<li>Mallory Wood</li>
						<li>Sammi Wood</li>
						<li>Bruce Yang</li>
					</ul>
				</div>
			</div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>