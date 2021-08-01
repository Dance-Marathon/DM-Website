<?php
$status = "open";
$GLOBALS['page_title'] = 'Organization Impact Levels | Students | Dance Marathon at UF';
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
    padding: 25px;
    margin-top: 35px;
    border-radius: 15px;
  }

  #blue-bracket-wrapper{
    background-color: #1555C4;
    padding: 25px;
    margin-top: 35px;
    border-radius: 15px;
  }


#green-bracket-wrapper{
    background-color: #0AB14F;
    padding: 25px;
    margin-top: 35px;
    border-radius: 15px;
  }


#yellow-bracket-wrapper{
    background-color: #F3CF6A;
    padding: 25px;
    margin-top: 35px;
    border-radius: 15px;
  }


#purple-bracket-wrapper{
    background-color: #D54BEC;
    padding: 25px;
    margin-top: 35px;
    border-radius: 15px;
  }


#orange-bracket-wrapper{
    background-color: #FA5F05;
    padding: 35px;
    margin-top: 35px;
    border-radius: 15px;
  }


#pink-bracket-wrapper{
    background-color: #F65CB0;
    padding: 25px;
    margin-top: 35px;
    border-radius: 15px;
  }


#gray-bracket-wrapper{
    background-color: #5F5F5F;
    padding: 25px;
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

<style>
.page-heading.parallax.brackets {
background-image: url("/assets/images/BannerPhotos21/TT_10-28-20_SDevine52.jpg");
}
</style>
<div class="page-heading parallax brackets">
  <div class="inner-wrapper">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <h1>Organization Impact Levels</h1>
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
            
						<li><a href ="/donordrive">DonorDrive</a></li>
						<li><a href="/employee-matching">Employee Matching</a></li>
            <li><a href="/fundraising-guide">Fundraising Guide</a></li>
            <li><a class="active">Organization Impact Levels</a></li>
            <li><a href="/register-to-fundraise">Register to Fundraise</a></li>
          </ul>
        </div>
			</div>

      
			<div class="col-md-8 col-md-push-1">
  		<?php if ($status == "open") { ?>
     <h2 style="font-weight: bold;">Organization Impact Levels</h2>
     <p>Organization Impact Levels determine the number of Dancer spots each Organization can earn for the Main Event. The Organization’s standing within the Impact Levels is determined by a combination of fundraising, Spirit Points and Locked Dancer Spots. Each Impact Level requires a minimum fundraising amount in order to enter into it, and there are a maximum number of Organizations that can exist in each Impact Level. Organization Impact Levels will change as the semester continues and Organizations continue to fundraise, get Spirit Points and earn Locked Dancer Spots.</p>
      </div>
   <script>
  /**
        use this to display the fundrasing brackets
   */

   // ID of the Google Spreadsheet
   var spreadsheetID = "1htGfq9WSgHy78bIW0iOulgi2-Vl3p3xJsTUkyjTcY7M";

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
   var spreadsheetID = "1htGfq9WSgHy78bIW0iOulgi2-Vl3p3xJsTUkyjTcY7M";

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
   var spreadsheetID = "1htGfq9WSgHy78bIW0iOulgi2-Vl3p3xJsTUkyjTcY7M";

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
  var spreadsheetID = "1htGfq9WSgHy78bIW0iOulgi2-Vl3p3xJsTUkyjTcY7M";

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
   var spreadsheetID = "1htGfq9WSgHy78bIW0iOulgi2-Vl3p3xJsTUkyjTcY7M";

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
   var spreadsheetID = "1htGfq9WSgHy78bIW0iOulgi2-Vl3p3xJsTUkyjTcY7M";

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
   var spreadsheetID = "1htGfq9WSgHy78bIW0iOulgi2-Vl3p3xJsTUkyjTcY7M";

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
   var spreadsheetID = "1htGfq9WSgHy78bIW0iOulgi2-Vl3p3xJsTUkyjTcY7M";

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

<div class="col-md-6 col-md-push-2">
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
        <div id="red-bracket-wrapper">
        <div class="text-center">
          <h1 id="bracket-title">Miracle Level</h1>

          <h3 id="bracket-dancers-title"> 24 Dancers </h3>
          <h3 id="bracket-dancers-title">Minimum: $35,000</h3>
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
          <h1 id="bracket-title">Family Level</h1>
          <h3 id="bracket-dancers-title">20 Dancers </h3>
          <h3 id="bracket-dancers-title">Minimum: $28,000</h3>
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
          <h1 id="bracket-title">Believe Level</h1>
          <h3 id="bracket-dancers-title">16 Dancers </h3>
          <h3 id="bracket-dancers-title">Minimum: $20,000</h3>
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
          <h1 id="light-bracket-title">Hope Level</h1>
          <h3 id="light-bracket-dancers-title">12 Dancers</h3>
          <h3 id="light-bracket-dancers-title">Minimum: $12,000</h3>
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
          <h1 id="bracket-title">Inspire Level</h1>
          <h3 id="bracket-dancers-title">8 Dancers</h3>
          <h3 id="bracket-dancers-title">Minimum: $6,000</h3>
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
          <h1 id="bracket-title">Gator Level</h1>
          <h3 id="bracket-dancers-title">6 Dancers</h3>
          <h3 id="bracket-dancers-title">Minimum: $2,500</h3>
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
          <h1 id="bracket-title">Bravery Level</h1>
          <h3 id="bracket-dancers-title"> 4 Dancers  </h3>
          <h3 id="bracket-dancers-title">Minimum: $1,500</h3>
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
          <h1 id="bracket-title">Gray Level</h1>
          <h3 id="bracket-dancers-title"> 2 Dancers </h3>
          <h3 id="bracket-dancers-title">Minimum: $500</h3>
          <hr>
          <div id="bracket-orgs" class="gray-bracket"></div>
          
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
