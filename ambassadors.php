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
.page-heading.parallax.ambassadors {
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
          <li role="presentation"><a href="#ambassadors" aria-controls="ambassadors" role="tab" data-toggle="tab">2021 Ambassadors</a></li>
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


              <h3>Responsibilities during the Main Event:</h3>
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
            <p>Each team will need an Ambassador to represent them. Please email the Fundraising & Organizational Development Overall, Clayton Gaulding, at <a href=mailto:cgaulding@floridadm.org>cgaulding@floridadm.org</a> to inform him you have created a team and will be serving as the Ambassador or have plans of selecting an Ambassador in the near future. The Fundraising & Organizational Development Overall will not be able to get in contact with you unless you email him to let him know you started a team.</p>

          </div>
          <div role="tabpanel" class="tab-pane fade" id="ambassadors">
          <h3>2021 Ambassadors</h3>
          <table style="width:100%; table-layout: fixed">
            <tbody>
              <tr>
                <td style="vertical-align:top"><b>Alpha Chi Omega</b><br>Haley Spooner<br>Eliana Burgos</td>
                <td style="vertical-align:top"><b>Delta Gamma</b><br>Madison Compton<br>Abigail Search</td>
                <td style="vertical-align:top"><b>Kappa Phi Epsilon</b><br>Tomas Gayoso</td>
                <td style="vertical-align:top"><b>Sigma Kappa</b><br>Caroline Lunny<br>Grace Adams</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Delta Pi</b><br>Megan Rooney<br>Bridget Richer</td>
                <td style="vertical-align:top"><b>Delta Nu Zeta</b><br>Salome Rivera<br>Sarah Russ</td>
                <td style="vertical-align:top"><b>Kappa Sigma</b><br>Hunter Gaskin</td>
                <td style="vertical-align:top"><b>Sigma Nu</b><br>Edgar Moreno Jr</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Epsilon Delta</b><br>Martha-Grace McLean</td>
                <td style="vertical-align:top"><b>Delta Phi Epsilon</b><br>Abby Nussbaum<br>Shelly Nezaria</td>
                <td style="vertical-align:top"><b>Lambda Chi Alpha</b><br>Christopher Skibicki</td>
                <td style="vertical-align:top"><b>Sigma Phi Epsilon</b><br>Cameron Shannon</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Epsilon Phi</b><br>Hannah Freeman<br>Madalyn Lueken</td>
                <td style="vertical-align:top"><b>Delta Sigma Phi</b><br>Cooper Martin</td>
                <td style="vertical-align:top"><b>Nina Karlinsky Memorial Team</b><br>Alex Goldman</td>
                <td style="vertical-align:top"><b>Society of Women Engineers</b><br>Kalia Martin<br>Samantha Kirse</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Epsilon Pi</b><br>Benjamin Speizman<br>Ross Unger</td>
                <td style="vertical-align:top"><b>Delta Tau Delta</b><br>William Rodriguez<br>Bobby Brunner</td>
                <td style="vertical-align:top"><b>Omega Phi Alpha</b><br>Lauren Zweifel<br>Caitlin Field</td>
                <td style="vertical-align:top"><b>Tau Kappa Epsilon</b><br>David Mahan<br>Joaquim Jose</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Gamma Rho</b><br>Andrew Priest<br>Austin Lee</td>
                <td style="vertical-align:top"><b>Delta Upsilon</b><br>Bronson Hervey</td>
                <td style="vertical-align:top"><b>Phi Delta Theta</b><br>Ryan Bell<br>Zachary Copenhaver</td>
                <td style="vertical-align:top"><b>The Gator Aides</b><br>Paula Mello<br>Lesly Salgado<br>Maria Santos</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Omicron Pi</b><br>Bailly Gray<br>Allison Hillier</td>
                <td style="vertical-align:top"><b>Delta Zeta</b><br>Hannah Harding<br>Ashley Ruf</td>
                <td style="vertical-align:top"><b>Phi Epsilon Kappa</b><br>Jordan Irwin</td>
                <td style="vertical-align:top"><b>Theta Alpha</b><br>Victoria Lutz<br>Melia Palomino</td></tr>
              <tr><td><br></td></tr>
               <tr>
                <td style="vertical-align:top"><b>Alpha Phi</b><br>Kat Harbaruk<br>Sasha Stadnik</td>
                <td style="vertical-align:top"><b>Doctors Without Borders</b><br>Kelsey Harre<br>Carter Davis</td>
                <td style="vertical-align:top"><b>Phi Gamma Delta (Fiji)</b><br>Julian Alberto</td>
                <td style="vertical-align:top"><b>Theta Chi</b><br>Alex Gruber</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Alpha Tau Omega</b><br>Connor Pitischi<br>Max Phillips</td>
                <td style="vertical-align:top"><b>Dream Team</b><br>Summer Stavrevski</td>
                <td style="vertical-align:top"><b>Phi Kappa Tau</b><br>Oliver Hewett</td>
                <td style="vertical-align:top"><b>Theta Tau</b><br>Mckenzie Channon<br>Molly Durnas</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>AMSA</b><br>Karan Kwatra<br>Hannah Pardo</td>
                <td style="vertical-align:top"><b>Footprints: Buddy and Support Program</b><br>Michael Aji<br>Kenna Hildenbrand</td>
                <td style="vertical-align:top"><b>Phi Mu</b><br>Anna Long<br>Jenna Lance</td>
                <td style="vertical-align:top"><b>Tone Def A Cappella</b><br>Georgina Vitola</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Benton Engineering Council</b><br>Leah Radovich</td>
                <td style="vertical-align:top"><b>Gamma Eta</b><br>Paola Velez</td>
                <td style="vertical-align:top"><b>Pi Beta Phi</b><br>Mackenzie Potts<br>Kylie Phifer</td>
                <td style="vertical-align:top"><b>UF Club Field Hockey</b><br>Serena Patel</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Beta Theta Pi</b><br>Michael Hampton<br>Alexander Propsta</td>
                <td style="vertical-align:top"><b>Gamma Phi Beta</b><br>Jordan Edelman<br>Aine Booth</td>
                <td style="vertical-align:top"><b>Pi Delta Psi</b><br>Duc Huynh</td>
                <td style="vertical-align:top"><b>UF Innovation Academy</b><br>Autumn Farmer</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Campus Diplomats</b><br>Gracie Johnson<br>Logan Foster</td>
                <td style="vertical-align:top"><b>Gator ADAA</b><br>Aashka Shah<br>Richa Bhavsar</td>
                <td style="vertical-align:top"><b>Pi Kappa Alpha</b><br>Matthew Devarona<br>Matthew Benavidez</td>
                <td style="vertical-align:top"><b>UF MEDLIFE</b><br>Joceline Rodriguez-Saucedo<br>Gabriela Arias</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Catholic Gators</b><br>Gisela Rojas-Carreno<br>Karina Czubkowski</td>
                <td style="vertical-align:top"><b>Gator Band</b><br>Lindsey Aumann</td>
                <td style="vertical-align:top"><b>Pi Kappa Phi</b><br>Nicholas Albury</td>
                <td style="vertical-align:top"><b>UF Pre-Physician Assistant Association</b><br>Nainika Kumar<br>Hannah Hide</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Chi Omega</b><br>Alyssa Alalouf<br>Sarah Daly</td>
                <td style="vertical-align:top"><b>Hearts for the Homeless</b><br>Maria Serafim<br>Miranda Omenaca</td>
                <td style="vertical-align:top"><b>Pi Lambda Phi</b><br>Jacob Needle<br>Logan Clyatt</td>
                <td style="vertical-align:top"><b>UFAA: Florida Cicerones</b><br>Jennifer Lena<br>Molly Lantinberg</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Chi Phi</b><br>James Greco<br>Jacob Rothenberg</td>
                <td style="vertical-align:top"><b>Hispanic Student Association</b><br>Daylenis Clavijos</td>
                <td style="vertical-align:top"><b>Pre-Legal Honor Society</b><br>Jordan Edelman<br>Jacy Grosz</td>
                <td style="vertical-align:top"><b>Zeta Beta Tau</b><br>Coby Farhi</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Class Councils</b><br>Daniel Gallup</td>
                <td style="vertical-align:top"><b>Indian Student Association</b><br>Kamakshi Dhillon</td>
                <td style="vertical-align:top"><b>Preview Staff</b><br>Daisy Facio-Aguiniga</td>
                <td style="vertical-align:top"><b>Zeta Tau Alpha</b><br>Wylie Nelson<br>Ekaterina Ivanova</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>College of Nursing</b><br>Lauren Sevilla<br>Brandy Morales</td>
                <td style="vertical-align:top"><b>Kappa Alpha Order</b><br>John Kuebel</td>
                <td style="vertical-align:top"><b>Public Health and Health Professions</b><br>Alyssa Dellutri<br>Summer Stavrevski</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>College of Pharmacy</b><br>Cristina Alberti<br>Nicole Larusso</td>
                <td style="vertical-align:top"><b>Kappa Alpha Theta</b><br>Danielle Burstein<br>Madalyn Pensabene</td>
                <td style="vertical-align:top"><b>Sigma Alpha</b><br>Peyton Corbin</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Cupcakes for a Cure</b><br>Kylie Sartalamacchia</td>
                <td style="vertical-align:top"><b>Kappa Delta</b><br>Mia Fisher<br>Celeste Baro</td>
                <td style="vertical-align:top"><b>Sigma Alpha Epsilon</b><br>Parker McHenry<br>Paris Mihaj</td></tr>
              <tr><td><br></td></tr>
              <tr>
                <td style="vertical-align:top"><b>Delta Delta Delta</b><br>Kaitlyn Roberts<br>Zoe Estberg</td>
                <td style="vertical-align:top"><b>Kappa Kappa Gamma</b><br>Kendall Tabachnik<br>Meredith Fortini</td>
                <td style="vertical-align:top"><b>Sigma Chi</b><br>Alan Ruiz</td></tr>


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
