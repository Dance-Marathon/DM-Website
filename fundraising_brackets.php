<?php
$status = "open";
$GLOBALS['page_title'] = 'Fundraising Brackets | Students | Dance Marathon at UF';
$GLOBALS['parent'] = 'get-involved';
include("includes/head.php");
include("includes/navbar.php");
?>


<style>
#hr{
  border-color: #212025;
}
  #bracket-title{
    margin: 0 0 32px 0;
    font-weight: 400;
    text-transform: uppercase;
    color: white;
    font-size: 3em;
  }

  #bracket-dancers-title{
    color: white;
    margin: 32px 0;
    font-weight: 400;
    text-transform: uppercase;
    color: white;
  }

 #red-bracket-wrapper{
    background-color: #BE2025;
    padding: 45px;
    margin-top: 35px;
    border-radius: 15px;
  }

  #blue-bracket-wrapper{
    background-color: #1555C4;
    padding: 45px;
    margin-top: 35px;
    border-radius: 15px;
  }


#green-bracket-wrapper{
    background-color: #0AB14F;
    padding: 45px;
    margin-top: 35px;
    border-radius: 15px;
  }


#yellow-bracket-wrapper{
    background-color: #F3CF6A;
    padding: 45px;
    margin-top: 35px;
    border-radius: 15px;
  }


#purple-bracket-wrapper{
    background-color: #9149E1;
    padding: 45px;
    margin-top: 35px;
    border-radius: 15px;
  }


#orange-bracket-wrapper{
    background-color: #F05F39;
    padding: 45px;
    margin-top: 35px;
    border-radius: 15px;
  }


#pink-bracket-wrapper{
    background-color: #F65CB0;
    padding: 45px;
    margin-top: 35px;
    border-radius: 15px;
  }


#gray-bracket-wrapper{
    background-color: #5F5F5F;
    padding: 45px;
    margin-top: 35px;
    border-radius: 15px;
  }


  #bracket-orgs p{
    color: white;
    margin-top: 45px;
  }


#light-bracket-title{
    margin: 0 0 32px 0;
    font-weight: 400;
    text-transform: uppercase;
    color: #212025;
    font-size: 3em;
  }

  #light-bracket-orgs p{
    color: #212025;
    margin-top: 45px;
  }

  #light-bracket-dancers-title{
    color: white;
    margin: 32px 0;
    font-weight: 400;
    text-transform: uppercase;
    color: #212025;
  }
</style>


<div class="page-heading parallax brackets">
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
            <li><a href="/campus-push-days">Transform Today</a></li>
						<li><a href="/classy">Classy</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
						<li><a class="active">Fundraising Brackets</a></li>
            <li><a href="/fundraising-guide">Fundraising Guide</a></li>
            <li><a href="/register-to-fundraise">Register to Fundraise</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
  		<?php if ($status == "open") { ?>
     <h2 class="text-center">Fundraising Brackets</h2>
     <p class="text-center">About a month prior to the Event, all Organizations participating in Dance Marathon 2021 will be placed into Fundraising Brackets based on their current amount raised. Fundraising Brackets determine the number of Dancer spots allotted to each Organization. Organizations who have raised the most money will receive the greatest number of Dancer spots.</p>


  <script>
  /**
        use this to display the fundrasing brackets
   */

   // ID of the Google Spreadsheet
   var spreadsheetID = "1WlVLUI8j92gDznJ3CE06xMKHZ8sVpQQif4NOYryTp6w";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      if (!(this.gsx$red.$t.includes('Red')) && !(this.gsx$red.$t.includes('32 Dancers'))) {
          $('.red-bracket').append('<p>'+this.gsx$red.$t+'</p>');
        }
    });

   });
  </script>

    <script>
   // ID of the Google Spreadsheet
   var spreadsheetID = "1WlVLUI8j92gDznJ3CE06xMKHZ8sVpQQif4NOYryTp6w";

   //Hello Future Tech person. This is Ryan Gruszczyk speaking.
   //The Next ED probably wants you to update this page. Lucky for you, some genius before me
   //Made it automatically pull from Google Sheets.
   //To make your google sheet work it'll need to be non-fancy columns. Follow the DM 2019 example of the sheet called
   //"Brackets Rank Horizontal 2019 (for website)".
   //Link here: https://docs.google.com/spreadsheets/d/1shqpgE4IJORw9rZYa4-X_pZToul6Q1xsRQkiB5CrZBQ/edit?usp=sharing assuming you can still view
   //Once you do that. You need to make sure you file>publish to web (I choose Embeded but idk if it matters)
   //THEN you just copy and paste the new spreadsheetID into all the variables and you're good to go fam


   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      $('.blue-bracket').append('<p>'+this.gsx$blue.$t+'</p>');
    });

   });
  </script>

    <script>
   // ID of the Google Spreadsheet
   var spreadsheetID = "1WlVLUI8j92gDznJ3CE06xMKHZ8sVpQQif4NOYryTp6w";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      $('.green-bracket').append('<p>'+this.gsx$green.$t+'</p>');
    });

   });
  </script>

    <script>
   // ID of the Google Spreadsheet
  var spreadsheetID = "1WlVLUI8j92gDznJ3CE06xMKHZ8sVpQQif4NOYryTp6w";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      $('.yellow-bracket').append('<p>'+this.gsx$yellow.$t+'</p>');
    });

   });
  </script>

    <script>
   // ID of the Google Spreadsheet
   var spreadsheetID = "1WlVLUI8j92gDznJ3CE06xMKHZ8sVpQQif4NOYryTp6w";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
        $('.purple-bracket').append('<p>'+this.gsx$purple.$t+'</p>');
    });

   });
  </script>

    <script>
   // ID of the Google Spreadsheet
   var spreadsheetID = "1WlVLUI8j92gDznJ3CE06xMKHZ8sVpQQif4NOYryTp6w";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
          $('.orange-bracket').append('<p>'+this.gsx$orange.$t+'</p>');

    });

   });
  </script>

  <script>
   // ID of the Google Spreadsheet
   var spreadsheetID = "1WlVLUI8j92gDznJ3CE06xMKHZ8sVpQQif4NOYryTp6w";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
          $('.pink-bracket').append('<p>'+this.gsx$pink.$t+'</p>');

    });

   });
  </script>

    <script>
   // ID of the Google Spreadsheet
   var spreadsheetID = "1WlVLUI8j92gDznJ3CE06xMKHZ8sVpQQif4NOYryTp6w";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

    var entry = data.feed.entry;

    $(entry).each(function(){
      $('.gray-bracket').append('<p>'+this.gsx$gray.$t+'</p>');

    });

   });
  </script>


<!-- this is also needed -->


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div id="red-bracket-wrapper">
        <div class="text-center">
          <h1 id="bracket-title">Red</h1>
          <h3 id="bracket-dancers-title"> 32 Dancers </h3>
          <hr>
          <div id="bracket-orgs" class="red-bracket"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div id="blue-bracket-wrapper">
        <div class="text-center">
          <h1 id="bracket-title">Blue</h1>
          <h3 id="bracket-dancers-title">26 Dancers </h3>
          <hr>
          <div id="bracket-orgs" class="blue-bracket"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div id="green-bracket-wrapper">
        <div class="text-center">
          <h1 id="bracket-title">Green</h1>
          <h3 id="bracket-dancers-title">20 Dancers </h3>
          <hr>
          <div id="bracket-orgs" class="green-bracket"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div id="yellow-bracket-wrapper">
        <div class="text-center">
          <h1 id="light-bracket-title">Yellow</h1>
          <h3 id="light-bracket-dancers-title">14 Dancers</h3>
          <hr id="hr">
          <div id="light-bracket-orgs" class="yellow-bracket"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div id="purple-bracket-wrapper">
        <div class="text-center">
          <h1 id="bracket-title">Purple</h1>
          <h3 id="bracket-dancers-title">8 Dancers</h3>
          <hr>
          <div id="bracket-orgs" class="purple-bracket"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div id="orange-bracket-wrapper">
        <div class="text-center">
          <h1 id="bracket-title">Orange</h1>
          <h3 id="bracket-dancers-title">6 Dancers</h3>
          <hr>
          <div id="bracket-orgs" class="orange-bracket"></div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div id="pink-bracket-wrapper">
        <div class="text-center">
          <h1 id="bracket-title">Pink</h1>
          <h3 id="bracket-dancers-title"> 4 Dancers  </h3>
          <hr>
          <div id="bracket-orgs" class="pink-bracket"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div id="gray-bracket-wrapper">
        <div class="text-center">
          <h1 id="bracket-title">Gray</h1>
          <h3 id="bracket-dancers-title"> 2 Dancers </h3>
          <hr>
          <div id="bracket-orgs" class="gray-bracket"></div>
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
