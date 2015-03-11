<?php
	$GLOBALS['page_title'] = 'Announcements | Florida Dance Marathon';
	//$GLOBALS['parent'] = 'press';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax press">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Announcements</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-push-1">
            <h3>Announcement Form</h3>
  			<p><form name="announcements" id="announcements" method="POST" action="announcements-submit.php">
<textarea name="announcement_txt" id="annoucement_txt" placeholder="Type announcement here and wait for page to reload after submission." maxlength="100" border="0" cols="60" rows="8"/></textarea><br />
&nbsp;<br />
<input type="submit" value="Submit"/></div>
</form></p>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>