<?php
$status = "open";
$GLOBALS['page_title'] = 'Captain Teams | Get Involved | Florida Dance Marathon';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>

<div class="page-heading parallax captain-teams">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Captain Teams</h1>
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
						<li><a href="/register-to-fundraise"> Register to Fundraise</a></li>
						<li><a href="/delegates">Delegates</a></li>
						<li><a href="/dancers">Dancers</a></li>
            <li><a href="/alumni">DM Alumni</a></li>
						<li><a href="/organizations">Organizations</a></li>
						<li><a class="active">Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
            <li><a href="/emerging-leaders">Emerging Leaders Program</a></li>
            <li><a href="/ftkrew">FTKrew</a></li>

<!--           <li><a href="/overall-applications">Overall Applications</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
      <h3>Captain Teams</h3>
      <p><b> Congratulations 2017 Captains! Welcome to the DM Family!</b></p>
      <p>Emerging Leaders List can be found <a href="/emerging-leaders">here</a></p>
    <!--  <p>Each Captain team is composed of an <b>Overall Director</b>, <b>Assistant Directors</b> and <b>Captains</b>. </p>
      <ul>
        <li><b>Assistant Directors</b> are Individuals who work yearlong with their respective Overall Directors to ensure steady growth and management within their Captain team. ADs possess effective skills in responsibility, organization and leadership. The responsibilities of each AD position vary among each Captain team. <small> Assistant Directors are elected at the end of Spring semester.</small> </li>
        <li><b>Captains</b> are leaders within our organization who have specific duties throughout the year depending on their teams. There are 15 Captain teams, each having vastly different responsibilities to ensure the growth and promotion of our cause on many different fronts. Captains typically have weekly or biweekly meetings and are a vital part of the Dance Marathon family. <small> Captains applications are released at the beginning of Fall semester.</small> </li>
      </ul>
      <p>Click each tab below to learn more about each team and its responsibilities.</p> -->
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q1">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a1" aria-expanded="false" aria-controls="a1">Community Events</a>
            </h4>
          </div>
          <div id="a1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q1">
            <div class="panel-body">
              <h4>Description</h4>
              The Community Events Team is responsible for organizing and implementing the events leading up to the 26.2-hour Dance Marathon. The highly anticipated events raise awareness of our organization and encourage the Gainesville and University of Florida communities to get involved with our cause. Events held prior to Dance Marathon may include a bowling tournament, Kickin’ it For the Kids kickball tournament, FT5K race, Family Day at the Zoo and the Dance Marathon kick-off BBQ. Additionally, Community Events Captains organize activities at Dance Marathon, including Jailbreak.
              <h4>Assistant Director of Delegate Communications</h4>
              Trevor Schaettle
              <h4>Assistant Director of Sponsored Events</h4>
              Jenny Vasiloff
              <h4>Captains</h4>
              <table style="width:100%">
                <tr>
                  <td>Abigail O'Connor</td>
                  <td>Andie Waldman</td>
                  <td>Brandon Mackenzie</td>
                </tr>
                <tr>
                  <td>Brittney Hayes</td>
                  <td>Brooke Wooten</td>
                  <td>Catherine Palmer</td>
                </tr>
                <tr>
                  <td>Cole Fiedler</td>
                  <td>Colin Duffy</td>
                  <td>Connor Castro</td>
                </tr>
                <tr>
                  <td>Delaney Cooksey</td>
                  <td>Grace Murray</td>
                  <td>Jack Stephens</td>
                </tr>
                <tr>
                  <td>Jordan Weber</td>
                  <td>Kimberly Novak</td>
                  <td>Kristen Vollender</td>
                </tr>
                <tr>
                  <td>Lauren Bruss</td>
                  <td>Lauren Meaney</td>
                  <td>Margaret Heekin</td>
                </tr>
                <tr>
                  <td>Mary Prakas</td>
                  <td>Michael Saunders</td>
                  <td>Sierra Lloyd</td>
                </tr>
                <tr>
                  <td>Tori Cook</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q2">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a2" aria-expanded="false" aria-controls="a2">Creative Development</a>
            </h4>
          </div>
          <div id="a2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q2">
            <div class="panel-body">
              <h4>Description</h4>
              The Creative Development Team is a collection of graphic designers and software developers responsible for making Dance Marathon media come to life. Captains are responsible for either the development/maintaining of the website and mobile applications(iOS and Android), or the creation of all print/web design needs. Throughout the year, Captains work together to create high-tech, portfolio quality material that showcase Dance Marathon as a professional student-run movement. Captains also manage at-event content shown on the jumbotrons (eg. such as Dancer Walk information and meal slides), app Updates and notifications, and the live stream.
              <h4>Assistant Director of Branding</h4>
              Shaina Patel
              <h4>Assistant Director of Software Development</h4>
              Alex Robau
              <h4>Captain</h4>
              <table style="width:100%">
                <tr>
                  <td>Alaina Brown</td>
                  <td>Alex Clark</td>
                  <td>Bryan Rivera</td>
                </tr>
                <tr>
                  <td>Brynna Kaplan</td>
                  <td>Caitlin Carnahan</td>
                  <td>Cameron Cook</td>
                </tr>
                <tr>
                  <td>Connor Elkin</td>
                  <td>Corinne Sharabi</td>
                  <td>Ed Tischler</td>
                </tr>
                <tr>
                  <td>Jonathan Pereyra</td>
                  <td>Kurt Grossnickle</td>
                  <td>Mary Hanvey</td>
                </tr>
                <tr>
                  <td>Monty Karas</td>
                  <td>Nick Zinobile</td>
                  <td>Samantha Regula</td>
                </tr>
                <tr>
                  <td>Sarah Wolk</td>
                  <td>Savannah Gribbins</td>
                  <td>Tori Bates</td>
                </tr>
                <tr>
                  <td>Tyler Brennan </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q3">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a3" aria-expanded="false" aria-controls="a3">Dancer Relations</a>
            </h4>
          </div>
          <div id="a3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q3">
            <div class="panel-body">
              <h4>Description</h4>
              The Dancer Relations Team is responsible for the care of the participating Dancers from the beginning of the year to the event’s end. Responsibilities include registering Dancers for event, tallying the spirit point competition that takes place throughout the year at various check-ins, holding informational Dancer meetings, staffing the medical and study rooms at the event, handling guest check-ins at the event for Dancers’ visitors and maintaining communication with registered organizations throughout the year to handle any questions and concerns. Dancer Relations Captains also coordinate an in-depth Delegate program ensuring Dancers and organizations have updated and accurate information about all upcoming events, deadlines, and general Dance Marathon knowledge.
              <h4>Assistant Director of Check Ins</h4>
              Jessie Anderson
              <h4>Assistant Director of New Organizations</h4>
              Christine Joseph
              <h4>Captains</h4>
              <table style="width:100%">
                <tr>
                  <td>Micayla Johnson</td><td>
                  S. Danielle Chitty</td><td>
                  Danielle Vollender </td>
                </tr>
                <tr>
                  <td>Alexis Castro</td><td>
                  Meredith Marshall</td><td>
                  Corey Huff </td>
                </tr>
                <tr>
                  <td>David McCaskill</td><td>
                  Sean Murtha</td><td>
                  Noel Fundora </td>
                </tr>
                <tr>
                  <td>Eric Rice</td><td>
                  Caitlyn Nicholson</td><td>
                  Rachel Gurevich </td>
                </tr>
                <tr>
                  <td>Kayla Nocella</td><td>
                  Mary Allen</td><td>
                  McKenna Schaar </td>
                </tr>
                <tr>
                  <td>Trey Fritz </td><td>
                  Hayley Giambalvo </td><td>
                  Cole Abrahamson </td>
                </tr>
                <tr>
                  <td>Connor Miller </td><td>
                  Anthony Rocca </td><td>
                  Benjamin Pawliger </td>
                </tr>
                <tr>
                  <td>Anna Murphy </td><td>
                  Hunter Robbins </td><td>
                  Kylie Paul </td>
                </tr>
                <tr>
                  <td>Lizabeth Lohmann </td><td>
                  Julia O'Connor </td><td>
                  Julie Smith </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q5">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a5" aria-expanded="false" aria-controls="a5">Family Relations</a>
            </h4>
          </div>
          <div id="a5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q5">
            <div class="panel-body">
              <h4>Description</h4>
              Family Relations Captains serve as the liaison between Dance Marathon and the Miracle Families. Captains are paired with a Miracle Family, and their responsibilities include maintaining consistent contact with their respective Miracle Families, organizing the Pen Pal program, and coordinating events between the Miracle Families and participating organizations. Captains also volunteer at UF Health Shands Children’s Hospital in Pediatric Units 44 and 45. Captains also create the family room for the 26.2-hour event and keep the Miracle Families entertained during the entirety of the event.
              <h4>Assistant Director of Family Outreach</h4>
              Kelsey Torgerson
              <h4>Assistant Director of Family Events</h4>
              Jake Dube
              <h4>Captains</h4>
              <table style="width:100%">
                <tr><td>
                  Aaron McGee</td><td>
                  Amanda Marr </td><td>
                  Andrew Darvin </td>
                </tr>
                <tr><td>
                  Andrew Jensen</td><td>
                  Anna Noreman</td><td>
                  Ariel Harris </td>
                </tr>
                <tr>
                <td>Ashley Fisher</td><td>
                  Barbie Diaz</td><td>
                  Brianna Blum </td>
                </tr>
                <tr>
              <td>  Caitlin Dobson</td><td>
                  Carli Fischer</td><td>
                  Caroline Baker</td>
                </tr>
                <tr>
                  <td>Cassandra Etzig</td><td>
                  Courtney Mastorio</td><td>
                  Daniella De Freitas </td>
                </tr>
                <tr>
                  <td>Danielle Kripitzer</td><td>
                  Emily Murrow</td><td>
                  Hannah Sharpe </td>
                </tr>
                <tr>
                  <td>Isabela Leon</td><td>
                  Jenna Glick</td><td>
                  Jesse Zilberman </td>
                </tr>
                <tr>
                  <td> Jordan Lutz </td><td>
                  Joshua Fried</td><td>
                  Kalee Eichelberger</td>
                </tr>
                <tr>
                <td>  Katelyn Cornelius</td><td>
                  Kathryn Vigilante</td><td>
                  Kelly Kammerer </td>
                </tr>
                <tr>
                <td>  Kevin Goza</td><td>
                  Kyle Audet</td><td>
                  Landon Myers</td>
                </tr>
                <tr>
                <td>  Lindsay Libera</td><td>
                  Mackenzie Gusman</td><td>
                  Madison Grubb</td>
                </tr>
                <tr>
                  <td>Mallory Wood</td>
                  <td> Mary Virginia Kline</td>
                  <td> Sara Brenner </td>
                </tr>
                <tr>
                <td>  Sierra Mann </td>
                <td>  Tyler Drescher </td>
                </tr>
                <tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q6">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a6" aria-expanded="false" aria-controls="a6">Fundraising</a>
            </h4>
          </div>
          <div id="a6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q6">
            <div class="panel-body">
              <h4>Description</h4>
              The Fundraising Team is responsible for financial oversight, funds processing, collections and fundraising strategies. These Captains play an integral role in the success of Dance Marathon at UF by ensuring that the total reveal is accurate up until the very last minute, when the final numbers are raised. They are responsible for running Dancer registration alongside the Dancer Relations team. In addition, they are responsible for all financial oversight for a handful of organizations. This oversight requires close relationships with both the Delegates of those organizations and the corresponding Dancer Relanions Captain.
              <h4>Assistant Director of Offline Transactions</h4>
              Hunter Hedman
              <h4>Assistant Director of Mini-Marathon Tracking</h4>
              Nicole Zackowitz
              <h4>Captains</h4>
              <table style="width:100%">
                <tr>
                  <td>Brendan Barany</td>
                  <td>Haley Barth</td>
                  <td>David Bischoff</td>
                </tr>
                <tr>
                  <td>Jaclyn Campbell</td>
                  <td>Thomas DelCharco</td>
                  <td>Alyssa DiMauro</td>
                </tr>
                <tr>
                  <td>Kayla Fagien</td>
                  <td>Zachary Ginsburg</td>
                  <td>Shayna Goldrich</td>
                </tr>
                <tr>
                  <td>Arie Hariton</td>
                  <td>Christy Hollingshead</td>
                  <td>Matthew Kutner</td>
                </tr>
                <tr>
                  <td>Jonathan Le</td>
                  <td>Christina Marchena</td>
                  <td>Rory Neer</td>
                </tr>
                <tr>
                  <td>Sean Smith</td>
                  <td>Sara Walbrecht</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q7">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a7" aria-expanded="false" aria-controls="a7">Hospitality</a>
            </h4>
          </div>
          <div id="a7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q7">
            <div class="panel-body">
              <h4>Description</h4>
              The Hospitality Captains work year-round with local restaurants to coordinate monthly hospitality fundraising nights for Dance Marathon. Captains also spend a large part of the academic year reaching out to large food corporations to coordinate donations and corporate sponsorships.They are responsible for any foodrelated needs for pre-event activities at community events and the 26.2-hour event. Captains plan, solicit and serve a continuous flow of food to all participants for the duration of the 26.2-hour event.
              <h4>Assistant Director of Stewardship</h4>
              Dara Herman
              <h4>Assistant Director of Hospitality Nights</h4>
              Megan Spurrell
              <h4>Captains</h4>
              <table style="width:100%">
                <tr>
                <td>  Allison Jones</td><td>
                  Amanda Abes</td><td>
                  Amber Neumeister</td>
                </tr>
                <tr>
                <td>Brooke Steinberg</td><td>
                  Devan Kocarek</td><td>
                  Emily Collins</td>
                </tr>
                <tr>
                <td>Emily Podolsky</td><td>
                  Emma Rutherford</td><td>
                  Erin Monaghan</td>
                </tr>
                <tr>
                <td>  Gabrielle Rodrigo</td><td>
                  Hannah Burkhart</td><td>
                  Hayden Dodds</td>
                </tr>
                <tr>
                  <td>Jamie Fash</td><td>
                  Jan Strusinski</td><td>
                  Jonathan Neiwirth</td>
                </tr>
                <tr>
                <td>  Jorge Perez </td><td>
                  Katherine Passilla</td><td>
                  Khandis Hogans</td>
                </tr>
                <tr>
                <td>  Kristina Sencion</td><td>
                  Lexi Sidle</td><td>
                  Melanie DiLoreto</td>
                </tr>
                <tr>
                  <td>Melody Dickson</td><td>
                  Monica Gomez</td><td>
                  Rachel Solomon</td>
                </tr>
                <tr>
                  <td>Savannah Hardeman</td><td>
                  Suzanne Dean</td><td>
                  Talia Akerman</td>
                </tr>
                <tr>
                  <td>Tyler Ruppel</td><td>
                  Tyler Shaffner</td><td>
                  William Rand</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q8">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a8" aria-expanded="false" aria-controls="a8">Marathon Relations</a>
            </h4>
          </div>
          <div id="a8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q8">
            <div class="panel-body">
              <h4>Description</h4>
              The Marathon Relations Team is responsible for advising and attending Dance Marathon at UF’s high school marathons. They energize and support these marathons by teaching the Line Dance and educating students on Children’s Miracle Network Hospitals and DM at UF’s history and culture. Captains focus on strengthening relationships with high schools around the state while helping them to plan and implement their marathons while recruiting new high schools to join the Dance Marathon family. Captains are responsible for maintaining relationships with other collegiate Dance Marathons by serving as a resource and hosting other collegiate Dance Marathons.
              <h4>Assistant Director of High School Recruitment</h4>
              Hunter Waters
              <h4>Assistant Director of Event Coordination</h4>
              Kelsie Boudreau
              <h4>Assistant Director of Captain Relations</h4>
              Anaelise Wagner
              <h4>Captains</h4>
              <table style="width:100%">
                <tr>
                  <td>Alex Everitt </td><td>
                  Annie Criser </td><td>
                  Ashley Stewart </td>
                </tr>
                <tr>
                  <td>Carly Mern</td><td>
                  Catherine Davis</td><td>
                  Colleen Maher </td>
                </tr>
                <tr>
                  <td>Courtney Miles</td><td>
                  Gray Bean</td><td>
                  Haley Schavemaker </td>
                </tr>
                <tr>
                  <td>Isabelle Hadley </td><td>
                  Johnathan Page </td><td>
                  Kiki Pavlovics </td>
                </tr>
                <tr>
                  <td>Lily Putra </td><td>
                  Nick Scianna </td><td>
                   Nicole Meeks</td>
                </tr>
                <tr>
                  <td>
                  Paras Mehta </td><td>
                  Patty Ferrer </td>
                  <td>Rachel Mathison </td>
                </tr>
                <tr>
                <td> Robbie Reed </td><td>
                  Sam Heekin </td>
                  <td>Taylor Munroe </td>
                </tr>
                <tr>
                  <td>
                  Toni Deane </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q9">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a9" aria-expanded="false" aria-controls="a9">Merchandise</a>
            </h4>
          </div>
          <div id="a9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q9">
            <div class="panel-body">
              <h4>Description</h4>
              The Merchandise Team is responsible for all Dance Marathon at the University of Florida merchandise and stores. Throughout the year, Captains focus on creating an official product offering for DM at UF apparel and accessories, running the DM Store in Turlington every Wednesday and at community events, facilitating pre-orders with Delegates and organizations, taking inventory, and organizing check-in shirt and event shirt orders. Pre-event, Captains manage the online store and fulfill orders, help the Sponsorship team facilitate Marketing Days, and order and stuff Dancer Bags.
              <h4>Assistant Director of Inventory</h4>
              Kelsey Johnson
              <h4>Assistant Director of Orders</h4>
              Hannah Jones
              <h4>Captains</h4>
              <table style="width:100%">
                <tr>
                  <td>Alexa Ramer </td><td>
                  </td><td>Aryeh Pollack </td><td>
                  </td><td>Caitlin Perry </td>
                </tr>
                  <tr>
                  <td>Caroline Gibson </td><td>
                  </td><td>Chloe Burgess </td><td>
                  </td><td>Connor Dalton </td>
                </tr>
                  <tr>
                  <td>Daisy Lopez </td><td>
                  </td><td>Erin Pins </td><td>
                  </td><td>Faith McKenna </td>
                </tr>
                  <tr>
                  <td>Hannah Wannamaker </td><td>
                  </td><td>Kendall Roberts </td><td>
                  </td><td>Lindsay Beveridge </td>
                </tr>
                  <tr>
                  <td>Lindsey Sullivan</td><td>
                  </td><td>Megan Shulmister </td><td>
                  </td><td>Natasha Jewett </td>
                </tr>
                  <tr>
                  <td>Nathan Landry </td><td>
                  </td><td>Rachel Mazzurco </td><td>
                  </td><td>Sam Eivas </td>
                </tr>
                  <tr>
                  <td>Shelby Shriver </td><td>
                  </td><td>Taylor Peterson </td><td>
                  </td><td>Victoria Vincent </td>
                </tr>
                  <tr>
                    <td>
                  Zachary Pizzi </td>
                </tr>
                  <tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q10">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a10" aria-expanded="false" aria-controls="a10">Morale</a>
            </h4>
          </div>
          <div id="a10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q10">
            <div class="panel-body">
              <h4>Description</h4>
              The Morale Team is responsible for creating, planning and executing the “theme hours”, which are essentially themed hours filled with games, activities and crafts to keep the Dancers entertained and enthused. They keep the spirit of Dance Marathon high, energetic and positive throughout the entire year, prior to and during the 26.2-hour event. In addition, Morale Captains are the creative individuals behind the revered Line Dance, which inspires and connects all attendees and Dancers at the event.
              <h4>Assistant Director of High School Dance Marathons</h4>
              Julia Stevens
              <h4>Assistant Director of Special Tasks</h4>
              Madison Eouse
              <h4>Captains</h4>
              <table style="width:100%">
                <tr>
                <td>Abigail Wilwant </td><td>
                  Amber Pasqual </td><td>
                  Annalena Pirovic</td>
                </tr>
                  <tr>
                <td>  Blake Harris </td><td>
                  Carli Chiarelli</td><td>
                  Carter Long</td>
                </tr>
                  <tr>
                <td>  Cassidy Chason</td><td>
                  Catherine Haley</td><td>
                  Caylin Lewandowski</td>
                </tr>
                  <tr>
                  <td>Chelsea Finfer </td><td>
                  Delaney Kline </td><td>
                  Eileen Cullen</td>
                </tr>
                  <tr>
                <td>  Erick Esquerete </td><td>
                  Fara Moskowitz </td><td>
                  Jack DeLoach </td>
                </tr>
                  <tr>
                  <td> Jak Ramsberger </td><td>
                  John Crisafi </td><td>
                  Kayla Kolka </td>
                </tr>
                  <tr>
                  <td>Kevin Kimbrough </td><td>
                  Kristopher Wawrzyniak </td><td>
                  Kylie Adkins </td>
                </tr>
                  <tr>
                <td>  Lucas Lopez </td><td>
                  Mac Bailey </td><td>
                  Matthew Smith </td>
                </tr>
                  <tr>
                  <td>Nicole Allison </td><td>
                  Olivia Molina </td><td>
                  Paris Aubin </td>
                </tr>
                  <tr>
                <td>  Rafael Tavares </td><td>
                  Rebecca Feldbaum </td><td>
                  Samantha DiCorte </td>
                </tr>
                  <tr>
                  <td> Saneh Ste.Claire </td><td>
                  Scout Farrow </td><td>
                  Sean McKenna </td>
                </tr>
                  <tr>
                  <td> Shir Ibgui </td><td>
                  Sophia Marchetti </td><td>
                  Taylor VandenBerg </td>
                </tr>
                  <tr>
                <td>  Zachary Argentine </td><td>
                  Zeni Quinn </td>
                <td>  Brianna Paiewonsky</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q11">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#a11" aria-expanded="false" aria-controls="a11">Multimedia</a>
            </h4>
          </div>
          <div id="a11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q11">
            <div class="panel-body">
              <h4>Description</h4>
              The Multimedia Team is responsible for videography and photography throughout the year and during the event, working together to create a visually appealing representation of the organization and its cause. The Captains edit, sort and upload videos and photos regularly to YouTube and Facebook, respectively. In order to capture and upload this media, Captains are responsible for acquiring the needed equipment for all filming and photography, including all software involved for editing videos in photos. Lastly, these Captains maintain the DM at UF YouTube channel, as well as contribute to the Livestream and Live Feed at the 26.2-hour event.
              <h4>Assistant Director of Social Media </h4>
              Meaghan Hanley
              <h4>Assistant Director of Videography </h4>
              Kelcie Roscoe
              <h4>Captains</h4>
              <table style="width:100%">
                <tr>
                  <td> Alaina DiGiacomo </td> <td>
                  Allison Luntz </td> <td>
                  Andrea Newport Jones </td>
                </tr>
                  <tr>
                  <td> Aynsley Rasmussen </td> <td>
                  Carly Breitbart </td> <td>
                  Carly Mackler </td>
                </tr>
                  <tr>
                  <td>Charlotte Robinson </td> <td>
                  Dakota Williams </td> <td>
                  Gabriel Rojas </td>
                </tr>
                  <tr>
                  <td>Heather Padgett </td> <td>
                  Lauren Dreisch </td> <td>
                  Mallory Towe </td>
                </tr>
                  <tr>
                <td>  Marni Rochkid </td> <td>
                  Serena Carton </td> <td>
                  Sophia Rose</td>
                </tr>
                  <tr>
                  <td>Spencer Kane </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="q4">
           <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#a4" aria-expanded="false" aria-controls="a4">Outreach</a>
          </h4>
        </div>
        <div id="a4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q4">
         <div class="panel-body">
          <h4>Description</h4>
          *This Outreach Team consists of a small group of Assistant Directors and works closely with teams such as Sponsorships, Community Events, Recruitment, and Public Relations. The Team’s goal is to form positive relationships with all communities and groups of people who are involved in any way with DM at UF. Captains work year-round to increase awareness of and extend the reach that DM at UF has. Captains are responsible for collaborating with the DMAA to increase Dance Marathon Alumni engagement and further the DM awareness among the Gainesville community, UF Alumni, UF Health and UF Faculty.
                   <!--The Outreach Team will focus on increasing the awareness and reach that DM at UF has. They will work closely with the Dance Marathon Alumni Initiative and act as a member of the DMAA board. They will meet regularly with them to discuss and plan alumni engagement events, plans, campaigns, etc. The Outreach team will also look to increase faculty engagement on the UF’s campus and engagement for all of UF Health. This team will consist of a small group of assistant directors and will work closely with teams such as Sponsorships, Community Events, Recruitment, and Public Relations.
                 -->
                 <h4>Assistant Director of Hospital </h4>
                 Sarah Hayo
                 <h4>Assistant Director of Alumni </h4>
                 Nikki Kosko
                 <h4>Assistant Director of Faculty </h4>
                 Alyssa Wolff
                 <h4>Assistant Director of Community Events </h4>
                 Sarah Vititoe
               </div>
             </div>
           </div>

           <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q12">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a12" aria-expanded="false" aria-controls="a12">Productions</a>
              </h4>
            </div>
            <div id="a12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q12">
              <div class="panel-body">
                <h4>Description</h4>
                The Productions Team is responsible for all logistics and entertainment throughout the year and during the 26.2-hour event. Before the Dance Marathon event, the Productions Team assists the Morale Team with planning theme hours, building and organizing the homecoming float, coordinating and executing a benefit concert, and working with the O’Connell Center to plan all logistics for the event. During the DM event, the Productions Team carries out all operational duties in the O’Connell Center, including setting up and striking theme hours, organizing security and clean up, and overseeing all entertainment aspects during the 26.2 hours.
                <h4>Assistant Director of Logistics </h4>
                Shane Hanney
                <h4>Assistant Director of Talent Relations </h4>
                Paige Levin
                <h4>Assistant Director of Theme Hours </h4>
                Nikki Masse
                <h4>Captains</h4>
                <table style="width:100%">
                  <tr>
                    <td>Ashley Knoblauch </td> <td>
                    Brett Cook </td> <td>
                    Bruce Yang </td>
                  </tr>
                    <tr>
                    <td>Caroline Carney </td> <td>
                    Christian Chambers </td> <td>
                    Connor Schrills </td>
                  </tr>
                    <tr>
                    <td>Crews Chambers </td> <td>
                    David Weck </td> <td>
                    Drew Scatizzi  </td>
                  </tr>
                    <tr>
                    <td>Francesca Favorule </td> <td>
                    Gavin Peltz </td> <td>
                    Grant Echols </td>
                  </tr>
                    <tr>
                    <td>Jessica Liu </td> <td>
                    Jimmy Wheeler </td> <td>
                    Leigh Wysocki </td>
                  </tr>
                    <tr>
                    <td>Mackenzie Olson  </td> <td>
                    Matt Duggar  </td> <td>
                    Michael Musumeci </td>
                  </tr>
                    <tr>
                  <td>  Mikaela Sheerin </td> <td>
                    Molly Gilroy </td> <td>
                    Natalie Rao </td>
                  </tr>
                    <tr>
                    <td>Patrick Rathburn </td> <td>
                    Patrick Tully </td> <td>
                    Rachel Cohen </td>
                  </tr>
                    <tr>
                    <td>Ross Hughes </td> <td>
                    Sean Biava </td> <td>
                    Stephanie Elkin  </td>
                  </tr>
                    <tr>
                    <td>Tarini Chandok  </td> <td>
                    Taylor Bartenope </td> <td>
                    Taylor Cavaliere </td>
                  </tr>
                    <tr>
                    <td>Will New  </td> <td>
                    Zoe Friedman  </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q13">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a13" aria-expanded="false" aria-controls="a13">Public Relations</a>
              </h4>
            </div>
            <div id="a13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q13">
              <div class="panel-body">
                <h4>Description</h4>
                The Public Relations Team is responsible for maintaining the external views and public reputation of Dance Marathon at UF. The captains work year-round to uphold the organization's mission statement, vision and branding. This involves forming relationships with local media sources, creating campaigns to propel the organization’s efforts, and using social media as a communication tool between the organization and its publics. Captains use creativity to construct additional campaigns throughout the year, storylines for multimedia videos, and innovative ways to extend DM at UF’s reach, getting the community involved and informed. During the event, Captains are also responsible for escorting media, maintaining social media channels, and ensuring the smooth running of the event itself.
                <h4>Assistant Director of Social Media </h4>
                Mackenzie Welsh
                <h4>Assistant Director of Press Releases </h4>
                Casey McLean
                <h4>Assistant Director of Media Outreach </h4>
                Jackie Smith
                <h4>Captains</h4>
                <table style="width:100%">
                  <tr>
                  <td>  Ashleigh Braun </td><td>
                    Ashley Norus  </td><td>
                    Ashlyn Sullivan </td>
                  </tr>
                  <tr>
                  <td>  Brittney White </td><td>
                    Caroline Miller </td><td>
                    Caroline Rollosson </td>
                  </tr>
                  <tr>
                    <td>Christine Anez </td><td>
                    Cydney Glasser </td><td>
                    Emily Boulter </td>
                  </tr>
                  <tr>
                    <td>Jenna Metcalf </td><td>
                    Jenna Theofiledes </td><td>
                    Julia Sullivan </td>
                  </tr>
                  <tr>
                    <td>Keith Dattilo</td><td>
                    Lauren Palen </td><td>
                    Lexi Stoloff </td>
                  </tr>
                  <tr>
                  <td>  Olivia Ooten </td><td>
                    Paris Olkes </td><td>
                    Sullivan Henry </td>
                  </tr>
                  <tr>
                  <td>  Summer Orsini </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q14">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a14" aria-expanded="false" aria-controls="a14">Recruitment</a>
              </h4>
            </div>
            <div id="a14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q14">
              <div class="panel-body">
                <h4>Description</h4>
                The Recruitment Team is responsible for the recruitment of Dancers, Captains and organizations to participate in Dance Marathon at UF. Throughout the year, Captains will contact various campus organizations to convey the miracles Dance Marathon creates and how they can give back to their local Children’s Miracle Network Hospital. Captains work to cultivate the skills of the next generation of Dance Marathon leaders, and to raise awareness of the organization and its cause to a variety of communities.
                <h4>Assistant Director of Organization Relations </h4>
                Erin Reilly
                <h4>Assistant Director of Campus Relations</h4>
                Madison Grasty
                <h4>Assistant Director of Membership Development</h4>
                Stephanie Ira
                <h4>Captains</h4>
                <table style="width:100%">
                  <tr>
                    <td>Conrad Ager </td><td>
                    Amanda Idinge </td><td>
                    Andrea Benaim </td>
                  </tr>
                  <tr>
                    <td>Ashli DeFina </td><td>
                    Bella Perkins </td><td>
                    Brandon Barnett </td>
                  </tr>
                  <tr>
                    <td>Devyn Nathan </td><td>
                    Hannah Belcher </td><td>
                    Kris Frydenberg </td>
                  </tr>
                  <tr>
                  <td>  Kristina Brennan </td><td>
                    Lynh Nguyen </td><td>
                    Masyn McMillin </td>
                  </tr>
                  <tr>
                  <td>  Meredith Kalhor </td><td>
                    Sammi Schultz </td><td>
                    Sanchita Mukherjee </td>
                  </tr>
                  <tr>
                  <td>  Thomas Raleigh </td><td>
                    Victoria Pinchera </td><td>
                    Derek Nickell </td>
                  </tr>
                  <tr>
                  <td>  Jamie Wolfe </td><td>
                    Layton Wiemer </td><td>
                    Mereya Quintana </td>
                  </tr>
                  <tr>
                  <td>  Nicole Clark  </td><td>
                    Charles McMillan </td><td>
                    Gabby Vassallo </td>
                  </tr>
                  <tr>
                  <td>  Hayley Samek </td><td>
                    Kalyn Williams </td><td>
                    Lexi Leitman </td>
                  </tr>
                  <tr>
                  <td>  Luke Evans </td><td>
                    Michael Backstrand </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="q15">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#a15" aria-expanded="false" aria-controls="a15">Sponsorship</a>
              </h4>
            </div>
            <div id="a15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q15">
              <div class="panel-body">
                <h4>Description</h4>
                The Sponsorships Team is responsible for soliciting national and local communities for sponsorships, including title sponsorships, in-kind donations for community events and Dance Marathon, and items for the Silent Auction.  The captains will work to foster stewardship and strong relationships by working closely with Sponsors and communicating with them throughout the year. Captains are also responsible for organizing and working Marketing Days at local businesses.								<h4>Assistant Director of Internal Donations </h4>
                Katlyn Etheridge
                <h4>Assistant Director of External Sponsorships </h4>
                Stephanie Kinchla
                <h4>Captains</h4>
                <table style="width:100%">
                  <tr>
                  <td>  Aldo Colom </td><td>
                    Alyssa Skryd </td><td>
                    Augustus Wright </td>
                  </tr>
                  <tr>
                    <td>Briana Hayes </td><td>
                    Brittany Grogins </td><td>
                    Caitlyn Considine </td>
                  </tr>
                  <tr>
                    <td>Dakota Stanford </td><td>
                    Erin Park </td><td>
                    Kayla Henrie </td>
                  </tr>
                  <tr>
                  <td>  Lauren Seewald </td><td>
                    Mallory Wiecjorek </td><td>
                    Marlo Mulhall </td>
                  </tr>
                  <tr>
                  <td>  Ron Heinkel </td><td>
                    Samantha Kitroser </td><td>
                    Stefan Dolinsky </td>
                  </tr>
                  <tr>
                    <td>Stephen Goldie </td><td>
                    Vincent Castellano </td><td>
                    Brooke Rabinovich </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <?php } else { echo 'This page is currently closed.'; } ?>
      </div>
    </div>
  </div>
</div>

<?php include("includes/foot.php"); ?>
