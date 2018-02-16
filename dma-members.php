
<?php
/*header("Location: http://www.floridadm.org/alumni.php"); /* Redirect browser */
/*exit();*/
	$status = "open";
	$GLOBALS['page_title'] = 'DMA Members | Alumni | Florida Dance Marathon';
	$GLOBALS['parent'] = 'DMA Members';
	include("includes/head.php");
	include("includes/navbar.php");
?>

  <script>
   // ID of the Google Spreadsheet
   var spreadsheetID = "1X_SEiR2-WT8ojUrxxI0OHwPKD2V3WFcFyDMQR13pvrg";

   // Make sure it is public or set to Anyone with link can view
   var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

   $.getJSON(url, function(data) {

       var entry = data.feed.entry;

       $(entry).each(function() {

           // 1995
           if (!($(entry)[1].gsx$year1995.$t.includes("n/a"))) {
               if (this.gsx$year1995.$t.includes('1995')) {
                   $('.95-title').append('<h3 class="dma-year">' + this.gsx$year1995.$t + '</h3> <hr>');
               } else {
                   $('.95').append('<p>' + this.gsx$year1995.$t + '</p>');
               }
           }


           // 1996

           if (!($(entry)[1].gsx$year1996.$t.includes("n/a"))) {
               if (this.gsx$year1996.$t.includes('1996')) {
                   $('.96-title').append('<h3 class="dma-year">' + this.gsx$year1996.$t + '</h3> <hr>');
               } else {
                   $('.96').append('<p>' + this.gsx$year1996.$t + '</p>');
               }
           }

           // 1997
           if (!($(entry)[1].gsx$year1997.$t.includes("n/a"))) {

               if (this.gsx$year1997.$t.includes('1997')) {
                   $('.97-title').append('<h3 class="dma-year">' + this.gsx$year1997.$t + '</h3> <hr>');
               } else {
                   $('.97').append('<p>' + this.gsx$year1997.$t + '</p>');
               }
           }

           // 1998
           if (!($(entry)[1].gsx$year1998.$t.includes("n/a"))) {
               if (this.gsx$year1998.$t.includes('1998')) {
                   $('.98-title').append('<h3 class="dma-year">' + this.gsx$year1998.$t + '</h3> <hr>');
               } else {
                   $('.98').append('<p>' + this.gsx$year1998.$t + '</p>');
               }
           }

           // 1999
           if (!($(entry)[1].gsx$year1999.$t.includes("n/a"))) {
               if (this.gsx$year1999.$t.includes('1999')) {
                   $('.99-title').append('<h3 class="dma-year">' + this.gsx$year1999.$t + '</h3> <hr>');
               } else {
                   $('.99').append('<p>' + this.gsx$year1999.$t + '</p>');
               }
           }
           // 2000
           if (!($(entry)[1].gsx$year2000.$t.includes("n/a"))) {
               if (this.gsx$year2000.$t.includes('2000')) {
                   $('.00-title').append('<h3 class="dma-year">' + this.gsx$year2000.$t + '</h3> <hr>');
               } else {
                   $('.00').append('<p>' + this.gsx$year2000.$t + '</p>');
               }
           }
           // 2001
           if (!($(entry)[1].gsx$year2001.$t.includes("n/a"))) {
               if (this.gsx$year2001.$t.includes('2001')) {
                   $('.01-title').append('<h3 class="dma-year">' + this.gsx$year2001.$t + '</h3> <hr>');
               } else {
                   $('.01').append('<p>' + this.gsx$year2001.$t + '</p>');
               }
           }

           //2002
           if (!($(entry)[1].gsx$year2002.$t.includes("n/a"))) {
               if (this.gsx$year2002.$t.includes('2002')) {
                   $('.02-title').append('<h3 class="dma-year">' + this.gsx$year2002.$t + '</h3> <hr>');
               } else {
                   $('.02').append('<p>' + this.gsx$year2002.$t + '</p>');
               }
           }
           // 2003
           if (!($(entry)[1].gsx$year2003.$t.includes("n/a"))) {
               if (this.gsx$year2003.$t.includes('2003')) {
                   $('.03-title').append('<h3 class="dma-year">' + this.gsx$year2003.$t + '</h3> <hr>');
               } else {
                   $('.03').append('<p>' + this.gsx$year2003.$t + '</p>');
               }
           }
           // 2004
           if (!($(entry)[1].gsx$year2004.$t.includes("n/a"))) {
               if (this.gsx$year2004.$t.includes('2004')) {
                   $('.04-title').append('<h3 class="dma-year">' + this.gsx$year2004.$t + '</h3> <hr>');
               } else {
                   $('.04').append('<p>' + this.gsx$year2004.$t + '</p>');
               }
           }
           // 2005
           if (!($(entry)[1].gsx$year2005.$t.includes("n/a"))) {
               if (this.gsx$year2005.$t.includes('2005')) {
                   $('.05-title').append('<h3 class="dma-year">' + this.gsx$year2005.$t + '</h3> <hr>');
               } else {
                   $('.05').append('<p>' + this.gsx$year2005.$t + '</p>');
               }
           }
           // 2006
           if (!($(entry)[1].gsx$year2006.$t.includes("n/a"))) {
               if (this.gsx$year2006.$t.includes('2006')) {
                   $('.06-title').append('<h3 class="dma-year">' + this.gsx$year2006.$t + '</h3> <hr>');
               } else {
                   $('.06').append('<p>' + this.gsx$year2006.$t + '</p>');
               }
           }
           // 2007
           if (!($(entry)[1].gsx$year2007.$t.includes("n/a"))) {
               if (this.gsx$year2007.$t.includes('2007')) {
                   $('.07-title').append('<h3 class="dma-year">' + this.gsx$year2007.$t + '</h3> <hr>');
               } else {
                   $('.07').append('<p>' + this.gsx$year2007.$t + '</p>');
               }
           }
           // 2008
           if (!($(entry)[1].gsx$year2008.$t.includes("n/a"))) {
               if (this.gsx$year2008.$t.includes('2008')) {
                   $('.08-title').append('<h3 class="dma-year">' + this.gsx$year2008.$t + '</h3> <hr>');
               } else {
                   $('.08').append('<p>' + this.gsx$year2008.$t + '</p>');
               }
           }
           // 2009
           if (!($(entry)[1].gsx$year2009.$t.includes("n/a"))) {
               if (this.gsx$year2009.$t.includes('2009')) {
                   $('.09-title').append('<h3 class="dma-year">' + this.gsx$year2009.$t + '</h3> <hr>');
               } else {
                   $('.09').append('<p>' + this.gsx$year2009.$t + '</p>');
               }
           }

           // 2010
           if (!($(entry)[1].gsx$year2010.$t.includes("n/a"))) {
               if (this.gsx$year2010.$t.includes('2010')) {
                   $('.10-title').append('<h3 class="dma-year">' + this.gsx$year2010.$t + '</h3> <hr>');
               } else {
                   $('.10').append('<p>' + this.gsx$year2010.$t + '</p>');
               }
           }

           // 2011
           if (!($(entry)[1].gsx$year2011.$t.includes("n/a"))) {
               if (this.gsx$year2011.$t.includes('2011')) {
                   $('.11-title').append('<h3 class="dma-year">' + this.gsx$year2011.$t + '</h3> <hr>');
               } else {
                   $('.11').append('<p>' + this.gsx$year2011.$t + '</p>');
               }
           }
           // 2012
           if (!($(entry)[1].gsx$year2012.$t.includes("n/a"))) {
               if (this.gsx$year2012.$t.includes('2012')) {
                   $('.12-title').append('<h3 class="dma-year">' + this.gsx$year2012.$t + '</h3> <hr>');
               } else {
                   $('.12').append('<p>' + this.gsx$year2012.$t + '</p>');
               }
           }
           // 2013
           if (!($(entry)[1].gsx$year2013.$t.includes("n/a"))) {
               if (this.gsx$year2013.$t.includes('2013')) {
                   $('.13-title').append('<h3 class="dma-year">' + this.gsx$year2013.$t + '</h3> <hr>');
               } else {
                   $('.13').append('<p>' + this.gsx$year2013.$t + '</p>');
               }

           }
           // 2014
           if (!($(entry)[1].gsx$year2014.$t.includes("n/a"))) {
               if (this.gsx$year2014.$t.includes('2014')) {
                   $('.14-title').append('<h3 class="dma-year">' + this.gsx$year2014.$t + '</h3> <hr>');
               } else {
                   $('.14').append('<p>' + this.gsx$year2014.$t + '</p>');
               }
           }
           // 2015
           if (!($(entry)[1].gsx$year2015.$t.includes("n/a"))) {
               if (this.gsx$year2015.$t.includes('2015')) {
                   $('.15-title').append('<h3 class="dma-year">' + this.gsx$year2015.$t + '</h3> <hr>');
               } else {
                   $('.15').append('<p>' + this.gsx$year2015.$t + '</p>');
               }
           }

           // 2016
           if (!($(entry)[1].gsx$year2016.$t.includes("n/a"))) {
               if (this.gsx$year2016.$t.includes('2016')) {
                   $('.16-title').append('<h3 class="dma-year">' + this.gsx$year2016.$t + '</h3> <hr>');
               } else {
                   $('.16').append('<p>' + this.gsx$year2016.$t + '</p>');
               }
           }

           // 2017 
           if (!($(entry)[1].gsx$year2017.$t.includes("n/a"))) {
               if (this.gsx$year2017.$t.includes('2017')) {
                   $('.17-title').append('<h3 class="dma-year">' + this.gsx$year2017.$t + '</h3> <hr>');
               } else {
                   $('.17').append('<p>' + this.gsx$year2017.$t + '</p>');
               }
           }
       });
   });
  </script>

<div class="page-heading parallax list-dma">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>DM Alumni Members</h1>
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

            <li><a href="/dmaa">About DM Alumni</a></li>
            <li><a href="/meet-dma-board">Meet the DMA Board</a></li>
            <li><a class="active">DM Alumni Members</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
			<div class="dma-members">
				<h2>Members</h2>
				<div class="members-list text-left">
					<div class="container-fluid">
					  
					<!-- 1995 -->
					<div class="dma-year 95-title"></div>
					<ul>
						<div class="95"></div>
					</ul>
					
					<!-- 1996 -->
					<div class="dma-year 96-title"></div>
					<ul>
						<div class="96"></div>
					</ul>

					<!-- 1997 -->
					<div class="dma-year 97-title"></div>
					<ul>
						<div class="97"></div>
					</ul>

					<!-- 1998 -->
					<div class="dma-year 98-title"></div>
					<ul>
						<div class="98"></div>
					</ul>

					<!-- 1999 -->
					<div class="dma-year 99-title"></div>
					<ul>
						<div class="99"></div>
					</ul>

					<!-- 2000 -->
					<div class="dma-year 00-title"></div>
					<ul>
						<div class="00"></div>
					</ul>

					<!-- 2001 -->
					<div class="dma-year 01-title"></div>
					<ul>
						<div class="01"></div>
					</ul>


					<!-- 2002 -->
					<div class="dma-year 02-title"></div>
					<ul>
						<div class="02"></div>
					</ul>

					<!-- 2003 -->
					<div class="dma-year 03-title"></div>
					<ul>
						<div class="03"></div>
					</ul>


					<!-- 2004-->
					<div class="dma-year 04-title"></div>
					<ul>
						<div class="04"></div>
					</ul>

					<!-- 2005 -->
					<div class="dma-year 05-title"></div>
					<ul>
						<div class="05"></div>
					</ul>

					<!-- 2006-->
					<div class="dma-year 06-title"></div>
					<ul>
						<div class="06"></div>
					</ul>


					<!-- 2007 -->
					<div class="dma-year 07-title"></div>
					<ul>
						<div class="07"></div>
					</ul>

					<!-- 2008 -->
					<div class="dma-year 08-title"></div>
					<ul>
						<div class="08"></div>
					</ul>

					<!-- 2009 -->
					<div class="dma-year 09-title"></div>
					<ul>
						<div class="09"></div>
					</ul>

					<!-- 2010 -->
					<div class="dma-year 10-title"></div>
					<ul>
						<div class="10"></div>
					</ul>

					<!-- 2011 -->
					<div class="dma-year 11-title"></div>
					<ul>
						<div class="11"></div>
					</ul>


					<!-- 2012 -->
					<div class="dma-year 12-title"></div>
					<ul>
						<div class="12"></div>
					</ul>

					<!-- 2013 -->
					<div class="dma-year 13-title"></div>
					<ul>
						<div class="13"></div>
					</ul>

					<!-- 2014 -->
					<div class="dma-year 14-title"></div>
					<ul>
						<div class="14"></div>
					</ul>

					<!-- 2015 -->
					<div class="dma-year 15-title"></div>
					<ul>
						<div class="15"></div>
					</ul>

					<!-- 2016 -->
					<div class="dma-year 16-title"></div>
					<ul>
						<div class="16"></div>
					</ul>

					<!-- 2017 -->
					<div class="dma-year 17-title"></div>
					<ul>
						<div class="17"></div>
					</ul>
				</div>
			</div>
		</div>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
