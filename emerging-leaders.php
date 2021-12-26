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
            if(counter < 4) {
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
<style>
.page-heading.parallax.elp {
background-image: url("/assets/images/BannerPhotos21/Charles-H-31.jpg");
}
</style>
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
						<li><a href="/alumni">Alumni</a></li>
						<li><a href="/ambassadors">Ambassadors</a></li>
						<li><a href="/applications">Applications</a></li>
						<li><a href="/captain-teams">Captain Teams</a></li>
						<li><a href="/dancers">Dancers</a></li>
						<li><a class="active">Emerging Leaders</a></li>
						<li><a href="/kirstynskrew">Kirstyn's Krew</a></li>
						<li><a class="organizations">Organizations</a></li>
						<li><a href="/service">Service</a></li>

					</ul>
			 </div>
		 </div>
		 <div class="col-md-8 col-md-push-1">
<h3>Program Description</h3>
<p> <b>The Emerging Leaders Program</b> aims to cultivate the leadership skills of new members of the Dance Marathon community by providing hands-on activities and education about Dance Marathon at the University of Florida and Children's Miracle Network. The program strives to engage students who have a passion for helping others and who believe in our fight for a future without childhood illness.</p>
<p>Members of the Emerging Leaders Program will attend weekly small group meetings and monthly general body meetings. Throughout their small group meetings, Emerging Leaders will focus on: completing diverse projects that uplift and inspire the Dance Marathon community, shadowing various Captain Teams present throughout Dance Marathon, expanding their knowledge and personal fundraising efforts through resources that will allow them to succeed inside and outside of Dance Marathon, and participating in bonding with like minded peers. At general body meetings, Emerging Leaders will have the opportunity to learn more about the goals and efforts of Dance Marathon, hear inspiring stories from our Miracle Families, and gain exposure to prominent speakers from the University of Florida and the Gainesville community.</p>
<p>During the Main Event, Emerging Leaders will have the ability to use the skills they’ve learned throughout the year to participate in various leadership opportunities. </p>
<p>All in all, the Emerging Leaders Program aspires to provide students wanting to join the Dance Marathon movement with a unique and immersive learning opportunity that allows students to instill positive change within the organization while also learning about the Dance Marathon community as a whole.</p>
<h3>2022 Emerging Leaders</h3>
<p> Congratulations to our the members of 2022 Emerging Leaders Program! </p>
<table style="width:100%">
    <tbody class="emergingleaders"> </tbody>
</table>
<table style="width:100%">
<tr>
	<td>	Abbey Lantinberg	</td>
	<td>	Abby Cohen	</td>
	<td>	Abigail Scharber	</td>
	<td>	Adel Acs	</td>
	<td>	Adele Dorion	</td>
	<td>	Adrianna Figueroa	</td>
</tr>
 <tr>
	 <td>	Aidan Copeland	</td>
	 <td>	Alana Toby	</td>
	 <td>	Alejandro Ramirez	</td>
	 <td>	Alexandra Bravo	</td>
	 <td>	Alexandra Longa	</td>
	 <td>	Alina Kershner	</td>
</tr>
<tr>
	<td>	Alissa Serovich	</td>
	<td>	Allie Shockley	</td>
	<td>	Allison Haley	</td>
	<td>	Allison Volmer	</td>
	<td>	Alyssa Liebegott	</td>
	<td>	Amanda Veltri	</td>
</tr>
<tr>
	<td>	Andrew Bass	</td>
	<td>	Andrew Neclerio	</td>
	<td>	Andrew Ruales	</td>
	<td>	Anna Garst	</td>
	<td>	Anna Kate Smith	</td>
	<td>	Ansley Goldstein	</td>
</tr>
<tr>
	<td>	Ariana Martinez	</td>
	<td>	Ashley Dankese	</td>
	<td>	Ava Carter	</td>
	<td>	Ava Dinow	</td>
	<td>	Ben Zion	</td>
	<td>	Benjamin Kirsch	</td>
</tr>
<tr>
	<td>	Benjamin Tempest	</td>
	<td>	Bianca Arocha	</td>
	<td>	Brian Beckman	</td>
	<td>	Brielle Serovich	</td>
	<td>	Bronson Allemand	</td>
	<td>	Cameron Slade	</td>
</tr>
<tr>
	<td>	Camila Acevedo	</td>
  <td>	Camille Eyman	</td>
  <td>	Camryn Boyette	</td>
  <td>	Caroline Bush	</td>
  <td>	Catherine Zykoski	</td>
  <td>	Chloe Jezerinac	</td>
</tr>
<tr>
	<td>	Christian Hunter	</td>
	<td>	Clarissa Johnston	</td>
	<td>	Cole Carpinteri	</td>
	<td>	David Zaibert	</td>
	<td>	Diana Stepankovskaya	</td>
	<td>	Eden Rickmers	</td>
</tr>
<tr>
	<td>	Elise Heidlebaugh	</td>
	<td>	Eliza Greenwald	</td>
	<td>	Ellen Rowland	</td>
	<td>	Emily Valenza	</td>
	<td>	Emma Ackerman	</td>
	<td>	Emma Silverman	</td>
</tr>
<tr>
	<td>	Emma Turba	</td>
  <td>	Erin Partlow	</td>
  <td>	Flynn Baliton	</td>
  <td>	Gabriella Williams	</td>
  <td>	Gabrielle Goldberg	</td>
  <td>	Georgette Suarez	</td>
</tr>
<tr>
	<td>	Gina Fimiano	</td>
  <td>	Griffin Boyd	</td>
  <td>	Hailey Hartle	</td>
  <td>	Haley Bohm	</td>
  <td>	Hensley Smith	</td>
  <td>	Isabella Fogarty	</td>
</tr>
<tr>
	<td>	Jackson Bond	</td>
	<td>	Jacob Borukhin	</td>
	<td>	Jacob Veeder	</td>
	<td>	Jason Bravo	</td>
	<td>	Jayden Broome	</td>
	<td>	Joey DiMario	</td>
</tr>
<tr>
	<td>	Joey Sheiner	</td>
	<td>	John Jackel	</td>
	<td>	Jordan Cohan	</td>
	<td>	Jordan Hartman	</td>
	<td>	Jordyn Smith	</td>
	<td>	Joshua Waters	</td>
</tr>
<tr>
	<td>	Julia Boas	</td>
  <td>	Juliana Greer	</td>
  <td>	Juliet Bell	</td>
  <td>	Kaitlin Crivello	</td>
  <td>	Kate Wagner	</td>
  <td>	Katie Perez	</td>
</tr>
<tr>
	<td>	Kelsey Johnson	</td>
	<td>	Kiki Innes	</td>
	<td>	Kristen Russo	</td>
	<td>	Lauren Howell	</td>
	<td>	Lauren Maya	</td>
	<td>	Lauren Vonhof	</td>
</tr>
<tr>
	<td>	Leah Richard	</td>
	<td>	Leamarie Mattia	</td>
	<td>	Leif Holmstrom	</td>
	<td>	Lily Dechen	</td>
	<td>	Lily Weiss	</td>
	<td>	Logan Black	</td>
</tr>
<tr>
	<td>	Lucas Alvarado	</td>
	<td>	Luke Broding	</td>
	<td>	Maclane Fisher	</td>
	<td>	Macy Monsour	</td>
	<td>	Macy Thompson	</td>
	<td>	Madeline Gubbini	</td>
</tr>
<tr>
	<td>	Madison Holmes	</td>
	<td>	Maggie McGuane	</td>
	<td>	Mallory Padgett	</td>
	<td>	Mammoon Sukhera	</td>
	<td>	Mandy Eastwood	</td>
	<td>	Margaret McMahan	</td>
</tr>
<tr>
	<td>	Mary Grace Kelly	</td>
	<td>	Mason Solomon	</td>
	<td>	Michael Behling	</td>
	<td>	Miranda Benjamin	</td>
	<td>	Morgan Francis	</td>
	<td>	Morgan Tafel	</td>
</tr>
<tr>
	<td>	Nadya DeFreitas	</td>
  <td>	Natalie Krupsky	</td>
  <td>	Natalie Sesodia	</td>
  <td>	Nina Fiedler	</td>
  <td>	Olivia Glass	</td>
  <td>	Olivia Knier	</td>
</tr>
<tr>
	<td>	Olivia Udell	</td>
	<td>	Payton Kadivar	</td>
	<td>	Quinn Healy	</td>
	<td>	Rachel Beer	</td>
	<td>	Rachel Rosen	</td>
	<td>	Raquel Alvarado	</td>
</tr>
<tr>
	<td>	Raymond Steinbrecher	</td>
  <td>	Rhyan Tappan	</td>
  <td>	Rocio Santiago	</td>
  <td>	Ryan Boyle	</td>
  <td>	Ryan Magee	</td>
  <td>	Ryan Maze	</td>
</tr>
<tr>
	<td>	Ryan Tweeddale	</td>
	<td>	Sabrina Roizman	</td>
	<td>	Samantha Fink	</td>
	<td>	Samantha Litman	</td>
	<td>	Samantha Robbins	</td>
	<td>	Sara Sugerman	</td>
</tr>
<tr>
	<td>	Savannah Chalmers	</td>
	<td>	Savannah Traub	</td>
	<td>	Scarlett Cooney	</td>
	<td>	Sebastian Russe	</td>
	<td>	Skyler Hayes	</td>
	<td>	Sophe Sokolik	</td>
</tr>
<tr>
	<td>	Sophia Clemmensen	</td>
  <td>	Sophia Linale	</td>
  <td>	Sophia Villaverde	</td>
  <td>	Spencer Gary	</td>
  <td>	Stephanie Buell	</td>
  <td>	Taylor Benson	</td>
</tr>
<tr>
	<td>	Taylor Callaway	</td>
  <td>	Timothy Sterling	</td>
  <td>	Tyller Bauer	</td>
  <td>	Valeria Ortega	</td>
  <td>	Vanessa Hurtado	</td>
  <td>	Veronica Nobles	</td>
</tr>
<tr>
	<td>	Will Eckert	</td>
  <td>	Will Steed	</td>
  <td>	Zachary Elowitch	</td>
  <td>	Zoe Robert	</td><!--
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
	<td>	Rebekah Shields 	</td> -->
</tr>
</table>
					 </div>
				 </div>
			 </div>
		 </div>

</div>
</div>
</div>

<?php include("includes/foot.php"); ?>
