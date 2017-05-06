<?php
	$status = "open";
	$GLOBALS['page_title'] = 'Meet The Overalls | Students | Florida Dance Marathon';
	$GLOBALS['parent'] = 'get-involved';
	include("includes/head.php");
	include("includes/navbar.php");

  $overalls = array(
		array(
			'image'                 =>  'Blank',
		),
    array(
			'name'                  =>  'Joel Rivera',
      'position'              =>  'Overall Director',
      'email'                 =>  'jrivera@floridadm.org',
			'previous_involvement'  =>  'Delegate, Dancer, Morale Captain (2 lit years), Morale Overall',
			'major'                 =>  'Political Science',
      'minor'                 =>  'Mass Communication',
			'grad'                  =>  'Having Fun',
      'hometown'              =>  'I was born in the streets of Pennsauken, New Jersey. I currently reside in Ocala Florida!',
      'outside_involvement'   =>  'Back in the day I was a member of the Freshman Leadership Council, a student senator (shoutout District B), and President of the Delta Chi Fraternity. I am currently the Executive Vice President of the Interfraternity Council, and an active member of Florida Blue Key. ',
      'free_time'             =>  'I like to watch vine, play bball with my friends, and watch Netflix! ',
      'fun_fact'              =>  'I eat lays potato chips with every meal. ',
      'favorite_memory'       =>  '~~ I have so many CRAZY great memories, but my favorite would have to be when Adrienne&#39;s mom Erin Williams said that I was Adrienne&#39;s best friend during the closing ceremonies. Over the past two years I have had the pleasure of hanging out with the Williams over High School Dance Marathons, and other DM events. We always play games, sing songs, and dance! I will never forget the moment Mrs. Willaims said that. It completely changed my life! ~~',
      'motivation'            =>  'It&#39;s crazy to see the passion that everyone involved with Dance Marathon has! It is truly inspiring and motivating. Every time we perform the linedance I get chills! It&#39;s amazing to see everyone come together for such a great cause. Every individual involved with DM motivates me to continue to be the change. Dancing, hanging out with families, and random singing also plays a major role in motivating me. Bless up!',
      'image'                 =>  'Joel',
    ),
		array(
			'image'                 =>  'Blank',
		),
    array(
			'name'                  =>  'Rachel Auld',
      'position'              =>  'External Communication Overall',
      'email'                 =>  'rauld@floridadm.org',
			'previous_involvement'  =>  'Dancer, Marathon Relations Captain, Marathon Relations Overall',
      'major'                 =>  'Accounting',
      'hometown'              =>  'Orlando, FL',
      'outside_involvement'   =>  'In addition to my position as Marathon Relations Overall, I am an active member in Kappa Delta Sorority, serving as the assistant treasurer and intramural chair. I served as a Panhellenic counselor (Pi Chi) for possible new members looking to join the Panhellenic community or other organizations on UF&#39;s campus. Also, I am involved in Order of Omega and Foundation for International Education. ',
      'free_time'             =>  ' I enjoy eating a lot of macaroni and cheese, going to the beach, simultaneously napping and netflixing. ',
      'fun_fact'              =>  'I have an identical mirror-image twin sister. ',
      'favorite_memory'       =>  'My favorite DM memory comes from a High School Dance Marathon in 2014. During the middle of the event, Zander and his parents surprised all the high school students and faculty by showing up halfway through and sharing their story. Zander&#39;s family drove over four hours to speak to these students about how Children&#39;s Miracle Network has changed there lives.  The passion and love that was expressed through their story brought everyone to tears. It caused a ripple affect and electrified the schools campus on what #FTK really means.',
      'motivation'            =>  'Children&#39;s Miracle Network and Dance Marathon at the University of Florida. This organization gives me the inspiration and opportunity to help thousands of children and their families. ',
      'image'                 =>  'RachelA',
    ),
    array(
      'name'                  =>  'Madison Grasty',
      'position'              =>  'Internal Communication Overall',
      'email'                 =>  'mgrasty@floridadm.org',
			'previous_involvement'  =>  'Dancer, Recruitment Captain, Assistant Director of Campus Relations',
      'major'                 =>  'Information Systems & Operations Management',
      'hometown'              =>  'Orlando, FL',
      'outside_involvement'   =>  'Alpha Chi Omega Sorority, Warrington Diplomats',
      'free_time'             =>  'I love to spend time with family and friends, try new foods, and travel around the world. I also love spending time at the beach, watching Netflix (obviously), and eating anything Chocolate related!',
      'fun_fact'              =>  'I can&#39;t go a single day without making my bed at school, but when I come home - all bets are off.',
      'favorite_memory'       =>  'While I can&#39;t choose one specific year, my favorite Dance Marathon memory usually takes place right after the total number is revealed. While everyone is in complete shock, I take the time to look around and watch the Miracle Families. They&#39;re hugging, crying, and talking with one another - as they are in shock of the number that was just raised. Then, moments later, once that initial shock has worn off - students begin to surround them, squeezing them as tight as possible and crying in shock alongside them. Each year, I am amazed by this outpouring of love and support that is shown by both UF students and Miracle Families. It is a reminder that what we do truly does matter, and that what we do truly does make millions of miracles in these children&#39;s lives.',
      'motivation'            =>  'While my greatest motivation is all of our Miracle Children (obviously!), I am also motivated by every individual that stands and fights For The Kids. While that may seem cliché since there are over 7,000 students on campus fighting For The Kids, each individual truly does inspire me. It is amazing to see college students using their time, effort, and money to raise funds and awareness For The Kids at UF Health Shands Children&#39;s Hospital. The Miracle Children are the most deserving individuals I&#39;ve ever had the privilege to meet, and fighting for them means fighting for their opportunity to have a normal childhood, without weekly treatments, medications, and hospital stays. I believe it is our duty in life to give back to others, and participating in Dance Marathon at the University of Florida is the greatest way to do so.',
      'image'                 =>  'Madison',
    ),
    array(
			'name'                  =>  'Allie Becher',
      'position'              =>  'Finance Overall',
      'email'                 =>  'abecher@floridadm.org',
			'previous_involvement'  =>  'Dancer, Finance Captain, Fundraising Overall',
      'major'                 =>  'Finance',
      'hometown'              =>  'Boca Raton, FL',
      'outside_involvement'   =>  'Delta Gamma Chapter Management Team, Gator Student Investment Fund ',
      'free_time'             =>  'I like to paint, exercise, read, and travel ',
      'fun_fact'              =>  'I&#39;m a die-hard Bruce Springsteen fan',
      'favorite_memory'       =>  'My favorite DM memory is walking into the O&#39;Dome before Opening Ceremonies during my first year participating. The atmosphere was euphoric, with the Miracle Children giving high fives by the door and the Captains cheering us on. Every single person in sight was beaming and so excited for the next 26.2 hours, and it was very apparent how much passion was truly behind this organization. ',
      'motivation'            =>  'Making people smile :)',
      'image'                 =>  'Allie',
    ),
		array(
      'name'                  =>  'Joey Whelihan',
      'position'              =>  'Membership Overall',
      'email'                 =>  'jwhelihan@floridadm.org',
			'previous_involvement'  =>  'Dancer, Delegate, Recruitment Captain (2 years), Recruitment Overall Director',
			'grad'                  =>   'Medicine',
			'major'                 =>  'Dual Major in Biochemistry and Behavioral & Cognitive Neuroscience',
      'hometown'              =>  'Palm Beach Gardens, FL',
      'outside_involvement'   =>  'Florida Blue Key',
      'free_time'             =>  'When I&#39;m not studying or at DM events, I love running, working out, and watching new shows! Survivor, Big Brother, House of Cards, House, Shameless, and The Office are all some of my favorites.',
      'fun_fact'              =>  'I absolutely hate the sound of squeaky shoes. It literally runs shivers down my spine.',
      'favorite_memory'       =>  'Geez, there&#39;s just so many! I&#39;d have to say that my favorite DM memory happened this past year when I got my hospital band cut off at the end of Dance Marathon. Mateo&#39;s mom, Mari, came up to me to cut off my band while I was on-stage, and we made eye contact and both immediately started crying. This was so impactful because I had gotten close with their family throughout the year, and the symbolism of cutting of my band meant so much to me, despite the fact that Mateo was born with HLHS and still has many more hospital bands to wear in the future. It was that moment, moreso than the Total Reveal, which really mattered more to me than anything else.',
      'motivation'            =>  'Through going into medicine, I have chosen to devote my life to helping others. Participating in Dance Marathon and encouraging others to do so will help me to better assist my patients in the future. The funds that we provide buy things that I could never provide like being able to stay with a child overnight or Child Life Services.
In March of 2016 I was able to shadow a pediatric oncologist. One of the first things the doctor said to me was, "Out of all of the patients that walk through my door, there&#39;s about a 80% chance that they are cured." I thought that this was an astounding number because when someone thinks "pediatric oncologist", they definitely don&#39;t associate that with optimism. However, all I could think about was the other 20% of children that couldn&#39;t be cured - and that&#39;s what Dance Marathon is all about. It&#39;s a symbol of hope for these families and kids that one day we will be at 100% cure rate not just for cancer, but for all childhood illness. Being a part of Dance Marathon, I know that I am making a difference in advancing medicine to ensure that every kid has a right to be a kid.',
      'image'                 =>  'Joey',
    ),
    array(
      'name'                  =>  'Sam Regula',
      'position'              =>  'Creative Development Overall',
      'email'                 =>  'sregula@floridadm.org',
      'previous_involvement'  =>  'Staff Member, Dancer, Creative Development Captain',
      'major'                 =>  '',
      'hometown'              =>  'Mount Dora, FL',
      'outside_involvement'   =>  'In addition to my involvement with Dance Marathon, I was an active member of various organizations on campus.  I was a member of Alpha Epsilon Phi, Panhellenic Council (Panhellenic Counselor), Student Government Productions (Assistant Vice Chair of Marketing), Impact Party (APC of Graphic Design), and University of Florida Housing and Residence Department (Marketing Student Assistant)',
      'free_time'             =>  'When I am not attached to my computer, I like to find a new adventure around town or burning food while I pretend to be a chef.',
      'fun_fact'              =>  'For 6 years of my life (from ages 14-20), I spent my summers working as a scenic artist for theme parks like Disney and Universal! Through this job I got to do so many awesome and creative things! I&#39;ve worked on everything from designing and painting the Halloween Horror Nights houses at Universal, to sculpting pieces for the new Avatar section in Animal Kingdom, and even helping with the dragon on top of Gringotts Bank in The Wizarding World of Harry Potter!',
      'favorite_memory'       =>  'As I wandered into Shands children’s hospital a woman stopped me and said “Thank You”. As she saw the confused look on my face she said again, now louder: “Thank you for all the hard work you did and will do. We are truly thankful, because of you guys; I still have my son with me”. I then realized that she was talking about my involvement with the organization. I did not know this woman nor she knew me but at that moment I could see that she was truly thankful. That’s when I realized that as much as all the work we do was not directly at the with the patients, it was still improving and saving lives of those at Shands children’s Hospital.',
      'motivation'            =>  'Seeing and realizing that the miracles we create are not just for better technology or research but the miracles of hope. Dance Marathon at the University of Florida has given hope and happiness to a lot of families around the state! That truly makes me happy and hope that I can help create many more miracles like these!',
      'image'                 =>  'Sam4',
    ),
    array(
      'name'                  =>  'Eric Rice',
      'position'              =>  'Dancer Relations Overall',
      'email'                 =>  'erice@floridadm.org',
      'previous_involvement'  =>  'Dancer, Dancer Relations Captain (2 years)',
			'major'                 =>  '',
      'hometown'              =>  'Gulf Breeze, Florida',
      'outside_involvement'   =>  'In addition to Dance Marathon, I am an active member of Footprints which involves volunteering with the patient population in the Pediatric Immunocompromised Unit at Shands Children&#39;s Hospital. I am also a second year Panhellenic Counselor serving female Gators and connecting them to the UF community. ',
      'free_time'             =>  'I love spending time with my friends and family. I also enjoy traveling, exercising, and obsessing over Tim Riggins while watching Friday Night Lights.',
      'fun_fact'              =>  'I legitimately thought I could open the portal to Halloweentown when I was a kid.',
      'favorite_memory'       =>  'This year my sister and I were not able to go home for Easter. My sister was a Family Relations Captain this past year, and she was paired with the Ayres family. The Ayres invited us over for Easter, and I just really realized in that moment when we were all eating dinner together that DM has given me a second family. There really is nothing that compares to the joy that comes from giving to others.',
      'motivation'            =>  'The people around me motivate me. The kids that I volunteer with in the hospital motivate me. We aren&#39;t meant to fight these battles alone, and one thing we all can give is our time. I 100% believe we are called to serve others. I continuously give my best because of the people I work with, the families that I have been so grateful to meet, and all of the people that support this cause. ',
      'image'                 =>  'Eric',
    ),
		array(
      'name'                  =>  'Jake Dube',
      'position'              =>  'Family Relations Overall',
      'email'                 =>  'jdube@floridadm.org',
      'previous_involvement'  =>  'Dancer, Family Relations Captain, and Assistant Director of Family Events',
      'major'                 =>  'Management',
      'hometown'              =>  'Plant City, FL',
      'outside_involvement'   =>  'Outside of Dance Marathon, I serve as the Executive Vice President of the Interfraternity Council and I am an active member in Florida Blue Key. I have served as the President and Recruitment of the Delta Chi Fraternity. I was also the founder and president of Special Olympics College here at the University of Florida. ',
      'free_time'             =>  'Play basketball, go to the beach, watch netflix, and hang out with Joel. ',
      'fun_fact'              =>  'I am ambidextrous, I literally switch which I hand I use for everything. ',
      'favorite_memory'       =>  'My favorite Dance Marathon memory comes from this past year. My fraternity was paired with Kendall "Miss K" Lewis and we had the pleasure of getting to know her over the year. One day when we had an ice cream fundraiser for her at Sweet Dreams, and she was complaining about doing her homework and I made her a bet that if she got straight A&#39;s on her report card, she could pie me at DM. She never let me live it down throughout the year, she constantly reminded me of the bet, and what do you know she got every perfect mark on her report card. Kendall and her sister Taylor got to pie me each at DM with orange and blue pies. I may have been sticky for the rest of the event, but I know they loved every second of it! It&#39;s the little things that make a difference to these kids, and with that being said Kendall and the Lewis family have become great friends, even family to me! ',
      'motivation'            =>  'The Kids! What we accomplish for the kids and their families is truly remarkable! The Miracle Children year in and year out continue to be the inspiration for myself and the a light upon on our organization. Every time that I hear a Miracle Story or when I get the chance to meet a new Miracle Family brings chills and aspirations for a greater tomorrow. The bravery and strength of the Miracle Children and their families truly inspire me to keep going and keep fighting because even when the odds were against them they didn&#39;t give up. These children and these families have taught me so many life lessons that I will carry on with for the rest of my life and for that I am forever grateful. Grateful For The Kids, grateful for the families, grateful for the smiles, and grateful for the memories. That&#39;s what motivates me!',
      'image'                 =>  'Dube',
    ),
    array(
      'name'                  =>  'Arie Hariton',
      'position'              =>  'Fundraising Overall',
      'email'                 =>  'ahariton@floridadm.org',
			'previous_involvement'  =>  'Fundraising Captain',
      'major'                 =>  'Finance',
      'hometown'              =>  'Caracas, Venezuela',
      'outside_involvement'   =>  'Florida Blue Key, Reitz Scholars, Lambda Chi Alpha, Florida Leadership Academy, Heavener CAP Mentor',
      'free_time'             =>  'I enjoy sunsets and long walks on the beach.',
      'fun_fact'              =>  'I&#39;ve stepped foot on all seven continents.',
      'favorite_memory'       =>  'Watching the Miracle Mural go up during DM at UF 17!',
      'motivation'            =>  'To use and develop my talents to help others and shape the world around me.',
      'image'                 =>  'Arie',
    ),
    array(
      'name'                  =>  'Ally Jones',
      'position'              =>  'Hospitality Overall',
      'email'                 =>  'ajones@floridadm.org',
			'previous_involvement'  =>  'Dancer, Hospitality Captain (2 years)',
      'major'                 =>  'Finance',
      'hometown'              =>  'Sarasota, FL',
      'outside_involvement'   =>  'Delta Zeta, American Marketing Association, ACORN Clinic',
      'free_time'             =>  'Rollerblade or run!',
      'fun_fact'              =>  'I am a certified whitewater rafting guide in Colorado.',
      'favorite_memory'       =>  'Hospitality team outting with Miss K and her family at the local trampoline park!',
      'motivation'            =>  'Progress, people and powerful quotes.',
      'image'                 =>  'Ally',
    ),
		array(
			'name'                  =>  'Kristina Brennan',
			'position'              =>  'Leadership Development Overall',
			'email'                 =>  'kbrennan@floridadm.org',
			'previous_involvement'  =>  'Dancer, Recruitment Captain',
			'major'                 =>  'Criminology',
			'hometown'              =>  'Weston, FL',
			'outside_involvement'   =>  'In addition to my position on the Overall Team, I am an active member of Alpha Omicron Pi. I have volunteered in the Emergency Room, Surgical Unit, and Pediatric Unit at Shands Hospital, as well as previously served as the Director for Health Organizations with Gators March for Babies and the Internal Director for Florida Greek Ambassadors. I remain involved with Best Buddies and TOPSoccer, and previously served as both a UF Mentor and Director of Tickets and Honored Guests for Gator Growl and Homecoming. In addition, I have experience as a Teaching Assistant for a multitude of classes and had an international internship in Belgium for a summer with a focus in marketing and medical research.',
			'free_time'             =>  'I will be at the beach!',
			'fun_fact'              =>  'I was a Spice Girl for Halloween when I was five. Thanks mom.',
			'favorite_memory'       =>  'My favorite DM memory is when one of my best friends surprised me by letting me know that she was my dancer buddy at the event. It was honestly what got me through it. Sometimes you are fortunate enough to meet people who forever change you, and I believe that Dance Marathon acts as this type of catalyst for all involved.',
			'motivation'            =>  'Breaking precedent. Showing the world what it means to be involved with Dance Marathon at the University of Florida.',
			'image'                 =>  'Kristina',
		),
    array(
      'name'                  =>  'Haley Schavemaker ',
      'position'              =>  'Marathon Relations Overall',
      'email'                 =>  'hschavemaker@floridadm.org',
			'previous_involvement'  =>  'Dancer, Marathon Relations Captain, Assistant Director Marathon Relations',
      'major'                 =>  'Public Health',
      'hometown'              =>  'Orlando, FL',
      'outside_involvement'   =>  'Dream Team, Florida Cicerones, and Project Makeover',
      'free_time'             =>  'I love to run, read and be outside!!',
      'fun_fact'              =>  'I do a fantastic Stitch impersonation.',
      'favorite_memory'       =>  'Watching Wellington High School become the 5th largest Mini Marathon Program nationwide with a total of $82,444.17 fundraised in 2017!!!',
      'motivation'            =>  'Seeing high school students love and grow Dance Marathon culture at their schools, and bring new passion and ideas to Dance Marathon at the University of Florida. We truly are one generation fighting for the next.',
      'image'                 =>  'Haley',
    ),
    array(
      'name'                  =>  'Hannah Jones',
      'position'              =>  'Merchandise Overall ',
      'email'                 =>  'hjones@floridadm.org',
			'previous_involvement'  =>  'Operations Staff, Hospitality Staff, Merchandise Captain',
			'grad'                  =>  'Entrepreneurship',
      'major'                 =>  '',
      'minor'                 =>  'Entrepreneurship',
      'hometown'              =>  'Santa Rosa Beach, FL',
      'outside_involvement'   =>  'Outside of my involvement with Dance Marathon I am involved in my sorority Pi Beta Phi where I have served as a member of the Ritual Committee, Membership Board, and on the executive council as the Vice President of Fraternal Development. ',
      'free_time'             =>  'In my free time I like to spend time with family and friends preferably on the beach or riding around in my Jeep with the top down.',
      'fun_fact'              =>  'I have a strange addiction with cheese and Churros, separately of course',
      'favorite_memory'       =>  'My favorite Dance Marathon memory was standing together as a team with the Merchandise Captains during closing ceremonies. We all knew that a year of hard work, laughs, and countless hours at the DM Store came down to this moment, the total that was going to be raised on the stage and the lives we will have impacted. When that total was raised and we all started sobbing it made everything worth it. ',
      'motivation'            =>  'I don&#39;t think anyone can meet a miracle child or their family and not be inspired to do everything they can to make their lives better. Seeing how strong these kids and their families are everyday drives me to give back everything I can to this organization and to these families. Their constant smiles despite their hardships motivates me and inspires me everyday.',
      'image'                 =>  'Hannah',
    ),
    array(
      'name'                  =>  'Scout Farrow',
      'position'              =>  'Morale Overall',
      'email'                 =>  'sfarrow@floridadm.org',
			'previous_involvement'  =>  'Dancer, Morale Captain (2 years)',
			'major'                 =>  'Medical Anthropology',
      'hometown'              =>  'Windermere, FL',
      'outside_involvement'   =>  'In addition to Dance Marathon, I volunteer on the 10th floor of UF Health Shands Children&#39;s Hospital through Dream Team. I have also played on the UF club volleyball team.',
      'free_time'             =>  'I enjoy spending time with my friends, reading, and going to concerts. I also love to travel and be outdoors -- especially in Paris with a lion costume on.',
      'fun_fact'              =>  'I was named after the young girl in the book To Kill a Mockingbird.',
      'favorite_memory'       =>  'Every year, Dance Marathon is my favorite weekend of the year. The entire weekend and feeling that Dance Marathon gives me is hands down my favorite part of college. However, if I had to pick a specific moment, it would be the last Line Dance from Dance Marathon 2017. Morale teaches the Line Dance throughout the event, and it is amazing to watch from the side stage as over 800 dancers learn it. By the end of the event everyone is so full of emotion and watching everyone do the Line Dance teary-eyed and in unison is amazing.',
      'motivation'            =>  'Every time that I see one of the Miracle Children smile, it motivates me and reminds me why we do what we do. The fact that we are able to come together as a community and put smiles on these childrens&#39; faces is constant motivation. I feel so lucky that I am surrounded by an organization, children, and friends that never cease to inspire and motivate me. Dance Marathon has provided me with a lifelong goal to help others and fight for an end to childhood illness in Gainesville and all over the world.',
      'image'                 =>  'Scout',
    ),
    array(
      'name'                  =>  'Marni Rochkind',
      'position'              =>  'Multimedia Overall',
      'email'                 =>  'mrochkind@floridadm.org',
			'previous_involvement'  =>  'Multimedia Captain',
      'major'                 =>  'Public Relations',
      'hometown'              =>  'Ashburn, VA',
			'outside_involvement'   =>  '',
      'free_time'             =>  'I take photos :)',
      'fun_fact'              =>  'I collect records and love all things rock n roll!',
      'favorite_memory'       =>  'All of the amazing people that I&#39;ve met through this organization and am still meeting today.',
      'motivation'            =>  'Making others happy!',
      'image'                 =>  'Marni',
    ),
    array(
      'name'                  =>  'Analiese Wagner',
      'position'              =>  'Outreach Overall ',
      'email'                 =>  'awagner@floridadm.org',
			'previous_involvement'  =>  'Dancer, Marathon Relations Captain, Marathon Relations Assistant Director',
      'major'                 =>  'Mathematics and Economics',
      'hometown'              =>  'Gainesville, FL',
      'outside_involvement'   =>  'Outside of DM I am a member of Gamma Phi Beta Sorority and have served as an Assistant New Member Educator and Parliamentarian. I have been involved with the Panhellenic Council as a Panhellenic Counselor for two years, and as a member of the Judicial Board and Something of Value Committee. I have been a member of the Club Gymnastics team since my freshman year and have served as the Community Service Chair, Meet Co-Chair, and Alumni Correspondent. I am also a member of the Honors Program, Order of Omega, and Florida Blue Key, and have been active in several local City Commission and Mayoral campaigns.',
      'free_time'             =>  'I enjoy reading, hanging out with my family, and being outdoors.',
      'fun_fact'              =>  'I am lactose intolerant.',
      'favorite_memory'       =>  'Last year my team got to hang out with Ayden and his family at Get Air. I had a blast jumping on the trampolines and playing in the foam pit with him. Ayden inspires me because he is so fearless and so energetic! At the end of the night, Ayden put me on his "best friends list" and gave me a hug, and it absolutely made my day (week, year, life)! Spending time with Miracle Children always makes me feel so fulfilled and connected with our cause.',
      'motivation'            =>  'Spending time with my family motivates me. My cousins have amazing, adorable children and they bring so much joy into my life. When I look at them and realize how easily one of them could be experiencing what our Miracle Children do, and how much different their lives would be because of it, I am inspired to work harder for our cause. I am always inspired by spending time with Miracle Families and knowing that the work we are doing makes their battles easier and gives their children a better chance at a normal, healthy life.',
      'image'                 =>  'Annie',
    ),
    array(
      'name'                  =>  'Shane Hanney',
      'position'              =>  'Productions Overall',
      'email'                 =>  'shanney@floridadm.org',
			'previous_involvement'  =>  'Dancer, Operations Captain, Assistant Director of Logistics',
      'major'                 =>  'Civil Engineering',
      'hometown'              =>  'Ponte Vedra Beach, FL',
      'outside_involvement'   =>  'President of the Interfraternity Council',
      'free_time'             =>  'I could tell you if I had any...',
      'fun_fact'              =>  'Coming up with fun facts gives me severe anxiety.',
      'favorite_memory'       =>  'When Sage celebrated his birthday at my fraternity house earlier this year!',
      'motivation'            =>  'My family!',
      'image'                 =>  'Blank',
    ),
    array(
      'name'                  =>  'Emily Boulter',
      'position'              =>  'Public Relations Overall',
      'email'                 =>  'eboulter@floridadm.org',
			'previous_involvement'  =>  'Public Relations Captain, Public Relations Assistant Director',
      'major'                 =>  '',
      'hometown'              =>  'Tampa, FL',
      'outside_involvement'   =>  'Chi Omega Sorority, Project Makeover at UF, FOCUS, UF Health Communications, UF PRSSA',
      'free_time'             =>  'I enjoy spending time with friends and family, especially over good coffee and good meals. I love the having time to relax, indulge in good television, travel, go for runs and visit the beach. ',
      'fun_fact'              =>  'I LOVE doing laundry and I voluntarily do it for others',
      'favorite_memory'       =>  'My favorite DM memory is watching the final numbers come up at the end of the event weekend. These numbers represent all of the hard work put into DM throughout the entirety of the year. They represent a community coming together for one cause. The silence as the numbers go up is chilling, symbolizing the oneness that DM brings to the enormous group of people in the stadium. We are no longer individuals with differences, but a group of people who get to experience what it feels like to be apart of something way bigger than each of ourselves. Then, watching the Miracle Children and their families at the front of the stage burst into tears and celebration ties the entire moment together with a tight little bow. Their reactions are what makes this moment so impactful and so memorable.',
      'motivation'            =>  'What motivates me is recognizing that every moment I am on campus at class, at lunch with a friend, celebrating a team victory, relaxing at my apartment, there is a child and a family stuck at a hospital within a mile of me. There is a child suffering through treatments, a surgery or just a regular visit to the hospital. There is a child who is unable to do whatever activity I am engaged in at the moment because his or her life is centered around fighting an unfair health condition. What motivates me is recognizing this, but also recognizing that there IS something I can do to help. I can make an impact on a child&#39;s life through Dance Marathon. I can contribute to raising funds to support their families, and I can do my best to ensure these children are getting an opportunity to be loved and an opportunity to just be a kid.',
      'image'                 =>  'Emily',
    ),
    array(
      'name'                  =>  'Kris Frydenberg',
      'position'              =>  'Recruitment Overall',
      'email'                 =>  'kfrydenberg@floridadm.org',
			'previous_involvement'  =>  'Dancer (2 years), Recruitment Captain',
      'major'                 =>  'Industrial and Systems Engineering',
      'hometown'              =>  'Orlando, FL',
      'outside_involvement'   =>  'Pi Lambda Phi Fraternity, Institute of Industrial Engineers',
      'free_time'             =>  'In the little free time I have, I love playing darts with my roommates (I&#39;m easily the best in the house), working out, and going on all kinds of adventures.',
      'fun_fact'              =>  'My mom is from Denmark and my dad is from Norway so I&#39;ve spent the majority of my summers traveling Europe! ',
      'favorite_memory'       =>  'My favorite DM memory is when Danny Pinder, the Recruitment Team&#39;s Miracle Child my Junior year, came to Dance Marathon after being in the hospital for 120 days. I remember as Opening Ceremonies began a friend of mine leaned over and said, “They didn&#39;t tell Danny that DM was this weekend. He&#39;s not allowed to leave the hospital. They didn&#39;t want him to feel like he&#39;s missing out.” This broke my heart. Danny would be missing the best weekend of the year without even knowing it had come and gone. But then a few minutes later, after incredible build-up, it was announced that Danny would be in attendance. The hospital let him leave for just a few hours to be able to attend part of the event. Dance Marathon brings him so much joy so I know being there for even just a few hours made an incredible impact on him, just as it did for me.',
      'motivation'            =>  'My biggest motivators are my parents. They have provided me with so much– allowing me to travel the world, teaching me kindness and humility, and giving me the opportunity to attend this incredible school. They have done so much in their lives, they have been so happy, and that&#39;s how I want to live. The fact that they continuously believe in me, even when I don’t believe in myself, motivates me to do more. They&#39;ve taught me to never give up, to pursue things I&#39;m passionate about, and to show love and kindness in all areas of my life. So that&#39;s what I do.',
      'image'                 =>  'Kris',
    ),
    array(
      'name'                  =>  'Samantha Kitroser',
      'position'              =>  'Sponsorships Overall',
      'email'                 =>  'skitroser@floridadm.org',
			'previous_involvement'  =>  'Dancer, Sponsorship Captain',
      'major'                 =>  'Advertising',
      'hometown'              =>  'Palm Beach Gardens, FL',
      'outside_involvement'   =>  'The Agency UF, Alpha Epsilon Phi, TripAdvisor Internship',
      'free_time'             =>  'I love spending time at the beach, playing with my dog, going to the gym, and traveling!',
      'fun_fact'              =>  'I&#39;m the shortest member on the Overall Team (5 feet TALL)',
      'favorite_memory'       =>  'My favorite DM memory is getting to perform with Nick Mullen, one of the amazing miracle children, during the talent show at the event with the rest of the Marketing Team in 2015. Nick has lived his whole life with two different medical conditions that have prohibited him from living a normal life. He was naturally a little nervous before going on stage, but our team rallied around him and performed a song by his favorite artist, Michael Jackson. After the performance, Nick was so proud of himself and in that moment, I realized the effect Dance Marathon has on these children. Besides funding millions of dollars to medical equipment and research, DM makes these kids feel like rockstars. Throughout the year, DM makes them feel normal and loved. It is the best feeling to see their eyes light up at all DM events and witness them come out of their shell and gain confidence that will stay with them for the rest of their lives.',
      'motivation'            =>  'Knowing that I am part of an organization that works all year long to make a tangible difference inspires me every day. These Miracle Children and their families have gone through unimaginable circumstances and still remain so positive and hopeful. I feel like the least I can do is work every day so that eventually, hopefully in the near future, no child will ever have to suffer again. Dance Marathon is the culmination of thousands of hardworking and passionate students coming together for a common cause. Knowing that I am contributing to leaving a legacy that will hopefully save the lives of children for years to come is truly incredible.',
      'image'                 =>  'Blank',
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
					<!-- if function below = it was undergrad it will click (none do) change to name so that the two next to drew dont click after everyone has info -->
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
