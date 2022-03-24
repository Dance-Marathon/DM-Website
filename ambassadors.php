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
  .tabs {
		overflow: hidden;
		border-bottom: 2px solid black;
		width: 70%;
		margin-left: 15%;
		background-color: none;
		display: flex;
		justify-content: space-evenly;
		margin-bottom: 3%;
  }
  .subtabs {
    background-color: none;
		font-weight: 700;
		color: black;
		float: left;
		border: none;
		outline: none;
		cursor: pointer;
		width: 33%;
		padding: 14px 16px;
		transition: 0.1s;
  }
  .subtabs button:active {
    background-color: none;
    color: #F79B63;
		border-bottom: 2px solid #F79B63;
		height: 50px;
  }
</style>

<div class="page-heading parallax delegates">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1 style="font-family: 'Metropolis';
          font-style: bold;
          font-weight: 700;
          font-size: 48px;
          line-height: 44px;">AMBASSADORS</h1>
       </div>
     </div>
   </div>
 </div>
</div>

<div class="page-content">
	<div class="container">
		<div class="row">
      <?php if ($status == "open") { ?>
      <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs tabs" role="tablist">
          <li role="presentation" class="active subtabs"><a href="#become-a-delegate" aria-controls="become-a-delegate" role="tab" data-toggle="tab" style="color:black;
              font-family: 'Metropolis';
              font-style: normal;
              font-weight: 700;
              font-size: 25px;
              line-height: 25px;
              text-align: center;">BECOME AN AMBASSADOR</a></li>
          <li role="presentation" class="subtabs"><a href="#starting-a-team" aria-controls="starting-a-team" role="tab" data-toggle="tab" style="color:black;
              font-family: 'Metropolis';
              font-style: normal;
              font-weight: 700;
              font-size: 25px;
              line-height: 25px;
              text-align: center;">STARTING A TEAM</a></li>
          <li role="presentation" class="subtabs"><a href="#ambassadors" aria-controls="ambassadors" role="tab" data-toggle="tab" style="color:black;
              font-family: 'Metropolis';
              font-style: normal;
              font-weight: 700;
              font-size: 25px;
              line-height: 25px;
              text-align: center;">2022 AMBASSADORS</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="become-a-delegate">


            <h3 style="color:black">What is an Ambassador?</h3>
            <p style="color:black">Organization Ambassadors serve as a liaison between Dance Marathon and their respective organization.</p>

            <p style="color:black">Organization Ambassadors will attend weekly meetings to receive information to relay to their Organizations and to work on professional and personal development. These meetings will allow Ambassadors to think creatively and brainstorm together to create new ways to incentivize and engage their members in Dance Marathon. Each Organization will be assigned a Fundraising & Organization Development Captain to work with on Organization involvement and fundraising throughout the year.<P>

            <p style="color:black">Click <a href="assets/PDFs/Ambassador Guidelines 2021.pdf" target="_blank">here</a> to view the 2022 Ambassador Guidelines</p>

              <h3 style="color:black">Responsibilities:</h3>
              <ul style="color:black">
                <li>Recruit and motivate members of their Organization to fundraise and participate</li>
                <li>Encourage members to get involved with Dance Marathon</li>
                <li>Inform all Organization members of events, registration dates, fundraising incentives, etc.</li>
                <li>Work with the Family Relations Team to engage with their respective Miracle Family throughout the year</li>
                <li>Host a minimum of one Hospitality Night or fundraising event</li>
                <li>Be in attendance at various Dance Marathon events during the year (i.e. Miracles in Color 5K, Moralloween, Miracle Family Events, etc.)</li>
              </ul>


              <h3 style="color:black">Responsibilities during the Main Event:</h3>
              <ul style="color:black">
                <li>Help assign Dancer buddies prior to the Event for each Dancer</li>
                <li>Work with their Fundraising and Organization Development Captain to encourage and help Dancers fundraise at the Event</li>
                <li>Relay important information to Dancers throughout the Event</li>
                <li>Be available for Dancers in case of emergency</li>
              </ul>

              <b style="color:#014083">Ambassadors are also encouraged to be Dancers if they choose and are eligible for free Dancer Registration upon meeting expectations of the program.</b>
          </div>

          <div style="color:black" role="tabpanel" class="tab-pane fade" id="starting-a-team">
            <p style="color:black">To participate as an Organization in Dance Marathon, you must register your team each year. First, check to make sure your team is not already registered. To register a new team, please complete the following steps:</p>
            <ol style="color:black">
              <li>Go to floridadm.org and click “Donate.”</li>
              <li>Scroll down and click “Register Now.”</li>
              <li>Input your information and create a new Organization.</li>
              <li>Fill out the proceeding information for your team and once your team has been registered, your members can join your team by following the steps and joining your existing Organization team.</li>
            </ol>
            <p style="color:black">Each team will need an Ambassador to represent them. Please email the Fundraising & Organizational Development Overall, Clayton Gaulding, at <a href=mailto:cgaulding@floridadm.org>cgaulding@floridadm.org</a> to inform him you have created a team and will be serving as the Ambassador or have plans of selecting an Ambassador in the near future. The Fundraising & Organizational Development Overall will not be able to get in contact with you unless you email him to let him know you started a team.</p>
          </div>
          
          <div role="tabpanel" class="tab-pane fade" id="ambassadors" style="color:black">

          <table style="width:100%; table-layout: fixed">
            <tbody>
              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Alpha Chi Omega</b><br>Grace Tyler<br></td>
                <td><b>Alpha Delta Pi</b><br>Chloe Hazelett<br>Courtney White</td>
                <td><b>Alpha Epsilon Phi</b><br>Olivia Steinman<br>Rachel Staple</td>
                <td><b>Alpha Epsilon Pi</b><br>Ari Kulka<br>Ross Unger</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Alpha Gamma Rho</b><br>Dillon Rodriguez<br></td>
                <td><b>Alpha Omicron Pi</b><br>Sydney Mandell<br></td>
                <td><b>Alpha Phi</b><br>Abby Coleman<br>Nikki Perrino</td>
                <td><b>Alpha Tau Omega</b><br>Ciaran O'Rourke<br></td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>AMSA</b><br>Hannah Pardo <br>Taylor Tompkins</td>
                <td><b>Beta Theta Pi</b><br>Enzo Benkiran<br>Grant Schmid</td>
                <td><b>Catholic Gators</b><br>Diana Brunner<br>Gisela Rojas-Carreno</td>
                <td><b>Chi Omega</b><br>Sara Matos<br>Sarah Daly</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Chi Phi</b><br>Jacob Rothenberg<br>Sean Kurvers</td>
                <td><b>College of Nursing</b><br>Brandy Morales<br>Samantha Bloom</td>
                <td><b>College of Pharmacy</b><br>Jordyn Wiener<br>Karla Hernandez Martinez</td>
                <td><b>Delta Chi</b><br>Josh Rosner</td>
                
              <tr><td><br></td></tr>
              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Delta Delta Delta</b><br>Elizabeth Wainer<br>Kate Caranante</td>
                <td><b>Delta Gamma</b><br>Abigail Search<br>Kara Motsch</td>
                <td><b>Delta Nu Zeta</b><br>Eliza Thorn<br>Natalie Hayek</td>
                <td><b>Delta Phi Epsilon</b><br>Irina Frangos<br>Sydney Weisman</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Delta Sigma Phi</b><br>CJ Martin<br>Daniel Dvorak</td>
                <td><b>Delta Tau Delta</b><br>Edgard Miranda<br>John Fry </td>
                <td><b>Delta Upsilon</b><br>Alexander Monteagudo</td>
                <td><b>Delta Zeta</b><br>Julia Musso<br>Julia White</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Dream Team</b><br>Kevin Avaiya<br>Saketh Damera</td>
                <td><b>EMPRESS</b><br>Dartaisha Bass<br>Thanh Do</td>
                <td><b>Footprints: Buddy and Support Program</b><br>Chloe Caylor<br>Molly O'Neill</td>
                <td><b>Gamma Eta</b><br>Natalia Perez</td>
                
              <tr><td><br></td></tr>
               <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Gamma Phi Beta</b><br>Emma Nelson<br>Julia Rocco<br>Shannon Jones</td>
                <td><b>Hispanic Student Association</b><br>Daniela Sanchez</td>
                <td><b>Kappa Alpha Order</b><br>Nick Soviero</td>
                <td><b>Kappa Alpha Theta</b><br>Brianne Fabiano<br>Taylor Ehrlich</td>
                
              <tr><td><br></td></tr>
              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Kappa Delta</b><br>Aliyah Formont<br>Olivia Leeper</td>
                <td><b>Kappa Kappa Gamma</b><br>Angelina Del Toro<br>Bianca Hong </td>
                <td><b>Kappa Phi Epsilon</b><br>Glen Dizon<br>Mackey Jones</td>
                <td><b>Kappa Sigma</b><br>Nolan Hensley </td>  
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Lambda Chi Alpha</b><br>Lucas Pereira<br>Jason Davis </td>
                <td><b>Nina Karlinsky Memorial Team</b><br>Ronald Rodriguez</td>
                <td><b>Omega Phi Alpha</b><br>Brooke Peck</td>
                <td><b>Phi Eta Sigma Honor Society</b><br>Isabella Guzzo</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Phi Delta Theta</b><br>Griffin Lamp <br>Sam Zimelman</td>
                <td><b>Phi Kappa Tau</b><br>Alessaandro Perugini</td>
                <td><b>Phi Mu</b><br>Emma Tullio<br>Samantha Butler</td>
                <td><b>Pi Beta Phi</b><br>Isabella Morales<br>Morgan Emmi</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Pi Kappa Alpha</b><br>Conor Bowen <br>John Dunphy </td>
                <td><b>Pi Kappa Phi</b><br>Ben Jenkins </td>
                <td><b>Pi Lambda Phi</b><br>Dan Buonadonna<br>Corey Loss </td>
                <td><b>Pre-Legal Honor Society</b><br>Julia DuPuye</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Preview Staff</b><br>Angelina Del Toro</td>
                <td><b>Sigma Alpha</b><br>Peyton Corbin </td>
                <td><b>Sigma Alpha Epsilon</b><br>Nick Miller<br>Paris Mihaj</td>
                <td><b>Sigma Chi</b><br>Connor Short</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Sigma Kappa</b><br>Marlee Tobik</td>
                <td><b>Sigma Nu</b><br>Kameron Turner </td>
                <td><b>Sigma Phi Epsilon</b><br>Alexander Briones</td>
                <td><b>Society of Women Engineers</b><br>Bailey Ballard<br>Jazmine Sandoval</td>              
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">               
                <td><b>Tau Epsilon Phi</b><br>Teo Resnik</td>
                <td><b>Tau Kappa Epsilon</b><br>Jorge Valarezo</td>
                <td><b>Theta Alpha</b><br>Claire Schreiber<br>Julia Quinones</td>
                <td><b>Theta Chi</b><br>Gabriel Jewelewicz</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Theta Tau</b><br>Gabriela Rodrigo<br>Jaren Palmasani</td> 
                <td><b>Tone Def A Cappella</b><br>Georgina Vitola</td>
                <td><b>UF Honors Program</b><br>Claudia Elena</td>
                <td><b>UF Pre-Physician Assistant Association</b><br>Tayna Moreira</td>
              <tr><td><br></td></tr>

              <tr style="vertical-align:top; color:black;font-family: 'Montserrat';font-style: normal;font-weight: 500;font-size: 25px;line-height: 25px;">
                <td><b>Zeta Beta Tau</b><br>Coby Farhi </td>  
                <td><b>Zeta Tau Alpha</b><br>Jessica Halvorsen<br>Shira Isaak</td>
              <tr><td><br></td></tr>                               

            </tbody>
        </table>
      </div>

      <?php } else { echo 'This page is currently closed.'; } ?>
    </div>
  </div>
</div>
</div>

<?php include("includes/foot.php"); ?>
