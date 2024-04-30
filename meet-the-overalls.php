<?php
    $status = "open";
    $GLOBALS['page_title'] = 'Meet The Overalls | Dance Marathon at UF';
    $GLOBALS['parent'] = 'contactus';
    include("includes/head.php");
    include("includes/navbar.php");



  $overalls = array(
        
      array(
        'name'       =>  'Ryan Athay',
        'position'   =>  'Executive Director',
        'email'      =>  'rathay@floridadm.org',
        'image'      =>  'RA.jpg',
      ),
      
      array(
        'name'       =>  'Skylar Finkel',
        'position'   =>  'Finance Manager',
        'email'      =>  'sfinkel@floridadm.org',
        'image'      =>  'SF.jpg',
      ),

        array(
         'name' => 'Macy Thompson',
         'position' => 'Operations Manager',
         'email' => 'mthompson@floridadm.org',
         'image' => 'MT.jpg',
        ),

        array(
        'name'                  =>  'Sydney Wall',
        'position'              =>  'Marketing Manager',
        'email'                 =>  'swall@floridadm.org',
        'image'                 =>  'SW.jpg',
      ),
      array(
        'name'                  =>  'Abby Ferrell',
        'position'              =>  'Membership Manager',
        'email'                 =>  'aferrell@floridadm.org',
        'image'                 =>  'AF.jpg',
      ),
             array(
        'name' => 'Cameron Appel',
        'position' => 'Digital Marketing Overall',
        'email' => 'cappel@floridadm.org',
        'image' => 'CA.jpg',
       ),
       array(
        'name' => 'Raegan Direnzo',
        'position' => 'Dancer Engagement Overall',
        'email' => 'rdirenzo@floridadm.org',
        'image' => 'RD.jpg',
       ),
       array(
        'name' => 'Dawson Geller',
        'position' => 'Family Relations Overall',
        'email' => 'dgeller@floridadm.org',
        'image' => 'DG.jpg',
       ),
        array(
         'name' => 'Ryan Beany',
         'position' => 'Finance Overall',
         'email' => 'rbeany@floridadm.org',
         'image' => 'BEANY.png',
         ),
        array(
        'name' => 'Sophie Linale',
        'position' => 'Leadership Development Overall',
        'email' => 'slinale@floridadm.org',
        'image' => 'SL.jpg',
       ),
        array(
       'name' => 'Lexi Devescovi',
         'position' => 'Marathon Relations Overall',
         'email' => 'ldevescovi@floridadm.org',
       'image' => 'LD.jpg',
          ),
         array(
        'name' => 'Olivia Knier',
        'position' => 'Merchandise Overall',
        'email' => 'oknier@floridadm.org',
        'image' => 'OK.jpg',
         ),
          array(
           'name' => 'Dylan Siegel',
           'position' => 'Morale Overall',
           'email' => 'dsiegel@floridadm.org',
           'image' => 'DS.png',
          ),
         array(
        'name' => 'Ava Dinow',
        'position' => 'Multimedia Overall',
        'email' => 'adinow@floridadm.org',
        'image' => 'AD.jpg',
       ),
       array(
        'name' => 'Caroline Lee',
        'position' => 'Organization Relations Overall',
        'email' => 'clee@floridadm.org',
        'image' => 'CL.jpeg',
        ),
         array(
        'name' => 'Averie Engel',
        'position' => 'Outreach Overall',
        'email' => 'aengel@floridadm.org',
        'image' => 'AE.jpg',
       ),

         array(
            'name' => 'Jessica Winograd',
            'position' => 'Partnerships Overall',
            'email' => 'jwinograd@floridadm.org',
            'image' => 'JW.jpg',
         ),
          array(
        'name' => 'Caroline Eaton',
        'position' => 'Productions Overall',
        'email' => 'ceaton@floridadm.org',
        'image' => 'CE.jpg',
        ),

         array(
        'name' => 'Grey Chapin',
        'position' => 'Public Relations Overall',
        'email' => 'gchapin@floridadm.org',
        'image' => 'GC.jpg',
         ),

          array(
           'name' => 'Ava Orlando',
           'position' => 'Recruitment Overall',
           'email' => 'aorlando@floridadm.org',
           'previous_involvement' => 'Sponsorships Captain',
           'major' => 'Biology and Spanish',
           'hometown' => 'Fort Lauderdale, FL',
           'outside_involvement' => 'Gift of Life Bone Marrow Registry Campus Ambassador, Member of Best Buddies, Research Assistant in the College of Medicine',
           'free_time' => 'I enjoy hanging out with friends, eating (preferably Mexican), and shopping.',
           'fun_fact' => 'I used to be Tumblr famous in 2012. ',
           'favorite_memory' => 'Getting my hospital band cut off by Elie at closing ceremonies last year was definitely a powerful moment. It really bought together everything we had worked so hard for and reminded me why we do what we do.',
           'motivation' => 'I\'ve always loved working with and helping kids. After graduation, I hope to go to medical school to pursue my dream of becoming a pediatrician.',
           'image' => 'AO.jpg',
         ),

        


  );
?>

<style>
.page-heading.parallax.meet-the-overalls {
background-image: url("/assets/images/BannerPhotos21/contact us copy.jpg");
}

.last-images-container {
    display: flex;
    justify-content: center;
}
</style>

<div class="page-heading parallax meet-the-overalls">
  <div class="inner-wrapper">
      <div class="container">
        <div class="row">
              <div class="col-md-12">
                <h1>Meet The Overalls</h1>
              </div>
        </div>
      </div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
      <?php if ($status == "open") { ?>
        <?php
        for($i = 0; $i < count($overalls); $i++) {

          if($i % 3 == 0) {
            echo '<div class="row">';
          }
          
          if($i == count($overalls) - 2) {
            echo '</div><div class="last-images-container">';
          }

          ?>
          <div class="col-sm-4">
            <a href="#" style="display: block;" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
              <img style="border: none;" class="img-circle img-thumbnail" src="<?php echo ('/assets/images/OT25 Headshots/'.$overalls[$i]['image']); ?>" alt="..."><br>
              <h3><?php echo $overalls[$i]['name']; ?></h3>
            </a>
            <p style="text-align: center;">
              <em><?php echo $overalls[$i]['position']; ?></em>
              <br><a href="mailto:<?php echo $overalls[$i]['email']; ?>"><?php echo $overalls[$i]['email']; ?></a>
            </p>
          </div>
                    <!-- if function below = it was undergrad it will click (none do) change to name so that the two next to drew dont click after everyone has info -->
                    <?php
                    // if($overalls[$i]['major']){
                        if(false){
                     ?>
          <div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h3 class="modal-title" id="#myModal<?php echo $i; ?>Label">Meet <?php echo $overalls[$i]['name']; ?></h4>
                </div>

                <div class="modal-body">
                  <h4>Previous DM Involvement</h4>
                  <p><?php echo $overalls[$i]['previous_involvement']; ?></p>

                  <?php if($overalls[$i]['grad']){ ?>
                  <h4>Graduate</h4>
                  <p><?php echo $overalls[$i]['grad']; ?></p>
                  <?php } ?>

                  <?php if($overalls[$i]['undergrad']){ ?>
                  <h4>Undergrad</h4>
                  <p><?php echo $overalls[$i]['undergrad']; ?></p>
                  <?php } ?>

                  <?php if($overalls[$i]['major']){ ?>
                  <h4>Major</h4>
                  <p><?php echo $overalls[$i]['major']; ?></p>
                  <?php } ?>

                  <?php if($overalls[$i]['minor'] !== "" && $overalls[$i]['minor']){ ?>
                  <h4>Minor</h4>
                  <p><?php echo $overalls[$i]['minor']; ?></p>
                  <?php } ?>

                  <h4>Hometown</h4>
                  <p><?php echo $overalls[$i]['hometown']; ?></p>

                  <h4>Outside Involvement</h4>
                  <p><?php echo $overalls[$i]['outside_involvement']; ?></p>

                  <h4>In My Free Time...</h4>
                  <p><?php echo $overalls[$i]['free_time']; ?></p>

                  <h4>Fun Fact</h4>
                  <p><?php echo $overalls[$i]['fun_fact']; ?></p>

                  <h4>Favorite DM Memory</h4>
                  <?php echo $overalls[$i]['favorite_memory']; ?>

                  <h4>What Motivates You?</h4>
                  <?php echo $overalls[$i]['motivation']; ?>
                </div>

              </div>
            </div>
          </div>

                    <?php } ?>
        <?php
          if(($i - 2) % 3 == 0) {
            echo '</div>';
          }
        } ?>
        <!--        <div>
                    <h2>Donation Problems?</h2>
                    <p>If you have Classy questions, or problems with a donation, please contact <a href="mailto:cgaulding@floridadm.org ">cgaulding@floridadm.org </a></p>
                </div> -->
      <?php } else { echo 'This page is currently closed.'; } ?>
            </div>

        </div>
    </div>
</div>

<?php include("includes/foot.php"); ?>
