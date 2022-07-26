<?php
$status = "open";
$GLOBALS['page_title'] = 'Ambassadors | Students | Dance Marathon at UF';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>

<!-- <script>

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

</script> -->

<style>
.page-heading.parallax.delegates {
background-image: url("/assets/images/BannerPhotos21/TT_10-28-20_SDevine42.jpg");
}
</style>

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
            <li><a href="/service">Service</a></li>

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
          <li role="presentation"><a href="#ambassadors" aria-controls="ambassadors" role="tab" data-toggle="tab">2023 Ambassadors</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="become-a-delegate">


            <h3>What is an Ambassador?</h3>
            <p>Organization Ambassadors serve as a liaison between Dance Marathon and their respective organization.</p>

            <p>Organization Ambassadors will attend weekly meetings to receive information to relay to their Organizations and to work on professional and personal development. These meetings will allow Ambassadors to think creatively and brainstorm together to create new ways to incentivize and engage their members in Dance Marathon. Each Organization will be assigned a Fundraising & Organization Development Captain to work with on Organization involvement and fundraising throughout the year.<P>

          <p>    2023 Ambassadors Coming Soon! </p>

              <h3>Responsibilities:</h3>
              <ul>
                <li>Creating a DonorDrive page and fundraising a minimum of $500, as well as participating as a Dancer at the Main Event</li>
                <li>Attending weekly meetings on Thursday at the Reitz</li>
                <li>Purchasing a Check-In Shirt and official Ambassador Polo from the DM at UF Store</li>
                <li>Motivating members of their Organization to fundraise, participate, and become involved with Dance Marathon</li>
                <li>Informing all Organization members of events, registration dates, fundraising incentives, etc.</li>
                <li>Working with the Family Relations Team to engage with their respective Miracle Family throughout the year</li>
                <li>Hosting a minimum of one Hospitality Night or fundraising event (per semester)</li>
                <li>Being in attendance and participating at Miracles in Color 5K, Moralloween, and Miracle Family Events (including a table at Moralloween)</li>
                <li>Being leaders and change-makers within their respective organizations</li>
            </ul>


              <h3>Main Event Responsibilities:</h3>
              <ul>
                <li>Helping assign Dancer buddies prior to the Event for each Dancer</li>
                    <li>Working with their Fundraising and Organization Development Captain to encourage and help Dancers fundraise at the Event</li>
                    <li>Relaying important information to Dancers throughout the Event</li>
                    <li>Being available for Dancers in case of emergency</li>
                    <li>Being a support system and encouraging leader for members during the event </li>

              </ul>

              <p class="alert alert-info">*Ambassadors are expected to attend the entire Main Event and assist with inter-organization activities throughout the year. <br></br>
                        
                       **This year, Ambassadors will not be able to also be Captains on other Dance Marathon Teams.</p>


          </div>
          <div role="tabpanel" class="tab-pane fade" id="starting-a-team">


            <p>To participate as an Organization in Dance Marathon, you must register your team each year. First, check to make sure your team is not already registered. To register a new team, please complete the following steps:</p>
            <ol>
            <li>Go to floridadm.org and click “Donate.”</li>
            <li>Scroll down and click “Register Now.”</li>
            <li>Input your information and create a new Organization.</li>
            <li>Fill out the proceeding information for your team and once your team has been registered, your members can join your team by following the steps and joining your existing Organization team.</li>
          </ol>
            <p>Each team will need an Ambassador to represent them. Please email the Fundraising & Organizational Development Overall, Kellyn Murphy, at <a href=mailto:kmurphy@floridadm.org>kmurphy@floridadm.org</a> to inform her you have created a team and will be serving as the Ambassador or have plans of selecting an Ambassador in the near future. The Fundraising & Organizational Development Overall will not be able to get in contact with you unless you email her to let her know you started a team.</p>

          </div>
          <div role="tabpanel" class="tab-pane fade" id="ambassadors">
          <h3>2023 Ambassadors</h3>
<!--            <p>    2023 Ambassadors Coming Soon! </p> -->
                
                
          <table style="width:100%; table-layout: fixed">
            <tbody>
              <tr>
                <td style="vertical-align:top"><b>Alpha Chi Omega</b><br>Louisina Morancy<br></td>
                <td style="vertical-align:top"><b>Omega Phi Alpha</b><br>Rachel Farmer<br>Kristen Rifenberg</td>
                <!--<td style="vertical-align:top"><b>Phi Delta Theta</b><br>Answer Langer <br></td>-->
                <!--<td style="vertical-align:top"><b>UF Pre-Physician Assistant Association</b><br>Tayna Moreira</td></tr>-->
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Delta Pi</b><br>Lola Accardi<br></td>
                <td style="vertical-align:top"><b>Phi Eta Sigma Honor Society</b><br>Cade Ferguson</td>
                <!--<td style="vertical-align:top"><b>Pi Beta Phi</b><br>Isabella Morales<br>Morgan Emmi</td>-->
                <!--<td style="vertical-align:top"><b>Zeta Beta Tau</b><br>Brendan Kligerman<br>Coby Farhi</td></tr>-->
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Epsilon Phi</b><br>Maggie Goldenberg<br></td>
                <td style="vertical-align:top"><b>Phi Kappa Tau</b><br>Brian Beckman</td>
                <!--<td style="vertical-align:top"><b>Pi Kappa Alpha</b><br>Conor Bowen <br>John Dunphy </td>-->
                <!--<td style="vertical-align:top"><b>Zeta Tau Alpha</b><br>Jessica Halvorsen<br>Shira Isaak</td></tr>-->
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Epsilon Pi</b><br>Joshua Levin<br>Jason Snytte<br></td>
                <td style="vertical-align:top"><b>Pi Lambda Phi</b><br>Daniel Chaiet<br>  </td>
                <!--<td style="vertical-align:top"><b>Pi Kappa Phi</b><br>Ben Jenkins </td>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Gamma Rho</b><br>Cole Verano<br></td>
                <td style="vertical-align:top"><b>Pre-Legal Honor Society</b><br>Freedom Scholes</td>
                <!--<td style="vertical-align:top"><b>Pi Lambda Phi</b><br>Daniel Chaiet<br>  </td>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Phi</b><br>Casey Strauss<br></td>
                <td style="vertical-align:top"><b>Sigma Chi</b><br>Brogen Tagman<br>William Galleher</td></tr>
                <!--<td style="vertical-align:top"><b>Pre-Legal Honor Society</b><br>Freedom Scholes</td>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>AMSA</b><br>Taylor Tompkins<br>Hayley Makowski</td>
                <td style="vertical-align:top"><b>Sigma Kappa</b><br>Danielle DePaul</td></tr>
                <!--<td style="vertical-align:top"><b>Preview Staff</b><br>Angelina Del Toro</td>-->
                
              <tr><td><br></td></tr>
               <tr>
                <td style="vertical-align:top"><b>Beta Theta Pi</b><br>Paul Kolsun<br></td>
                <td style="vertical-align:top"><b>Sigma Nu</b><br>Zachary Terwilliger </td></tr>
                <!--<td style="vertical-align:top"><b>Sigma Alpha</b><br>Peyton Corbin </td></tr>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Black Student Union</b><br>Louisina Morancy<br></td>
                <td style="vertical-align:top"><b>Sigma Phi Epsilon</b><br>Benjamin Lang</td></tr>
                <!--<td style="vertical-align:top"><b>Sigma Alpha Epsilon</b><br>Nick Miller<br>Paris Mihaj</td></tr>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Chi Phi</b><br>Jacob Bravo<br>Cole Carpinteri</td>
                <td style="vertical-align:top"><b>Society of Women Engineers</b><br>Elena Rollins<br>Alessandra Andreozzi</td></tr>
                <!--<td style="vertical-align:top"><b>Sigma Chi</b><br>Brogen Tagman<br>William Galleher</td></tr>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Delta Chi </b><br>Tor Moncrieff<br></td>
                <td style="vertical-align:top"><b>Theta Chi</b><br>Sazzad Mabud</td></tr>
                <!--<td style="vertical-align:top"><b>Sigma Kappa</b><br>Danielle DePaul</td></tr>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Delta Gamma</b><br>Gabriella Torres de Navarra<br></td>
                <td style="vertical-align:top"><b>UF Honors Program</b><br>Claudia Elena Johnson Cuellar<br></td></tr> 
                <!--<td style="vertical-align:top"><b>Sigma Nu</b><br>Zachary Terwilliger </td></tr>-->
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Delta Nu Zeta</b><br>Kyra Kimball<br>Sparsha Padi</td>
                <td style="vertical-align:top"><b>Zeta Beta Tau</b><br>Brendan Kligerman<br>Coby Farhi</td>
                <!--<td style="vertical-align:top"><b>Sigma Phi Epsilon</b><br>Benjamin Lang</td></tr>-->
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Delta Phi Epsilon</b><br>Emma Glech<br>Rachel Lerner </td>
                <!--<td style="vertical-align:top"><b>Kappa Phi Epsilon</b><br>Paul McKenzie<br></td>-->
                <!--<td style="vertical-align:top"><b>Society of Women Engineers</b><br>Elena Rollins<br>Alessandra Andreozzi</td></tr>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Delta Sigma Phi</b><br>Jack Ziegler<br>Elijah Bloyer</td>
                <!--<td style="vertical-align:top"><b>Kappa Sigma</b><br>Nolan Hensley </td>-->
                <!--<td style="vertical-align:top"><b>Tau Epsilon Phi</b><br>Teo Resnik</td></tr>-->
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Gamma Phi Beta</b><br>Alexis Pullos<br></td>
                <!--<td style="vertical-align:top"><b>Lambda Chi Alpha</b><br>Nickolas Powers<br>  </td>-->
                <!--<td style="vertical-align:top"><b>Tau Kappa Epsilon</b><br>Jorge Valarezo</td></tr>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Hispanic Student Association</b><br>Paula Gonzalez</td>
               <!-- <td style="vertical-align:top"><b>Nina Karlinsky Memorial Team</b><br>Ronald Rodriguez</td>-->
                <!--<td style="vertical-align:top"><b>Theta Alpha</b><br>Claire Schreiber<br>Julia Quinones</td></tr>-->
                
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Kappa Delta</b><br>Kshama Shetty <br></td>
                <!--<td style="vertical-align:top"><b>Omega Phi Alpha</b><br>Rachel Farmer<br>Kristen Rifenberg</td>-->
                <!--<td style="vertical-align:top"><b>Theta Chi</b><br>Sazzad Mabud</td></tr> -->
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Kappa Phi Epsilon</b><br>Paul McKenzie<br></td>
                <!--<td style="vertical-align:top"><b>Theta Tau</b><br>Gabriela Rodrigo<br>Jaren Palmasani</td></tr>-->
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Kappa Sigma</b><br>Nolan Hensley </td>
                <!--<td style="vertical-align:top"><b>Phi Eta Sigma Honor Society</b><br>Cade Ferguson</td>-->
                <!--<td style="vertical-align:top"><b>Tone Def A Cappella</b><br>Georgina Vitola</td></tr>-->
                
               <!-- <td style="vertical-align:top"><b>Phi Kappa Tau</b><br>Brian Beckman</td>-->
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Lambda Chi Alpha</b><br>Nickolas Powers<br>  </td>
                <!--<td style="vertical-align:top"><b>Phi Mu</b><br>Emma Tullio<br>Samantha Butler</td>-->
                <!--<td style="vertical-align:top"><b>UF Honors Program</b><br>Claudia Elena Johnson Cuellar<br></td></tr> -->
                


            </tbody>
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
