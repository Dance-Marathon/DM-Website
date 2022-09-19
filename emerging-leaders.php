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
<p> <b>The Emerging Leaders Program</b> aims to cultivate the leadership skills of new members of the Dance Marathon community by providing hands-on activities, shadowing opportunities with other captain teams, and education about Dance Marathon at the University of Florida and Children's Miracle Network. The program strives to engage students who have a passion for helping others and who are passionate in our fight for a future without childhood illness.</p>
<p>Members of the Emerging Leaders Program will attend weekly small group meetings and monthly general body meetings. Throughout their small group meetings, Emerging Leaders will focus on completing diverse projects that inspire the Dance Marathon community, expanding their knowledge, leadership, and personal fundraising efforts, and participating in bonding with like-minded peers. At general body meetings, Emerging Leaders will have the opportunity to learn more about the goals and efforts of Dance Marathon, hear inspiring stories from our Miracle Families, and gain exposure to prominent speakers from the University of Florida and the Gainesville community. 
<p>During the Main Event, Emerging Leaders will have the ability to use the skills they’ve learned throughout the year to participate in various leadership opportunities as well as enjoy the Main Event from different perspectives.
<!-- <p>All in all, the Emerging Leaders Program aspires to provide students wanting to join the Dance Marathon movement with a unique and immersive learning opportunity that allows students to instill positive change within the organization while also learning about the Dance Marathon community as a whole.</p> -->
<h3>2023 Emerging Leaders</h3>
<!--<p>The Emerging Leaders Application can be found <a href="https://ufl.qualtrics.com/jfe/form/SV_3TNT3WCljhDOJLw" target="_blank">here</a>. This application will close at <b>5:00 PM EST on Monday, September 12</b>.</p>-->
			 <!--<p>The Emerging Leaders Applications are now closed!</p>-->
<table style="width:100%">
    <tbody class="emergingleaders"> </tbody>
 </table>
<table style="width:100%">
<tr>
	<td>	Abhay Tak	</td>
	<td>	Abhay Warren	</td>
	<td>	Adam Crasnow	</td>
	<td>	Aidan Hall !!! Aleah Henley	</td>
	<td>	Alexa Diamond !!! Alexa Gottlieb	</td>
	<td>	Alexa Ziff	</td>
</tr>
 <tr>
	 <td>	Alexandra Miller	</td>
	 <td>	Alexandria Adler	</td>
	 <td>	Alyssa Fennen	</td>
	 <td>	Amina Mubarak	</td>
	 <td>	Angela Trinh	</td>
	 <td>	Angela Kara Hopkinson	</td>
</tr>
<tr>
	<td>	Angelina Fentress </td>
	<td>	Anna Adams	</td>
	<td>	Ashley James	</td>
	<td>	Ava Fore	</td>
	<td>	Ben Stone	</td>
	<td>	Boyd Nelson	</td>
</tr>
<tr>
	<td>	Breanna Macumber</td>
	<td>	Brooke McQuilken	</td>
	<td>	Brooke Morren	</td>
	<td>	Caelan Brindise	</td>
	<td>	Camden Nolde	</td>
	<td>	Camila Mendoza	</td>
</tr>
<tr>
	<td>	Carly Miller	</td>
	<td>	Caroline Schapansky	</td>
	<td>	Catherine Tyler	</td>
	<td>	Cathryn Miles	</td>
	<td>	Cecilia Coleman	</td>
	<td>	Chelsea Boyer	</td>
</tr>
<tr>
	<td>	Cristyl Rodriguez	</td>
	<td>	Daniela Villarreal	</td>
	<td>	Diana Nguyen	</td>
	<td>	Dylan McCarrick	</td>
	<td>	Eleanor Amoriello	</td>
	<td>	Ella Bray	</td>
</tr>
<tr>
	<td>	Ellie Neal	</td>
  <td>	Emily Brundage	</td>
  <td>	Emily Sanz	</td>
  <td>	Emma Helgeson	</td>
  <td>	Emma Sugarman	</td>
  <td>	Faith Giambalvo	</td>
</tr>
<tr>
	<td>	Gabriela Verez	</td>
	<td>	Gabriella Luna	</td>
	<td>	Gabriella Smith	</td>
	<td>	Grace Anderson	</td>
	<td>	Grace Carreno	</td>
	<td>	Grace Krantzberg	</td>
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
	<td>	Grace Peters	</td>
  <td>	Grace Press	</td>
  <td>	Grant Collins	</td>
  <td>	Gregory Cohen	</td>
  <td>	Gregory Wareham II	</td>
  <td>	Hailea Herrera	</td>
</tr>
<tr>
	<td>	Hailey Petriccione	</td>
  <td>	Haley Jones	</td>
  <td>	Hannah Ross	</td>
  <td>	Harrison Winton	</td>
  <td>	Hilary Taylor	</td>
  <td>	Hollyn O'Brien	</td>
</tr>
<tr>
	<td>	Ian Perry	</td>
	<td>	Inaya Siddiqui	</td>
	<td>	Isabela Perdomo	</td>
	<td>	Isabella Kabacinski	</td>
	<td>	Isabella Sergeant	</td>
	<td>	Isabella Spagnolo	</td>
</tr>
<tr>
	<td>	Isabelle Ballantine	</td>
	<td>	Jack Broseman	</td>
	<td>	Jack Vitchock	</td>
	<td>	Jadelyn Daniels	</td>
	<td>	James Wahl	</td>
	<td>	Janelle Sumbeling	</td>
</tr>
<tr>
	<td>	Jaxon Russell	</td>
  <td>	Jenna Benjamin	</td>
  <td>	Jenna Stanley	</td>
  <td>	Jennifer Gardner	</td>
  <td>	Jeremy Marks	</td>
  <td>	Jessica Borowski	</td>
</tr>
<tr>
	<td>	Joah Levine	</td>
	<td>	Jordan Kier	</td>
	<td>	Jordyn Hannum	</td>
	<td>	Joy Johnson	</td>
	<td>	Juliana Martino	</td>
	<td>	Kaden Powell	</td>
</tr>
<tr>
	<td>	Kate Bass	</td>
	<td>	Kate Caskey	</td>
	<td>	Kate Ise	</td>
	<td>	Katerina Karamanis	</td>
	<td>	Katherine Nessa	</td>
	<td>	Kayleigh Sullivan	</td>
</tr>
<tr>
	<td>	Kendall Wilson	</td>
	<td>	Kylie Warsaw	</td>
	<td>	Laynee Plawa	</td>
	<td>	Liam Berko	</td>
	<td>	Liam Pattison	</td>
	<td>	Lillian Ghozali	</td>
</tr>
<tr>
	<td>	Lilliana  Remilliard	</td>
	<td>	Lily Frank	</td>
	<td>	Lindsey Davis	</td>
	<td>	London Taylor	</td>
	<td>	Lucy Lopate	</td>
	<td>	Mackenzie Gale	</td>
</tr>
<tr>
	<td>	Madylin Morse	</td>
	<td>	Makenzie Cole	</td>
	<td>	Mallorie Watson	</td>
	<td>	Mallory Canavan	</td>
	<td>	Marissa Zuppa	</td>
	<td>	Max Leach	</td>
</tr>
<tr>
	<td>	Maya Vaidya	</td>
  <td>	Megan Sheehan	</td>
  <td>	Meredith Brown	</td>
  <td>	Mia Filoramo	</td>
  <td>	Morgan Mayhann	</td>
  <td>	Morgan Zvolska	</td>
</tr>
<tr>
	<td>	Natalie Ehrenwerth	</td>
	<td>	Natalija Grkovic	</td>
	<td>	Nate Bilgoray	</td>
	<td>	Nicholas Tayag	</td>
	<td>	Nicolas Gonzalez	</td>
	<td>	Nicole Hernalsteen	</td>
</tr>
<tr>
	<td>	Noa Pogany	</td>
  <td>	Noah Hollander	</td>
  <td>	Noah Spatz	</td>
  <td>	Olivia Erstling	</td>
  <td>	Olivia Replogle	</td>
  <td>	Rachael Friederich	</td>
</tr>
<tr>
	<td>	Rachel Talley	</td>
	<td>	Rebecca Reich	</td>
	<td>	Remi Sanchez	</td>
	<td>	Rilee Spegar	</td>
	<td>	Ryan Goldblum	</td>
	<td>	Samantha Guerrero	</td>
</tr>
<tr>
	<td>	Samantha Kinggard	</td>
	<td>	Samuel Bennet	</td>
	<td>	Sarah McCluskey	</td>
	<td>	Sean Behling</td>
	<td>	Sheryl Kim	</td>
	<td>	Skylar Mac Calla	</td>
</tr>
<tr>
	<td>	Sophia Cuna	</td>
  <td>	Sydney Corn	</td>
  <td>	Timothy Hodges	</td>
  <td>	Trevor Shepherd	</td>
  <td>	Tyler Bonnoront	</td>
  <td>	Tyler Sentz	</td>
</tr>
<tr>
	<td>	Vanessa Waskowski	</td>
  <td>	Victoria Poliak	</td>
  <td>	Victoria Shelford</td>
  <td>	Whitney Dreyer	</td>
  <td>	William Lynfatt	</td>
  <td>	Yedalm Song	</td>
</tr>
<tr>
	<td>	Zachary Valdes	</td>
  <td>	Zeena Karkaria	</td>
  <td>	Zoe Gilliard	</td><!--
  <td>	Zachary Valdes	</td><!--
  <td>	Zeena Karkaria	</td>
  <td>	Zoe Gilliard	</td>
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
