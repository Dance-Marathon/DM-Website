<?php
$status = "open";
$GLOBALS['page_title'] = 'Ambassadors | Students | Dance Marathon at UF';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>

<script>

  // this will grab the names of all the captians from the google doc

   // ID of the Google Spreadsheet
   var spreadsheetID = "1qGVFluq-wlSZGPX2ubEZ8TcqmhfaLyJVjNiJTl3F0EE";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $('.ambassadors').append('<tr>');

   $.getJSON(url, function(data) {

       var entry = data.feed.entry;

		var counter = 0;

       $(entry).each(function() {

        if (!($(entry)[1].gsx$ambassadororg.$t.includes("n/a")) && !($(entry)[1].gsx$ambassadors.$t.includes("n/a")) && !(this.gsx$ambassadororg.$t === '')) {
            if(counter < 2) {
              $('.ambassadors').append('<td>' + '<b>'+this.gsx$ambassadororg.$t+'</b>' + ' : ' + this.gsx$ambassadors.$t + '</td>');
			      counter++;
            } else {
                $('.ambassadors').append('</tr>');
                $('.ambassadors').append('<tr>');
                $('.ambassadors').append('<td>' + '<b>'+this.gsx$ambassadororg.$t+'</b>' + ' : ' + this.gsx$ambassadors.$t + '</td>');
                counter = 1;
            }
          }
       });
   });
   $('.ambassadors').append('</tr>');

</script>

<div class="page-heading parallax delegates">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Ambassadors</h1>
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
	          <li><a href="/alumni">Alumni</a></li>
            <li><a class="active">Ambassadors</a></li>
            <li><a href="/applications">Applications</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/dancers">Dancers</a></li>
            <li><a href="/emerging-leaders">Emerging Leaders</a></li>
						<li><a href="/kirstynskrew">Kirstyn's Krew</a></li>
            <li><a href="/organizations">Organizations</a></li>

          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
      <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#become-a-delegate" aria-controls="become-a-delegate" role="tab" data-toggle="tab">Become an Ambassador</a></li>
          <li role="presentation"><a href="#starting-a-team" aria-controls="starting-a-team" role="tab" data-toggle="tab">Starting a Team</a></li>
          <li role="presentation"><a href="#ambassadors" aria-controls="ambassadors" role="tab" data-toggle="tab">Ambassadors</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="become-a-delegate">


            <h3>What is an Ambassador?</h3>
            <p>Organization Ambassadors serve as a liaison between Dance Marathon and their respective organization.</p>

            <p>Organization Ambassadors will attend weekly meetings to receive information to relay to their Organizations and to work on professional and personal development. These meetings will allow Ambassadors to think creatively and brainstorm together to create new ways to incentivize and engage their members in Dance Marathon. Each Organization will be assigned a Fundraising & Organization Development Captain to work with on Organization involvement and fundraising throughout the year.<P>

            Click <a href="assets/PDFs/Ambassador Guidelines 2021.pdf" target="_blank">here</a> to view the 2021 Ambassador Guidelines</p>

              <h3>Responsibilities:</h3>
              <ul>
                <li>Recruit and motivate members of their Organization to fundraise and participate</li>
                <li>Encourage members to get involved with Dance Marathon</li>
                <li>Inform all Organization members of events, registration dates, fundraising incentives, etc.</li>
                <li>Work with the Family Relations Team to engage with their respective Miracle Family throughout the year</li>
                <li>Host a minimum of one Hospitality Night or fundraising event</li>
                <li>Be in attendance at various Dance Marathon events during the year (i.e. Miracles in Color 5K, Moralloween, Miracle Family Events, etc.)</li>
              </ul>


              <h3>Responsibilities during the 26.2-hour event:</h3>
              <ul>
                <li>Help assign Dancer buddies prior to the Event for each Dancer</li>
                <li>Work with their Fundraising and Organization Development Captain to encourage and help Dancers fundraise at the Event</li>
                <li>Relay important information to Dancers throughout the Event</li>
                <li>Be available for Dancers in case of emergency</li>
              </ul>

              <p class="alert alert-info">Ambassadors are also encouraged to be Dancers if they choose and are eligible for free Dancer Registration upon meeting expectations of the program.</p>


          </div>
          <div role="tabpanel" class="tab-pane fade" id="starting-a-team">


            <p>To participate as an Organization in Dance Marathon, you must register your team each year. First, check to make sure your team is not already registered. To register a new team, please complete the following steps:</p>
            <ol>
            <li>Go to floridadm.org and click “Donate.”</li>
            <li>Scroll down and click “Register Now.”</li>
            <li>Input your information and create a new Organization.</li>
            <li>Fill out the proceeding information for your team and once your team has been registered, your members can join your team by following the steps and joining your existing Organization team.</li>
          </ol>
            <p>Each team will need an Ambassador to represent them. Please email the Fundraising & Organizational Development Overall, Emma McClane, at <a href=mailto:emcclane@floridadm.org>emcclane@floridadm.org</a> to inform her you have created a team and will be serving as the Ambassador or have plans of selecting an Ambassador in the near future. The Fundraising & Organizational Development Overall will not be able to get in contact with you unless you email her to let her know you started a team.</p>

          </div>
          <div role="tabpanel" class="tab-pane fade" id="ambassadors">
          <h3>2021 Emerging Leaders</h3>
          <table style="width:100%">
            <tbody class="ambassadors"> </tbody>
        </table>
        </div>
        </div>
      </div>
      
      <?php } else { echo 'This page is currently closed.'; } ?>
    </div>
  </div>
</div>
</div>

<?php include("includes/foot.php"); ?>
