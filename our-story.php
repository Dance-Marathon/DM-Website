<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Our Story | About | Dance Marathon at UF';
	$GLOBALS['parent'] = 'about';
	include("includes/head.php");
	include("includes/navbar.php");
?>
<style>
.page-heading.parallax.our-story {
background-image: url("/assets/images/BannerPhotos21/Charles_H-20.jpg");
}
</style>
<div class="page-heading parallax our-story">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Our Story</h1>
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
					 <li><a href="/blog">Blog</a></li>
					 <li><a href="uf-health">CMN & UF Health</a></li>
					 <li><a href="/fastfacts-nomenclature">Fast Facts / Nomenclature</a></li>
					 <li><a href="/faq">FAQ</a></li>
					 <li><a href="meet-the-kids.php">Meet the Kids</a></li>
					 <li><a class="active">Our Story</a></li>
					 <li><a href="/press-releases">Press Release</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
       <p>Dance Marathon at UF is a yearlong effort that culminates in our Main Event each spring where students remain awake and on their feet for 26.2 hours to represent the hardships faced by children battling pediatric illness. DM at UF is one of the five founding Dance Marathon programs in the nation, and since our start we have raised more than $28 million for the Miracle Children at UF Health Shands Children’s Hospital, our local CMN hospital. Today, Dance Marathon at UF is comprised of hundreds of internal members and a variety of sponsors and community partners.</p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="col-sm-6">Year</th>
              <th class="col-sm-6">Total Donated</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1995</td>
              <td>$12,424.66</td>
            </tr>
            <tr>
              <td>1996</td>
              <td>$23,783.27</td>
            </tr>
            <tr>
              <td>1997</td>
              <td>$57,057.02</td>
            </tr>
            <tr>
              <td>1998</td>
              <td>$75,938.18</td>
            </tr>
            <tr>
              <td>1999</td>
              <td>$114,511.81</td>
            </tr>
            <tr>
              <td>2000</td>
              <td>$158,603.56</td>
            </tr>
            <tr>
              <td>2001</td>
              <td>$195,148.15</td>
            </tr>
            <tr>
              <td>2002</td>
              <td>$217,945.10</td>
            </tr>
            <tr>
              <td>2003</td>
              <td>$247,941.04</td>
            </tr>
            <tr>
              <td>2004</td>
              <td>$250,012.48</td>
            </tr>
            <tr>
              <td>2005</td>
              <td>$319,842.78</td>
            </tr>
            <tr>
              <td>2006</td>
              <td>$361,454.68</td>
            </tr>
            <tr>
              <td>2007</td>
              <td>$370,317.00</td>
            </tr>
            <tr>
              <td>2008</td>
              <td>$435,560.89</td>
            </tr>
            <tr>
              <td>2009</td>
              <td>$416,485.27</td>
            </tr>
            <tr>
              <td>2010</td>
              <td>$520,871.79</td>
            </tr>
            <tr>
              <td>2011</td>
              <td>$713,053.68</td>
            </tr>
            <tr>
              <td>2012</td>
              <td>$886,726.15</td>
            </tr>
            <tr>
              <td>2013</td>
              <td>$1,169,722.16</td>
            </tr>
            <tr>
              <td>2014</td>
              <td>$1,528,330.16</td>
            </tr>
            <tr>
              <td>2015</td>
              <td>$2,015,307.17</td>
            </tr>
						<tr>
              <td>2016</td>
              <td>$2,434,315.18</td>
            </tr>
						<tr>
              <td>2017</td>
              <td>$2,724,324.19</td>
            </tr>
            <tr>
              <td>2018</td>
              <td>$3,026,420.19</td>
            </tr>
            <tr>
              <td>2019</td>
              <td>$3,230,025.23</td>
						</tr>
						<tr>
							<td>2020</td>
							<td>$2,526,418.24</td>
            </tr>
           <tr>
               <td>2021</td>
               <td>$2,270,311.40</td>
</tr>
            <td>2022</td>
           <td>$2,334,217.21</td>
          </tbody>
        </table>
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
