<?php
$status = "open";
$GLOBALS['page_title'] = 'Fundraising Brackets | Get Involved | Florida Dance Marathon';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>



<style>
#colorfont{
  font-family: "Arial Black", Gadget, sans-serif;
  color: black;
  text-align: center;
  line-height: 50%;
  font-size: 400%;

}
#dancerfont{
  font-family: "Arial Black", Gadget, sans-serif;
  color: black;
  text-align: center;
  line-height: 50%;
  font-size: 150%;

}
#colordiv{
  float: left;
  width: 50%;
  margin-top: 12%;
}
#teamdiv{
  float: right;
  text-align: right;
  width: 50%;
  height: 100%;
}
#redbracketdiv{
background: #ffe6e6; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(120deg, #ff6666, white); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(120deg, #ff6666, white); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(120deg, #ff6666, white); /* For Firefox 3.6 to 15 */
  background: linear-gradient(90deg, #ff6666, white); /* Standard syntax */
  overflow:hidden;
}
#bluebracketdiv{

background: #66d9ff; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(120deg, #66d9ff, white); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(120deg, #66d9ff, white); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(120deg, #66d9ff, white); /* For Firefox 3.6 to 15 */
  background: linear-gradient(90deg, #66d9ff, white); /* Standard syntax */
  overflow:hidden;


}

#greenbracketdiv{

background: #6EEB6F; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(120deg, #6EEB6F, white); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(120deg, #6EEB6F, white); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(120deg, #6EEB6F, white); /* For Firefox 3.6 to 15 */
  background: linear-gradient(90deg, #6EEB6F, white); /* Standard syntax */
  overflow:hidden;


}

#yellowbracketdiv{

background: #FFEA00; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(120deg, #FFEA00, white); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(120deg, #FFEA00, white); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(120deg, #FFEA00, white); /* For Firefox 3.6 to 15 */
  background: linear-gradient(90deg, #FFEA00, white); /* Standard syntax */
  overflow:hidden;


}

#purplebracketdiv{

background: #D883FF; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(120deg, #D883FF, white); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(120deg, #D883FF, white); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(120deg, #D883FF, white); /* For Firefox 3.6 to 15 */
  background: linear-gradient(90deg, #D883FF, white); /* Standard syntax */
  overflow:hidden;


}

#orangebracketdiv{

background: #FF9300; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(120deg, #FF9300, white); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(120deg, #FF9300, white); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(120deg, #FF9300, white); /* For Firefox 3.6 to 15 */
  background: linear-gradient(90deg, #FF9300, white); /* Standard syntax */
  overflow:hidden;


}

#pinkbracketdiv{

background: #FF57B6; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(120deg, #FF57B6, white); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(120deg, #FF57B6, white); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(120deg, #FF57B6, white); /* For Firefox 3.6 to 15 */
  background: linear-gradient(90deg, #FF57B6, white); /* Standard syntax */
  overflow:hidden;


}

#graybracketdiv{

background: #777275; /* For browsers that do not support gradients */
  background: -webkit-linear-gradient(120deg, #777275, white); /* For Safari 5.1 to 6.0 */
  background: -o-linear-gradient(120deg, #777275, white); /* For Opera 11.1 to 12.0 */
  background: -moz-linear-gradient(120deg, #777275, white); /* For Firefox 3.6 to 15 */
  background: linear-gradient(90deg, #777275, white); /* Standard syntax */
  overflow:hidden;


}

#grad_red {
      background: #ff3232; /* Old browsers */
  background: -moz-linear-gradient(-45deg, #ff3232 0%, #ffffff 50%); /* FF3.6-15 */
  background: -webkit-linear-gradient(-45deg, #ff3232 0%,#ffffff 50%); /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(135deg, #ff3232 0%,#ffffff 50%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff3232', endColorstr='#ffffff',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
}
</style>


<div class="page-heading parallax orgs">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Fundraising Brackets</h1>
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
            <li><a class="active">Fundraising Brackets</a></li>
						<li><a href="/captain-teams" >Captain Teams</a></li>
						<li><a href="/meet-the-overalls">Meet the Overalls</a></li>
            <li><a href="/emerging-leaders">Emerging Leaders Program</a></li>
            <li><a href="/ftkrew">FTKrew</a></li>

<!--            <li><a href="/overall-applications">Overall Applications</a></li> -->
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
  		<?php if ($status == "open") { ?>
     <h2 style="text-align: center;">Weekly Rankings</h2>

     <p></p>






     <!--This Div is for the Red Bracket -->
     <div id="redbracketdiv">
     <!-- this div is the Red (Dancers) float left-->
      <div id="colordiv">
      <h2 id="colorfont">Red</h2>
      <h3 id="dancerfont">(32 Dancers)</h3>
      </div>
        <!-- this div is for the teams in order-->
           <div id="teamdiv">
           <p>
             <p style="font-size:120%; color:black;">Delta Gamma | Pi Lambda Phi</p>
             <p style="font-size:120%; color:black;">Chi Omega | Tau Epsilon Phi</p>
            <p style="font-size:120%; color:black;">Kappa Delta | Kappa Sigma</p>
            <p style="font-size:120%; color:black;">Delta Phi Epsilon | Delta Tau Delta</p>
            <p style="font-size:120%; color:black;">Alpha Epsilon Phi | Lambda Chi Alpha</p>
            </p>
          </div>
     </div>


<hr>


    <!-- This is the Blue Bracket Div-->
     <div id="bluebracketdiv">
      <div id="colordiv">
      <h2 id="colorfont">Blue</h2>
      <h3 id="dancerfont">(26 Dancers)</h3>
      </div>
       <div id="teamdiv">
       <p>
     <p style="font-size:120%; color:black;">Delta Delta Delta | Chi Phi</p>
     <p style="font-size:120%; color:black;">Alpha Chi Omega | Sigma Phi Epsilon</p>
     <p style="font-size:120%; color:black;">Pi Beta Phi | Delta Chi</p>
     <p style="font-size:120%; color:black;">Alpha Omicon Pi | Pi Kappa Phi</p>
     <p style="font-size:120%; color:black;">Kappa Alpha Theta | Alpha Epsilon Pi</p>
     </p>
      </div>
     </div>


<hr>

      <!-- This is the Green Bracket Div-->
      <div id="greenbracketdiv">
      <div id="colordiv">
      <h2 id="colorfont">Green</h2>
      <h3 id="dancerfont">(20 Dancers)</h3>
      </div>
       <div id="teamdiv">
       <p>
     <p style="font-size:120%; color:black;">Zeta Tau Alpha | Theta Chi</p>
     <p style="font-size:120%; color:black;">Sigma Kappa | Alpha Gamma Rho</p>
     <p style="font-size:120%; color:black;">Alpha Delta Pi | Alpha Tau Omega</p>
     <p style="font-size:120%; color:black;">Phi Mu | Sigma Nu</p>
     <p style="font-size:120%; color:black;">Delta Zeta | Phi Kappa Tau</p>
     <p style="font-size:120%; color:black;">Kappa Kappa Gamma | Sigma Alpha Epsilon</p>
     </p>
     </div>
     </div>


     <hr>

     <!-- This is the Yellow Bracket Div-->
   <div id="yellowbracketdiv">
      <div id="colordiv">
      <h2 id="colorfont">Yellow</h2>
      <h3 id="dancerfont">(14 Dancers)</h3>
      </div>
       <div id="teamdiv">
       <p>
     <p style="font-size:120%; color:black;">Gamma Phi Beta | Pi Kappa Alpha</p>
     <p style="font-size:120%; color:black;">Delta Nu Zeta | Tau Kappa Epsilon</p>
     <p style="font-size:120%; color:black;">Omega Phi Alpha | Sigma Chi</p>
     <p style="font-size:120%; color:black;">Theta Alpha | Delta Upsilon</p>
     <p style="font-size:120%; color:black;">Sigma Phi Lambda | Kappa Phi Epsilon</p>
     </p>
</div>
</div>


     <hr>


    <!-- This is the Purple Bracket Div-->
   <div id="purplebracketdiv">
      <div id="colordiv">
      <h2 id="colorfont">Purple</h2>
      <h3 id="dancerfont">(8 Dancers)</h3>
      </div>
       <div id="teamdiv">
       <p>
     <p style="font-size:120%; color:black;">UFAA: Florida Cicerones</p>
     <p style="font-size:120%; color:black;">Kappa Alpha Order</p>
     <p style="font-size:120%; color:black;">Public Health and Health Professions</p>
     <p style="font-size:120%; color:black;">AMSA</p>
     <p style="font-size:120%; color:black;">Dance In A Suitcase</p>
     <p style="font-size:120%; color:black;">Preview Staff</p>
     </p>
    </div>
    </div>


     <hr>


     <!-- The Orange Bracket Div-->
      <div id="orangebracketdiv">
      <div id="colordiv">
      <h2 id="colorfont">Orange</h2>
      <h3 id="dancerfont">(6 Dancers)</h3>
      </div>
       <div id="teamdiv">
         <p>
         <p style="font-size:120%; color:black;">Benton Engineering Council | Phi Sigma Pi</p>
         <p style="font-size:120%; color:black;">Alpha Phi Omega</p>
         <p style="font-size:120%; color:black;">Dream Team</p>
         <p style="font-size:120%; color:black;">UF College of Nursing</p>
         <p style="font-size:120%; color:black;">Epsilon Sigma Alpha</p>
         <p style="font-size:120%; color:black;">Footprints</p>
         <p style="font-size:120%; color:black;">UF Honors Program</p>
         <p style="font-size:120%; color:black;">Theta Tau</p>
         <p style="font-size:120%; color:black;">Campus Diplomats</p>
         <p style="font-size:120%; color:black;">Hispanic Student Association</p>
         <p style="font-size:120%; color:black;">Phi Eta Sigma Honor Society</p>
         <p style="font-size:120%; color:black;">Gator Band | Phi Sigma Kappa</p>
         <p style="font-size:120%; color:black;">Phi Gamma Delta (FIJI)</p>
         <p style="font-size:120%; color:black;">Sigma Alpha</p>
         <p style="font-size:120%; color:black;">Beta Theta Pi</p>
         <p style="font-size:120%; color:black;">Dancin' Gators</p>
         <p style="font-size:120%; color:black;">Collge of Pharmacy</p>
         </p>
  </div>
  </div>


     <hr>


     <!-- The Pink Bracket -->
     <div id="pinkbracketdiv">
      <div id="colordiv">
      <h2 id="colorfont">Pink</h2>
      <h3 id="dancerfont">(4 Dancers)</h3>
      </div>
       <div id="teamdiv">
       <p>
         <p style="font-size:120%; color:black;">Jewish Student Union</p>
         <p style="font-size:120%; color:black;">Gamma Eta</p>
         <p style="font-size:120%; color:black;">College of Education</p>
         <p style="font-size:120%; color:black;">Freshman Leadership Council</p>
         <p style="font-size:120%; color:black;">Florida Club Swim and Dive</p>
         <p style="font-size:120%; color:black;">Phi Epsilon Kappa (PEK)</p>
         <p style="font-size:120%; color:black;">SPTA</p>
         <p style="font-size:120%; color:black;">Freshman Leadership Engineering Group</p>
         <p style="font-size:120%; color:black;">National Society of Collegiate Scholars</p>
         </p>
         </div>
         </div>


     <hr>

          <!-- The Gray Brakcet -->
      <div id="graybracketdiv">
        <div id="colordiv">
        <h2 id="colorfont">Gray</h2>
        <h3 id="dancerfont">(2 Dancers)</h3>
        </div>
         <div id="teamdiv">
         <p>
           <p style="font-size:120%; color:black;">UF Navy/Marine ROTC</p>
           <p style="font-size:120%; color:black;">Phi Delta Theta</p>
           <p style="font-size:120%; color:black;">First Year Florida Broward</p>
           <p style="font-size:120%; color:black;">Pre-Legal Honor Society</p>
           <p style="font-size:120%; color:black;">College of Medicine</p>
           <p style="font-size:120%; color:black;">Heal The World</p>
           <p style="font-size:120%; color:black;">Indian Student Association</p>
           <p style="font-size:120%; color:black;">CRU at UF</p>
           <p style="font-size:120%; color:black;">COM-IDP Graduate Student Organization</p>
           <p style="font-size:120%; color:black;">Tone Def A Cappella</p>
           <p style="font-size:120%; color:black;">The Involvement Team</p>
           <p style="font-size:120%; color:black;">Asian American Student Union</p>
           <p style="font-size:120%; color:black;">First Generation</p>
           <p style="font-size:120%; color:black;">UF Student Health</p>
           <p style="font-size:120%; color:black;">English Language Institute</p>
           <p style="font-size:120%; color:black;">Second Chance Gators</p>
           <p style="font-size:120%; color:black;">The Naviagators</p>
           <p style="font-size:120%; color:black;">Sabor Latino Dance Team</p>
           <p style="font-size:120%; color:black;">Gator Beach Volleyball</p>
           <p style="font-size:120%; color:black;">UFFSA</p>
           <p style="font-size:120%; color:black;">UF MBA</p>
           <p style="font-size:120%; color:black;">HOSA</p>
           <p style="font-size:120%; color:black;">UF Pre-PA Club</p>
           <p style="font-size:120%; color:black;">Lake Wauberg</p>
           <p style="font-size:120%; color:black;">The Really Independent Florida Crocodile</p>
           <p style="font-size:120%; color:black;">SOTA (Student Occupational Therapy Assn)</p>
           <p style="font-size:120%; color:black;">The Black Student Union</p>
           <p style="font-size:120%; color:black;">Pi Sigma Alpha</p>
           <p style="font-size:120%; color:black;">CMA EDU</p>
           <!-- <p style="font-size:120%; color:black;">Sigma Phi Delta</p> -->
       </p>
       </div>
       </div>

      <?php } else { echo 'This page is currently closed.'; } ?>
    </div>
  </div>
</div>
</div>

<?php include("includes/foot.php"); ?>
