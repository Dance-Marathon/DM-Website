<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Students | Dance Marathon at UF';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");

	$involvement = array (
		array(
			'name'=> 'Alumni',
			'href'=>'alumni',
			'image'=> 'Dina'
		),
		array (
			'name'=> 'Ambassadors',
			'href'=> 'ambassadors',
			'image'=> 'About'
		),
		array (
			'name'=> 'Captain Teams',
			'href'=> 'captain-teams',
			'image'=> 'Dina'
		),
		array(
			'name'=> 'Dancers',
			'href'=> 'dancers',
			'image'=> 'About'
		),
		array (
			'name'=> 'Emerging Leaders',
			'href' => 'emerging-leaders',
			'image'=> 'Dina'
		),
		array (
			'name'=> 'Kirstyns Krew',
			'href'=> 'kirstynskrew',
			'image' => 'About'
		),
		array (
			'name'=> 'Organizations',
			'href'=> 'organizations',
			'image'=> 'Dina'
		),
		array (
			'name'=> 'Service',
			'href'=> 'service',
			'image'=> 'About'
		)

		);






?>


<style>
.page-heading.parallax.get-involved {
background-image: url("/assets/images/BannerPhotos21/IMG_3231.jpg");
}
.btn-default.button {
	color: #f79b63;
  background-color: #ffffff;
  border-color: #f79b63;
  font-size: 14px;
  border: 2px solid;
  border-radius: 4px;
  text-transform: uppercase;
}
</style>
<div class="page-heading parallax get-involved">
  <div class="inner-wrapper">
	  <div class="container">
    	<div class="row">
	  		<div class="col-md-12">
    			<h1>Get Involved</h1>
	  		</div>
    	</div>
	  </div>
	</div>
</div>


<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="container text-center">
					<p style="padding-top:0;">Take a look at all of the different ways <b style="color:#f79b63;"><b>you can get involved </b></b>with Dance Marathon at UF. There are so many ways to give back through DM at UF, and we would love for you to join our Dance Marathon family and <b style="color:#617ba6;"><b>help us make miracles.</b></b>
       	   		 <p>
			  	 <p><a class="btn btn-default" id="download-app" href="https://events.dancemarathon.com/index.cfm?fuseaction=donorDrive.event&eventID=4927" role="button">Register to Dance</a>
	 				<p>

				</div>
			</div>

			<div class = "col-md-12">
			<div class="container text-center">
			<h3> Opportunities </h3>
				</div>	
				<?php if ($status == "open") { ?>

				<?php
        for($i = 0; $i < count($involvement); $i++) {
        	 if($i % 4 == 0) {
            echo '<div class="row">';
         	 } ?>
			
			<div class="col-xs-3">
			<!---Button trigger modal --> 
			<a href="<?php echo ('/'.$involvement[$i]['href']); ?>"  class="btn btn-active" data-toggle="modal" >
                    <img class="img-square img-thumbnail" src="<?php echo ('assets/images/atest/'.$involvement[$i]['image']); ?>.jpg" alt="..."><br>
                    <p><?php echo $involvement[$i]['name']; ?></p>
                </a>
			</div>

				<?php
          		if(($i - 3) % 4 == 0) {
           			echo '</div>';
          		}
				} ?>		
				<?php } else { echo 'This page is currently closed.'; } ?>









             </div>

		</div>	
	</div>
</div>
	
		
		
		
		


     
	
		  <!-- Modal -->
		  <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="#myModal<?php echo $i; ?>Label">Meet <?php echo $kids[$i]['name']; ?></h3>
                  </div>
                  <div class="modal-body">
<!--
                    <img src="<?php echo ('assets/images/atest/'.$kids[$i]['image']); ?>.png" class="img-responsive img-full" />
                    <hr>
-->
                    <p>
                        <?php echo $involvement[$i]['href']; ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
	
			
    



