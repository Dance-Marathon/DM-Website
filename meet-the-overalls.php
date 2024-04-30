<?php
    $status = "open";
    $GLOBALS['page_title'] = 'Meet The Overalls | Dance Marathon at UF';
    $GLOBALS['parent'] = 'contactus';
    include("includes/head.php");
    include("includes/navbar.php");



  $overalls = array(
        
      array(
        'name'                  =>  'Ryan Athay',
        'position'              =>  'Executive Director',
        'email'                 =>  'rathay@floridadm.org',
        'image'                 =>  'RA.jpg',
      ),
      
          array(
         'name' => 'Skylar Finkel',
         'position' => 'Finance Manager',
         'email' => 'sfinkel@floridadm.org',
         'image' => 'SF.jpg',
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
        'name' => 'Ashleigh Churchill',
        'position' => 'Dancer Relations Overall',
        'email' => 'achurchill@floridadm.org',
        'image' => 'AC.jpg',
       ),
       array(
        'name' => 'Cameron Appel',
        'position' => 'Digital Marketing Overall',
        'email' => 'cappel@floridadm.org',
        'previous_involvement' => ' 2-year Dancer, Creative Development Captain',
        'major' => 'Computer Science Engineering',
        'hometown' => 'Orlando, FL',
        'outside_involvement' => 'Sigma Nu Fraternity, GatorVR',
        'free_time' => 'I enjoy exercising, listening to audiobooks and spending time with my friends. ',
        'fun_fact' => 'I am a pretty avid Yoyo-er!',
        'favorite_memory' => 'My favorite DM Memory is my first year dancing. It was my first exposure to the Dance Marathon community, and the passion and energy I felt walking into the O\'Dome that Saturday morning, seeing all of these college students so driven by this cause resonated with me greatly. ',
        'motivation' => 'The Miracle Children and their families motivate me. The children and their families go through the most challenging times anyone could imagine with a smile on their face. Their perseverance and positivity inspires me to live life to the fullest. ',
        'image' => 'CA.jpg',
       ),
        array(
         'name' => 'Anne-Charles Zimmer',
         'position' => 'Family Relations Overall',
         'email' => 'azimmer@floridadm.org',
         'previous_involvement' => 'Family Relations Captain, Assistant Director of Family Events',
         'major' => 'Mechanical Engineering',
         'hometown' => 'Sarasota, FL',
         'outside_involvement' => 'Honors Ambassadors, Orthopaedic Biomechanics Research Lab',
         'free_time' => 'I like to go to the gym, watch Netflix, and hang out with Miracle Families!',
         'fun_fact' => 'I have been SCUBA certified since I was 8 years old. I was headbutted by a shark during my first "open water" dive.',
         'favorite_memory' => 'On-stage selfie with Camden and the entire O\'Connell center during DM2018',
         'motivation' => 'A quote describes my motivation; \'To the world you may be one person, but to one person you may be the world\'. I want to make a lasting positive impact on every single person I meet.',
         'image' => 'ACZ.jpg',
         ),
        array(
        'name' => 'Dilon Bruncaj',
        'position' => 'Fundraising and Organization Development Overall',
        'email' => 'dbruncaj@floridadm.org',
        'previous_involvement' => 'Fundraising Captain, Assistant Director of Canning and Offline Transactions',
        'major' => 'Business',
        'hometown' => 'Cooper City, FL',
        'outside_involvement' => 'Dream Team, Florida Leadership Academy',
        'free_time' => 'I love spending time with my family and friends and going on adventures with my dog. I also enjoy kayaking and watching The Bachelor. ',
        'fun_fact' => 'I used to do competitive horseback riding!',
        'favorite_memory' => 'Meeting some of my best friends and people that have inspired me in ways I never imagined. ',
        'motivation' => 'Being able to create happy memories for others. I believe that everyone deserves to look back on a childhood filled with happy thoughts, unclouded by the memories of hospital visits, medication, and needles. DM at UF helps provide positive experiences for children and their families so that they can make amazing memories that will last a lifetime. Being a part of a movement that does this is truly incredible. ',
        'image' => 'DB.jpg',
       ),
        array(
       'name' => 'Ava Peiser',
         'position' => 'Hospitality Overall',
         'email' => 'apeiser@floridadm.org',
       'previous_involvement' => 'Dancer, 2-year Hospitality Captain',           'major' => 'Marketing ',
       'hometown' => 'Weston, FL',
       'outside_involvement' => 'AEΦ, Gator Innovators, JSU, UF Sensory Lab',
       'free_time' => 'I love to cook, run, watch movies, and spend time outdoors. ',
       'fun_fact' => 'I used to live in New Orleans.',
       'favorite_memory' => 'FTKitchen',
       'motivation' => 'Good music and sunsets',
       'image' => 'AP.jpg',
          ),
         array(
        'name' => 'Emma Kate Joiner',
        'position' => 'Leadership Development Overall',
        'email' => 'ejoiner@floridadm.org',
        'previous_involvement' => 'Recruitment Captain, Assistant Director of Professional Development',
        'major' => 'Marketing',
        'hometown' => 'Tallahassee, FL',
        'outside_involvement' => 'Young Leaders Conference Small Group Leader, Theta Chi Fraternity ',
        'free_time' => 'I like to watch vines, Netflix, and spending time with my friends and family.',
        'fun_fact' => 'I lived in Costa Rica for 2 years!',
        'favorite_memory' => 'My favorite DM memory comes from this past year. When the closing ceremonies video played, I was reminded of how much my team and I had accomplished over the past year. This experience with them and seeing DM at UF make 3 million miracles was such an unforgettable moment.',
        'motivation' => 'The tangible differences Dance Marathon at UF and Children\'s Miracle Network makes on the lives of children and families who need it most. ',
        'image' => 'EK.jpg',
         ),
          array(
           'name' => 'Jackie Aloumanis',
           'position' => 'Marathon Relations Overall',
           'email' => 'jaloumanis@floridadm.org',
           'previous_involvement' => 'Suncoast High School Mini Marathon Founder, Marathon Relations Captain (Saint Francis Catholic Academy), Marathon Relations Assistant Director of Southern Program',
           'major' => 'Accounting, Minor: Information Systems',
           'hometown' => 'Wellington, FL',
           'outside_involvement' => 'Former Member of the Freshman Leadership Council, Former Vice President of the Murphree Area in IRHA, and Former Development Coordinator of the Gators of Tomorrow, Treasurer of the Gators of Tomorrow, Member of the Florida Leadership Academy, Mentor in the Freshman Leadership Council',
           'free_time' => 'You\'ll catch me at Lake Wauberg: kayaking, biking, or hammocking! I also love to roadtrip, and to cook. ',
           'fun_fact' => 'I dressed as a banana and danced on the side of the road for two years to advertise for the Wellington Green Market. ',
           'favorite_memory' => 'At DM18, I had the awesome honor to be selected as the \'Assistant Director of the Year\' and accept the award on stage during the Closing Ceremonies. While receiving the award was incredible, my favorite memory was my walk to the stage. Haley, Rachel and both Declan and Ayden\'s family, wrapped me in a hug, crying, telling me how proud they were of me. That\'s a feeling I will hold onto forever, and the feeling I remember anytime I need to smile. ',
           'motivation' => 'Every day I\'m lucky to talk to the most passionate, dedicated high school and college students that have ever existed. I\'m motivated by these students, the pride they feel when their events come together, their abilities to overcome any roadblock in their path, and their passion For The Kids. I\'m motivated by one generation, fighting for the next!',
           'image' => 'JA.jpg',
          ),
         array(
        'name' => 'Kalie Wright',
        'position' => 'Merchandise Overall',
        'email' => 'kwright@floridadm.org',
        'previous_involvement' => 'Dancer, Merchandise Captain',
        'major' => 'Advertising',
        'hometown' => 'Palm Beach, FL',
        'outside_involvement' => 'Delta Gamma Chapter Management Team, Brand Ambassador for Cuffed by Nano',
        'free_time' => 'I love reading, traveling, spending time with my family, going to the beach at home, and exercising. ',
        'fun_fact' => 'I broke Google not once, but twice.',
        'favorite_memory' => 'My favorite DM memory this year was listening to Nick Mullen tell his Miracle Story. This was so special to me because when I first met him in the beginning of the year, he did not like to tell his story in front of even a small group of Merchandise Captains, but at the event he stood up in front of 800 people and nailed it! This was such an eye opening moment for me where I realized that not only are we raising funds for this cause, but we are also offering love and support to each of these children. ',
        'motivation' => 'Each story I hear and each family I meet drives my passion for this organization! ',
        'image' => 'KW.jpg',
       ),
       array(
        'name' => 'Filomena Selvanik',
        'position' => 'Morale Overall',
        'email' => 'fselvanik@floridadm.org',
        'previous_involvement' => 'Dancer, 2-year Morale Captain ',
        'major' => 'Applied Physiology and Kinesiology ',
        'hometown' => 'Tampa, FL',
        'outside_involvement' => 'Volunteer at Shands Children\'s Hospital with Dream Team in the Cardiac Pediatric Intensive Care Unit, Volunteer at the Boys and Girls Club with the School Health Interdisciplinary Program, Alpha Delta Pi Intramural Chair and Executive Director of Event Planning, Former Small Group Leader for Student Government\'s Young Leaders Conference',
        'free_time' => 'What free time?',
        'fun_fact' => 'I\'ve owned venus fly traps, a hermit crab, and a dwarf hamster, and 2 crocs all in college.',
        'favorite_memory' => 'My favorite DM memory was sitting at the top of the O\'Dome watching over a thousand people do the Linedance and how it brought them all together and made everyone so happy! ',
        'motivation' => 'The kids. Their love for life under the hardest circumstances pushes me every single day to do everything that I can for them.  They deserve the world and the fact that DM at UF brings together so many students who all fight for something bigger than themselves is so inspring.',
        'image' => 'FS.jpg',
        ),
         array(
        'name' => 'Braden Romano',
        'position' => 'Multimedia Overall',
        'email' => 'bromano@floridadm.org',
        'previous_involvement' => 'Assistant Director of Videography',
        'major' => 'Telecommunications (Production) and Marketing',
        'hometown' => 'Tampa, FL',
        'outside_involvement' => 'Video and Editing Director for Gator Growl, Journalism and Communications Ambassadors, Brother of the Chi Phi Fraternity',
        'free_time' => 'In my free time I enjoy watching movies , improving my filmmaking skills, and hanging out by the pool. ',
        'fun_fact' => 'I was born in Guayaquil, Ecuador and I am bilingual.',
        'favorite_memory' => 'My favorite DM memory was near the end of this year\'s Opening Ceremony. I was in charge of making the Opening Ceremonies video and this year we decided to incorporate the moment that the Dancers stood up into the video. My favorite memory was this moment in which the Dancers realized it was time for their 26.2 hour journey to begin. This was my favorite memory because it meant our video was successful in sending our message across without necessarily telling the Dancers they had to stand up.',
        'motivation' => 'What motivates me is my passion for filmmaking and helping others.',
        'image' => 'BR.jpg',
       ),

         array(
            'name' => 'Dylan Goodelle',
            'position' => 'Productions Overall',
            'email' => 'dgoodelle@floridadm.org',
            'previous_involvement' => 'Dancer, Productions Captain, Assistant Director of Talent Relations',
            'major' => 'Journalism and Psychology',
            'hometown' => 'Tarpon Springs, FL',
            'outside_involvement' => 'Swamp Records, Alpha Chi Omega, UF Honors Program, Intern for Children\'s Miracle Network at UF Health ',
            'free_time' => 'I love to spend time with my friends and family, read, travel, run and do yoga. I also love listening to music and going to concerts. I\'m also up to get ice cream at any time of day.',
            'fun_fact' => 'I have been playing the piano since I was six years old! ',
            'favorite_memory' => 'It is so difficult to choose just one, but my favorite DM memory would have to be the moment immediately following the total reveal at DM at UF 2018. Truthfully, the number had almost nothing to do with it. I looked at the number for a second and was filled with pride, but then I turned my attention to everyone\'s faces. I noticed everyone in the room was overcome with emotion. I watched friends embrace and Miracle Children jump into our arms, tears streaming down their faces. There wasn\'t a dry eye in the house. Watching hundreds upon hundreds of people realizing the magnitude of their efforts was absolutely incredible. The moment after the total reveal is so much more than seeing a number. It is hope, joy and knowledge that our efforts and goals have come to fruition. We made a tangible, real impact on the lives of these kids we treasure so much. I will never forget that moment. ',
            'motivation' => 'Our Miracle Children and their families! They are some of the most wonderful people I have ever met, and I am forever grateful to be a part of their lives. They make me want to be a better person. Additionally, I am motivated by everyone involved in Dance Marathon at UF. Seeing hundreds of students work tirelessly and selflessly to help the kids is truly inspiring. It is a privilege to work alongside them to fight for our Miracle Children to have the healthy lives and futures they deserve. ',
            'image' => 'DG.jpg',
         ),
          array(
        'name' => 'Averie Engel',
        'position' => 'Public Relations Overall',
        'email' => 'aengel@floridadm.org',
        'previous_involvement' => 'Public Relations Captain, Assistant Director of Social Media',
        'major' => 'Accounting',
        'hometown' => 'Memphis, TN',
        'outside_involvement' => 'Group Fitness Instructor at RecSports, Chi Omega Sorority, Leadership Ambassador for the Warrington Leadership Development Program',
        'free_time' => 'I love traveling, exercising, watching Netflix, and spending time outside! ',
        'fun_fact' => 'I am a Justin Timberlake enthusiast!',
        'favorite_memory' => 'Every year during the event I always find 20 minutes to go sit up in the bleachers of the O\'Dome and let everything soak in. As I step away from the craziness and give myself time to reflect on the year, I always find myself overwhelmed with gratitude for DM at UF. I will always hold those special moments close to my heart!',
        'motivation' => 'Every time I see the colorful windows of UF Shands Children\'s Hospital, I am reminded of the unimaginable battles that take place within those walls. The brave children who persevere through the hardest of times will forever motivate me and inspire me to continue our fight FTK.',
        'image' => 'AE.jpg',
        ),

         array(
        'name' => 'Mary Kate Arbuckle',
        'position' => 'Recruitment Overall',
        'email' => 'marbuckle@floridadm.org',
        'previous_involvement' => 'Emerging Leaders Program, Recruitment Captain',
        'major' => 'Sociology',
        'hometown' => 'Orlando, FL',
        'outside_involvement' => 'Child Life and Ronald McDonald House Volunteer',
        'free_time' => 'I enjoy hanging out with friends and watching movies!',
        'fun_fact' => 'If there was one place I’d want to spend the rest of my life it would be Disney World!',
        'favorite_memory' => 'My favorite DM memory was seeing the Miracle kids become emotional when we hit $3 million last year. It showed that they appreciate all that we do and that they are just as proud of us as we are of them! ',
        'motivation' => 'The Miracle Children motivate me everyday to live life to the fullest. They remind me that life is too short to be anything less than happy and that everyday can and should be a good day. They are true warriors that inspire me every single day! ',
        'image' => 'MKA.jpg',
         ),

          array(
           'name' => 'Ryan Athay',
           'position' => 'Sponsorships Overall',
           'email' => 'rathay@floridadm.org',
           'previous_involvement' => 'Sponsorships Captain',
           'major' => 'Biology and Spanish',
           'hometown' => 'Fort Lauderdale, FL',
           'outside_involvement' => 'Gift of Life Bone Marrow Registry Campus Ambassador, Member of Best Buddies, Research Assistant in the College of Medicine',
           'free_time' => 'I enjoy hanging out with friends, eating (preferably Mexican), and shopping.',
           'fun_fact' => 'I used to be Tumblr famous in 2012. ',
           'favorite_memory' => 'Getting my hospital band cut off by Elie at closing ceremonies last year was definitely a powerful moment. It really bought together everything we had worked so hard for and reminded me why we do what we do.',
           'motivation' => 'I\'ve always loved working with and helping kids. After graduation, I hope to go to medical school to pursue my dream of becoming a pediatrician.',
           'image' => 'RA.jpg',
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
