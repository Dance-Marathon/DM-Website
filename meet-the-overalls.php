<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Meet The Overalls | Students | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");

  $overalls = array(
		array(
			'image'                 =>  'Blank'
		),
    array(
      'name'                  =>  'Drew Carlton',
      'position'              =>  'Overall Director',
      'email'                 =>  'dcarlton@floridadm.org',
      'previous_involvement'  =>  'Dancer with the Sigma Chi Fraternity, Marathon Relations Captain, Marathon Relations Overall',
      'major'                 =>  'Microbiology and Cell Science',
      'minor'                 =>  'Business Administration',
      'hometown'              =>  'Sanibel, FL',
      'outside_involvement'   =>  'In addition to my position on the Overall Team, I am an active member of the Florida Cicerones, the official student ambassadors of UF where I serve as the committee chair for Dance Marathon within the organization. I am a member of the Sigma Chi fraternity having served as Rush Chair, Public Relations Chair and responsible for organizing the Derby Days Philanthropy benefiting UF Health Shands Children&#39;s Hospital and the Huntsman Cancer Foundation. Through the College of Agriculture and Life Sciences, I conduct both independent and cohort research in the Food Science and Human Nutrition Department. I also remain involved within the Honors Program, HHMI undergraduate research organization, volunteer at the American Cancer Society and have served as an Assistant Director for Gator Growl as well as a student Senator. ',
      'free_time'             =>  'What’s free time? I do my best to run and workout, spend my time long boarding, hearing live music, playing sports and going to the beach.',
      'fun_fact'              =>  'I have 14 siblings with number 15 on the way! Yes, 14. I’m also red and green color-blind.',
      'favorite_memory'       =>  'My favorite DM memory comes from a High School Dance Marathon when I first met Zander, one of the miracle children. Throughout my life I have had the great benefit of watching my younger siblings grow up. One of the most moving experiences is understanding that within every child is the sole desire to be a kid - to be carefree, imaginative and love without boundaries. Despite Zander&#39;s condition, he will continue to play until he physically needs to stop. As we were playing a game during one of the theme hours, I saw within him the sole desire to be like every other kid. His positivity, love of life, and unending strength that day will remain one of my favorite memories.',
      'motivation'            =>  'I had class one semester in Shands Medical Sciences Building, the same area where the Children&#39;s Miracle Network Hospital is located. Every day that I walked to class I would pass by a plaque on the wall with a quote from Winston Churchill that reads, “We make a living by what we get, but we make a life by what we give.” Dance Marathon has given me the opportunity to make a life. In my opinion, everyone has a favorite word whether they realize it or not. Mine happens to be a relatively simple four-letter word we whisper to ourselves and echo through our lives: hope. Hope is how Dance Marathon is able to give, grow and impact the lives of so many individuals. Hope is what drives research, fuels Healthcare and inspires every person to become involved within this organization. I hope for a cure and a day that I will no longer need to dance, but until then I will work tirelessly to pursue a life in medicine and fuel the hope that I see within the eyes of every miracle child.',
      'image'                 =>  'Drew'
    ),
		array(
			'image'                 =>  'Blank'
		),
    array(
      'name'                  =>  'Jacob Leuze',
      'position'              =>  'External Communication Overall',
      'email'                 =>  'jleuze@floridadm.org',
			'previous_involvement'  =>  'Hospitality staff, Hospitality Captain, Public Relations Captain',
      'major'                 =>  'Finance',
      'minor'                 =>  'Entrepreneurship',
      'hometown'              =>  'Seaside, FL',
      'outside_involvement'   =>  'Outside of DM I was involved with my fraternity, Kappa Phi Epsilon where I served as President. I was also on the Freshman Leadership Council but the majority of my involvement is with Dance Marathon.',
      'free_time'             =>  'In my free time I like to eat and take naps.',
      'fun_fact'              =>  'I used to (and still do every once in a while!) eat Cheez-Its dipped in apple sauce for lunch every day.',
      'favorite_memory'       =>  'My favorite Dance Marathon memory was during Dance Marathon 2015. This was my first year being a captain and being completely immersed in Dance Marathon during the event. Being able to watch the families come on stage and tell their stories while over 800 tired dancers listened while smiling with tears running down their faces. My favorite memory of that Dance Marathon was when the final numbers were revealed because in that moment I was able to watch the Miracle Families become embraced by dancers and captains. The love and compassion shown to those families was so intense that I have never seen anything like it. ',
      'motivation'            =>  'Knowing that the fundraising Dance Marathon does saves lives and that one day every child will have a normal childhood.',
      'image'                 =>  'Jacob'
    ),
    array(
      'name'                  =>  'Grace Caswell',
      'position'              =>  'Internal Communication Overall',
      'email'                 =>  'gcaswell@floridadm.org',
			'previous_involvement'  =>  'Recruitment Captain, Recruitment Overall',
      'minor'                 =>  'Health Education and Human Behavior',
      'hometown'              =>  'Atlanta, GA',
      'outside_involvement'   =>  'Chi Omega Sorority, UF Health Volunteer',
      'free_time'             =>  'I love to spend time with family, especially at the lake or on the water, travel anywhere and everywhere, eat, dance, sing, and hang out with friends',
      'fun_fact'              =>  'I can&#39;t do a cartwheel',
      'favorite_memory'       =>  'After working tirelessly for months as captains, the Recruitment team clutched hands together at the end of the event this past year. Throughout the year we had grown closer and closer, and in that moment came together as a family. As the numbers slowly rose into the air, I could not control my tears when I saw the number 2, symbolizing that we had raised over two million dollars For The Kids. Our own little close-knit family stood right behind the families and kids we had come together to help support. In that moment, I truly experienced what it was like to be apart of something bigger than myself, and such a humbling experience really is life-changing.',
      'motivation'            =>  'Dance Marathon gives me new inspiration and passion every single day. It is hard to put into words the bravery and resilience of not only our miracle children, but also their siblings, parents, family and friends. Their joy can light up any room, or brighten anyone&#39;s day. I want to be able to give as much of that joy and inspiration back to them. These kids have made such an impact on my life, that I want to be able of making miracles in theirs.',
      'image'                 =>  'Grace'
    ),
    array(
      'name'                  =>  'Jesse Sands',
      'position'              =>  'Finance Overall',
      'email'                 =>  'jsands@floridadm.org',
			'previous_involvement'  =>  'Finance Captain',
			'grad'                  =>  'Accounting',
      'major'                 =>  'Accounting',
      'hometown'              =>  'Deland, FL',
      'free_time'             =>  'I enjoy sunsets and long walks on the beach',
      'fun_fact'              =>  'I&#39;ve visited 17 different countries',
      'favorite_memory'       =>  'My favorite DM memory has to be visiting the hospital and getting to hang out and play video games with a kid who had been in the hospital for about a month at the time.  His spirit and joy really gave life to the meaning behind Dance Marathon.',
      'motivation'            =>  'Knowing that I can make a tangible difference in the lives of those that are most in need of help is what pushes me to do my best.  Any little thing helps for those that need it most and being able to provide even a little bit of comfort is an incredible feeling.',
      'image'                 =>  'Jesse'
    ),
		array(
      'name'                  =>  'Adam Lassley',
      'position'              =>  'Community Events Overall',
      'email'                 =>  'alassley@floridadm.org',
      'previous_involvement'  =>  'Dancer, Community Events Captain (2 years)',
      'major'                 =>  'Biochemistry',
      'hometown'              =>  'Jacksonville, FL',
      'outside_involvement'   =>  'In addition to Dance Marathon, I am a member of Delta Tau Delta fraternity where I have previously served as Director of Academic Affairs for the Executive board, Director of Sponsorships for our Miss Greek philanthropy, and Risk Management Chair. I also have been an Assistant Director for Gator Growl for two years, and have done undergraduate research at the McKnight Brain Institute for a year. Currently, I volunteer in the Pediatrics department at Shands Children&#39;s Hospital and mentor 1st graders after school at Rawlings Elementary School.',
      'free_time'             =>  'I love to go on vacations with my family, especially to the mountains to go skiing or to the woods to go camping. I also really enjoy sailing, playing and watching sports, hanging out with friends and my awesome girlfriend, and listening to live music.',
      'fun_fact'              =>  'I have a sour patch kids addiction',
      'favorite_memory'       =>  'When I was a dancer my freshman year, Nate, one of the miracle children, came up to me and asked me if I wanted to race him in a footrace. When I told him I did, he got super excited and happy. All Nate wanted to do was be a kid, play, and have a fun time. Even though he has a condition which has caused him to be hospitalized many times during his life, he still wants to live as normal of a child life as he can. It was that moment that everything about Dance Marathon came together for me. Not only are we raising money for treatment, research, and care of the kids at Shands Children&#39;s Hospital, but we are also doing all that we can to make these kids feel like rockstars, give them hope, and make them happy throughout their struggles. ',
      'motivation'            =>  'Each morning I wake up and think about how lucky I am. I have always been healthy, I was born into a healthy family, and my parents have always been able to support me and my siblings as we continue to grow. This motivates me every single day to help those less fortunate than I am. Dance Marathon is the perfect way for me to dedicate my time and talents to benefit children with struggles that put them in the hospital throughout their childhood. I have gained so much passion for this organization, for the kids, and for their families over the past 2 years. I have come to realize that these children have more heart, strength, and bravery than anyone else I know and they work hard to overcome adversities way more often than I have ever had to. I am inspired and motivated to give the kids the hope and happiness they deserve, and I will continue to do so this year as well as throughout the rest of my life.',
      'image'                 =>  'Adam'
    ),
    array(
      'name'                  =>  'Tami Moreno',
      'position'              =>  'Creative Development Overall',
<<<<<<< HEAD
      'email'                 =>  'sregula@floridadm.org',
      'previous_involvement'  =>  'Staff Member, Dancer, Creative Development Captain',
      'major'                 =>  '',
      'hometown'              =>  'Mount Dora, FL',
      'outside_involvement'   =>  'In addition to my involvement with Dance Marathon, I was an active member of various organizations on campus.  I was a member of Alpha Epsilon Phi, Panhellenic Council (Panhellenic Counselor), Student Government Productions (Assistant Vice Chair of Marketing), Impact Party (APC of Graphic Design), and University of Florida Housing and Residence Department (Marketing Student Assistant)',
      'free_time'             =>  'When I am not attached to my computer, I like to find a new adventure around town or burning food while I pretend to be a chef.',
      'fun_fact'              =>  'For 6 years of my life (from ages 14-20), I spent my summers working as a scenic artist for theme parks like Disney and Universal! I&#39;ve worked on everything from designing and painting the Halloween Horror Nights houses at Universal, to sculpting pieces for the new Avatar section in Animal Kingdom, and even helping with the dragon on top of Gringotts Bank in The Wizarding World of Harry Potter!',
      'favorite_memory'       =>  'As I wandered into Shands children’s hospital a woman stopped me and said “Thank You”. As she saw the confused look on my face she said again, now louder: “Thank you for all the hard work you did and will do. We are truly thankful, because of you guys; I still have my son with me”. I then realized that she was talking about my involvement with the organization. I did not know this woman nor she knew me but at that moment I could see that she was truly thankful. That’s when I realized that as much as all the work we do was not directly at the with the patients, it was still improving and saving lives of those at Shands children’s Hospital.',
      'motivation'            =>  'Seeing and realizing that the miracles we create are not just for better technology or research but the miracles of hope. Dance Marathon at the University of Florida has given hope and happiness to a lot of families around the state! That truly makes me happy and hope that I can help create many more miracles like these!',
      'image'                 =>  'Sam',
=======
      'email'                 =>  'tmoreno@floridadm.org',
      'previous_involvement'  =>  'Dancer, Spirit staff, Art and Layout Captain, Assistant Director of Graphic Design',
      'major'                 =>  'Graphic Design',
      'hometown'              =>  'Aventura, FL',
      'outside_involvement'   =>  'In addition to my involvement with Dance Marathon, I was an active member of various organizations on campus.  I was a member of Alpha Epsilon Phi, Panhellenic Council (Panhellenic Counselor), Student Government Productions (Assistant Vice Chair of Marketing), Impact Party (APC of Graphic Design), and University of Florida Housing and Residence Department (Marketing Student Assistant)',
      'free_time'             =>  'When I am not attached to my computer, I like to find a new adventure around town or burning food while I pretend to be a chef. ',
      'fun_fact'              =>  'I lived Exactly half my life at another country',
      'favorite_memory'       =>  'As I wandered into Shands children’s hospital a woman stopped me and said “Thank You”. As she saw the confused look on my face she said again, now louder: “Thank you for all the hard work you did and will do. We are truly thankful, because of you guys; I still have my son with me”. I then realized that she was talking about my involvement with the organization. I did not know this woman nor she knew me but at that moment I could see that she was truly thankful. That’s when I realized that as much as all the work we do was not directly at the with the patients, it was still improving and saving lives of those at Shands children’s Hospital.',
      'motivation'            =>  'Seeing and realizing that the miracles we create are not just for better technology or research but the miracles of hope. Dance Marathon at the University of Florida has given hope and happiness to a lot of families around the state! That truly makes me happy and hope that I can help create many more miracles like these!',
      'image'                 =>  'Tami'
>>>>>>> parent of caaac50... new Meet the Overalls!!!
    ),
    array(
      'name'                  =>  'Rachel Carter',
      'position'              =>  'Dancer Relations Overall',
      'email'                 =>  'rcarter@floridadm.org',
      'previous_involvement'  =>  'Dancer, Dancer Relations Captain (2 years)',
			'major'                 =>  'Marketing',
      'hometown'              =>  'Gulf Breeze, Florida',
      'outside_involvement'   =>  'In addition to Dance Marathon, I am an active member of Footprints which involves volunteering with the patient population in the Pediatric Immunocompromised Unit at Shands Children&#39;s Hospital. I am also a second year Panhellenic Counselor serving female Gators and connecting them to the UF community. ',
      'free_time'             =>  'I love spending time with my friends and family. I also enjoy traveling, exercising, and obsessing over Tim Riggins while watching Friday Night Lights.',
      'fun_fact'              =>  'I legitimately thought I could open the portal to Halloweentown when I was a kid.',
      'favorite_memory'       =>  'This year my sister and I were not able to go home for Easter. My sister was a Family Relations Captain this past year, and she was paired with the Ayres family. The Ayres invited us over for Easter, and I just really realized in that moment when we were all eating dinner together that DM has given me a second family. There really is nothing that compares to the joy that comes from giving to others.',
      'motivation'            =>  'The people around me motivate me. The kids that I volunteer with in the hospital motivate me. We aren&#39;t meant to fight these battles alone, and one thing we all can give is our time. I 100% believe we are called to serve others. I continuously give my best because of the people I work with, the families that I have been so grateful to meet, and all of the people that support this cause. ',
      'image'                 =>  'RachelC'
    ),
		array(
      'name'                  =>  'Taytum Orshan',
      'position'              =>  'Family Relations Overall',
      'email'                 =>  'torshan@floridadm.org',
      'previous_involvement'  =>  'Dancer, Delegate, Family Relations Captain',
      'major'                 =>  'Sociology with a concentration in Child Life',
      'hometown'              =>  'Boca Raton, FL',
      'outside_involvement'   =>  'In addition to my position as Family Relations Overall, I am a member of the Delta Phi Epsilon sorority where I have held positions as Banner Chair and served on the Risk Management Board. I also served as a Panhellenic Recruitment Counselor (Pi Chi) this past year. Lastly, I am currently a UF Health Volunteer within the Child Life Program.',
      'free_time'             =>  'My favorite thing to do is listen to music, whether that is via spotify or going to concerts. I love live music and I&#39;ve been to over 30 concerts. I enjoy spending time with my family and friends, eating breakfast, going to the beach, playing basketball and playing with puppies.',
      'fun_fact'              =>  'I make my bed every morning, even when I&#39;m running late',
      'favorite_memory'       =>  'This past year I had the incredible opportunity to serve as a Family Relations Captain. With this position I have been fortunate enough to meet so many unbelievable and inspiring Miracle Children. One memory that stands out to me is when a handful of Miracle Children and their families played a game of Humans Versus Zombies. My miracle child when I was a captain, Elie, decided she wanted to participate in the game. I remember running through campus with her pretending to be spies and find the "zombies." These "zombies" did an excellent job hiding and Elie kept getting scared by them and the two of us would hold hands and run as fast as we could so we didn&#39;t get tagged. By the end of the day, the two of us were exhausted from non-stop laughing and also running. In that afternoon, Elie was a 9 year old girl playing a game of tag and we were simply having fun, no doctors or medicine or disease to worry about, just having fun.',
      'motivation'            =>  'Three letters are what truly motivates me, F, T, and K. These three letters stands for "For The Kids" and that is exactly how I am motivated. The Miracle Children are my true pride and joy and bring such a light into my life. Every story I hear, or child that I meet, truly inspires me in a multitude of ways. The bravery and strength all of our Miracle Families have because they have to go through such hardships at such a young age are so motivational. A word that is very impactful to me is Joy. For those who don&#39;t know, my middle name is Joy, but these families are my Joy. Every morning knowing I am having the opportunity to help better the lives of families and children that I have met, and even those I have yet to meet, give me such joy and never fails to put a smile on my face. These children and their families have taught me so many lessons I will keep for the rest of my life and knowing I have the opportunity to give back to these families half of what they have given to me motivates me through everything.',
      'image'                 =>  'Taytum'
    ),
    array(
      'name'                  =>  'Allie Becher',
      'position'              =>  'Fundraising Overall',
      'email'                 =>  'abecher@floridadm.org',
			'previous_involvement'  =>  'Dancer, Finance Captain',
      'major'                 =>  'Finance',
      'hometown'              =>  'Boca Raton, FL',
      'outside_involvement'   =>  'Delta Gamma Chapter Management Team, Gator Student Investment Fund ',
      'free_time'             =>  'I like to paint, exercise, read, and travel ',
      'fun_fact'              =>  'I&#39;m a die-hard Bruce Springsteen fan',
      'favorite_memory'       =>  'My favorite DM memory is walking into the O&#39;Dome before Opening Ceremonies during my first year participating. The atmosphere was euphoric, with the Miracle Children giving high fives by the door and the Captains cheering us on. Every single person in sight was beaming and so excited for the next 26.2 hours, and it was very apparent how much passion was truly behind this organization. ',
      'motivation'            =>  'Making people smile :)',
      'image'                 =>  'Allie'
    ),
    array(
      'name'                  =>  'Katie Trethewey',
      'position'              =>  'Hospitality Overall',
      'email'                 =>  'ktrethewey@floridadm.org',
			'previous_involvement'  =>  '',
      'minor'                 =>  '',
      'hometown'              =>  '',
      'outside_involvement'   =>  '',
      'free_time'             =>  '',
      'fun_fact'              =>  '',
      'favorite_memory'       =>  '',
      'motivation'            =>  '',
      'image'                 =>  'Katie'
    ),
    array(
      'name'                  =>  'Rachel Auld',
      'position'              =>  'Marathon Relations Overall',
      'email'                 =>  'rauld@floridadm.org',
			'previous_involvement'  =>  'Dancer, Marathon Relations Captain',
      'major'                 =>  'Accounting',
      'hometown'              =>  'Orlando, FL',
      'outside_involvement'   =>  'In addition to my position as Marathon Relations Overall, I am an active member in Kappa Delta Sorority, serving as the assistant treasurer and intramural chair. I served as a Panhellenic counselor (Pi Chi) for possible new members looking to join the Panhellenic community or other organizations on UF&#39;s campus. Also, I am involved in Order of Omega and Foundation for International Education. ',
      'free_time'             =>  ' I enjoy eating a lot of macaroni and cheese, going to the beach, simultaneously napping and netflixing. ',
      'fun_fact'              =>  'I have an identical mirror-image twin sister. ',
      'favorite_memory'       =>  'My favorite DM memory comes from a High School Dance Marathon in 2014. During the middle of the event, Zander and his parents surprised all the high school students and faculty by showing up halfway through and sharing their story. Zander&#39;s family drove over four hours to speak to these students about how Children&#39;s Miracle Network has changed there lives.  The passion and love that was expressed through their story brought everyone to tears. It caused a ripple affect and electrified the schools campus on what #FTK really means.',
      'motivation'            =>  'Children&#39;s Miracle Network and Dance Marathon at the University of Florida. This organization gives me the inspiration and opportunity to help thousands of children and their families. ',
      'image'                 =>  'RachelA'
    ),
    array(
      'name'                  =>  'Kristy Potter',
      'position'              =>  'Merchandise Overall ',
      'email'                 =>  'kpotter@floridadm.org',
			'previous_involvement'  =>  'Operations Staff, Hospitality Staff, Merchandise Captain',
			'grad'                  =>  'Entrepreneurship',
      'major'                 =>  'Double Major in Business Management and Information Systems',
      'minor'                 =>  'Entrepreneurship',
      'hometown'              =>  'Santa Rosa Beach, FL',
      'outside_involvement'   =>  'Outside of my involvement with Dance Marathon I am involved in my sorority Pi Beta Phi where I have served as a member of the Ritual Committee, Membership Board, and on the executive council as the Vice President of Fraternal Development. ',
      'free_time'             =>  'In my free time I like to spend time with family and friends preferably on the beach or riding around in my Jeep with the top down.',
      'fun_fact'              =>  'I have a strange addiction with cheese and Churros, separately of course',
      'favorite_memory'       =>  'My favorite Dance Marathon memory was standing together as a team with the Merchandise Captains during closing ceremonies. We all knew that a year of hard work, laughs, and countless hours at the DM Store came down to this moment, the total that was going to be raised on the stage and the lives we will have impacted. When that total was raised and we all started sobbing it made everything worth it. ',
      'motivation'            =>  'I don&#39;t think anyone can meet a miracle child or their family and not be inspired to do everything they can to make their lives better. Seeing how strong these kids and their families are everyday drives me to give back everything I can to this organization and to these families. Their constant smiles despite their hardships motivates me and inspires me everyday.',
      'image'                 =>  'Kristy'
    ),
    array(
      'name'                  =>  'Joel Rivera',
      'position'              =>  'Morale Overall',
      'email'                 =>  'jrivera@floridadm.org',
			'previous_involvement'  =>  'Delegate, Dancer, Morale Captain (two lit years)',
			'major'                 =>  'Political Science',
      'minor'                 =>  'Mass Communication',
			'grad'                  =>  'Having Fun',
      'hometown'              =>  'I was born in the streets of Pennsauken, New Jersey. I currently reside in Ocala Florida!',
      'outside_involvement'   =>  'Back in the day I was a member of the Freshman Leadership Council, a student senator (shoutout District B), and President of the Delta Chi Fraternity. I am currently the Executive Vice President of the Interfraternity Council, and an active member of Florida Blue Key. ',
      'free_time'             =>  'I like to watch vine, play bball with my friends, and watch Netflix! ',
      'fun_fact'              =>  'I eat lays potato chips with every meal. ',
      'favorite_memory'       =>  '~~ I have so many CRAZY great memories, but my favorite would have to be when Adrienne&#39;s mom Erin Williams said that I was Adrienne&#39;s best friend during the closing ceremonies. Over the past two years I have had the pleasure of hanging out with the Williams over High School Dance Marathons, and other DM events. We always play games, sing songs, and dance! I will never forget the moment Mrs. Willaims said that. It completely changed my life! ~~',
      'motivation'            =>  'It&#39;s crazy to see the passion that everyone involved with Dance Marathon has! It is truly inspiring and motivating. Every time we perform the linedance I get chills! It&#39;s amazing to see everyone come together for such a great cause. Every individual involved with DM motivates me to continue to be the change. Dancing, hanging out with families, and random singing also plays a major role in motivating me. Bless up!',
      'image'                 =>  'Joel'
    ),
    array(
      'name'                  =>  'Lindsay Goldman',
      'position'              =>  'Multimedia Overall',
      'email'                 =>  'lgoldman@floridadm.org',
			'previous_involvement'  =>  'Multimedia Captain',
      'major'                 =>  'Marketing',
      'minor'                 =>  'Retailing & Mass Communications',
      'hometown'              =>  'Lake Worth, FL',
      'outside_involvement'   =>  'Panhellenic Council, Danza Dance Company',
      'free_time'             =>  'I love to take photos of anything and everything! I am also a huge baker and spend many nights binge watching Netflix.  ',
      'fun_fact'              =>  'I was a UF Dazzler!',
      'favorite_memory'       =>  'Attending Palm Beach Central High School Dance Marathon this past year was incredible. It is such a great feeling to see the passion that these high school students already have for DM, and dancing with them was also so much fun!',
      'motivation'            =>  'The amazing individuals on my team that surround me each and every day. Their passion for this cause is so inspiring and motivates me to put as much effort as I possibly can for the kids. ',
      'image'                 =>  'Lindsay'
    ),
    array(
      'name'                  =>  'Alexandra Hernandez',
      'position'              =>  'Outreach Overall ',
      'email'                 =>  'ahernandez@floridadm.org',
			'previous_involvement'  =>  'Operations Staff, Recruitment Captain (2 years)',
      'major'                 =>  'Finance',
      'minor'                 =>  'Spanish',
      'hometown'              =>  'Johns Creek, GA',
      'outside_involvement'   =>  'In addition to Dance Marathon, I am an active member of Alpha Omicron Pi where I serve as the Chapter Treasurer. I am also a Panhellenic Counselor for Recruitment 2016 and a member of the Florida Cicerones, the official ambassadors of the University where I have served as the Historian and a Swamp Squad member, hosting potential student athletes. ',
      'free_time'             =>  'I love spending time with my friends and family. I&#39;m a huge fan of live music and traveling whenever I get the chance. ',
      'fun_fact'              =>  'If I could eat pizza everyday, I would',
      'favorite_memory'       =>  'During my first year as a Recruitment Captain, I stood at the front entrance of the Stephen C. O&#39;Connell Center and watched as a group of students played Duck, Duck, Goose with Ayden. He ran around laughing and smiling despite the tremendous obstacles he has faced. In that moment, I saw what pure joy looked like and will forever remember that image. ',
      'motivation'            =>  'Dance Marathon at UF is one of the most inspirational organizations I have ever been a part of. We as students have the humbling and unique privilege to serve these children and their families and give them hope for a better tomorrow. They motivate me to be bigger and be better. Being a part of Dance Marathon goes beyond my four years at the University of Florida. It&#39;s one generation fighting for the next until we no longer have to fight anymore, and there is nothing more motivational than the idea of winning the fight against childhood illness. ',
      'image'                 =>  'zandy'
    ),
    array(
      'name'                  =>  'Bobby Finigan',
      'position'              =>  'Productions Overall',
      'email'                 =>  'bfinigan@floridadm.org',
			'previous_involvement'  =>  'Hospitality Staff, Dancer, Delegate, Operations Captain',
      'grad'                  =>  'Information systmen and Operation Management',
      'major'                 =>  'Finance',
      'hometown'              =>  'Key West, FL',
      'outside_involvement'   =>  'Outside of Dance Marathon, I&#39;m an active member in Florida Blue Key and Theta Chi Fraternity. Additionally, I have been involved in Student Government Productions (Chairman), SG&#39;s Freshman Leadership Council (Director of Finance) and Swamp Party (APC of Transportation). ',
      'free_time'             =>  'I enjoy going to concerts, going out on the boat, camping, working out, and hanging out with family & friends! ',
      'fun_fact'              =>  'My hometown is closer to Cuba than the nearest Wal-Mart!',
      'favorite_memory'       =>  'I am very close with The Wells, a Miracle Family. On a regular basis, I go over to their house and hang with Nathan by playing sports or video games. However, my favorite memory is riding go-karts with Nathan! ',
      'motivation'            =>  'Dance Marathon gives me the opportunity to give back and support those who need it most. Hearing various families miracle stories during DM and at other events encourages me to keep going to fight this cause. These families have gone through so much throughout life and with us, Dance Marathon at UF, we are here to support them and give these families hope. It is an honor to serve as an Overall for DM 2017 and to stand for the kids who can&#39;t. We are one! ',
      'image'                 =>  'Bobby'
    ),
    array(
      'name'                  =>  'Claire Daniel',
      'position'              =>  'Public Relations Overall',
      'email'                 =>  'cdaniel@floridadm.org',
			'previous_involvement'  =>  'Public Relations Captain, Public Relations Assistant Director',
			'grad'                  =>  'Social Media',
      'major'                 =>  'Public Relations',
      'hometown'              =>  'Tampa, FL',
      'outside_involvement'   =>  'Chi Omega Sorority, Project Makeover at UF, FOCUS, UF Health Communications, UF PRSSA',
      'free_time'             =>  'I enjoy spending time with friends and family, especially over good coffee and good meals. I love the having time to relax, indulge in good television, travel, go for runs and visit the beach. ',
      'fun_fact'              =>  'I LOVE doing laundry and I voluntarily do it for others',
      'favorite_memory'       =>  'My favorite DM memory is watching the final numbers come up at the end of the event weekend. These numbers represent all of the hard work put into DM throughout the entirety of the year. They represent a community coming together for one cause. The silence as the numbers go up is chilling, symbolizing the oneness that DM brings to the enormous group of people in the stadium. We are no longer individuals with differences, but a group of people who get to experience what it feels like to be apart of something way bigger than each of ourselves. Then, watching the Miracle Children and their families at the front of the stage burst into tears and celebration ties the entire moment together with a tight little bow. Their reactions are what makes this moment so impactful and so memorable.',
      'motivation'            =>  'What motivates me is recognizing that every moment I am on campus at class, at lunch with a friend, celebrating a team victory, relaxing at my apartment, there is a child and a family stuck at a hospital within a mile of me. There is a child suffering through treatments, a surgery or just a regular visit to the hospital. There is a child who is unable to do whatever activity I am engaged in at the moment because his or her life is centered around fighting an unfair health condition. What motivates me is recognizing this, but also recognizing that there IS something I can do to help. I can make an impact on a child&#39;s life through Dance Marathon. I can contribute to raising funds to support their families, and I can do my best to ensure these children are getting an opportunity to be loved and an opportunity to just be a kid.',
      'image'                 =>  'Claire'
    ),
    array(
      'name'                  =>  'Joey Whelihan',
      'position'              =>  'Recruitment Overall',
      'email'                 =>  'jwhelihan@floridadm.org',
			'previous_involvement'  =>  'Dancer, Delegate, and Recruitment Captain (2 years)',
      'major'                 =>  'Dual Major in Biochemistry and Behavioral & Cognitive Neuroscience',
      'hometown'              =>  'Palm Beach Gardens, FL',
      'outside_involvement'   =>  'Pi Kappa Phi Fraternity, Interfraternity Council, Florida Greek Ambassadors, UF Student Government, Global Medical Brigades, Order of Omega, Best Buddies',
      'free_time'             =>  'In my two minutes of free time every month, I love being with friends, being outdoors, watching the Office/Parks and Rec (really anything on Netflix), and finding new music to listen to.',
      'fun_fact'              =>  'I absolutely hate the sound of squeaky shoes. Literally runs shivers down my spine.',
      'favorite_memory'       =>  'Geez, there&#39;s just so many! I&#39;d have to say that my favorite DM memory happened this past year when I got my hospital band cut off at the end of Dance Marathon 2016. The Ayers family came up to me and said "Thank you so much" and I was just speechless. It was just such a great feeling, but also so motivational because although I had my band cut off and Dance Marathon 2016 had ended, some of these kids can never cut off their hospital band. I was speechless, partially due to the fact that I was holding back tears, but mostly because what I had done the entire year didn&#39;t feel like a job at all. Being a part of Dance Marathon is being part of a family and part of a movement of students determined to make a difference. I can&#39;t think of any better way to spend my four years in college. ',
      'motivation'            =>  'In March of 2016 I was able to shadow a pediatric oncologist. As a pre-med student, I have been searching for a specialty that I could see myself becoming a part of in the future, and due to my involvement with Dance Marathon, I thought pediatric oncology would be a great start. One of the first things the doctor said to me was, "Out of all of the patients that walk through my door, there&#39;s about a 80% chance that they are cured." I thought that this was an astounding number because when someone thinks "pediatric oncologist", they definitely don&#39;t associate that with optimism. However, all I could think about was the other 20% of children that couldn&#39;t be cured - and that&#39;s what Dance Marathon is all about. It&#39;s a symbol of hope for these families and kids that one day we will be at 100% cure rate not just for cancer, but for all childhood illness. Being a part of Dance Marathon, I know that I am making a difference in advancing medicine to ensure that every kid has a right to be a kid. ',
      'image'                 =>  'joey'
    ),
    array(
      'name'                  =>  'Lacy Rubloff',
      'position'              =>  'Sponsorships Overall',
      'email'                 =>  'lrubloff@floridadm.org',
			'previous_involvement'  =>  'Dancer, Marketing Captain, Sponsorship Captain',
			'grad'                  =>  'Management',
      'major'                 =>  'Public Relations',
      'hometown'              =>  'Lake Worth, FL',
      'outside_involvement'   =>  'Alpha Epsilon Phi Sorority, Gator Growl & Homecoming, PRSSA',
      'free_time'             =>  'When I&#39;m not doing school work, I like to hang out with friends, watch my favorite Netflix shows (mostly The Office and Scandal), go to the gym and cook!',
      'fun_fact'              =>  'I&#39;m terrified of bananas',
      'favorite_memory'       =>  'My favorite DM memory is getting to perform with Nick Mullen, one of the amazing miracle children, during the talent show at the event with the rest of the Marketing Team in 2015. Nick has lived his whole life with two different medical conditions that have prohibited him from living a normal life. He was naturally a little nervous before going on stage, but our team rallied around him and performed a song by his favorite artist, Michael Jackson. After the performance, Nick was so proud of himself and in that moment, I realized the effect Dance Marathon has on these children. Besides funding millions of dollars to medical equipment and research, DM makes these kids feel like rockstars. Throughout the year, DM makes them feel normal and loved. It is the best feeling to see their eyes light up at all DM events and witness them come out of their shell and gain confidence that will stay with them for the rest of their lives. ',
      'motivation'            =>  'Knowing that I am part of an organization that works all year long to make a tangible difference inspires me every day. These Miracle Children and their families have gone through unimaginable circumstances and still remain so positive and hopeful. I feel like the least I can do is work every day so that eventually, hopefully in the near future, no child will ever have to suffer again. Dance Marathon is the culmination of thousands of hardworking and passionate students coming together for a common cause. Knowing that I am contributing to leaving a legacy that will hopefully save the lives of children for years to come is truly incredible.',
      'image'                 =>  'Lacy'
    )
  );
?>


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
			<div class="col-md-3">
  			<div class="sub-nav">
          <ul>
            <li><a href="/get-involved">Get Involved</a></li>
            <li><a href="/organizations">Organizations</a></li>
            <li><a href="/delegates">Delegates</a></li>
            <li><a hred="/dancers">Dancers</a></li>
            <li><a href="/ftkrew">FTKrew</a></li>
            <li><a href="/emerging-leaders">Emerging Leaders Program</a></li>
            <li><a href="/captain-teams" >Captain Teams</a></li>
            <li><a class="active">Meet the Overalls</a></li>
          </ul>
        </div>
			</div>
			<div class="col-md-8 col-md-push-1">
      <?php if ($status == "open") { ?>
        <?php
        for($i = 0; $i < count($overalls); $i++) {
          if($i % 3 == 0) {
            echo '<div class="row">';
          } ?>
          <div class="col-sm-4">
            <a href="#" style="display: block;" class="text-center" data-toggle="modal" data-target="#myModal<?php echo $i; ?>">
              <img class="img-circle img-thumbnail" src="<?php echo ('/assets/images/overalls/'.$overalls[$i]['image']); ?>.jpg" alt="..."><br>
              <h3><?php echo $overalls[$i]['name']; ?></h3>
            </a>
            <p style="text-align: center;">
              <em><?php echo $overalls[$i]['position']; ?></em>
              <br><a href="mailto:<?php echo $overalls[$i]['email']; ?>"><?php echo $overalls[$i]['email']; ?></a>
            </p>
          </div>
					<!-- if function bellow = it was undergrad it will click (none do) change to name so that the two next to drew dont click after everyone has info -->
					<?php
					if($overalls[$i]['major']){
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
      <?php } else { echo 'This page is currently closed.'; } ?>
			</div>
		</div>
	</div>
</div>

<?php include("includes/foot.php"); ?>
