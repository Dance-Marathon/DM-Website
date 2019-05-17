<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Classy | Fundraising | Dance Marathon at UF';
	$GLOBALS['parent'] = '';
	include("includes/head.php");
	include("includes/navbar.php");
?>

<div class="page-heading parallax applications">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Classy</h1>
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
						<li><a href="/campus-push-days">Campus Push Days</a></li>
						<li><a class="active">Classy</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
						<li><a href="/fundraising_brackets">Fundraising Brackets</a></li>
						<li><a href="/fundraising-guide">Fundraising Guide</a></li>
            <li><a href="/register-to-fundraise">Register to Fundraise</a></li>




          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>

				<h2>Classy FAQ: Internal Classy Teams</h2>
				<p></p>

<b>1. Why are we making this change?</b>
<ul><li>This shift aims to help motivate Dancers to have a more active role in representing their organization, since they are the ones competing for the 825 dancer spots based on venue capacity. While we greatly appreciate the yearlong efforts made by Captains, Emerging Leaders, Assistant Directors, and the Overall Team, we want to keep our Dancers a priority and help to make more organizations feel represented based on their personal fundraising efforts.</li></ul>
<b>2. What if I am an Ambassador and a Captain?</b>
<ul><li>Ambassadors that also have Captain positions will be registered on Classy with their Organization and not their Captain Team.</li></ul>
<b>3. When will I receive my final total (including Captains, Emerging Leaders, Assistant Directors, and Overall Team members from my organization)?</b>
<ul><li>You will receive your Organization’s final total at the wrap-up Ambassador meeting following DM 2019. This can and should be used to celebrate the success of your collective student organization’s fundraising efforts!</li></ul>
<b>4. How will the Miracle Cup winner be calculated?</b>
<ul><li>The Miracle Cup winner will be calculated based on Organization fundraising. We want to help celebrate the efforts of the 825 dancer participants' fundraising efforts in each of the organizations. As such, Captain/Emerging Leader fundraising will be counted separately on their own Classy teams.</li>
<li>While Captain and Emerging Leader will not count towards the Organization’s Miracle Cup Award, they will compete for their own titles of “Highest Fundraising Captain Team” and “Highest Fundraising Emerging Leader Unit.”</li></ul>
<b>5. How are the new Team Goals being calculated?</b>
<ul><li>We have been able to pull data of what Dancers and Delegates raised in 2018 to best determine new team goals for 2019. However, Dance Marathon at UF will be happy to provide team goals that also include the Captains, Emerging Leaders, Assistant Directors, and Overall Team Members if you would like to continue to track on your own throughout the year.</li></ul>
<b>6. Will this change bracket orders?</b>
<ul><li>The structure of the bracket system has not changed - it is determined by the fundraising and engagement of each organization.</li></ul>
<b>7. How will I know where I stand compared to other Organizations?</b>
<ul><li>Now, it’s as easy as checking Classy! As an Ambassador, you can simply visit your team’s fundraising page and view your total thermometer. From there, you can visit other team pages and view their total thermometer. Classy is updated in real-time so you can constantly stay updated on where every Organization stands in relation to another.</li>
<li>You will still be provided with a monthly Ambassador Newsletter that has Top 10 Organizations. This Top 10 number will be calculated solely on Organization fundraising (i.e. excluding Captains and Emerging Leaders).</li></ul>
<b>8. Will I be able to see how much Captains/Emerging Leader in my Organization have raised?</b>
<ul><li>Captain fundraising will not be included on Organization’s tracking docs throughout the year but it will be included in each Organization’s final post-event total. This will allow Ambassadors to focus on engaging and motivating other members and potential dancers of their Organizations.</li></ul>

      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
