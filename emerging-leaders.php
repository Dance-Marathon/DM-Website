<?php
$status = "open";
$GLOBALS['page_title'] = 'Emerging Leaders Program | Students | Dance Marathon at UF';
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

   $('.emergingleaders').append('<tr>');

   $.getJSON(url, function(data) {

       var entry = data.feed.entry;

		var counter = 0;

       $(entry).each(function() {

        if (!($(entry)[1].gsx$emergingleaders.$t.includes("n/a"))) {
            if(counter < 6) {
              $('.emergingleaders').append('<td>' + this.gsx$emergingleaders.$t + '</td>');
			  counter++;
            } else {
                $('.emergingleaders').append('</tr>'); 
                $('.emergingleaders').append('<tr>');  
                $('.emergingleaders').append('<td>' + this.gsx$emergingleaders.$t + '</td>');
                counter = 1;
            }
          }    
       });
   });
   $('.emergingleaders').append('</tr>');
   
</script>

<div class="page-heading parallax elp">
 <div class="inner-wrapper">
	 <div class="container">
		 <div class="row">
			 <div class="col-md-12">
				 <h1>Emerging Leaders Program</h1>
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
						<li><a href="/applications">Applications</a></li>
						<li><a href="/alumni">Alumni</a></li>
						<li><a href="/ambassadors">Ambassadors</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a class="active">Emerging Leaders</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a href="/kirstynskrew">Kirstyn's Krew</a></li>
					</ul>
			 </div>
		 </div>
		 <div class="col-md-8 col-md-push-1">		 
<h3>Program Description</h3>
<p>The Dance Marathon Emerging Leaders Program aims to cultivate the leadership skills of new members of Dance Marathon at the University of Florida. The program strives to engage students who have a passion for helping others and who believe in our fight for a future without childhood illness. The Dance Marathon Emerging Leaders Program is a unique first step for students wanting to join the Dance Marathon movement.</p>
<p>Members of Dance Marathon Emerging Leaders Program will attend monthly general body meetings as well as weekly small group meetings. At general body meetings, Emerging Leaders will have the opportunity to learn more about the goals and efforts of Dance Marathon, hear inspiring stories from our Miracle Families, and gain exposure to prominent speakers from the University of Florida and the Gainesville community. Emerging Leaders will join small groups of around twenty students who will have weekly meetings to work on projects and support each other through personal development and fundraising efforts throughout the year.</p>
<p>Emerging Leaders will be given mentors from Dance Marathon’s various Captain Teams, providing them with resources to succeed inside and outside of the organization. We will work together with Emerging Leaders to help them develop within our organization and to receive feedback on how we can improve the Dance Marathon program. </p>
<h3>2019 Emerging Leaders</h3>
<p> Congratulations to our the members of 2019 Emerging Leaders Program! </p>
<table style="width:100%">
    <tbody class="emergingleaders"> </tbody>
</table>
<!--<table style="width:100%">
<tr>
	<td>	Abigail Boeneman	</td>
	<td>	Adam Rosenblum	</td>
	<td>	Adrian Mendoza	</td>
	<td>	Adriana Laine	</td>
	<td>	Aidan Evans	</td>
	<td>	Alex Goldman	</td>
</tr>
 <tr>
	 <td>	Alexandra Guerra	</td>
	 <td>	Alexandra Heyer	</td>
	 <td>	alexia lugo	</td>
	 <td>	Alivia Baxendell	</td>
	 <td>	Allison Brummer	</td>
	 <td>	Alyssa Morford	</td>
</tr>
<tr>
	<td>	Amanda Fentress	</td>
	<td>	Amanda Wichterman	</td>
	<td>	Ana Ibarrola	</td>
	<td>	Angelica Byrd	</td>
	<td>	Annabelle Groux	</td>
	<td>	Ansley Jones	</td>
</tr>
<tr>
	<td>	Anthony Rahbany	</td>
	<td>	Anya Wiener Benitez	</td>
	<td>	Ariel Gordon	</td>
	<td>	Ashia Hightower	</td>
	<td>	Ashley Taylor	</td>
	<td>	Ashton Greusel	</td>
</tr>
<tr>
	<td>	Aubrey Kilduff	</td>
	<td>	Ava Daly	</td>
	<td>	Bailey Petty	</td>
	<td>	Blakely Paymani	</td>
	<td>	Breann Barone	</td>
	<td>	Bridget Hartig	</td>
</tr>
<tr>
	<td>	Brittany Steinfeld	</td>
	<td>	Brooklyn Nave	</td>
	<td>	Caden Cress	</td>
	<td>	Caitlyn Pinto	</td>
	<td>	Campbell Jones	</td>
	<td>	Carli Sley	</td>
</tr>
<tr>
	<td>	Carly Beverly	</td>
  <td>	Carly Swanson	</td>
  <td>	Cayla Epstein	</td>
  <td>	Charles Hang	</td>
  <td>	Chelsea Caplan	</td>
  <td>	Chloe Judge	</td>
</tr>
<tr>
	<td>	Chris Stallings	</td>
	<td>	Clayton Gaulding	</td>
	<td>	Colette Bialick	</td>
	<td>	Collin Walsh	</td>
	<td>	Corey Reeves	</td>
	<td>	Coryell Dreyer	</td>
</tr>
<tr>
	<td>	Courtney Crenshaw	</td>
	<td>	Dalena Nguyen	</td>
	<td>	Daniela Suarez	</td>
	<td>	Danielle Silva	</td>
	<td>	Daphne Furman	</td>
	<td>	Dayanis Oliva	</td>
</tr>
<tr>
	<td>	Deep PATEL	</td>
  <td>	Delaney Czworka	</td>
  <td>	Dina Modlin	</td>
  <td>	Dominic Salamone	</td>
  <td>	Dylan Nugent	</td>
  <td>	Eliezer Cruz	</td>
</tr>
<tr>
	<td>	Elisabeth (Lizzie) Lewalski	</td>
  <td>	Emily Karas	</td>
  <td>	Emily Myers	</td>
  <td>	Eric De Rezende	</td>
  <td>	Ethan Kramer	</td>
  <td>	Faith Freeman	</td>
</tr>
<tr>
	<td>	Francesca Ycaza	</td>
	<td>	Gabriela Garcia	</td>
	<td>	Gabriela Hernandez	</td>
	<td>	Grace Hogan	</td>
	<td>	Grace Tyler	</td>
	<td>	Gracie Curran	</td>
</tr>
<tr>
	<td>	Gregory Buettner	</td>
	<td>	Haley Esperanza	</td>
	<td>	Haley Spooner	</td>
	<td>	Hannah Cohen	</td>
	<td>	Hannah Howell	</td>
	<td>	Hollyann Brown	</td>
</tr>
<tr>
	<td>	Houston Barenholtz	</td>
  <td>	Jack Braverman	</td>
  <td>	Jack Brennan	</td>
  <td>	Jack Kirsch	</td>
  <td>	Jacob Warchola	</td>
  <td>	Jake Peter	</td>
</tr>
<tr>
	<td>	Jared Herbert	</td>
	<td>	Jazlyn Edwards	</td>
	<td>	Jenna Whitney	</td>
	<td>	Jennifer Gilby	</td>
	<td>	Jillian Hersman	</td>
	<td>	Joel Rios-Rodriguez	</td>
</tr>
<tr>
	<td>	John Hermes	</td>
	<td>	Jonathan Fernandez	</td>
	<td>	Jonathan Maya	</td>
	<td>	Jonathan Trilla	</td>
	<td>	Jonquil (Jonny) Sekula	</td>
	<td>	Joseph Gage BonJorn	</td>
</tr>
<tr>
	<td>	Joseph Lavoie	</td>
	<td>	Julia Cordover	</td>
	<td>	Juliana Licata	</td>
	<td>	Juliana Tragakis	</td>
	<td>	Kaiya-rai Sarmenta	</td>
	<td>	Karis Perusek	</td>
</tr>
<tr>
	<td>	Karli Kimbrough	</td>
	<td>	Katherine Powell	</td>
	<td>	Kathryn (Katie) Herstik	</td>
	<td>	Kathryn Byers	</td>
	<td>	Kathryn Quintero	</td>
	<td>	Katie Puccio	</td>
</tr>
<tr>
	<td>	Kayley Hamilton	</td>
	<td>	Kelsy Coughlin	</td>
	<td>	Kendall Tabachnik	</td>
	<td>	Kendra Hall	</td>
	<td>	Kira Pratico	</td>
	<td>	Krista Stevens	</td>
</tr>
<tr>
	<td>	Landry Baliton	</td>
  <td>	Lauren Bouskila	</td>
  <td>	Lauren Hetrzroni	</td>
  <td>	Lauren Toledo	</td>
  <td>	Leacy Burton	</td>
  <td>	Leighton Scroggie	</td>
</tr>
<tr>
	<td>	Lilli Levinson	</td>
	<td>	Lilliam Drenth	</td>
	<td>	Lily Mild	</td>
	<td>	Luana Souza	</td>
	<td>	Lucia Costas Velasco	</td>
	<td>	Luis De La Rosa	</td>
</tr>
<tr>
	<td>	Luz Mata	</td>
  <td>	Lyndi George	</td>
  <td>	Mackenzie Bender	</td>
  <td>	Maddie Abdoney	</td>
  <td>	Maddy Michielssen	</td>
  <td>	Madison Artzt	</td>
</tr>
<tr>
	<td>	Madison Camporese	</td>
	<td>	Madison Duncanson	</td>
	<td>	Madison Wnuk	</td>
	<td>	mariana maciel	</td>
	<td>	Mariana Monforte	</td>
	<td>	Mark Pennington	</td>
</tr>
<tr>
	<td>	Mary Kate Urbanski	</td>
	<td>	Matias Villanueva	</td>
	<td>	Matthew Comeau	</td>
	<td>	Matthew Whitman	</td>
	<td>	Matthew Wroblewski	</td>
	<td>	Maxwell Gravenstine	</td>
</tr>
<tr>
	<td>	Melissa Tempest	</td>
  <td>	Michael Connelly	</td>
  <td>	Michael Contu	</td>
  <td>	Michael Sivilli	</td>
  <td>	Michelle Fernandez-Valle	</td>
  <td>	Miguelangel Ruiz	</td>
</tr>
<tr>
	<td>	Molly Lantinberg	</td>
  <td>	Morgan Hilton	</td>
  <td>	Natalia Guerra	</td>
  <td>	Natalia Thornton	</td>
  <td>	Nawaf Alay	</td>
  <td>	Nhuy Nguyen	</td>
</tr>
<tr>
	<td>	Nicole Sanborn	</td>
  <td>	Noah Denker	</td>
  <td>	Olivia Panzica	</td>
  <td>	Rachel Early	</td>
  <td>	Rachel Friedman	</td>
  <td>	Rachel Kelly	</td>
</tr>
<tr>
	<td>	Rachel Pohl	</td>
  <td>	Raegan Fink	</td>
  <td>	Rajel Wolcoff	</td>
  <td>	Ram Desai	</td>
  <td>	Rebecca Allison	</td>
  <td>	Rebecca Schlafke	</td>
</tr>
<tr>
	<td>	Samuel Speizman	</td>
  <td>	Sarah Blankenship	</td>
  <td>	Sarah Garavaglia	</td>
  <td>	Sarah Greep	</td>
  <td>	Sarah Sheerer	</td>
  <td>	Sarah Voskamp	</td>
</tr>
<tr>
	<td>	Shannon Chamberlain	</td>
	<td>	Shayna Cohen	</td>
	<td>	Sheelagh Dunn	</td>
	<td>	Skye Dougan	</td>
	<td>	Sophie Charlson	</td>
	<td>	Stephanie Kokeas	</td>
</tr>
<tr>
	<td>	Susanna van de Graaf	</td>
	<td>	Sydney Jimenez	</td>
	<td>	Sydney Miller	</td>
	<td>	Sydney Patterson	</td>
	<td>	Sydnie Winder	</td>
	<td>	Taryn Hibshman	</td>
</tr>
<tr>
	<td>	Tej Patel	</td>
	<td>	Thomas McGurk	</td>
	<td>	Valentina Nunez	</td>
	<td>	Valerie Jones	</td>
	<td>	Victor Rivera	</td>
	<td>	Vinny Savarino	</td>
</tr>
<tr>
	<td>	Yasmine Gillespie	</td>
  <td>	Zach Frielich	</td>
  <td>	Zachary Hahn	</td>
  <td>	Zachary Perez	</td>
  <td>	Zayne Moore	</td>
  <td>	Zoie Danyali	</td>
</tr>
<tr>
	<td>	Rebekah Shields 	</td>
</tr>
</table>
					 </div>
				 </div>
			 </div>
		 </div>-->

</div>
</div>
</div>

<?php include("includes/foot.php"); ?>
