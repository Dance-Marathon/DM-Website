<?php
$status = "open";
$GLOBALS['page_title'] = 'Dancers | Get Involved | Florida Dance Marathon';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>

<div class="page-heading parallax dancers">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Dancers</h1>
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
          <li><a class="active">Dancers</a></li>
          <li><a href="/alumni">DM Alumni</a></li>
          <li><a href="/organizations">Organizations</a></li>
          <li><a href="/captain-teams">Captain Teams</a></li>
          <li><a href="/meet-the-overalls">Meet the Overalls</a></li>
          <li><a href="/ftkrew">FTKrew</a></li>
          <li><a href="/emerging-leaders">Emerging Leaders Program</a></li>
          <!--            <li><a href="/overall-applications">Overall Applications</a></li> -->
        </ul>
      </div>
    </div>
    <div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
      <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#what-is-dancing-ftk" aria-controls="what-is-dancing-ftk" role="tab" data-toggle="tab">What is Dancing FTK?</a></li>
          <li role="presentation"><a href="#dancer-resources" aria-controls="dancer-resources" role="tab" data-toggle="tab">Dancer Resources</a></li>
          <li role="presentation"><a href="#dancer-faqs" aria-controls="dancer-faqs" role="tab" data-toggle="tab">Dancer FAQs</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="what-is-dancing-ftk">
            <h3>Dancers</h3>
            <p>Participating as a Dancer at Dance Marathon is an exciting, rewarding experience unlike any other. Dancers stand on their feet for the entire 26.2 hours of the event along with 800+ other UF students as they learn a fun line dance, enjoy live entertainment, yummy food, and hear firsthand stories from our very own Miracle Families. There are a limited number of dancer spots determined by participation and fundraising, so don't miss your chance to register today!</p>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="dancer-resources">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JI6rIsx2Ous" frameborder="0" allowfullscreen></iframe>
            &nbsp;<br/>
            <h3>Register to Dance</h3>
            <p>Registration to be a Dancer at Dance Marathon is open for two weeks in the fall and two weeks in the spring. In order to be eligible to dance, participants must be enrolled as students at the University of Florida during the spring semester. This includes students who are enrolled but may have an internship in place of classes.</p>
            <p>Registering to <em>dance</em> is <u>not</u> the same thing as registering to <em>fundraise</em>. Anyone may register to fundraise at any time throughout the year, but Dancer Registration is only open for the two-week period in the fall and in the spring.</p>
            <p>Registering to dance also does not guarantee a dancer spot. Dancer spots are allocated in the spring based off of organizational or individual achievements</p>
            <p>You may register to dance with an organization team or as an individual. If you are a member of an organization that does not currently participate in Dance Marathon, you may start a team by registering on Donor Drive. See <a href="/delegates.php#starting-a-team">Starting a Team</a> for more information.</p>
            <h3>Staying Healthy</h3>
            <ul>
              <li>Stay hydrated! Be sure to have bring a water bottle with you to the event to ensure you are drinking enough water. Water and Gatorade will be provided at the event as well.</li>
              <li>Stay energized! Take advantage of the meals provided by our sponsors throughout the event.</li>
              <li>Take time to stretch during the event so your muscles don't get as tight and sore.</li>
              <li>Stay engaged! The more you participate in the activities, entertainment and line dance throughout the event, the more likely you are to maintain a positive mindset.</li>
            </ul>
            <h3>Packing List</h3>
            <ul>
              <li>Gator 1 ID - Must have to be admitted into the O’Dome.</li>
              <li>Multiple pairs of socks and underwear. These will do wonders to make you feel refreshed throughout the event.</li>
              <li>T-shirts, tanks and long sleeve shirts to adjust to the temperature as you need to.</li>
              <li>Water bottle</li>
              <li>At least 2 pairs of supportive, comfortable shoes</li>
              <li>Toothbrush & toothpaste</li>
              <li>Hairbrush</li>
              <li>Chapstick</li>
              <li>Deodorant</li> <!--Add video of where is my chapstick -->
              <li>Baby wipes</li>
              <li>Goldbond powder</li>
              <li>UF DM fanny pack</li>
              <li>Any necessary medications</li>
              <li>Glasses, contacts or contact solution if necessary</li>
              <li>Costumes for theme hours</li>
              <li>Phone charger</li>
              <li>Study material for upcoming exams</li>
              <li>Games</li>
              <li>Encouraging notes from friends or family</li>
            </ul>
            <h3>For Swim/Shower Shifts:</h3>
            <ul>
              <li>Bathing suit</li>
              <li>Towel</li>
              <li>Soap, shampoo, conditioner, etc.</li>
              <li>Shower shoes</li>
            </ul>
            <h3>Important Reminders:</h3>
            <ul>
              <li>Lockers are provided to store your things, however, there are not enough lockers for everyone to have his/her own. We suggest leaving any valuables at home.</li>
              <li>If you have allergies, you will be given a chance to make note of this and you may bring your own snacks.</li>
              <li>If you have medications, you will be able to turn these in to your Delegate or Dancer Relations Captain and they will be kept safe in our Medical Room with our medical personnel.</li>
            </ul>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="dancer-faqs">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q1">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a1" aria-expanded="false" aria-controls="a1">
                      If I register to dance, am I guaranteed a dancer spot at DM?
                    </a>
                  </h4>
                </div>
                <div id="a1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q1">
                  <div class="panel-body">
                    Not necessarily. Dancer spots are allocated based off of participation and fundraising goals set for each organization and individual.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q2">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a2" aria-expanded="false" aria-controls="a2">
                      I already registered to fundraise, do I need to register to dance?
                    </a>
                  </h4>
                </div>
                <div id="a2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q2">
                  <div class="panel-body">
                    Yes, registering to fundraise and registering to dance are two separate things.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q3">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a3" aria-expanded="false" aria-controls="a3">
                      Do I have to be a UF student to dance?
                    </a>
                  </h4>
                </div>
                <div id="a3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q3">
                  <div class="panel-body">
                    Yes, you must be enrolled as a student during the spring semester in which Dance Marathon takes place. This also applies to those registered with UF who are taking an internship in place of classes.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q4">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a4" aria-expanded="false" aria-controls="a4">
                      I don’t have my DM shirt, can I still check in for spirit points?
                    </a>
                  </h4>
                </div>
                <div id="a4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q4">
                  <div class="panel-body">
                    You must be wearing a DM shirt to check in for spirit points. The purpose of wearing the shirt is to spread awareness around campus.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q5">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a5" aria-expanded="false" aria-controls="a5">
                      How do I register to dance?
                    </a>
                  </h4>
                </div>
                <div id="a5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q5">
                  <div class="panel-body">
                    Click the Dancer Resources tab above for instructions.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q6">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a6" aria-expanded="false" aria-controls="a6">
                      How do I register to fundraise?
                    </a>
                  </h4>
                </div>
                <div id="a6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q6">
                  <div class="panel-body">
                    See <a href="http://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=786">Register to Fundraise</a> for instructions.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q7">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a7" aria-expanded="false" aria-controls="a7">
                      Can I still dance if I am the Delegate for my organization’s team?
                    </a>
                  </h4>
                </div>
                <div id="a7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q7">
                  <div class="panel-body">
                    Yes!
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q8">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a8" aria-expanded="false" aria-controls="a8">
                      How do spirit points work?
                    </a>
                  </h4>
                </div>
                <div id="a8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q8">
                  <div class="panel-body">
                    Spirit Points are used to keep track of each organization’s participation in our events and incentives throughout the year leading up to Dance Marathon. There is a friendly competition between teams and the winner will be announced at closing ceremonies for Dance Marathon.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q9">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a9" aria-expanded="false" aria-controls="a9">
                      Who can come to the event?
                    </a>
                  </h4>
                </div>
                <div id="a9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q9">
                  <div class="panel-body">
                    Anyone!
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="q13">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#a13" aria-expanded="false" aria-controls="a13">
                      What happens when someone registers to dance and isn’t given a spot?
                    </a>
                  </h4>
                </div>
                <div id="a13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="q13">
                  <div class="panel-body">
                    The money they paid for the registration fee will be allocated back to their organization’s total.
                  </div>
                </div>
              </div>
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
