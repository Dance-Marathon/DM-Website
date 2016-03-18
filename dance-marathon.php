<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Dance-Marathon | Events | Florida Dance Marathon';
	$GLOBALS['parent'] = 'events';
	include("includes/head.php");
	include("includes/navbar.php");

	


        
?>

<div class="page-heading parallax hsdm-events">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Mini-Marathon</h1>
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
						<li><a href="/community-events">Community Events</a></li>
                        <li><a href="/mini-marathon">Mini-Marathon</a></li>
						<li><a class="active">Dance Marathon 2016</a></li>
<!--                        <li><a href="/eventsurvey">DM 2015 Event Survey</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <div role="tabpanel">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a></li>
            <li role="presentation"><a href="#bands" aria-controls="bands" role="tab" data-toggle="tab">Bands</a></li>
            <li role="presentation"><a href="#themehours" aria-controls="themehours" role="tab" data-toggle="tab">Theme Hours</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="events">
           <p>
<p>
    *Note* Visitors cannot visit between 11PM - 4AM<br>
    However, visitors may visit between 1:30AM - 2:30 AM if they hve a Rave ticket.
</p>
    <strong>Events</strong>
<p>
    10:40 AM – 11:10 AM Gator Band/Albert &amp; Alberta
</p>
<p>
    11:20 AM – 12:00 PM Opening Ceremonies
</p>
<p>
    11:40PM – 12:30 AM Lip Sync Battle
</p>
<p>
    4:40 AM – 5:40AM Dance Battle
</p>
<p>
    11:40AM – 12:10 PM Kid’s Talent Show
</p>
<p>
    1:50 PM – 2:30 PM Closing Ceremonies : Final Countdown
</p>
<p>
            </div>


          <div role="tabpanel" class="tab-pane fade" id="bands">
            <p>
    *Note* Visitors cannot visit between 11PM - 4AM<br>
    However, visitors may visit between 1:30AM - 2:30 AM if they hve a Rave ticket.
</p>
    <strong>Bands</strong>
</p>
<p>
    10:00 AM – 10:40AM Connor Reever
</p>
<p>
    10:40 AM – 11:10 AM Gator Band/Albert &amp; Alberta
</p>
<p>
    1:20PM – 1:50 PM Latchkey
</p>
<p>
    2:40PM - 3:10 PM Riff Off ( NSA &amp; Tone Def)
</p>
<p>
    3:40 – 4:10 Zumba
</p>
<p>
    7:30PM – 9:20 PM Silent Disco
</p>
<p>
    9:40PM – 10:10PM The Fringes
</p>
<p>
    1:30AM – 2:30AM DJ Echols
</p>
<p>
    3:10AM – 3:40AM Morning Fatty
</p>
<p>
    7:00AM – 7:30 AM Sollar Elipsis
</p>
<p>
    9:30AM – 10:00AM Sons and Soldiers
</p>
<p>
    10:00 AM – 11:00 AM 80s Prom DJ
</p>
<p>
    1:50 PM – 2:30 PM Closing Ceremonies : Final Countdown
</p>
<p>          

            </div>
            <div role="tabpanel" class="tab-pane fade" id="themehours">
                <p>
    *Note* Visitors cannot visit between 11PM - 4AM<br>
    However, visitors may visit between 1:30AM - 2:30 AM if they hve a Rave ticket.
</p>
    <strong>Theme Hours</strong>
</p>
<p>
    4:30 – 5:30 Disney World
</p>
<p>
    7:30 – 8:30 Outer Space
</p>
<p>
    9:30 – 10:30 School of Rock
</p>
<p>
    11:30 – 12:30 Award Shows
</p>
<p>
    1:30AM – 2:30AM Rave
</p>
<p>
    3:30 – 4:30 Retro Video Games
</p>
<p>
    6:00 – 7:00 Camp DM
</p>
<p>
    7:30 – 8:30 Finding Neverland
</p>
<p>
    9:30 – 10:30 80s Prom
</p>
<p>
    1:50 PM – 2:30 PM Closing Ceremonies : Final Countdown
</p>
           </div>

        </div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
